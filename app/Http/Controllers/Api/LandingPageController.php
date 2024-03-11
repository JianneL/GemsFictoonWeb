<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function landingPage(){
        return response()->json([
            'user'=>Auth::user(),
            'Books'=>Book::all()
        ]);
    }

    public function getUserProfile(Request $request){
        return response()->json([
            'id'=>$request->user()->id,
            'username'=>$request->user()->username,
            'email'=>$request->user()->username,
            'usertype'=>$request->user()->usertype,
            'biography'=>$request->user()->biography,
            'follower'=>$request->user()->follower,
            'following'=>$request->user()->following
        ]);
    }

    public function logout(Request $request)
    {
        $response = $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status'=>$response
        ]);

        
    }
}
