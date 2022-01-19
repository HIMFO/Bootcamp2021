@extends('layouts.master')

@section('nav-event')
active
@endsection

@section('content')

<div class="container p-4">
    <div>
        <h2 class="fw-bold">Add Event</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Event</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container p-4">
    <form method="POST" class="p-4 bg-white" enctype="multipart/form-data" action="{{route('uploadEvent')}}">
        @csrf
        <div class="my-3 d-flex flex-column">
            <label for="judul" class="my-3">Event name</label>
            <input type="text" name="judul" id="judul" placeholder="Nama event" class="my-3 p-3">
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="desc" class="my-3">Deskripsi event</label>
            {{-- <div id="editor"></div> --}}
            <input type="text" name="deskripsi">
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="Tanggal Pelaksanaan" class="my-3">Tanggal Pelaksanaan</label>
            <input type="date" name="tanggalPelaksanaan" placeholder="Tanggal pelaksanaan" class="p-2">
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="image" class="my-3">Upload gambar</label>
            <input type="file" name="image" id="image" class="my-3" onchange="loadFile(event)">
            <img src="" alt="Your image" id="uploadImage" height="300" width="300">
        </div>
        <button class="btn btn-secondary px-3 py-2 my-3">Submit</button>
    </form>
</div>
<script>
    function loadFile(event) {
        let output = document.querySelector('#uploadImage')
        output.src = URL.createObjectURL(event.target.files[0])
    }
</script>

@endsection