
{{ Form::_open('Usuario creado') }}

    {{ Form::_text('username') }}

    {{ Form::_text('nombre') }}

    {{ Form::_text('apellido') }}

    {{ Form::_text('email') }}

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
