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
@endsection