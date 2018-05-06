
<div class="col-md-6 col-sm-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Datos de la reparacion:</h3>
        </div>
        <div class="box-body">
            <!-- Articulo Id Field -->
            <div class="form-group">
                {!! Form::label('articulo_id', 'Articulo:') !!}
                {!! Form::select('articulo_id', $articulos,null, ['class' => 'form-control', 'id' => 'articulo_id']) !!}
            </div>
            <!-- Cliente Id Field -->
            <div class="form-group">
                {!! Form::label('cliente_id', 'Cliente:') !!}
                {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control', 'id' => 'cliente_id']) !!}
            </div>
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de ingreso:</label>
                <div class='input-group date' id='fecha_ingreso'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <!-- Descripcion Field -->
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion:') !!}
                {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-sm-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Detalle de la reparacion:</h3>
        </div>
        <div class="box-body">
            <!-- Empleado Id Field -->
            <div class="form-group">
                {!! Form::label('empleado_id', 'Empleado:') !!}
                {!! Form::select('empleado_id', $empleados, null, ['class' => 'form-control', 'id' => 'empleado_id']) !!}
            </div>
                        <!-- Costo Reparacion Field -->
            <div class="form-group">
                {!! Form::label('costo_reparacion', 'Costo Reparacion:') !!}
                {!! Form::number('costo_reparacion', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="fecha_egreso">Fecha de salida:</label>
                <div class='input-group date' id='fecha_egreso'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
                        <!-- Garantia Field -->
            <div class="form-group">
                {!! Form::label('garantia', 'Garantia:') !!}
                {!! Form::number('garantia', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('reparaciones.index') !!}" class="btn btn-default">Cancelar</a>
</div>
