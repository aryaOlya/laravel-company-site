<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $topheader =TopHeader::get()->first() ;
        return view('client.index',compact('topheader'));
    }

}
