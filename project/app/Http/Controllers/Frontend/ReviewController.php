<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\helper;
use App\Models\review_info;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ReviewController extends Controller
{
    public function reviews()
    {

        $review_info=review_info::all(); 
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('frontend.reviews',compact('review_info'));
            }
            else{
                return view('admin.reviews',compact('review_info'));
            }
        }
        else{
            //return redirect()->back();
            return view('frontend.reviews',compact('review_info'));
        }

        
        
    }
    
    public function review_details($review_id)
    {
        $review_info=review_info::find($review_id);
        //$review_info=review_info::where(review_id=$review_id);

        //return view('frontend.review_details',compact('review_info'));
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('frontend.review_details',compact('review_info'));
            }
            else{
                return view('admin.review_details',compact('review_info'));
            }
        }
        else{
            //return redirect()->back();
            return view('frontend.review_details',compact('review_info'));
        }
    }

}