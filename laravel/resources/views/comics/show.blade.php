@extends('layout.app')

@section('title', 'Home Comics')

@section('content')
    
<div class="blue">
    {{-- img --}}
    <div class="copertina">
        <img src="{{$fumetto['thumb']}}" alt="">
    </div>
</div>

<div class="white">
    <div class="left">
        <h3>{{$fumetto['title']}}</h3>
        <div>
            <button class="price">
                <span>
                    U.S. Price: <span class="fumetto_price">{{$fumetto['price']}}</span>
                </span>
                <span>
                    AVAILABLE
                </span>
            </button>
            <button class="checkAvailable">
                Check Availability <i class="fas fa-caret-down"></i>
            </button>
        </div>
        <p>{{$fumetto['description']}}</p>
    </div>
    <div class="right">
        <h5>ADVERTISEMENT</h5>
        <img src="{{asset('img/adv.jpg')}}" alt="">
    </div>
    
</div>
        
<div class="talentESpecs">
    <div class="left">
        <h4>Talent</h4>
        <div>
            <h5>Art by:</h5>
            <p>
                @for ($i = 0; $i < count($fumetto['artists']); $i++)
                    <span>{{$fumetto['artists'][$i]}}</span>,
                @endfor
            </p>
        </div>
        <div class="last">
            <h5>Written by:</h5>
            <p>
                @for ($i = 0; $i < count($fumetto['writers']); $i++)
                    <span>{{$fumetto['writers'][$i]}}</span>,
                @endfor
            </p>
        </div>
    </div>
    <div class="right">
        <h4>Specs</h4>
        <div>
            <h5>Series:</h5>
            <span class="series">
                {{$fumetto['series']}}
            </span>
        </div>
        <div>
            <h5>U.S. Price:</h5>
            <span>
                {{$fumetto['price']}}
            </span>
        </div>
        <div class="last">
            <h5>On Sale Date:</h5>
            <span>
                {{$fumetto['sale_date']}}
            </span>
        </div>
    </div>
</div>

<div class="buy">
    <div class="container">
        <div>
            <h4>DIGITAL COMICS</h4>
            <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
        </div>
        <div>
            <h4>SHOP DC</h4>
            <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
        </div>
        <div>
            <h4>COMIC SHOP LOCATOR</h4>
            <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
        </div>
        <div>
            <h4>SUBSCRIPTIONS</h4>
            <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
        </div>
    </div>
</div>
@endsection