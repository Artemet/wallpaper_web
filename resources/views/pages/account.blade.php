@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="img nft_monkey" id="home">
        <img src="{{asset("res/lambo.gif")}}" alt="">
    </div>
    <div class="web_information">
        <p>my account</p>
    </div>
    <div class="my_account_container">
        <h2>register or sing in</h2>
        <div class="line"></div>
        <div class="get_in">
            <div class="sing_in_part">
                <form action="">
                    <div class="sing_in">
                        <h3>sing in</h3>
                        <div class="inputs">
                            <label for="">
                                <p>user name or email</p>
                                <input type="text" name="nick" placeholder="PRINT YOUR NAME OR EMAIL">
                            </label>
                            <label for="">
                                <p>password</p>
                                <input type="text" name="password" placeholder="RIGHT YOUR PASSWORD">
                            </label>
                        </div>
                    </div>
                    <div class="get_in_text">
                        <u onclick="register_text()">register</u>
                    </div>
                </form>
                <div class="button_send"><button>sing in</button></div>
            </div>
            <div class="register_part">
                <form action="">
                    <div class="register">
                        <form action="">
                            <h3>register</h3>
                            <div class="inputs">
                                <label for="">
                                    <p>user name or email</p>
                                    <input type="text" name="nick" placeholder="PRINT YOUR NAME OR EMAIL">
                                </label>
                                <label for="">
                                    <p>print your name</p>
                                    <input type="text" name="password" placeholder="PRINT YOUR NAME">
                                </label>
                                <label for="">
                                    <p>new password</p>
                                    <input type="text" name="password" placeholder="PRINT YOUR NEW PASSWORD">
                                </label>
                            </div>
                        </form>
                        <div class="get_in_text">
                            <u onclick="sing_in_text()">sing in</u>
                        </div>
                    </div>
                </form>
                <div class="button_send"><button>register</button></div>
            </div>
        </div>
    </div>
    @include("layouts/footer")
    <script src="{{asset("js/account.js")}}"></script>
@stop
