@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/instruction.png")}}" alt="">
    </div>
    <div class="web_information">
        <p>if you have problems <br> with wallpaper. Read <br> the instructions below.</p>
    </div>
    <div class="line"></div>
    <div class="instruction_container">
        <h2>instruction</h2>
        <div class="wallpaper_information">
            <div>
                <div class="span">
                    <span>01</span>
                </div>
                <p>choose your device,<br><a href="{{route("all_device")}}" title="your device">on the special page</a></p>
                <p class="double_information">
                    Any wallpaper for your computer, <br> phone and more.
                </p>
            </div>
            <div class="img">
                <img src="{{asset("res/house.jpg")}}" alt="">
            </div>
        </div>
        <div class="wallpaper_information">
            <div>
                <div class="span">
                    <span>02</span>
                </div>
                <p>find wallpapers <br> to your taste.</p>
                <p class="double_information">
                    Any wallpaper for your computer, <br> phone and more.
                </p>
            </div>
            <div class="img">
                <img src="{{asset("res/nft3.jpg")}}" alt="">
            </div>
        </div>
        <div class="wallpaper_information wallpaper_information_two wallpaper_information_media">
            <div class="img">
                <img src="{{asset("res/file.png")}}" alt="">
            </div>
            <div>
                <div class="span">
                    <span>02</span>
                </div>
                <p>Download the wallpaper <br> on your device.</p>
                <p class="double_information">
                    Any wallpaper for your computer, <br> phone and more.
                </p>
            </div>
        </div>
        <div class="wallpaper_information wallpaper_information_mobile">
            <div class="span">
                <span>02</span>
            </div>
            <div class="img">
                <img src="{{asset("res/file.png")}}" alt="">
            </div>
            <div>
                <p>Download the wallpaper <br> on your device.</p>
                <p class="double_information">
                    Any wallpaper for your computer, <br> phone and more.
                </p>
            </div>
        </div>
        <div class="wallpaper_information">
            <div>
                <div class="span">
                    <span>03</span>
                </div>
                <p>put your wallpaper <br> on your device</p>
                <p class="double_information">
                    Any wallpaper for your computer, <br> phone and more.
                </p>
            </div>
            <div class="img">
                <img src="{{asset("res/rick.jpg")}}" alt="">
            </div>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/instruction.js")}}"></script>
@stop
