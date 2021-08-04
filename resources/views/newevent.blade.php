@extends('layouts.app')

@section('content') 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="/public/ckeditor5-build-classic/ckeditor.js"></script>
<meta http-equiv="refresh" content="number">

@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/newevent" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4 class="text-center fs-2">Tạo Sản Phẩm</h4>
            <p class="text-muted text-center">
                Mỗi tài khoản chỉ tạo được <span style="color: red">1</span> tới <span style="color: red">3</span> sản phẩm trong ngày.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-13">
            <h1 class="offset">Thông tin sản phẩm</h1>
            <div class="nameevent">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="tensk" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên sản phẩm bạn cần tạo." style="width: 50%;" >
                </div>
                <div class="mb-3 search-box">
                    <label for="formGroupExampleInput" class="form-label">Chọn mã giảm giá</label>
                    <select class="form-select w-50" name="chude" aria-label="Default select example">
                        <option selected>Chọn mã giảm giá</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 search-box">
                    <label for="formGroupExampleInput" class="form-label">Chọn người thực hiện</label>
                    <select class="form-select w-50" name="nhatochuc" aria-label="Default select example">
                        <option selected>lựa chọn</option>
                        <option value="1">1</option>
                    </select>
                    <a href="/user/create-organizer" class="target=_blank" style=" margin-bottom: 10px;"><i class="fa fa-plus"></i> Thêm đơn vị tổ chức mới <i class="fa fa-info-circle" title="Sau khi tạo xong hãy refesh trang để hệ thống nhận ra dữ liệu mới"></i></a>
                </div>
                <div class="col-14 boxbox">
                    <p>Nội dung sản phẩm</p>
                    <textarea class="form-control" id="summary-ckeditor" name="noidungsk"></textarea>
                </div>
                <div class="putimg">
                    <label for="apply" class="nameimg"><input type="file" name="anh"  onchange="loadImg()" id="apply" accept="image/*,.pdf"><img id="previewImg" src="" width="500" height="240"></label>
                </div>
            </div>
        </div>
        
        <h1 class="offset" style="margin-top:100px;">Thời gian và địa điểm</h1>
            <div class="placeAndtimes">
                <div class="mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="p-3">
                                <label for="formGroupExampleInput" class="form-label">Chọn Địa Điểm</label>
                                <select class="form-select w-100" name="chude" aria-label="Default select example">
                                    <option selected>Chọn địa điểm</option>
                                    <option value="Đồng Nai">Đòng Nai</option>
                                    <option value="TP.HCM">TP.HCM</option>
                                    <option value="TP.Hà Nội">TP.Hà Nội</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3">
                                <label for="formGroupExampleInput" class="form-label">Địa chỉ diễn ra sự kiện</label>
                                <input type="text" class="form-control w-100" name="diachi" id="formGroupExampleInput">
                            </div>
                        </div>
                    </div>
                        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-5">
                                <div class="col">
                                    <div class="p-3">
                                        <label for="exampleInputEmail1"  class="form-label">Ngày bắt đầu</label>
                                        <input type="date" id="inputDate" name="ngaybatdau" class="form-control" aria-describedby="dateHelpInline">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <label for="exampleInputEmail1"  class="form-label">Ngày kết thúc</label>
                                        <input type="date" id="inputDate" name="ngayketthuc" class="form-control" aria-describedby="dateHelpInline">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <label for="exampleInputEmail1" class="form-label">Thời gian bắt đầu</label>
                                        <input type="time" id="inputTime" name="timestart" class="form-control" aria-describedby="timeHelpInline">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <label for="exampleInputEmail1" class="form-label">Thời gian kết thúc</label>
                                        <input type="time" id="inputTime" name="timeend" class="form-control" aria-describedby="timeHelpInline">
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
            <h1 class="offset" style="margin-top:20px;">Tạo vé</h1>
            <div class="col text-start">
                <button type="button" class="btn btn-success btnsuc2" style="font-size: 15px"><i class="fas fa-plus"></i> Thêm Vé</button>
            </div>
            <div class="col text-end">
                <input type="button" value="X" id="removeAdd">
            </div>
                <div id="createdTicket">
                    <div class="mb-4">
                        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-5">
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên vé</label>
                                    <input type="text" id="inputTicketName" name="tenve" class="form-control" aria-describedby="ticketlpInline">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                                    <input type="number" id="inputNumber" name="soluong" class="form-control" aria-describedby="numberHelpInline">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Giá vé (vnđ) </label>
                                    <input type="number" id="inputPrice" name="giave" class="form-control" aria-describedby="priceHelpInline">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Mua trước n ngày <a href="#" style="text-decoration: none" title="Bỏ trống nếu không thiết lập">[?]</a></label>
                                    <input type="number" id="inputDate" name="muatruocngay" class="form-control" aria-describedby="dateHelpInline">
                                </div>
                            </div>
                    </div>
                        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-5">
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Giá vé còn (vnđ) <a href="#" style="text-decoration: none" title="Bỏ trống nếu không thiết lập">[?]</a></label>
                                    <input type="number" id="inputPrice" name="giavecon" class="form-control" aria-describedby="priceHelpInline">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Mua từ n vé <a href="#" style="text-decoration: none" title="Bỏ trống nếu không thiết lập">[?]</a></label>
                                    <input type="number" id="inputBuy" name="muatunve" class="form-control" aria-describedby="buyHelpInline">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleInputEmail1" class="form-label">Giá vé còn (vnđ) <a href="#" style="text-decoration: none" title="Bỏ trống nếu không thiết lập">[?]</a></label>
                                    <input type="number" id="inputPrice" name="giavencon" class="form-control" aria-describedby="priceHelpInline">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="mota" placeholder="Leave a comment here" id="floatingTextarea2" style="width: 100%; height: 70px"></textarea>
                                <label for="floatingTextarea2">Mô tả vé</label>
                            </div>
                        </div>
                    </div>
                </div>
            <h1 class="offset" style="margin-top:20px;">Cài đặt SEO</h1>
                <div class="createdSEO">
                    <div class="mb-4">
                        <div class="col-14">
                            <div class="p-3">
                                <label for="formGroupExampleInput" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mặc định tạo ra tên từ.....">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style=" height: 70px"></textarea>
                                <label for="floatingTextarea2">Mô tả</label>
                            </div>
                        </div>
                        <div class="col-14">
                            <div class="p-3">
                                <label for="formGroupExampleInput" class="form-label">Từ khóa (các từ cách nhau bởi dấu phẩy ',' )</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" >
                            </div>
                        </div>
                        <div class="col checkbox">
                            <label><input type="checkbox" id="event-block_id" name="Event_b" data-name="div1" value="1"> Gửi vé vào Facebook Messenger  </label>
                        </div>
                        <div class="row hide" id="box-connect-messenger" style="display: none">
                            <div class="col-md-6">
                                <div class="col-12 form-group field-event-alias required">
                                    <label class="control-label" for="event-alias">Block ID (Xem <a href="https://sukien.net/blog/huong-dan-su-dung-gui-ve-qua-fchat-chatbot-messenger">hướng dẫn tại đây</a>)</label>
                                    <input type="text" class="form-control" name="Event[block_id]" value="" placeholder="Nhập Block ID kịch bản gửi vé trên Fchat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        </div>
        <div class="col text-center">
            <button type="submit" name="save" class="btn btn-success btnsuc" style="font-size: 30px"><i class="fas fa-plus"></i> Thêm Sản Phẩm</button>
            
        </div>
    </div>
</div>
</form>
<script>
    CKEDITOR.replace('editor');
</script>
    <script>
    $(document).ready(function(){
        $('.checkbox').on('change', function() {
            $('#box-connect-messenger').toggle();
        });
        
        $(".btnsuc2").click(function(e) {
            //Append new field
            e.preventDefault();
            var newField = $('#createdTicket').clone();
            newField.val("");
            $("#createdTicket").append(newField);
        });

        $('#removeAdd').click(function() {
    if ($('#createdTicket').find('#createdTicket').length > 1)
    {
        $("#createdTicket").remove();
    }
});
    });
    </script>
        <script>
        CKEDITOR.replace( 'summary-ckeditor' );
        </script>

<script>
    function loadImg(){
$('#previewImg').attr('src', URL.createObjectURL(event.target.files[0]));
}
</script>

@endsection