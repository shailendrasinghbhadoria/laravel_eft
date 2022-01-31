<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>EFT</title>
<link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}" />
<script type="text/javascript" src="{{url('js/app.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
</head>
<body style="background:#f3f3f3 url({{url('images/bg_login_top.jpg')}})no-repeat top center;">
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
                @error('email')
                    <p class="text-danger ml-4 mb-4">{{$message}}</p>
                @enderror			
				<form action="{{ route('userAuthenticate') }}" method="POST">
                    @csrf                   
					<label for="login">Username:</label>
					<input id="login" name="email" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" name="btn" class="ok">Login</button> 
				</form>
			</div>
			
		</div>
	</div>
</div>
