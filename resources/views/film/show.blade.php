@extends('layout.main')

@section('custom_js')
    <script src="/assets/player/playerjs.js" type="text/javascript"></script>
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
                <div class="w3l-populohny-grids">
                    <div class="item vhny-grid">
                        <div class="box16">
                            <figure>
                                <img class="img-fluid" src="{{$film->image}}" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="box-content">
                        <h3 class="title">{{$film->title}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->

    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div id="player" style="width:700px;height:281px; margin-left: 25rem"></div>

            <script>
                var player = new Playerjs({id:"player", file:"{{$film->video_cdn}}"});
            </script>
        </div>
    </section>
    <!--//grids-sec1-->
@endsection
