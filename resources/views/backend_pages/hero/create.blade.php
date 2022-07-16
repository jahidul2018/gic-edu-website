@extends('layouts.backend_layout.main')

@section('backend_content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <h5>Create Hero Section</h5>
                @include('flash_message')
                <form action="{{route('store.front_page_hero')}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="heading">Heading</label>
                      <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Heading">
                    </div>
                    <div class="form-group">
                      <label for="subheading">Sub Heading</label>
                      <input type="text" name="subheading" class="form-control" id="subheading" placeholder="Enter Subheading">
                    </div>
                    <div class="form-group">
                      <label for="writeup">Link Write Up</label>
                      <input type="text" name="linkwriteup" class="form-control" id="writeup" placeholder="Enter Link Write Up">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" id="link" placeholder="Enter Link">
                    </div>
                    <div class="form-group">
                        <label for="link">Image</label>
                        <input type="file" name="image" class="dropify" />
                    </div>
                    <button type="submit" class="btn btn-block btn-success mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection