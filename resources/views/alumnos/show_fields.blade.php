<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $alumnos->nombre }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $alumnos->password }}</p>
</div>

<!-- Codigo Field -->
<div class="form-group">
    {!! Form::label('codigo', 'Codigo:') !!}
    <p>{{ $alumnos->codigo }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $alumnos->correo }}</p>
</div>

<!-- Carrera Field -->
<div class="form-group">
    {!! Form::label('carrera', 'Carrera:') !!}
    <p>{{ $alumnos->carrera }}</p>
</div>

<!-- Fecha Ingreso Field -->
<div class="form-group">
    {!! Form::label('Fecha_ingreso', 'Fecha Ingreso:') !!}
    <p>{{ $alumnos->Fecha_ingreso }}</p>
</div>

<!-- Centro Field -->
<div class="form-group">
    {!! Form::label('centro', 'Centro:') !!}
    <p>{{ $alumnos->centro }}</p>
</div>

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', 'Sexo:') !!}
    <p>{{ $alumnos->sexo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $alumnos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $alumnos->updated_at }}</p>
</div>

