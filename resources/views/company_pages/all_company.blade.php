@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/background_space.jpg")}}" alt="">
    </div>
    <div class="web_information">
        <p>working with <br> platforms</p>
    </div>
    <div class="company_list">
        @foreach($company_images as $item)
            <div class="line"></div>
            <div class="img">
                <a href="{{asset($item->link)}}"><img src="{{asset($item->img)}}" alt=""></a>
            </div>
        @endforeach
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/text_animation.js")}}"></script>
@stop
