<div class="col-span-full mb-5">
    <span class="stylesButtonShow inline-block rounded-full mt-3 px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
        <a class="" href="{{ route('student.index', $student->id) }}">Volver</a>
    </span>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="name">Nombre</label>
    <input class="stylesInput" type="text" name="name" value="{{ old('name' , $student->name) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="last_name">Apellidos</label>
    <input class="stylesInput" type="text" name="last_name" value="{{ old('last_name' , $student->last_name) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="age">Edad</label>
    <input class="stylesInput" type="text" name="age" value="{{ old('age' , $student->age) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="school_grade">Contenido</label>
    <textarea class="stylesInput" name="school_grade" id="school_grade">{{ old('school_grade' , $student->school_grade) }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="line_one">Diección línea uno</label>
    <textarea class="stylesInput" name="line_one" id="line_one">{{ old('line_one' , isset($student->direction->line_one) ? $student->direction->line_one : '') }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="line_two">Diección línea dos</label>
    <textarea class="stylesInput" name="line_two" id="line_two">{{ old('line_two' , isset($student->direction->line_two) ? $student->direction->line_two : '') }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="postal_code">Código postal</label>
    <input class="stylesInput" type="text" name="postal_code" value="{{ old('postal_code' , isset($student->direction->postal_code) ? $student->direction->postal_code : '') }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="state">Estado</label>
    <input class="stylesInput" type="text" name="state" value="{{ old('state' , isset($student->direction->state) ? $student->direction->state : '') }}">
</div>