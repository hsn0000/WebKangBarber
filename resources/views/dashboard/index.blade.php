@extends('layouts.master')

@section('header')
  {{!! config('barber.title_dashboard') !!}}
@stop

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">SELAMAT DATANG ADMIN</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">190</span>
											<span class="title">App Terdownloads</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">175</span>
											<span class="title">Produk Terjual</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">150</span>
											<span class="title">Kunjungan Website</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">112</span>
											<span class="title">Pengguna aktip </span>
										</p>
									</div>
								</div>
								<canvas id="myChart" ></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
   
@stop

@section('footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="{{asset('admin/assets/scripts/dashboard.js')}}"></script>
  
@stop
