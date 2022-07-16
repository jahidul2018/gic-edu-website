@extends('layouts.frontend_layout.main')

@section('frontpage_content')

    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/country/Germany.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">A country internationally recognized for high quality education</h1>  --}}
        <h2 class="display-1 mb-0">Germany </h2>
        <div class="space10"></div>
        <a href="https://tinyurl.com/GER21s" class="btn btn-info btn-strong-hover mb-0" >   <h6 class=" mb-0">Apply for student visa</h6></a>
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
                Germany is a country of rich and diverse architecture which has gone through a tumultuous culture. Its official name is Federal Republic of Germany, situated in Central Western Europe and has one of the strongest economies in Europe. Germany’s economy is mixed and it has a social market economy with a highly skilled labor force, a large capital stock, a low level of corruption, and a high level of innovation. In addition to that German art has played a significant role in the development and shaping of Western art. It is one of the world’s largest car producers.

 

                The German Government has been keen to encourage immigration over the past 50 years, to address the low birth rate in the country. As the country provides well-performing economy, education system, and employment opportunities, so Germany is one of the most popular immigration destinations in the world.
           
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
