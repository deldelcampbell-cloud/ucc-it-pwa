<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        $staffMembers = [
            [
                'name' => 'Ms. Sherida Levy',
                'position' => 'Programme Officer',
                'telephone' => '876-906-3000',
                'email' => 'itprogrammeofficer2@ucc.edu.jm',
                'photo' => 'images/staff/sherida-levy.jpg',
            ],
            [
                'name' => 'Mr. Craig Wilmot',
                'position' => 'Programme Officer',
                'telephone' => '876-906-3000',
                'email' => 'itprogofficer4@ucc.edu.jm',
                'photo' => 'images/staff/craig-wilmot.jpg',
            ],
            [
                'name' => 'Mr. Otis Osbourne',
                'position' => 'Head of Department',
                'telephone' => '876-906-3000',
                'email' => 'ithod@ucc.edu.jm',
                'photo' => 'images/staff/otis-osbourne.jpg',
            ],
            [
                'name' => 'Dr. Peter Ndajah',
                'position' => 'Dean',
                'telephone' => '876-906-3000',
                'email' => 'headofschoolsmathit@ucc.edu.jm',
                'photo' => 'images/staff/peter-ndajah.jpg',
            ],
        ];

        foreach ($staffMembers as $staff) {
            Staff::updateOrCreate(
                ['email' => $staff['email']],
                $staff
            );
        }
    }
}
