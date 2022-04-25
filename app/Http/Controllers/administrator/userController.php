<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{

    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index',compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        //return $user ;
        return view('admin.users.edit',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255',Rule::unique('users')->ignore($user->id)],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'mobile'=>['required','string','size:11',Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ]);

        $user->update([
            'name'=>$request->name,
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'role'=>$request->role,
        ]);
        $request->session()->flash('update','ویرایش با موفقیت انجام شد');
        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->destroy($id);
        session()->flash('delete','حذف کاربر با موفقیت انجام شد');
        return redirect()->route('user.index');
    }
}
