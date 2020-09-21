<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GlowGardens</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
            <div class="navbar-brand" href="{{url('/')}}">
                    <h3 class="pb-2 mt-4 mb-2">
                      <svg  style="color:#317343" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>
                          <path d="M7 13h2v3H7v-3z"/>
                        </svg>
                        <span>
                    <a style="color:#54a169" href="{{url('/')}}">GLOW GARDENS</a> <small>Votre guide de plantation</small>
                    </span>
              </div>

              <div class="nav-item dropdown" style="margin-left:210px">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-success" style="background-color: #54a169;color:white;border-radius:5px;height:38px">
                  Plantes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('Jardin')}}">Plantes et fleurs du jardin</a>
                <a class="dropdown-item" href="{{url('Bulbeuse')}}">Bulbeuses et tubéreuse</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/home/rusticite') }}" style="background-color:#cbf0b6">Cartographie de la végétation au maroc</a>
                <a class="dropdown-item" href="{{url('/home/climat')}}" style="background-color:#c0e8a9">Carte de climat du Maroc</a>
                </div>
            </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            
                                <a  href="{{ route('login') }}" role="button" class="btn btn-success" style="background-color:#54a169;margin-right:5px">{{ __('Se connecter') }}</a>
                            
                            @if (Route::has('register'))
                                
                                    <a href="{{ route('register') }}" role="button" class="btn btn-success" style="background-color:#54a169">{{ __('Creer un compte') }}</a>
                                
                            @endif
                        @else
                            <!--<li class="nav-item dropdown">-->
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" style="background-color:#54a169;color:white;border-radius:5px;margin-right:170px;height:38px" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-right:250px">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ url('Jardin/create') }}" style="background-color:#dbfaca">
                                        {{ __('Ajouter une fleur du jardin') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('Bulbeuse/create') }}" style="background-color:#c0e8a9">
                                        {{ __('Ajouter une fleur (bulbeuse ou tubéreuse)') }}
                                    </a>
                                    <hr>
                                    <div style="margin-left:25px">
                                        {{'revenu : 0 dhs'}}
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            <!--</li>-->
                        @endguest
                    
                </div>
            </div>
        </nav>

        <main class="py-4" style="min-height:556px;background-image:url(https://i.pinimg.com/originals/02/d3/8e/02d38e1ff04c72e02d1722f002d7f630.gif)">
            @yield('content')
        </main>
    </div>
</body>
</html>
