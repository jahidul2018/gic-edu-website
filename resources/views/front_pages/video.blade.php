@extends('layouts.frontend_layout.main')
@section('frontpage_content')
<?php $url = explode('/',Request::path());?>
<div class=" container-fluid">
    {{--  content-wrapper  --}}

    <div class="wrapper light-wrapper page-title-wrapper">
        <div class="container-fluid inner text-center">
        <h1 class="page-title">Videos Gallery</h1>
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
                                   
                                      <a href="https://www.facebook.com/watch/?v=505398157772647" class=""> <img src="{{asset('/frontend/style/images/photo/2.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a>
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <a href="https://www.facebook.com/gicedultd/videos/938380396819745" class=""> <img src="{{asset('/frontend/style/images/photo/arif.png')}}" style="height: 200px;object-fit: contain;" alt="" /></a>
                                   
                                  
                                </div>
                            </div>


                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <a href="https://www.facebook.com/gicedultd/videos/284361203621961" class=""> <img src="{{asset('/frontend/style/images/photo/8.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a>
                                   
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <a href="https://www.facebook.com/gicedultd/videos/356226279731984" class=""> <img src="{{asset('/frontend/style/images/photo/SHEIKH MURSALIN SHOMUDRO.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a>
                                   
                                  
                                </div>
                            </div>

                            <div class="item grid-sizer col-md-6 col-lg-4 ">
                                <div class="box bg-white shadow p-30">
                                    <a href="https://www.facebook.com/gicedultd/videos/" class=""> <img src="{{asset('/frontend/style/images/photo/Sanjeda Sultana Thumbnail.jpg')}}" style="height: 200px;object-fit: contain;" alt="" /></a>
                                   
                                  
                                </div>
                            </div>


                           
                       
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</div>
@endsection
