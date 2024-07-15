<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="columns-xl mt-12">

        <form action="{{ route('teacher.update', $teacher->id) }}" method="post" enctype="multipart/form-data">
            <div class="w-full px-2">
                @method('patch')

                @csrf

                @include('teachers.form', ['task' => true])

                <button class="stylesButtonFromA stylesButtonEdit" type="submit">Editar</button>
            </div>
        </form>
    </div>
</x-app-layout>