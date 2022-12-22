@include("layouts/chat")
<div class="footer_container">
    <div class="part part_one">
        <div class="img">
            <a href="{{route("about_us")}}"><img src="{{asset("res/icon.png")}}" alt=""></a>
        </div>
        <p>we would be very <br> grateful to you if you <br> choose
            wallpaper on <br> our website.</p>
        <div class="now_more" title="wallpapers view">
            <a href="{{route("payment_methods")}}" title="know more about payment">payment method</a>
            <a href="{{route("wallpaper_information")}}" title="know more about our wallpapers">wallpaper kind</a>
        </div>
    </div>
    <div class="links">
        <div class="part">
            <h2>our pages</h2>
            <div class="hrefs">
                <a href="{{route("help")}}">help</a>
                <a href="{{route("all_wallpaper")}}">wallpapers</a>
                <a href="{{route("instruction")}}">instruction</a>
                <a href="{{route("about_us")}}">about us</a>
            </div>
            <div class="mobile_href">
                <a href="{{route("wallpaper_information")}}" class="mobile_link">wallpaper kind</a>
            </div>
        </div>
        <div class="part">
            <h2>with who we work</h2>
            <div class="hrefs">
                <a href="{{route("wallpaper_engine")}}">Wallpaper Engine</a>
                <a href="{{route("zedge")}}">Zedge</a>
                <a href="{{route("wallpaper_life")}}">Wallpaper life</a>
                <a href="{{route("company_images")}}" title="more companys">see more...</a>
            </div>
        </div>
    </div>
    <div class="part part_three">
        <h2>send us your message</h2>
        <div class="input">
            <form action="{{route("send_message")}}" method="post">
                @csrf
                <label for="problem">
                    <textarea name="message" id="problem" maxlength="500" cols="30" rows="10" placeholder="YOUR MESSAGE..."></textarea>
                </label>
                <button>send</button>
                <span class="count_number"><span class="siro">0</span>/500</span>
            </form>
        </div>
    </div>
</div>
