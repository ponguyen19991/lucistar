@extends('layouts.app')

@section('content')
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<style>
    body{
        background-color: rgb(242, 242, 242);
    }
</style>
<body>
    <form action="{{ route('inforevent', $inforevent->id) }}">
        <div class="container">
            <div class="row">
                <div class="d-flex bd-highlight mb-3 Event-Information">
                    <div class="p-2 bd-highlight text-Event textflex">
                        <h3>Thanh Toán</h3>
                    </div>
                    <div class="ms-auto p-2 bd-highlight button-Infor">
                        <a href="/" class="linkToMain" style="text-decoration: none">Xem Thêm Sự Kiện</a>
                    </div>
                </div>
                <hr style="border: 0.5px solid #aaa4a4;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="priceTicket">
                                <fieldset class="col-md-11" style="margin: auto">
                                    <div class="row">
                                        <div class="col img-Ticket">
                                            <img src="/img/{{ ($inforevent->anh) }}" width="80%" height="80%">
                                        </div>
                                        <div class="col name-Ticket">
                                            <a href="{{ url('events.inforevent', $inforevent->id) }}" style="text-decoration: none">{{ $inforevent->tensk }}</a>
                                            <p>Mã sự kiện: </p>
                                        </div>
                                        <div class="col number-Ticket">
                                            <p style="font-weight: bold">
                                                Số lượng:
                                            </p>
                                        </div>
                                        <div class="col price-Ticket">
                                            <p style="font-weight: bold">
                                                {{ $ticket->GIAVE }} VNĐ
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="coupon-inforpay">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header" style="font-weight: bold">
                                                Mã Giảm Giá
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Nhập mã giảm giá....." aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Áp Dụng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5" style="width: 46%;">
                                        <div class="card">
                                            <div class="card-header" style="font-weight: bold;">
                                                THÔNG TIN THANH TOÁN
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex bd-highlight mb-3">
                                                    <div class="p-2 bd-highlight">
                                                        <p class="text-muted">
                                                            Thành Tiền Vé Sự Kiện
                                                        </p>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight">
                                                        <p style="font-weight: bold">
                                                            {{ $ticket->GIAVE }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr style="border-top: 0.5px dashed rgb(208, 208, 208);">
                                                <div class="d-flex bd-highlight mb-3">
                                                    <div class="p-2 bd-highlight">
                                                        <p class="" style="font-weight: bold">
                                                            Tổng Tiền
                                                        </p>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight">
                                                        <p style="font-weight: bold; color: rgb(254, 39, 39);">
                                                            {{ $ticket->GIAVE }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-success" type="button">Thanh Toán</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: 0.5px solid #aaa4a4;" width="96%">
                                <div class="ms-auto p-2 bd-highlight button-Infor">
                                    <a href="{{ url('events.inforevent', $inforevent->id) }}" class="linkToMain2" style="text-decoration: none">Quay Vế Trang Sự Kiện</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
@endsection