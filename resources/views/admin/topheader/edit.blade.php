@extends('admin.index')

@section('content')
    <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-white mb-5 fw-bold">ویرایش منوی بالای صفحه</h3>
                    <form action="{{route('topheader.update',$topheader->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group mt-3">
                            <label class="text-white" for="">ایمیل</label>
                            <input name="email" type="text" placeholder="ایمیل " class="form-control mt-1" value="{{$topheader->email}}">
                            @error('email')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">شماره تماس</label>
                            <input name="phone" type="text" placeholder="شماره تماس " class="form-control mt-1" value="{{$topheader->phone}}">
                            @error('firstName')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">اینستاگرام</label>
                            <input name="instagram" type="text" placeholder="اینستاگرام " class="form-control mt-1" value="{{$topheader->instagram}}">
                            @error('lastName')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">فیسبوک</label>
                            <input name="facebook" type="text" placeholder="فیسبوک " class="form-control mt-1" value="{{$topheader->facebook}}">
                            @error('email')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">توییتر</label>
                            <input name="twitter" type="text" placeholder="توییتر " class="form-control mt-1" value="{{$topheader->twitter}}">
                            @error('mobile')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />

                        <br />
                        <button type="submit" class="btn btn-primary w-100 mt-3  border-0">ویرایش</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
