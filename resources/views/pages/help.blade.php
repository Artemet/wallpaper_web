@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/pages/sos.png")}}" alt="">
    </div>
    <div class="web_information">
        <p>describe your problem from <br> below and we will help you.</p>
    </div>
    <div class="help_message">
        <h2>we are ready to help you</h2>
        <form action="{{route("message_problem")}}" method="post">
            @csrf
            <div class="inputs">
                <label for="">
                    <input type="text" id="problem" name="email" placeholder="YOUR EMAIL...">
                </label>
                <label for="problem" class="message">
                    <textarea onclick="border_change()" onmouseleave="border_normal()" name="problem_message" maxlength="500" placeholder="YOUR PROBLEM..." id="problem" cols="30" rows="10"></textarea>
                </label>
{{--                <span class="count_number"><span class="siro">0</span>/500</span>--}}
            </div>
            <div class="button">
                <button>send</button>
                <span class="count_number"><span class="siro">0</span>/500</span>
            </div>
        </form>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/help_animation.js")}}"></script>
    <script src="{{asset("js/help_page.js")}}"></script>
@stop
