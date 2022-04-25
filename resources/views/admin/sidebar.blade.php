
<div id="mySlidenav" class="slidenav">
    <p class="logo"><span>arya</span>Olya</p>
    <a href="{{route('indexPage')}}" class="icon-a"><span class="icon"><i class="fas fa-eye"></i></span>نمایش وب سایت</a>

    <a href="{{route('dashboard')}}" class="icon-a"
       @if(request()->is('dashboard'))
    style="color: #f1f1f1;
    background: #1b203d
"@endif>
        <span class="icon"><i class="fas fa-home"></i></span>داشبورد</a>
    @if(auth()->user()->role=='admin')
        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-magic"></i></span>سئو و بهینه سازی</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-ellipsis-h"></i></span>منوی بالای</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-laptop-house"></i></span>خانه</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-address-card"></i></span>درباره ما</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-book-open"></i></span>مقدمه</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-cogs"></i></span>خدمات</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-user-friends"></i></span>تیم</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-images"></i></span>نمونه کارها</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-comment-alt"></i></span>نظرات مشتریان</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-headset"></i></span>سوالات متداول</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-clipboard-list"></i></span>فوتر</a>

        <a href="{{route('users.index')}}" class="icon-a"  ><span class="icon"><i class="fas fa-users"></i></span>گاربران</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-comment"></i></span>نظرات</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-users"></i></span>پیام کاربران</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-blog"></i></span>بلاگ</a>
    @elseif(auth()->user()->role=='author')
        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-comment"></i></span>نظرات</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-users"></i></span>پیام کاربران</a>

        <a href="#" class="icon-a"><span class="icon"><i class="fas fa-blog"></i></span>بلاگ</a>
    @endif

</div>
