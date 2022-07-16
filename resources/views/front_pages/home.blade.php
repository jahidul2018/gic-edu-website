@extends('layouts.frontend_layout.main')

@section('frontpage_content')
<!-- /.offcanvas-info -->
<style>
    .tp-bgimg.defaultimg {
        background-color: #700f1e;
    }
</style>
<div class="gray-wrapper">
   {{--  <div class="rev_slider_wrapper autowidth-container dark-spinner">
      <div id="slider13" class="rev_slider fullwidthbanner light-gallery-wrapper" data-version="5.4.7">
         <ul>
          <li data-transition="fade" data-thumb=""><img src="{{asset('/frontend/style/images/dummy.png')}}" data-bgcolor="#700f1e" alt="" />
            <div class="tp-caption font-weight-600 color-dark"
                 data-x="['left','left','left','left']"
                 data-y="middle"
                 data-hoffset="['650','550','400','30']"
                 data-voffset="['-80','-80','-90','-120']"
                 data-fontsize="['44','44','42','42']"
                 data-lineheight="['54','54','52','52']"
                 data-width="['450','450','350','340']"
                 data-textAlign="['left','left','left','left']"
                 data-whitespace="['normal','normal','normal','normal']"
                 data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                 data-responsive="on"
                 data-responsive_offset="on" style="z-index: 9;">{{$hero->heading}}
            </div>
            <!-- /.tp-caption -->
            <div class="tp-caption font-weight-400 color-dark"
                 data-x="['left','left','left','left']"
                 data-y="middle"
                 data-hoffset="['650','550','400','30']"
                 data-voffset="['30','30','30','10']"
                 data-fontsize="['26','26','26','26']"
                 data-lineheight="['36','36','36','36']"
                 data-width="['450','450','350','340']"
                 data-textAlign="['left','left','left','left']"
                 data-whitespace="['normal','normal','normal','normal']"
                 data-frames='[{"delay":2000,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                 data-responsive="on"
                 data-responsive_offset="on" style="z-index: 9;">{{$hero->subheading}}
            </div>
            <!-- /.tp-caption -->
            <a class="tp-caption btn-play-wrapper lightbox"
                 data-x="['left','left','left','left']"
                 data-y="middle"
                 data-hoffset="['650','550','400','30']"
                 data-voffset="['125','125','135','125']"
                 data-width="['auto','auto','auto','auto']"
                 data-textAlign="['left','left','left','left']"
                 data-frames='[{"delay":2500,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                 data-responsive="on"
                 data-responsive_offset="on" style="z-index: 9;" href="{{$hero->link}}"><span class="btn-play btn-play-s"></span><span class="h6 pl-10 font-weight-600">{{$hero->linkwriteup}}</span>
            </a>
            <!-- /.tp-caption -->
            <div class="tp-caption"
                 data-x="['left','left','left','left']"
                 data-y="bottom"
                 data-hoffset="['210','110','30','30']"
                 data-voffset="['0','0','0','0']"
                 data-frames='[{"delay":500,"speed":1200,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                 data-visibility="['on','on','on','off']"
                 data-width="none"
                 data-height="none"
                 data-type="image"
                 data-responsive_offset="on" style="z-index: 5;"><img
                 data-lazyload="" src="{{asset('storage/hero/'.$hero->image)}}"
                 data-ww="auto"
                 data-hh="580" alt="" />

            </div>
            <!-- /.tp-caption -->
          </li>
        </ul>  --}}
        <div class=" modern">
          {{--  <div id="player-overlay">
              <iframe width="100%" height="500px" src="https://www.youtube.com/embed/vjmX16iPdc8" title="YouTube video player" frameborder="0" scrolling="no" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>  --}}
          <!-- <img src="https://via.placeholder.com/800x725" alt="#"> -->
          {{-- <iframe width="1366" height="550" src="https://www.youtube.com/embed/stAyah-Gi4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        </div>
          {{--  </div>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>  --}}
      <!-- /.rev_slider -->
      {{--  <div class="divider"><svg xmlns="http://www.w3.org/2000/svg" class="fill-white-wrapper" preserveAspectRatio="none" viewBox="0 0 1070 20.98">
          <path d="M0,0V21H1070V0A6830.24,6830.24,0,0,1,0,0Z" /></svg>
      </div>
    </div>  --}}
    <!-- /.rev_slider_wrapper -->
</div>
{{--  <div class="video">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 ">
            <ul>
                <li>

                    <iframe width="100%" height="350px" src="https://www.youtube.com/embed/vjmX16iPdc8" title="YouTube video player" frameborder="0" scrolling="no" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>

            </ul>
        </div>
    </div>
</div>  --}}

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset("/frontend/style/assets/images/course-video.mp4") }}" type="video/mp4" />
    </video>

    <div class="video header-text ">
        {{--  overlay  --}}
        <div class="caption">
            <a href="{{url('/')}}">
                <img src="#" class="img-fluid" style="width:120px; padding-right: 16px; color:white;float: right;" srcset="{{asset("/frontend/style/images/footer-logo-red.png")}}" alt="" />
            </a>
            <div style="clear: right">
                <h3 style="color: white;text-align:right; font-size: 35px;
                font-weight: bold;"> Our utmost priority is your <span style="color: red;" class="mt-10"> Success</span></h3>
            </div>


            {{--  <h2><em>Your</em> GIC</h2>  --}}
            {{--  <div class="main-button">
                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
            </div>    --}}
        </div>
    </div>
