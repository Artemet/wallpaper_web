@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/about_us.png")}}" alt="">
    </div>
    <div class="web_information">
        <p>about us (wallpaper life)</p>
    </div>
    <div class="line"></div>
    <div class="about_us_container media_text text_animation">
        <div>
            <h2>wallpaper life</h2>
            <p>wallpapers are part of what we see on our phones,
                computers and many other devices. We know how
                difficult it can sometimes be to choose the
                right wallpaper for you. And we are sure that
                you too faced such problem. But on our site
                we will advise you a lot of different and cool wallpapers.
                We promise you that after visiting wallpaper life
                you will never have problems with wallpapers again.</p>
        </div>
    </div>
    <div class="about_us">
        @foreach($about_us as $item)
            <div class="wallpaper_information">
                <div>
                    <p>{{$item->about_us_text}}</p>
                </div>
                <div class="img">
                    <img src="{{asset($item->about_us_img)}}" alt="">
                </div>
            </div>
            <div class="line"></div>
        @endforeach
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
