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
                                style="color: rgb(3, 18, 26); margin-bottom: 4px;">THÔNG TIN PHÒNG BAN</h3>
                        </div>
                    </div>
                </div>
                <!--Flex khung thông tin-->
                <form action="{{ route('departments.update', ['department' => $department->id]) }}" method="POST">
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
                            <!--Tên phòng ban -->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Tên phòng ban:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="text" name="DE_Name"
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $department->DE_Name }}">
                                </div>
                            </div>
                            <!--Mô tả-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Mô tả:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="text" name="DE_Description" 
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $department->DE_Description }}">
                                </div>
                            </div>
                            <!--InitialSalary-->
                            <div class="css-1dbjc4n r-6gpygo">
                                <div class="css-1dbjc4n r-18u37iz r-oyd9sg">
                                    <div dir="auto" class="css-901oao css-cens5h r-t1w4ow r-1b43r93 r-b88u0q r-rjixqe r-fdjqy7 r-13qz1uu"
                                        style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">Lương khởi điểm:</div>
                                </div>
                                <!--Khung điền-->
                                <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-edyy15">
                                    <div class="css-1dbjc4n r-14lw9ot r-1l31rp8 r-kdyh1x r-rs99b7 r-1p0dtai r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-1wyyakw"
                                        style="transition-delay: 0ms; transition-duration: 200ms; transition-property: width, height, border-color, border-width, background-color; transition-timing-function: ease; will-change: width, height, border-color, border-width, background-color;">
                                    </div>
                                    <input type="number" name="DE_InitialSalary"
                                        class="css-11aywtz r-13awgt0 r-t1w4ow r-ubezar r-135wba7 r-bcqeeo r-1ny4l3l r-10paoce r-13n6l4s"
                                        data-testid="fullChangePassField" style="color: rgb(3, 18, 26);"
                                        value="{{ $department->DE_InitialSalary }}">
                                </div>
                            </div>
    
                            <!--Lưu & Xóa-->
                            <div class="css-1dbjc4n r-13awgt0 r-18u37iz r-17s6mgv r-1wzrnnt">
                                <!--Lưu-->
                                <div aria-disabled="true" aria-live="polite" role="button"
                                    class="css-1dbjc4n r-kdyh1x r-88pszg r-10paoce r-1e081e0 r-5njf8e r-lrvibr"
                                    style="background-color: rgb(242, 243, 243);">
                                    <div dir="auto"
                                        class="css-901oao r-1yadl64 r-1vonz36 r-109y4c4 r-1cis278 r-1udh08x r-t60dpp r-u8s1d r-3s2u2q r-92ng3h">ádasd</div>
                                    <div class="css-1dbjc4n r-1awozwy r-13awgt0 r-18u37iz r-1777fci r-6dt33c"
                                        style="opacity: 1;">
                                        <button dir="auto" aria-hidden="true" type="submit"
                                            class="css-901oao css-bfa6kz r-nk2qpz r-t1w4ow r-cygvgh r-b88u0q r-1iukymi r-q4m81j"
                                            style="color: rgb(1, 148, 243);">Lưu</button>
                                    </div>
                                </div>
                </form>
                                <!--Xóa-->
                                <div aria-disabled="true" aria-live="polite" role="button"
                                    class="css-1dbjc4n r-kdyh1x r-10paoce r-1e081e0 r-5njf8e r-lrvibr"
                                    style="background-color: rgb(242, 243, 243);">
                                    <div dir="auto"
                                        class="css-901oao r-1yadl64 r-1vonz36 r-109y4c4 r-1cis278 r-1udh08x r-t60dpp r-u8s1d r-3s2u2q r-92ng3h">ádasdasd</div>
                                    <div class="css-1dbjc4n r-1awozwy r-13awgt0 r-18u37iz r-1777fci r-6dt33c"
                                        style="opacity: 1;">
                                        <form action="{{ route('departments.destroy', ['department' => $department->id]) }}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?');" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button dir="auto" aria-hidden="true" type="submit"
                                                class="css-901oao css-bfa6kz r-nk2qpz r-t1w4ow r-cygvgh r-b88u0q r-1iukymi r-q4m81j"
                                                style="color: rgb(255, 0, 0);">XÓA
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>   
        </div>
</div>

<link rel="stylesheet" href="{{ asset('css/Admin/Employee/show.css') }}">
@endsection
