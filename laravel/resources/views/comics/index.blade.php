@extends('layout.app')

@section('title', 'Home Comics')

@section('content')
    <section class="container">
        <div class="title">CURRENT SERIES</div>
        <div class="fumetti">
            @foreach ($fumetti as $index => $fumetto)

                <div class="fumetto">
                    <a href="{{ route('fumetto', ['id' => $index]) }}">
                        <img src="{{$fumetto['thumb']}}" alt="">
                        <h3>{{$fumetto['series']}}</h3>
                    </a>
                </div>    
            
            @endforeach
        </div>
        <button>LOAD MORE</button>    
    </section>
    @include('partials.banda_blu')
@endsection