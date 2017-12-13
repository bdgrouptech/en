<?php

namespace App\Http\Controllers;
use App\Publicreg;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::user()->id;
        $user = User::find($id);
       //dd($user);
        $data=[
            'user'=>$user,
        ];
        return view('useradmin.index',$data);
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
