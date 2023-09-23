<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stay-A-While Temporay Property Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

  	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animate/animate.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/select2/select2.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('reg-css/util.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('reg-css/main.css')}}">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    	    <div class="container">
    	      <a class="navbar-brand" href="/">Stay-A-While.</a>
    	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    	        <span class="oi oi-menu"></span> Menu
    	      </button>

    	      <div class="collapse navbar-collapse" id="ftco-nav">
    	        <ul class="navbar-nav ml-auto">
    	        	<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
    	        	<li class="nav-item"><a href="/properties" class="nav-link">Properties</a></li>
    	        	<li class="nav-item"><a href="/hosts" class="nav-link">Hosts</a></li>
    	        	<li class="nav-item"><a href="/near-me" class="nav-link">Near Me</a></li>
    	        	<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
    	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
    	          <li class="nav-item cta"><a href="#" class="nav-link" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"  onclick="validate()"><span >Sign Up</span></a></li>
    	        </ul>
    	      </div>
    	    </div>
    	  </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Gmail:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label" name="pswd">Password:</label>
                <input type="password" class="form-control" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <a href="/register"> 	 <input type="button" class="btn btn-primary" type="submit" id="pp"
            value="Register"></a>
           <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Login</button>
          </div>
        </div>
      </div>
    </div>



@yield('content')




<footer class="ftco-footer ftco-footer-2 ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Hamlet.</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Company</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQ</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Stories</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Explore</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Privacy</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Policy</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Terms</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Review</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Features</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Get Started</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Buy</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Rent</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Payment</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Mortgage</a></li>
            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Loan</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries.</p>
          <form action="#" class="subscribe-form">
            <div class="form-group">
              <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
              <input type="submit" value="Subscribe" class="form-control submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <a href="https://colorlib.com" target="_blank">Template is referenced from Colorlib&copy;</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/aos.js') }}"></script>
<script src="{{ URL::asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ URL::asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ URL::asset('js/google-map.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('js/reg-main.js')}}"></script>
</body>
</html>
