<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Arsipsurat;
use App\Kategorisurat;

class ArsipsuratController extends Controller
{
    
    public function index(){
    // mengambil data dari table arsipsurat
        
        $arsipsurat = Arsipsurat::join('kategori as k','k.id','=','arsipsurat.id_kategori')->selectRaw("arsipsurat.*, k.id as user_id,kategori")->get();
    
        return view('arsipsurat', compact('arsipsurat'));
    }

     //membuat fungsi mengambil data kategori
     public function create()
     {
        $kategori = DB::table('kategori')->get();
       
        return view('create', compact('kategori'));
     }
    
     //membuat fungsi simpan data
     public function store(Request $request)
     {
           //validasi 
           $this->validate($request,[
            'nomer_surat' => 'required',
            'id_kategori' => 'required',
            'judul' => 'required',
            'file' => 'required|mimes:pdf',
        ],[
            'nomer_surat.required' => 'Masukkan nomer surat !',
            'id_kategori.required' => 'Masukkan kategori!',
            'judul.required' => 'Masukkan judul!',
            'file.mimes' => 'Format file harus PDF!',
            'file.required' => 'File tidak boleh kosong!',
            
        ]);
        // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
     
            $nama_file = time()."_".$file->getClientOriginalName();
     
        // mendefinisikan tujuan upload dan mencopi file ke dalamnya
            $tujuan_upload = 'dokumen';
            $file->move($tujuan_upload,$nama_file);
            
        //memasukkan ke dalam database
         Arsipsurat::create([
             'nomer_surat' => $request->nomer_surat,
             'id_kategori' => $request->id_kategori,
             'judul' => $request->judul,
             'file' => $nama_file,
         ]);
    
         return redirect('/');	
     }

     //menampilkan data
    public function view($id){
        $arsipsurat = Arsipsurat::join('kategori as k','k.id','=','arsipsurat.id_kategori')->selectRaw("arsipsurat.*, k.id as user_id,kategori")->where('arsipsurat.id',$id)->get();
    
       return view('view', compact('arsipsurat'));
    }
    //mengupdate file
    public function updatefile($id){
        $arsipsurat = DB::table('arsipsurat')->where('id',$id)->get();
    
        return view('update', compact('arsipsurat'));
    
    }
    //menyimpan update file dalam database
    public function update(Request $request, Arsipsurat $arsipsurat){
    
        $this->validate($request, [
            'file' => 'required|mimes:pdf',
        ],[
            'file.mimes' => 'Format file harus PDF!',
            'file.required' => 'File tidak boleh kosong!',
           
        ]);
    
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
    
        $nama_file = time()."_".$file->getClientOriginalName();
    
          // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dokumen';
        $file->move($tujuan_upload,$nama_file);
            DB::table('arsipsurat')->where('id',$request->id)->update([
                'nomer_surat' => $request->nomer_surat,
                'id_kategori' => $request->id_kategori,
                'judul' => $request->judul,
                'file' => $nama_file,
                ]);
    
    return redirect('/');
    
    }

    //menghapus data
    public function delete($id)
    {
        $arsipsurat = Arsipsurat::find($id);
        $arsipsurat->delete();
        return redirect('/');
    }

    //menuju about
    public function about()
    {
        
        return view('about');
    }

}
