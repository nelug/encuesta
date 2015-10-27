<table width="100%" class="table table-hover">
    <tr>
        <th>Username</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($user as $us)
        <tr>
            <td> {{ $us->username }} </td>
            <td> {{ $us->nombre }} </td>
            <td> {{ $us->apellido }} </td>
            <td> {{ $us->email }} </td>
            <td> <a href="#" onclick="getEditUser({{$us->id}})">Editar</a> </td>
            <td> <a href="#" onclick="deleteUser({{$us->id}})">Eliminar</a> </td>
        </tr>
    @endforeach
</table>
