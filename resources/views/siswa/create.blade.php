@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('siswa.index') }}" >
			  	<div class="form-group">
			  			<button type="submit" class="btn btn-outline-warning"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</button>
			  		</div>
			  </a>
			  	</div>
			  </div><br><br>
			  <div class="panel-body">
			  	<form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="panel-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

			  		<div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
			  			<label class="control-label">NIS</label>	
			  			<input type="text" name="nis" class="form-control"  required>
			  			@if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="tempat_lahir" class="form-control"  required>
			  			@if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir </label>	
			  			<input type="date" name="tanggal_lahir" class="form-control"  required>
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
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">No Hp</label>	
			  			<input type="text" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		 <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Gambar</label>
                          <div class="col-md-9 pr-1">
                        <input type="file" name="gambar" class="form-control" required>
                            @if ($errors->has('gambar'))
                              <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>


			  		<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<select name="id_kelas" class="form-control">
				  				@foreach($kelas as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
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
			  				<option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">
			  				<i class="fa fa-save">&nbsp</i>Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection