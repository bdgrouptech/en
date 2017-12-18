<?php

namespace App\Http\Controllers;
use App\Publicreg;

use App\User;
use App\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //dd($userinfo);

        $id = Auth::user()->id;
        $user = User::find($id);
        //dd($user);
        $data = [
            'user' => $user,
        ];
        $userinfo = Userinfo::find($id);
//dd($userinfo);
        if($userinfo){
            return view('useradmin.admin');
        }
        else{
            return view('useradmin.index', $data);
        }





//             return view('useradmin.index',$userinfo);

    }
    public function userregister($data)
    {

        $reg = [
             'name' =>$data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ];
        dd($reg);
        return Publicreg::create($reg);

    }
}
