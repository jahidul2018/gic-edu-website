@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/Canada.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">Canada </h2>
        <div class="space10"></div>
        <a href="https://tinyurl.com/Can21s" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">click here to start your education in Canada</h6></a>
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

                Canada is located in the northern part of North America. Its ten provinces and three territories covering 9.98 million square kilometers, making it the largest country in North America, second in the world overall. It is highly urbanized with 82 percent of the total population. The country is officially bilingual at the federal level and ranks among the highest in international measurements of government transparency and civil liberties. Its advanced economy is the tenth-largest in the world, relying chiefly upon its abundant natural resources and well-developed international trade networks.

 

Canada is one of the world’s most ethnically diverse and multicultural nations, the product of large-scale immigration from many other countries. The United Nations ranked Canada one of the best countries in the world in which to live. The country also claimed the number one spot as the best place to study, while also ranking high for working, visiting and investing. Canada is globally recognized for its outstanding quality of life and economic freedom.
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
