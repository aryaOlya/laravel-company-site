@extends('admin.index')

@section('content')
    <div class="old-project">
        <h2 class="text-white">کاربران</h2>
        <table>
            <tbody>
            <tr>
                <th>نام کاربری</th>
                <th>نام</td>
                <th>نام خانوادگی</td>
                <th>ایمیل</td>
                <th>شماره تماس</td>
                <th>نقش کاربر</td>
                <th>تاریخ عضویت</td>
                <th>تاریخ آخرین ویرایش</td>
                <th>ویرایش</td>
                <th>حذف</td>
            </tr>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->lastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>{{$user->persianRole()}}</td>
                    <td>{{verta($user->created_at)->format('Y/m/d')}}</td>
                    <td>{{verta($user->updated_at)->format('Y/m/d')}}</td>
                    <td>
                        <a href="{{route('users.edit',$user->id)}}" class="text-warning text-decoration-none" ><i class="fas fa-edit fa-2x"></i></a>
                    </td>
                    <td>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-transparent border-0" type="submit"  >
                                <i class="text-danger fas fa-trash fa-2x"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                هیچ کاربری یافت نشد!
            @endforelse
            </tbody>
        </table>
        <div>
            {{$users->links()}}
        </div>
    </div>

@endsection

@section('js')
    @if(Session::has('update'))
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: "{{session('update')}}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if(Session::has('delete'))
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: "{{session('delete')}}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
