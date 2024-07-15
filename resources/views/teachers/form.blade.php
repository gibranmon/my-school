<div class="col-span-full mb-5">
    <span class="stylesButtonShow inline-block rounded-full mt-3 px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
        <a class="" href="{{ route('teacher.index', $teacher->id) }}">Volver</a>
    </span>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="name">Nombre</label>
    <input class="stylesInput" type="text" name="name" value="{{ old('name' , $teacher->name) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="last_name">Apellidos</label>
    <input class="stylesInput" type="text" name="last_name" value="{{ old('last_name' , $teacher->last_name) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="phone_number">Teléfono</label>
    <input class="stylesInput" type="text" name="phone_number" value="{{ old('phone_number' , $teacher->phone_number) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="professional_license">Cédula profesional</label>
    <input class="stylesInput" type="text" name="professional_license" value="{{ old('professional_license' , $teacher->professional_license) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="email">Correo electrónico</label>
    <input class="stylesInput" type="email" name="email" value="{{ old('email' , $teacher->email) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="line_one">Diección línea uno</label>
    <textarea class="stylesInput" name="line_one" id="line_one">{{ old('line_one' , isset($teacher->direction->line_one) ? $teacher->direction->line_one : '') }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="line_two">Diección línea dos</label>
    <textarea class="stylesInput" name="line_two" id="line_two">{{ old('line_two' , isset($teacher->direction->line_two) ? $teacher->direction->line_two : '') }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="postal_code">Código postal</label>
    <input class="stylesInput" type="text" name="postal_code" value="{{ old('postal_code' , isset($teacher->direction->postal_code) ? $teacher->direction->postal_code : '') }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="state">Estado</label>
    <input class="stylesInput" type="text" name="state" value="{{ old('state' , isset($teacher->direction->state) ? $teacher->direction->state : '') }}">
</div>

<div class="col-span-full mb-5">
    <a class="stylesButtonFromA stylesButtonShow" href="{{ route('teacher.index', $teacher->id) }}">Volver</a>
</div>
