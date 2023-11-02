@extends('layout.authLayout')


@section('content')

<div class="container ">
<form class="form mt-5 login m-auto" action="{{ route('login') }}" method="post">
            @csrf
            <h3 class="text-dark">Bạn chưa có tài khoản ?, <a href="/register" class="text-blue-500">Đăng ký</a></h3>
            <div class="form-group mt-10">
                <label for="email" class="text-dark font-bold">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control focus:shadow-outline">
                @error('email')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group mt-10">
                <label for="password" class="text-dark font-bold">Password:</label><br>
                <input type="password" name="password" id="password" class="form-control focus:shadow-outline">
                @error('password')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark w-100 flex flex-row justify-between">
                    <div>
                    <input class="text-2xl mt-6" type="radio" name="radio" id="radio1"> <p class="tem">Nhớ tài khoản</p>
                    </div>
                    <a href="" class="forget pt-6 ">Quên mật khẩu</a>
                </label><br>
                
                
                <input type="submit" name="submit" class="btn focus:border-white mt-6" value="Đăng nhập">
            </div>
           
        </form>
    <script>
   $(document).ready(function() {
    $("input[type='radio']").on('click', function() {
        var $radio=$(this);
        // Check if the radio button is already selected
        if ($radio.data('waschecked')==true) {  
            // Deselect it
            $radio.prop('checked',false);
            $radio.data('waschecked',false);
        }
        else{
            $radio.prop('checked',true);
            $radio.data('waschecked',true);
        }
    });
});
</script>
</div>
@endsection