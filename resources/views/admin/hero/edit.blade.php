@extends('admin.index')

@section('content')
    <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-white mb-5 fw-bold">تغییر hero</h3>
                    <form action="{{route('hero.update',$hero->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <label class="text-white" for="">سال تاسیس</label>
                            <input name="year" type="number" placeholder="سال تاسیس " class="form-control mt-1" value="{{$hero->year}}">
                            @error('year')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">توضیحات</label>
                            <input name="description" type="text" placeholder="توضیحات " class="form-control mt-1" value="{{$hero->description}}" >
                            @error('description')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">لینک تماس با ما</label>
                            <input name="contactUs" type="text" placeholder="لینک تماس با ما " class="form-control mt-1" value="{{$hero->contact_us}}">
                            @error('contactUs')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">لینک سوالات متداول</label>
                            <input name="question" type="text" placeholder="لینک سوالات متداول " class="form-control mt-1" value="{{$hero->question}}">
                            @error('question')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />
                        <div class="form-group mt-1">
                            <label class="text-white" for="">عکس صفحه</label>
                            <input name="image" type="file" placeholder="عکس صفحه " class="form-control mt-1" >
                            <img src="{{asset('back/images/'.$hero->image)}}" width="60px" height="60px" >
                            @error('image')
                            <section class="alert alert-danger mt-1">{{$message}}</section>
                            @enderror
                        </div>

                        <br />

                        <br />
                        <button type="submit" class="btn btn-primary w-100 mt-3  border-0">ویرایش بخش hero</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
