@extends('layouts.backend_layout.main')

@section('backend_content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <h5>Create Extra Mile</h5>
                @include('flash_message')
                
                <form action="{{route('update.extramile',$extramile->id)}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" value="{{$extramile->title}}" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="logo">Logo (example: {{'<i class="fa fa-eye"></i>'}})</label>
                      <input type="text" name="logo" value="{{$extramile->logo}}" class="form-control" id="logo" placeholder="Enter Logo Icon">
                    </div>
                    <div class="form-group">
                      <label for="short_description">Short Description</label>
                      <textarea type="text" name="short_description" class="form-control" id="short_description" placeholder="Enter Short Description">{{$extramile->short_description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-success mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection