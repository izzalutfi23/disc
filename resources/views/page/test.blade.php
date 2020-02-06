@extends('layout/main')
@section('container')
<!-- Content -->    
<div class="container" style="margin-top: 30px; margin-bottom: 90px;">
	<div class="jumbotron" style="background-color: #FFF;">
		<p style="font-weight: bold;">SOAL DISC TEST</p>
		<hr>
		<p class="lead">Tes ini terdiri dari 24 Soal dan 2 jawaban setiap soal. Jawab secara jujur dan spontan. Estimasi waktu pengerjaan adalah 5-10 menit.</p>
		<form method="post" action="{{url('/test/postest')}}">
		@csrf
		<input type="hidden" name="nama" value="{{$orang->nama}}">
		<input type="hidden" name="usia" value="{{$orang->usia}}">
		<input type="hidden" name="j_kel" value="{{$orang->j_kel}}">
		<input type="hidden" name="email" value="{{$orang->email}}">
		<div class="row">
			@php
				$totalsoal = 0;
			@endphp
			@foreach($soal as $data)
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
							$totalsoal = $totalsoal+1;
							$json = json_decode($data->soal);
							@endphp
							@foreach($json as $pilihan)
							@php
							$num++;
							$key = $huruf[$num];
							@endphp
							<tr>
								@if($key == 'A')
								<td rowspan="4" valign="top" data-id="{{ $data->nomor }}" class="num"><h6 class="card-title"  style="font-weight: bold; color: #9A9797;">{{$data->nomor}}</h6></td>
								@endif
								<td width="9%" valign="top">
									<label class="cont">
										<input type="radio" name="y[{{$data->nomor}}]" id="{{$pilihan->keym}}m" class="{{$data->nomor}}-y" value="{{$key}}">
										<span class="checkmark"></span>
									</label>
								</td>
								<td width="9%" valign="top">
									<label class="cont">
										<input type="radio" name="n[{{$data->nomor}}]" id="{{$pilihan->keyl}}l" class="{{$data->nomor}}-n" value="{{$key}}">
										<span class="checkmark"></span>
									</label>
								</td>
								<td><p style="color: #9A9797;">{{$pilihan->pilihan}}</p></td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
			@endforeach
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

	<input type="hidden" id="D" name="Dm">
	<input type="hidden" id="I" name="Im">
	<input type="hidden" id="S" name="Sm">
	<input type="hidden" id="C" name="Cm">
	<input type="hidden" id="B" name="Bm">

	<ul class="navbar nav ml-auto">
	<input type="hidden" id="K" name="Dl">
	<input type="hidden" id="O" name="Il">
	<input type="hidden" id="L" name="Sl">
	<input type="hidden" id="E" name="Cl">
	<input type="hidden" id="H" name="Bl">
		<li class="nav-item">
			<span id="answered" style="color: #A8A7A7">0</span><span style="color: #A8A7A7">/</span><span id="total" style="color: #A8A7A7">{{$totalsoal}}</span> <span style="color: #A8A7A7">Soal Terjawab</span>
		</li>
		<li class="nav-item ml-3">
			<a style="font-size: 1.5em; cursor: help;" data-toggle="modal" data-target="#tutorial"><i class="fa fa-question-circle"></i></a>
		</li>
		<li class="nav-item ml-3">
			<button type="submit" id="btn-submit" class="btn btn-success" disabled>Submit</button>
		</li>
		</form>
	</ul>
</nav>



<!-- Tutorial -->
<!-- http://jsfiddle.net/AnWU3/4/ -->

<script type="text/javascript">
	$(document).on("change", "input[type=radio]", function(){
		var className = $(this).attr("class");
		var currentNumber = className.split("-")[0];
		var currentCode = className.split("-")[1];
		var oppositeCode = currentCode == "y" ? "n" : "y";
		var currentValue = $(this).val();
		var oppositeValue = $("." + currentNumber + "-" + oppositeCode + ":checked").val();

		// Detect if one question has same answer
		if(currentValue == oppositeValue){
			$("." + currentNumber + "-" + oppositeCode + ":checked").prop("checked", false);
			oppositeValue = $("." + currentNumber + "-" + oppositeCode + ":checked").val();
		}


		var Dm = $('#Dm:checked').length
		var Im = $('#Im:checked').length
		var Sm = $('#Sm:checked').length
		var Cm = $('#Cm:checked').length
		var Bm = $('#Bm:checked').length
		document.getElementById('D').value = Dm;
		document.getElementById('I').value = Im;
		document.getElementById('S').value = Sm;
		document.getElementById('C').value = Cm;
		document.getElementById('B').value = Bm;

		var Dl = $('#Dl:checked').length
		var Il = $('#Il:checked').length
		var Sl = $('#Sl:checked').length
		var Cl = $('#Cl:checked').length
		var Bl = $('#Bl:checked').length
		document.getElementById('K').value = Dl;
		document.getElementById('O').value = Il;
		document.getElementById('L').value = Sl;
		document.getElementById('E').value = Cl;
		document.getElementById('H').value = Bl;


		// Count answered question
		countAnswered();

		// Enable submit button
		var totalQuestion = document.getElementById('total').innerHTML;
		countAnswered() >= totalQuestion ? $("#btn-submit").removeAttr("disabled") : $("#btn-submit").attr("disabled", "disabled");
	});

	// Count answered question
	function countAnswered(){
		var total = 0;
		$(".num").each(function(key, elem){
			var id = $(elem).data("id");
			var mValue = $("." + id + "-y:checked").val();
			var lValue = $("." + id + "-n:checked").val();
			mValue != undefined && lValue != undefined ? total++ : "";
		});
		$("#answered").text(total);
		return total;
	}

	// Modal dialog tutorial
	$(document).ready(function(){
		$("#tutorial").modal("toggle");
	});

</script>

<!-- End Footer -->
@endsection()