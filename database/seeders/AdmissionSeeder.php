<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admission;

class AdmissionSeeder extends Seeder
{
    public function run(): void
    {
        $admissions = [
            [
                'title' => 'About the IT Programme',
                'description' => 'The Bachelor of Science in Information Technology prepares students with knowledge and practical skills in programming, networking, databases, systems analysis and modern information technology.',
                'application_link' => 'https://www.ucc.edu.jm/',
            ],
            [
                'title' => 'Admission Requirements',
                'description' => 'Applicants should review the University of the Commonwealth Caribbean admission requirements and programme-specific entry qualifications before applying.',
                'application_link' => 'https://www.ucc.edu.jm/',
            ],
            [
                'title' => 'How to Apply',
                'description' => 'Prospective students can visit the official UCC website to obtain information about the application process, supporting documents and admissions assistance.',
                'application_link' => 'https://www.ucc.edu.jm/',
            ],
            [
                'title' => 'Contact Admissions',
                'description' => 'For assistance with applications, programme information or admission enquiries, contact the University of the Commonwealth Caribbean through its official website.',
                'application_link' => 'https://www.ucc.edu.jm/',
            ],
        ];

        foreach ($admissions as $admission) {
            Admission::updateOrCreate(
                ['title' => $admission['title']],
                $admission
            );
        }
    }
}