@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <style>
            body{
    background-color: rgb(234, 234, 234);
}
.item{
    background: white;
}

.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.visa{background-image:url(https://thuvienvector.com/upload/images/items/vector-logo-ngan-hang-vietcombank-file-cdr-coreldraw-128.webp); border: 1px solid rgb(68, 181, 68)}
.mastercard{background-image:url(https://westernbank.vn/wp-content/uploads/2020/12/ngan-hang-agribank-1.jpg); border: 1px solid rgb(227, 79, 79)}

.cc-selector input:active +.drinkcard-cc{opacity: .5;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}
a:visited{color:#888}
a{color:#999;text-decoration:none;}
p{margin-bottom:.3em;}

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}


#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
}

</style>


<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body" style="margin-top: 10px">
                    <strong class="card-title">NẠP LCOIN VÀO TÀI KHOẢN</strong>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted cardsub">Phương thức nạp tiền: 1 <i class="fas fa-lira-sign"></i> = 15 VNĐ</h6>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/qr-code.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px;">
                                        <div class="content-qr">
                                            <strong style="color: black;"><i class="fas fa-gift" style="background: -webkit-linear-gradient(rgb(6, 173, 245), #f2b01e);
                                                -webkit-background-clip: text;
                                                -webkit-text-fill-color: transparent;"></i> Thanh toán VNPAY-QR (Ưu đãi lên tới 50%) <i class="fas fa-gift" style="background: -webkit-linear-gradient(rgb(201, 38, 38), #f2b01e);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;"></i></strong>
                                            <p class="text-muted">
                                                Thanh toán bằng QR PAY trên ứng dụng Mobile Banking, phí giao dịch 5%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-header">
                                <div class="content-collap-qr" style="font-size: 13px">
                                    <strong>Ưu đãi <span style="color: rgb(82, 191, 82)">109.000</span> cho khách hàng tạo ví mới VNPAY.</strong><br>
                                    <strong>Ưu đãi mỗi tuần <span style="color: rgb(82, 191, 82)">50.000</span> khi nhập mã VN50k trong ví VNPAY.</strong><br>
                                    <strong><span style="color: rgb(211, 75, 75)">Lưu ý:</span> Nếu bạn quét QR từ ứng dụng Mobile Banking của các ngân hàng thì sẽ không được hường các ưu đãi trên <span style="color: rgb(82, 191, 82)">109.000</span> cho khách hàng tạo ví mới VNPAY.</strong>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                    <label style="padding: 6px 10px 0px 0px"><strong>Nhập số Vcoin:</strong></label>
                                    <div class="input-group mb-3" style="width: 80%;">
                                        <input type="text" class="form-control" value="5.000" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/Huong-dan-mua-Bitcoin-bang-the-tin-dung-vncrypto.com_.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px; margin-top: 5px">
                                        <div class="content-qr">
                                            <strong style="color: black;">Nạp số dư qua ngân hàng nội địa</strong>
                                            <p class="text-muted">
                                                Phí 1.2% + 5000đ
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Nạp tiền qua ATM Nội Địa</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nhập số Vcoin:</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" value="5.000" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/Free-Credit-Card-Visa-And-Master-Card-PNG-Image.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px; margin-top: 5px">
                                        <div class="content-qr">
                                            <strong style="color: black;">Thanh toán bằng thẻ Master/Visa/JCB</strong>
                                            <p class="text-muted">
                                                Phí 2.5,6% + 5.560đ thông qua My ATM :)
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Nạp tiền qua Thẻ Quốc Tế</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <strong>Hệ thống thanh toán bằng thẻ MasterCard/Visa/JCB.</strong><br>
                                    <strong><span style="color: red">Lưu ý: </span>Chỉ nhận thẻ của các ngân hàng trong nước</strong>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nhập số Vcoin:</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" value="5.000" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/logo-garena-png-2.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px;">
                                        <div class="content-qr">
                                            <strong style="color: black;">Nạp Thẻ GARENA</strong>
                                            <p class="text-muted">
                                                Nạp Vcoin bằng thẻ cào Garena, phí 35 -> 40%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Cần nạp 0 VNĐ thẻ Garena</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <strong>PHÍ NẠP THẺ GARENA:</strong><br>
                                    <ul>
                                        <li>Mệnh giá 20k, 50k, 100k, 200k: <span style="color: rgb(255, 0, 0); font-weight: bold">35%</span> (Khuyên dùng)</li>
                                        <li>Mệnh giá 500k: <span style="color: rgb(255, 0, 0); font-weight: bold">40%</span></li>
                                    </ul>
                                    <strong>Quý khách vui lòng kiểm tra email, mọi thông báo (thẻ nạp thành công, thẻ bị sai) sẽ được gửi về email.</strong><br>
                                    <strong style="position: relative; left: 320px; "><a href="https://hotro.garena.vn/mua-the-garena/">-> Địa điểm mua thẻ Garena <-</a></strong><br>
                                    <strong style="color: red">LƯU Ý:</strong>
                                    <ul>
                                        <li>Hãy kiểm tra mệnh giá một lần nữa để xác nhận rằng nó chính xác trước khi gửi thông tin</li>
                                        <li>LuciStar không thể kiểm tra mệnh giá của thẻ vì thẻ dã được mã hóa thành code</li>
                                        <li>Nếu thông tin bạn điền thấp hơn mệnh giá thực của thẻ, bạn sẽ không thể thu hồi lại vì thẻ đã được bán cho khách hàng khác. Người khách hàng được nạp từ thẻ của bạn sẽ được xem như may mắn vì nhận được số tiền cao hơn số mà họ đã mua</li>
                                        <li>Không chấp nhận thẻ Garena mệnh giá nước ngoài</li>
                                    </ul>
                                    <strong style="font-style: italic;">Cảm ơn bạn vì đã cẩn thận cho quyền lợi của mình.</strong>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 50px">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Chọn mệnh giá:   </strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Chọn mệnh giá thẻ</option>
                                                <option value="1">20,000 (Nhận được 15,000 trong tài khoản)</option>
                                                <option value="2">50,000 (Nhận được 37,500 trong tài khoản)</option>
                                                <option value="3">100,000 (Nhận được 75,000 trong tài khoản)</option>
                                                <option value="4">200,000 (Nhận được 150,000 trong tài khoản)</option>
                                                <option value="5">500,000 (Nhận được 350,000 trong tài khoản)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 50px">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Số seri thẻ:   </strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" placeholder="Nhập mã số seri" style="position: relative; left: 35px;">
                                        </div>
                                    </div>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 50px">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Mã thẻ:   </strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" placeholder="Nhập mã số thẻ" style="position: relative; left: 60px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/20201011055543!MoMo_Logo.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px; margin-top: 5px">
                                        <div class="content-qr">
                                            <strong style="color: black;">Chuyển khoản qua App Momo</strong>
                                            <p class="text-muted">
                                                Nạp Vcoin tự động thông qua chuyển khoản trên ứng dụng Momo. Phí 5%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Chuyển khoản qua App Momo</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nhập số Vcoin:</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" value="5.000" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-primary" type="button" id="button-addon2">Nạp Vcoin qua Momo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/card.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px; margin-top: 5px">
                                        <div class="content-qr">
                                            <strong style="color: black;">Nạp Tiền Qua Thẻ Cảo Điện Thoại</strong>
                                            <p class="text-muted">
                                                Nạp tiền qua thẻ cào điện thoại, phí giao dịch 40%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Phí hiện tại sẽ tùy giá!</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="price-for-card d-flex flex-column bd-highlight" style="display: flex; padding-top: 10px ">
                                        <div class="mb-3">
                                            <label for="Select" class="form-label"><strong>Thẻ Điện Thoại:</strong></label>
                                            <select id="Select" class="form-select" style="width: 100%;">
                                                <option>Chọn nhà mạng thẻ</option>
                                                <option value="viettel">Viettel</option>
                                                <option value="mobifone">Mobifone</option>
                                                <option value="vinaphone">Vinaphone</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Select" class="form-label"><strong>Mệnh Giá:</strong></label>
                                            <select id="Select" class="form-select" style="width: 100%;">
                                                <option>Chọn mệnh giá thẻ</option>
                                                <option value="20000">20.000 VNĐ</option>
                                                <option value="50000">50.000 VNĐ</option>
                                                <option value="100000">100.000 VNĐ</option>
                                                <option value="200000">200.000 VNĐ</option>
                                                <option value="500000">500.000 VNĐ</option>
                                            </select>
                                        </div>
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nhập số Seri:</strong></label>
                                        <div class="input-group mb-3" style="width: 100%;">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Vui lòng nhập số Seri thẻ cào">
                                        </div>
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nhập mã thẻ:</strong></label>
                                        <div class="input-group mb-3" style="width: 100%;">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Vui lòng nhập mã thẻ cào">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-success" type="button">Nạp thẻ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/icon-1.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px; margin-top: 5px">
                                        <div class="content-qr">
                                            <strong style="color: black;">Chuyển khoản qua Ngân Hàng</strong>
                                            <p class="text-muted">
                                                Chuyển khoản ngân hàng online hoặc tại quầy giao dịch
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Thông Tin Chuyển Khoản Ngân Hàng</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 style="text-align: center"><strong>Danh Sách Ngân Hàng</strong> </h6>
                                    <div class="bank-title">
                                        <div class="cc-selector" style="text-align: center">
                                            <input id="visa" type="radio" name="credit-card" value="visa" />
                                            <label class="drinkcard-cc visa" for="visa"></label>
                                            <input id="mastercard" type="radio" name="credit-card" value="mastercard" />
                                            <label class="drinkcard-cc mastercard"for="mastercard"></label>
                                        </div>
                                        <div class="title-boss" >
                                            <table id="customers">
                                                <tr class="maincompany">
                                                    <th style="text-align: center">Thông Tin Chuyển Khoản</th>
                                                </tr>
                                            </table>
                                            <table id="customers">
                                                <tr>
                                                    <td style="width: 50%;"><strong>Nội Dung Chuyển Khoản</strong></td>
                                                    <td><i class="fas fa-copy"></i>  <strong>NAPTIEN.........</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tên Tài Khoản</strong></td>
                                                    <td><i class="fas fa-copy"></i>  Bùi Phạm Thành Nguyên</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Số Tài Khoản</strong></td>
                                                    <td><i class="fas fa-copy"></i>  0123456789</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Chi Nhánh</strong></td>
                                                    <td><i class="fas fa-copy"></i>  Biên Hòa - Đồng Nai</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tên Ngân Hàng</strong></td>
                                                    <td><i class="fas fa-copy"></i>  Vietcombank</td>
                                                </tr>
                                            </table>
                                            <div id="titlebank" style="margin-top: 20px; padding: 10px 158px; line-height: 1.5">
                                                <div class="row">
                                                    <p class="text-break" style="margin-bottom: 10px;"><strong><span style="color: red">Lưu ý: </span>Vui lòng ghi đúng nội dung chuyển khoản <span style="color: green">ĐÚNG NỘI DUNG BÊN TRÊN.</span> 
                                                        Nếu không sẽ không thể cộng tiền vào tài khoản của bạn.</strong></p>
                                                        <p class="fst-italic" style="margin-bottom: 10px;">*Trong trường hợp ghi nhầm Username của người khác, Divine sẽ không chịu trách nhiệm! </p>
                                                        <p class="text-break"><strong>Nên chuyển <span style="color: rgb(21, 89, 148)">cùng ngân hàng</span> 
                                                        để nhận được tiền nhanh nhất. Nếu chuyển khác ngân hàng bạn chọn hình thức <span style="color: rgb(21, 89, 148)">chuyển tiền nhanh 24/7.</span></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-boss2" >
                                            <table id="customers">
                                                <tr class="maincompany">
                                                    <th style="text-align: center">Thông Tin Chuyển Khoản</th>
                                                </tr>
                                            </table>
                                            <table id="customers">
                                                <tr>
                                                    <td style="width: 50%;"><strong>Nội Dung Chuyển Khoản</strong></td>
                                                    <td><i class="fas fa-copy"></i>  <strong>NAPTIEN.........</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tên Tài Khoản</strong></td>
                                                    <td><i class="fas fa-copy"></i>  Bùi Phạm Thành Nguyên</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Số Tài Khoản</strong></td>
                                                    <td><i class="fas fa-copy"></i>  0123456789</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Chi Nhánh</strong></td>
                                                    <td><i class="fas fa-copy"></i>  Biên Hòa - Đồng Nai</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tên Ngân Hàng</strong></td>
                                                    <td><i class="fas fa-copy"></i>  Agribank</td>
                                                </tr>
                                            </table>
                                            <div id="titlebank" style="margin-top: 20px; padding: 10px 158px; line-height: 1.5">
                                                <div class="row">
                                                    <p class="text-break" style="margin-bottom: 10px;"><strong><span style="color: red">Lưu ý: </span>Vui lòng ghi đúng nội dung chuyển khoản <span style="color: green">ĐÚNG NỘI DUNG BÊN TRÊN.</span> 
                                                        Nếu không sẽ không thể cộng tiền vào tài khoản của bạn.</strong></p>
                                                        <p class="fst-italic" style="margin-bottom: 10px;">*Trong trường hợp ghi nhầm Username của người khác, Divine sẽ không chịu trách nhiệm! </p>
                                                        <p class="text-break"><strong>Nên chuyển <span style="color: rgb(21, 89, 148)">cùng ngân hàng</span> 
                                                        để nhận được tiền nhanh nhất. Nếu chuyển khác ngân hàng bạn chọn hình thức <span style="color: rgb(21, 89, 148)">chuyển tiền nhanh 24/7.</span></strong></p>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".title-boss").hide();
        });
        
        $(document).ready(function(){
            $(".title-boss2").hide();
        });
        
    </script>
    <script>
        $(document).ready(function(){
            $("#visa").click(function(){
                $(".title-boss").show();
            });
            $("#mastercard").click(function(){
                $(".title-boss2").show();
            });
            $(".btn-link").click(function(){
                $(".title-boss").hide();
            });
            $(".btn-link").click(function(){
                $(".title-boss2").hide();
            });
            $("#mastercard").click(function(){
                $(".title-boss").hide();
            });
            $("#visa").click(function(){
                $(".title-boss2").hide();
            });
        });
    </script>
</body>
@endsection