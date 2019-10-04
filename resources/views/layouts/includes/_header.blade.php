   <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="{{config('barber.facebook_url')}} "><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{config('barber.twiter_url')}} "><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{config('barber.instagram_url')}} "><i class="fa fa-instagram"></i></a></li>
								<li><a href="{{config('barber.google_url')}} "><i class="fa fa-google"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="#"><span class="lnr lnr-phone-handset"></span> <span class="text"> {{config('barber.telpon')}} </span></a>
			  				<a href="#"><span class="lnr lnr-envelope"></span> <span class="text">{{config('barber.email')}}</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="#"><img src="{{config('barber.logo_url')}}" alt="" title="" width="150" height="34" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{url('/')}}">Beranda</a></li>		          		          
					  <li><a href="{{url('/about')}}">Tentang Kami</a></li>
					  <li><a href="{{url('/')}}" download>Dokumentasi</a></li>
					  <li><a href="{{url('/login')}}">Login</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header>