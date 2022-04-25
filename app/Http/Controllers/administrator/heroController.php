<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class heroController extends Controller
{

    public function index()
    {
        $hero = Hero::get()->first();
        return view('admin.hero.index',compact('hero'));
    }


    public function create()
    {
        return view('admin.hero.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'=>['max:6000','mimes:jpeg,png,jpg'],
            'question'=>['url'],
            'contactUs'=>['url'],
        ]);

        $file = $request->file('image');
        global $imageName;
        if (!empty($file)){
            $imageName = auth()->user()->name.time().".".$file->getClientOriginalExtension();
            $file->move('back/images',$imageName);
        }

        Hero::create([
            'year'=>$request->year,
            'contact_us'=>$request->contactUs,
            'description'=>$request->description,
            'question'=>$request->question,
            'image'=>$imageName,
        ]);

        $request->session()->flash('createHero','تنظیم قسمت hero با موفقیت انجام شد');

        return redirect()->route('hero.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit',compact('hero'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
