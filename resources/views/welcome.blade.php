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
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
                body{
        background-color: rgb(234, 234, 234);
    }
    .item{
        background: white;
    }
    .nav-active li{
        list-style:none;
    float:left;
    padding-right:20px;
    }
    .nav-active li a{
    text-decoration:none;
    color:#222;
    padding: 10px 15px 15px 15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    }
    .nav-active li a.active {
    color: rgb(255, 255, 255);
    background-color: rgb(142, 142, 142)
    }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="navbarmenu" style="position: absolute;">
                <div class="stuf">
                    <i class="fas fa-list" style="text-align: center"> </i><strong>Danh Mục Sản Phẩm</strong>
                </div>
                <ul class="liststuf" style="list-style: none;">
                    <li><a href="#"><i class="fab fa-steam-symbol"></i>Steam</a></li>
                    <li><a href="#"><i class="fas fa-wallet" style="font-size: 14px"></i>Steam Wallet</a></li>
                    <li><a href="#"><i class="fab fa-cc-amazon-pay" style="font-size: 14px"></i>Garena Card</a></li>
                    <li><a href="#news"><i class="fas fa-ghost" ></i>Epic Game</a></li>
                    <li><a href="#news"><i class="fas fa-warehouse" style="font-size: 11px"></i>Utilities - Tiện Ích</a></li>
                    <li><a href="#contact"><i class="fab fa-xbox" style="font-size: 14px"></i>Xbox Stuff</a></li>
                    <li><a href="#about"><i class="fas fa-money-bill-wave" style="font-size: 12px"></i>Purchase Game Mobile</a></li>
                </ul>
            </div>
            <div class="row" style="margin-left: 210px" >
                <div class="col-md-7">
                    <div class="allinput" style="margin-bottom: 10px">
                        <div class="input1 input-group-sm mb-2 d-inline">
                            <input type="button" class="btn btn-outline-dark" value="Hướng Dẫn Tạo Sự Kiện">
                        </div>
                        <div class="input1 input-group-sm mb-2 d-inline p-2">
                            <input type="button" class="btn btn-outline-dark" value="Liên Hệ Hợp Tác">
                        </div>
                        <div class="input2 input-group-sm mb-2 d-inline p-2" >
                            <input type="button" class="btn btn-outline-dark" onclick="payment()" value="Hình Thức Thanh Toán" >
                        </div>
                    </div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/ws_Dark_forest_1280x720.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/forest_fog_bw_157928_1280x720.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/dark-forest.-1280×720.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <div class="roll">
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                        <div class="allimgcoupon">
                            <div class="img-coupon">
                                <a href="#">
                                    <img class="img-1" src="img/steammain_1615662830.jpg" alt="couponsteam" width="60%" height="48%">
                                </a>
                            </div>
                            <div class="img-coupon2">
                                <a href="#">
                                    <img class="img-2" src="img/YtvSDEcRwIWaKJiXg3xwiQRjK56T6Aan.jpeg" alt="coupongarena"  width="60%" height="48%">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 15px; margin-left: 25px">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="source-img1">
                            <a href="#">
                                <div class="overlay"></div>
                                <img class="imgscr1" src="img/Genshin-Impact-Cards_FI.jpg" alt="genshinimmpact" width="160%" height="160%" style="border-radius: 10px">
                                <div class="content-details fadeIn_bottom">
                                    <h3 class="content-title">Genshin Impact</h3>
                                    <p class="content-text">Stuf about GI</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="source-img2" style="position: relative; left: 60%;">
                            <a href="#">
                                <div class="overlay2"></div>
                                <img class="imgscr1" src="img/fortnite_vbucks_main-1280x720.jpg" alt="genshinimmpact" width="150%" height="150%" style="border-radius: 10px">
                                <div class="content-details2 fadeIn_bottom">
                                    <h3 class="content-title2">Card EpicGames</h3>
                                    <p class="content-text2">All Card for Epic Games</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="source-img3" style="position: relative; left: 110%;">
                            <a href="#">
                                <div class="overlay3"></div>
                                <img class="imgscr1" src="img/195.jpg" alt="genshinimmpact" width="160%" height="150%" style="border-radius: 10px">
                                <div class="content-details3 fadeIn_bottom">
                                    <h3 class="content-title3">Card XboxLive</h3>
                                    <p class="content-text3">All Card for Xbox</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex bd-highlight mb-3 Event-Information">
                <div class="p-2 bd-highlight text-Event">
                    <h3>Sản Phẩm Nổi Bật</h3>
                </div>
                <div class="ms-auto p-2 bd-highlight button-Infor">
                    <button class="btn btn-primary btn-sm" onclick="to()">Xem Chi Tiết</button>
                </div>
            </div>
            <form action="{{ route('event') }}">
                @csrf
            <div class="row">
            @foreach ($event as $evn )
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
        </div>
        <hr>
        <div class="d-flex bd-highlight mb-3 Event-Information">
            <div class="p-2 bd-highlight text-Event">
                <h3>Sản Phẩm Bán Chạy</h3>
            </div>
            <div class="ms-auto p-2 bd-highlight button-Infor">
                <button class="btn btn-primary btn-sm" onclick="to()">Xem Chi Tiết</button>
            </div>
        </div>
        <div class="row">
        @foreach ($event as $evn )
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
                                        {{ number_format($ticket[3]->GIAVE) }} VNĐ
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
    </div>
    <hr>
    <div class="title-beststuf" style="padding-top: 30px ">
        <strong><h3>Sản phẩm giá tốt</h3></strong>
        <p>Bạn có thể lựa chọn hiện thị theo giá sảm phẩm phù hợp với túi tiền</p>
    </div>
    <div class="price-beststuf">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" style="text-align: center; padding-bottom: 50px">
            <div class="col">
                <div class="p-5 border bg-light btn" style="box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);" onclick="wellprice()"><strong>Dưới 50.000đ</strong></div>
            </div>
            <div class="col">
                <div class="p-5 border bg-light btn" style="box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);" onclick="wellprice()"><strong>Dưới 100.000đ</strong></div>
            </div>
            <div class="col">
                <div class="p-5 border bg-light btn" style="box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);" onclick="wellprice()"><strong>Dưới 200.000đ</strong></div>
            </div>
            <div class="col">
                <div class="p-5 border bg-light btn" style="box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);" onclick="wellprice()"><strong>Dưới 500.000đ</strong></div>
            </div>
            <div class="col">
                <div class="p-5 border bg-light btn" style="box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);" onclick="wellprice()"><strong>Dưới 1.000.000đ</strong></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="discover">
        <div class="title-discover" style="padding: 20px 0px 10px 0px">
            <h3><strong>Khám Phá</strong></h3>
        </div>
        <div class="img-discover" style="margin-bottom: 80px;">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col">
                    <div class="img-d1">
                        <a href="#">
                            <img src="img/steam-wallet-code_7.jpg" alt="#"  width="250" height="300"  style="background-iamge:linear-gradient(red, yellow); ">
                            <div class="bottom-left" style=" color: white; position: absolute; top: 220px; padding: 0px 0px 0px 10px; background-color: hsla(120, 80%, 2%, 0.79);  width: 110%; height: 80px;">
                                <strong>SẢN PHẨM NỔI BẬT</strong>
                                <p style="font-size: 13px;" >Game hot trên thị trường, được mọi người mua nhiều.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col" style="position: relative; left: 60px">
                    <div class="img-d1">
                        <a href="#">
                            <img src="img/steam-sale-banner-01_zxtj.jpg" alt="#"  width="250" height="300"  style="background-iamge:linear-gradient(red, yellow); ">
                            <div class="bottom-left" style=" color: white; position: absolute; top: 220px; padding: 0px 0px 0px 10px; background-color: hsla(120, 75%, 2%, 0.79);  width: 110%; height: 80px;">
                                <strong>KHUYẾN MÃI</strong>
                                <p style="font-size: 13px;" >Gaben is god!!!</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col" style="position: relative; left: 125px">
                    <div class="img-d1">
                        <a href="#">
                            <img src="img/steam-gift-cards-price-in-nepal-001.jpg" alt="#"  width="250" height="300"  style="background-iamge:linear-gradient(red, yellow); ">
                            <div class="bottom-left" style=" color: white; position: absolute; top: 220px; padding: 0px 0px 0px 10px; background-color: hsla(120, 75%, 2%, 0.79);  width: 110%; height: 80px;">
                                <strong>CODE WALLET</strong>
                                <p style="font-size: 13px;" >Nạp tiền vào ví, không rút ra được</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col" style="position: relative; left: 190px">
                    <div class="img-d1">
                        <a href="#">
                            <img src="img/store-card(3).jpg" alt="#"  width="250" height="300"  style="background-iamge:linear-gradient(red, yellow); ">
                            <div class="bottom-left" style=" color: white; position: absolute; top: 220px; padding: 0px 0px 0px 10px; background-color: hsla(120, 75%, 2%, 0.3);  width: 110%; height: 80px;">
                                <strong>THẺ CÀO</strong>
                                <p style="font-size: 13px;" >Có đủ mọi loại thẻ!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="random-stuf" style="margin-top: 30px">
        <ul class="nav-active">
            <li class="nav-item active">
                <a class="tab1" href="#tab1" data-toggle="tab" aria-expanded="true">Mua nhiều</a>
            </li>
            <li class="nav-item active">
                <a class="tab2" href="#tab1" data-toggle="tab" aria-expanded="true">Mới cập nhật</a>
            </li>
            <li class="nav-item active">
                <a class="tab3" href="#tab1" data-toggle="tab" aria-expanded="true">Khuyến mãi</a>
            </li>
        </ul>

        <div class="img-random">
            <div class="onlyimg" style="margin-left: calc(50% - 50vw);
            margin-right: calc(51% - 50vw);
            max-width: 1000%;
            width: auto;">
                <img src="img/2b4379ff8c6a1bf0242f20bea388425e.jpg" alt="" width="100%" style="margin-top: 13px; opacity: 0.7;">
            </div>
            <div class="position-relative holdthing-randomstuf">
                <div class="position-absolute" style="bottom: 30px; left: 33px; width: 60%;">
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/NETFLIX1406.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/Spotify 1 thang.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/Image 1055.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 80 HKD.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 120 HKD.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 100 TWD (1).png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px; ">
                                <a href="#"><img src="img/header.jpg" alt=""  width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative holdthing-randomstuf2">
                <div class="position-absolute" style="bottom: 30px; left: 33px; width: 60%;">
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/NETFLIX1406.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/Spotify 1 thang.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/Image 1055.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 80 HKD.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 120 HKD.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 100 TWD (1).png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px; ">
                                <a href="#"><img src="img/header.jpg" alt=""  width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative holdthing-randomstuf3">
                <div class="position-absolute" style="bottom: 30px; left: 33px; width: 60%;">
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/NETFLIX1406.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/Spotify 1 thang.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/Image 1055.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 80 HKD.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 120 HKD.png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px">
                                <a href="#"><img src="img/STEAM 100 TWD (1).png" alt="" width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" style="margin-bottom: 11px;">
                        <div class="col">
                            <div class="p-3 border bg-light" style="height: 80px; ">
                                <a href="#"><img src="img/header.jpg" alt=""  width="30%" height="80px" style="position: absolute; top: 0px; left: 24px"></a>
                                <div class="title-and-price">
                                    <a href="#" style="text-decoration: none; color: rgb(0, 0, 0)"><p class="fw-normal" style="position: absolute; top: 8px; left: 250px;">Tài khoản nghe nhạc Spotify Premium</p></a>
                                    <a href="#" style="text-decoration: none; position: absolute; left: 253px; top: 36px;"><p class="text-muted" style="font-size: 10px">Xem đánh giá</p></a>
                                    <a href="#" style="color: #fff; text-decoration: none">
                                        <span style="position: absolute; left: 250px; top: 53px; background-color: #7e8489; font-size: 13px; padding: 1px 9px 3px 11px; border-radius: 5px">Mua Ngay</span>
                                    </a>
                                    <p class="fw-bold" style="position: absolute; right: 40px; top: 30px">59.000đ</p>
                                    <div class="like-and-getcart" style="position: absolute; top: 45px; right: 320px;">          
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
        </div>
        <script src="{{ asset('js/welcome.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".holdthing-randomstuf").hide();
            });
            $(document).ready(function(){
                $(".holdthing-randomstuf2").hide();
            });
            $(document).ready(function(){
                $(".holdthing-randomstuf3").hide();
            });
        </script>
            <script>
                $(document).ready(function(){
                    $(".tab1").click(function(){
                        $(".holdthing-randomstuf").fadeIn(500);
                    });
                    $(".tab2").click(function(){
                        $(".holdthing-randomstuf2").fadeIn(500);
                    });
                    $(".tab3").click(function(){
                        $(".holdthing-randomstuf3").fadeIn(500);
                    });
                    $(".tab1").click(function(){
                        $(".holdthing-randomstuf2").hide();
                    });
                    $(".tab3").click(function(){
                        $(".holdthing-randomstuf2").hide();
                    });
                    $(".tab2").click(function(){
                        $(".holdthing-randomstuf").hide();
                    });
                    $(".tab1").click(function(){
                        $(".holdthing-randomstuf3").hide();
                    });
                    $(".tab2").click(function(){
                        $(".holdthing-randomstuf3").hide();
                    });
                    $(".tab3").click(function(){
                        $(".holdthing-randomstuf2").hide();
                    });
                    $(".tab3").click(function(){
                        $(".holdthing-randomstuf").hide();
                    });
                });
            </script>
        <script>
                function dieu_huong(){
            location.assign("events.buy/{id}");
        }
        function to() {
            location.assign("features");
        }
        function payment() {
            location.assign("payments");
        }
        function wellprice() {
            location.assign("params");
        }
        </script>
        <script>
        var selector, elems, makeActive;

        selector = '.nav-active li a';

        elems = document.querySelectorAll(selector);

        makeActive = function () {
            for (var i = 0; i < elems.length; i++)
                elems[i].classList.remove('active');
            
            this.classList.add('active');
        };

        for (var i = 0; i < elems.length; i++)
            elems[i].addEventListener('mousedown', makeActive);
        </script>
        
    </body>
</html>
@endsection