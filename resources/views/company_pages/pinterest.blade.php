@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/background_pinterest.jpg")}}" alt="">
    </div>
    <div class="web_information">
        <p>working with <br> pinterest</p>
    </div>
    <div class="line"></div>
    <div class="pinterest_container media_text text_animation">
        <div>
            <h2>pinterest</h2>
            <p>most often it is from pinterest that we take free,
                best wallpapers from other companies.</p>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
