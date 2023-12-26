@extends('layout.adminLayout')


@section('info')
<div class="css-1dbjc4n r-zftj5p">
    <div class="css-1dbjc4n" style="-webkit-align-items:stretch;align-items:stretch;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-ms-flex-align:stretch;-webkit-box-align:stretch;-webkit-box-orient:vertical;-webkit-box-direction:normal">
        <!------------------------------------------------------------------------------------------------>
        
        <!------------------cacthongtin----------------->
        <div class="css-1dbjc4n r-kzbkwu">
            <!--Khungthongtin-->
            <div class="css-1dbjc4n r-kdyh1x r-1yos0t3 r-1peese0 r-bztko3 r-184en5c" style="background-color: rgb(255, 246, 234);">
                <!--ThongTinCaNhan-->
                <div class="css-1dbjc4n r-1awozwy r-qklmqi r-1l31rp8 r-1phboty r-18u37iz r-1wtj0ep r-1guathk r-1yzf0co">
                    <div class="css-1dbjc4n r-18u37iz">
                        <div class="css-1dbjc4n r-1777fci"
                            style="flex-direction: column; -webkit-box-orient: vertical; -webkit-box-direction: normal; padding-left: 250px;">
                            <h3 aria-level="3" dir="auto" role="heading"
                                class="css-4rbku5 css-901oao r-t1w4ow r-ubezar r-b88u0q r-rjixqe r-fdjqy7"
                                style="color: rgb(3, 18, 26); margin-bottom: 4px;">THÔNG TIN CÁ NHÂN</h3>
                        </div>
                    </div>
                </div>
                <!--Flex khung thông tin-->
                <form action="{{ route('payment.update', ['payment' => $payment->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="css-1dbjc4n r-1guathk r-1yzf0co">
                        <div class="css-1dbjc4n">
                            <!--Mã nhân viên-->
                            {{-- <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Mã nhân viên:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="text"
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);">
                                </div>
                            </div> --}}
                            <!--Trạng thái-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Trạng thái:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="text" name="G_FirstName" readonly
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $payment->P_Status }}">
                                </div>
                            </div>
                            <!--Phương thức thanh toán-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Phương thức thanh toán:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="tel" name="P_Type" readonly
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $payment->P_Type }}">
                                </div>
                            </div>
                            <!--Thời gian thanh toán-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Thời gian thanh toán:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="email" name="PaidDate" readonly
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $payment->PaidDate }}">
                                </div>
                            </div>
                            <!--Số tiền-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Số tiền:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="text" name="P_Amount" readonly
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $payment->P_Amount }}">
                                </div>
                            </div>
                            <!--Mã đặt phòng-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Mã đặt phòng:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="text" name="B_ID" readonly
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $payment->B_ID }}">
                                </div>
                            </div>
    
                            <!--Lưu & Xóa-->
                            <div class="css-1dbjc4n r-13awgt0 r-18u37iz r-17s6mgv r-1wzrnnt">
                                
                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>   
        </div>
</div>

<link rel="stylesheet" href="{{ asset('css/Admin/Employee/show.css') }}">
@endsection
