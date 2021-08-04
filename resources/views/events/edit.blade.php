
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="/public/ckeditor5-build-classic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/eventowner.css') }}">
    <title>Document</title>
</head>
<body>
    
    {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ URL::asset('img/logo_transparent.png') }}" alt="" width="50px"></a>
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
                                <a class="nav-link link1" style="margin-bottom:45px;" href="#">
                                    <i class="fas fa-pencil-alt" style="color: black; position: absolute; left:45px;"></i><br>
                                    <span style="color: black; position: absolute;">Thông Tin</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link2" style="margin-bottom:45px;" href="{{ url('events.calendar', $editevent->id) }}">
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
                                <form action="{{ route('editevent', $editevent->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wrap-add-event bg-white">
                                        <div class="forn-add-event">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6">
                                                        <h4 class="text-center fs-2">Chỉnh Sửa Sản Phẩm</h4>
                                                        <p class="text-muted text-center">  
                                                            {{ $editevent->tensk }}
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-13">
                                                        <h1 class="offset">Thông tin sản phẩm</h1>
                                                        <div class="nameevent">
                                                            <div class="mb-3">
                                                                <label for="formGroupExampleInput" class="form-label">Tên sự kiện</label>
                                                                <input type="text" name="tensk" class="form-control" id="formGroupExampleInput" value="{{ $editevent->tensk }}"   placeholder="Nhập tên sự kiện bạn cần tạo." style="width: 50%;" >
                                                            </div>
                                                            <div class="mb-3 search-box">
                                                                <label for="formGroupExampleInput" class="form-label">Chọn chủ đề</label>
                                                                <select class="form-select w-50" name="chude" aria-label="Default select example">
                                                                    <option selected>Chọn chủ đề</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 search-box">
                                                                <label for="formGroupExampleInput" class="form-label">Chọn nhà tổ chức</label>
                                                                <select class="form-select w-50" name="nhatochuc" aria-label="Default select example">
                                                                    <option selected>lựa chọn</option>
                                                                    <option value="1">1</option>
                                                                </select>
                                                                <a href="/user/create-organizer" class="target=_blank" style=" margin-bottom: 10px;"><i class="fa fa-plus"></i> Thêm đơn vị tổ chức mới <i class="fa fa-info-circle" title="Sau khi tạo xong hãy refesh trang để hệ thống nhận ra dữ liệu mới"></i></a>
                                                            </div>
                                                            <div class="col-14 boxbox">
                                                                <p>Nội dung sự kiện</p>
                                                                <textarea class="form-control" id="summary-ckeditor" name="noidungsk"></textarea>
                                                            </div>
                                                            <div class="putimg">
                                                                <label for="apply" class="nameimg"><input type="file" onchange="loadImg()" style="display: none;" name="anh" id="apply" accept="image/*,.pdf"><img id="previewImg" src="/img/{{ ($editevent->anh) }}"  width="500" height="240"></label>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <h1 class="offset" style="margin-top:20px;">Cài đặt SEO</h1>
                                                            <div class="createdSEO">
                                                                <div class="mb-4">
                                                                    <div class="col-14">
                                                                        <div class="p-3">
                                                                            <label for="formGroupExampleInput" class="form-label">Tiêu đề</label>
                                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mặc định tạo ra tên từ.....">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-floating">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style=" height: 70px"></textarea>
                                                                            <label for="floatingTextarea2">Mô tả</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-14">
                                                                        <div class="p-3">
                                                                            <label for="formGroupExampleInput" class="form-label">Từ khóa (các từ cách nhau bởi dấu phẩy ',' )</label>
                                                                            <input type="text" class="form-control" id="formGroupExampleInput" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col checkbox">
                                                                        <label><input type="checkbox" id="event-block_id" name="Event_b" data-name="div1" value="1"> Gửi vé vào Facebook Messenger  </label>
                                                                    </div>
                                                                    <div class="row hide" id="box-connect-messenger" style="display: none">
                                                                        <div class="col-md-6">
                                                                            <div class="col-12 form-group field-event-alias required">
                                                                                <label class="control-label" for="event-alias">Block ID (Xem <a href="https://sukien.net/blog/huong-dan-su-dung-gui-ve-qua-fchat-chatbot-messenger">hướng dẫn tại đây</a>)</label>
                                                                                <input type="text" class="form-control" name="Event[block_id]" value="" placeholder="Nhập Block ID kịch bản gửi vé trên Fchat">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>        </div>
                                                    <div class="col text-center">
                                                        <button type="submit" name="save" class="btn btn-success btnsuc" style="font-size: 30px"><i class="fas fa-plus"></i> Thêm Sự Kiện</button>
                                                        
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
                <script>
                    CKEDITOR.replace( 'summary-ckeditor' );
                    </script>
                    <script>
                        function loadImg(){
    $('#previewImg').attr('src', URL.createObjectURL(event.target.files[0]));
}
                    </script>
            </form>
</body>
</html>