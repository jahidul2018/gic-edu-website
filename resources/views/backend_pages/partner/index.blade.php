@extends('layouts.backend_layout.main')
@section('backend_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Partners Table</h4>
                    <table id="order-listing" class="table table-responsive">
                        <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Link  Up</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partners as $partner)
                            <tr>
                                <td>{{$partner->id}}</td>
                                <td>{{$partner->name}}</td>
                                <td>{{$partner->country->countryName}}</td>
                                <td>{{$partner->link}}</td>
                                <td>
                                    <img class="w-50"  src="{{asset('storage/partner/'.$partner->image)}}"  alt="">
                                </td>
                                <td>
                                    <a href="{{route('partner.edit',$partner)}}" class="btn btn-sm badge badge-info">Edit</a>
                                    <a href="{{route('partner.delete',$partner)}}" class="btn btn-sm badge badge-info">Delete</a>
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
