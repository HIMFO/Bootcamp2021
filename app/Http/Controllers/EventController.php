<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function uploadEvent(Request $request){
       $image = $request->image;
       if($image!=null){
        $namafileasli = md5($image->getClientOriginalName());
        $ekstensi = $image->getClientOriginalExtension();
        $namaBaru = '/image/'.time().'-'.$namafileasli.'.'.$ekstensi;
        $path = $image->storeAs('', $namaBaru);
      
       }
       else{
        $namabaru = null;
       }

       $event = Event::insert([
           'nama' => $request->judul,
           'deskripsi'=> $request->deskripsi,
           'image' => $namaBaru,
           'date'=> $request->tanggalPelaksanaan, 
       ]);

       return view('admin.event');
    }

    public function index(){
        $event = Event::all();
        return view('admin.event', ['event1' => $event]);
    }
   
}
