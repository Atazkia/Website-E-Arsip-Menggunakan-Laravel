@extends('template.main')
@section('title','update surat')
@section('content')


<div class="container col-12">
<div class="col-12 text-dark"></div>
<h2>Arsip Surat >> Update file</h2>
  <div class="card"> 
     <div class="card-body">

     @foreach($arsipsurat as $s)
        <form class="col-md-12" action="/update" method="post" enctype="multipart/form-data">
        {{ csrf_field() }} 
    
          <div class="hidden">
              <label for="id" class="form-label"><b></b></label>
              <input  type="hidden" class="form-control" name="id" value="{{ $s->id }}" >
          </div> 
        
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="nomer_surat" class="form-label"><b>No Surat</b></label>
              <input  type="text" class="form-control" name="nomer_surat" value="{{ $s->nomer_surat }}" >

              <label for="file" class="form-label"><b>File Surat (PDF)</b></label>
              <input type="file" accept="application/pdf" class="form-control" name="file" value="{{$s->file }}" >
    
              <label for="judul" class="form-label"><b>Judul</b></label>
              <input  type="text" class="form-control" name="judul" value="{{ $s->judul }}" >
    
              <label for="id_kategori" class="form-label"><b> ID Kategori</b></label>
              <input readonly type="text" class="form-control" name="id_kategori" value="{{ $s->id_kategori }}" >

            </div>
        </div>
        <a href="{{ URL::previous() }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> &nbsp; KEMBALI</a>
            <button type="submit" class="btn btn-info"><i class="fa fa-edit" onclick="return confirm('Apakah data sudah benar?')"></i> &nbsp; UPDATE</button> &nbsp;
           
        </form>
      @endforeach 
  </div>
@endsection