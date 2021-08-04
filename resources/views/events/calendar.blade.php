
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/eventowner.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/calendar.css') }}">
    <title>Document</title>
</head>
<body>
    
    {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ URL::asset('img/logo_2.png') }}" alt="" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    
                    <p style="color: black; position: absolute; left: 2%; bottom: 35%; font-weight: bold;"></p>
                </li>
                <li class="nav-item dropdown dropstart leftnavbar">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(Auth::user()->avatar)
                        <img src="{{asset('/storage/image/'.Auth::user()->avatar)}}" alt="avatar" width="" style="border-radius:50% 50% 50% 50%;  
                        width:40px;
                        height:40px;">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style=""  aria-labelledby="navbarDropdown">
                                    
                        <a id="user_menu_settings_menuitem" tabindex="-1" role="menuitem" style="text-decoration: none; color: black;" href="http://127.0.0.1:8000/profile">
                            <div aria-hidden="true" class="user_menu_details"><img src="{{asset('/storage/image/'.Auth::user()->avatar)}}" style="width: 100%;"  alt="{{ Auth::user()->name }}" class="user_avatar big">
                                <div class="user_menu_details_text">
                                    <strong>{{ Auth::user()->name }}</strong>
                                    <p class="user_menu_email">{{ Auth::user()->email }}</p>
                                </div></div><span class="user_menu_details_btn"><svg width="24" height="24" aria-hidden="true">
                                    <g fill="none" fill-rule="evenodd"><path d="M3 3h18v18H3z"></path></g></svg></span></a>

                            <a class="dropdown-item" href="http://127.0.0.1:8000/home">
                                Sự Kiện
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
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        
        <form action="" method="POST" enctype="multipart/form-data">
                <div class="itemleft" style="width: 10%; margin-top:10px; display: flex; ">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link link1" style="margin-bottom:45px;" href="{{ url('events.edit', $calendar->id) }}">
                                    <i class="fas fa-pencil-alt" style="color: black; position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute;">Thông Tin</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link2" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-calendar-alt" style="color: black;position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute; left:38px;">Lịch</span>
                                </a>
                            </li>
                            <li class="nav-item link3">
                                <a class="nav-link" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-ticket-alt" style="color: black;position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute; left:28px;">Loại Vé</span>
                                </a>
                            </li>
                            <li class="nav-item link4"> 
                                <a class="nav-link" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-list" style="color: black; position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute; left:23px;">Đăng Ký</span>
                                </a>
                            </li>
                            <li class="nav-item link5">
                                <a class="nav-link" style="margin-bottom:45px;" href="#">   
                                    <i class="fas fa-chart-line" style="color: black;position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute;">Thống Kê</span>
                                </a>
                            </li>
                            <li class="nav-item link6">
                                 <a class="nav-link" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-user-plus" style="color: black;position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute; left:32px;">Users</span>
                                </a>
                            </li>
                            <li class="nav-item link7">
                                <a class="nav-link" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-gift" style="color: black;position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute; left:25px;">Coupon</span>
                                </a>
                            </li>
                            <li class="nav-item link8">
                                <a class="nav-link" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-cog" style="color: black;position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute; left:26px;">Cài Đặt</span>
                                </a>
                            </li>
                        </ul>
                            <div class="navbar-main schedule-list" style="position: absolute; left: 200px">
                                <form action="{{ route('calendar', $calendar->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wrap-add-event bg-white">
                                        <div class="forn-add-event">
                                            <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="d-flex bd-highlight mb-3 Event-Information">
                                                            <div class="p-2 bd-highlight text-Event">
                                                                <h3>Danh sách lịch</h3>
                                                            </div>
                                                            <div class="p-2 bd-highlight button-Calen">
                                                                <a href="/events.createcalendar/{{$calendar->id}}" class="btn btn2"><i class="fas fa-plus"></i> Thêm Lịch</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-11">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Thành Phố</th>
                                                                        <th scope="col">Địa Chỉ</th>
                                                                        <th scope="col">Đăng Ký</th>
                                                                        <th scope="col">Thống Kê</th>
                                                                        <th scope="col">Từ Ngày</th>
                                                                        <th scope="col">Đến Ngày</th>
                                                                        <th scope="col">Thời Gian</th>
                                                                        <th scope="col">Ngày Tạo</th>
                                                                        <th scope="col">Trạng Thái</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($calendar as $cal)
                                                                    <tr>
                                                                        <th scope="row">{{ $calendar->id }}</th>
                                                                        <td>{{ $calendar->thanhpho }}</td>
                                                                        <td>{{ $calendar->diachi }}</td>
                                                                        <td>{{ $calendar->diachi }}</td>
                                                                        <td>{{ $calendar->ngaybatdau }}</td>
                                                                        <td>{{ $calendar->ngayketthuc }}</td>
                                                                        <td>{{ $calendar->timestart }} To {{ $calendar->timeend }}</td>
                                                                        <td>{{ $calendar->diachi }}</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="edit-delete" style="display: flex;">
                                                                                <button class="btn btn1" style="margin-right: 10px"><i class="fas fa-pencil-alt"></i></button>
                                                                                <button class="btn btn1"><i class="fa fa-trash-alt"></i></button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
</body>
</html>