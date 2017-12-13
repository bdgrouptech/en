<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactsubmit ()
    {
        $name=Input::get('name');
        $email=Input::get('email');
        $msg=Input::get('msg');
        $sent =  Mail::send('contactmail',
            array(
                'name' => $name,
                'email' => $email,
                'msg' => $msg
            ), function($message)
            {
                $message->to('bdgrouptech@gmail.com',Input::get('name'))->subject('Contact Message');
            });
        $notification = array(
            'message' => 'Thanks for contacting us!',
            'alert-type' => 'success'
        );

        return Redirect::to('contact')->with($notification);
    }
    public function contactsubmit02 ()
    {
        $name=Input::get('name');
        $email=Input::get('email');
        $phone=Input::get('phone');
        $nid=Input::get('nid');
        $msg=Input::get('msg');
        $sent =  Mail::send('contactmail02',
            array(
                'name' => $name,
                'email' => $email,
                'msg' => $msg,
                'msg' => $nid,
                'msg' => $phone,
            ), function($message)
            {
                $message->to('asdshamim007@gmail.com',Input::get('name'))->subject('Contact Message');
                $message->to(Input::get('email'),Input::get('name'))->subject('Contact Message');
            });
        $notification = array(
            'message' => 'Thanks for contacting us! check your mail for details',
            'alert-type' => 'success'
        );

        return Redirect::to('contact')->with($notification);
    }



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
