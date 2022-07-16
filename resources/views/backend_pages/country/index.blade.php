@extends('layouts.backend_layout.main')
@section('backend_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data table</h4>
                    <table id="order-listing" class="table table-responsive">
                        <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Name</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($countries as $country)
                             <tr>
                                 <td width="33%">{{$country->id}}</td>
                                 <td width="33%">{{$country->countryName}}</td>
                                 <td width="33%">
                                     <a href="{{route('country.edit',$country)}}" class="btn btn-sm badge badge-info">Edit</a>
                                     <a href="{{route('country.delete',$country->id)}}" class="btn btn-sm badge badge-info">Delete</a>
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
