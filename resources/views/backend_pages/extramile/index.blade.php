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
                        <th>Title</th>
                        <th>Logo</th>
                        <th>Short Description</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($extramiles as $extramile)
                            <tr>
                                <td>{{$extramile->id}}</td>
                                <td>{{$extramile->title}}</td>
                                <td>{!!$extramile->logo!!}</td>
                                <td>{{$extramile->short_description}}</td>
                                <td>
                                    <a href="{{route('edit.extramile',$extramile->id)}}" class="btn btn-sm badge badge-info">Edit</a>
                                    <a href="{{route('delete.extramile',$extramile->id)}}" class="btn btn-sm badge badge-info">Delete</a>
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