@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/city.gif")}}" alt="">
        </div>
        <div class="web_information">
            <p>wallpapers for <br> your tablet</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="card_list">
        @foreach($tablet as $item)
            <a href="{{route("in_card", ["id"=>$item->id])}}">
                <div class="card">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="" class="tablet_wallpaper">
                    </div>
                    @include("card")
                </div>
            </a>
        @endforeach
    </div>
    <div class="line"></div>
    @include("layouts/footer")
@stop