</section>

  {{--  <div class="wrapper white-wrapper">
    <div class="container inner">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2 text-center">
          <div>
            <figure><img src="{{asset('/frontend/style/images/art/about7.png')}}" alt="" /></figure>
            <div class="row counter counter-s position-absolute" style="top: 45%; right: 8%;">
              <div class="col-md-10 text-center">
                <div class="box bg-white shadow">
                  <p> <br class="d-md-none" />GIC EDUCATION</p>
                </div>

              </div>

            </div>

          </div>
        </div>

        <div class="space30 d-none d-md-block d-lg-none"></div>
        <div class="col-lg-6 pr-60 pr-md-15">
          <h2 class="title-color display-3">About Us</h2>
          <div class="space10"></div>
          <p>We are a professional consulting firm, dedicated to providing the best solutions to students
            seeking higher study abroad. We strive to create opportunities for students because we
            believe everyone should have access to quality higher education.</p>
          <p>With many of our streams directly linking to the permanent residence route, we help you not only get your student visa application sorted, but also ensure better career, as opposed to just your studies.</p>

          <p>We have helped many before. Let us help you too.</p>
        </div>
      </div>
      <div class="space50"></div>
      <div class="text-center">
        <a href="{{url('/about-us')}}" class="btn">See More</a>
      </div>
    </div>
  </div>  --}}
  {{-- SUCCESS STORIES STARTS HERE --}}
  {{--  <div class="wrapper light-wrapper">
    <div class="container inner mt-10">
      <h2 class="title-color color-gray text-center">---------------------</h2>

      <div class="carousel owl-carousel clients" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-responsive='{"0":{"items": "2"}, "768":{"items": "4"}, "992":{"items": "5"}, "1140":{"items": "6"}}'>

        <div class="item pl-15 pr-15">
          <figure class="rounded">
            <img src="{{asset('/frontend/style/images/art/uni_logo/UK - coventry.png') }}" alt="" />
          </figure>
        </div>
        <div class="item pl-15 pr-15">
          <figure class="rounded">
            <img src="{{asset('/frontend/style/images/art/uni_logo/UK - coventry.png') }}" alt="" />
          </figure>
        </div>
        <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/UK - coventry.png') }}" alt="" />
            </figure>
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/UK - coventry.png') }}" alt="" />
            </figure>
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/UK - coventry.png') }}" alt="" />
            </figure>
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/UK - coventry.png') }}" alt="" />
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/1.png') }}" alt="" />
            </figure>
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/1.png') }}" alt="" />
            </figure>
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/1.png') }}" alt="" />
            </figure>
          </div>
          <div class="item pl-15 pr-15">
            <figure class="rounded">
                <img src="{{asset('/frontend/style/images/art/uni_logo/1.png') }}" alt="" />
            </figure>
          </div>

      </div>
      <!-- /.owl-carousel -->
      <div class="space140"></div>
      <h2 class="title-color color-gray text-center">Our Services</h2>
      <h3 class="display-3 text-center">The full service we are offering is specifically <br class="d-none d-lg-block" />designed to meet your business needs.</h3>
      <div class="space40"></div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="img-blob blob3"><img src="style/images/art/g1.jpg" style="width: 30rem" alt="" /></div>
        </div>
        <!--/column -->
        <div class="space30 d-none d-md-block d-lg-none"></div>
        <div class="col-lg-6 pl-60 pl-md-15">
          <h3>Web Design & Development</h3>
          <div class="space10"></div>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit.</p>
          <ul class="icon-list bullet-purple">
            <li><i class="jam jam-arrow-right"></i>Aenean eu leo quam ornare.</li>
            <li><i class="jam jam-arrow-right"></i>Nullam quis risus eget mollis.</li>
            <li><i class="jam jam-arrow-right"></i>Donec elit non mi porta gravida.</li>
            <li><i class="jam jam-arrow-right"></i>Fusce dapibus cursus commodo.</li>
          </ul>
          <div class="space10"></div>
          <a href="#" class="btn btn-purple">More Details</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="space120"></div>
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="img-blob blob15"><img src="style/images/art/g2.jpg" style="width: 30rem" alt="" /></div>
        </div>
        <!--/column -->
        <div class="space30 d-none d-md-block d-lg-none"></div>
        <div class="col-lg-6 pr-60 pr-md-15">
          <h3>Mobile App Development</h3>
          <div class="space10"></div>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio. Etiam porta sem malesuada magna.</p>
          <ul class="icon-list bullet-violet">
            <li><i class="jam jam-arrow-right"></i>Aenean eu leo quam ornare.</li>
            <li><i class="jam jam-arrow-right"></i>Nullam quis risus eget mollis.</li>
            <li><i class="jam jam-arrow-right"></i>Donec elit non mi porta gravida.</li>
            <li><i class="jam jam-arrow-right"></i>Fusce dapibus cursus commodo.</li>
          </ul>
          <div class="space10"></div>
          <a href="#" class="btn btn-violet">More Details</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="space120"></div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="img-blob blob1"><img src="style/images/art/g3.jpg" style="width: 30rem" alt="" /></div>
        </div>
        <!--/column -->
        <div class="space30 d-none d-md-block d-lg-none"></div>
        <div class="col-lg-6 pl-60 pl-md-15">
          <h3>Corporate & Graphic Design</h3>
          <div class="space10"></div>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in egestas. Aenean eu leo quam. Pellentesque ornare sem lacinia quam.</p>
          <ul class="icon-list bullet-blue">
            <li><i class="jam jam-arrow-right"></i>Aenean eu leo quam ornare.</li>
            <li><i class="jam jam-arrow-right"></i>Nullam quis risus eget mollis.</li>
            <li><i class="jam jam-arrow-right"></i>Donec elit non mi porta gravida.</li>
            <li><i class="jam jam-arrow-right"></i>Fusce dapibus cursus commodo.</li>
          </ul>
          <div class="space10"></div>
          <a href="#" class="btn btn-blue">More Details</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </div>  --}}

    {{-- PARTNERS STARTS HERE --}}
    <div class="wrapper white-wrapper">
        <div class="container-fluid inner mt-1">
          <h2 class="section-title mb-2 text-center">Our Partner Universities </h2>
          <h4 class="text-center"> Worldwide educational institutions we hold partnerships with</h4>
          <div class="carousel owl-carousel clients" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-responsive='{"0":{"items": "2"}, "768":{"items": "4"}, "992":{"items": "5"}, "1140":{"items": "6"}}'>
            @foreach($partners as $partner)
              <div class="item pl-15 pr-15">
                  <a href="{{asset("/frontend/Partner-University-for-GIC-Education-Limited.pdf")}}">
                    <img src="{{asset('/storage/partner/'.$partner->image)}}" class="img-fluid" style="height: 130px;object-fit: contain;" alt="" />
                  </a>

                </div>
            @endforeach
          </div>
          <!-- /.owl-carousel -->
        </div>
        <!-- /.container -->
      </div>
      {{-- PARTNERS ENDS HERE --}}
    <section class="features-area section-clint">
        <div class="container">
            <div class="row">
                @foreach($success_stories as $success_story)
                {{--  <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Feature -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{asset('/storage/success-story/'.$success_story->image)}}" alt="#" width="200px">
                        </div>

                    </div>
                    <!--/ End Single clint -->
                </div>  --}}
                @endforeach
                {{--  <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single clint -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/moc.jpg" alt="#" width="200px">
                        </div>

                    </div>
                    <!--/ End Single clint -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single clint -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/world-bank.jpg" alt="#" width="200px">
                        </div>

                    </div>
                    <!--/ End Single clint -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single clint -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/imc.jpg" alt="#" width="200px">
                        </div>


                    </div>
                    <!--/ End Single clint -->
                </div>  --}}
            </div>
        </div>
    </section>
