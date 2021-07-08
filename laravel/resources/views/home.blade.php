@extends('layout.app')

@section('title', 'Home Comics')

@section('content')
    <section class="container">
        <div class="title">CURRENT SERIES</div>
        <div class="fumetti">
            @foreach ($fumetti as $fumetto)

                <div class="fumetto">
                    <img src="{{$fumetto['thumb']}}" alt="">
                    <h3>{{$fumetto['series']}}</h3>
                </div>    
            
            @endforeach
        </div>
        <button>LOAD MORE</button>    
    </section>
    <div class="banda">
        <div>
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
            <span>DIGITAL COMICS</span>
        </div>
        <div>
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
            <span>DC MERCHANDISE</span>
        </div>
        <div>
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
            <span>SUBSCRIPTION</span>
        </div>
        <div>
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
            <span>COMIC SHOP LOCATOR</span>
        </div>
        <div>
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
            <span>DC POWER VISA</span>
        </div>
    </div>
@endsection