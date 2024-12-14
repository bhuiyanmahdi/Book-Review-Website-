<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\helper;
use App\Models\review_info;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class WriteReviewController extends Controller
{
    //

    public function write_reviews()
    {
        return view('frontend.write_reviews');
    }

    public function delete_review($review_id)
    {
        $review_info=review_info::find($review_id);
        $review_info->delete();
        return redirect('reviews');

    }


public function store(Request $request)
{

        /*
        $request->validate([
            'book_name'=> 'required',
            'book_author'=> 'required',
            'book_publisher'=> 'nullable',
            'book_image'=> 'nullable',
            'review_details'=> 'required'
        ]);
        */
        

        $review_info = new review_info();
        
        $review_info->book_name=$request->input('name');
        $review_info->book_author=$request->input('author');
        $review_info->book_publisher=$request->input('publisher');
        
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/project',$filename);
            $review_info->book_image = $filename;
        }
        else{
            return $request;
            $review_info->book_image = '';
        }
        
        $review_info->review_details=$request->input('review');
        $review_info->review_writer_name=Auth::user()->name;
        $review_info->review_writer_email=Auth::user()->email;
        $review_info->save();
        //return view('frontend.write_reviews');
        return redirect()->back();
    }


}
