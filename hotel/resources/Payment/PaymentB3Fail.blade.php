<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="icon" href="public/favicon.ico" />
    <link rel="stylesheet" href="{{url('css/payment/global.css')}}" />
    <link rel="stylesheet" href="{{url('css/payment/ThanhToanThatBaiB3.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Be Vietnam Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Pattaya:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Palatino Linotype:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Be Vietnam:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap"
    />
  </head>
  <body>
    <canvas id="canvas2"></canvas>
    <div class="thanh-toan-that-bai-b3">
      <div class="frame">
        <div class="frame1">
          <div class="navigation-header">
            <div class="navigation-header-child"></div>
            <div class="frame2">
              <div class="ch-logo-vng-1-container">
                <img
                  class="ch-logo-vng-12"
                  alt=""
                  src="{{asset('img/payment/ch-logo-vng-1@2x.png')}}"
                />

                <img
                  class="logo-ko-ch-k-n-12"
                  alt=""
                  src="{{asset('img/payment/logo-ko-ch-k-n-1@2x.png')}}"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="qu-khch-vui">
          Quý khách vui lòng thực hiện các bước thanh toán lại!
        </div>
      </div>
      <div class="frame3">
        <div class="frame4">
          <div class="stepper">
            <img class="stepper-child" alt="" src="{{asset('img/payment/vector-14@2x.png')}}" />

            <div class="icons">
              <img class="icons1" alt="" src="{{asset('img/payment/icons@2x.png')}}" />
            </div>
            <img class="item-icon" alt="" src="{{asset('img/payment/item@2x.png')}}" />

            <img class="item-icon1" alt="" src="{{asset('img/payment/item@2x.png')}}" />
          </div>
          <div class="t-phng-khng">Đặt phòng không thành công!</div>
        </div>
        <div class="frame5">
          <button class="btn-primary" id="btnPrimary">
            <div class="bg"></div>
            <div class="back-to-home">Trở về</div>
          </button>
          <img class="group-1-1" alt="" src="{{asset('img/payment/group-1-1@2x.png')}}" />
        </div>
      </div>
    </div>

    <script>
      var btnPrimary = document.getElementById("btnPrimary");
      if (btnPrimary) {
        btnPrimary.addEventListener("click", function (e) {
         
        });
      }
      </script>
      <script src="{{url('js/script.js')}}"></script>
  </body>
</html>
