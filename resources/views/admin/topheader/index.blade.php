@extends('admin.index')

@section('content')
    <div class="old-project">
        <h2 class="text-white">تنظیمات منوی بالای سایت</h2>
        <table>
            <tbody>
            <tr>
                <th>ایمیل</th>
                <th>شماره تماس</td>
                <th>اینستاگرام</td>
                <th>فیسبوک</td>
                <th>توییتر</td>
                <th>ویرایش</td>
            </tr>
            <tr>
                <td>{{$topheader->email}}</td>
                <td>a{{$topheader->phone}}</td>
                <td><a class="text-decoration-none" href="{{$topheader->instagram}}">{{$topheader->instagram}}</a></td>
                <td><a class="text-decoration-none" href="{{$topheader->facebook}}">{{$topheader->facebook}}</a></td>
                <td><a class="text-decoration-none" href="{{$topheader->twitter}}">{{$topheader->twitter}}</a></td>
                <td>
                    <a class="text-decoration-none" href="{{route('topheader.edit',$topheader->id)}}"><i class="text-warning fas fa-edit fa-2x"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
        <br /><br /><br /><br /><br /><br /><br /><br /><br />
        <div class="text-center" ><a href="{{route('topheader.create')}}" class="btn btn-primary">تغییر منوی بالای سایت</a></div>
    </div>

@endsection

@section('js')
    @if(Session::has('topheaderUpdate'))
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: "{{session('topheaderUpdate')}}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
