@extends('layouts.frontend_layout.main')

@section('frontpage_content')
<div class="content-wrapper">
    <div class="wrapper light-wrapper page-title-wrapper">
        <div class="container inner text-center">
        <h1 class="page-title">Testimonials</h1>
        <p class="lead">
          Thinking about studying abroad? <br> Hear why these students chose GIC Education and what their experience has been like so far.
        </p>
        </div>
        <div class="space10"></div>
    </div>
    <div class="wrapper light-wrapper">
        <div class="container inner">
          <div class="grid grid-view boxed">
            <div class="clearfix"></div>
              <div class="tiles text-center light-gallery-wrapper">
                <div class="row isotope">
                  @foreach($testimonials as $testimonial)
                    <div class="item grid-sizer col-md-6 col-lg-4 corporate application">
                        <div class="">
                            <div class="box bg-white shadow">
                              <blockquote>
                                <p class="text-justify" style="font-size: 14px;line-height: 18px;">"{{$testimonial->testimonial}}"</p>
                                <div class="blockquote-details">
                                  <div class="info">
                                    <h6 class="mb-0">{{$testimonial->studentName}}</h6>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="d-flex justify-content-center mt-4 mb-4">
                {!! $testimonials->links('pagination::bootstrap-4') !!}
              </div>
            </div>
          </div>
        </div>
    </div>
    
</div>
@endsection