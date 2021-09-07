@extends('layout.main')

@section('content')
    <!-- main-slider -->
    <section class="w3l-main-slider position-relative" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">

            </div>
        </div>
    </section>
    <!-- //banner-slider-->
    <!-- main-slider -->

    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">New Movies</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="{{route('genre')}}">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    @foreach($films as $film)
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('showFilm', [$film->id])}}">
                                    <figure>
                                        <img class="img-fluid" src="{{$film->image}}" alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h3 class="title">{{$film->title}}</h3>
                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{$film->duration}}

                                            </span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->
@endsection
