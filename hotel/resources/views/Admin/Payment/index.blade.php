@extends('layout.adminLayout')


@section('info')
<div class="css-1dbjc4n r-zftj5p">
    <div class="css-1dbjc4n" style="-webkit-align-items:stretch;align-items:stretch;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-ms-flex-align:stretch;-webkit-box-align:stretch;-webkit-box-orient:vertical;-webkit-box-direction:normal">
        <!------------------------------------------------------------------------------------------------>
        <div class="css-1dbjc4n r-150rngu r-ndvcnb r-13yce4e r-18u37iz r-16y2uox r-1wbh5a2 r-lltvgl r-buy8e9 r-1pn2ns4 r-2eszeu r-1sncvnh"
            style="border-bottom-color: rgb(242, 243, 243); border-top-color: rgb(242, 243, 243);">
            <div class="css-1dbjc4n r-18u37iz">
                <div class="css-1dbjc4n">
                    <!--flexThêm-->
                    <div class="css-1dbjc4n r-1awozwy r-18u37iz">
                        <div class="css-1dbjc4n r-1awozwy r-18u37iz" data-testid="quick-links" style="padding-left: 15px;">
                            <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15" style="width: 500px;">
                                <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                    style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                </div>
                                <input type="text" id="searchInput" placeholder="Tìm kiếm"
                                    class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                    data-testid="fullChangePassField" style="color: rgb(3, 18, 26);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="css-1dbjc4n r-1l7z4oj"></div>
        <!------------------cacthongtin----------------->
        <div class="css-1dbjc4n r-kzbkwu">
            <!--Khungthongtin-->
            <div class="css-1dbjc4n r-kdyh1x r-1yos0t3 r-1peese0 r-bztko3 r-184en5c" style="background-color: rgb(255, 255, 255);">
                <!--Flex khung -->
                <div class="css-1dbjc4n r-1guathk r-1yzf0co">
                    <div class="css-1dbjc4n">
                        <!------------------------>
                        <div class="css-1dbjc4n r-6gpygo r-1s3egr7" id="thngTinKhchTPhng">
                            <!--flex-->
                            <div class="css-1dbjc4n r-obd0qt r-13awgt0 r-18u37iz r-tzz3ar">
                                <table id="myTable">
                                    <tr class="header">
                                        <th style="width:20%;">MÃ HÓA ĐƠN</th>
                                        <th style="width:20%;">Mã ĐẶT PHÒNG</th>
                                        <th style="width:20%;">THỜI GIAN</th>
                                        <th style="width:20%;">TIỀN</th>
                                        <th style="width:20%;"></th>
                                    </tr>
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->id }}</td>
                                        <td>{{ $payment->B_ID }}</td>
                                        <td>{{ $payment->PaidDate }}</td>
                                        <td>{{ $payment->P_Amount }}</td>
                                        <td>
                                            <a href="{{ route('payment.show', ['payment'=>$payment->id]) }}">
                                                <button>Details</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>   
        </div>

        <div class="css-1dbjc4n r-6gpygo r-1s3egr7" id="thngTinKhchTPhng">
            <!--flex-->
            <div class="css-1dbjc4n r-obd0qt r-13awgt0 r-18u37iz r-tzz3ar">
                <!------------------Cho pagination vô đây nha--------------->
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('css/Admin/Employee/index.css') }}">

<script>
    $(document).ready(function() {
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                if ($(this).hasClass("header")) {
                    // Bỏ qua việc ẩn/hiện header
                    return true;
                }
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

@endsection