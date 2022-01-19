@extends('layouts.master')

@section('nav-event')
active
@endsection

@section('content')

<div class="container p-4 d-flex justify-content-between align-items-center">
    <div>
        <h2 class="fw-bold">Event</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Event</li>
            </ol>
        </nav>
    </div>
    <a href="http://localhost:8000/event/add" class="btn btn-secondary px-3 py-2">+ Add New</a>
</div>
<div class="container p-4">
    {{-- Tabel --}}
    <div class="row bg-white rounded">
        {{-- Header --}}
        <div class="p-3 col-12 bg-secondary text-white rounded-top">
            <div class="row text-center">
                <div class="col-1">No</div>
                <div class="col-2">Event Name</div>
                <div class="col-2">Description</div>
                <div class="col-3">Image</div>
                <div class="col-2">Tanggal Pelaksanaan</div>
                <div class="col-2">Action</div>
            </div>
        </div>
        {{-- Data --}}
        <div class="p-3 col-12 rounded-bottom">
            @foreach ($event1 as $e)
            <div class="row ">
                {{-- No --}}
                <div class="col-1 text-center">1</div>
                {{-- Event Name --}}
                <div class="col-2">{{$e->nama}}</div>
                {{-- Description --}}
                <div class="col-2">{{$e->deskripsi}}</div>
                {{-- Image --}}
                <div class="col-3">
                    <img src="{{$e->image}}" alt="image" style="height: 150px;width: 180px;">
                </div>
                {{-- Tanggal Pelaksanaan --}}
                <div class="col-2 text-center">{{$e->date}}</div>
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
            @endforeach
        </div>
    </div>
</div>

@endsection