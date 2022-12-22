@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey all_wallpaper" id="home">
        <img src="{{asset("res/cafe.gif")}}" alt="">
    </div>
    <div class="web_information all_wallpaper_p">
        <p>payment method</p>
    </div>
    <div class="line"></div>
    <div class="payment_container">
        @foreach($payment_method as $item)
            <div class="img">
                <img src="{{asset($item->pay_img)}}" alt="">
            </div>
            <div class="line"></div>
        @endforeach
        <div class="do_information">
            <p>with such conditions you will
                be able to pay for paid wallpapers</p>
        </div>
    </div>
    @include("layouts/footer")
@stop
