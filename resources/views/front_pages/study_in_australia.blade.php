@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/Australia.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">Australia </h2>
        <div class="space10"></div>
        <a href="http://bit.ly/AUSEDU" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">click here to start your education in Australia</h6></a>
        {{--  <a href="#" class="btn btn-white btn-strong-hover mb-0">Contact Us</a>  --}}
        </div>
        <!-- /.container -->
    </div>


    <div class="wrapper white-wrapper">
        <div class="container inner">
        
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="section-title mb-40 text-left mt-20" style=" ">About Country</h2>
              <p class="display-4">
                Known as ‘the land down under’, Australia is the world’s sixth largest country situated between the Indian and the Pacific Ocean. Australia follows a Westminster system of government which facilitates vibrant entrepreneurial development. Its robust free-market democracy has benefited from its government. It is a dynamic and attractive destination for investment.

 

Australia is a highly developed country. It has a strong economy and a high GDP per capita. Immigration to Australia is comparatively easy. Students can apply for Permanent Residency in Australia while studying.
           
            </p>
              <p></p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>


@endsection
