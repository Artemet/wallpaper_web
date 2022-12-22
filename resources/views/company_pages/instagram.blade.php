@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/background_instagram.jpg")}}" alt="">
    </div>
    <div class="web_information">
        <p>working with <br> instagram</p>
    </div>
    <div class="line"></div>
    <div class="instagram_container media_text text_animation">
        <div>
            <h2>instagram</h2>
            <p>sometimes we use special instagram channels
                to search for the coolest and highest quality wallpapers.</p>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
