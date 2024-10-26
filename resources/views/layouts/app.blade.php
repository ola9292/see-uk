<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://js.stripe.com/v3/"></script>

    <title>Events-Zone</title>
</head>
<body>
    {{-- <nav>
        <h2>
            <a href="/" class="heading">Events Zone</a>
        </h2>
        <div class="hamburger-menu" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-items" id="nav-items">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            @if(Auth::user() && Auth::user()->is_admin)
            <li><a href="{{ route('events.create') }}">Create</a></li>
            @endif
            @if(auth()->check())
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn">Logout</button>
                </form>
            </li>
            @else
            <li><a class="btn" href="{{ route('login') }}">Login</a></li>
            <li><a class="btn" href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
    </nav> --}}


    <header class="header">
        <nav class="navbar">
            <a href="/" class="nav-logo">Explore UK</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('places.create') }}" class="nav-link">Create</a>
                </li>
                @if(Auth::user() && Auth::user()->is_admin)
                    <li class="nav-item">
                        <a href="" class="nav-link">Create</a>
                    </li>
                @endif
                @if(auth()->check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="">Logout</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endif
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>


    @yield('content')

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }


        // when we click on hamburger icon its close

        const navLink = document.querySelectorAll(".nav-link");

        navLink.forEach(n => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    </script>
</body>
</html>
