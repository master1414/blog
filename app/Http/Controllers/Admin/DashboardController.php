<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //В laraver пути к wiew указываются через точку
    public function dashboard()
    {
      return view('admin.dashboard');
    }
}
