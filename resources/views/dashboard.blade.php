<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <br>





    <div class="grid grid-cols-2 gap-4">

        <div class="mt-10 sm:mt-0 p-10">
                    <div class="md:grid md:grid-cols-3 md:gap-6">

                        <div class="mt-5 md:mt-0 md:col-span-2">
                            {{--Formulario para Agregar Tarea--}}


                            <form action="" method="post">
                                @csrf

                                <div class="form-floating">
                                    <select class="form-select" id="id_user" aria-label="Usuario">
                                        <option>Seleccionar un usuario</option>
                                        <option value="1" selected>Sergio</option>
                                    </select>
                                    <label for="floatingSelect">Seleccionar un usuario</label>
                                </div>

                                <br>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="name"></textarea>
                                    <label for="floatingTextarea">Nombre de la tarea</label>
                                </div>



                                <br>


                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Escriba algo aqui" id="description" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Escriba su tarea</label>
                                </div>


                                <br>
                                <div class="form-floating">
                                    <select class="form-select" id="id_statu" aria-label="Estado">
                                        <option selected>Seleccione un Estado</option>
                                        <option value="1">Finalizada</option>
                                        <option value="2">Pendiente</option>
                                        <option value="3">Run</option>
                                    </select>
                                    <label for="floatingSelect">Seleccione un estado</label>
                                </div>

                                <br>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>








                        </div>
                    </div>
                </div>

        {{--<div class="content p-10">--}}
                {{--<table class="text-left w-full">--}}
                    {{--<thead class="bg-black flex text-white w-full">--}}
                    {{--<tr class="flex w-full mb-4">--}}
                        {{--<th class="p-4 w-1/4">ID</th>--}}
                        {{--<th class="p-4 w-1/4">Nombre</th>--}}
                        {{--<th class="p-4 w-1/4">Tarea</th>--}}
                        {{--<th class="p-4 w-1/4">Estado</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->--}}
                    {{--<tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" >--}}
                    {{--@foreach ($tasks as $tasks)--}}

                        {{--<tr class="flex w-full mb-4">--}}
                            {{--<td class="p-4 w-1/4">{{ $tasks->id_user }}</td>--}}
                            {{--<td class="p-4 w-1/4">{{ $tasks->name }}</td>--}}
                            {{--<td class="p-4 w-1/4">{{ $tasks->description }}</td>--}}
                            {{--<td class="p-4 w-1/4">{{ $tasks->name_status }}</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}

    </div>




</x-app-layout>
