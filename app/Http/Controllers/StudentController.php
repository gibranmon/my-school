<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\AddressController;
use App\Http\Requests\Student\StoreRequest;
use App\Models\Direction;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('direction')->paginate(5);

        return view('students.addresses', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student();

        return view('students.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        if ($request->validated()) {
            $allData = (object)$request->all();

            $student = Student::create([
                'name' => $allData->name,
                'last_name' => $allData->last_name,
                'age' => $allData->age,
                'school_grade' => $allData->school_grade
            ]);

            $student->direction()->create([
                'line_one' => $allData->line_one,
                'line_two' => $allData->line_two,
                'postal_code' => $allData->postal_code,
                'state' => $allData->state
            ]);
        }

        return to_route('addresses.students')->with('status', 'Información del alumno, capturada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Student $student)
    {
        $validatedRequest = $request->validated();

        $student->update($validatedRequest);

        return to_route('addresses.students')->with('status', 'Información del alumno, editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('addresses.students')->with('status', 'El alumno seleccionado, ha sido dado de baja correctamente');
    }
}
