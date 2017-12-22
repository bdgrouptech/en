<?php

namespace App\Http\Controllers;
use App\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @param Request $request
     */
    public function post_store(Request $request)
    {
        $data=$request->all();
        //dd($data);
        $filename = time().'file'.'.'.$request->uploadfile->getClientOriginalExtension();
        $thumbnail = time().'thumb'.'.'.$request->thumbnail->getClientOriginalExtension();
        $screenshort = time().'srceen'.'.'.$request->screenshort->getClientOriginalExtension();
        $filesize = $request->uploadfile->getClientSize();
        $thumbnaillocation='uploads/'.$filename;
        $sreenshortlocation='uploads/'.$thumbnail;
        $location='uploads/'.$screenshort;
        Image::make($request->uploadfile)->save($location);
        Image::make($request->thumbnail)->save($thumbnaillocation);
        Image::make($request->screenshort)->save($sreenshortlocation);
        $data['uploadfile'] = $filename;
        $data['thumbnail'] = $thumbnail;
        $data['screenshort'] = $screenshort;
        $data['active']=0;
//dd($data);
        Product::create($data);
//        $notification = array(
//            'stufmessage' => 'Thank you! Your Stuff Message has been Sent Successfully.',
//            'alert-type' => 'success'
//        );
//        return Redirect::to('addstuff')->with($notification);
        //return back();

        return view('useradmin.adpost');


    }


    public function ffghgf()
    {
        //
    }
    public function products()
    {
        return view('product');
    }
    public function adpost()
    {
        return view('useradmin.adpost');
    }








    public function productsdetails()
    {
        return view('productsdetails');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function singleblog()
    {
        return view('singleblog');
    }
    public function myaccount()
    {
        return view('myaccount');
    }
    public function email()
    {
        return view('email');
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
