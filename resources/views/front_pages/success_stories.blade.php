@extends('layouts.frontend_layout.main')
@section('frontpage_content')
<?php $url = explode('/',Request::path());?>
<div class=" container-fluid">
    {{--  content-wrapper  --}}

    <div class="wrapper light-wrapper page-title-wrapper">
        <div class="container-fluid inner text-center">
        <h1 class="page-title">Success Stories</h1>
        <p class="lead">Read on to learn about our clients success stories and be inspired to write your own!</p>
        </div>
        <div class="space10"></div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
        <div class="container-fluid inner">
            <div class="grid grid-view boxed">
                <div class="isotope-filter text-center">
                <ul>
                    <li><a href="{{url('/success-stories')}}" class="button @if($url[sizeof($url)-1] == 'success-stories') active @else '' @endif successStoriesCountry" data-countryId="all" data-filter="*">All</a></li>
                    @foreach($countries as $country)
                        @if($country->success_stories->count() > 0)
                            {{-- <li><a class="button" data-filter=".{{$country->countryName}}">{{$country->countryName}}</a></li> --}}
                            <li><a href="{{url('/success-stories',$country->countryName)}}" class="button @if($url[sizeof($url)-1] == $country->countryName) active @else '' @endif successStoriesCountry">{{$country->countryName}}</a></li>
                        @endif
                    @endforeach
                </ul>
                </div>
                <div class="clearfix"></div>
                <div class="tiles text-center light-gallery-wrapper">
                    <div class="row isotope">
                        @foreach($success_stories as $success_story)
                            <div class="item grid-sizer col-md-6 col-lg-4 {{$success_story->country->countryName}}">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/storage/success-story/'.$success_story->image)}}" class="lightbox"> <img src="{{asset('/storage/success-story/'.$success_story->image)}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h2 class="post-title mb-10">{{$success_story->studentName}}</h2>
                                        <div class="meta mb-0">{{$success_story->universityName}}</div>
                                        <div class="meta mb-0">{{$success_story->country->countryName}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row" style="overflow: scroll;overflow-y: hidden!important;">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-center mt-4 mb-4">
                        {!! $success_stories->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
