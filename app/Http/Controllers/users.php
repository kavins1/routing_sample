<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class users extends Controller
{
    //
  public function index()
  {
      echo "code will be here";
    return user::all();
  }
}
