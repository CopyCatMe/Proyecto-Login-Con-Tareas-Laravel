<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-white py-20 lg:py-[120px]">
                    <div class="container">
                        <div class="flex ml-8 mb-4">
                            <a href="" class="bg-blue-600 text-white py-2 px-4 rounded mr-4 hover:bg-blue-500 transition duration-200">
                                Crear Nueva Tarea
                            </a>
                        </div>
                        <div class="flex flex-wrap mx-4">
                            <div class="w-full px-4">
                                <div class="max-w-full overflow-x-auto rounded-lg border border-gray-200">
                                    <table class="table-auto w-full">
                                        <thead>
                                            <tr class="bg-blue-600 text-white text-center">
                                                <th class="w-1/3 min-w-[160px] text-lg font-semibold py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent rounded-tl-lg">
                                                    Task Name
                                                </th>
                                                <th class="w-2/3 min-w-[160px] text-lg font-semibold py-4 lg:py-7 px-3 lg:px-4 border-r border-transparent">
                                                    Description
                                                </th>
                                                <th class="w-1/6 min-w-[160px] text-lg font-semibold py-4 lg:py-7 px-3 lg:px-4 border-r border-transparent rounded-tr-lg">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tasks as $task)
                                            <tr>
                                                <td class="text-center text-gray-800 font-medium text-base py-5 px-2 bg-[#F9FAFB] border-b border-l border-[#E8E8E8]">
                                                    {{ $task->name }}
                                                </td>
                                                <td class="text-center text-gray-800 font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                    {{ $task->description }}
                                                </td>
                                                <td class="text-center border-b border-[#E8E8E8]">
                                                    <a href="" class="bg-yellow-500 text-white py-2 px-2.5 mr-2 rounded hover:bg-yellow-600 transition duration-200">
                                                        Editar
                                                    </a>
                                                    <form action="" method="POST" class="inline">
                                                        <button type="submit" class="bg-red-600 text-white py-1.5 px-3 rounded hover:bg-red-700 transition duration-200" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');"> Borrar </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
</x-app-layout>
