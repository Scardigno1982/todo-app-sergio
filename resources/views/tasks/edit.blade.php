<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando la tarea ') }}
        </h2>
    </x-slot>
    <h3>Editando la tarea {{$task_id->id}}</h3>
    <div class="grid grid-cols-3">


        <form action="{{ route('tasks.update', $task_id->id ) }}" method="POST">
            @csrf
            @method('put')
            <div class="shadow ">

                <label for="name" class="block text-sm font-medium text-gray-700">Nombre de la tarea</label>
                <input type="text" name="name" id="name" autocomplete="family-name"
                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                       value="{{ $task_id->name }}">


                <label for="email_address" class="block text-sm font-medium text-gray-700">Descripción de la
                    tarea</label>
                <textarea id="description" name="description" rows="3"
                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                          placeholder="{{ $task_id->description }}"></textarea>


                <label for="country" class="block text-sm font-medium text-gray-700">Estado de la tarea</label>


                <select id="status_id" name="status_id" autocomplete="country"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>{{ $task_id->status_id }}</option>


                </select>


                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Actualizar
                    </button>
                </div>
            </div>
        </form>


    </div>


</x-app-layout>

