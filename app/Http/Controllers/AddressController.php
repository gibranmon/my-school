<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function studentsAddresses()
    {
        $students = Student::with('direction')->get();

        return view('students.addresses', compact('students'));
    }

    public function teachersAddresses()
    {
        $teachers = Teacher::with('direction')->get();

        return view('teachers.addresses', compact('teachers'));
    }
}
