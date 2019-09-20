<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	{!! config('barber.title_register') !!}
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
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left" style="Background: url('{{config('barber.image_background_register')}}')">
						<div class="content">
							<div class="header">
								<div class="logo text-center img-circle"><img src="{{asset('frontend/img/logo1.png')}}" alt="Logo Kang Barber" width="280" height="75"></div>
								<p class="lead" style="color: #Ffffff;"> <b>Registrasi Admin <i class="lnr lnr-user"></i></b></p>
							</div>
								<div class="form-group">
									<label for="userEmail" class="control-label sr-only"></label>
									<input name="userEmail" type="email" class="form-control" id="userEmail"  placeholder="Masukan Email" required>
								</div>
								<div class="form-group">
									<label for="userPassword" class="control-label sr-only"></label>
									<input name="userPassword" type="password" class="form-control" id="userPassword"  placeholder="Masukan Password" required>
                                </div>
                                <div class="form-group">
									<label for="confirmPassword" class="control-label sr-only"></label>
									<input name="confirmPassword" type="password" class="form-control" id="confirmPassword"  placeholder="Confirm Password" required>
								</div>
								<!-- <div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Ingatkan saya</span>
									</label>
								</div> -->
								<button type="button" class="btn btn-info btn-lg btn-block" onclick="createUser();">REGISTER</button> <br>
								<!-- <div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">lupa password?</a></span>
								</div> -->
						</div>
                    </div>
                    <div class="right" style="Background: url('{{asset('frontend/img/banner5.jpeg')}}')" >
						<div class="content text">
							<h4>@KangBarber.co.id</h4>
							<hr>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->



 <!-- swit alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	
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

		// register

function createUser() {

var email=document.getElementById("userEmail").value;
var password=document.getElementById("userPassword").value;
var confirmPassword=document.getElementById("confirmPassword").value;

console.log(password);
console.log(confirmPassword);

if(password==confirmPassword)  {

	firebase.auth().createUserWithEmailAndPassword(email,password).then(function() {
	  
		}).catch(function(error) {

			var errorMessage=error.message;
				Swal.fire({
				title: 'mohon isi email dan password terlebih dahulu !',
				animation: false,
				customClass: {
					popup: 'animated tada'
				}
			})
		})
		
	// window.location.href="/login";
			firebase.auth().onAuthStateChanged(function(user) {
				if (user) {
					Swal.fire(
					'Selamat!',
					'Registrasi Berhasil !',
					'success'
				)
					firebase.auth().signOut();
					window.location.href = "{{url('/login')}}"
					// ...
				} else {
					// User is signed out.
					
				}
			});

		}else{

		// alert
			Swal.fire({
				type: 'error',
				title: 'Oops...',
				text: 'password harus sama !',
			})

		}

	}

	</script>
<!-- End -->
 


</body>

</html>
