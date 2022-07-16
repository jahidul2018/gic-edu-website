@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/UK.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">United Kingdom</h2>
        <div class="space10"></div>
        <a href=" https://tinyurl.com/UK22in" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">Apply for student visa</h6></a>
        {{--  <a href="#" class="btn btn-white btn-strong-hover mb-0">Contact Us</a>  --}}
        </div>
        <!-- /.container -->
    </div>


    <div class="wrapper white-wrapper">
        <div class="container inner p-2">
        
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="section-title mb-40 text-left mt-20" style=" ">About Country</h2>
              <p class="display-4">The United Kingdom comprises the whole of the island of Great Britain which contains England, Wales, and Scotland as well as the northern portion of the island of Ireland. The name Britain is sometimes used to refer to the United Kingdom as a whole. Once a ‘great’ nation, at its zenith, the British Empire stretched over one-fourth of the earth’s surface. The capital is London, which is among the world’s leading commercial, financial, and cultural centers. The UK is known as the home of both modern parliamentary democracy and the Industrial Revolution. The United Kingdom is a developed country and has the world’s fifth-largest economy by nominal GDP.
                The UK has become one of the top destinations to study around the world. With traditions of excellence dating back hundreds of years, high-class institutions in every corner and much more flexibility than many other countries, the United Kingdom has much to offer international students that other English-speaking countries cannot offer. Degrees and qualifications from UK higher education institutions are known around the world as high quality and world class.</p>
              <p></p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>


@endsection
