@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/background_zedge.jpg")}}" alt="">
    </div>
    <div class="web_information">
        <p>working with <br> zedge</p>
    </div>
    <div class="line"></div>
    <div class="zedge_container media_text text_animation">
        <div>
            <h2>zedge</h2>
            <p>zedge is a platform where we can also recommend
                good mobile wallpapers. Therefore, if you
                want to add high-quality wallpapers to your phone,
                then welcome.</p>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
