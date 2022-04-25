<div class="head">
    <div class="col-div-6">
                <span class="nav">
                    <i class="fas fa-bars"></i>
                </span>
        <span class="nav2">
                    داشبورد
                </span>
    </div>
    <div class="col-div-6">
        <div class="prof-admin">
            <div class="profile">
                <p>سلام
                    {{auth()->user()->firstName}}
                    خوش آمدید,
                    <span>شما
                            {{auth()->user()->persianRole()}}
                        هستید.</span>
                </p>
            </div>
        </div>
    </div>
</div>
