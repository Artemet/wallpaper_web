@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div>
        <div class="img nft_monkey" id="home">
            <img src="{{asset("res/monkey_nft.jpg")}}" alt="">
        </div>
        <div class="web_information">
            <p>choose your favorite <br> wallpaper</p>
        </div>
    </div>
    <div class="wallpaper_information">
        <div>
            <p>a lot of cool <br> video wallpapers</p>
            <p class="double_information">Any wallpaper to your taste, <br> paid, free.</p>
        </div>
        <div class="img">
            <img src="{{asset("res/purple_sky.png")}}" alt="">
        </div>
    </div>
    <div class="line"></div>
    <div class="wallpaper_information wallpaper_information_two" onclick="click_warning()">
        <div>
            <p>a lot of wallpapers <br> for your device</p>
            <p class="double_information">
                Any wallpaper for your computer, <br> phone and more.
            </p>
            <a href="{{asset("home/wallpaper_view")}}" title="see more device" class="see_more" onmouseover="stop_warning()">see more</a>
        </div>
        <div class="img">
            <img src="{{asset("res/circle_wallpaper.jpg")}}" alt="">
        </div>
    </div>
    <div class="line"></div>
    <div class="filter_container">
        <h2>we have your favorite <br> wallpaper for any theme</h2>
        <div class="wrapper">
            <div class="section game">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>6])}}"><span>+</span></a>
                    <p>game wallpaper</p>
                </div>
            </div>
            <div class="section view">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>7])}}"><span>+</span></a>
                    <p>view wallpaper</p>
                </div>
            </div>
            <div class="section technology">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>8])}}"><span>+</span></a>
                    <p>technology wallpaper</p>
                </div>
            </div>
            <div class="section anime">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>9])}}"><span>+</span></a>
                    <p>anime wallpaper</p>
                </div>
            </div>
            <div class="section company">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>1])}}"><span>+</span></a>
                    <p>company wallpaper</p>
                </div>
            </div>
            <div class="section fon">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>1])}}"><span>+</span></a>
                    <p>fon wallpaper</p>
                </div>
            </div>
            <p class="under_information" title="see more themes"><a href="{{asset("home/themes")}}" class="theme">and more</a></p>
        </div>
    </div>
    <div class="do_information">
        <p>The site has a variety of wallpapers for your taste.
            We can also advise you on other free and paid
            platforms where you will be provided with wallpapers
            from the programs themselves. After viewing the site,
            we are sure that your device will
            please you at the first sight.</p>
    </div>
    <div class="line"></div>
    <div class="filter_container">
        <h2>we have any color theme <br> of your wallpaper</h2>
        <div class="wrapper">
            <div class="section green">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>10])}}"><span>+</span></a>
                    <p>green wallpaper</p>
                </div>
            </div>
            <div class="section purple">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>11])}}"><span>+</span></a>
                    <p>purple wallpaper</p>
                </div>
            </div>
            <div class="section blue">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>12])}}"><span>+</span></a>
                    <p>blue wallpaper</p>
                </div>
            </div>
            <div class="section yellow">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>13])}}"><span>+</span></a>
                    <p>yellow wallpaper</p>
                </div>
            </div>
            <div class="section red">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>14])}}"><span>+</span></a>
                    <p>red wallpaper</p>
                </div>
            </div>
            <div class="section see_all" title="click on the button" onclick="get_sub()">
                <p style="font-size: 22px; opacity: 100%;">see more colors</p>
            </div>
        </div>
        <div class="sub">
            <div class="section gray section_sub">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>15])}}"><span>+</span></a>
                    <p>gray wallpaper</p>
                </div>
            </div>
            <div class="section pink section_sub">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>16])}}"><span>+</span></a>
                    <p>pink wallpaper</p>
                </div>
            </div>
            <div class="section white section_sub">
                <div class="section_wrapper">
                    <a href="{{route("wallpaper_theme", ["ctg"=>17])}}"><span>+</span></a>
                    <p>white wallpaper</p>
                </div>
            </div>
            <div>
                <p class="under_information">these are the most used wallpaper colors</p>
                <p class="under_information" title="go on achievements page"><a href="{{asset("home/achievements")}}" class="achievements">achievements wallpaper life</a></p>
            </div>
        </div>
    </div>
    <div class="background">
        <div class="do_information">
            <p>The site has a variety of wallpapers for your taste.
                We can also advise you on other free and paid
                platforms where you will be provided with wallpapers
                from the programs themselves. After viewing the site,
                we are sure that your device will
                please you at the first sight.</p>
        </div>
        <div class="technology_container">
            <h2>choose your device</h2>
            <div class="wrapper">
                <a href="{{route("phone_wallpapers")}}">
                    <div class="technology_part technology_part_one">
                        <div class="img">
                            <img src="{{asset("res/phone.png")}}" alt="">
                        </div>
                        <p>phone</p>
                    </div>
                </a>
                <a href="{{route("tablet_wallpapers")}}">
                    <div class="technology_part technology_part_two">
                        <div class="img">
                            <img src="{{asset("res/tablet.png")}}" alt="">
                        </div>
                        <p>tablet</p>
                    </div>
                </a>
                <a href="{{route("computer_wallpapers")}}">
                    <div class="technology_part technology_part_three">
                        <div class="img">
                            <img src="{{asset("res/computer.png")}}" alt="">
                        </div>
                        <p>computer</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="double_text">
            <a href="{{route("all_device")}}">see more device</a>
        </div>
    </div>
    <div class="quality_information quality_information_one">
        <div class="text_part">
            <h2>quality</h2>
            <p>On our site there are a lot of wallpapers<br>
                in very good quality. Such as 4K,
                HD and others.</p>
        </div>
        <div class="img">
            <img src="{{asset("res/planet.png")}}" alt="" class="one">
        </div>
    </div>
    <div class="line"></div>
    <div class="quality_information quality_information_two">
        <div class="img">
            <img src="{{asset("res/nft2.png")}}" alt="" class="two">
        </div>
        <div class="text_part">
            <h2>problems</h2>
            <p>If you have some problems with downloading <br> wallpapers.
                We have a special <a href="{{route("help")}}">page</a> that can help you.</p>
        </div>
    </div>

    @include("layouts/footer")
    <script src="{{asset("js/home_animation.js")}}"></script>
@stop
