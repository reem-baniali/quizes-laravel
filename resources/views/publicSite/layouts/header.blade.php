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
  
    <style>
      .search-image {
 padding-right:35px;
  background: url("https://static.thenounproject.com/png/101791-200.png") no-repeat right;
  background-size: 20px;
  background-position-x: 95%
}
#navs{
  margin-right: 5%
}
    </style>
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
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav" style="margin-left: 46% !important;">
           <ul class="navbar-nav">
           <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('show_categories') }}">
                Exams
              </a>
            </li>
             </ul>
                 <ul id="navs"class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('contact') }}">
                Contacts
              </a>
            </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" 
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    
                                </a>
                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('profile',Auth::user()->id) }}">Profile</a> 
                                                             
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
<ul  class="navbar-nav ml-5">
          {{-- search part --}}
          <li id="search-input" class="nav-item dropdown">
          <form action="{{ route('search') }}" method="get" class="searchform order-lg-last">
        {{-- @csrf --}}
        <div class="form-group d-flex">
          <input type="text" class="search-image form-control " name="search" value placeholder="Search" required>
        </div>
      </form>
      {{-- End Searh part --}}
           </li>  
          </ul>
        </div>
      </div>
    </nav>