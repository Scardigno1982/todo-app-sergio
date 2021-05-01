<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="grid grid-cols-3">
        <div class="my-5 mx-5 ">
            <form action="{{ route('tasks.store') }}" method="POST">
                @method('get')
                @csrf
                <div class="shadow ">

                    <label class="block text-sm font-medium text-gray-700">Creador de la
                        tarea: {{ Auth::user()->name }}</label>


                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre de la tarea</label>
                    <input type="text" name="name" id="name" autocomplete="family-name"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">


                    <label for="email_address" class="block text-sm font-medium text-gray-700">Descripción de la
                        tarea</label>
                    <textarea id="description" name="description" rows="3"
                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                              placeholder="Escriba su tarea acá..."></textarea>


                    <label for="country" class="block text-sm font-medium text-gray-700">Estado de la tarea</label>
                    <select id="status_id" name="status_id" autocomplete="country"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>


                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-span-2 my-5 mx-5">
            <table class="table-fixed shadow-2xl border-2 ">
                <thead>
                <tr class="border-2 bg-blue-800">
                    <th class="w-1 p-3 text-white">ID</th>
                    <th class="w-1/2 text-center p-3 text-white">Nombre Tarea</th>
                    <th class="w-1/2 text-center p-3 text-white">Descripción</th>
                    <th class="w-1/2 p-3 text-white">Estado</th>
                    <th class="w-1/2 p-3 text-white">Acciones</th>
                    <th class="w-1/2 p-3 text-white">Borrar</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($estados as $estado)
                    <tr class="border-2 bg-blue-100">

                        <td class="p-3 text-gray-600">{{ $estado->id  }}</td>
                        <td class="text-center p-3 text-gray-600">{{ $estado->name }}</td>
                        <td class="text-center p-3 text-gray-600">{{ $estado->description }}</td>
                        <td class="p-3 text-gray-600">{{ $estado->status_id }}</td>
                        <td class="p-3 text-gray-600"><a href="{{ route('tasks.edit', $estado->id) }}"
                                                         class="btn btn-secondary" role="button">Editar</a></td>
                        <td class="p-3 text-indigo-50">
                            <form action="{{ route('tasks.destroy', $estado->id) }}" method="get">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" >
                                <button class="bg-red-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">BORRAR</button>
                            </form>


                        </td
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


</x-app-layout>