<section>
    <div class="container-fluid">
        <div class=" container-margin">
          <div class="row" data-aos="fade-up">
            {{--  <div class="col-xl-8 stretch-card grid-margin">
              <div class="position-relative">
                <img
                  src="{{ asset("/frontend/style/images/banner.jpg") }}"
                  alt="banner"
                  class="img-fluid"
                />
                <div class="banner-content">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    global news
                  </div>
                  <h1 class="mb-0">GLOBAL PANDEMIC</h1>
                  <h1 class="mb-2">
                    Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                    Postponed, 168 Trains
                  </h1>
                  <div class="fs-12">
                    <span class="mr-2">Photo </span>10 Minutes ago
                  </div>
                </div>
              </div>
            </div>  --}}
            <div class="col-xl-9 stretch-card grid-margin mt-4 mb-4">
                <h4 class="text-left"> On going Campanign</h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div>

                        <h3> <a href="https://ukfree.gic.ltd/" target="_blank" rel="noopener noreferrer">APPLY TO UK FOR FREE</a></h3>
                    </div>

                    <div>
                        <label for=""><i class="jam jam-clock"></i> April 14, 2022</label>
                    </div>

                </li>
                <li class="list-group-item">
                    <div class="post-content">

                        <h3><a href="https://freeielts.gic.ltd/">IELTS 100% CASHBACK OFFER</a> </h3>

                      </div>
                      <div>
                        <label for="">April 28, 2022</label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>

                        <h3><a href="https://tinyurl.com/3r8xzh47" target="_blank" rel="noopener noreferrer">International Education Expo </a></h3>
                    </div>
                    <div>
                        <label for="">May 28, 2022</label>
                    </div>
                </li>
                <li class="list-group-item">
                <div>

                    <h3><a href="https://tinyurl.com/Can21s" target="_blank" rel="noopener noreferrer">Study in Canada with Scholarship: Your Pathway to Permanent Residency</a></h3>
                </div>
                <div>
                    <label for="">Jan 1, 2017</label>
                </div>
            </li>

            </ul>
            {{--  <div class="sidebox widget">
                <h3 class="widget-title">Popular Posts</h3>  --}}
                {{--  <ul class="image-list">
                  <li>
                    <figure class="rounded"><a href="blog-post.html"><img src="{{ asset("/frontend/style/images/art/a1.jpg") }}" alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="blog-post.html">Magna Mollis Ultricies Mauris</a> </h6>
                      <div class="meta"><span class="date"><i class="jam jam-clock"></i>12 Nov 2017</span></div>
                    </div>
                  </li>
                  <li>
                    <figure class="rounded"> <a href="blog-post.html"><img src="{{ asset("/frontend/style/images/art/a2.jpg") }} alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="blog-post.html">Ornare Nullam Risus Cursus</a> </h6>
                      <div class="meta"><span class="date"><i class="jam jam-clock"></i>12 Nov 2017</span></div>
                    </div>
                  </li>
                  <li>
                    <figure class="rounded"><a href="blog-post.html"><img src="{{ asset("/frontend/style/images/art/a3.jpg") }} alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="blog-post.html">Euismod Nullam Fusce</a> </h6>
                      <div class="meta"><span class="date"><i class="jam jam-clock"></i>12 Nov 2017</span></div>
                    </div>
                  </li>
                </ul>  --}}
                <!-- /.image-list -->
              </div>
            {{--  </div>  --}}
            <div class="col-xl-3 stretch-card grid-margin">
              <div class="card latest-news-bg-dark text-white mt-4">
                  <div class="row">
                    <div class="card-body">
                        <h2 class="card-text">Latest news</h2>

                        {{--  <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                            <div class="pr-3">
                            <h5 class="card-text">Virus Kills Member Of Advising Iran’s Supreme</h5>
                            <div class="fs-12">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </div>
                            </div>
                            <div class="rotate-img">
                            <img
                            src="{{ asset("/frontend/style/images/home_1.jpg") }}"
                                alt="thumb"
                                class="img-fluid img-lg"
                            />
                            </div>
                        </div>

                        <div  class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between" >
                            <div class="pr-3">
                            <h5 class="card-text">Virus Kills Member Of Advising Iran’s Supreme</h5>
                            <div class="fs-12">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </div>
                            </div>
                            <div class="rotate-img">
                            <img
                                src="{{ asset("/frontend/style/images/home_1.jpg") }}"
                                alt="thumb"
                                class="img-fluid img-lg"
                            />
                            </div>
                        </div>

                        <div
                            class="d-flex pt-4 align-items-center justify-content-between"   >
                            <div class="pr-3">
                            <h5 class="card-text">Virus Kills Member Of Advising Iran’s Supreme</h5>
                            <div class="fs-12">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </div>
                            </div>
                            <div class="rotate-img">
                            <img
                            src="{{ asset("/frontend/style/images/home_1.jpg") }}"
                                alt="thumb"
                                class="img-fluid img-lg"
                            />
                            </div>
                        </div>  --}}
                        {{--  <img height="350px" src="{{ asset("/frontend/style/images/fb.webp") }}" alt="">  --}}
                        <div class="fb-page" data-href="https://www.facebook.com/gicedultd/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gicedultd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gicedultd/">GIC Education</a></blockquote></div>
                        {{--  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgicedultd%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=340136201106703" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>  --}}
                    </div>
                </div>
              </div>
            </div>
        </div>
</section>


  {{--  <div class="wrapper light-wrapper">
    <div class="container inner">
      <h2 class="section-title text-center">Success Stories</h2>
      <div class="grid-view boxed light-gallery-wrapper text-center">
        <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}}'>
          @foreach($success_stories as $success_story)
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow p-30">
                  <figure class="main overlay overlay2 rounded mb-30"><a href="{{asset('/storage/success-story/'.$success_story->image)}}" class="lightbox"> <img src="{{asset('/storage/success-story/'.$success_story->image)}}" alt="" /></a></figure>
                  <div class="post-content">
                    <h2 class="post-title mb-10">{{$success_story->studentName}}</h2>
                    <div class="meta mb-0">{{$success_story->universityName}}</div>
                    <div class="meta mb-0">{{$success_story->country->countryName}}</div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

          <div class="item">
            <div class="item-inner">
                <figure class="overlay overlay1 rounded"><a href="{{url('/success-stories')}}"> <img style="object-fit: contain;" src="{{asset('/frontend/style/images/art/viewmore.png')}}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0"><a href="{{url('/success-stories')}}">View More</a></h5>
                    </figcaption>
                </figure>
            </div>
          </div>
          <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
      </div>
      <!-- /.grid-view -->
    </div>
    <!-- /.container -->
  </div>  --}}
  {{-- SUCCESS STORIES ENDS HERE --}}

  {{-- TESTIMONIALS STARTS HERE --}}
  {{--  <div class="wrapper white-wrapper">
    <div class="container inner">
      <h2 class="section-title mb-40 text-center">Testimonials</h2>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="basic-slider owl-carousel gap-small text-center" data-margin="30">
            @foreach($testimonials as $testimonial)
              <div class="item">
                <blockquote class="larger">
                  <p class="text-justify" style="font-size: 16px;line-height: 27px;">"{{$testimonial->testimonial}}"</p>
                  <div class="blockquote-details justify-content-center">
                    <div class="info">
                      <h6 class="mb-0">{{$testimonial->studentName}}</h6>
                    </div>
                  </div>
                </blockquote>
              </div>
            @endforeach
          </div>
          <!-- /.owl-carousel -->
            <div class="space50"></div>
            <div class="text-center">
                <a href="{{url('/testimonials')}}" class="btn">See More</a>
            </div>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>  --}}
  {{-- TESTIMONIALS ENDS HERE --}}

  {{-- EXTRA MILE SUPPORT STARTS HERE --}}
  {{--  @include('front_pages.extramile')  --}}
  @include('front_pages.affiliated')




  <section>
        <div class="row text-center mt-10 mb-10">
            <div class="col">
                <div class="counter">
                <i class="fa fa-university fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="1500" data-speed="1500"></h2>
                <p class="count-text ">University</p>
                </div>
            </div>
            <div class="col">
            <div class="counter">
            <i class="fa fa-user fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="17600" data-speed="1500"></h2>
            <p class="count-text ">Happy Clients</p>
            </div>
            </div>
            <div class="col">
                <div class="counter">
                <i class="fa fa-lightbulb-o fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="22900" data-speed="1500"></h2>
                <p class="count-text ">Project Complete</p>
                </div>
            </div>
            <div class="col">
            <div class="counter">
                <i class="fa fa-coffee fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="15700" data-speed="1500"></h2>
                <p class="count-text ">Coffee With Clients</p>
            </div>
            </div>
        </div>
  </section>

  <section>
      <div class="row">
          <div class="col">
            {{--  <marquee behavior="scroll" direction="left">  --}}
                {{--  @foreach($partners as $partner)  --}}

                <img class="img-fluid" src="#" style=" color:white;" srcset="{{asset("/frontend/style/images/timeline.jpg")}}" alt="" />
                {{--  <img src="{{asset('/storage/partner/'.$partner->image)}}" style="height: 130px;object-fit: contain;" alt=""  width="120" height="80" alt="Natural"/>  --}}
              {{--  @endforeach  --}}
              {{--  </marquee>  --}}
          </div>
      </div>
  </section>
  {{--  <section>
    <div class="row">
        <div class="four col-md-3">
            <div class="counter-box colored">
                <i class="fa fa-thumbs-o-up"></i>
                <span class="counter">2147</span>
                <p>Happy Customers</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <i class="fa fa-group"></i>
                <span class="counter">3275</span>
                <p>Registered Members</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <i class="fa  fa-shopping-cart"></i>
                <span class="counter">289</span>
                <p>Available Products</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <i class="fa  fa-user"></i>
                <span class="counter">1563</span>
                <p>Saved Trees</p>
            </div>
        </div>
      </div>
  </section>  --}}
  {{-- EXTRA MILE SUPPORT ENDS HERE --}}



  {{-- CONTACT US STARTS HERE --}}
  {{--  @include('front_pages.common_contact_us')  --}}
  {{-- CONTACT US ENDS HERE --}}
@endsection
