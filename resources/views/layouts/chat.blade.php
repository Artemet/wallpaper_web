<div class="chat_container">
    <div class="chat">
        <h3>chat</h3>
        <div class="comments">
            <div class="user_comment">
                <p class="name">Artemka</p>
                <div class="comment">
                    <p>Hello World</p>
                </div>
            </div>
        </div>
        <form action="{{route("chat_message")}}">
            @csrf
            <label for="">
                <textarea name="chat_message" id="" cols="30" rows="10" placeholder="PRINT YOUR TEXT"></textarea>
                <button>send</button>
            </label>
        </form>
    </div>
    <div class="img">
        <img src="{{asset("res/chat_icon.gif")}}" class="chat_icon" alt="" onclick="open_chat()">
        <img src="{{asset("res/cross_icon.jpg")}}" class="cross_icon" alt="" onclick="close_chat()">
    </div>
</div>
