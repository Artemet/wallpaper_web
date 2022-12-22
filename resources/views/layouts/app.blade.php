<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset("res/icon.png")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Wallpaper Life</title>
</head>
<body>
@yield("content")
<script src="{{asset("js/home_scroll.js")}}"></script>
<script src="{{asset("js/chat.js")}}"></script>
<script src="{{asset("js/id_scroll_speed.js")}}"></script>
<script src="{{asset("js/mobile_menu.js")}}"></script>
<script src="{{asset("js/footer.js")}}"></script>
</body>
</html>
