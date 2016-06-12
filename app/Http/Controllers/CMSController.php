<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CMSController extends Controller
{
  public function editor(){
    return view('pages.editor');
  }
  public function save(Request $request){
    return $request->all();
  }
}
