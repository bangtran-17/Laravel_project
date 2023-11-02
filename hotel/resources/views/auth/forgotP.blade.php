@extends('layout.authLayout')

@section('content')

<div class="container ">
    <form class="form mt-5 login m-auto" action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group mt-2">
            <label for="email" class="text-dark font-bold">Email:</label><br>
            <input type="email" name="email" id="email" class="form-control focus:shadow-outline">
            @error('email')
            <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn focus:border-white mt-6" value="Đăng Ký">
        </div>
    </form>

</div>
@endsection