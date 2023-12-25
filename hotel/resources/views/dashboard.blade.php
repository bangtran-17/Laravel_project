
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{url('css/Index/global.css')}}" />
    <link rel="stylesheet" href="{{url('css/Index/index.css')}}" />
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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <style>
      @font-face {
        font-family: "Palatino Linotype";
        src: url("palatinolinotype_roman.ttf");
        font-weight: 400;
      }
      @font-face {
        font-family: "Palatino Linotype";
        src: url("palatinolinotype_bold.ttf");
        font-weight: 700;
      }
    </style>
  </head>
  <body>
    <div class="" style="width: 100%; padding: 0px 192px">
    <div class="landing-page" data-animate-on-scroll>
      

      <button class="rectangle-parent">
        <div class="group-child"></div>
        <b class="ng-k" ><a href="/register" class="text-blue-500">Đăng ký</a></b>
      </button>
      <button class="rectangle-group">
        <div class="group-child"></div>
        <b class="ng-nhp" ><a href="/login" class="text-blue-500">Đăng nhập</a></b>
      </button>
      <div class="nav-bar-trch-parent">
         
        
        <div class="trang-ch-parent">
          <div class="trang-ch">TRANG CHỦ</div>
        </div>
        <div
          class="v-khch-sn-parent"
          data-scroll-to="groupContainer"
          id="groupContainer"
        >
          <div class="trang-ch"> <a href="#v-khch-sn-group"> VỀ KHÁCH SẠN </a></div>
          
          
        </div>
        <div class="t-phng-parent">
          <div class="trang-ch"> <a href="#la-chn-ca-chng-ti-parent"> ĐẶT PHÒNG</a></div>
        </div>
        <div class="c-s-vt-cht-parent">
          <div class="trang-ch"><a href="#dch-v-ca-khch-sn-parent"> DỊCH VỤ</a></div>
        </div>
        <div class="nh-gi-parent">
          <div class="trang-ch"><a href="#phn-hi-t-khch-hng-parent"> ĐÁNH GIÁ</a></div>
        </div>
        <div class="lien-he-parent">
          <div class="trang-ch"> <a href="#ch-logo-vng-1-group"> LIÊN HỆ </a>
          </div>
        </div>
      </div>

       <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/public/image-23@2x.png')}}" alt="Hotel 1" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/public/Hotel-2.png')}}" alt="Hotel 2" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/public/Hotel-3.png')}}" alt="Hotel 3" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/public/Hotel-4.png')}}" alt="Hotel 4" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>  

      <div class="ch-logo-vng-1-parent">
        <img class="ch-logo-vng-1" alt="" src="{{asset('img/public/ch-logo-vng-1@2x.png')}}" />

        <img
          class="logo-ko-ch-k-n-1"
          alt=""
          src="{{asset('img/public/logo-ko-ch-k-n-1@2x.png')}}"
        />
      </div>
      <div class="landing-page-child"></div>
      <img class="vector-icon" alt="" src="{{asset('img/public/vector.svg')}}" />

      <p class="nm-kn-gia">
        Nằm kín giữa những dòng nước biển màu xanh dịu dàng của Vịnh Ả Rập và bề
        dày vĩ đại của bức tranh chân dung tại Dubai, Atlantis. Equivalent là
        ngôi vương của đảo Palm nổi tiếng trên khắp thế giới tại Dubai. Cho dù
        bạn đang ở trong khu nghỉ nổi tiếng trên toàn cầu của chúng tôi, thưởng
        thức bữa ăn tại một trong những nhà hàng của các đầu bếp nổi tiếng hoặc
        tận hưởng sự hồi hộp tại Công viên nước Aquaventure, hãy trải nghiệm một
        thế giới xa xôi hơn so với cuộc sống hàng ngày tại Equivalent.
      </p>
      <div class="ni-cuc-sng">Nơi cuộc sống tốt đẹp bị thời gian lãng quên</div>
      <div id="v-khch-sn-group">
        <div id="v-khch-sn1">VỀ KHÁCH SẠN</div>
        <img class="group-inner" alt="" src="{{asset('img/public/group-13013.svg')}}" />
      </div>
      <button class="xem-thm-parent">
        <b class="xem-thm"><a href="/gioithieu">Xem thêm</a></b>
        <img class="north-icon" alt="" src="{{asset('img/public/north.svg')}}" />
      </button>
      <div class="image-116-parent">
        <img class="image-116-icon" alt="" src="{{asset('img/public/image-116@2x.png')}}" />

        <img class="image-115-icon" alt="" src="{{asset('img/public/image-115@2x.png')}}" />
      </div>
      <div class="rectangle-container">
        <div class="rectangle-div"></div>
        <img class="group-icon" alt="" src="{{asset('img/public/group-12999.svg')}}" />

        <button class="group-button">
          <div class="group-child1"></div>
          <div class="t-phng-group">
            <div class="t-phng1"><a href="/booking" style="color:black;">ĐẶT PHÒNG</a></div>
            <img
              class="appointment-icon"
              alt=""
              src="{{asset('img/public/appointment@2x.png')}}"
            />
          </div>
        </button>
        <div class="export-fill-parent">
          <img class="export-fill-icon" alt="" src="{{asset('img/public/export-fill.svg')}}" />

          <div class="ngy-tr-phng-parent">
            <div class="ngy-tr-phng">Ngày trả phòng</div>
            <input class="june" placeholder="22/07/2023" type="date" />
          </div>
        </div>
        <div class="group-parent">
          <div class="s-lng-khch-parent">
            <div class="s-lng-khch">Số lượng khách</div>
            <input class="june" placeholder="03" type="number" min="1" />
          </div>
          <img class="user-fill-icon" alt="" src="{{asset('img/public/user-fill.svg')}}" />
        </div>
        <div class="group-container">
          <div class="ngy-nhn-phng-parent">
            <div class="ngy-nhn-phng">Ngày nhận phòng</div>
            <input class="june" placeholder="12/07/2023" type="date" />
          </div>
          <img
            class="export-fill-icon1"
            alt=""
            src="{{asset('img/public/export-fill1.svg')}}"
          />
        </div>
      </div>
      <div id="dch-v-ca-khch-sn-parent">
        <div class="dch-v-ca">DỊCH VỤ CỦA KHÁCH SẠN</div>
        <img class="group-child2" alt="" src="{{asset('img/public/group-130131.svg')}}" />
      </div>
      <img class="mask-1-icon" alt="" src="{{asset('img/public/mask-1@2x.png')}}" />

      <img class="landing-page-item" alt="" src="{{asset('img/public/vector-4.svg')}}" />

      <div class="ba-n">Bữa ăn & Nhà hàng</div>
      <div class="landing-page-inner"></div>
      <div class="spa">Spa</div>
      <div class="khu-ngh-dng">Khu nghỉ dưỡng & Bể bơi</div>
      <div class="casino">Casino</div>
      <div class="khu-vui-chi">Khu vui chơi</div>
      <img class="landing-page-child1" alt="" src="{{asset('img/public/vector-3.svg')}}" />

      <img class="image-125-icon" alt="" src="{{asset('img/public/image-125@2x.png')}}" />

      <img class="image-123-icon" alt="" src="{{asset('img/public/image-123@2x.png')}}" />

      <img class="image-124-icon" alt="" src="{{asset('img/public/image-124@2x.png')}}" />

      <div class="landing-page-child2"></div>
      <div id="la-chn-ca-chng-ti-parent">
        <div class="dch-v-ca">LỰA CHỌN CỦA CHÚNG TÔI</div>
        <img class="group-child3" alt="" src="{{asset('img/public/group-130131.svg')}}" />
      </div>
      <div class="cn-phng-tt">Căn phòng tốt nhất là dành cho bạn!</div>
      <div class="line-div"></div>
      <div class="landing-page-child3"></div>
      <button class="khm-ph-parent">
        <b class="xem-thm"><a href="/suite">Khám phá</a></b>
        <img class="north-icon" alt="" src="{{asset('img/public/north.svg')}}" />
      </button>
      <button class="khm-ph-group">
        <b class="xem-thm"><a href="/suite">Khám phá</a></b>
        <img class="north-icon" alt="" src="{{asset('img/public/north.svg')}}" />
      </button>
      <button class="khm-ph-container">
        <b class="xem-thm"><a href="/suite">Khám phá</a></b>
        <img class="north-icon" alt="" src="{{asset('img/public/north.svg')}}" />
      </button>
      <button class="frame-button">
        <b class="xem-thm"><a href="/suite">Khám phá</a></b>
        <img class="north-icon" alt="" src="{{asset('img/public/north.svg')}}" />
      </button>
      <div class="group-div">
        <div class="group-wrapper">
          <div class="image-126-parent">
            <img
              class="image-126-icon"
              alt=""
              src="{{asset('img/public/image-126@2x.png')}}"
            />

            <div class="vn-10000000m-wrapper">
              <div class="vn-10000000m">VNĐ 10.000.000/đêm</div>
            </div>
            <b class="signature-suites">Signature Suites</b>
          </div>
        </div>
      </div>
      <div class="landing-page-inner1">
        <div class="image-126-group">
          <div class="image-126-group">
            <img
              class="image-126-icon"
              alt=""
              src="{{asset('img/public/image-1261@2x.png')}}"
            />

            <div class="vn-10000000m-wrapper">
              <div class="vn-10000000m">VNĐ 6.000.000/đêm</div>
            </div>
          </div>
          <b class="imperial-club-rooms">Imperial Club Rooms</b>
        </div>
      </div>
      <div class="group-parent2">
        <div class="image-126-group">
          <img class="image-126-icon" alt="" src="{{asset('img/public/image-120@2x.png')}}" />

          <div class="m-wrapper">
            <div class="vn-10000000m">$4.000.000/đêm</div>
          </div>
        </div>
        <b class="imperial-club-rooms">Guest Rooms</b>
      </div>
      <div class="group-parent3">
        <div class="image-126-group">
          <div class="image-126-group">
            <img
              class="image-126-icon"
              alt=""
              src="{{asset('img/public/image-1201@2x.png')}}"
            />
          </div>
          <b class="suites">Suites</b>
        </div>
        <div class="frame-wrapper">
          <div class="vn-8000000m-wrapper">
            <div class="vn-10000000m">VNĐ 8.000.000/đêm</div>
          </div>
        </div>
      </div>
      <div class="group-parent3">
        <div class="image-126-group">
          <div class="image-126-group">
            <img
              class="image-126-icon"
              alt=""
              src="{{asset('img/public/image-1201@2x.png')}}"
            />
          </div>
          <b class="suites">Suites</b>
        </div>
        <div class="frame-wrapper">
          <div class="vn-8000000m-wrapper">
            <div class="vn-10000000m">VNĐ 8.000.000/đêm</div>
          </div>
        </div>
      </div>
      <div class="line-parent">
        <div class="group-child4"></div>
        <div class="signature-suites-wrapper">
          <div class="signature-suites1">Signature Suites</div>
        </div>
      </div>
      <div class="line-group">
        <div class="group-child5"></div>
        <div class="imperial-club-rooms-wrapper">
          <div class="signature-suites1">Imperial Club Rooms</div>
        </div>
      </div>
      <div class="group-parent7">
        <div class="guest-rooms-wrapper">
          <div class="signature-suites1">Guest Rooms</div>
        </div>
        <img class="group-child6" alt="" src="{{asset('img/public/group-13038.svg')}}" />
      </div>
      <div class="line-container">
        <div class="group-child7"></div>
        <div class="suites-wrapper">
          <div class="signature-suites1">Suites</div>
        </div>
      </div>
      <div class="nu-bn-ang">
        Nếu bạn đang kỷ niệm một dịp đặc biệt hoặc tìm kiếm một kỳ nghỉ lãng mạn
        tuyệt vời, hãy đặt một trong những căn hộ sang trọng đặc biệt của chúng
        tôi để có một kỳ nghỉ độc đáo một lần trong đời.
      </div>
      <div class="nu-bn-mun">
        Nếu bạn muốn thêm chút xa hoa, hãy lưu trú tại các phòng khách của chúng
        tôi và tận hưởng quyền truy cập tới Imperial Club Lounge cùng với những
        lợi ích cao cấp trong suốt thời gian lưu trú tại khu resort.
      </div>
      <div class="phng-rng-ri">
        Phòng rộng rãi được thiết kế với nguồn cảm hứng từ biển cả này là nơi lý
        tưởng để trở về sau một ngày tràn đầy trải nghiệm đặc biệt tại khu
        resort.
      </div>
      <div class="cc-cn-h">
        Các căn hộ xa hoa của chúng tôi rất lý tưởng cho những người tìm kiếm sự
        thoải mái với các khu vực sống rộng lớn và ban công, cũng như sự xa hoa
        với dịch vụ đón sân bay miễn phí và đối xử đặc biệt dành riêng cho VIP.
      </div>
      <div class="vector-wrapper">
        <img class="vector-icon1" alt="" src="{{asset('img/public/vector1.svg')}}" />
      </div>
      <div id="phn-hi-t-khch-hng-parent">
        <div class="dch-v-ca">PHẢN HỒI TỪ KHÁCH HÀNG</div>
        <img class="group-child3" alt="" src="{{asset('img/public/group-130131.svg')}}" />
      </div>
      <div class="div">
        <div class="child"></div>
        <img class="icon" alt="" src="{{asset('img/public/1.svg')}}" />

        <i class="t-lc-nhn"
          >Từ lúc nhận phòng đến lúc trả phòng mình đều nhận được sự quan tâm
          của tất cả các bạn nhân viên. Dubai mưa ngập đường, không book được
          xe, các bạn còn đề nghị đèo mình đến điểm hẹn của mình. Thật sự làm
          mình có cái nhìn thiện cảm về khách sạn nhiều lắm. Cảm ơn rất nhiều vì
          tâm thế làm việc: "sự hài lòng của khách hàng là trên hết"! Mình đánh
          giá rất cao thái độ và trách nhiệm, mong khách sạn đón được nhiều
          khách và ngày càng hoạt động tốt hơn.</i
        >
        <div class="frame-div">
          <img class="frame-child" alt="" src="{{asset('img/public/rectangle-11@2x.png')}}" />

          <div class="jesicca-wrapper">
            <div class="jesicca">Jesicca</div>
          </div>
        </div>
      </div>
      <div class="div1">
        <div class="child"></div>
        <img class="icon" alt="" src="{{asset('img/public/1.svg')}}" />

        <i class="chng-ti-s"
          >Chúng tôi sẽ không bao giờ quên khách sạn này, và chúng tôi sẽ quay
          lại rất sớm. Chúng tôi xin cảm ơn tất cả các nhân viên. Vì tất cả họ
          đều tuyệt vời. Các món ăn, jazuczi và vị trí là tuyệt vời. Bạn sẽ
          không thất vọng với khách sạn này.</i
        >
        <div class="rectangle-parent1">
          <img class="frame-child" alt="" src="{{asset('img/public/rectangle-11@2x.png')}}" />

          <div class="jesicca-wrapper">
            <div class="jesicca">Jesicca</div>
          </div>
        </div>
      </div>
      <div class="rating-parent">
        <div class="rating">
          <div class="rating-child"></div>
          <img class="rating-item" alt="" src="{{asset('img/public/star-1.svg')}}" />
        </div>
        <div class="div2">4.9</div>
      </div>
      <div class="rating-group">
        <div class="rating">
          <div class="rating-child"></div>
          <img class="rating-item" alt="" src="{{asset('img/public/star-1.svg')}}" />
        </div>
        <div class="div2">4.8</div>
      </div>
      <div class="rating-container">
        <div class="rating">
          <div class="rating-child"></div>
          <img class="rating-item" alt="" src="{{asset('img/public/star-1.svg')}}" />
        </div>
        <div class="div2">4.6</div>
      </div>
      <div class="rating-parent1">
        <div class="rating">
          <div class="rating-child"></div>
          <img class="rating-item" alt="" src="{{asset('img/public/star-1.svg')}}" />
        </div>
        <div class="div2">4.5</div>
      </div>
      <div class="landing-page-child4"></div>
      <img class="line-icon" alt="" src="{{asset('img/public/chevron-right.svg')}}" />

      <div id="ch-logo-vng-1-group">
        <img class="ch-logo-vng-1" alt="" src="{{asset('img/public/ch-logo-vng-1@2x.png')}}" />

        <img
          class="logo-ko-ch-k-n-1"
          alt=""
          src="{{asset('img/public/logo-ko-ch-k-n-1@2x.png')}}"
        />
      </div>
      <div class="vector-container">
        <img class="vector-icon1" alt="" src="{{asset('img/public/vector2.svg')}}" />
      </div>
      <div class="dch-v-parent">
        <div class="dch-v">Dịch vụ</div>
        <div class="phng-ba-n-container">
          <p class="phng">PHÒNG</p>
          <p class="phng">BỮA ĂN & NHÀ HÀNG</p>
          <p class="phng">KHU NGHỈ DƯỠNG & BỂ BƠI</p>
          <p class="phng">CASINO</p>
          <p class="phng">SPA</p>
          <p class="khu-vui-chi1">KHU VUI CHƠI</p>
        </div>
      </div>
      <div class="theo-di-chng-ti-parent">
        <div class="theo-di-chng">Theo dõi chúng tôi</div>
        <div class="social">
          <a class="phone-black" href="tel:0867634707">
            <img class="phone-icon" alt="" src="{{asset('img/public/phone-black.svg')}}" />
          </a>
          <a
            class="phone-black"
            href="https://www.facebook.com/atlantisthepalm/"
            target="_blank"
          >
            <img class="phone-icon" alt="" src="{{asset('img/public/facebook-black.svg')}}" />
          </a>
          <a
            class="phone-black"
            href="https://www.youtube.com/@DetailsinLuxury"
            target="_blank"
          >
            <img class="phone-icon" alt="" src="{{asset('img/public/youtube-black.svg')}}" />
          </a>
          <a
            class="phone-black"
            href="https://www.instagram.com/atlantisthepalm/"
            target="_blank"
          >
            <img class="phone-icon" alt="" src="{{asset('img/public/instagram.svg')}}" />
          </a>
        </div>
      </div>
      <iframe
        class="group-iframe"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28897.241525045443!2d55.099553688683386!3d25.130443621326457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f153e3609c979%3A0x5945a418a804ac5!2sAtlantis%2C%20The%20Palm!5e0!3m2!1sen!2s!4v1699455083305!5m2!1sen!2s"
      >
      </iframe>
      <video class="wrapper" autoplay muted loop controls>
        <source
          src="{{asset('img/public/atlantis_hotel at the palm dubai _ an in depth look inside.mp4')}}"
        />
      </video>
      <img
        class="iconsdocumentsversion-2"
        alt=""
        src="{{asset('img/public/iconsdocumentsversion2@2x.png')}}"
      />

      <img class="background-icon" alt="" src="{{asset('img/public/background.svg')}}" />
    </div>
    </div>
    <script>
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='groupContainer']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start" });
          }
        });
      }
      
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0.15,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>







