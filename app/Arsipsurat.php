<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsipsurat extends Model
{
  
    //nama tabel yang akan digunakan yaitu tabel proker
    protected $table = 'arsipsurat';
     
    //kolom tabel yang boleh diisi
    protected $fillable = ['id','nomer_surat','id_kategori','judul','file'];

}
