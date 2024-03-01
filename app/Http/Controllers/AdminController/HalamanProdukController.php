<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\HalamanProduk;
use Illuminate\Http\Request;

class HalamanProdukController extends Controller
{
    function index()
    {
        $data['list_halaman_produk'] = HalamanProduk::all();
        return view('admin.HalamanProduk.index', $data);
    }

    function create()
    {
        return view('admin.HalamanProduk.create');
    }


    function store(Request $request)
    {
        $halaman_produk = new HalamanProduk();
        $halaman_produk->produk = request('produk');
        $halaman_produk->kategori = request('kategori');
        $halaman_produk->harga = request('harga');
        $halaman_produk->stok = request('stok');
        $halaman_produk->status = request('status');

        $halaman_produk->save();

        $halaman_produk->handLeUploadFoto();

        return redirect('HalamanProduk')->with('succes', 'Data Berhasil di Simpan');
    }

    public function show($id)
    {
        return view('Admin.HalamanProduk.show', [
            'HalamanProduk' => HalamanProduk::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('Admin.HalamanProduk.edit', [
            'HalamanProduk' =>  HalamanProduk::findOrFail($id),
        ]);
    }

    function update($id)
    {
        $halamanproduk = HalamanProduk::find($id);
        if (request('produk')) $halamanproduk->produk = request('produk');
        if (request('kategori')) $halamanproduk->kategori = request('kategori');
        if (request('harga')) $halamanproduk->harga = request('harga');
        if (request('stok')) $halamanproduk->stok = request('stok');
        if (request('status')) $halamanproduk->status = request('status');

        $halamanproduk->save();
        if (request('foto')) $halamanproduk->handLeUploadFoto();

        return redirect('HalamanProduk')->with('success', 'Berhasil di Edit');
    }

    function destroy($id)
    {
        $halamanproduk = HalamanProduk::find($id);
        $halamanproduk->handleDelet();
        $halamanproduk->delete();
        return redirect('HalamanProduk')->with('danger', 'Data Berhasil Dihapus');
    }
}
