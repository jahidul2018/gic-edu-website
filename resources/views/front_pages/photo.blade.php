@extends('layouts.frontend_layout.main')
@section('frontpage_content')
<?php $url = explode('/',Request::path());?>
<div class=" container-fluid">
    {{--  content-wrapper  --}}

    <div class="wrapper light-wrapper page-title-wrapper">
        <div class="container-fluid inner text-center">
        <h1 class="page-title">Photos Gallery</h1>
        <p class="lead">Read on to learn about our clients success stories and be inspired to write your own!</p>
        </div>
        <div class="space10"></div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
        <div class="container-fluid inner">
            <div class="grid grid-view boxed">
               
                <div class="clearfix"></div>
                <div class="tiles text-center light-gallery-wrapper">
                    <div class="row isotope">
                       
                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/3.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/3.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/4.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/4.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>


                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/5.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/5.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/6.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/6.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/7.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/7.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/11.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/11.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/22.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/22.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/33.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/33.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/44.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/44.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/55.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/55.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/frontend/style/images/photo/10.jpg')}}" class="lightbox"> <img src="{{asset('/frontend/style/images/photo/10.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a></figure>
                                  
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</div>
@endsection
