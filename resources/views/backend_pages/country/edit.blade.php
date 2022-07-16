@extends('layouts.backend_layout.main')

@section('backend_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5>Edit Country</h5>
                    @include('flash_message')
                    <form action="{{route('country.update',$country)}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">Edit country Name</label>
                            <input type="text" name="name" value="{{ $country->countryName }}" class="form-control" id="heading" required placeholder="Enter country">
                        </div>


                        <button type="submit" class="btn btn-block btn-success mr-2">Update Country</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
