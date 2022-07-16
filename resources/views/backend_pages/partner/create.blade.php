@extends('layouts.backend_layout.main')

@section('backend_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5>Create Partner</h5>
                    @include('flash_message')
                    <form action="{{route('partner.store')}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">Partners Name</label>
                            <input type="text" name="name" class="form-control" id="heading" placeholder="Enter partner name">
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
                            <label for="writeup">Website link</label>
                            <input type="text" name="link" class="form-control" id="writeup" placeholder="Enter Universiry link">
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
