@extends('admin/layout/main')
@section('title', 'Soal')
@section('container')

@if (session('status'))
<section class="content-header">
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-check"></i> Berhasil!</h4>
		{{session('status')}}
	</div>
</section>
@endif

<section class="content-header">
	<h1>
		Data Soal
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Mahasiswa</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</button>
					<!-- Modal tambah soal -->
					<div class="modal fade" id="exampleModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Data Soal</h4>
									</div>
									<div class="modal-body">
										<form action="{{url('/disc/soal')}}" method="post">
											@csrf
											<div class="form-group">
												<label for="exampleInputEmail1">Nomor Soal</label>
												<select name="nomor" class="form-control">
													<option value="0">--Pilih--</option>
													@foreach($no as $nomor)
														<option value="{{$nomor->nomor}}">{{$nomor->nomor}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label>Pilihan 1</label>
														<input type="text" name="pilihan1" class="form-control" placeholder="Gambaran 1">
													</div>
													<div class="col-sm-3">
														<label>Key Most</label>
														<select name="keym1" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
													<div class="col-sm-3">
														<label>Key Least</label>
														<select name="keyl1" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label>Pilihan 2</label>
														<input type="text" name="pilihan2" class="form-control" placeholder="Gambaran 2">
													</div>
													<div class="col-sm-3">
														<label>Key Most</label>
														<select name="keym2" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
													<div class="col-sm-3">
														<label>Key Least</label>
														<select name="keyl2" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label>Pilihan 3</label>
														<input type="text" name="pilihan3" class="form-control" placeholder="Gambaran 3">
													</div>
													<div class="col-sm-3">
														<label>Key Most</label>
														<select name="keym3" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
													<div class="col-sm-3">
														<label>Key Least</label>
														<select name="keyl3" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label>Pilihan 4</label>
														<input type="text" name="pilihan4" class="form-control" placeholder="Gambaran 4">
													</div>
													<div class="col-sm-3">
														<label>Key Most</label>
														<select name="keym4" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
													<div class="col-sm-3">
														<label>Key Least</label>
														<select name="keyl4" class="form-control">
															<option value="0">--Key--</option>
															<option value="D">D</option>
															<option value="I">I</option>
															<option value="S">S</option>
															<option value="C">C</option>
															<option value="B">*</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Tambah</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="5%">No</th>
									<th>Soal</th>
									<th width="5%">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pilihan as $data)
								<tr>
									<td>{{$data->nomor}}</td>
									<td>
										{{$data->soal}}
									</td>
									<td>
										<button data-toggle="modal" data-target="#del{{$data->nomor}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
										<!-- Hapus -->
										<div id="del{{$data->nomor}}" class="modal fade" tabindex="-1" role="dialog">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title">Hapus Data Mahasiswa</h4>
													</div>
													<div class="modal-body">
														<p>Data dengan nomor <b>{{$data->nomor}}</b> akan dihapus!!!</p>
													</div>
													<div class="modal-footer">
														<form action="{{url('/disc/soal/'.$data->nomor)}}" method="post" class="d-inline">
															@method('delete')
															@csrf
															<button type="submit" class="btn btn-danger">Hapus</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								@endforeach
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>
		@endsection()