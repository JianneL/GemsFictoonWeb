<?php

namespace App\Http\Controllers;

use App\Enums\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $usertype = Auth::user()->usertype;

        if($usertype == UserType::ADMIN)
        {
            return view('Admin/LandingPage');
        }else if($usertype == UserType::WRITER)
        {
            return view('Author/LandingPage');
        }else{
            return view('Reader/LandingPage');
        }
    
    }
}
