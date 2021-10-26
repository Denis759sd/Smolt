@extends('layouts.main')

@section('title', 'Home')

@section('content')
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
                                <form action="{{ route('search') }}" method="get" class="search-box">
                                    <input type="search" placeholder="Search your Keyword" name="search"
                                           required="required" autofocus="">
                                    <button type="submit" class="btn">
                                        <span class="fa fa-search" aria-hidden="true"></span>
                                    </button>
                                </form>
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

    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <a href="http://surl.li/akfoy" >
                        <img class="banner-view" src="files/banners/banner1.jpg" alt="Покер дом">
                    </a>
                </div>
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
