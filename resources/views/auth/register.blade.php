@extends('client.layouts.master')
@section('content')
    @include('client.partials.top-header')
    @include('client.partials.header')
    <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center mb-5 fw-bold">ثبت نام کنید</h3>
                    <form action="{{route('register.store')}}" method="post">
                        @csrf
                        <input name="firstName" type="text" placeholder="نام " class="form-control mt-3">
                        @error('firstName')
                        <section class="alert alert-danger mt-1">{{$message}}</section>
                        @enderror
                        <input name="lastName" type="text" placeholder="نام خانوادگی" class="form-control mt-3">
                        @error('lastName')
                        <section class="alert alert-danger mt-1">{{$message}}</section>
                        @enderror
                        <input name="name" type="text" placeholder="نام کاربری" class="form-control mt-3">
                            @error('name')
                               <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        <input name="mobile" type="text" placeholder="شماره موبایل" class="form-control mt-3">
                            @error('mobile')
                               <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        <input name="email" type="text" placeholder="ایمیل" class="form-control mt-3">
                            @error('email')
                               <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        <input name="password" type="password" placeholder="رمز عبور" class="form-control mt-3">
                            @error('password')
                               <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        <input name="password_confirmation" type="password" placeholder="تکرار رمز عبور" class="form-control mt-3">
                        <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ثبت نام</button>
                        <a href="#" class="w-100 btn btn-success mt-3 border-0">صفحه ورود</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('client.partials.footer')
@endsection
