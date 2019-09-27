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
							<form class="form-area contact-form text-right" id="myForm" action="#" method="">
							 {{csrf_field()}}
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" id="inputName" placeholder="Masukan nama anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan nama anda'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" id="inputEmail" placeholder="Masukan alamat email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan alamat email'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" id="inputSubject" placeholder="Masukan subjek" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan subjek'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" id="inputMessage" name="message" placeholder="Masukan pesan, kririk dan saran anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan pesan'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;" onclick="kirimPesan();">Kirim Pesan</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			
@stop

@section('footer')

	<script>

  function kirimPesan() {

	  var database = firebase.database();
	  var firestore = firebase.firestore();
	  var docRef = firestore.collection("Inbox");
	  var name = $('#inputName').val();
	  var email = $('#inputEmail').val();
	  var subject = $('#inputSubject').val();
	  var message = $('#inputMessage').val();

	  docRef.add({
             name:name,
			 email:email,
			 subject:subject,
			 message:message,
             }).then(function(){
				
				console.log("Berhasil");
				  Swal.fire({
					title: 'Terimakasih',
					text: 'atas perhatian kritik dan saran anda.',
					imageUrl: 'https://media.tenor.com/images/48ee11f7ac0d8c24cd2936466a6c6911/tenor.gif',
					imageWidth: 400,
					imageHeight: 200,
					imageAlt: 'Trimakasih Img',
					animation: true
				})
			

           }).catch(function(error){
			
				Swal.fire({
					type: 'error',
					title: 'Maap',
					text: 'Pesan anda gagal terkirim!',
				})
					console.log("Gagal: ",error);
				
					
			});
			
	
  }

	</script>

@stop