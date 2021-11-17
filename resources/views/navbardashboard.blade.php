@section('navbardashboard')

    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>
                </a>

            </li>
            <li class="has-subnav">
                <a href="{{ route('table.home') }}">
                    <i class="fa fa-qrcode fa-2x"></i>
                    <span class="nav-text">
                        Mesas
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="{{url ('/menu')}}">
                    <i class="fa fa-file-text fa-2x"></i>
                    <span class="nav-text">
                        Cardápios
                    </span>

                </a>
            </li>
            <li class="has-subnav">
                <a href="{{url ('/order')}}">
                    <i class="fa fa-glass fa-2x"></i>
                    <span class="nav-text">
                        Pedidos
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="{{url('/receipt')}}">
                    <i class="fa fa-money fa-2x"></i>
                    <span class="nav-text">
                        Recebimento
                    </span>
                </a>

            </li>
            <li>
                <a href="{{url('/account')}}">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                        Conta
                    </span>
                </a>
            </li>
            <li>
            <li class="nav-item">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="nav-text">
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
                </span>
            </li>
            </li>
        </ul>
    </nav>


@endsection
