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
                            Listado de Cursos
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            @foreach($courses as $course)
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Curso {{ $course->id }}: {{ $course->title }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <table class="min-w-full divide-y divide-sky-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Alumnos:
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Maestros
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        @foreach($course->students as $student)
                                                            <li>{{ $student->name }}</li>
                                                        @endforeach
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        @foreach($course->teachers as $teacher)
                                                            <li>{{ $teacher->name }}</li>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="mx-0 py-6 sm:px-20 bg-white border-b border-gray-200">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</x-app-layout>
