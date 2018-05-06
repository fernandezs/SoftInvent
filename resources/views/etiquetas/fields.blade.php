<!-- Etiqueta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etiqueta', 'Etiqueta:') !!}
    {!! Form::text('etiqueta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('etiquetas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
