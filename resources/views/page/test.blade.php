@extends('layout/main')
@section('container')
<!-- Content -->    
<div class="container" style="margin-top: 30px; margin-bottom: 90px;">
	<div class="jumbotron" style="background-color: #FFF;">
		<p style="font-weight: bold;">SOAL DISC TEST</p>
		<hr>
		<p class="lead">The fixed-top navbar bar is fixed at the top of the viewport and does not scroll with the rest of the page.</p>
		<div class="row">
			@for ($i = 1; $i <= 24; $i++)
			<div class="col-sm-6" style="margin-top: 20px;">
				<div class="card">
					<div class="card-body">
						<table width="100%">
							<tr>
								<td></td>
								<td><i class="fa fa-thumbs-up"></i></td>
								<td><i class="fa fa-thumbs-down"></i></td>
								<td><h6 class="card-title" style="font-weight: bold; color: #9A9797;">Gambaran Diri</h6></td>
							</tr>
							@php
								$huruf = ['A', 'B', 'C' , 'D'];
								$num = -1;
							@endphp
							@for ($j = 1; $j <= 4; $j++)
							@php
							$num++;
							$key = $huruf[$num];
							@endphp
							<tr>
								@if($key == 'A')
								<td rowspan="4" valign="top"><h6 class="card-title" style="font-weight: bold; color: #9A9797;">{{$i}}</h6></td>
								@endif
								<td width="9%" valign="top">
									<label class="cont">
										<input type="radio" name="radio1">
										<span class="checkmark"></span>
									</label>
								</td>
								<td width="9%" valign="top">
									<label class="cont">
										<input type="radio" name="radio2">
										<span class="checkmark"></span>
									</label>
								</td>
								<td><p style="color: #9A9797;">Gambaran Diri</p></td>
							</tr>
							@endfor
						</table>
					</div>
				</div>
			</div>
			@endfor
		</div>

	</div>
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