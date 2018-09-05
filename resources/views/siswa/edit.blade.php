@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('siswa.index') }}"><button type="submit" class="btn btn-outline-warning"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('siswa.update',$siswa->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
			  			<label class="control-label">NIS</label>	
			  			<input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}"  required>
			  			@if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}"  required>
			  			@if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" name="tanggal_lahir" class="form-control" value="{{ $siswa->tanggal_lahir }}"  required>
			  			@if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin </label>	<br>
			  			<label class="radio-inline">
			  			<input type="radio" name="jk" value="Laki-laki"  required>Laki-laki</label>
			  			<label class="radio-inline">
			  			<input type="radio" name="jk" value="Perempuan"  required>Perempuan</label>
			  			@if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama </label>	<br>
			  			<label class="radio-inline">
			  			<input type="radio" name="agama" value="Islam"  required>Islam</label>
			  			<label class="radio-inline">
			  			<input type="radio" name="agama" value="Kristen"  required>Kristen</label>
			  			<label class="radio-inline">
			  			<input type="radio" name="agama" value="Katolik"  required>Katolik</label>
			  			<label class="radio-inline">
			  			<input type="radio" name="agama" value="Hindu"  required>Hindu</label>
			  			<label class="radio-inline">
			  			<input type="radio" name="agama" value="Budha"  required>Budha</label>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $siswa->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">No Hp</label>	
			  			<input type="text" name="no_hp" class="form-control" value="{{ $siswa->no_hp }}"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">gambar</label>
                                        <input type="file" name="gambar" value="{{ $siswa->gambar }}">
                                        @if (isset($siswa) && $siswa->gambar)
                                            <p>
                                                <br>
                                            <img src="{{asset('assets/images/avatar/'.$siswa->gambar)}}" style="width:100px; height:100px;" alt="">
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                              

			  		<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<select name="id_kelas" class="form-control">
			  				@foreach($kelas as $data)
			  				<option value="{{ $data->id }}" {{ $selecteda == $data->id ? 'selected="selected"' : '' }}> {{ $data->nama_kelas }} </option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jurusan</label>	
			  			<select name="id_jurusan" class="form-control">
			  				@foreach($jurusan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedb == $data->id ? 'selected="selected"' : '' }}> {{ $data->nama_jurusan }} </option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusan') }}</strong>
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