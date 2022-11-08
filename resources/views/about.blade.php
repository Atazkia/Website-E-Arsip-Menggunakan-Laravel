@extends('template.main')
@section('title','about')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">About</h4>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('image')}}/swafoto.jpg" style="width: 300px; height:400px;">  
                  
                </div>
                <div class="col-md-8">
                   <h1>Aplikasi ini dibuat oleh:</h1>
                   <h4>Nama: Tazkia Aulia Prismadana</h4>
                   <h4>NIM : 2031730132</h4>
                   <h4>Tempat lahir : Kediri</h4>
                   <h4>Tanggal: 08 Juli 2001</h4>
                </div>
            </div>
        </div>
 
    </div>
</div>
@endsection
