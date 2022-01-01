@extends('layouts.master')

@section('nav-blog')
active
@endsection

@section('content')

<div class="container p-4 d-flex justify-content-between align-items-center">
    <div>
        <h2 class="fw-bold">Blog</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
    <a href="http://localhost:8000/blog/add" class="btn btn-secondary px-3 py-2">+ Add New</a>
</div>
<div class="container p-4">
    {{-- Tabel --}}
    <div class="row bg-white rounded">
        {{-- Header --}}
        <div class="p-3 col-12 bg-secondary text-white rounded-top">
            <div class="row text-center">
                <div class="col-1">No</div>
                <div class="col-2">Blog Title</div>
                <div class="col-4">Description</div>
                <div class="col-2">Last Update</div>
                <div class="col-2">Action</div>
            </div>
        </div>
        {{-- Data --}}
        <div class="p-3 col-12 rounded-bottom">
            <div class="row ">
                {{-- No --}}
                <div class="col-1 text-center">1</div>
                {{-- Blog Title --}}
                <div class="col-2">HISTORY OF HIMFO</div>
                {{-- Description --}}
                <div class="col-4">Himpunan Mahasiswa Teknik Informatika Universitas Bina Nusantara atau yang sering kita sebut HIMFO berdiri pertama kali pada tahun 1992, tepatnya pada 14 September 1992. Pencetus ide HIMTI merupakan mantan ketua Jurusan Teknik Informatika yaitu Bpk. Ir. Toto Widyanto, MSc. Pada saat itu, HIMTI dipimpin oleh koordinator umum bernama Sdr. Yusuf Setiyono HIMTI sendiri merupakan organisasi kemahasiswaan yang memiliki bentuk sebagai himpunan antar jurusan School of Computer Science (SOCS).</div>
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