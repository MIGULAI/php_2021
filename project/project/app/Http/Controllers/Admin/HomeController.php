<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\adress;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        //for small boxes
        $orders_count = DB::table('addresses')->get()->count();
        $ru_count = DB::table('users')->get()->count();
        $clients_count = DB::table('clients')->get()->count();
        $an_count = DB::table('model_has_roles') ->where('role_id','=' ,'2')->count();

        return view('admin.home.index',[
            //small boxes content
            'orders_count' => $orders_count,
            'ru_count' => $ru_count,
            'clients_count' => $clients_count,
            'an_count' => $an_count
        ]);
    }
}
