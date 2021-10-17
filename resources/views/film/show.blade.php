@extends('layouts.main')

@section('title', $film->title)

@section('custom_css')

@endsection

@section('custom_js')
    <script src="https://playerjs.com/builder/player=9nsff68gjhaj" type="text/javascript"></script>
@endsection

@section('content')
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                    </div>
                </div>
                {{--<div class="w3l-populohny-grids">
                    <div class="item vhny-grid">
                        <div class="box16">
                            <figure>
                                <img class="img-fluid" src="/{{$film->image}}" alt="">
                            </figure>
                        </div>
                    </div>

                    <div>
                        <h2 class="title" style="color: #fff; margin-bottom: 2rem">{{$film->title}}</h2>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--//grids-sec1-->

    <div class="container marketing w3l-grids">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading" style="margin-bottom: 2rem">{{$film->title}}</h2>
                <h5 class="mb-3">Жанр: {{$film->category->name}}</h5>
                <p class="lead">{!! $film->description !!}</p>
            </div>
            <div class="col-md-3 order-md-1">
                <img class="img-fluid" src="/{{$film->image}}" style="width: 260px; height: auto" alt="Картинка">
            </div>
        </div>
    </div>

    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <iframe class="player" src="https:{{$film->video_cdn}}" width="640" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->
@endsection
