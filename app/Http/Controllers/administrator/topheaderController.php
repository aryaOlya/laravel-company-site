<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class topheaderController extends Controller
{

    public function index()
    {
        $topheader = TopHeader::get()->first();
        //return $topheader;
        return view('admin.topheader.index',compact('topheader'));
    }


    public function create()
    {
        return redirect()->route('topheader.index');
    }


    public function store(Request $request)
    {
        return redirect()->route('topheader.index');
    }


    public function show($id)
    {
        return redirect()->route('topheader.index');
    }


    public function edit($id)
    {
        $topheader = TopHeader::findOrFail($id);
        return view('admin.topheader.edit',compact('topheader'));
    }


    public function update(Request $request, $id)
    {
        $topheader = TopHeader::findOrFail($id);

        $request->validate([
            'email'=>['email'],
            'phone'=>['min:6'],
            'instagram'=>['url'],
            'facebook'=>['url'],
            'twitter'=>['url'],
        ]);

        $topheader->update([
            'email'=>$request->email,
            'phone'=>$request->phone,
            'instagram'=>$request->instagram,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
        ]);

        $request->session()->flash('topheaderUpdate','ویرایش با موفقیت انجام شد');
        return redirect()->route('topheader.index');
    }


    public function destroy($id)
    {
        return redirect()->route('topheader.index');
    }
}
