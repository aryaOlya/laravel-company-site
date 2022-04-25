<div class="top-header">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-9">
                <div class="row h-100">
                    <div class="col-lg-6 col-xl-5">
                        <div class="email-address h-100 d-flex align-items-center">
                            آدرس ایمیل :
                            <span>{{$topheader->email}}</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 mt-3 mt-md-0">
                        <div class="call h-100 d-flex align-items-center">
                            شماره تماس :
                            <span>{{$topheader->phone}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top-header-social">
                    <div class="row py-1">
                        <div class="col-lg-12">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li><a href="{{$topheader->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$topheader->facebook}}"><i class="fab fa-github"></i></a></li>
                                <li><a href="{{$topheader->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
