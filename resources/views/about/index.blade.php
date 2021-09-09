@extends('layout.main')

@section('content')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="{{route('home')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->
    <!-- /about-->
    <div class="w3l-ab-grids py-5">
        <div class="container py-lg-4">
            <div class="row ab-grids-sec align-items-center">
                <div class="col-lg-6 ab-right">
                    <img class="img-fluid" src="assets/images/banner1.jpg">
                </div>
                <div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5">
                    <h3 class="hny-title">Great Entertainment</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam id quisquam ipsam
                        molestiae ad eius accusantium? Nulla dolorem perferendis inventore! posuere cubilia Curae;
                        Nunc non risus in justo convallis feugiat.</p>
                    <div class="ready-more mt-4">
                        <a href="#" class="btn read-button">Read More <span class="fa fa-angle-double-right ml-2" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

            <div class="w3l-counter-stats-info text-center">
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">65</p>
                            <h4>Movies</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">165</p>
                            <h4>Shows</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">463</p>
                            <h4>Members</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">5063</p>
                            <h4>Year of Use</h4>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //about-->

    <!--grids-sec2-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">New Releases</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="{{route('genre')}}">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="owl-three owl-carousel owl-theme">
                    @foreach($films as $film)
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('showFilm', [$film->id])}}">
                                    <figure>
                                        <img class="img-fluid" src="{{$film->image}}" alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{$film->duration}}

                                                </span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="genre.html">{{$film->title}}</a></h3>
                            <p>{{$film->description}}</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('showFilm', [$film->id])}}" class="btn watch-button">Watch now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!--grids-sec2-->
@endsection
