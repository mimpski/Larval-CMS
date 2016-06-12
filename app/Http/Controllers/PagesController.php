<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    protected $pages;

    public function homepage(){
      $pages = Pages::all()->where('section','homepage')->first()->toArray();;
      return view('pages.content', compact('pages'));
    }

    public function about(){
      $pages = Pages::all()->where('section','about')->first()->toArray();
    //  dd($pages);
       return view('pages.content', compact('pages'));
    }

    public function contact(){
      $pages = Pages::all()->where('section','contact')->first()->toArray();;
      return view('pages.content', compact('pages'));
    }
}
