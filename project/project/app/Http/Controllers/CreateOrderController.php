<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){
            return view('create_order');
        }
        else{
            return view('auth/login');
        }
    }



    public function make_date(){
        $inputs = request()->all();
        $user_id = Auth::id();
        $fname = request()->get('fname');
        $sname = request()->get('sname');
        $fnamber = request()->get('fnamber');
        $email = request()->get('email');
        $la = request()->get('la');
        $unla = request()->get('unla');

        $now = Carbon::now();

        $order = 'will add later';

        $checker = DB::table('clients')
            ->where('user_id' , $user_id)
            ->first();
        if (empty($checker)){
            DB::insert('insert into clients(
                user_id , Name ,Surname ,Email ,Phone ,created_at,updated_at) value (? , ? , ? ,? ,? ,?,?) ' ,
                [$user_id, $fname ,$sname ,$email , $fnamber , $now ,$now]);
            $this->make_date();
        }
        else{
            DB::insert('insert into orders(user_id ,created_at,updated_at ) value (? ,? ,?)' , [ $checker->id ,  $now ,$now]);
            $order_id = DB::table('orders')
                ->where('user_id' , $checker->id)
                ->where('order', null)
                ->first();
            DB::insert('INSERT INTO `addresses`
                (`user_id`, `order_id`, `Loading address`, `Unloading address`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?);',
                [$checker->id ,$order_id->id, $la ,$unla ,$now ,$now]);
        }

        //DB::insert('insert into addresses(user_id ,Loading address , Unloading address) value (? , ? , ?)', [$user_id , $la]);

        return(view('about'));
    }

    /**
     * private function check_clients_table($fname , $sername , $email){
        $res = DB::select('select * from clients where Name = :name and Email = :email', [':name' => $fname , ':email' => $email]);
        if($res != null){
            return true;
        }
        return false;
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
