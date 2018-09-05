@extends('layouts.admin')
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
                <form action="{{ route('jawab.store') }}" method="post" >
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('jawaban') ? ' has-error' : '' }}">
                        <label class="control-label">Jawaban</label>    
                        <textarea name="jawaban" class="ckeditor" required>
                        @if ($errors->has('jawaban'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jawaban') }}</strong>
                            </span>
                        @endif
                    </textarea>
                    </div>

                    <div class="form-group {{ $errors->has('id_pertanyaan') ? ' has-error' : '' }}">
                        <label class="control-label">Pertanyaan</label>  
                        <select name="id_pertanyaan" class="form-control">
                                @foreach($pertanyaan as $data)
                            <option value="{{ $data->id }}">{{ $data->pertanyaan }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_pertanyaan') }}</strong>
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