<?php

namespace App\Http\Controllers;

use App\Http\Requests\Teacher\PatchRequest;
use App\Http\Requests\Teacher\StoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::with('direction')->paginate(3);

        return view('teachers.addresses', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = new Teacher();
        
        return view('teachers.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        if ($request->validated()) {
            $allData = (object)$request->all();

            $teacher = Teacher::create([
                'name' =>  $allData->name, 
                'last_name' =>  $allData->last_name, 
                'phone_number' =>  $allData->phone_number, 
                'professional_license' =>  $allData->professional_license, 
                'email' =>  $allData->email
            ]);

            $teacher->direction()->create([
                'line_one' => $allData->line_one,
                'line_two' => $allData->line_two,
                'postal_code' => $allData->postal_code,
                'state' => $allData->state
            ]);
        }

        return to_route('teacher.index')->with('status', 'Información del docente, capturada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatchRequest $request, Teacher $teacher)
    {
        $validatedRequest = $request->validated();

        $teacher->update($validatedRequest);

        return to_route('teacher.index')->with('status', 'Información del docente editada correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        
        return to_route('teacher.index')->with('status', 'El docente seleccionado ha sido dado de baja correctamente');
    }
}
