@extends('layouts.backend_layout.main')

@section('backend_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5>Update Partner</h5>
                    @include('flash_message')
                    <form action="{{route('partner.update',$partner)}}" method="POST" class="forms-sample mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">Partners Name</label>
                            <input type="text" value="{{ $partner->name }}" name="name" class="form-control" id="heading" placeholder="Enter partner name">
                        </div>
                        <div class="form-group">
                            <label for="subheading">Select Country</label>
                            <select  name="country" class="form-control" id="subheading" >

                                @foreach($countries as $country)

                                    <option @if($country->id == $partner->country_id) {{ 'selected' }} @endif value="{{ $country->id }}">{{ $country->countryName }}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="writeup">Website link</label>
                            <input type="text" value="{{ $partner->link }}" name="link" class="form-control" id="writeup" placeholder="Enter Universiry link">
                        </div>

                        <div>
                            <h5 class="text-center">Existing Image</h5>
                            <div class="text-center">
                                @if($partner->image)
                                    <img src="{{asset('/storage/partner/'.$partner->image)}}" style="width:200px;" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link">Image</label>
                            <input type="file" name="image" class="dropify" />
                        </div>
                        <button type="submit" class="btn btn-block btn-success mr-2">Update Partner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
