<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--- API -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
</head>
<body>


	<!-- Navbar --->
	<nav class="navbar navbar-expand-md navbar-dark navbarColor shadow-sm">
	    <div class="container">
	        <a class="navbar-brand" href="{{ url('/') }}">
	            <i class="fas fa-graduation-cap"></i> &nbsp | &nbsp
	            {{ config('app.name', 'Lesson Sesson') }}
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	            <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <!-- Left Side Of Navbar -->
	            <ul class="navbar-nav mr-auto">

	            </ul>

	            <!-- Right Side Of Navbar -->
	            <ul class="navbar-nav ml-auto">
	                <!-- Authentication Links -->
	                @guest
	                      <ul class="navbar-nav">
	                        <li class="nav-item">
	                          <a class="nav-link navLink" href="{{ route('info.curso-tecnico') }}">Curso Técnico</a>
	                        </li>
	                        <li class="nav-item">
	                          <a class="nav-link navLink" href="{{ route('info.ensino-regular') }}">Ensino Regular</a>
	                        </li>
	                        <li class="nav-item">
	                          <a class="nav-link navLink" href="{{ route('info.professores') }}">Professores</a>
	                        </li>
	                        <li class="nav-item">
	                          <a class="nav-link navLink" href="{{ route('info.exercicios') }}">Exercícios</a>
	                        </li>
	                        <li class="nav-item">
	                          <a class="nav-link navLink" href="{{ route('info.contato') }}">Contato</a>
	                        </li>                                    
	                      </ul>                        
	                @else

	                        <li class="nav-item dropdown">
	                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                            {{ Auth::user()->name }} <span class="caret"></span>
	                        </a>

	                        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">

	                            <a class="dropdown-item" href="{{ route('painel') }}">
	                                {{ __('Painel de Controle') }}
	                            </a>

	                            <a class="dropdown-item" href="{{ route('logout') }}"
	                               onclick="event.preventDefault();
	                                             document.getElementById('logout-form').submit();">
	                                {{ __('Sair da Conta') }}
	                            </a>

	                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                @csrf
	                            </form>
	                        </div>
	                    </li>
	                @endguest
	            </ul>
	        </div>
	    </div>
	</nav>
	

	<div class="container">
		@yield('content')
	</div>


  <!--- Footer -->
  <footer class="container footerPropriets">
    <p class="float-right"><a href="#"></a></p>
    <p>&copy; 2020 &middot; <a href="https://github.com/i386angel" class="badge badge-primary footerButtonColors">GitHub</a> &middot; <a href="#" class="badge badge-primary footerButtonColors">Termos</a></p>
  </footer>


  <!--- Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>