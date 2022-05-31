<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
class UserController extends Controller
{
   public function create()
   {
       $result=User::all();
       dd($result);
   }
}