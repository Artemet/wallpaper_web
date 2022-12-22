@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/achievements.gif")}}" alt="">
    </div>
    <div class="web_information">
        <p>our achievements</p>
    </div>
    <div class="line"></div>
    @foreach($achievements as $item)
        <div class="wallpaper_information">
            <div>
                <p>{{$item->achievement}}</p>
                <p class="double_information">{{$item->achievement_information}}</p>
            </div>
            <div class="img">
                <img src="{{asset($item->achievement_img)}}" alt="">
            </div>
        </div>
        <div class="line"></div>
    @endforeach
    @include("layouts/footer")
@stop
