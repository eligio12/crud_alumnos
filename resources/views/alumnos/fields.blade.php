<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera', 'Carrera:') !!}
    {!! Form::text('carrera', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Ingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Fecha_ingreso', 'Fecha Ingreso:') !!}
    {!! Form::select('Fecha_ingreso', ['2016A' => '2016A', '2016B' => '2016B', '2017A' => '2017A', '2017B' => '2017B', '2018A' => '2018A', '2018B' => '2018B', '2019A' => '2019A', '2019B' => '2019B', '2020A' => '2020A', '2020B' => '2020B'], null, ['class' => 'form-control']) !!}
</div>

<!-- Centro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro', 'Centro:') !!}
    {!! Form::select('centro', ['CUCEI' => 'CUCEI', 'CUCEA' => 'CUCEA', 'CUCS' => 'CUCS', 'CUCSH' => 'CUCSH', 'CUAAD' => 'CUAAD', 'CUCBA' => 'CUCBA'], null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sexo', 'Sexo:') !!}
    <label class="radio-inline">
        {!! Form::radio('sexo', "Masculino", null) !!} Masculino
    </label>

    <label class="radio-inline">
        {!! Form::radio('sexo', "Femenino", null) !!} Femenino
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('alumnos.index') }}" class="btn btn-default">Cancel</a>
</div>
