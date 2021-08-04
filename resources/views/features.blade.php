@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <body style="background-color: rgb(234, 234, 234)">
        <div class="container">
            <div class="row">
                <div id="text-features">
                    <strong>Sản Phẩm Nổi Bật</strong>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 holdthing">
                <div class="col">
                    <div class="search-features">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tìm kiếm sản phẩm.....">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="select-features">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tất cả danh mục</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="select-features2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Mặc định</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="select-features">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Sản phẩm</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="select-features">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Số lượng</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="rangeprice" style="margin-bottom: 20px">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="text-rangeprice" style="margin-top: 8px">
                            <strong>Thiết lập giá tiền</strong>
                        </div>
                    </div>
                    <div class="col">
                        <div class="numberprice">
                            <input type="text" id="nbprice" class="form-control" value="0" style="width: 50%; position: relative; right: 50px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="range-price">
                            <input id="myRange" type="range" class="form-range" min="0" max="100" value="50" style="width: 275%; position: relative; right: 162px; margin-top: 8px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="numberprice">
                            <input type="text" class="form-control numberprice1" value="100" style="width: 50%; position: relative; left: 200px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="filter" style="position: relative; left: 138px">
                            <button type="button" class="btn btn-info"><i class="fas fa-filter" style="color: white"></i> <strong>Lọc</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thoathuan" style="margin-bottom: 20px">
                <strong>SẢN PHẨM THỎA THUẬN TÌM KIẾM</strong>
            </div>
            <div class="row">
            @foreach ($inforevent as $evn )
            <div class="col-md-3 pad-10">
                <div class="item">
                        <div class="img_event">
                        <a href="{{ url('events.inforevent', $evn->id) }}">
                            <img src="/img/{{ ($evn->anh) }}">
                        </a>
                        </div>
                        <div class="info_event">
                            <div class="box_event">
                                <div class="name_ev">
                                <a href="{{ $evn->id }}">
                                    <p class="event_name">{{ $evn->tensk }}</p> 
                                </a>
                                <strong class="price_auto" style="text-align: center">
                                    {{ number_format($ticket[0]->GIAVE) }} VNĐ
                                </strong>
                                </div>
                            </div>
                            <div class="information">
                                <div class="d-flex bd-highlight mb-3 Event-Information">
                                    <div class="p-2 bd-highlight text-Event">
                                        <a href="#" class="heart">
                                            <i class="fas fa-heart" ></i>
                                        </a>
                                    </div>
                                    <div class="ms-auto p-2 bd-highlight address-Infor">
                                        <a href="#" class="shopping"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <p style="display: flex;justify-content: center; padding-bottom: 30px">
                                {{-- <a href="/checkin?event_id=25" title="Check in" class="btn btn-default" style="width: 94%;"><i class="fa fa-qrcode"></i> CHECK-IN</a> --}}
                                <button type="button" onclick="dieu_huong()" class="btn btn-outline-primary btn-sm">Mua Sảm Phẩm</button>
                            </p>
                        </div>
                </div>
            
        </div>
        @endforeach
            <div class="loadmore">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-dark" type="button">Tải thêm sản phẩm</button>
                </div>
            </div>
        </div>
        
        <script>
function sliderChange(val) {
    document.getElementById('myRange').innerHTML = val;
}
document.getElementById('nbprice').value = 0;
        </script>
    </body>
</html>
@endsection