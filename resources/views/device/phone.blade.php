@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/space_city.gif")}}" alt="">
        </div>
        <div class="web_information">
            <p>wallpapers for <br> your phone</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="card_list">
        @foreach($phone as $item)
            <a href="{{route("in_card", ["id"=>$item->id])}}">
                <div class="card">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="" class="phone_wallpaper">
                    </div>
                    @include("card")
                </div>
            </a>
        @endforeach
    </div>
    <div class="line"></div>
    @include("layouts/footer")
@stop