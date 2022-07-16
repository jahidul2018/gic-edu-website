@extends('layouts.backend_layout.main')

@section('backend_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5>Create Testimonial</h5>
                    @include('flash_message')
                    <form action="{{route('testimonial.store')}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">Enter Student Name</label>
                            <input type="text" name="name" class="form-control" id="heading" required placeholder="Enter Student Name">
                        </div>

                        <div class="form-group">
                            <label for="heading">Enter Testimonial</label>
                            <textarea type="text" name="testimonial" class="form-control" id="heading" required placeholder="Enter Testimonial"></textarea>
                        </div>


                        <button type="submit" class="btn btn-block btn-success mr-2">Create Testimonial</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
