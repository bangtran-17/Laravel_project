<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/0507d81bf9.js"></script>
    <link rel="stylesheet" href="QLNV.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Quản Lý Nhân Viên</title>
</head>

<body>
    <div id="__next" data-reactroot="">
        <!------------------------------------------------------- nav --------------------------------------------->
        <div class="css-1dbjc4n" style="height:10vh" id="navbar-offset"></div>
        <div class="css-1dbjc4n r-1xcajam r-ipm5af r-1uzo8ef r-13qz1uu r-1s3egr7">
            <div class="css-1dbjc4n r-1awozwy r-kdyh1x r-1yos0t3 r-1jgb5lz r-r0h9e2 r-bztko3 r-13qz1uu"
                style="background-color:rgba(255,246,234,1.00); height: 10vh;">
                <div class="css-1dbjc4n r-18u37iz r-1wtj0ep r-wech8c r-mrxtjd r-1guathk r-oyd9sg r-13qz1uu r-184en5c"
                    style="height: 10vh;">
                    <div class="css-1dbjc4n r-1awozwy r-18u37iz">
                        <a href="#" class="css-4rbku5">
                            <img importance="low" loading="lazy" src="{{ asset('img/Admin/Group_13041.png') }}" alt="Logo" decoding="async"
                                width="200" height="55" style="object-fit:fill;object-position:50% 50%">
                        </a>
                    </div>
                    <div class="css-1dbjc4n r-1awozwy r-18u37iz">
                        <div data-testid="user-nav-dropdown" style="cursor: pointer;">
                            <a href="#" class="css-1dbjc4n r-1awozwy r-1f0042m r-18u37iz r-5njf8e"
                                style="padding-right: 4px; padding-left: 4px;">
                                <img importance="low" loading="lazy"
                                    src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/8/8cec58721410d02b594f877b8abe9503.svg"
                                    decoding="async" width="14" height="14" class="r-sdzlij r-tuq35u"
                                    style="background-color: rgb(1, 148, 243); object-fit: fill; object-position: 50% 50%;">
                                <div dir="auto" class="css-901oao r-t1w4ow r-1b43r93 r-majxgm r-rjixqe r-fdjqy7" style="color: rgb(3, 18, 26); margin-right: 4px; margin-left: 4px;">Vũ Thanh Doan</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------------------------------------- content --------------------------------------------->
        <div class="css-1dbjc4n r-1ihkh82" style="height: 100vh;position: relative;">
            <div class="css-1dbjc4n r-1kihuf0 r-18u37iz r-16y2uox r-1wtj0ep r-15g7tld r-11c0sde r-nib5yn r-184en5c">
                <!-----------------------------sidebar-------------------------------->
                <div class="css-1dbjc4n r-cvk9hz">
                    <div class="css-1dbjc4n r-1l31rp8 r-kdyh1x r-1phboty r-rs99b7 r-1udh08x r-1yzf0co"
                        style="background-color:rgba(229,211,194,1.00)">
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="/admin" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                        id="editProfile">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 576 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-jwli3a r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">TRANG CHỦ</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="{{ route('guests.index') }}" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                    id="tvat-myacc-promo-info">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 640 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">QUẢN LÝ KHÁCH HÀNG</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="{{ route('employees.index') }}" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                    id="tvat-myacc-promo-info">
                                     {{-- style="background-color:rgba(1,148,243,1.00)" --}}
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 448 512" style="filter:brightness(0) invert(1);margin-right:8px">
                                                <path fill="#000000" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">QUẢN LÝ NHÂN VIÊN</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="#" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                        id="tvat-myacc-promo-info">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 384 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">QUẢN LÝ HÓA ĐƠN</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="#" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                        id="tvat-myacc-promo-info">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 576 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">QUẢN LÝ PHÒNG</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="#" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                        id="tvat-myacc-promo-info">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 448 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">QUẢN LÝ ĐẶT PHÒNG</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a href="{{ route('departments.index') }}" class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                        id="tvat-myacc-promo-info">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 448 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">QUẢN LÝ PHÒNG BAN</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="css-1dbjc4n r-qklmqi r-1phboty"
                                style="border-bottom-color:rgba(205,208,209,1.00);margin-right:16px;margin-left:16px;margin-top:8px;margin-bottom:8px">
                            </div>
                        </div>

                        <div class="css-1dbjc4n r-bnwqim">
                            <div tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-1i6wzkk r-lrvibr"
                                style="-webkit-transition-duration:0s;transition-duration:0s">
                                <a class="css-4rbku5">
                                    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1wtj0ep r-1guathk r-5njf8e"
                                        id="tvat-myacc-logout">
                                        <div class="css-1dbjc4n r-18u37iz">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512" style="filter:none;margin-right:8px">
                                                <path fill="#000000" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                                            </svg>
                                            <div dir="auto" class="css-901oao r-1h9nbw7 r-t1w4ow r-ubezar r-majxgm r-135wba7 r-fdjqy7">ĐĂNG XUẤT</div>
                                        </div>
                                        <div class="css-1dbjc4n"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!----------------------------------------------- info --------------------------------------------->
                @yield('info')
                <!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            </div>
            <div class="css-1dbjc4n" data-testid="StandarizedOTPFlow"></div>
        </div>
        <div class="css-1dbjc4n"></div>
    </div>
</body>