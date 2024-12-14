<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\helper;
use App\Models\review_info;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('frontend.homepage');
            }
            else{
                return view('admin.home');
            }
        }
        else{
            //return redirect()->back();
            return view('frontend.homepage');
        }
        
    }

    public function search()
    {
        /*$review_info=review_info::all();
        $data = compact('review_info');
        return view('frontend.search')->with($data);*/
        
        $search_text = $_GET['query'];
        if($search_text!=""){
            $review_info = review_info::where('book_name','LIKE','%'.$search_text.'%')->get();

            return view('frontend.search',compact('review_info'));
        }
        else{
            return redirect()->back();
        }
        

    }
    

    
    
}
