@extends('layouts.frontend_layout.main')

@section('frontpage_content')
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="{{asset('/frontend/style/images/art/bg1.jpg')}}">
        <div class="container inner pt-200 pb-200 text-center">
        {{--  <h1 class="section-title text-uppercase">Hello! We Are GIC Education</h1>  --}}
        <h2 class="display-1 mb-0">About GIC Education</h2>
        </div>
        <!-- /.container -->
    </div>

    <!-- /.wrapper -->
    <div class="container-fluid  wrapper light-wrapper">
        <div class="container-margin inner">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 text-center">
            <div>
                <figure><img src="{{asset('/frontend/style/images/art/about7.png')}}" alt="" /></figure>
                <div class="row counter counter-s position-absolute" style="top: 45%; right: 8%;">
                <div class="col-md-10 text-center">
                    <div class="box bg-white shadow">
                    <h3 class="pr-2"><span class="value">1500</span>+</h3>
                    <p> Institutions</p>
                    </div>
                    <!--/.box -->
                </div>
                <!--/column -->
                </div>
                <!--/.row -->
            </div>
            </div>
            <!--/column -->
            <div class="space30 d-none d-md-block d-lg-none"></div>
            <div class="col-lg-6 pr-60 pr-md-15">
            <h2 class="section-title">How do we make a difference</h2>
            <p>We are a professional consulting firm, dedicated to providing the best solutions to students
                seeking higher study abroad. We strive to create opportunities for students because we
                believe everyone should have access to quality higher education.</p>
            <p>With many of our streams directly linking to the permanent residence route, we help you not only get your student visa application sorted, but also ensure better career, as opposed to just your studies.</p>

            <p>We have helped many before. Let us help you too.</p>
            <div>
                <h4>Why choose us:</h4>
                <p><i class="icofont-clip"></i> The only consultancy firm to provide you counseling through Career Specialists.</p>
                <p><i class="icofont-clip"></i> Choose from 20,000+ courses from over 1,500+ universities worldwide</p>
                <p><i class="icofont-clip"></i> We guide you through different application and visa process.</p>
                <p><i class="icofont-clip"></i> We do ensure to provide you a hassle-free journey</p>
            </div>
            <div class="space20"></div>

            <!-- /.progress-list -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="space60"></div>

        <!--/.row -->
        </div>
        <!-- /.container -->
    </div>

    <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
        <div class="container inner">
        <h2 class="section-title mb-40 text-center">Process Steps</h2>
        <div class="row gutter-50 gutter-md-30 process-wrapper line text-center">
            <div class="col-md-3"> <span class="icon icon-blob icon-blob-pink mb-30"><span class="number color-pink">01</span></span>
            <h5>Initial Assessment</h5>
            <p>You are requested to apply for an assessment.</p>
            </div>
            <!--/column -->
            <div class="col-md-3"> <span class="icon icon-blob icon-blob-blue mb-30"><span class="number color-blue">02</span></span>
            <h5>Invited to meet</h5>
            <p>You are invited to our office for a prompt meeting and we will move forward if your assessment report is positive.</p>
            </div>
            <!--/column -->
            <div class="col-md-3"> <span class="icon icon-blob icon-blob-green mb-30"><span class="number color-green">03</span></span>
            <h5>Document preparation</h5>
            <p>We will provide a list of documents.</p>
            </div>
            <!--/column -->
            <div class="col-md-3"> <span class="icon icon-blob icon-blob-purple mb-30"><span class="number color-purple">04</span></span>
            <h5>Application procedure</h5>
            <p>Guide you to apply to your desired university and ensure a smooth journey throughout the process.</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->

    <div class="wrapper light-wrapper">
        <div class="container inner">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                <div>
                    <figure><img src="{{asset('/frontend/style/images/art/about9.png')}}" alt="" /></figure>
                    <div class="row counter counter-s position-absolute" style="top: 10%; left: 25%;">
                    <div class="col-md-10 text-center">
                        <div class="box bg-white shadow">
                        <h3 class="pr-2"><span class="value">20000</span>+</h3>
                        <p>Courses <br class="d-md-none"/></p>
                        </div>
                        <!--/.box -->
                    </div>
                    <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                </div>
                <!--/column -->
                <div class="space20 d-md-none"></div>
                <div class="space50 d-none d-md-block d-lg-none"></div>
                <div class="col-lg-6 pr-60 pr-md-15">
                {{-- basic-slider owl-carousel --}}
                <div class=" gap-small text-center" data-margin="30">
                    <div class="item">
                    <blockquote class="icon larger">
                        <p style="font-size: 15px;line-height: 22px;color: #000;font-weight: 400;" class="text-justify">"At GIC Educational Limited, we come to work every day because we believe in creating a
                        better future for our clients. Yes, we treat you as our client, not a student. We believe in
                        creating a guideline through which you can decide your own career path, and embark on a
                        journey that will change you for the better.
                        We have been through the same, even I. What I have noticed, however, while there are plenty
                        of great minds, there’s hardly any to nurture them to the right path. The world is at your
                        fingertips through the internet, sure, but the flora and fauna and the people around you give
                        you a perspective that’s hard to experience through the black mirror that you look at. And
                        that’s where we come in – give you a chance to explore new countries, get a taste of the life
                        lived outside your surroundings. This also helps you challenge yourself, mind you. Staying on
                        your own isn’t an easy task, and we only guide you to get better out of your international
                        experience.
                        Let us help you achieve more."</p>
                        <div class="blockquote-details justify-content-center">
                        <div class="img-blob blob1"><img src="{{asset('/frontend/style/images/Rana_sir.jpg')}}" alt="" /></div>
                        <div class="info">
                            <h6 class="mb-0">Mohammad Touhid Rana</h6>
                            <span class="meta mb-0">Director, GIC Education Ltd</span>
                        </div>
                        </div>
                    </blockquote>
                    </div>
                </div>
                <!-- /.owl-carousel -->
                <div class="space50"></div>
                <div class="text-center">
                    <a href="{{url('/testimonials')}}" class="btn">View More</a>
                </div>
                </div>
                <!--/column -->
            </div>
            <div class="space80"></div>

        <!-- /.owl-carousel -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->


    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="{{asset('/frontend/style/images/art/bg9.jpg')}}">
        <div class="container inner text-center">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <h2 class="title-color color-white text-center">GIC EDUCATION</h2>
            <h3 class="display-3 mb-4">Find out everything you need to know <br class="d-none d-lg-block" />about study abroad</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="space140"></div>
    </div>
    <!-- /.wrapper -->

    <div class="wrapper overflow-top">
        <div class="container inner pt-0">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="yL3Gtxfh8kY"></div>
            <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

    <div class="carousel owl-carousel clients" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-responsive='{"0":{"items": "2"}, "768":{"items": "4"}, "992":{"items": "5"}, "1140":{"items": "6"}}'>
        @foreach($partners as $partner)
          <div class="item pl-15 pr-15"><img src="{{asset("/storage/partner/".$partner->image)}}" style="height: 130px;object-fit: contain;" alt="" /></div>
        @endforeach
    </div>
@endsection
