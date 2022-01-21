@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Testimonials</div>

                <div class="card-body">
                    <a href="{{ route('testimonials.create') }}" class="btn btn-primary mb-3">Create New</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $index => $testimonial)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $testimonial->description }}</td>
                                    <td>
                                        <a href="{{ route('testimonials.show', $testimonial->id) }}" class="btn btn-link">Show</a>
                                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-link">Edit</a>
                                        <a href="{{ route('testimonials.destroy', $testimonial->id) }}" class="btn btn-link" onclick="event.preventDefault();
                                            document.getElementById('testimonial-delete-{{ $testimonial->id }}').submit();">Delete</a>

                                        <form id="testimonial-delete-{{ $testimonial->id }}" action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" align="center">No data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
