@extends('layouts.app')

@section('content')
<body style="background: rgb(48, 48, 48)">
<div class="container">
    <a href="http://127.0.0.1:8000"><img src="img/Untitled-1.png" alt="logo" class="imgsukien"></a>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card"  style="border-radius: 20px; ">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 class="text-center">ĐĂNG KÝ THÀNH VIÊN</h4>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" placeholder="Họ Và Tên" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="phone_number" placeholder="Số Điện Thoại" for="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" placeholder="Mật Khẩu" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Xác Nhận Mật Khẩu" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" style="width: 100%; border-radius: 20px" class="btn btn-success">
                                    {{ __('Đăng Ký') }}
                                </button>
                                <p class="text-muted text-center textregister">
                                    Bạn đã có tài khoản? <a href="http://127.0.0.1:8000/login" class="text-primary textreset ">Đăng Nhập!</a>.
                                </p>
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
