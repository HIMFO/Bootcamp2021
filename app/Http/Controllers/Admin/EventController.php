<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function uploadEvent(Request $request)
    {
        $image = $request->image;
        if ($image != null) {
            // proses upload image to server
            $namafileasli = md5($image->getClientOriginalName());
            $ekstensi = $image->getClientOriginalExtension();
            $namaBaru = '/image/' . time() . '-' . $namafileasli . '.' . $ekstensi;
            $path = $image->storeAs('', $namaBaru);
        } else {
            $namabaru = null;
        }

        $event = Event::create([
            'nama' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $namaBaru,
            'date' => $request->tanggalPelaksanaan,
        ]);

        return redirect()->route('admin.event');
    }

    public function index()
    {
        $events = Event::all(); // select * from events

        return view('admin.event', compact(
            'events'
        ));
    }
}
