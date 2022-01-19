@extends('layouts.master')

@section('nav-galleries')
active
@endsection

@section('content')

<div class="container p-4">
    <div>
        <h2 class="fw-bold">Add Images</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Galleries</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Images</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container p-4">
    <form class="p-4 bg-white" enctype="multipart/form-data" id="form" method="post" action="{{route('upload.galeri')}}">
        @csrf
        <div class="my-3 d-flex flex-column">
            <label for="judul" class="my-3">Judul Gambar</label>
            <input type="text" name="judul" id="judul" placeholder="Judul Gambar" class="my-3 p-3" required>
        </div>
        <div class="my-3 d-flex flex-column">
            <table class="table-secondary">
                <thead style="height: 3.5rem">
                    <tr class="table100-body bg-secondary text-center text-white">
                        <th class="col-3">Image</th>
                        <th class="col-5">Image Preview</th>
                        <th class="col-2"><button class="btn btn-secondary" id="add-member-fields">+ Add Photo</button></th>
                    </tr>
                </thead>
                <tbody id="team-member-fields">
                </tbody>
            </table>
        </div>
        <button class="btn btn-success">Submit<input type="submit" class="button btn-success d-none" /></button>
    </form>
</div>


@endsection