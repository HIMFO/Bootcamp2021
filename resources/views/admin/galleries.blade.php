@extends('layouts.master')

@section('nav-galleries')
active
@endsection

@section('content')
<div class="container pt-4 ps-4">
    <div class="row">
        <div class="col-7">
            <h2 class="fw-bold">Galleries</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galleries</li>
                </ol>
            </nav>
        </div>
        <div class="col-5 pt-3">
            <button class="btn btn-dark float-right py-1 px-3 fs-12" data-bs-toggle="modal" data-bs-target="#modal_add_photo">
                <i class="fas fa-plus me-2"></i>
                Add Photo
            </button>
            {{-- MODAL CENTER--}}
            <div class="modal fade" id="modal_add_photo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content  br-20">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add new photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="title" class="form-label fs-12">Input Title</label>
                                <input type="text" class="form-control br-10 fs-15" id="title" placeholder="Input your image title" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="caption" class="form-label fs-12">Input Galleries Caption</label>
                                <input type="text" class="form-control br-10 fs-15" id="caption" placeholder="Input your image caption">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label fs-12">Choose Image</label>
                                <input class="form-control fs-15" type="file" id="formFile">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-muted" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-dark float-right py-1 px-3 fs-12" type="submit" >
                            Add Photo
                        </button>
                    </div>
                    </div>
                </div>
            </div>
            {{-- MODAL CENTER END --}}
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('assets/img/Gallery-1.png') }}" class="card-img-top br-10" style="height:150px" alt="...">
                <div class="card-body">
                    <p class="fs-12 fw-bold mb-1">Welcome Party HIMFO 2021</p>
                    <p class="fs-8 mb-2">Welcome parti HIMFO 2021 in Binus University. Welcome parti HIMFO 2021 in Binus University</p>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_update_photo">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('assets/img/Gallery-2.png') }}" class="card-img-top br-10" style="height:150px" alt="...">
                <div class="card-body">
                    <p class="fs-12 fw-bold mb-1">Welcome Party HIMFO 2021</p>
                    <p class="fs-8 mb-2">Welcome parti HIMFO 2021 in Binus University. Welcome parti HIMFO 2021 in Binus University</p>
                    <button type="button" class="btn btn-primary btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('assets/img/Gallery-3.png') }}" class="card-img-top br-10" style="height:150px" alt="...">
            <div class="card-body">
                <p class="fs-12 fw-bold mb-1">Welcome Party HIMFO 2021</p>
                <p class="fs-8 mb-2">Welcome parti HIMFO 2021 in Binus University. Welcome parti HIMFO 2021 in Binus University</p>
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL UPDATE CENTER--}}
<div class="modal fade" id="modal_update_photo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content  br-20">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Update photo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="title" class="form-label fs-12">Input Title</label>
                    <input type="text" value="Bootcamp HIMFO 2021" class="form-control br-10 fs-15" id="title" placeholder="Input your image title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="caption" class="form-label fs-12">Input Galleries Caption</label>
                    <input type="text" value="Pelatihan untuk web developer menggunakan laravel" class="form-control br-10 fs-15" id="caption" placeholder="Input your image caption">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label fs-12">Choose Image</label>
                    <input class="form-control fs-15" type="file" id="formFile">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-muted" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-dark float-right py-1 px-3 fs-12" type="submit" >
                Update
            </button>
        </div>
        </div>
    </div>
</div>
{{-- MODAL UPDATE CENTER END --}}
@endsection
