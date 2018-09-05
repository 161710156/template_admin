@extends('layouts.member')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading"> 
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('pertanyaan.store') }}" method="post" >
                    {{ csrf_field() }}
                    <!-- <div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Siswa</label>  
                        <select name="id_user" class="form-control">
                                @foreach($user as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
                    </div> -->

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
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
              </div>
            </div>  
        </div>
    </div>
</div>
@endsection