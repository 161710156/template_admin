@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('data_pegawai.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('data_pegawai.update',$datpeg->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $datpeg->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nipd') ? ' has-error' : '' }}">
			  			<label class="control-label">NIPD</label>	
			  			<input type="text" name="nipd" class="form-control" value="{{ $datpeg->nipd }}"  required>
			  			@if ($errors->has('nipd'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nipd') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">gambar</label>
                                        <input type="file" name="gambar" value="{{ $datpeg->gambar }}">
                                        @if (isset($datpeg) && $datpeg->gambar)
                                            <p>
                                                <br>
                                            <img src="{{asset('assets/images/avatar/'.$datpeg->gambar)}}" style="width:100px; height:100px;" alt="">
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection