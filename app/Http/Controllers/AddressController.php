<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function studentsAddresses()
    {
        $students = Student::with('direction')->paginate(5);

        return view('students.addresses', compact('students'));
    }

    public function teachersAddresses()
    {
        $teachers = Teacher::with('direction')->paginate(3);

        return view('teachers.addresses', compact('teachers'));
    }
}
