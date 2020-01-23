<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>DISC TEST</title>
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
	.bs-example{
		margin: 40px;
	}
	body{
		padding-top: 70px;
		background: #E5DDDD;
	}
	.jumbotron{
		border-radius: 0px;
		padding-top: 25px;
		padding-bottom: 25px;
	}
	input[type="text"],[type="number"],[type="email"]{
		height: 50px;
	}
	.form-group{
		margin-top: 35px;
	}

</style>
</head>
<body>

	<!-- Header -->
	<nav style="background-color: #6C62AB;" class="navbar navbar-expand-md navbar-dark fixed-top">
		<a href="{{('/')}}" style="padding: 10px 0px 10px 8%; font-weight: bold;" class="navbar-brand">DISC Online Test</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ml-auto" style="background-color: #7E799B; margin: 0;">
				<a href="#" class="nav-item nav-link" style="padding: 20px; color: #FFF;">Selamat Datang @if($orang!=null) {{$orang->nama}} @endif</a>
			</div>
		</div>
	</nav>
	<!-- End Header -->

	@yield('container')

</body>
</html>                            