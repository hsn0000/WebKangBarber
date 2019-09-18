@extends('layouts.frontend')

@section('head')
  {!! config('galery.title_download') !!}

@section('content')
<section class="banner-area relative" id="home" style="background: url('{{config('galery.image_banner_url')}}')">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
							 {{config('galery.h1_download')}}		
							</h1>
							<h4 style="color: #808080" >
							{{config('galery.h4_download')}}
							</h4> <br>
                            <a href="#" class="genric-btn primary large">Download Client App</a>
                            <a href="#" class="genric-btn info large">Download Staff App</a>
						</div>										
					</div>
				</div>					
			</section>

             <div class="title text-center">
				<h1 class="mb-15 mt-25"> Gallery Kita </h1>
					<p> Terdapat model rambut dan masih manyak lagi...</p>
							</div>
      <!-- galeri -->
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="{{config('galery.img_url1')}} " alt="">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-5">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="{{config('galery.img_url2')}}" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="{{config('galery.img_url3')}}" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="{{config('galery.img_url4')}}" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="{{config('galery.img_url5')}}" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-5">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="{{config('galery.img_url6')}}" alt="">				
									</div>
								</div>
							 </a>
						</div>
						<div class="col-lg-7">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="{{config('galery.img_url7')}}" alt="">				
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>	
			
@stop