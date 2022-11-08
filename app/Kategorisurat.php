<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorisurat extends Model
{
    //nama tabel yang akan digunakan yaitu tabel arsipsurat
    protected $table = 'arsipsurat';
     
    //kolom tabel yang boleh diisi
    protected $fillable = ['id','nomer_surat','id_kategori','judul','file'];

}
