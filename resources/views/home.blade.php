@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assalamualaikum </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang di website ini!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
