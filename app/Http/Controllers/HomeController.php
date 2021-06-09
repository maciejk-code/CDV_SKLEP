<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $user = Auth::user();
        return view('adminLte.dashboard', ['user' => $user]);
    }

    public function index3(){
        $products = DB::table('shirts')->where('type', '=', 'ck')->get();


        return view('adminLte.list', ['products' => $products]);
    }

    public function admin_panel(){
//        return view('adminLte.admin_panel');
        return json_encode(['admin_panel']);
    }
}
