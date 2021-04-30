<div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Usuario</th>
            <th scope="col">Estado</th>
        </tr>
        </thead>


        @foreach( $tasks as $task)
        <tbody>
        <tr>
            <th scope="row">{{ $task->$name }}</th>
            <td>{{ $task->$description }}</td>
            <td>{{ $task->$user_id }}</td>
            <td>{{ $task->$status_id }}</td>
        </tr>
         @endforeach

        </tbody>
    </table>

</div>