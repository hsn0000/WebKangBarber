@extends('layouts.frontend')

@section('head')
  {!! config('barber.title_beranda') !!}

@section('content')
		<!-- banner home-->
			<section class="banner-area relative" id="home" style="background: url('{{config('barber.image_banner_url')}}')">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
							 {{config('barber.h1_home')}}		
							</h1>
							<h4 style="color: #808080" >
							{{config('barber.h4_home')}}
							</h4> <br>
							<a href="/download" class="primary-btn text-uppercase">Download App Mobile</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner -->		
			<!-- populer-model-->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"> {{config('barber.h1_model')}} </h1>
								<p> {{config('barber.p_model')}}</p>
							</div>
						</div>
					</div>		
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model1_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> {{config('barber.span1_model1')}} 
										<span class="lnr lnr-bubble"></span>{{config('barber.span2_model1')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model1')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model1')}}
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model2_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span>  {{config('barber.span1_model2')}} 
										<span class="lnr lnr-bubble"></span> {{config('barber.span1_model2')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model2')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model2')}}
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model3_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> {{config('barber.span1_model3')}} 
										 <span class="lnr lnr-bubble"></span>{{config('barber.span2_model3')}} </p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model3')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model3')}}
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model4_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span>{{config('barber.span1_model4')}}
										<span class="lnr lnr-bubble"></span>{{config('barber.span2_model4')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model4')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model4')}}
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model5_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span>{{config('barber.span1_model5')}}
										<span class="lnr lnr-bubble"></span>{{config('barber.span2_model5')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model5')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model5')}}
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model1_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span>{{config('barber.span1_model1')}}
										<span class="lnr lnr-bubble"></span>{{config('barber.span2_model1')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model1')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model1')}}
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model2_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> {{config('barber.span1_model2')}}
										<span class="lnr lnr-bubble"></span>{{config('barber.span1_model2')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model2')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model2')}}
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{config('barber.conten_model3_img')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> {{config('barber.span1_model3')}}
										 <span class="lnr lnr-bubble"></span>{{config('barber.span1_model3')}}</p>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
										{{config('barber.h4_model3')}}
										</h4>
									</a>
									<p>
									{{config('barber.p_model3')}}
									</p>
								</div>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End model Area -->

			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap"  style="background: url('{{config('barber.image_cta_url')}}')">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white"> {{config('barber.h1_cta')}} </h1>
							<p>
								{{config('barber.p_cta')}}
							</p>					
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta Area -->

			<!-- Start blog berita  -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"> {{config('barber.title_berita')}} </h1>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{config('barber.image_berita1_url')}}" alt="">								
							</div>
							<p class="meta"> {{config('barber.tanggal_berita1')}} <a href="#"> {{config('barber.kang_berita1')}} </a></p>
							<a href="#">
								<h5>{{config('barber.h5_berita1')}}</h5>
							</a>
							<p>
							{{config('barber.p_berita1')}}
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{config('barber.image_berita2_url')}}" alt="">								
							</div>
							<p class="meta"> {{config('barber.tanggal_berita2')}} <a href="#">{{config('barber.kang_berita2')}}</a></p>
							<a href="#">
								<h5>{{config('barber.h5_berita2')}}</h5>
							</a>
							<p>
							{{config('barber.p_berita2')}}
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{config('barber.image_berita3_url')}}" alt="">								
							</div>
							<p class="meta"> {{config('barber.tanggal_berita3')}} <a href="#">{{config('barber.kang_berita3')}}</a></p>
							<a href="#">
								<h5>{{config('barber.h5_berita3')}}</h5>
							</a>
							<p>
							{{config('barber.p_berita3')}}
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>	
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{config('barber.image_berita4_url')}}" alt="">								
							</div>
							<p class="meta"> {{config('barber.tanggal_berita4')}} <a href="#">{{config('barber.kang_berita4')}}</a></p>
							<a href="#">
								<h5>{{config('barber.h5_berita4')}}</h5>
							</a>
							<p>
							{{config('barber.p_berita4')}}
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>			
					</div>
		    	</div>
			</section>
		<!-- End blog berita -->			
			
@stop