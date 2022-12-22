@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/pages/device_choice.gif")}}" alt="">
        </div>
        <div class="web_information">
            <p>choose your <br> device</p>
        </div>
    </div>
    <div class="choose_device all_device">
        <div class="technology_container">
            <h2>choose your device</h2>
            <div class="wrapper">
                @foreach($device_choices as $item)
                    <a href="{{asset($item->device_link)}}">
                        <div class="technology_part technology_part_one">
                            <div class="img">
                                <img src="{{asset($item->device_img)}}" alt="">
                            </div>
                            <p>{{$item->device_name}}</p>
                            <div class="sub">
                                <p>choose wallpapers for any <br> mobile device</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <p class="under_information" title="see themes"><a href="{{asset("home/themes")}}" class="theme">see themes of wallpaper life</a></p>
    @include("layouts/footer")
@stop
