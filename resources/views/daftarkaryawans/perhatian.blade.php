@extends('layouts.master')

@section('footer')

@stop

@section('content')
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box lockscreen clearfix">
					<div class="content">
						<h1 class="sr-only">Pemberitahuan</h1>
						<div class="logo text-center"><img src="{{asset('/frontend/img/logo1.png')}}" alt="Logo" width="120;"></div>
						<div class="user text-center">
							<img src="{{asset('/frontend/img/banner13.jpg')}}" width="190;" height="190;" class="img-circle" alt="Avatar">
							<h2 class="name">Hallo <span style="color:black;"> Pengunjung </span></h2>
                        </div>
                        <p> to be continue ... </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

@stop