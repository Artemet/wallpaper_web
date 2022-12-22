<div class="header_line">
    <div class="header_line_part">
        <a href="{{route("home")}}" title="wallpaper life" class="h_one"><h1>wallpaper life</h1></a>
    </div>
    <div class="header_line_part">
        <div class="mobile_wrapper" onclick="get_mobile_menu()">
            <div class="img">
                <img src="{{asset("res/media/menu.png")}}" alt="">
            </div>
            <div class="sub_menu">
                <div><a href="#home"><p class="top">top</p></a></div>
                <div title="create my account"><a href="{{route("account")}}"><p>my account</p></a></div>
                <div><a href="{{route("all_wallpaper")}}" class="all_wallpaper"><p>wallpapers</p></a></div>
                <div class="line mobile_line"></div>
                <div><a href="{{route("about_us")}}"><p>about us</p></a></div>
                <div><a href="{{route("payment_wallpapers")}}"><p>payment wallpaper</p></a></div>
            </div>
        </div>
        <div class="wrapper">
            <div><a href="#home"><p class="top">top</p></a></div>
            <div title="create my account"><a href="{{route("account")}}"><p>my account</p></a></div>
            <div><a href="{{route("payment_wallpapers")}}"><p>payment wallpaper</p></a></div>
            <div><a href="{{route("about_us")}}"><p>about us</p></a></div>
            <div class="main_link" title="choose your device"><a href="{{route("all_device")}}" class="all_wallpaper"><p>your device</p></a></div>
        </div>
    </div>
</div>
