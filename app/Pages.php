<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['title', 'body', 'description'];

  //  $pages = Pages::all()->where('section','about');
  // 
  // public function __construct(){
  //   $title =
  // }

}
