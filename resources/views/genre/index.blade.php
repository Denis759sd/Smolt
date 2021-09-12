@extends('layouts.main')

@section('title', 'Genre')

@section('content')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="{{route('home')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">Genre</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->
    <!--/genre -->

    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Latest Movies</h3>
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

            <div class="button-center text-center mt-3">
                <a href="#" class="btn view-button">View all <span class="fa fa-angle-double-right ml-2"
                                                                   aria-hidden="true"></span></a>
            </div>

        </div>
    </section>
    <!--//grids-sec1-->
    <!--//genre -->
@endsection

