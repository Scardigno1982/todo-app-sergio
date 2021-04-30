<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white  shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">

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
        </div>
    </div>
    <div>


    </div>



</x-app-layout>
