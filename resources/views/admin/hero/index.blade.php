@extends('admin.index')

@section('content')
    <div class="old-project">
        <h2 class="text-white">تنظیم قسمت hero</h2>
        <table>
            <tbody>
            <tr>
                <th>سال شروع</th>
                <th>لینک ارتباط با ما</th>
                <th>لینک سوالات متداول</th>
                <th>توضیحات</th>
                <th>عکس</th>
                <th>ویرایش</th>

            </tr>
            <tr>
                <td>{{$hero->year}}</td>
                <td><a class="text-decoration-none" href="{{$hero->contact_us}}">{{$hero->contact_us}}</a></td>
                <td><a class="text-decoration-none" href="{{$hero->question}}">{{$hero->question}}</a></td>
                <td>{{$hero->description}}</td>
                <td>
                    <img src="{{asset('back/images/'.$hero->image)}}" width="50px" height="50px" >
                </td>
                <td>
                    <a class="text-decoration-none" href="{{route('hero.edit',$hero->id)}}"><i class="text-warning fas fa-edit fa-2x"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
        <br /><br /><br /><br /><br /><br /><br /><br /><br />

    </div>

@endsection

@section('js')
    @if(Session::has('createHero'))
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: "{{session('createHero')}}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
