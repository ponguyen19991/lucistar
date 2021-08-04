<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/eventowner2.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="{{ URL::asset('img/logo_transparent.png') }}" alt="" width="40px">
                <div class="logo_name"><a class="navbar-brand" href="/">LuciStar</a></div>
            </div>
            <box-icon id="btn" name='menu' style="font-size: 20px;"></box-icon>
        </div>
        <ul class="nav_list">
            <li>
                    <box-icon name='search' ></box-icon>
                    <input type="text" placeholder="Search...">
                {{-- <span class="tooltip">Dashboard</span> --}}
            </li>
            <li>
                <a href="#">
                    <box-icon name='pencil' ></box-icon>
                    <span class="links_name">Thông Tin</span>
                </a>
                {{-- <span class="tooltip">Dashboard</span> --}}
            </li>            <li>
                <a href="#">
                    <box-icon name='chart' ></box-icon>
                    <span class="links_name">Thống Kê</span>
                </a>
                {{-- <span class="tooltip">Dashboard</span> --}}
            </li>            <li>
                <a href="#">
                    <box-icon name='gift' ></box-icon>
                    <span class="links_name">Coupon</span>
                </a>
                {{-- <span class="tooltip">Dashboard</span> --}}
            </li>            <li>
                <a href="#">
                    <box-icon name='user' ></box-icon>
                    <span class="links_name">User</span>
                </a>
                {{-- <span class="tooltip">Dashboard</span> --}}
            </li>            <li>
                <a href="#">
                    <box-icon name='cog' ></box-icon>
                    <span class="links_name">Cài Đặt</span>
                </a>
                {{-- <span class="tooltip">Dashboard</span> --}}
            </li>
        </ul>
        <div class="profile_content">
            
        </div>
    </div>
</body>
</html>