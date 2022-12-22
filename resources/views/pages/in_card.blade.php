@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey all_wallpaper" id="home">
        <img src="{{asset("res/pages/about_us.png")}}" alt="">
    </div>
    <div class="web_information all_wallpaper_p">
        <p>{{$in_card->name}}</p>
    </div>
    <div class="line"></div>
    <div class="in_card">
        <div class="part">
            <div class="img">
                <img src="{{asset($in_card->img)}}" alt="">
            </div>
        </div>
        <div class="part">
            <div class="about_wallpaper">
                <h2>{{$in_card->name}}</h2>
                <div class="links">
                    <div>
                        <a href="{{route("wallpaper_information")}}">About Wallpapers</a>
                    </div>
                    <div>
                        <a href="{{route("instruction")}}">Instruction</a>
                    </div>
{{--                    <div></div>--}}
                </div>
                <div class="price">
                    <p>{{$in_card->free_price}}</p>
                    <p>{{$in_card->price}}</p>
                </div>
                <a href="{{asset($in_card->img)}}" download="document"><button>download</button></a>
            </div>
            <div class="page_link">
                <a href="{{route("achievements")}}">achievements wallpaper life</a>
            </div>
        </div>
    </div>
    @include("layouts/footer")
@stop
