@extends('layout.authLayout')


@section('content')

<div class="container ">
<form class="form mt-5 login m-auto" action="{{ route('register') }}" method="post">
    @csrf
    <h3 class="text-dark">Bạn đã có tài khoản ?, <a href="/login" class="text-blue-500">Đăng nhập</a></h3>
    <div class="form-group mt-2">
        <label for="name" class="-dark font-bold">Tên tài khoản:</label><br>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
        @enderror
    </div>
    <div class="form-group mt-2">
        <label for="email" class="text-dark font-bold">Email:</label><br>
        <input type="email" name="email" id="email" class="form-control focus:shadow-outline">
        @error('email')
        <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
        @enderror
    </div>
    <div class="form-group mt-2">
        <label for="password" class="text-dark font-bold">Password:</label><br>
        <input type="password" name="password" id="password" class="form-control focus:shadow-outline">
        @error('password')
        <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
        @enderror
    </div>
    <div class="form-group mt-2">
        <label for="confirm-password" class="text-dark font-bold">Confirm Password:</label><br>
        <input type="password" name="password_confirmation" id="confirm-password" class="form-control">
        @error('password_confirmation')
        <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
        @enderror
    </div>
    <div class="form-group">    
        <input type="submit" name="submit" class="btn focus:border-white mt-6" value="Đăng Ký">
    </div>
</form>

</div>
@endsection