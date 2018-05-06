@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Editar Articulo
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Editar Articulo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articulo, ['route' => ['articulos.update', $articulo->id], 'method' => 'patch']) !!}

                        @include('articulos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection