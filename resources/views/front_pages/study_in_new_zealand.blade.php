@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/Newzeland.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">New Zealand</h2>
        <div class="space10"></div>
        <a href="http://bit.ly/giceduNz" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">Apply for student visa</h6></a>
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

                New Zealand is located in the southwestern Pacific Ocean, just south of Australia. The country is actually a number of smaller islands, with two main islands that comprise most of the land area of the country. New Zealand’s capital city is Wellington, while its most populous city is Auckland. New Zealand is a country of stunning and diverse natural beauty. Besides, this is a developed country and ranks highly in international comparisons of national performance, such as health, education, economic freedom and quality of life.

 

From strong international rankings and world-class facilities to expert faculty along with a rich pool of natural resources, New Zealand has proved itself to be the new and upcoming destination for educational opportunities. Education in New Zealand apart from offering a very diverse range of study options for international students in the world ranked universities, also offers affordable cost of education and living, factors that are playing a collective role in gradually making New Zealand one of the world leaders in higher education.
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
