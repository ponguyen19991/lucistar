@extends('layouts.app')

@section('content')
<body style="background: rgb(48, 48, 48)">
<div class="container">
    <a href="http://127.0.0.1:8000"><img src="/img/Untitled-1.png" alt="logo" class="imgsukien"></a>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h4 class="text-center">Tìm Lại Mật Khẩu</h4>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" placeholder="Please Enter Your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" style="width: 100%; border-radius: 20px" class="btn btn-success">
                                    {{ __('Tìm Lại Mật Khẩu') }}
                                </button>
                                <p class="text-muted text-center textregister">
                                    Thử lại? <a href="http://127.0.0.1:8000/login" class="text-primary textreset ">Đăng Nhập!</a>.
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
