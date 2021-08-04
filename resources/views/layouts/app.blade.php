<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/newevent.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/myevent.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/inforevents.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/features.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/buy.css') }}">

    <style>

            .top-right {
                position: absolute;
                right: 180px;
                top: 18px;
            }
            .welcom {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;
            }
            .welcom:hover{
                color: white;
            }
            .createdbutton{
                position: absolute;
                right: 280px;
                top: 14px;
                text-decoration: none;
                color: tomato;
                padding: 10px 10px;
                border-radius: 20px;
                border: 2px solid beige;
                background-color: rgb(255, 255, 255); 
            }
            
            .createdbutton:hover{
                color: red ;
                opacity: 0.6;
            }
            .createdbutton2{
                position: absolute;
                left: 130%;
                bottom: -10px;
            }
            .createdbutton3{
                position: absolute;
                right: 9.1%;
                top: 13px;
                text-decoration: none;
                color: rgb(128, 255, 155);
                padding: 10px 10px;
                border-radius: 20px;
                border: 2px solid beige;
                background-color: rgb(0, 0, 0); 
            }
            .createdbutton3:hover{
                color: turquoise;
            }
            .part2 {
                padding: 15px 30px 15px 10px;
                border-radius: 10px;
                border: 2px solid beige;
                background-color: transparent; 
            }
            .part2:hover{
                color: red ;
                opacity: 0.6;
            }
            /* dropdownmenu */
            .dropmenu1{
                position: absolute;
                right: 300px;
                top: 10px;
            }
            .dropmenu1:focus{
                box-shadow: none;
            }
            .dropmenu2{
                position: absolute;
                right: 310px;
                top: 10px;
                position: sticky;
            }
            #user_menu_settings_menuitem {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    width: 100%;
}

    </style>
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient shadow-sm">
            <div class="container">
                <a href="/">
                    <img style="width: 200px;" src="{{ URL::asset('img/Untitled-1.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="form-outline" style="width: 35%; position: relative; right: -1% ">
                    <input type="search" id="form1" style="border-radius: 30px;" class="form-control" placeholder="Search Events"
                    aria-label="Search" />
                </div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <div class="flex-center position-ref full-height">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    
                                    @auth
                                    @else
                                    <div class="dropdown">
                                        <a class="welcom" href="#" style="text-decoration: none;"><i class="fas fa-user" style="position: relative; right: 5px; bottom: -2px; font-size: 20px;"></i>Đăng Nhập</a>
                                            <div class="dropdown-content">
                                                <a class="login1" href="#" data-toggle="modal" data-target="#loginModal">Đăng Nhập</a>
                                                <a class="register1" href="http://127.0.0.1:8000/register">Tạo Tài Khoản</a>
                                                <a type="submit" class="loginBtn1 loginBtn--facebook" >
                                                    Login with Facebook
                                                </a>
                                                <a type="submit" class="loginBtn1 loginBtn--google"  >
                                                    Login with Google
                                                </a>
                                            </div>
                                    </div>
                                        <div class="dropdown">
                                            <a class="createdbutton2" href="#" data-toggle="modal" data-target="#loginModal" style="text-decoration: none; "><i class="fas fa-shopping-cart part2" style="position: relative; right: 20px; color:rgb(91, 91, 91);">  Giỏ Hàng <span class="quantity">0</span></a></i>
                                            <div class="dropdown-content drop2">
                                                <a class="login2" href="#">Giỏ hàng hiện tại</a>
                                                <p style="text-align: center">Không có sản phẩm nào trong giỏ hàng!</p>
                                            </div>
                                        </div>
                                        @endauth
                                </div>
                            @endif
                        </div>
                        @else

                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                    
                                    @if(Auth::user()->avatar)
                                    <div class="profile1" style="position: relative; right: 250px">
                                        <img src="{{asset('/storage/image/'.Auth::user()->avatar)}}" alt="avatar" width="" style="border-radius:50% 50% 50% 50%;  
                                        width:40px;
                                        height:40px;">
                                        <strong style="color: rgb(230, 230, 230)">{{ Auth::user()->name }}</strong>
                                    </div>
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" style="margin-right: 310px; width: 120%;"  aria-labelledby="navbarDropdown">
                                    
                                <a id="user_menu_settings_menuitem" tabindex="-1" role="menuitem" style="text-decoration: none; color: black;" href="http://127.0.0.1:8000/profile">
                                    <div aria-hidden="true" class="user_menu_details"><img src="{{asset('/storage/image/'.Auth::user()->avatar)}}" style="width:45px;height:45px; border-radius:50% 50% 50% 50%"  alt="{{ Auth::user()->name }}" class="user_avatar big">
                                        <strong class="user_menu_user" style="position: absolute; top: 8px; left: 65px;">{{ Auth::user()->name }}</strong>
                                        <p class="user_menu_email" style="position: absolute; bottom:146px; left: 65px;">{{ Auth::user()->email }}</p>
                                        <span class="user_menu_details_btn"><svg width="24" height="24" aria-hidden="true">
                                            <g fill="none" fill-rule="evenodd"><path d="M3 3h18v18H3z"></path></g></svg></span></a>
                                        </div>
                                            <hr>
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/home">
                                        Sảm Phẩm Của Tôi
                                    </a>
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/profile">
                                        Hồ Sơ
                                    </a>
                                    
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Đăng Xuất') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell" style="font-size: 25px; position: absolute; right: 60px; top: 15px; color: white"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        <div id="cart-items" class="dropdown">
                            <a class="createdbutton2" href="#" style="text-decoration: none; position: absolute; bottom: 5px; left: -220px; "><i class="fas fa-shopping-cart part2" style="position: relative; right: 20px; color:rgb(255, 255, 255);">  Giỏ Hàng <span class="quantity" style="color: black">0</span></a></i>
                            <div class="dropdown-content drop3">
                                <a class="login2" href="#" style="color: ">Giỏ hàng hiện tại</a>
                                <p style="text-align: center">Không có sản phẩm nào trong giỏ hàng!</p>
                            </div>
                        </div>
                        @endguest

                    </ul>
                </div>
            
        </nav>
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 78%">
                    <div class="modal-body" style="background: rgb(216, 216, 216)">
                        <img src="img/Untitled-1.png" alt="logo" class="imgsukien" style="width: 50%;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4 class="text-center">ĐĂNG NHẬP</h4>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <button type="submit" style="width: 100%; border-radius: 20px" class="btn btn-success">
                                        {{ __('Đăng Nhập') }}
                                    </button>
                                <div class="separator">Hoặc đăng nhập với</div>
                                <a type="submit" class="loginBtn loginBtn--facebook" >
                                    Login with Facebook
                                </a>
                                <a type="submit" class="loginBtn loginBtn--google"  >
                                    Login with Google
                                </a>
                                    <p class="text-muted text-center textregister">
                                        Bạn chưa có tài khoản? <a href="http://127.0.0.1:8000/register" class="text-primary textreset ">Đăng Ký Ngay!</a>.
                                    </p>
                                    @if (Route::has('password.request'))
                                    <p class="text-muted text-center">
                                        <a href="{{ route('password.request') }}" class="text-danger textforget ">Quên mật khẩu?</a>.
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="haft-footer" style="background-color: whitesmoke; padding: 20px 0px 20px 0px">
        <div class="container" style="display: flex">
                <div class="col-md-3 col-sm-12 flex-row">
                    <div class="img">
                        <i class="fab fa-jedi-order" style="font-size: 80px; 
                        background: -webkit-linear-gradient(rgb(63, 63, 63), #f2b01e);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent; "></i>
                    </div>
                    <div style="margin-left: 20px;">
                        <span style="font-size:13px;font-weight:bold;text-transform:uppercase;">UY TÍN 1 SAO</span>
                        <p style="font-size:13px;">Được khách hàng yêu mến đánh giá 1 sao suốt cuộc hành trình!</p>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-12 flex-row">
                    <div class="img">
                        <i class="fas fa-truck-loading" style="font-size: 80px; 
                        background: -webkit-linear-gradient(rgb(63, 63, 63), #cfcbbc);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent; "></i>
                    </div>
                    <div style="margin-left: 20px;">
                        <span style="font-size:13px;font-weight:bold;text-transform:uppercase;">UY TÍN 1 SAO</span>
                        <p style="font-size:13px;">Được khách hàng yêu mến đánh giá 1 sao suốt cuộc hành trình!</p>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-12 flex-row">
                    <div class="img">
                        <i class="fas fa-truck-loading" style="font-size: 80px; 
                        background: -webkit-linear-gradient(rgb(63, 63, 63), #cfcbbc);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent; "></i>
                    </div>
                    <div style="margin-left: 20px;">
                        <span style="font-size:13px;font-weight:bold;text-transform:uppercase;">UY TÍN 1 SAO</span>
                        <p style="font-size:13px;">Được khách hàng yêu mến đánh giá 1 sao suốt cuộc hành trình!</p>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-12 flex-row">
                    <div class="img">
                        <i class="fas fa-truck-loading" style="font-size: 80px; 
                        background: -webkit-linear-gradient(rgb(63, 63, 63), #cfcbbc);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent; "></i>
                    </div>
                    <div style="margin-left: 20px;">
                        <span style="font-size:13px;font-weight:bold;text-transform:uppercase;">UY TÍN 1 SAO</span>
                        <p style="font-size:13px;">Được khách hàng yêu mến đánh giá 1 sao suốt cuộc hành trình!</p>
                    </div>
                </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
            <h6>About Me</h6>
            <strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</strong>
            </div>

            <div class="col-xs-6 col-md-3">
            <h6>LuciStar</h6>
            <ul class="footer-links">
                <li><a href="#">Steam</a></li>
                <li><a href="#">Steam Wallet</a></li>
                <li><a href="#">EpicGames</a></li>
                <li><a href="#">Xbox</a></li>
                <li><a href="#">Garena Card</a></li>
            </ul>
            </div>

            <div class="col-xs-6 col-md-3">
            <h6>Contact</h6>
            <ul class="footer-links">
                <li>Hotline: <a href="http://scanfcode.com/about/">0328684229 (24/1)</a></li>
                <li>My Email: <a href="http://scanfcode.com/contact/">po49639@gmail.com</a></li>
            </ul>
            </div>
        </div>
        <hr>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 By
        <a href="#">Unknown</a>.
            </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
                <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100019798788321"><i class="fab fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="instagram" href="https://www.instagram.com/nuyen.s99/"><i class="fab fa-instagram"></i></a></li>
            </ul>
            </div>
        </div>
        </div>
        
    </footer>

    <script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <script>
        
    </script>
</body>
</html>
