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
<body>
    <style>
        body{
            background-color: rgb(249, 248, 248);
        }
    </style>
<form action="{{ route('inforevent', $inforevent->id) }}">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="nameinfor">
                <p class="text-muted">
                    <a href="/" class="takeBack" style="text-decoration: none;">
                        <i class="fas fa-home"></i>
                    </a>
                      /  
                    <a href="#" style="text-decoration: none; color: rgb(189, 189, 189);">
                        {{ $inforevent->tensk }}
                    </a>
                </p>
            </div>
        </div>
        
        {{-- Middle Page --}}
            <div class="mainnameInfor">
                <div class="main-name">
                    <h2>{{ $inforevent->tensk }}</h2>
                </div>
                <div class="main-img" >
                    <img src="/img/{{ ($inforevent->anh) }}" class="main" alt="" width="600" height="300">
                </div>
                <form action="events.inforevent/{id}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="have-not">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight">
                            <div class="boxEvents">
                                <div class="sp-info-top" style="width: 40%;">
                                    <div class="sp-info-top-item col-md-4 col-xs-4 col-sm-4">
                                        <div class="sp-info-top-item-icon"><i class="fas fa-barcode"></i></div>
                                        <div class="text-wrap">
                                            <div class="text">Mã sản phẩm</div>
                                            <p class="text-muted" name="masanpham"></p>
                                        </div>
                                    </div>
                                    <div class="sp-info-top-item col-md-4 col-xs-4 col-sm-4">
                                        <div class="sp-info-top-item-icon"><i class="fas fa-question-circle"></i></div>
                                        <div class="text-wrap">
                                            <div class="text">Tình trạng</div>
                                                <span style="color:#53af2e; font-weight:bold;" name="tinhtrang">Còn hàng</span>
                                            </div>
                                    </div>
                                    <div class="sp-info-top-item col-md-4 col-xs-4 col-sm-4">
                                        <div class="sp-info-top-item-icon"><img style="width: 35px;" src="./assets/resources/item-icon-3.png"></div>
                                        <div class="text-wrap">
                                            <div class="text">Link gốc</div>
                                                <div class="text-muted">Sản phẩm</div>
                                            </div>
                                    </div>
                                        <div class="priceEvent">
                                            <p class="text-muted">
                                                Giá Vé
                                            </p>
                                            <span class="price">
                                                {{ number_format($ticket->GIAVE) }} VNĐ
                                            </span>
                                            <hr width="500%" style="    margin: 10px auto;
                                            border-top: 1px solid rgb(0, 0, 0);">
                                        </div>  
                                        <div class="numberTicket">
                                            <div class="amountTicket">
                                                <label for="" class="numberticket">Số Lượng Vé <br><span class="text-muted">{{ $ticket->SOLUONG }}</span></label>
                                                <input type="number" id="quantity" name="soluongve" min="0" max="100" style="outline: none; border-radius: 10px;">
                                            </div>
                                            <div class="buttonBuy">
                                                <button type="submit" class="btn btn-success" name="save">Mua Ngay</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
    </div>
    <hr style="border: 1px solid #aaa4a4;" width="105%">
    <div class="Information-of-events">
        <div class="main-content">
            <h2>
                Chi tiết sự kiện
            </h2>
        </div>
        <div class="middle-content">
            <p>
                {{ $inforevent->noidungsk }}
            </p>
        </div>
    </div>
</div>

<script>
    
</script>
</form>
</body>
@endsection