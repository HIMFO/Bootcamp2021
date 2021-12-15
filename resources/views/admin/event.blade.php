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
    <a href="http://localhost:8000/event/add" class="btn btn-secondary px-3 py-2">+ Add</a>
</div>
<div class="container p-4">
    {{-- Tabel --}}
    <div class="row bg-white rounded">
        {{-- Header --}}
        <div class="p-3 col-12 bg-secondary text-white rounded-top">
            <div class="row">
                <div class="col-1">No</div>
                <div class="col-2">Event Name</div>
                <div class="col-2">Description</div>
                <div class="col-3">Image</div>
                <div class="col-2">Last Update</div>
                <div class="col-2">Action</div>
            </div>
        </div>
        {{-- Data --}}
        <div class="p-3 col-12 rounded-bottom">
            <div class="row">
                {{-- No --}}
                <div class="col-1">1</div>
                {{-- Event Name --}}
                <div class="col-2">Welcoming Party HIMFO 2021</div>
                {{-- Description --}}
                <div class="col-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem consectetur nesciunt impedit aliquid numquam? Quis laborum consequuntur praesentium eius fugit!</div>
                {{-- Image --}}
                <div class="col-3">
                    <img src="" alt="image">
                </div>
                {{-- Last Update --}}
                <div class="col-2">11 Agustus 2021</div>
                {{-- Action --}}
                <div class="col-2">
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