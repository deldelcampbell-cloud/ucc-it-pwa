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
                'course_code' => 'ENG109',
                'course_name' => 'Academic Writing I',
                'credits' => 3,
                'prerequisites' => 'ENG002 English for Academic Purposes / CSEC English A (Grade 1 or 2)',
                'description' => 'Develops academic writing, communication and research skills.',
            ],
            [
                'course_code' => 'ITT107',
                'course_name' => 'Computer Information Essentials',
                'credits' => 3,
                'prerequisites' => 'None (Advanced Standing)',
                'description' => 'Introduces essential computer information technology concepts and skills.',
            ],
            [
                'course_code' => 'MTH108',
                'course_name' => 'Discrete Mathematics I',
                'credits' => 3,
                'prerequisites' => 'None (Advanced Standing)',
                'description' => 'Covers mathematical concepts used in computing and information technology.',
            ],
            [
                'course_code' => 'ITT103',
                'course_name' => 'Programming Techniques',
                'credits' => 3,
                'prerequisites' => 'ITT107 Computer Information Essentials',
                'description' => 'Introduces programming concepts, logic and problem-solving techniques.',
            ],
            [
                'course_code' => 'ITT203',
                'course_name' => 'Data Structures and File Management I',
                'credits' => 3,
                'prerequisites' => 'ITT103 Programming Techniques',
                'description' => 'Explores data structures, file management and methods of organizing information.',
            ],
            [
                'course_code' => 'ITT208',
                'course_name' => 'Internet Authoring I',
                'credits' => 3,
                'prerequisites' => 'ITT103 Programming Techniques',
                'description' => 'Introduces website development and internet authoring technologies.',
            ],
            [
                'course_code' => 'ITT200',
                'course_name' => 'Object Oriented Programming using C++',
                'credits' => 3,
                'prerequisites' => 'ITT203 Data Structures and File Management I',
                'description' => 'Explores object-oriented programming principles using C++.',
            ],
            [
                'course_code' => 'ITT210',
                'course_name' => 'Database Management Systems',
                'credits' => 3,
                'prerequisites' => 'ITT103 Programming Techniques',
                'description' => 'Introduces database design, management, queries and data organization.',
            ],
            [
                'course_code' => 'ITT302',
                'course_name' => 'Operating Systems',
                'credits' => 3,
                'prerequisites' => 'ITT216 Computer Essentials and Troubleshooting II',
                'description' => 'Examines operating system concepts, processes, memory and system management.',
            ],
            [
                'course_code' => 'ITT420',
                'course_name' => 'Mobile Application Development',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Introduces the design and development of applications for mobile devices.',
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