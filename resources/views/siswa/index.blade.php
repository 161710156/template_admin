@extends('layouts.admin')
@section('content')
<h1><center>Siswa</center></h1>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('siswa.create') }}" >
						<button type="submit" class="btn btn-outline-primary">
					<i class="fa fa-plus-square">&nbsp</i>Tambah</button>
			  	</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama siswa</th>
					<th>Gambar</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($siswa as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nis }} </td>
		<td><img src="{{asset('assets/images/avatar/'.$data->gambar)}}"style="max-width: 80px;"></td>
		<td> {{ $data->kelas->nama_kelas }} </td>
		<td> {{ $data->jurusan->nama_jurusan }} </td>
	<td>
		<a class="btn btn-outline-primary" href=" {{ route('siswa.edit',$data->id)}} "><i class="fa fa-file-text">&nbsp</i>Edit</a>
	</td>
	<td>
								<form method="post" action="{{ route('siswa.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash">&nbsp</i>Delete</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection