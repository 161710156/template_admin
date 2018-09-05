@extends('layouts.admin')
@section('content')
<h1><center>Jurusan</center></h1>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title pull-right">
						<a href="{{ route('jurusan.create') }}" >
						<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary"><i class="fa fa-plus-square">&nbsp</i>Tambah</button>
			  		</div>
			  	</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Jurusan</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($jurusan as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama_jurusan }} </td>	
	<td>
		<a class="btn btn-outline-primary" href=" {{ route('jurusan.edit',$data->id)}} "><i class="fa fa-file-text">&nbsp</i>Edit</a>
	</td>
	<td>
							<form method="post" action="{{ route('jurusan.destroy',$data->id) }}">
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