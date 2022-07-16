@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/USA.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">USA</h2>
        <div class="space10"></div>
        <a href="https://tinyurl.com/USA22S" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">click here to start your education in USA</h6></a>
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
                The United States of America a country in North America, is made up of 50 states, a federal district, and five major self-governing territories, and various possessions. The country is the world’s third largest country by total area and the third-most populous. The USA is a highly developed country and ranks among the highest nations in several measures of socioeconomic performance, including average wage, human development, per capita GDP, and productivity per person. Though its population is only 4.3% of the world total, the USA holds 33.4% of the total wealth in the world, the largest share of global wealth concentrated in a single country.

 

                Throughout its history, the United States has been a nation of immigrants. Moreover, over the past few years, the USA has dominated the globe in being the most popular university destination for students from all over the world. Approximately, fifty percent of the world’s top 50 universities are located in the United States.
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
