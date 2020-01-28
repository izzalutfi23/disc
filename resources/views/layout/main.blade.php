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
	.lead{
		font-size: 17px;
	}
	input[type="text"],[type="number"],[type="email"]{
		height: 50px;
	}
	.form-group{
		margin-top: 35px;
	}
	.fa-thumbs-up{
		color: #0CD80C;
		font-size: 20px;
	}
	.fa-thumbs-down{
		color: red;
		font-size: 20px;
	}
	table td{
		padding-top: 5px;
		margin: 0;
	}

	/*radio button*/
	.cont {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 22px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	/* Hide the browser's default radio button */
	.cont input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
	}

	/* Create a custom radio button */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
		border-radius: 50%;
	}

	/* On mouse-over, add a grey background color */
	.cont:hover input ~ .checkmark {
		background-color: #ccc;
	}

	/* When the radio button is checked, add a green background */
	.cont input:checked ~ .checkmark {
		background-color: #0BB20B;
	}

	/* Create the indicator (the dot/circle - hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the indicator (dot/circle) when checked */
	.cont input:checked ~ .checkmark:after {
		display: block;
	}

	/* Style the indicator (dot/circle) */
	.cont .checkmark:after {
		top: 9px;
		left: 9px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: white;
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