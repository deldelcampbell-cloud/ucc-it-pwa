<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        Staff::create([
            'name' => 'Dr. Sample Lecturer',
            'position' => 'Head of Department',
            'telephone' => '876-000-0000',
            'email' => 'hod@example.com',
            'photo' => null,
        ]);

        Staff::create([
            'name' => 'Ms. Sample Lecturer',
            'position' => 'Lecturer',
            'telephone' => '876-000-0001',
            'email' => 'lecturer@example.com',
            'photo' => null,
        ]);
    }
}