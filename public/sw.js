
"use strict";

const CACHE_NAME = "ucc-it-portal-v2";

const OFFLINE_URL = "/offline.html";

const APP_PAGES = [
    "/",
    "/courses",
    "/directory",
    "/admissions",
    "/social-media",
    "/offline.html"
];


const APP_ASSETS = [
    "/images/ucc-crest.png",
    "/images/ucc-campus.jpg",
    "/images/staff/sherida-levy.jpg",
    "/images/staff/otis-osbourne.jpg",
    "/images/staff/craig-wilmot.jpg",
    "/images/staff/peter-ndajah.jpg",
    "/logo.png"
];


// Install the service worker and cache app pages.
self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(async (cache) => {
            // Cache the offline fallback first.
            await cache.add(OFFLINE_URL);

            // Cache each page and asset independently.
            // One missing file will not break installation.
            const resources = [
                ...APP_PAGES.filter(url => url !== OFFLINE_URL),
                ...APP_ASSETS
            ];

            await Promise.all(
                resources.map(async (url) => {
                    try {
                        await cache.add(url);
                    } catch (error) {
                        console.warn("Could not cache:", url);
                    }
                })
            );
        }).then(() => self.skipWaiting())
    );
});

// Serve cached pages when offline.
self.addEventListener("fetch", (event) => {
    const request = event.request;

    if (request.method !== "GET") {
        return;
    }

    if (new URL(request.url).origin !== self.location.origin) {
        return;
    }

    if (request.mode === "navigate") {
        event.respondWith(
            fetch(request)
                .then((response) => {
                    if (response.ok) {
                        const copy = response.clone();

                        event.waitUntil(
                            caches.open(CACHE_NAME).then(cache => {
                                return cache.put(request, copy);
                            })
                        );
                    }

                    return response;
                })
                .catch(async () => {
                    return (
                        await caches.match(request) ||
                        await caches.match(OFFLINE_URL) ||
                        Response.error()
                    );
                })
        );

        return;
    }

    event.respondWith(
        caches.match(request).then((cachedResponse) => {
            return cachedResponse || fetch(request);
        })
    );
});

// Remove old caches.
self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then(async (cacheNames) => {
            await Promise.all(
                cacheNames
                    .filter(name => name !== CACHE_NAME)
                    .map(name => caches.delete(name))
            );

            await self.clients.claim();
        })
    );
});
