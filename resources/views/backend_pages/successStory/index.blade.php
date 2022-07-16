@extends('layouts.backend_layout.main')
@section('backend_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Success Story Table</h4>
                    <table id="order-listing" class="table table-responsive">
                        <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Student Name</th>
                            <th>University Name</th>
                            <th>Country Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($successStories as $successStory)
                            <tr>
                                <td>{{$successStory->id}}</td>
                                <td>{{$successStory->studentName}}</td>
                                <td>{{$successStory->univeristyName}}</td>
                                <td>{{$successStory->country->countryName}}</td>

                                <td>
                                    <img class="w-50"  src="{{asset('storage/success-story/'.$successStory->image)}}"  alt="">
                                </td>
                                <td>
                                    <a href="{{route('success.story.edit',$successStory)}}" class="btn btn-sm badge badge-info">Edit</a>
                                    <a href="{{route('success.story.delete',$successStory)}}" class="btn btn-sm badge badge-info">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
