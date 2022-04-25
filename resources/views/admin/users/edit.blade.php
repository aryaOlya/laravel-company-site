@extends('admin.index')

@section('content')
    <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-white mb-5 fw-bold">ویرایش کاربران</h3>
                    <form action="{{route('users.update',$user->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group mt-3">
                            <label class="text-white" for="">نام کاربری</label>
                            <input name="name" type="text" placeholder="نام کاربری " class="form-control mt-1" value="{{$user->name}}">
                            @error('name')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">نام</label>
                            <input name="firstName" type="text" placeholder="نام " class="form-control mt-1" value="{{$user->firstName}}">
                            @error('firstName')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">نام خانوادگی</label>
                            <input name="lastName" type="text" placeholder="نام خانوادگی " class="form-control mt-1" value="{{$user->lastName}}">
                            @error('lastName')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">ایمیل</label>
                            <input name="email" type="email" placeholder="ایمیل " class="form-control mt-1" value="{{$user->email}}">
                            @error('email')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">شماره تماس</label>
                            <input name="mobile" type="text" placeholder="شماره تماس " class="form-control mt-1" value="{{$user->mobile}}">
                            @error('mobile')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-3">
                            <label class="text-white" for="">سطح کاربری</label>
                            <select class="form-control" name="role" id="">
                                <option @if($user->role=='admin')
                                        selected
                                        @endif value="admin">مدیر</option>
                                <option @if($user->role=='author')
                                        selected
                                        @endif value="author">نویسنده</option>
                                <option @if($user->role=='user')
                                        selected
                                        @endif value="user">کاربر عادی</option>
                            </select>
                        </div>
                        <br />
                        <br />
                        <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ویرایش</button>
                        <a href="#" class="w-100 btn btn-success mt-3 border-0">صفحه ورود</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
