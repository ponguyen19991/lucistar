@extends('layouts.app')

@section('content')
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<body style="background: rgb(48, 48, 48)">
<div class="container">
    <a href="/"><img src="img/Untitled-1.png" alt="logo" class="imgsukien"></a>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="border-radius: 20px; ">
                <div class="card-body">
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
</div>
</body>
@endsection
