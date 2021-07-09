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
        
<div class="gray">

</div>
    
@endsection