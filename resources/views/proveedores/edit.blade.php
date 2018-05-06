@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Editar Proveedor
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Editar Proveedor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($proveedor, ['route' => ['proveedores.update', $proveedor->id], 'method' => 'patch']) !!}

                        @include('proveedores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection