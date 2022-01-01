@extends('layouts.master')

@section('nav-blog')
active
@endsection

@section('content')

<div class="container p-4">
    <div>
        <h2 class="fw-bold">Update Blog</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Blog</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container p-4">
    <form method="post" class="p-4 bg-white">
        <div class="my-3 d-flex flex-column">
            <label for="judul" class="my-3">Judul Blog</label>
            <input type="text" name="judul" id="judul" placeholder="Judul Blog" class="my-3 p-3" required>
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="desc" class="my-3">Deskripsi Blog</label>
            <div id="editor"></div>
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