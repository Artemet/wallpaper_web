@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/about_us.png")}}" alt="">
    </div>
    <div class="web_information">
        <p>wallpaper life</p>
    </div>
    <div class="line"></div>
    <div class="wallpaper_life_container media_text text_animation">
        <div>
            <h2>wallpaper life</h2>
            <p>There are a lot of people on our site who
                create their own wallpapers for wallpaper life.
                Therefore, in addition to the wallpapers
                of other platforms, you can upload your
                own wallpapers. and if wallpaper life likes
                your wallpapers, they will get into the top
                wallpaper life wallpapers.</p>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
