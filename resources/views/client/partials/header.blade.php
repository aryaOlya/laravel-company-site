<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-lg">

            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>


            <ul class="navbar-nav">
                <div class="close-menu">
                    <i class="fas fa-times"></i>
                </div>
                <li class="nav-item">
                    <a class="nav-link active" href="#">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">خدمات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">پروژه ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">بلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>

            </ul>


            <div class="logo">
                <a href="">arya olya</a>
            </div>
        </div>
    </nav>

    <div class="overlay-menu"></div>
</header>

@guest
    <div class="p-1 bg-secondary text-center">
        <a class="btn btn-primary" href="{{route('register')}}">ثبت نام</a>
            &nbsp &nbsp
            &nbsp &nbsp
        <a href="{{route('login')}}" class="btn btn-primary" >ورود</a>
    </div>
@else
    <div class="p-1 bg-secondary text-center">
            <a class="btn btn-primary" href="{{route('dashboard')}}">پروفایل</a>
                &nbsp &nbsp
                &nbsp &nbsp
        <form style="display: inline-block" action="{{route('logout')}}" method="post" >
            @csrf
            <input type="submit" class="btn btn-primary" value="خروج">
        </form>
    </div>
@endguest
