@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/Sweden.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">Sweden </h2>
        <div class="space10"></div>
        <a href="https://tinyurl.com/Swe100" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">click here to start your education in Sweden</h6></a>
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
                Sweden, officially the Kingdom of Sweden, is a Scandinavian country in Northern Europe. The country has the largest population among the Nordic countries and is the third-largest country in the European Union by surface area. Sweden has been ranked the world’s best country for immigrants. In spite of its position in northernmost Europe, the climate is comparatively mild. Sweden is characterized by its long coastlines, large forests, and numerous lakes.

 

Sweden joined the EU in 1995. The country is one of the world’s most highly developed post-industrial societies. Aided by peace and neutrality for the whole of the 20th century, Sweden has achieved an enviable standard of living under a mixed system of high-tech capitalism and extensive welfare benefits. It has a modern distribution system, excellent internal and external communications, and a skilled labor force. Besides, over the years, universities in the country have been steadily building their reputation as great educational providers.
         
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
