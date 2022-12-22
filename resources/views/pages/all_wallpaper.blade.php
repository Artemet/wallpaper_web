@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey all_wallpaper" id="home">
        <img src="{{asset("res/pages/all_wallpaper.gif")}}" alt="">
    </div>
    <div class="web_information all_wallpaper_p">
        <p>all wallpapers</p>
    </div>
    <div class="wallpaper_container">
        <h2>all wallpapers on our veb</h2>
        <div class="line"></div>
        <div class="cars_information">
            <h2>popular wallpapers</h2>
        </div>
        <div class="card_list">
            @foreach($wallpaper as $item)
                <a href="{{route("in_card")}}">
                    <div class="card">
                        <div class="img">
                            <img src="{{asset($item->img)}}" alt="">
                        </div>
                        @include("card")
                    </div>
                </a>
            @endforeach
        </div>
        <div class="line"></div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/wallpaper_card.js")}}"></script>
@stop
