@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    body{
        background-color: rgb(234, 234, 234);
    }
    a {
    color: #337ab7;
    text-decoration: none;
    }
    p {
    margin: 0 0 10px;
    }
</style>
<form action="" >
<div class="container">
    <div class="form-group container event_new">
        
        <div class="row">
            <div class="col-md-3 pad-10">
                <a href="http://127.0.0.1:8000/newevent">
                    <div class="item first">
                        <i class="fa fa-plus-circle"></i>
                        <p class="add_event_text">Tạo sản phẩm</p>
                    </div>
                </a>
            </div>
            @foreach ($event as $evn )
                    <div class="col-md-3 pad-10">
                        <div class="item">
                                <div class="img_event">
                                <a href="events.inforevent/{id}">
                                    <img src="/img/{{ ($evn->anh) }}">
                                </a>
                                </div>
                                <div class="info_event">
                                    <div class="box_event">
                                        <div class="name_ev">
                                        <a href="/event/078b01a5">
                                            <p class="event_name">{{ $evn->tensk }}</p>
                                        </a>
                                        </div>
                                    </div>
                                    <p style="">
                                        <a href="{{ url('events.edit', $evn->id) }}" title="Chỉnh sửa" class="item_ev"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="edit/{{ $evn->ID }}" title="Danh sách đăng ký" class="item_ev"><i class="fa fa-server" aria-hidden="true"></i></a>
                                        <a href="/event/schedule?id=25" title="Lịch" class="item_ev"><i class="fa fa-calendar"></i> </a>
                                        <a href="/event/ticket?id=25" title="Loại vé" class="item_ev"><i class="fa fa-ticket"></i> </a>
                                        <a href="/event/setup?event_id=25" title="Cài đặt" class="item_ev"><i class="fa fa-cog"></i> </a>
                                    </p>
                                    <p style="display: flex;justify-content: center;">
                                        <a href="/checkin?event_id=25" title="Check in" class="btn btn-default" style="width: 94%;"><i class="fa fa-qrcode"></i> CHECK-IN</a>
                                    </p>
                                </div>
                        </div>
                    
            </div>
            @endforeach            
        </div>
    </div>

    </div>
</form>
@endsection
