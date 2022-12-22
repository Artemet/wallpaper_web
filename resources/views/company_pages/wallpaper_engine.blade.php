@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/wallpaper_engine_background.jpg")}}" alt="">
    </div>
    <div class="web_information">
        <p>working with <br> wallpaper engine</p>
    </div>
    <div class="line"></div>
    <div class="wallpaper_engine_container media_text text_animation">
        <div>
            <h2>wallpaper engine</h2>
            <p>when downloading a wallpaper engine, many
                people have a question which wallpaper to install.
                on our website we will provide you with the coolest
                and most popular wallpapers from wallpaper engine</p>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
