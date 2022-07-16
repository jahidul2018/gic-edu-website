@extends('layouts.backend_layout.main')
@section('backend_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Testimonial Table</h4>
                    <table id="order-listing" class="table table-responsive">
                        <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Student Name</th>
                            <th>Testimonial</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($testimonials as $testimonial)
                             <tr>
                                 <td width="33%">{{$testimonial->id}}</td>
                                 <td width="33%">{{$testimonial->studentName}}</td>
                                 <td width="33%">{{$testimonial->testimonial}}</td>
                                 <td width="33%">
                                     <a href="{{route('testimonial.edit',$testimonial)}}" class="btn btn-sm badge badge-info">Edit</a>
                                     <a href="{{route('testimonial.delete',$testimonial)}}" class="btn btn-sm badge badge-info">Delete</a>
                                 </td>
                             </tr>
                         @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center mt-4">
                        {!! $testimonials->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
