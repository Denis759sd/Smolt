<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kino Site</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
          rel="stylesheet">
    <!-- Template CSS -->

    @yield('custom_js')
</head>

<body>

<!-- header -->
<header id="site-header" class="w3l-header fixed-top">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1>
                <a class="navbar-brand" href="{{route('home')}}">
                    <span class="fa fa-play icon-log" aria-hidden="true"></span>
                    Smolt
                </a>
            </h1>
            <!-- if logo is image enable this
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{$status_home}}">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item {{$status_about}}">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item {{$status_genre}}">
                        <a class="nav-link" href="{{route('genre')}}">Genre</a>
                    </li>
                </ul>

                <!--/search-right-->
                <!--/search-right-->
                <div class="search-right">
                    <a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">
                        Search
                        <span class="fa fa-search ml-3" aria-hidden="true"></span>
                    </a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="#" method="post" class="search-box">
                                <input type="search" placeholder="Search your Keyword" name="search"
                                       required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fa fa-search"
                                                                        aria-hidden="true"></span></button>
                            </form>
                            <div class="browse-items">
                                <h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
                                <ul class="search-items">
                                    <li><a href="genre.html">Action</a></li>
                                    <li><a href="genre.html">Drama</a></li>
                                    <li><a href="genre.html">Family</a></li>
                                    <li><a href="genre.html">Thriller</a></li>
                                    <li><a href="genre.html">Commedy</a></li>
                                    <li><a href="genre.html">Romantic</a></li>
                                    <li><a href="genre.html">Tv-Series</a></li>
                                    <li><a href="genre.html">Horror</a></li>
                                    <li><a href="genre.html">Action</a></li>
                                    <li><a href="genre.html">Drama</a></li>
                                    <li><a href="genre.html">Family</a></li>
                                    <li><a href="genre.html">Thriller</a></li>
                                    <li><a href="genre.html">Commedy</a></li>
                                    <li><a href="genre.html">Romantic</a></li>
                                    <li><a href="genre.html">Tv-Series</a></li>
                                    <li><a href="genre.html">Horror</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- /search popup -->
                    <!--/search-right-->
                </div>


            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //header -->

@yield('content')

<!-- footer-66 -->
<footer class="w3l-footer">
    <section class="footer-inner-main">
        <div class="footer-hny-grids py-5">
            <div class="container py-lg-4">
                <div class="text-txt">
                    <div class="right-side">
                        <div class="row footer-about">
                            <div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
                                <a href="#"><img class="img-fluid" src="assets/images/banner1.jpg"
                                                          alt=""></a>
                            </div>
                            <div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
                                <a href="#"><img class="img-fluid" src="assets/images/banner2.jpg"
                                                          alt=""></a>
                            </div>
                            <div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
                                <a href="#"><img class="img-fluid" src="assets/images/banner3.jpg"
                                                          alt=""></a>
                            </div>
                            <div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
                                <a href="#"><img class="img-fluid" src="assets/images/banner4.jpg"
                                                          alt=""></a>
                            </div>
                        </div>
                        <div class="row footer-links">


                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Movies</h6>
                                <ul>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">English Movies</a></li>
                                    <li><a href="#">Tailor</a></li>
                                    <li><a href="#">Upcoming Movies</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Information</h6>
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a> </li>
                                    <li><a href="{{route('about')}}">About</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Locations</h6>
                                <ul>
                                    <li><a href="genre.html">Asia</a></li>
                                    <li><a href="genre.html">France</a></li>
                                    <li><a href="genre.html">Taiwan</a></li>
                                    <li><a href="genre.html">United States</a></li>
                                    <li><a href="genre.html">Korea</a></li>
                                    <li><a href="genre.html">United Kingdom</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Newsletter</h6>
                                <form action="#" class="subscribe mb-3" method="post">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button><span class="fa fa-envelope-o"></span></button>
                                </form>
                                <p>Enter your email and receive the latest news, updates and special offers from us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer">
                    <div class="columns text-lg-left">
                        <p>&copy; 2021 Smolt</p>
                    </div>

                    <ul class="social text-lg-right">
                        <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->

    </section>
</footer>
<!--//footer-66 -->
</body>

</html>
<!-- responsive tabs -->
<script src="/assets/js/jquery-1.9.1.min.js"></script>
<script src="/assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<!-- //responsive tabs -->
<!--/theme-change-->
<script src="/assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            stagePadding:280,
            loop: true,
            margin: 20,
            nav: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    stagePadding:40,
                    nav: false
                },
                480: {
                    items: 1,
                    stagePadding:60,
                    nav: true
                },
                667: {
                    items: 1,
                    stagePadding:80,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //script -->
<script>
    $(document).ready(function () {
        $('.owl-three').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2,
                    nav: false
                },
                480: {
                    items: 2,
                    nav: true
                },
                667: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //script -->
<!-- /mid-script -->
<script>
    $(document).ready(function () {
        $('.owl-mid').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //mid-script -->

<!-- script for owlcarousel -->
<!-- Template JavaScript -->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
<!--//-->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->

<script src="/assets/js/bootstrap.min.js"></script>

