<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
        $admin = Admin::all();
        return response()
            ->json([
                'users'=>$admin
            ]);
    }
}
