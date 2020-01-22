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
</style>
</head>
<body>
	<div class="bs-example">
		<nav style="background-color: #6B6591; padding:20px;" class="navbar navbar-expand-md navbar-dark fixed-top">
			<a href="#" style="padding-left: 8%; font-weight: bold;" class="navbar-brand">DISC Online Test</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ml-auto">
					<a href="#" class="nav-item nav-link">Login</a>
				</div>
			</div>
		</nav>

		<!-- Demo Content -->    
		<div class="container">
			<div class="jumbotron" style="background-color: #FFF;">
				<p style="font-weight: bold;">SOAL DISC TEST</p>
				<hr>
				<p class="lead">The fixed-top navbar bar is fixed at the top of the viewport and does not scroll with the rest of the page.</p>
				awokwokwok
			</div>
		</div>
	</div>
	<nav id="submit" style="border: 1px solid #E5DDDD;" class="navbar navbar-expand-lg bg-light fixed-bottom">
		<ul class="navbar nav ml-auto">
			<li class="nav-item">
				<span id="span"></span>
			</li>
			<li class="nav-item ml-3">
				<a style="font-size: 1.5em; cursor: help;" data-toggle="modal" data-target="#tutorial"><i class="fa fa-question-circle"></i></a>
			</li>
			<li class="nav-item ml-3">
				<button class="btn btn-success">Submit</button>
			</li>
		</ul>
	</nav>
</body>
</html>                            