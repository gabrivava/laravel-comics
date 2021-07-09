<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    {{-- header --}}
    <header id="site_header">

        <div class="top_header">
            <div>
                <span>DC POWER℠ VISA®</span>
                <span>ADDITIONAL DC SITE <i class="fas fa-sort-down"></i></span>
            </div>
        </div>

        <div class="nav">
            {{-- logo img --}}
            <img src="{{asset('img/dc-logo.png')}}" alt="">
            <nav>
                <a href="#">CHARACTERS</a>
                <a href="{{ route('fumetti') }}">COMICS</a>
                <a href="#">MOVIES</a>
                <a href="#">TV</a>
                <a href="#">GAMES</a>
                <a href="#">COLLECTIBLES</a>
                <a href="#">VIDEOS</a>
                <a href="#">FANS</a>
                <a href="#">NEWS</a>
                <a href="#">SHOP</a>
            </nav>
            <input type="text" name="search" id="" placeholder="Search">
        </div>
        <img src="{{asset('img/jumbotron.jpg')}}" alt="">

    </header>

    {{-- main --}}
    <main id="site_main">
        @yield('content')
    </main>
    
    {{-- footer --}}
    <footer id="site_footer">
        <div class="background">
            <img class="bg" src="{{asset('img/footer-bg.jpg')}}" alt="">
            <img class="logo" src="{{asset('img/dc-logo-bg.png')}}" alt="">
        </div>
        <div class="elenco">
            <div>
                <h2>DC COMICS</h2>
                <ul>
                    <a href={{-- "{{ route() }}" --}}></a>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
            </div>
            <div>
                <h2>SHOP</h2>
                <ul>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div>
                <h2>DC</h2>
                <ul>
                    <li>Terms Of Use</li>
                    <li>Privacy police(New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscription</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div>
                <h2>SITES</h2>
                <ul>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
        </div>
        <div class="cookies">
            All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Setting</a>
        </div>
        
        <div class="registrati">
            <button>SIGN-UP NOW!</button>
            <div class="social">
                <span>FOLLOW US</span>
                <img src="{{asset('img/footer-facebook.png')}}" alt="">
                <img src="{{asset('img/footer-twitter.png')}}" alt="">
                <img src="{{asset('img/footer-youtube.png')}}" alt="">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="">
                <img src="{{asset('img/footer-periscope.png')}}" alt="">
            </div>
        </div>
    </footer>
</body>
</html>