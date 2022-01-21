@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create A New Testimonial</div>

                <div class="card-body">
                    <a href="{{ route('testimonials.index') }}" class="btn btn-danger mb-3">Back</a>
                    <form action="{{ route('testimonials.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
