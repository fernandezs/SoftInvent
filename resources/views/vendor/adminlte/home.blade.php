@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content')
	<div class="content">
		{{--@include('flash::message')--}}
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="col-md-7 col-xs-12">
					<div class="box box-primary ">
						<div class="box-body">
							<h3 class="box-title">
								Bienvenido
								<b class="text-primary">{{Auth::user()->name}}</b>
								@usernoops
								<small>No tiene ninguna opción asignada, pida a un administrador que le asigne</small>
								@endusernoops
							</h3>
						</div>
						<div class="row">

							<div class="col-sm-6">
								<div class="small-box bg-blue">
									<div class="inner">
										<h3>{{ $proveedores_count }}</h3>

										<p>Proveedoes</p>
									</div>
									<div class="icon">
										<i class="fa fa-truck "></i>
									</div>
									<a href="{{route('proveedores.index')}}" class="small-box-footer">
										Más Información <i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="small-box bg-yellow">
									<div class="inner">
										<h3>{{ $categorias_count }}</h3>

										<p>Categorias</p>
									</div>
									<div class="icon">
										<i class="fa fa-list"></i>
									</div>
									<a href="{{route('categorias.index')}}" class="small-box-footer">
										Más Información <i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="small-box bg-orange">
									<div class="inner">
										<h3>{{ $articulos_count }}</h3>

										<p>Articulos</p>
									</div>
									<div class="icon">
										<i class="fa fa-linode"></i>
									</div>
									<a href="{{route('articulos.index')}}" class="small-box-footer">
										Más Información <i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
				</div>
				<div class="col-md-5">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Articulos agregados recientemente</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<ul class="products-list product-list-in-box">
								<li class="item">
									<div class="product-img">
										<img src="dist/img/default-50x50.gif" alt="Product Image">
									</div>
									<div class="product-info">
										<a href="javascript:void(0)" class="product-title">Samsung TV
											<span class="label label-warning pull-right">$1800</span></a>
										<span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
									</div>
								</li>
								<!-- /.item -->
								<li class="item">
									<div class="product-img">
										<img src="dist/img/default-50x50.gif" alt="Product Image">
									</div>
									<div class="product-info">
										<a href="javascript:void(0)" class="product-title">Bicycle
											<span class="label label-info pull-right">$700</span></a>
										<span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
									</div>
								</li>
								<!-- /.item -->
								<li class="item">
									<div class="product-img">
										<img src="dist/img/default-50x50.gif" alt="Product Image">
									</div>
									<div class="product-info">
										<a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
										<span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
									</div>
								</li>
								<!-- /.item -->
								<li class="item">
									<div class="product-img">
										<img src="dist/img/default-50x50.gif" alt="Product Image">
									</div>
									<div class="product-info">
										<a href="javascript:void(0)" class="product-title">PlayStation 4
											<span class="label label-success pull-right">$399</span></a>
										<span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
									</div>
								</li>
								<!-- /.item -->
							</ul>
						</div>
						<!-- /.box-body -->
						<div class="box-footer text-center">
							<a href="javascript:void(0)" class="uppercase">View All Products</a>
						</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-7">

					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Ultimas ventas</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-margin">
									<thead>
									<tr>
										<th>Order ID</th>
										<th>Item</th>
										<th>Status</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><a href="pages/examples/invoice.html">OR9842</a></td>
										<td>Call of Duty IV</td>
										<td><span class="label label-success">Shipped</span></td>
									</tr>
									<tr>
										<td><a href="pages/examples/invoice.html">OR1848</a></td>
										<td>Samsung Smart TV</td>
										<td><span class="label label-warning">Pending</span></td>
									</tr>
									<tr>
										<td><a href="pages/examples/invoice.html">OR7429</a></td>
										<td>iPhone 6 Plus</td>
										<td><span class="label label-danger">Delivered</span></td>
									</tr>
									<tr>
										<td><a href="pages/examples/invoice.html">OR7429</a></td>
										<td>Samsung Smart TV</td>
										<td><span class="label label-info">Processing</span></td>
									</tr>
									<tr>
										<td><a href="pages/examples/invoice.html">OR1848</a></td>
										<td>Samsung Smart TV</td>
										<td><span class="label label-warning">Pending</span></td>
									</tr>
									<tr>
										<td><a href="pages/examples/invoice.html">OR7429</a></td>
										<td>iPhone 6 Plus</td>
										<td><span class="label label-danger">Delivered</span></td>
									</tr>
									<tr>
										<td><a href="pages/examples/invoice.html">OR9842</a></td>
										<td>Call of Duty IV</td>
										<td><span class="label label-success">Shipped</span></td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- /.table-responsive -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer clearfix">
							<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
							<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
						</div>
					</div>
					<!-- /.box-footer -->

				</div>
			</div>
		</div>
	</div>
@endsection
