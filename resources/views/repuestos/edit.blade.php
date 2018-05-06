@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Editar Repuesto
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Editar Repuesto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($repuesto, ['route' => ['repuestos.update', $repuesto->id], 'method' => 'patch']) !!}

                        @include('repuestos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection