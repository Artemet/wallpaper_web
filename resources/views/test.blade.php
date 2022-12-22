@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <style>
        .card_list{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
        img{
            height: 400px;
        }
    </style>
    <div class="card_list">
        @foreach($test as $item)
            <a href="{{asset("home/in_card")}}">
                <div class="card">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="">
                    </div>
                    <div class="card_description">
                        <p class="name">{{$item->name}}</p>
                        <p class="price">{{$item->free_price}}</p>
                        <p class="price">{{$item->price}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="line"></div>
    @include("layouts/footer")
@stop
