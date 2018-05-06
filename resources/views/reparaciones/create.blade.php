@extends('adminlte::layouts.app')
@include('layouts.plugins.select2')
@include('layouts.plugins.bootstrap_datetimepicker')


@section('htmlheader_title')
	Crear Reparacion
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Crear Reparacion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="row">
            {!! Form::open(['route' => 'reparaciones.store']) !!}

                        @include('reparaciones.fields')

                    {!! Form::close() !!}
        </div>      
           
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
    $('#articulo_id').select2();
    $('#cliente_id').select2();
    $('#empleado_id').select2();
    $('#fecha_ingreso').datetimepicker();
        $('#fecha_egreso').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#fecha_ingreso").on("dp.change", function (e) {
            $('#fecha_egreso').data("DateTimePicker").minDate(e.date);
        });
        $("#fecha_egreso").on("dp.change", function (e) {
            $('#fecha_ingreso').data("DateTimePicker").maxDate(e.date);
        });
});
</script>
@endpush