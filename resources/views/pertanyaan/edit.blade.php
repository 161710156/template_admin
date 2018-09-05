@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('pertanyaan.index') }}">
			  		<button type="submit" class="btn btn-outline-warning"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</button>
			  	</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pertanyaan.update',$pertanyaan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Siswa</label>  
                        <select name="id_siswa" class="form-control">
                                @foreach($siswa as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_siswa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswa') }}</strong>
                            </span>
                        @endif
                    </div>

			  		<div class="form-group {{ $errors->has('pertanyaan') ? ' has-error' : '' }}">
                        <label class="control-label">Pertanyaan</label>    
                        <textarea name="pertanyaan" class="ckeditor" required>
                        @if ($errors->has('pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pertanyaan') }}</strong>
                            </span>
                        @endif
                    </textarea>
                    </div>

                    <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                        <label class="control-label">Tanggal</label>    
                        <input type="date" name="tanggal" class="form-control"  required>
                        @if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
                    </div>


			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary"><i class="fa fa-plus-square">&nbsp</i>Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection