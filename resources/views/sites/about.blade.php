@extends('layouts.frontend')

@section('head')
  {!!config('about.title_about')!!}
  
@section('content')

<section class="banner-area relative" id="home" style="background: url('{{config('about.image_url')}}')">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
							 {{config('about.h1_about')}}		
							</h1>
							<h4 style="color: #808080" >
							{{config('about.h4_about')}}
							</h4>
						</div>										
					</div>
				</div>					
			</section>

			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						{!! config('about.lokasi') !!}
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5> {{config('about.address_about')}} </h5>
									<p>
									{{config('about.p_address')}}
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>{{config('barber.telpon')}}</h5>
									<p> {{config('about.p_telpon')}} </p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>{{config('about.email_about')}}</h5>
									<p> {{config('about.p_email')}} </p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="#" method="post">
							 {{csrf_field()}}
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Masukan nama anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan nama anda'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Masukan alamat email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan alamat email'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Masukan subjek" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan subjek'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Masukan pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan pesan'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;">Kirim Pesan</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
@stop