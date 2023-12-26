<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="icon" href="public/favicon.ico" />
    <link rel="stylesheet" href="{{ url('css/payment/global.css') }}" />
    <link rel="stylesheet" href="{{ url('css/payment/ThanhToanB1.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Be Vietnam Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pattaya:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Palatino Linotype:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Be Vietnam:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair Display:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril Fatface:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" />
</head>

<body>
    <canvas id="canvas2"></canvas>
    <div class="thanh-ton-b1-xong-kanh">
        <div class="frame">
            <div class="frame1">
                <div class="navigation-header">
                    <div class="navigation-header-child"></div>
                    <div class="navigation-header-item"></div>
                    <div class="ch-logo-vng-1-container">
                        <img class="ch-logo-vng-12" alt=""
                            src="{{ asset('img/payment/ch-logo-vng-1@2x.png') }}" />

                        <img class="logo-ko-ch-k-n-12" alt=""
                            src="{{ asset('img/payment/logo-ko-ch-k-n-1@2x.png') }}" />
                    </div>
                </div>
            </div>
            <div class="frame2">
                <div class="stepper">
                    <img class="stepper-child" alt="" src="{{ asset('img/payment/vector-14@2x.png') }}" />

                    <div class="item1">
                        <div class="item-child"></div>
                        <div class="item-item"></div>
                        <div class="div6">1</div>
                    </div>
                    <div class="item2">
                        <div class="item-inner"></div>
                        <div class="ellipse-div"></div>
                        <div class="div7">2</div>
                    </div>
                    <div class="item3">
                        <div class="item-inner"></div>
                        <div class="ellipse-div"></div>
                        <div class="div7">3</div>
                    </div>
                </div>
            </div>
        </div>
        <form action="/payment-method" method="POST">
            @csrf
            @method('POST')
            <div class="frame3">
                <div class="title">
                    <div class="frame4">
                        <div class="khch-hng-vui">
                            Khách hàng vui lòng điền đầy đủ thông tin
                        </div>
                    </div>
                    <div class="thng-tin-t">THÔNG TIN ĐẶT PHÒNG</div>
                </div>
                <div class="frame5">
                    <div class="frame6">
                        <div class="frame7">
                            <div class="item4">
                                <div class="vn-trn-1-container">
                                    <span class="vn">{{$roomTypes->RT_Cost}} VNĐ</span>
                                    <span class="trn"> trên </span>
                                    <span class="vn">1 đêm</span>
                                </div>
                                <div class="phng-swimsuite-parent">
                                    <div class="phng-swimsuite">{{$roomTypes->RT_NAME}}</div>
                                    <div class="frame8">
                                        <div class="signature-suites2">Signature Suites</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame9">

                            <div class="frame10">

                                <div class="frame11">
                                    <div class="input2">
                                        <div class="h">Tên</div>
                                        <input class="input-child" placeholder="Gia Lộc" type="text"
                                            name="G_Name" />
                                    </div>
                                    <div class="input3">
                                        <div class="h">Email</div>
                                        <input class="input-child" placeholder="lochoanggia@gmail.com" type="email"
                                            name="G_Email" />
                                    </div>
                                    <div class="input4">
                                        <div class="h">Số điện thoại</div>
                                        <input class="input-child" placeholder="0867533693" type="tel"
                                            name="G_SDT" />

                                    </div>
                                    <div class="input7">
                                        <div class="h">Ngày Check-in</div>
                                        <input class="input-child" placeholder="12/12/2023" type="date"
                                            name="check_in_date" value="{{$BookingInfo['CheckinDate']}}"/>
                                    </div>
                                    <div class="input8">
                                        <div class="h">Ngày Check-out</div>
                                        <input class="input-child" placeholder="13/12/2023" type="date"
                                            name="check_out_date" value="{{$BookingInfo['CheckoutDate']}}"/>
                                    </div>
                                </div>

                                <img class="frame-inner" alt=""
                                    src="{{ asset('img/payment/vector-13@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame12">
                    <div class="frame13">
                        <button class="btn-secondary">
                            <div class="bg"></div>
                            <div class="cancel">Hủy</div>
                        </button>
                    </div>
                    <div class="frame14">
                        <button class="btn-secondary" id="btnPrimary" type="submit">
                            <div class="bg1"></div>
                            <div class="continue-to-book">Tiếp tục</div>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <script>
            var btnPrimary = document.getElementById("btnPrimary");
            if (btnPrimary) {
                btnPrimary.addEventListener("click", function(e) {
                    window.location.href = "/payment-method";
                });
            }
        </script>
        <script src="script.js"></script>
</body>

</html>
