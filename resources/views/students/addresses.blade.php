<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900">
        <div class="py-2">
            <div class="max-w-7xl mx-auto">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="text-2xl">
                            Listado de Alumnos
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mb-7">
                            <a href="{{ route('student.create') }}" target="_blank" class="stylesButtonFromA stylesTolinkToNew">Capturar alumno</a>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre del Estudiante
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Grado
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Dirección
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Opciones
                                    </th>   
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($students as $student)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $student->name }} {{ $student->last_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $student->school_grade }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ optional($student->direction)->line_one }} / {{ optional($student->direction)->line_two }}
                                    </td>
                                    <td>
                                        <div class="grid grid-rows-1 grid-flow-col gap-4">
                                            <div class="self-center">
                                                <a class="stylesButtonFromA stylesButtonEdit"
                                                href="{{ route('student.edit', $student->id) }}">Editar</a>
                                            </div>
                                            <div class="self-center">
                                                <a class="stylesButtonFromA stylesButtonShow"
                                                href="{{ route('student.show', $student->id) }}">Mostrar</a>
                                            </div>
                                            <div class="self-center">
                                                <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="stylesButtonFromA stylesButtonDelete" type="submit">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mx-0 py-6 sm:px-20 bg-white border-b border-gray-200">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</x-app-layout>
