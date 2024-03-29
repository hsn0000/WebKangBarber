<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('/frontend')}}/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		@yield('head')
        
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">							
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
		</head>
		<body>	
     @include('layouts.includes._header')
		<!-- #header -->
     @yield('content')		

	 @include('layouts.includes._footer')

	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
       
	   <script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	   <script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>			
	   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		 <script src="{{asset('/frontend')}}/js/easing.min.js"></script>			
	   <script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
	   <script src="{{asset('/frontend')}}/js/superfish.min.js"></script>	
	   <script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
	   <script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>	
	   <script src="{{asset('/frontend')}}/js/jquery.tabs.min.js"></script>						
	   <script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>	
	   <script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>									
	   <script src="{{asset('/frontend')}}/js/mail-script.js"></script>	
	   <script src="{{asset('/frontend')}}/js/main.js"></script>

	   <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
	   <!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-firestore.js"></script>
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

	</script>


	@yield('footer')
	   

	</body>
	</html>