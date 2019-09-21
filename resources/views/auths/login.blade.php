
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- TOASTER -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<!-- switalert -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('/admin/assets/vendor/linearicons/style.css')}}">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
		<!-- ijl -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<!-- ICONS -->
		<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/logo3.jpeg')}}">
	{!! config('barber.title_login') !!}

  </head>


 <body> 
     
	 <!-- navbar -->
	 <nav class="navbar navbar-default navbar-fixed-top mb-3" id="navbar">
			<div class="container-fluid" id="div-container">
			<div class="brand" id="div-brand">
				<a href="#"><img src="{{asset('frontend/img/logo4.png')}}" alt="Logo Kang Barber" class="img-responsive logo img-circle" width="90"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
				<ul>
					 <li><a href=" {{url('/')}} " id="beranda">BERANDA</a></li>
					 <li><a href="{{url('/download')}}" id="download">DOWNLOAD APP</a></li>
				</ul>
			  </div>
			  <div class="navbar-btn navbar-btn-right">
			  		<a href="#" id="text-telpon"><span class="lnr lnr-phone-handset"></span> <span class="text"> {{config('barber.telpon')}} </span></a>
			  		<a href="#" id="text-email"><span class="lnr lnr-envelope"></span> <span class="text">{{config('barber.email2')}}</span></a>			
				</div>
			</div>
	      </div>
		</nav>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap" id="wrap-align">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center img-circle"><img src="{{asset('frontend/img/logo1.png')}}" alt="Logo Kang Barber" width="250" height=""></div>
								<p class="lead"> <b> Login Admin<i class="lnr lnr-user"></i></b></p>
							</div>
								<div class="form-group">
									<label for="u_email" class="control-label sr-only"></label>
									<input name="u_email" type="email" class="form-control" id="u_email"  placeholder="Masukan email" required>
								</div>
								<div class="form-group">
									<label for="u_password" class="control-label sr-only"></label>
									<input name="u_password" type="password" class="form-control" id="u_password"  placeholder="Masukan Password" required>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="loginUser();">MASUK</button> <br>
							    <p>Buat akun admin <a href=" {{url('/register')}} " class=""><span>Registrasi</span></a></p>
						</div>
					</div>
					<div class="right" style="Background: url('{{config('barber.image_background')}}')" >
						<div class="content text">
                            <h1 class="heading"> Selamat datang <i class="lnr lnr-thumbs-up"></i> </h1>
							<hr>
							<br>
							<p>@KangBarber.co.id</p>
							<hr>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- foot -->


	<!-- end -->

	<!-- END WRAPPER -->


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>
    <script src="{{asset('admin/assets/scripts/relog.js')}}"></script>

<!-- SDK FireBase -->
		<!-- The core Firebase JS SDK is always required and must be listed first -->
			<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
		<!-- TODO: Add SDKs for Firebase products that you want to use
			https://firebase.google.com/docs/web/setup#available-libraries -->
		<script>
		// Your web app's Firebase configuration
		var firebaseConfig = {
			apiKey: "AIzaSyAZw3MrxGhyl7KOUfEn48pjuDU8rABTT8A",
			authDomain: "bokingkangbarers.firebaseapp.com",
			databaseURL: "https://bokingkangbarers.firebaseio.com",
			projectId: "bokingkangbarers",
			storageBucket: "bokingkangbarers.appspot.com",
			messagingSenderId: "65666793632",
			appId: "1:65666793632:web:84128b2cf66b7a0d0909c5"
		};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);
		firebase.auth().onAuthStateChanged(function(user) {
			if (user) {
			
				var uid = user.uid;
				Swal.fire(
					'Selamat!',
					'Registrasi Berhasil!',
					'success'
				)
				window.location.href ="{{url('/loginAdmin')}}"
				// ...
			} else {
				// User is signed out.
				// ...
			}
		});

 function loginUser() {

	var email=document.getElementById("u_email").value;
	var password=document.getElementById("u_password").value;

	firebase.auth().signInWithEmailAndPassword(email,password).then(function() {


    }).catch(function(error) {

			Swal.fire({
					title: 'pastikan email dan password anda benar !',
					animation: false,
					customClass: {
					popup: 'animated tada'
			 }
	     })

    });
	
   


 }
		</script>
<!-- End -->
   
	
	<script>
	//    @if(Session::has('sukses'))
	//       toastr.success("{{Session::get('sukses')}}", "Selamat")
	//    @endif
	</script>
	
</body>
</html>

