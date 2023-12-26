<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="icon" href="{{ asset('/favicon.png') }}" />
    <link rel="stylesheet" href="{{url('css/DatPhong/global.css')}}" />
    <link rel="stylesheet" href="{{url('css/DatPhong/DatPhong.css')}}" />
    <link rel="stylesheet" href="{{url('css/DatPhong/style.css')}}">
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
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap"
    />
  </head>
  <body>
    <canvas id="canvas2"></canvas>
    <div class="t-phng2">
      <div class="frame">
        <div class="header-logged-in"></div>
        <img
          class="ch-logo-vng-12"
          alt=""
          src="{{asset('img/Booking/DatPhong/ch-logo-vng-1@2x.png')}}"
        />

        <img
          class="logo-ko-ch-k-nn-1"
          alt=""
          src="{{asset('img/Booking/DatPhong/logo-ko-ch-k-n-1@2x.png')}}"
        />

        <button class="profiletab">
          <img
            class="profiletab-child"
            alt=""
            src="{{asset('img/Booking/DatPhong/ellipse-1@2x.png')}}"
          />

          <div class="xin-cho-hong">Xin chào, Hoàng Gia Lộc</div>
          <div class="qun-l-trng">Quản lý trưởng</div>
          <img class="plant-icon" alt="" src="{{asset('img/Booking/DatPhong/plant@2x.png')}}" />
        </button>
      </div>
      <div class="t-phng-inner">
        <div class="text-field-parent">
          <div class="text-field">
            <div class="text-field1">
              <div class="state-layer">
                <div class="content">
                  <div class="input-text">
                    <input
                      class="input-text1"
                      value="{{$BookingInfo['CheckinDate']}}"
                      type="date"
                    />
                  </div>
                  <div class="label-text">
                    <div class="label-text1">Check In</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-field">
            <div class="text-field1">
              <div class="state-layer">
                <div class="content">
                  <div class="input-text">
                    <input
                      class="input-text1"
                      value="{{$BookingInfo['CheckoutDate']}}"
                      type="date"
                    />
                  </div>
                  <div class="label-text">
                    <div class="label-text1">Check Out</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="button">
            <div class="style-layer">
              <img class="search-icon" alt="" src="{{asset('img/Booking/DatPhong/search@2x.png')}}" />
            </div>
          </button>
        </div>
      </div>
      @foreach ($roomTypes as $roomtype)
      <div class="frame-parent">
        <div class="hin-th-10-phng-wrapper">
          <div class="hin-th-10-container">
            <span>Hiển thị </span>
            <span class="phng1">10 phòng</span>
          </div>
        </div>
        <div class="frame-wrapper1">
          <div class="rectangle-parent2">
            <img class="frame-inner" alt="" src="{{asset('img/Booking/DatPhong/rectangle-3@2x.png')}}" />

            <button class="xem-thm-wrapper" data-modal="true" data-gallery="Grand" aria-label="Open Grand image gallery">
              <div class="xem-thm1">Xem thêm </div>
            </button>
            {{-- <script type="module">
              import initGallery from "{{asset('js/DatPhong/galleryApp.js')}}";
              initGallery('{{asset('data/galleries.json')}}', {
                speed: 600,
              })
            </script> --}}
              <script type="module">
               import initGallery from "{{ asset('js/DatPhong/galleryApp.js') }}";

// Assuming 'galleries.json' is in the 'public/data/' directory
const jsonFilePath = "{{ asset('img/Booking/data/galleries.json') }}";

initGallery(jsonFilePath, {
    speed: 600,
});
              </script>


            <div class="frame-group">
              <div class="frame-parent1">
                <div class="grand-atlantis-suite-parent">
                  <b class="grand-atlantis-suite">{{ $roomtype->RT_NAME }}</b>
                  <div class="frame-parent2">
                    <div class="edit-fill-parent">
                      <img
                        class="edit-fill-icon"
                        alt=""
                        src="{{asset('img/Booking/DatPhong/edit-fill@2x.png')}}"
                      />

                      <div class="ni-mi-yu">
                        {{ $roomtype->RT_DES }}
                      </div>
                    </div>
                    <div class="frame-parent3">
                      <div class="eye-fill-parent">
                        <img
                          class="edit-fill-icon"
                          alt=""
                          src="{{asset('img/Booking/DatPhong/eye-fill@2x.png')}}"
                        />

                        <div class="tm-nhn-tuyt">
                          Tầm nhìn tuyệt vời về đảo và Biển Ả Rập.
                        </div>
                      </div>
                      <div class="home-fill-parent">
                        <img
                          class="edit-fill-icon"
                          alt=""
                          src="{{asset('img/Booking/DatPhong/home-fill@2x.png')}}"
                        />

                        <div class="tm-nhn-tuyt">{{ $roomtype->R_Area }} m2</div>
                      </div>
                    </div>
                    <div class="user-fill-parent">
                      <img
                        class="edit-fill-icon"
                        alt=""
                        src="{{asset('img/Booking/DatPhong/user-fill2@2x.png')}}"
                      />

                      <div class="ngi-ln">
                        4 người lớn + 2 trẻ em dưới 14 tuổi, hoặc 5 người lớn,
                        hoặc 5 người lớn + 1 trẻ em dưới 14 tuổi.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ch-vi-parent">
                  <div class="ch-vi">Chỉ với</div>
                  <b class="vn-m">{{ $roomtype->RT_Cost }} VNĐ/ đêm</b>
                </div>
              </div>
              <div class="frame-child1"></div>
              <button class="button-wrapper">
                <div class="button1">
                    <form action="{{ route('booking.send', ['id' => $roomtype->id]) }}" method="POST">
                  <div class="style-layer1">
                        @csrf
                        @method('POST')
                    <input style="" type="submit" value="Xem thêm">
                  </div>
                  </form>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <script src="{{url('js/script.js')}}"></script>
  </body>
</html>
