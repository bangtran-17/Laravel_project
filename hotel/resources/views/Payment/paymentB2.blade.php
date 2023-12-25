<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="icon" href="public/favicon.ico" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./ThanhToanB2.css" />
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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap"
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
    <div class="thanh-ton-b2-xong-kanh">
      <div class="frame15">
        <div class="frame16">
          <div class="navigation-header1">
            <div class="navigation-header-inner"></div>
          </div>
          <div class="ch-logo-vng-1-parent1">
            <img
              class="ch-logo-vng-13"
              alt=""
              src="./public/ch-logo-vng-1@2x.png"
            />

            <img
              class="logo-ko-ch-k-n-13"
              alt=""
              src="./public/logo-ko-ch-k-n-1@2x.png"
            />
          </div>
        </div>
        <div class="frame17">
          <div class="stepper1">
            <img class="stepper-item" alt="" src="./public/vector-14@2x.png" />

            <img class="item-icon" alt="" src="./public/item@2x.png" />

            <div class="item5">
              <div class="item-child3"></div>
              <div class="item-child4"></div>
              <div class="div9">2</div>
            </div>
            <div class="item6">
              <div class="item-child5"></div>
              <div class="item-child6"></div>
              <div class="div10">3</div>
            </div>
          </div>
        </div>
      </div>
      <div class="frame18">
        <div class="title1">
          <div class="khch-hng-vui1">
            Khách hàng vui lòng thanh toán theo số tiền bên dưới !
          </div>
          <div class="thanh-ton">Thanh toán</div>
        </div>
        <div class="frame19">
          <div class="frame20">
            <div class="thng-tin-chuyn">Thông tin chuyển khoản:</div>
            <div class="thu-8">
              <span>Thuế:</span>
              <span class="span"> 8%</span>
            </div>
            <div class="tin-t-phng-container">
              <span>Tiền đặt phòng:</span>
              <span class="span"> 400.000 VNĐ</span>
            </div>
            <div class="tng-cng-1000000-container">
              <span>Tổng cộng:</span>
              <span class="span"> 1.000.000 VNĐ</span>
            </div>
            <img class="frame-child1" alt="" src="./public/vector-13@2x.png" />

            <img
              class="image-128-icon"
              alt=""
              src="./public/image-128@2x.png"
            />

            <img
              class="image-129-icon"
              alt=""
              src="./public/image-129@2x.png"
            />

            <div class="item7">
              <div class="vn-trn-1-container1">
                <span class="span">800.000 VNĐ</span>
                <span class="trn1"> trên </span>
                <span class="span">1 đêm</span>
              </div>
              <div class="phng-swimsuite-group">
                <div class="phng-swimsuite1">Phòng SwimSuite</div>
                <div class="signature-suites3">Signature Suites</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="frame21">
        <button class="btn-secondary1" id="btnSecondary">
          <div class="bg2"></div>
          <div class="cancel1">Quay lại</div>
        </button>
        <button class="btn-primary1" id="btnPrimary">
          <div class="bg3"></div>
          <div class="continue-to-book1">Tiếp tục</div>
        </button>
      </div>
    </div>

    <script>
      var btnSecondary = document.getElementById("btnSecondary");
      if (btnSecondary) {
        btnSecondary.addEventListener("click", function (e) {
          window.location.href = "/payment-info";
        });
      }
      
      var btnPrimary = document.getElementById("btnPrimary");
      if (btnPrimary) {
        btnPrimary.addEventListener("click", function (e) {
          window.location.href = "/payment-success";
        });
      }
      </script>
      <script src="script.js"></script>
  </body>
</html>
