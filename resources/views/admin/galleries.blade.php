@extends('layouts.master')

@section('nav-galleries')
    active
@endsection

@section('content')

    <div class="container p-4">
        <h2 class="fw-bold">Galleries</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galleries</li>
            </ol>
        </nav>
    </div>
    <form class="container p-4">
        <div class="my-3 d-flex flex-column">
            <label for="caption" class="my-3"><b>Input galleries caption:</b></label>
            <input type="text" name="caption" id="caption" class="my-3 p-3">
        </div>
        <div class="my-3 d-flex flex-column">
            <p class="my-3"><b>Input Image file:</b></p>
            {{-- Tabel --}}
            <form class="row bg-white">
                {{-- Table Header --}}
                <div class="col-12 bg-secondary rounded-top">
                    <div class="row text-white">
                        <div class="col-1 p-0">
                            <div class="p-3">
                                <p><b>No</b></p>
                            </div>
                        </div>
                        <div class="col-5 p-0">
                            <div class="p-3">
                                <p><b>File Name</b></p>
                            </div>
                        </div>
                        <div class="col-3 p-0">
                            <div class="p-3">
                                <p><b>Image</b></p>
                            </div>
                        </div>
                        <div class="col-3 p-0">
                            <div class="p-3">
                                <p><b>Action</b></p>
                            </div>
                        </div>
                    </div>      
                </div>
                {{-- Input Image --}}
                <div class="col-12 input_image">
                    <div class="row">
                        <div class="col-12 row">
                            <div class="col-1 p-0">
                                <div class="p-3">
                                    <p>1</p>
                                </div>
                            </div>
                            <div class="col-5 p-0">
                                <div class="p-3">
                                    <input type="text" name="judul" id="judul">
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="p-3">
                                    <input type="file" name="foto" id="foto" onchange="loadFile(event)">
                                    <img src="" alt="Uploaded Image" id="uploadImage">
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="p-3">
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
                    {{-- New Element here! --}}
                    
                </div>
                {{-- Button Add Image --}}
                <div class="col-12 p-3 d-flex justify-content-center align-items-center bg-secondary rounded-bottom text-white">
                    <p>+ Add Image</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <button class="btn btn-primary p-3" type="submit">Submit</button>
        </div>
    </form>
    <script>
        let num = 1
        document.querySelector('form > div > div.d-flex').addEventListener('click', e => {
            num++
            document.querySelector('form .input_image > div').innerHTML += 
            `
            <div class="col-12 row">
                <div class="col-1 p-0">
                    <div class="p-3">
                        <p>${num}</p>
                    </div>
                </div>
                <div class="col-5 p-0">
                    <div class="p-3">
                        <input type="text" name="judul" id="judul">
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="p-3">
                        <input type="file" name="foto" id="foto" onchange="loadFile(event)">
                        <img src="" alt="Uploaded Image" id="uploadImage">
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="p-3">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            `
        })
        function loadFile(event) {
            let output = document.querySelector('#uploadImage')
            output.src = URL.createObjectURL(event.target.files[0])
        }
    </script>

@endsection
