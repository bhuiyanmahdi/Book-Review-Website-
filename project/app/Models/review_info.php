<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class review_info extends Model
{
    use HasFactory;
    /*
    protected $table = 'review_infos';
    protected $fillable = [
        'review_id',
        'book_name',
        'book_author',
        'book_publisher',
        'book_image',
        'review_details'
    ];
    */
    //public $review_id;
   // public $timestamps = false;
   public $table = 'review_infos';
   public $primaryKey = 'review_id';
   public $timestamps = false;

}
