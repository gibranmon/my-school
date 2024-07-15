<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="columns-xl mt-12">

        <form action="{{ route('student.store') }}" method="post">
            @csrf

            <div class="w-full px-2">

                @include('students.form')

                <button class="stylesButtonFromA stylesButtonCreate" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</x-app-layout>