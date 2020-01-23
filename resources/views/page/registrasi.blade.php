@extends('layout/main')
@section('container')
<!-- Content -->    
<div class="container" style="margin-top: 30px;">
	<!-- Material form login -->
	<div class="card">

		<h5 class="card-header info-color white-text text-center py-4">
			<strong>Registrasi</strong>
		</h5>
		<!--Card content-->
		<div class="card-body px-lg-5 pt-4">
			<form>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Nama lengkap">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Usia</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" placeholder="Usia">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio1">Laki-laki</label>
									</div>
								</div>
								<div class="col">
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio2">Perempuan</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
	<!-- Material form login -->
</div>
<!-- End Content -->

<!-- Footer -->
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
<!-- End Footer -->
@endsection()