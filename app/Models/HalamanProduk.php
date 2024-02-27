<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HalamanProduk extends Model
{
    protected $table = 'halaman_produk';
    protected $fillable = [
        'produk','kategori','harga','stok','status','foto'
    ];
    function handLeUploadFoto()
    {
        $this->handLeUploadFoto();
        if (request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/halaman_prduk";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "_" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "" . $url;  //ini buat nampilin foto di frontend
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        return true;
    }
}
