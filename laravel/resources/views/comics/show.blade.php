@extends('layout.app')

@section('title', 'Home Comics')

@section('content')
    
            

                <div class="fumetto" href="">
                    <img src="{{$fumetto['thumb']}}" alt="">
                    <h3>{{$fumetto['series']}}</h3>
                </div>    
            
            
    
    
@endsection