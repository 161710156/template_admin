@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('pertanyaan.create') }}" >
					<div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i>Tambah</button>
                    </div></a>
				</div>
			</div>
<div class="panel-body">
	<h1><center>Pertanyaan</center></h1>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Siswa</th>
					<th>Pertanyaan</th>
					<th>Tanggal</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($pertanyaan as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->User->name }} </td>
		<td> {!! $data->pertanyaan !!} </td>
	<td>
		<a class="btn btn-primary" href=" {{ route('jawab.create',$data->id)}} "><i class="fa fa-file-text">&nbsp</i>Jawab</a>
	</td>
	<td>
							<form method="post" action="{{ route('pertanyaan.destroy',$data->id) }}">
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