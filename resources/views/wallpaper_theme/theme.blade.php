@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/rain.gif")}}" alt="">
    </div>
    <div class="web_information">
        <p>your topic</p>
    </div>
    <div class="card_list">
        @foreach($theme as $item)
            <a href="{{route("in_card", ["id"=>$item->id])}}">
                <div class="card">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="" class="{{$item->class}}">
                    </div>
                    @include("card")
                </div>
            </a>
        @endforeach
    </div>
    @include("layouts/footer")
@stop
