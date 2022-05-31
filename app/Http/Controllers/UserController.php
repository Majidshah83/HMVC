<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;
class UserController extends Controller
{
   public function create()
   {
   // create role
     $role = Role::create(['name' => 'admin']);
     $role = Role::create(['name' => 'editor']);
     $role = Role::create(['name' => 'Writer']);
     $role = Role::create(['name' => 'Reader']);
      return $role;

   // give permission

   $role = Role::findByName('Admin');
   $role->givePermissionTo('Edit articles');
   dd($role);
   $role = Role::findByName('Editor');
   $role->givePermissionTo('Edit articles');
   dd($role);
$role = Role::findByName('Writer');
   $role->givePermissionTo('Write articles');
   dd($role);
$role = Role::findByName('Reader');
   $role->givePermissionTo('Reader  articles');
   dd($role);
$role = Role::findByName('Admin');
   $role->givePermissionTo('Write articles');
   dd($role);
$role = Role::findByName('Admin');
   $role->givePermissionTo('Reader  articles');
   dd($role);

// Admin model
 $restult =auth()->user()->givePermissionTo('Write articles');
 $restult =auth()->user()->givePermissionTo('Edit articles');
 $restult =auth()->user()->givePermissionTo('Reader  articles');
dd($restult);

// Writer model
$restult =auth()->user()->givePermissionTo('Write articles');
dd($restult);

// Editor model
$restult =auth()->user()->givePermissionTo('Edit articles');
 dd($restult);

// Reader model
$restult =auth()->user()->givePermissionTo('Reader  articles');
 dd($restult);
   }
}