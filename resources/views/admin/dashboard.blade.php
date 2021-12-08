@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('nav-dashboard')
active
@endsection

@section('content')
<div class="container-fluid px-4">
    <h2 class="fw-bold">Dashboard</h2>
    <nav aria-label="breadcrumb" style="font-size: 11px">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active fw-bold">Dashboard</li>
        </ol>
    </nav>
    <div class="mt-5">
        <p>Welcome,</p>
        <img src="{{ asset('assets/img/User.png') }}" class="me-2" height="50px" alt="User">
        <span style="font-size:25px" class="fw-bold">
            Deni Kurniawan
        </span>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body text-center">
                    <p class="card-text mb-0">Event</p>
                    <p class="fw-bold p-0 m-0" style="font-size:60px">16</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body text-center">
                    <p class="card-text mb-0">Blog</p>
                    <p class="fw-bold p-0 m-0" style="font-size:60px">20</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body text-center">
                    <p class="card-text mb-0">Galleries</p>
                    <p class="fw-bold p-0 m-0" style="font-size:60px">120</p>
                </div>
            </div>
        </div>
    </div>

    <p class="mt-4">Upcoming Event</p>
    <div class="row">
        <div class="col-5">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/card.png') }}" style="width:100%;height:100%"  class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <p class="card-title fw-bold mb-0">Bootcamp HIMFO 2021</p>
                            <p class="card-text" style="font-size:12px">
                                <small class="text-muted">25 Oktober 2021</small>
                            </p>
                            <a href="#" class="text-muted fw-bold" style="color:rgb(212, 212, 212) !important;text-decoration: none;font-size:10px">
                                Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/card.png') }}" style="width:100%;height:100%" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <p class="card-title fw-bold mb-0">Bootcamp HIMFO 2021</p>
                            <p class="card-text" style="font-size:12px">
                                <small class="text-muted">25 Oktober 2021</small>
                            </p>
                            <a href="#" class="text-muted fw-bold" style="color:rgb(212, 212, 212) !important;text-decoration: none;font-size:10px">
                                Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
