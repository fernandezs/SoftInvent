@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Editar Empleado
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Editar Empleado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($empleado, ['route' => ['empleados.update', $empleado->id], 'method' => 'patch']) !!}

                        @include('empleados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection