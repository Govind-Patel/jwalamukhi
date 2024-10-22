<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;use session;use DB;
use Illuminate\Support\Collection;
class HomeController extends Controller
{
    public function dashboard(){
        $data=array('layout'=>'main');
        return view('dashboard', $data);
      }
      public function contact(){
        $data=array('layout'=>'main');
        return view('contact', $data);
      }
      public function about(){
        $data=array('layout'=>'main');
        return view('about', $data);
      }
      public function courses(){
        $data=array('layout'=>'main');
        return view('courses', $data);
      }
}
