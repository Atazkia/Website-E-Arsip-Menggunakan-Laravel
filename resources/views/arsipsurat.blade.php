@extends('template.main')
@section('title','arsipsurat')
@section('content')

<div class="col-12 text-dark"></div>
  <h2>Arsip Surat</h2>

  <div class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <a style="color: #00478F">Berikut ini adalah surat yang sudah terbit dan diarsipkan.</a>
            <a style="color: #00478F">Klik"Lihat" pada kolom aksi untuk menapilkan hasil</a></div>

  <div class="card">
     <div class="card-header">
        <h4 class="card-title text-color: #eb5e07"><b>HALAMAN PENGAJUAN</b></h4></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Nomor Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arsipsurat as $s)
                            <tr>
                                <td>{{$s->nomer_surat}}</td>              
                                <td>{{$s->kategori}}</td>    
                                <td>{{$s->judul}}</td>
                                <td>{{$s->created_at}}</td>
                                <td>
                                    <a href="/delete/{{ $s->id }}" id="delete{{$s->id}}"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                    <!-- delete -->
    <script>
                            $('#delete{{$s->id}}').on('click', function(e){
                            e.preventDefault();
                            Swal.fire({
                            title: 'Apa anda yakin ingin menghapus data?',
                            icon: 'warning',
                            showCancelButton: true,
                            cancelButtonText: 'Tidak',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Hapus data!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.replace('/delete/{{ $s->id }}');
                                }
                            });
                        })
    </script>
                                    <a href="{{asset('dokumen')}}/{{$s->file}}"  target="_blank" class="btn btn-warning btn-sm"><i class="fa fa-cloud"></i> Unduh</a>
                                    <a href="/view/{{ $s->id }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat</a>
                                </td>
                            </tr>
                            
                            @endforeach
                           
                        </tbody>
                    </table>
                <div class="container" style="margin-left: -15px;">
                    <a href="/create" class="btn btn-primary">Arsipkan Surat</a>
            </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- data table -->
    <script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({
            "columnDefs": [{
                "orderable": false,
                "searchable": true,
                "targets": 1
            }],
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
    
    var select_fields = document.getElementsByTagName('select')
    
    var input_fields = document.getElementsByTagName('input')
    
    
    for (var field in select_fields) {
        select_fields[field].className += ' form-control'
    }
    for (var field in input_fields) {
        input_fields[field].className += ' form-control'
    }
    </script>

@endsection
