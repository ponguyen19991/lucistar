    @extends('layouts.app')

    @section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="font-weight-bold py-3 mb-4">
        Cập Nhật Hồ Sơ
        </h4>

        <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
            <div class="list-group list-group-flush account-settings-links">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Hồ Sơ</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Thay Đổi Mật Khẩu</a>
            </div>
            </div>
            <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">

                <div class="card-body media align-items-center">
                        <label for="apply" class="nameimg"><input type="file" name="image" id="apply" accept="image/*,.pdf"><i class="fas fa-cloud-upload-alt"></i></label>
                    <img id="previewImg" src="" style="width:100px">
                    <div class="text-light small mt-1" style="color: black">Chỉ nhận hình ảnh dạng JPG, GIF or PNG. tối đa với 800KB</div>
                    </div>
                </div>
                <hr class="border-light m-0">

                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Tài Khoản</label>
                        <input type="text" class="form-control mb-1" value="None" name="username">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Họ Và Tên</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Số Điện Thoại</label>
                        <input type="text" class="form-control mb-1" value="{{ Auth::user()->phone_number}}" name="phone_number">
                        </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control mb-1" value="{{ Auth::user()->email }}">
                    <div class="alert alert-warning mt-3">
                        Your email is not confirmed. Please check your inbox.<br>
                        <a href="javascript:void(0)">Resend confirmation</a>
                    </div>
                    </div>
                </div>

                </div>
                <div class="tab-pane fade" id="account-change-password">
                <div class="card-body pb-2">

                    <div class="form-group">
                        <label class="form-label">Mật Khẩu Cũ</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mật Khẩu Mới</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Xác Nhận Mật Khẩu</label>
                        <input type="password" class="form-control">
                    </div>

                </div>
                </div>
        <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary" value="Upload">Lưu Lại</button>&nbsp;
        <button type="submit" class="btn btn-default" name="cancel">Cancel</button>
        </div>

    </div>

</form>
    @endsection
