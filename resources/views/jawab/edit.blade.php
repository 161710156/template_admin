@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Edit Jawab
			  	<div class="panel-title pull-right"><a href="{{ route('jawab.index') }}">
			  	<button type="submit" class="btn btn-outline-warning"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jawab.update',$jawab->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('jawab') ? ' has-error' : '' }}">
			  			<label class="control-label">Jawab</label>	
			  			<input type="text" name="jawab-" class="form-control" value="{{ $jawab->jawab }}"  required>
			  			@if ($errors->has('jawab'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jawab') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_pertanyaan') ? ' has-error' : '' }}">
			  			<label class="control-label">Pertanyaan</label>	
			  			<input type="text" name="id_pertanyaan" class="form-control" value="{{ $pertanyaan->id_pertanyaan }}"  required>
			  			@if ($errors->has('id_pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_pertanyaan') }}</strong>
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