@extends('admin/layout/main')
@section('title', 'Hasil Test')
@section('container')

<section class="content-header">
	<h1>
		Data User Tes
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Hasil Tes</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="5%">No</th>
									<th>Nama</th>
									<th>Usia</th>
									<th>Email</th>
									<th>Jenis Kelamin</th>
									<th width="5%">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($hasil as $data)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$data->nama}}</td>
									<td>{{$data->usia}}</td>
									<td>{{$data->email}}</td>
									<td>{{$data->j_kel}}</td>
									<td>
										<a href="{{url('/disc/usertest/'.$data->id)}}"><button class="btn btn-danger">Lihat Hasil Tes</button></a>
									</td>
								</tr>
							</tbody>
							@endforeach
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</div>
</section>
@endsection()