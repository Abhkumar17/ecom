<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }


    public function fetchData(Request $request)
    {
      
        $records = DB::table('demo')->get();
      $data = array(
        'status'=>'success',
        'records' => $records ,
      );
      return $data;
    }
}
