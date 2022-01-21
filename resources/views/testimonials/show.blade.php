@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Show Your Testimonial</div>

                <div class="card-body">
                    <a href="{{ route('testimonials.index') }}" class="btn btn-danger mb-3">Back</a>
                    <hr>
                    {{ $testimonial->description }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
