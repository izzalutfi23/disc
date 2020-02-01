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
			@for ($i = 1; $i <= 4; $i++)
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
							$disc = ['D', 'I', 'S', 'C', '*'];
							$num = -1;
							$totalsoal = $totalsoal+1;
							@endphp
							@for ($j = 1; $j <= 4; $j++)
							@php
							$num++;
							$key = $huruf[$num];
							$keydisc = $disc[$num];
							@endphp
							<tr>
								@if($key == 'A')
								<td rowspan="4" valign="top" data-id="{{ $i }}" class="num"><h6 class="card-title"  style="font-weight: bold; color: #9A9797;">{{$i}}</h6></td>
								@endif
								<td width="9%" valign="top">
									<label class="cont">
										<input type="radio" name="y[{{$i}}]" id="{{$keydisc}}m" class="{{$i}}-y" value="{{$key}}">
										<span class="checkmark"></span>
									</label>
								</td>
								<td width="9%" valign="top">
									<label class="cont">
										<input type="radio" name="n[{{$i}}]" id="{{$keydisc}}l" class="{{$i}}-n" value="{{$key}}">
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
	<!-- <p>Most : <span class="Dm">0</span> D &ndash; <p><span class="Im">0</span> I &ndash; <p><span class="Sm">0</span> S &ndash; <span class="Cm">0</span> C</p>
	<p>Most : <span class="Dl">0</span> D &ndash; <p><span class="Il">0</span> I &ndash; <p><span class="Sl">0</span> S &ndash; <span class="Cl">0</span> C</p> -->
	<ul class="navbar nav ml-auto">
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
	// Count DISC Most
	$(document).ready(function() {
		$('input').change(function(){
			var D = $('#Dm:checked').length
			var I = $('#Im:checked').length
			var S = $('#Sm:checked').length
			var C = $('#Cm:checked').length 
			$('.Dm').text(D)
			$('.Im').text(I)
			$('.Sm').text(S)
			$('.Cm').text(C)                        
		})
	});
	// Count DISC Lost
	$(document).ready(function() {
		$('input').change(function(){
			var D = $('#Dl:checked').length
			var I = $('#Il:checked').length
			var S = $('#Sl:checked').length
			var C = $('#Cl:checked').length 
			$('.Dl').text(D)
			$('.Il').text(I)
			$('.Sl').text(S)
			$('.Cl').text(C)                        
		})
	});

	// Modal dialog tutorial
	$(document).ready(function(){
		$("#tutorial").modal("toggle");
	});

</script>

<!-- End Footer -->
@endsection()