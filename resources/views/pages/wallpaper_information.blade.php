@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/wallpaper_view.gif")}}" alt="">
    </div>
    <div class="web_information">
        <p>view of <br> wallpapers</p>
    </div>
    <div class="line"></div>
    @foreach($wallpaper_view as $item)
        <div class="wallpaper_information">
            <div>
                <p>{{$item->wallpaper_view}}</p>
{{--                <p>a lot of wallpapers <br> for your device</p>--}}
                <p class="double_information">{{$item->double_information}}</p>
            </div>
            <div class="img">
                <img src="{{asset($item->img)}}" alt="">
            </div>
        </div>
        <div class="line"></div>
    @endforeach
{{--    <div class="wallpaper_information">--}}
{{--        <div>--}}
{{--            <p>a lot of cool <br> gif wallpapers</p>--}}
{{--            <p class="double_information">Any wallpaper to your taste, <br> paid, free.</p>--}}
{{--        </div>--}}
{{--        <div class="img">--}}
{{--            <img src="{{asset("res/gif_sea.gif")}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="line"></div>--}}
{{--    <div class="wallpaper_information">--}}
{{--        <div>--}}
{{--            <p>a lot of colors <br> for your wallpapers</p>--}}
{{--            <p class="double_information">Any wallpaper to your taste, <br> paid, free.</p>--}}
{{--        </div>--}}
{{--        <div class="img">--}}
{{--            <img src="{{asset("res/colors.png")}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="line"></div>--}}
{{--    <div class="wallpaper_information">--}}
{{--        <div>--}}
{{--            <p>very good <br> download quality</p>--}}
{{--            <p class="double_information">Any wallpaper to your taste, <br> paid, free.</p>--}}
{{--        </div>--}}
{{--        <div class="img">--}}
{{--            <img src="{{asset("res/4k.jpg")}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
    @include("layouts/footer")
@stop
