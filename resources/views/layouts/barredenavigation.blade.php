<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Home.css">
    
    <title>Document</title>
</head>
<body>
    <nav>
    <a href="/" class="logo">
    <img src="/images/panier.png" alt="Logo">
  </a>
        <ul>
            <li><a href="/" class="hover-underline-animation">Accueil</a> </li>
            <li><a href="/Produits"class="hover-underline-animation">Produit</a> </li>
            <li><a href="/carts/{{Auth::id()}}"class="hover-underline-animation">Panier</a> </li>
        </ul>
        @guest
                            @if (Route::has('login'))
                                <span>
                                    <a href="{{ route('login') }}"><button class="btn">{{ __('Login') }}</button></a>
                                
                            @endif

                            @if (Route::has('register'))
                                
                               <a href="{{ route('register') }}"> <button class="btn">{{ __('Register') }}</button></a>
                                </span>
                                 
                                
                            @endif
                        @else
                        @if(Auth::user()->is_admin==1)
                        <a href="/admin/Articles">Admin</a>
@endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </nav>
    @yield('content')
</body>
</html>