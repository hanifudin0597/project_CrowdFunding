<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
   public function admin(){
       return "Berhasil masuk admin";
   }
}
