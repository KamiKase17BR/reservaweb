@extends('layouts.app')

@section('welcome')

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="images/logo/r_pequeno.png" width="30" height="30">
                {{ config('app.name', 'ReservaJá') }}
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="carrosel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/welcome/casal1.jpeg" class="d-block w-50 mx-auto">
                    <div class="carousel-caption d-md-block text-shadow">
                        <h5 class="h5-carousel">Viva bons momentos!</h5>
                        <p class="p-carousel">Escolha seu lugar favorito, sua mesa e aquele prato especial.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/welcome/casal2.jpg" class="d-block w-50 mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-carousel">Escolha sem pressa!</h5>
                        <p class="p-carousel">Escolha pratos dos seus locais favoritos, ou aquele novo local.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/welcome/casal3.jpg" class="d-block w-50 mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-carousel">Escolha, reserve e viva seu momento!</h5>
                        <p class="p-carousel">Para facilitar seu dia-dia, uma nova opção de reservas!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h3 class="h3-carousel"> ReservaJá!</h3>
        <div class="text-menus">
            <p>
                Nosso objetivo é oferecer para nossos parceiros mais uma opção de atendimento para seus clientes.
                Atráves de um app inovador, prático e intuitivo os clientes terão a opção de reservar uma mesa e pedir seus
                pratos favoritos diretamente de suas casas, podendo planejar uma noite incrível e sem surpresas!
            </p>
        </div>
        {{-- Carrosel 2 --}}


        <div id="carrosel2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/welcome/mesas1.jpeg" class="d-block w-50 mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-carousel">Se destaque!</h5>
                        <p class="p-carousel">Coloque lindas imagens do seu local, pratos e mesas.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/welcome/mesas2.jpg" class="d-block w-50 mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-carousel">Suas mesas sob controle.</h5>
                        <p class="p-carousel"> Saiba quais pratos serão pedidos, bebidas entre outros.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/welcome/mesas3.jpeg" class="d-block w-50 mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-carousel">Atraia mais clientes.</h5>
                        <p class="p-carousel">Em um mundo conectado, imagens podem atrair ainda mais pessoas.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h3 class="h3-carousel"> ReservaJá!</h3>
        <p>
            Para os donos dos locais os nossos parceiros, nosso objetivo é dar mais uma opção de atrair clientes,
            planejar horários e gerir de uma melhor forma seu local sabendo de antemão como será seu movimento.

        </p>


    @endsection
