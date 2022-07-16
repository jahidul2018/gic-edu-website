<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('/frontend/style/images/favicon.png')}}">
  <title>GIC EDUCATION</title>
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/css/bootstrap.min.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/css/plugins.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/revolution/css/settings.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/revolution/css/layers.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/revolution/css/navigation.css")}}">

  <link rel="stylesheet" href="{{asset("/frontend/style/assets/css/templatemo-grad-school.css")}}">
  <link rel="stylesheet" href="{{asset("/frontend/style/assets/css/owl.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/type/type.css")}}">

  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/css/color/purple.css")}}">

  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/css/color/cobalt.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("/frontend/style/css/font/font4.css")}}">
  <link rel="stylesheet" href="{{asset('/frontend/customcss.css')}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

  <style>
    #goToTop{
      position: fixed;
      right: 4px;
      bottom: 20px;
      border: none;
      outline: none;
      border-radius: 50%;
      padding: 10px 20px;
      z-index: 100;
      opacity: 0.65;
      background: #f1c8c8;
      color: #000;
      font-size: 20px;
      cursor:pointer;
  }
  </style>
</head>
<body class="box-layout">


    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=340136201106703&autoLogAppEvents=1" nonce="O1JY3apX"></script>

  <div class="content" style="overflow-x: hidden">
    @include('layouts.frontend_layout.header')
    <!-- /.navbar -->

    @yield('frontpage_content')
    {{--  <button onclick="topFunction()" id="goToTop" title="Go to top">&#8593;</button>  --}}
    <!-- /.wrapper -->
    @include('layouts.frontend_layout.footer')

  </div>
  <!-- /.content-wrapper -->
  <script src="{{asset('/frontend/style/js/jquery.min.js')}}"></script>
  <script src="{{asset('/frontend/style/js/popper.min.js')}}"></script>
  <script src="{{asset('/frontend/style/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script src="{{asset('/frontend/style/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
  <script src="{{asset('/frontend/style/js/plugins.js')}}"></script>
  <script src="{{asset('/frontend/style/js/scripts.js')}}"></script>

  {{--  <script src="{{asset('/frontend/style/assets/js/isotope.min.js') }}"></script>
  <script src="{{asset('/frontend/style/assets/js/owl-carousel.js') }}"></script>  --}}
  {{--  <script src="{{asset('/frontend/style/assets/js/lightbox.js') }}"></script>
  <script src="{{asset('/frontend/style/assets/js/tabs.js') }}"></script>  --}}
  <script src="{{asset('/frontend/style/assets/js/video.js') }}"></script>
  {{--  <script src="{{asset('/frontend/style/assets/js/slick-slider.js') }}"></script>
  <script src="{{asset('/frontend/style/assets/js/custom.js') }}"></script>  --}}
  @yield('custom-script')

  {{--  <script>
    mybutton = document.getElementById("goToTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      // document.body.scrollTop = 0; // For Safari
      // document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      window.scrollTo({top: 0, behavior: "smooth"});
    }
  </script>  --}}
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos },
        800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
      if($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
</script>
<script>

(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};

        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
    });

    // start all the timers
    $('.timer').each(count);

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
});

</script>
{{--  <script>
    $(document).ready(function() {

        $('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

});
</script>  --}}
</body>
</html>
