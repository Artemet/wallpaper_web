@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/background_google.jpg")}}" alt="">
    </div>
    <div class="web_information">
        <p>working with <br> google</p>
    </div>
    <div class="line"></div>
    <div class="google_container media_text text_animation">
        <div>
            <h2>google</h2>
            <p>google is the platform itself where wallpaper life takes the least amount of wallpapers for your device.</p>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
