@extends('layouts.master')

@section('nav-dashboard')
active
@endsection

@section('content')
<div class="container pt-4 ps-4">
    <h2 class="fw-bold">Dashboard</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <p class="mt-4">Welcome,</p>
    <div class="logo-user">
        <img src="{{ asset('assets/img/User.png') }}" class="me-2" width="30px" alt="Logo admin">
        <span class="fw-bold" style="font-size: 25px">
            Deni Kurniawan
        </span>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="card bg-black text-white">
                <div class="card-body p-0 text-center pt-3">
                    <p class="m-0 fs-12">Total Event</p>
                    <p class="fs-60 m-0 fw-bold">20</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body p-0 text-center pt-3">
                    <p class="m-0 fs-12">Total Blog</p>
                    <p class="fs-60 m-0 fw-bold">45</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body p-0 text-center pt-3">
                    <p class="m-0 fs-12">Total Galleries</p>
                    <p class="fs-60 m-0 fw-bold">120</p>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-4">Upcoming Event</p>
    <div class="row">
        <div class="col-5">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/Card.png') }}" class="img-fluid h-100 w-100 br-left" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Bootcamp HIMFO 2021</h5>
                            <p class="card-text fs-12 text-muted">10 December 2021</p>
                            <a href="" class="fs-12 text-muted text-decoration-none">
                                Lihat detail
                                <i class="fas fa-arrow-right ms-2" style="font-size: 10px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/Card.png') }}" class="img-fluid h-100 w-100 br-left" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Bootcamp HIMFO 2021</h5>
                            <p class="card-text fs-12 text-muted">10 December 2021</p>
                            <a href="" class="fs-12 text-muted text-decoration-none">
                                Lihat detail
                                <i class="fas fa-arrow-right ms-2" style="font-size: 10px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
