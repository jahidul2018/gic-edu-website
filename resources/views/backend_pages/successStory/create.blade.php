@extends('layouts.backend_layout.main')

@section('backend_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5>Create Success Story</h5>
                    @include('flash_message')
                    <form action="{{route('success.story.store')}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">Student Name</label>
                            <input type="text" name="student" class="form-control" id="heading" placeholder="Enter student name">
                        </div>
                        <div class="form-group">
                            <label for="heading">University Name</label>
                            <input type="text" name="university" class="form-control" id="heading" placeholder="Enter university name">
                        </div>
                        <div class="form-group">
                            <label for="heading">Semester</label>
                            <input type="text" name="semester" class="form-control" id="heading" placeholder="Enter semester">
                        </div>
                        <div class="form-group">
                            <label for="subheading">Select Country</label>
                            <select  name="country" class="form-control" id="subheading" >

                                @foreach($countries as $country)
                                    <option selected disabled></option>
                                    <option value="{{ $country->id }}">{{ $country->countryName }}</option>

                                @endforeach

                            </select>
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
