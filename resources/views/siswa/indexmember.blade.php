@extends('layouts.member')
@section('content')
<h1><center>Siswa</center></h1>
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title pull-right"><a href="{{ route('siswa.create') }}" ><div class="form-group">
              <button type="submit" class="btn btn-outline-primary"><i class="fa fa-plus-square">&nbsp</i>Tambah</button>
            </div></a>
        </div>
      </div>
<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama siswa</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th>Gambar</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th colspan="3">Action</th>
        </tr> 
</thead>
<tbody>
  @php $no = 1; @endphp
  @foreach($siswa as $data)
  <tr>
    <td> {{ $no++ }} </td>
    <td> {{ $data->nis }} </td>
    <td> {{ $data->nama }} </td>  
    <td> {{ $data->tempat_lahir }} </td>
    <td> {{ $data->tanggal_lahir }} </td>
    <td> {{ $data->jk }} </td>
    <td> {{ $data->agama }} </td>
    <td> {{ $data->alamat }} </td>
    <td> {{ $data->no_hp }} </td>
    <td><img src="{{asset('assets/images/avatar/'.$data->gambar)}}"style="max-width: 80px;"></td>
    <td> {{ $data->kelas->nama_kelas }} </td>
    <td> {{ $data->jurusan->nama_jurusan }} </td>
  <td>
    <a class="btn btn-primary" href=" {{ route('siswa.edit',$data->id)}} "><i class="fa fa-file-text">&nbsp</i>Edit</a>
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