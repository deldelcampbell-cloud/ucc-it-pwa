
# UCC IT Student Portal

## Project Overview

The UCC IT Student Portal is a Progressive Web Application
(PWA) developed for the Department of Information Technology
at the University of the Commonwealth Caribbean (UCC).

The application provides students with convenient access
to departmental information, academic courses, admissions
requirements, staff contact details, and university
social media platforms.

## Group Members

- Delisha Campbell
- Romaine Kerr

## Features

### 1. Student Dashboard
- Modern navy-and-gold interface
- Sidebar navigation
- Quick access to departmental services
- Responsive layout for desktop and mobile devices

### 2. Faculty and Staff Directory
- Four departmental staff profiles
- Staff photographs
- Names and positions
- Telephone and email contact information

### 3. IT Programme Courses
- Ten courses from the UCC BSc. Information Technology curriculum
- Course codes and names
- Credit hours
- Prerequisites
- Course descriptions

### 4. Admissions
- Information Technology admission requirements
- BSc. Information Technology programme information
- Links to additional programmes
- Official UCC undergraduate application link

### 5. Social Media
- Facebook
- Instagram
- YouTube
- X (Twitter)
- LinkedIn
- TikTok
- Threads
- Embedded social media content

### 6. Progressive Web App Features
- Installable on supported devices
- Web app manifest
- Service worker
- Offline access to cached departmental pages
- Offline access to staff photographs
- Responsive mobile interface

### 7. Email Contact
- Floating email button for contacting
  the Head of the IT Department

## Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- Laravel Framework
- MySQL
- Blade Templates
- Progressive Web App technologies
- Font Awesome Icons
- XAMPP

## Installation Instructions

1. Install PHP, Composer, MySQL, and Node.js.
2. Download or clone the project.
3. Open a terminal in the project directory.
4. Install PHP dependencies:

   composer install

5. Create the environment configuration:

   cp .env.example .env

6. Update the database settings in .env:

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ucc_it_pwa
   DB_USERNAME=root
   DB_PASSWORD=

   Adjust the username, password, and port for your
   local MySQL configuration.

7. Generate the application key:

   php artisan key:generate

8. Create the MySQL database named ucc_it_pwa.

9. Import the SQL backup from:

   database-backup/ucc_it_pwa.sql

   Import the file using phpMyAdmin.
   Do not run destructive migrations after importing.

10. Start the Laravel development server:

    php artisan serve

11. Open the local address displayed in the terminal,
    normally http://127.0.0.1:8000.

## PWA Installation

1. Open the application in a supported browser.
2. Select the browser's Install App option.
3. Launch the UCC IT Portal as a standalone application.
4. Visit the main pages online to cache their content.
5. Previously cached pages can then be viewed offline.

Note: External social media feeds and links require
an internet connection.

## Academic Information

Institution:
University of the Commonwealth Caribbean

Department:
Information Technology

Programme:
Bachelor of Science in Information Technology

Academic Year:
2026-2027

Project:
UCC IT Web App

## Purpose

This project was developed as an academic assignment
to demonstrate the use of Laravel, database integration,
responsive web design, and Progressive Web App technologies
in a departmental information system.
