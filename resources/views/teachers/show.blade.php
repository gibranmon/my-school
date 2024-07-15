<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>

    <div class="rounded overflow-hidden shadow-lg bg-white my-5 flex items-center justify-center min-h-sm">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                {{ $teacher->name }} {{ $teacher->last_name }}
            </div>
            <p class="text-gray-700 text-base">
                <span class="font-bold">Número telefónico:</span> {{ $teacher->phone_number }}<br>
                <span class="font-bold">Cédula profesional:</span> {{ $teacher->professional_license }}<br>
                <span class="font-bold">Correo electrónico:</span> {{ $teacher->email }}<br>
                <div class="pt-4 pb-2">
                    <span class="inline-block bg-yellow-200 rounded-sm px-3 py-1 text-sm font-semibold text-gray-700 mb-2">Dirección</span>
                </div>
                <span class="font-bold">Línea uno:</span> {{ $teacher->direction->line_one }}<br>
                <span class="font-bold">Línea dos:</span> {{ $teacher->direction->line_two }}<br>
                <span class="font-bold">Estado:</span> {{ $teacher->direction->state }}<br>
                <span class="font-bold">Código postal:</span> {{ $teacher->direction->postal_code }}<br>
            </p>
            <span class="stylesButtonShow inline-block rounded-full mt-3 px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
                <a class="" href="{{ route('teacher.index', $teacher->id) }}">Volver</a>
            </span>
        </div>
    </div>

</x-app-layout>