@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/house2.gif")}}" alt="">
        </div>
        <div class="web_information">
            <p>payment wallpapers</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="card_list card_list_computer">
        @foreach($payment as $item)
            <a href="{{route("in_card", ["id"=>$item->id])}}">
                <div class="card computer_cards">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="" class="phone_wallpaper">
                    </div>
                    @include("card")
                </div>
            </a>
        @endforeach
    </div>
    <div class="line"></div>
    <div class="payment_method_link">
        <a href="{{route("payment_methods")}}" title="know more about payment">payment method</a>
    </div>
    @include("layouts/footer")
@stop
