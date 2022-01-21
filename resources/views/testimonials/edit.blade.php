@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Your Testimonial</div>

                <div class="card-body">
                    <a href="{{ route('testimonials.index') }}" class="btn btn-danger mb-3">Back</a>
                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description">{{ $testimonial->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
