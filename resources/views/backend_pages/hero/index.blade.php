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
                        <th>Heading</th>
                        <th>Sub Heading</th>
                        <th>Link Write Up</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($heros as $hero)
                            <tr>
                                <td>{{$hero->id}}</td>
                                <td>{{$hero->heading}}</td>
                                <td>{{$hero->subheading}}</td>
                                <td>{{$hero->linkwriteup}}</td>
                                <td>{{$hero->link}}</td>
                                <td>
                                    <img class="w-50"  src="{{asset('storage/hero/'.$hero->image)}}"  alt="">
                                </td>
                                <td>
                                    <a href="{{route('edit.front_page_hero',$hero->id)}}" class="btn btn-sm badge badge-info">Edit</a>
                                    <a href="{{route('delete.front_page_hero',$hero->id)}}" class="btn btn-sm badge badge-info">Delete</a>
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