<div class="table-responsive">
    <table class="table" id="alumnos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Password</th>
        <th>Codigo</th>
        <th>Correo</th>
        <th>Carrera</th>
        <th>Fecha Ingreso</th>
        <th>Centro</th>
        <th>Sexo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumnos)
            <tr>
                <td>{{ $alumnos->nombre }}</td>
            <td>{{ $alumnos->password }}</td>
            <td>{{ $alumnos->codigo }}</td>
            <td>{{ $alumnos->correo }}</td>
            <td>{{ $alumnos->carrera }}</td>
            <td>{{ $alumnos->Fecha_ingreso }}</td>
            <td>{{ $alumnos->centro }}</td>
            <td>{{ $alumnos->sexo }}</td>
                <td>
                    {!! Form::open(['route' => ['alumnos.destroy', $alumnos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('alumnos.show', [$alumnos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('alumnos.edit', [$alumnos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
