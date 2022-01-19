<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Gambar;

class GaleriController extends Controller
{
    public function tambahDataGaleri()
    {
        $galeri = new Galeri();
        $galeri->nama = 'galeri 1';
        $galeri->save();
    }

    public function tambahGambar()
    {
        $galeri = new Galeri();
        $galeri = Galeri::find(1);
        $gambar = new Gambar();
        $gambar->nama = 'Gambar 1';
        $galeri->gambar()->save($gambar);
    }

    public function uploadGaleri(Request $request)
    {
        $galeri = new Galeri();
        if ($galeri->where('nama', $request->judul)->exists()) {
            echo ('nama galeri sudah ada');
        } else {
            //simpan nama galeri ke database
            $galeri->nama = $request->judul;
            $galeri->save();
            $galeri->refresh();

            $gambar = $request->images;
            foreach ($gambar as $g) {
                //simpan ke file/folder
                $namaGambar = md5($g->getClientOriginalName());
                $extensi = $g->getClientOriginalExtension();
                $namaBaru = '/Galeri/Gambar/' . time() . '-' . $namaGambar . '.' . $extensi;
                $g->storeAs('', $namaBaru);

                //simpan ke database [relasi]
                $gbr = new Gambar();
                $gbr->nama = $namaBaru;
                $galeri->gambar()->save($gbr);
                $galeri->refresh();
            }
        }
    }

    public function index(){
        // $galeri = new Galeri();
        $galeri = Galeri::all();
        return view('admin.galleries', ['galeri'=>$galeri]);
    }
}
