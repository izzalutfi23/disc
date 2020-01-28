@extends('layout/main')
@section('container')
<!-- Content -->    
<div class="container" style="margin-top: 30px; margin-bottom: 90px;">
	<div class="jumbotron" style="background-color: #FFF;">
		<p style="font-weight: bold;">SOAL DISC TEST</p>
		<hr>
		<p class="lead">The fixed-top navbar bar is fixed at the top of the viewport and does not scroll with the rest of the page.</p>
		<form method="post" action="{{url('/test/postest')}}">
		@csrf
		<input type="hidden" name="nama" value="{{$orang->nama}}">
		<input type="hidden" name="usia" value="{{$orang->usia}}">
		<input type="hidden" name="j_kel" value="{{$orang->j_kel}}">
		<input type="hidden" name="email" value="{{$orang->email}}">
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


<!-- Modal Petunjuk -->
<div class="modal fade" id="tutorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tutorial DISC Test</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>"Tes ini terdiri dari 24 Soal dan 2 jawaban setiap soal. Jawab secara jujur dan spontan. Estimasi waktu pengerjaan adalah 5-10 menit"</p>
				<ul>
					<li>Pelajari semua jawaban pada setiap pilihan</li>
					<li>
						Pilih satu jawaban yang
						<strong>paling mendekati diri kamu</strong>
						(
							<i style="color:#56DB28" class="fa fa-thumbs-up"></i>
						)
					</li>
					<li>
						Pilih satu jawaban yang
						<strong>paling tidak mendekati diri kamu</strong>
						( 
							<i style="color:#E3451E" class="fa fa-thumbs-down"></i>
						)
					</li>
				</ul><br>
				<p>
					Pada setiap soal harus memiliki jawaban
					<ins>satu</ins>
					<strong>paling mendekati diri kamu</strong>
					dan hanya
					<ins>satu</ins>
					<strong>paling tidak mendekati diri kamu</strong>.
				</p>
				<p>
					Terkadang akan sedikit sulit untuk memutuskan jawaban yang terbaik. Ingat, tidak ada jawaban yang benar atau salah dalam tes ini.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Mengerti</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->



<!-- Footer -->
<nav id="submit" style="border: 1px solid #E5DDDD;" class="navbar navbar-expand-lg bg-light fixed-bottom">
	<ul class="navbar nav ml-auto">
		<li class="nav-item">
			<span id="answered" style="color: #A8A7A7">2</span><span style="color: #A8A7A7">/</span><span id="total" style="color: #A8A7A7">24</span> <span style="color: #A8A7A7">Soal Terjawab</span>
		</li>
		<li class="nav-item ml-3">
			<a style="font-size: 1.5em; cursor: help;" data-toggle="modal" data-target="#tutorial"><i class="fa fa-question-circle"></i></a>
		</li>
		<li class="nav-item ml-3">
			<button type="submit" class="btn btn-success">Submit</button>
		</li>
		</form>
	</ul>
</nav>
<!-- End Footer -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#tutorial").modal("toggle");
	});
</script>
@endsection()