<!-- Cod Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_articulo', 'Cod Articulo:') !!}
    {!! Form::number('cod_articulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_costo', 'Precio Costo:') !!}
    {!! Form::number('precio_costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    {!! Form::number('precio_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Minima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_minima', 'Cantidad Minima:') !!}
    {!! Form::number('cantidad_minima', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::number('categoria_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('articulos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
