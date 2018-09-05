@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('jurusan.index') }}"><button type="submit" class="btn btn-outline-warning"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jurusan.update',$jurusan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jurusan</label>	
			  			<input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}"  required>
			  			@if ($errors->has('nama_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary"><i class="fa fa-save">&nbsp</i>Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection