@extends('layouts.register')
@section('content')

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/pic.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{URL::to('/regformvalidate1')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title">
					Registeration
					</span>
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					<label for="fname">First Name</label>
					<div class="wrap-input100 validate-input" data-validate = "Please fill First Name">
						<input class="input100" type="text" name="fname" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<label for="lname">Last Name</label>
					<div class="wrap-input100 validate-input" data-validate = "Please fill Last Name">
						<input class="input100" type="text" name="lname" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<label for="photo">Profile Photo</label>
					<div class="wrap-input100 validate-input" data-validate = "Please upload photo">
						<input class="input100" type="file" name="photo" placeholder="" style="padding-top:12px;">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-camera-retro" aria-hidden="true"></i>
						</span>
					</div>

					<label for="nrc">NRC</label>
           <div class="wrap-input100 validate-input" data-validate = "Please fill NRC">
						<input class="input100" type="text" name="nrc" placeholder="NRC">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>

					</div>
					<div class="radio">
 					<label><input type="radio" name="gender" checked>&nbsp;&nbsp; Male</label>&nbsp;&nbsp;&nbsp;
 					<label><input type="radio" name="gender">&nbsp;&nbsp; Female</label>&nbsp;&nbsp;&nbsp;
					<label><input type="radio" name="gender">&nbsp;&nbsp; Other</label>
					</div>

					<div class="container-login100-form-btn">
							<a href="/register2"><button class="login100-form-btn" type="submit">Next</button></a>
					</div>

					<div class="text-center p-t-12"> <br>
				<!--		<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-16">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<br> -->
				</form>
			</div>
		</div>
	</div>
@endsection
