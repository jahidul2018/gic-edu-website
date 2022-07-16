@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/Denmark.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">Denmark </h2>
        <div class="space10"></div>
        <a href="https://tinyurl.com/dan22ed" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">Apply for student visa</h6></a>
        {{--  <a href="#" class="btn btn-white btn-strong-hover mb-0">Contact Us</a>  --}}
        </div>
        <!-- /.container -->
    </div>


    <div class="wrapper white-wrapper">
        <div class="container inner p-2">
        
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="section-title mb-40 text-left mt-20" style=" ">About Country</h2>
              <p class="display-4">
                Denmark, officially the Kingdom of Denmark, is a Nordic country and a sovereign state. The southernmost of the Scandinavian nations, it is south-west of Sweden and south of Norway, and bordered to the south by Germany. Once the seat of Viking raiders and later a major north European power, Denmark has evolved into a modern, prosperous nation that is participating in the general political and economic integration of Europe. It joined NATO in 1949 and EU in 1973.

 

Denmark emerged from its colonial experience with one of the highest standards of living in Europe, with a comparatively liberal attitude towards immigration. The kingdom has a well-developed social welfare system and as a nation is committed to the development and to the protection of the environment. Moreover, Denmark having the excellent educational system is popular study destination.
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
