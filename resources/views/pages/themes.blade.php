@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/road.gif")}}" alt="">
        </div>
        <div class="web_information">
            <p>our themes</p>
        </div>
    </div>
    @foreach($wallpaper_themes as $item)
        <a href="{{asset($item->theme_link)}}" class=information_container" style="text-decoration: none;">
            <div class="wallpaper_information">
                <div>
                    <p>{{$item->theme_name}}</p>
                    <p class="double_information">{{$item->theme_information}}</p>
                </div>
                <div class="img">
                    <img src="{{asset($item->theme_img)}}" alt="">
                </div>
            </div>
        </a>
        <div class="line"></div>
    @endforeach
    <div class="do_information">
        <p>these are all the most popular wallpaper themes
            on which you can find wallpaper.</p>
    </div>
    @include("layouts/footer")
@stop
