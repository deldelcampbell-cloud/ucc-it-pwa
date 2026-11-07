<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'course_code' => 'ITT107',
                'course_name' => 'Computer Information Essentials',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Introduces essential computer concepts, information systems, hardware, software and IT fundamentals.',
            ],
            [
                'course_code' => 'ITT103',
                'course_name' => 'Programming Techniques',
                'credits' => 3,
                'prerequisites' => 'ITT107',
                'description' => 'Develops programming logic, algorithms, problem-solving and foundational coding techniques.',
            ],
            [
                'course_code' => 'ITT203',
                'course_name' => 'Data Structures and File Mgt. I',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Explores data structures, file organization and methods for storing and managing information.',
            ],
            [
                'course_code' => 'ITT201',
                'course_name' => 'Data Communication & Networks I',
                'credits' => 3,
                'prerequisites' => 'ITT107',
                'description' => 'Introduces computer networks, communication protocols, network devices and data transmission.',
            ],
            [
                'course_code' => 'ITT200',
                'course_name' => 'Object Oriented Programming using C++',
                'credits' => 3,
                'prerequisites' => 'ITT203',
                'description' => 'Explores classes, objects, inheritance, encapsulation and object-oriented programming using C++.',
            ],
            [
                'course_code' => 'ITT212',
                'course_name' => 'Python Programming',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Introduces Python programming, control structures, functions and practical problem-solving.',
            ],
            [
                'course_code' => 'ITT210',
                'course_name' => 'Database Management Systems',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Covers database design, relational models, SQL queries and database management concepts.',
            ],
            [
                'course_code' => 'ITT309',
                'course_name' => 'Computer Security',
                'credits' => 3,
                'prerequisites' => 'ITT201',
                'description' => 'Introduces cybersecurity principles, threats, vulnerabilities and information protection.',
            ],
            [
                'course_code' => 'ITT318',
                'course_name' => 'Cloud Computing',
                'credits' => 3,
                'prerequisites' => 'ITT201',
                'description' => 'Explores cloud infrastructure, service models, deployment strategies and cloud technologies.',
            ],
            [
                'course_code' => 'ITT420',
                'course_name' => 'Mobile Application Development',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Introduces the design, development and deployment of applications for mobile devices.',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['course_code' => $course['course_code']],
                $course
            );
        }
    }
}
