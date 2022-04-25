@extends('client.layouts.master')
@section('content')
    @include('client.partials.top-header')
    @include('client.partials.header')

        <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @forelse($errors->all() as $error)
                        <p class="text-center text-danger">{{$error}}</p>
                    @empty
                        <p></p>
                    @endforelse
                    <h3 class="text-center mb-5 fw-bold">ورود به حساب کاربری</h3>
                    <form action="{{route('login.store')}}" method="post">
                        @csrf
                        <input name="email" type="text" placeholder="ایمیل یا شماره تماس" class="form-control mt-3">
                            @error('email')
                               <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        <input name="password" type="password" placeholder="رمز عبور" class="form-control mt-3">
                            @error('password')
                               <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        <section class="mb-2">
                            <label for="">
                                <input type="checkbox" name="remember">
                                مرا بخاطر بسپار
                            </label>
                        </section>
                        <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ورود</button>
                        <a href="{{route('register')}}" class="w-100 btn btn-success mt-3 border-0">صفحه ثبت نام</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('client.partials.footer')
@endsection
