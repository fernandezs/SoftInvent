@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Crear Articulo
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Crear Articulo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'articulos.store']) !!}

                        @include('articulos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
