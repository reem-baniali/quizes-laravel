<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Code Bunker | Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  
  </head>
  <body >
    
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container border-bottom border-warning border-1">
        <img class="navbar-brand" src="{{ asset('imgs/logoH.svg') }}" width="100" alt="logo" />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
           <ul class="navbar-nav">
           <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('show_categories') }}">
                Categories
              </a>
            </li>
             </ul>
                 <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('contact') }}">
                Contact Us
              </a>
            </li>
            {{-- <li class="nav-item home-btn-login">
              <a class="nav-link login-link" href="{{ route('login') }}">Log in</a>
            </li> --}}
              @guest
                            @if (Route::has('login'))
                                <li class="nav-item home-btn-login">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            

                            @if (Route::has('register'))
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </ul>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            @if ( Auth::user()->role_id == 1 )
                        
                         <li class="nav-item home-btn-login">
                                    <a class="nav-link" href="{{ route('admin-site') }}"> Admin Site </a>
                                </li>
                                 @endif
                        @endguest
                        
          </ul>
        </div>
      </div>
    </nav>