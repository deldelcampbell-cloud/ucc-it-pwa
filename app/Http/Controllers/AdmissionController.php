<?php

namespace App\Http\Controllers;

use App\Models\Admission;

class AdmissionController extends Controller
{
    public function index()
    {
        $admissions = Admission::all();

        return view('admissions', compact('admissions'));
    }
}