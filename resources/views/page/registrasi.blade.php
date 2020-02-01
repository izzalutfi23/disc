@extends('layout/main')
@section('container')
<!-- Content -->    
<div class="container" style="margin-top: 30px; margin-bottom: 90px;">
	<!-- Material form login -->
	<div class="card">

		<h5 class="card-header info-color white-text text-center py-4">
			<strong>Registrasi</strong>
		</h5>
		<!--Card content-->
		<div class="card-body px-lg-5 pt-4">
			<form action="{{url('/test')}}" method="post">
				@csrf
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Nama lengkap" value="{{old('nama')}}">
						@if($errors->has('nama'))<span class="help-block" style="color: red;">{{ ucfirst($errors->first('nama')) }}</span>@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Usia</label>
					<div class="col-sm-10">
						<input type="number" value="{{old('usia')}}" class="form-control" name="usia" placeholder="Usia">
						@if($errors->has('usia'))<span class="help-block" style="color: red;">{{ ucfirst($errors->first('usia')) }}</span>@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="Email">
						@if($errors->has('email'))<span class="help-block" style="color: red;">{{ ucfirst($errors->first('email')) }}</span>@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio1" name="j_kel" value="Laki-laki" class="custom-control-input">
										<label class="custom-control-label" for="customRadio1">Laki-laki</label>
									</div>
								</div>
								<div class="col">
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio2" name="j_kel" value="Perempuan" class="custom-control-input">
										<label class="custom-control-label" for="customRadio2">Perempuan</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
			<button type="submit" class="btn btn-success">Submit</button>
		</li>
	</ul>
</nav>
</form>
<!-- End Footer -->
@endsection()