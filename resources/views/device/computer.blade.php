@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/sky.gif")}}" alt="">
        </div>
        <div class="web_information">
            <p>wallpapers for <br> your computer</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="card_list card_list_computer">
        @foreach($computer as $item)
            <a href="{{route("in_card", ["id"=>$item->id])}}">
                <div class="card computer_cards">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="" class="computer_wallpaper">
                    </div>
                    @include("card")
                </div>
            </a>
        @endforeach
    </div>
    <div class="line"></div>
    @include("layouts/footer")
@stop
