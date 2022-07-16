@extends('layouts.backend_layout.main')

@section('backend_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5>Edit Success Story</h5>
                    @include('flash_message')
                    <form action="{{route('success.story.update',$successStory)}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">Student Name</label>
                            <input type="text" value="{{ $successStory->studentName }}" name="student" class="form-control" id="heading" placeholder="Enter partner name">
                        </div>
                        <div class="form-group">
                            <label for="heading">University Name</label>
                            <input type="text" name="university" value="{{ $successStory->universityName }}" class="form-control" id="heading" placeholder="Enter partner name">
                        </div>
                        <div class="form-group">
                            <label for="heading">Semester</label>
                            <input type="text" name="semester" value="{{ $successStory->semester }}" class="form-control" id="heading" placeholder="Enter semester">
                        </div>
                        <div class="form-group">
                            <label for="subheading">Select Country</label>
                            <select  name="country" class="form-control" id="subheading" >

                                @foreach($countries as $country)

                                    <option @if($country->id == $successStory->country_id) {{ 'selected' }} @endif value="{{ $country->id }}">{{ $country->countryName }}</option>

                                @endforeach

                            </select>
                        </div>

                        <div>
                            <h5 class="text-center">Existing Image</h5>
                            <div class="text-center">
                                @if($successStory->image)
                                    <img src="{{asset('/storage/success-story/'.$successStory->image)}}" style="width:200px;" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link">Image</label>
                            <input type="file" name="image" class="dropify" />
                        </div>
                        <button type="submit" class="btn btn-block btn-success mr-2">Update Success Story</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
