@extends('layout/main')
@section('container')
<div class="container" style="margin-top: 30px; margin-bottom: 20px;">
	<div class="jumbotron" style="background-color: #FFF;">
		<p style="font-weight: bold;">Hasil DISC TEST</p>
		<hr>
		<div class="row">
			<div class="col-sm-4"><p class="lead">Nama : {{$orang->nama}}</p></div>
			<div class="col-sm-2"><p class="lead">Usia : {{$orang->usia}}</p></div>
			<div class="col-sm-3"><p class="lead">Jenis Kelamin : {{$orang->j_kel}}</p></div>
			<div class="col-sm-3"><p class="lead">Email : {{$orang->email}}</p></div>
		</div>
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr bgcolor="#F3EEEE">
					<th>Line</th>
					<th>D</th>
					<th>I</th>
					<th>S</th>
					<th>C</th>
					<th>*</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">MOST</th>
					<td>3</td>
					<td>3</td>
					<td>3</td>
					<td>3</td>
					<td>3</td>
				</tr>
				<tr>
					<th scope="row">LEAST</th>
					<td>3</td>
					<td>3</td>
					<td>3</td>
					<td>3</td>
					<td>3</td>
				</tr>
				<tr>
					<th scope="row">CHANGE</th>
					<td>3</td>
					<td>3</td>
					<td>3</td>
					<td>3</td>
					<td>3</td>
				</tr>           
			</tbody>
		</table>

		<div class="row" style="margin-top: 50px;">
			<div class="col-sm-4">
				<canvas id="chart1"></canvas>
				<hr>
				<h6 style="color: #9A9797;">MASK/PUBLIC SELF</h6>
				<p style="font-weight: bold; font-size: 20px;">LOGICAL THINKER</p>
				<ul style="list-style-type: square; color: #888787;">
					<li>Pendiam</li>
					<li>Anti Kritik</li>
					<li>Perfeksionis</li>
					<li>Cenderung Santai</li>
					<li>Detail</li>
					<li>Empati</li>
					<li>Rapi</li>
					<li>Organized</li>
					<li>Kaku pada Metode & Prosedur</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<canvas id="chart2"></canvas>
				<hr>
				<h6 style="color: #9A9797;">CORE/PRIVATE SELF</h6>
				<p style="font-weight: bold; font-size: 20px;">PRECISIONIS</p>
				<ul style="list-style-type: square; color: #888787;">
					<li>Sistematis dan Prosedural</li>
					<li>Teratur & memiliki perencanaan yang baik</li>
					<li>Teliti</li>
					<li>Fokus pada Detail</li>
					<li>Bijaksana</li>
					<li>Diplomatis</li>
					<li>Jarang menentang rekan kerjanya</li>
					<li>Organized</li>
					<li>Ia sangat berhati-hati</li>
					<li>Mengharapkan akurasi dan standard tinggi</li>
					<li>Menginginkan adanya petunjuk standard</li>
					<li>Tidak menginginkan perubahan mendadak</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<canvas id="chart3"></canvas>
				<hr>
				<h6 style="color: #9A9797;">MIRROR/PERCEIVED SELF</h6>
				<p style="font-weight: bold; font-size: 20px;">PRECISIONIS</p>
				<ul style="list-style-type: square; color: #A8A7A7;">
					<li>Sistematis dan Prosedural</li>
					<li>Anti Kritik</li>
					<li>Teratur & memiliki perencanaan yang baik</li>
					<li>Teliti</li>
					<li>Fokus pada Detail</li>
					<li>Bijaksana</li>
					<li>Diplomatis</li>
					<li>Organized</li>
					<li>Jarang menentang rekan kerjanya</li>
					<li>Organized</li>
					<li>Ia sangat berhati-hati</li>
					<li>Mengharapkan akurasi dan standard tinggi</li>
					<li>Menginginkan adanya petunjuk standard</li>
					<li>Tidak menginginkan perubahan mendadak</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<p style="font-weight: bold; font-size: 20px;">DESKRIPSI KEPRIPADIAN</p>
				<p style="color: #A8A7A7;">Berpikir sistematis dan cenderung mengikuti prosedur dalam kehidupan pribadi dan pekerjaannya. Teratur dan memiliki perencanaan yang baik, ia teliti dan fokus pada detil. Ia bertindak dengan penuh kebijaksanaan, diplomatis dan jarang menentang rekan kerjanya dengan sengaja. Ia sangat berhati-hati, ia sungguh-sungguh mengharapkan akurasi dan standard tinggi dalam pekerjaannya. Ia cenderung terjebak dalam hal detil, khususnya jika harus memutuskan. ia menginginkan adanya petunjuk standard pelaksanaan kerja dan tanpa perubahan mendadak.</p>
			</div>
			<div class="col-sm-4">
				<p style="font-weight: bold; font-size: 20px;">JOB MATCH</p>
				<p style="color: #A8A7A7;">Engineering, Research Director, Production and Finance (Director, Manager, Supervisor), Work Study, Accountant, Administrator, Quality Controller, Financial Services Manager, Safety Officer, Market Analyst, Planner and Personnel (Director, Manager, Administrator), MIS Manager, Electrician, Security Manager, Financial Researcher, Planner, Printer, Production Controller, Production Manager, Personnel Management, Loss Control.</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('/js/Chart.js')}}"></script>

<!-- Chart 1 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart1").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [-3,4,-1,5.3],
				fill: false,
				borderColor: '#A947FD',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<!-- Chart 2 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [0.5,0,-4,0],
				fill: false,
				borderColor: 'green',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<!-- Chart 3 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [0.5,-3.5,1,5.5],
				fill: false,
				borderColor: '#FC6A30',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
@endsection