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
                    <strong class="card-title">N???P LCOIN V??O T??I KHO???N</strong>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted cardsub">Ph????ng th???c n???p ti???n: 1 <i class="fas fa-lira-sign"></i> = 15 VN??</h6>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="display: flex; text-decoration: none; padding: 7px 0px 0px 0px">
                                        <img class="qrcode" src="img/qr-code.png" alt="qrcode" width="5%" style="display: block; margin-right: 10px;">
                                        <div class="content-qr">
                                            <strong style="color: black;"><i class="fas fa-gift" style="background: -webkit-linear-gradient(rgb(6, 173, 245), #f2b01e);
                                                -webkit-background-clip: text;
                                                -webkit-text-fill-color: transparent;"></i> Thanh to??n VNPAY-QR (??u ????i l??n t???i 50%) <i class="fas fa-gift" style="background: -webkit-linear-gradient(rgb(201, 38, 38), #f2b01e);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;"></i></strong>
                                            <p class="text-muted">
                                                Thanh to??n b???ng QR PAY tr??n ???ng d???ng Mobile Banking, ph?? giao d???ch 5%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-header">
                                <div class="content-collap-qr" style="font-size: 13px">
                                    <strong>??u ????i <span style="color: rgb(82, 191, 82)">109.000</span> cho kh??ch h??ng t???o v?? m???i VNPAY.</strong><br>
                                    <strong>??u ????i m???i tu???n <span style="color: rgb(82, 191, 82)">50.000</span> khi nh???p m?? VN50k trong v?? VNPAY.</strong><br>
                                    <strong><span style="color: rgb(211, 75, 75)">L??u ??:</span> N???u b???n qu??t QR t??? ???ng d???ng Mobile Banking c???a c??c ng??n h??ng th?? s??? kh??ng ???????c h?????ng c??c ??u ????i tr??n <span style="color: rgb(82, 191, 82)">109.000</span> cho kh??ch h??ng t???o v?? m???i VNPAY.</strong>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                    <label style="padding: 6px 10px 0px 0px"><strong>Nh???p s??? Vcoin:</strong></label>
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
                                            <strong style="color: black;">N???p s??? d?? qua ng??n h??ng n???i ?????a</strong>
                                            <p class="text-muted">
                                                Ph?? 1.2% + 5000??
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>N???p ti???n qua ATM N???i ?????a</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nh???p s??? Vcoin:</strong></label>
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
                                            <strong style="color: black;">Thanh to??n b???ng th??? Master/Visa/JCB</strong>
                                            <p class="text-muted">
                                                Ph?? 2.5,6% + 5.560?? th??ng qua My ATM :)
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>N???p ti???n qua Th??? Qu???c T???</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <strong>H??? th???ng thanh to??n b???ng th??? MasterCard/Visa/JCB.</strong><br>
                                    <strong><span style="color: red">L??u ??: </span>Ch??? nh???n th??? c???a c??c ng??n h??ng trong n?????c</strong>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nh???p s??? Vcoin:</strong></label>
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
                                            <strong style="color: black;">N???p Th??? GARENA</strong>
                                            <p class="text-muted">
                                                N???p Vcoin b???ng th??? c??o Garena, ph?? 35 -> 40%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>C???n n???p 0 VN?? th??? Garena</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <strong>PH?? N???P TH??? GARENA:</strong><br>
                                    <ul>
                                        <li>M???nh gi?? 20k, 50k, 100k, 200k: <span style="color: rgb(255, 0, 0); font-weight: bold">35%</span> (Khuy??n d??ng)</li>
                                        <li>M???nh gi?? 500k: <span style="color: rgb(255, 0, 0); font-weight: bold">40%</span></li>
                                    </ul>
                                    <strong>Qu?? kh??ch vui l??ng ki???m tra email, m???i th??ng b??o (th??? n???p th??nh c??ng, th??? b??? sai) s??? ???????c g???i v??? email.</strong><br>
                                    <strong style="position: relative; left: 320px; "><a href="https://hotro.garena.vn/mua-the-garena/">-> ?????a ??i???m mua th??? Garena <-</a></strong><br>
                                    <strong style="color: red">L??U ??:</strong>
                                    <ul>
                                        <li>H??y ki???m tra m???nh gi?? m???t l???n n???a ????? x??c nh???n r???ng n?? ch??nh x??c tr?????c khi g???i th??ng tin</li>
                                        <li>LuciStar kh??ng th??? ki???m tra m???nh gi?? c???a th??? v?? th??? d?? ???????c m?? h??a th??nh code</li>
                                        <li>N???u th??ng tin b???n ??i???n th???p h??n m???nh gi?? th???c c???a th???, b???n s??? kh??ng th??? thu h???i l???i v?? th??? ???? ???????c b??n cho kh??ch h??ng kh??c. Ng?????i kh??ch h??ng ???????c n???p t??? th??? c???a b???n s??? ???????c xem nh?? may m???n v?? nh???n ???????c s??? ti???n cao h??n s??? m?? h??? ???? mua</li>
                                        <li>Kh??ng ch???p nh???n th??? Garena m???nh gi?? n?????c ngo??i</li>
                                    </ul>
                                    <strong style="font-style: italic;">C???m ??n b???n v?? ???? c???n th???n cho quy???n l???i c???a m??nh.</strong>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 50px">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Ch???n m???nh gi??:??????</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Ch???n m???nh gi?? th???</option>
                                                <option value="1">20,000 (Nh???n ???????c 15,000 trong t??i kho???n)</option>
                                                <option value="2">50,000 (Nh???n ???????c 37,500 trong t??i kho???n)</option>
                                                <option value="3">100,000 (Nh???n ???????c 75,000 trong t??i kho???n)</option>
                                                <option value="4">200,000 (Nh???n ???????c 150,000 trong t??i kho???n)</option>
                                                <option value="5">500,000 (Nh???n ???????c 350,000 trong t??i kho???n)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 50px">
                                        <label style="padding: 6px 10px 0px 0px"><strong>S??? seri th???:??????</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" placeholder="Nh???p m?? s??? seri" style="position: relative; left: 35px;">
                                        </div>
                                    </div>
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 50px">
                                        <label style="padding: 6px 10px 0px 0px"><strong>M?? th???:??????</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" placeholder="Nh???p m?? s??? th???" style="position: relative; left: 60px;">
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
                                            <strong style="color: black;">Chuy???n kho???n qua App Momo</strong>
                                            <p class="text-muted">
                                                N???p Vcoin t??? ?????ng th??ng qua chuy???n kho???n tr??n ???ng d???ng Momo. Ph?? 5%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Chuy???n kho???n qua App Momo</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="price-for-vcoin" style="display: flex; padding-top: 10px ">
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nh???p s??? Vcoin:</strong></label>
                                        <div class="input-group mb-3" style="width: 80%;">
                                            <input type="text" class="form-control" value="5.000" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-primary" type="button" id="button-addon2">N???p Vcoin qua Momo</button>
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
                                            <strong style="color: black;">N???p Ti???n Qua Th??? C???o ??i???n Tho???i</strong>
                                            <p class="text-muted">
                                                N???p ti???n qua th??? c??o ??i???n tho???i, ph?? giao d???ch 40%
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Ph?? hi???n t???i s??? t??y gi??!</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="price-for-card d-flex flex-column bd-highlight" style="display: flex; padding-top: 10px ">
                                        <div class="mb-3">
                                            <label for="Select" class="form-label"><strong>Th??? ??i???n Tho???i:</strong></label>
                                            <select id="Select" class="form-select" style="width: 100%;">
                                                <option>Ch???n nh?? m???ng th???</option>
                                                <option value="viettel">Viettel</option>
                                                <option value="mobifone">Mobifone</option>
                                                <option value="vinaphone">Vinaphone</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Select" class="form-label"><strong>M???nh Gi??:</strong></label>
                                            <select id="Select" class="form-select" style="width: 100%;">
                                                <option>Ch???n m???nh gi?? th???</option>
                                                <option value="20000">20.000 VN??</option>
                                                <option value="50000">50.000 VN??</option>
                                                <option value="100000">100.000 VN??</option>
                                                <option value="200000">200.000 VN??</option>
                                                <option value="500000">500.000 VN??</option>
                                            </select>
                                        </div>
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nh???p s??? Seri:</strong></label>
                                        <div class="input-group mb-3" style="width: 100%;">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Vui l??ng nh???p s??? Seri th??? c??o">
                                        </div>
                                        <label style="padding: 6px 10px 0px 0px"><strong>Nh???p m?? th???:</strong></label>
                                        <div class="input-group mb-3" style="width: 100%;">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Vui l??ng nh???p m?? th??? c??o">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-success" type="button">N???p th???</button>
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
                                            <strong style="color: black;">Chuy???n kho???n qua Ng??n H??ng</strong>
                                            <p class="text-muted">
                                                Chuy???n kho???n ng??n h??ng online ho???c t???i qu???y giao d???ch
                                            </p>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="card-header">
                                    <div class="content-collap-qr" style="font-size: 13px">
                                        <strong>Th??ng Tin Chuy???n Kho???n Ng??n H??ng</strong>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 style="text-align: center"><strong>Danh S??ch Ng??n H??ng</strong> </h6>
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
                                                    <th style="text-align: center">Th??ng Tin Chuy???n Kho???n</th>
                                                </tr>
                                            </table>
                                            <table id="customers">
                                                <tr>
                                                    <td style="width: 50%;"><strong>N???i Dung Chuy???n Kho???n</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??<strong>NAPTIEN.........</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>T??n T??i Kho???n</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??B??i Ph???m Th??nh Nguy??n</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>S??? T??i Kho???n</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??0123456789</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Chi Nh??nh</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??Bi??n H??a - ?????ng Nai</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>T??n Ng??n H??ng</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??Vietcombank</td>
                                                </tr>
                                            </table>
                                            <div id="titlebank" style="margin-top: 20px; padding: 10px 158px; line-height: 1.5">
                                                <div class="row">
                                                    <p class="text-break" style="margin-bottom: 10px;"><strong><span style="color: red">L??u ??: </span>Vui l??ng ghi ????ng n???i dung chuy???n kho???n <span style="color: green">????NG N???I DUNG B??N TR??N.</span> 
                                                        N???u kh??ng s??? kh??ng th??? c???ng ti???n v??o t??i kho???n c???a b???n.</strong></p>
                                                        <p class="fst-italic" style="margin-bottom: 10px;">*Trong tr?????ng h???p ghi nh???m Username c???a ng?????i kh??c, Divine s??? kh??ng ch???u tr??ch nhi???m! </p>
                                                        <p class="text-break"><strong>N??n chuy???n <span style="color: rgb(21, 89, 148)">c??ng ng??n h??ng</span> 
                                                        ????? nh???n ???????c ti???n nhanh nh???t. N???u chuy???n kh??c ng??n h??ng b???n ch???n h??nh th???c <span style="color: rgb(21, 89, 148)">chuy???n ti???n nhanh 24/7.</span></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-boss2" >
                                            <table id="customers">
                                                <tr class="maincompany">
                                                    <th style="text-align: center">Th??ng Tin Chuy???n Kho???n</th>
                                                </tr>
                                            </table>
                                            <table id="customers">
                                                <tr>
                                                    <td style="width: 50%;"><strong>N???i Dung Chuy???n Kho???n</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??<strong>NAPTIEN.........</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>T??n T??i Kho???n</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??B??i Ph???m Th??nh Nguy??n</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>S??? T??i Kho???n</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??0123456789</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Chi Nh??nh</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??Bi??n H??a - ?????ng Nai</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>T??n Ng??n H??ng</strong></td>
                                                    <td><i class="fas fa-copy"></i> ??Agribank</td>
                                                </tr>
                                            </table>
                                            <div id="titlebank" style="margin-top: 20px; padding: 10px 158px; line-height: 1.5">
                                                <div class="row">
                                                    <p class="text-break" style="margin-bottom: 10px;"><strong><span style="color: red">L??u ??: </span>Vui l??ng ghi ????ng n???i dung chuy???n kho???n <span style="color: green">????NG N???I DUNG B??N TR??N.</span> 
                                                        N???u kh??ng s??? kh??ng th??? c???ng ti???n v??o t??i kho???n c???a b???n.</strong></p>
                                                        <p class="fst-italic" style="margin-bottom: 10px;">*Trong tr?????ng h???p ghi nh???m Username c???a ng?????i kh??c, Divine s??? kh??ng ch???u tr??ch nhi???m! </p>
                                                        <p class="text-break"><strong>N??n chuy???n <span style="color: rgb(21, 89, 148)">c??ng ng??n h??ng</span> 
                                                        ????? nh???n ???????c ti???n nhanh nh???t. N???u chuy???n kh??c ng??n h??ng b???n ch???n h??nh th???c <span style="color: rgb(21, 89, 148)">chuy???n ti???n nhanh 24/7.</span></strong></p>
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