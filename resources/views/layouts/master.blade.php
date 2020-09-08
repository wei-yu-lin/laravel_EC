<html>
<head>
    <title>育維商店</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--     <link rel="stylesheet" href="/css/style.css"> -->
    <style>
        @import url("https://fonts.googleapis.com/css?family=Noto Sans TC");
        * {
            margin: 0;
            padding: 0;
        }
        nav a, nav li {
            font-size: 30px;
            font-family: Noto Sans TC;
        }
        .imgblock {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
@section('sidebar')
    <nav class="navbar navbar-default navbar-light bg-light navbar-fixed-top" role="navigation">
        <a class="navbar-brand" 
            href="/" 
            style="font-size: 30px;
            font-family: Noto Sans TC;">
            高雄菇蟹
        </a>
        <ul class="nav navbar-nav navbar-right">
        @guest
            <li class="nav-item">
                <a class="navbar-brand" href="{{ route('login') }}">登入</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="navbar-brand" href="{{ route('register') }}">注冊</a>
            </li>
            @endif
        @else
            <li class="nav-item">
                <a href="/cart">購物車<i class="fa fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item">
                <a href="/test/products">管理商品<i class="fa fa-shopping-cart"></i></a>
            </li>                   
            <li class="nav-item dropdown">
                <a  id="navbarDropdown"
                    href="#" 
                    role="button" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false" 
                    v-pre>
                    {{ Auth::user()->name }}<i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        登出
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
<!--             </div>--><!-- /.navbar-collapse -->
<!--         </div>--><!--.container-fluid  -->
    </nav>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>