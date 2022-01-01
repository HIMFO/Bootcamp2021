@extends('layouts.master')

@section('nav-galleries')
active
@endsection

@section('content')

<div class="container p-4 d-flex justify-content-between align-items-center">
    <div>
        <h2 class="fw-bold">Galleries</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galleries</li>
            </ol>
        </nav>
    </div>
    <a href="http://localhost:8000/event/add" class="btn btn-secondary px-3 py-2">+ Add Photo</a>
</div>
<div class="container p-4">
    {{-- Tabel --}}
    <div class="row bg-white rounded">
        {{-- Header --}}
        <div class="p-3 col-12 bg-secondary text-white rounded-top">
            <div class="row text-center">
                <div class="col-1">No</div>
                <div class="col-3">Photo Title</div>
                <div class="col-4">Image</div>
                <div class="col-2">Last Update</div>
                <div class="col-2">Action</div>
            </div>
        </div>
        {{-- Data --}}
        <div class="p-3 col-12 rounded-bottom">
            <div class="row ">
                {{-- No --}}
                <div class="col-1 text-center">1</div>
                {{-- Event Name --}}
                <div class="col-3">Welcoming Party HIMFO 2021</div>
                {{-- Image --}}
                <div class="col-4">
                    <img src="" alt="image">
                </div>
                {{-- Last Update --}}
                <div class="col-2 text-center">11 Agustus 2021</div>
                {{-- Action --}}
                <div class="col-2 d-flex justify-content-around align-items-center">
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection