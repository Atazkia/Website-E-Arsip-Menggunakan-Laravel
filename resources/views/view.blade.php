@extends('template.main')
@section('title','lihat surat')
@section('content')

<div class="container col-12">
  <div class="col-12 text-dark"></div>
    <h2>Arsip Surat >> Lihat</h2>
      <div class="card">
        <div class="card-body">

     <form>
    @foreach ($arsipsurat as $s)
            <div class="form-group row">
              <label for="nomer_surat" class="col-sm-2 col-form-label">Nomor</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="nomer_surat" value=": &nbsp;{{$s->nomer_surat}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="nomer_surat" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="nomer_surat" value=": &nbsp; {{$s->kategori}}">
              </div>
            </div>
          
            <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Judul</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="judul" value=": &nbsp; {{$s->judul}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Waktu Unggah</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="judul" value=": &nbsp; {{$s->created_at}}">
              </div>
            </div>
    @endforeach
  </form>

<iframe src="{{asset('dokumen')}}/{{$s->file}}" width="100%" height="1000"></iframe>
<div class="form-group">
    <a href="{{ URL::previous() }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a> 
        <a href="{{asset('dokumen')}}/{{$s->file}}" class="btn btn-success"><i class="fa fa-cloud"></i> Unduh</a>
            <a href="/update/{{ $s->id }}" class="btn btn-primary"><i class="fa fa-file"></i> Edit/Ganti File</a></div>
               
  </div> 
  @endsection