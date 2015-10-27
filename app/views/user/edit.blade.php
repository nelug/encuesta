
{{ Form::_open('Usuario Actualizado') }}

    <input type="hidden" name="id" value="{{$user->id}}">
    {{ Form::_text('username', @$user->username) }}

    {{ Form::_text('nombre', @$user->nombre) }}

    {{ Form::_text('apellido', @$user->apellido) }}

    {{ Form::_text('email', @$user->mail) }}

    {{ Form::_password('password') }}

    <div style="text-align:right">
        <table width="100%">
            <tr>
                <td width="80%"> </td>
                <td  width="15%">
                    <input type="submit" name="name" value="Enviar..!">
                </td>
                <td width="5%"></td>
            </tr>
        </table>
    </div>

{{ Form::close() }}
