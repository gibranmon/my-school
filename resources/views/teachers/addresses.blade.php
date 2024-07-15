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
                        Listado de Maestros
                    </div>
                </div>
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mb-7">
                        <a href="{{ route('teacher.create') }}" target="_blank" class="stylesButtonFromA stylesTolinkToNew">Capturar docente</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre del Maestro
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Correo electrónico
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
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $teacher->name }} {{ $teacher->last_name }} 
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $teacher->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ optional($teacher->direction)->line_one }} / {{ optional($teacher->direction)->line_two }}
                                </td>
                                <td>
                                    <div class="grid grid-rows-1 grid-flow-col gap-4">
                                        <div class="self-center">
                                            <a class="stylesButtonFromA stylesButtonEdit"
                                            href="{{ route('teacher.edit', $teacher->id) }}">Editar</a>
                                        </div>
                                        <div class="self-center">
                                            <a class="stylesButtonFromA stylesButtonShow"
                                            href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a>
                                        </div>
                                        <div class="self-center">
                                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="post">
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
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>