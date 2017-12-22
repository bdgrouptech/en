<?php

namespace App\Http\Controllers;

use App\Admin;

//use App\Postad;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alluser = User::all();
//        $totalad = Postad::all()->count();
//        $freemem = User::where('role', 'Free')->count();
//        $premimum = User::where('role', 'Premium')->count();
//        $approvead = Postad::where('active', 1)->count();
//        $yearad = Postad::whereYear('created_at', date('Y'))->count();
//        $monthad = Postad::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
//        dd($monthad);

        $data = [
            'alluser' => $alluser,
//            'totalad' => $totalad,
//            'freemem' => $freemem,
//            'premimum' => $premimum,
//            'approvead' => $approvead,
//            'yearad' => $yearad,
        ];
        return view('Admin.admin',$data);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $password = "invitebd";
        $this->validate($request, [
            'name' => 'required|min:2|unique:admins',
            'email' => 'required|email|unique:admins',
        ]);
        //dd($data);
//        $data['password'] = $password;
        $data['password'] = Hash::make($password);
        Admin::create($data);
        Session::flash('message','Admin Successfully Added');
        return redirect()->back();
    }
    public function passstore(Request $request)
    {
        $data = $request->all();$sd = $request->id;
        $this->validate($request, [
            'pass' => 'required|min:6',
        ]);
        $user = Admin::find($sd);
        $data['password'] = Hash::make($request->get('pass'));
        $user->update($data);
        Session::flash('success', 'Password Changed');
        return redirect()->back();
    }
    public function allpost()
    {
        $allads = DB::table('postads')->where('active', 0)->orderBy('id', 'dsc')->paginate(5);
        $jobpost = DB::table('jobpost')->where('active', 0)->orderBy('id', 'dsc')->paginate(10);
        $data = [
            'jobpost'=>$jobpost,
            'allads' => $allads,
        ];
        return view('Admin.allpost',$data);
    }
    public function postreview($id, $title)
    {
        $singlead = Postad::find($id);
//        if($singlead->active==0){return redirect(url('/'));}
        $singleadpic = DB::table('postpics')->where('post_id',$id)->get();
        $userid = $singlead->user_id;
        $postfooter = DB::table('postads')->where('user_id',$userid)->take(4)->get();
//        dd($postfooter);
        $xyz = DB::table('postads')->where('user_id',$userid)->skip(6)->take(4)->get();
//        dd($xyz);
        $detail = User::find($userid);
        $currentURL = URL::current();
        $patha = [
            'singlead' => $singlead,
            'singleadpic' => $singleadpic,
            'detail' => $detail,
            'postfooter' => $postfooter,
            'xyz' => $xyz,
            'id'=>$id,
            'title'=>$title,
            'currentURL'=>$currentURL,
        ];
        return view('adpage',$patha );
    }
    public function job_postreview($id, $title)
    {
        $singlead = Jobpost::find($id);


//        $userid = $singlead->user_id;
//
//        $detail = User::find($userid);
//        $currentURL = URL::current();
        $patha = [
            'singlead' => $singlead,
//            'detail' => $detail,
            'id'=>$id,
            'title'=>$title,
//            'currentURL'=>$currentURL,
        ];
        return view('jobads',$patha );
    }
    public function approve($id)
    {
        $allads = Postad::where('id', $id)->update(array('active' => 1));
        Session::flash('message','Ad Successfully Approved.');
        return redirect()->back();
    }
    public function job_approve($id)
    {
        $allads = Jobpost::where('id', $id)->update(array('active' => 1));
        Session::flash('message','Ad Successfully Approved.');
        return redirect()->back();
    }
    public function approved()
    {
        $allads = Postad::where('active', 1)->orderBy('id', 'DESC')->paginate(25);
        $jobpost = Jobpost::where('active', 1)->orderBy('id', 'DESC')->paginate(25);
        $data = [
            'jobpost'=>$jobpost,
            'app' => $allads,
        ];
        return view('Admin.approved',$data);
    }
    public function disapproved()
    {
        $allads = Postad::where('active', 3)->paginate(10);
        $jobpost = Jobpost::where('active', 3)->paginate(10);
//        dd($allads);
        $data = [
            'app' => $allads,
            'job' =>$jobpost,

        ];
        return view('Admin.disapproved',$data);
    }
    public function disapprove($id)
    {
        $allads = Postad::where('id', $id)->update(array('active' => 3));
        Session::flash('message','Ad Successfully DisApproved.');
        return redirect()->back();
    }

    public function postdisapprove(Request $request)
    {

        $data = $request->all();
        $commentdata = Postad::find($request->post_id);
        $commentdata->update([
            'active' => 3,
            'comment_post'=>$request->comment_post,
        ]);
        return redirect()->back();

    }

    public function job_disapprove($id)
    {
        $allads = Jobpost::where('id', $id)->update(array('active' => 3));
        Session::flash('message','Ad Successfully DisApproved.');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $data = Postad::find($id);
        $data->delete();
        Session::flash('message','Ad Successfully Deleted.');
        return redirect()->back();
    }
    public function job_destroy($id)
    {
        $data = Jobpost::find($id);
        $data->delete();
        Session::flash('message','Ad Successfully Deleted.');
        return redirect()->back();
    }
    public function listt()
    {
        $alladmin = Admin::all();

        $data = [
            'alladmin' => $alladmin,
        ];
        return view('Admin.alladmin',$data);
    }
    public function userlistt()
    {
        $alluser = User::all();

        $data = [
            'alluser' => $alluser,
        ];
        return view('Admin.alluser',$data);
    }
    public function create()
    {
        return view('Admin.create_admin');
    }
    public function admindelete($id,$title)
    {
        $data = Admin::find($id);
        $data->delete();
        Session::flash('message', 'Admin Delete successfully!');
        return redirect()->back();
    }
    public function userdelete($id,$title)
    {
        $data = User::find($id);
        $data->delete();
        Session::flash('message', 'User Delete successfully!');
        return redirect()->back();
    }
    public function paymentview()
    {
        $list = DB::table('payments')->where('status',0)->orderBy('id','dsc')->get();
        $data = [
            'list'=>$list,
        ];
        return view('Admin.bikash',$data);
    }
    public function paymentconfirm($id)
    {

//        dd($id);
        $confirm = DB::table('payments')->where('post_id', $id)->update(array('status' => 1));
        $confirm2 = DB::table('postads')->where('id', $id)->update(array('topad' => 1,'toptime' => date('Y-m-d H:i:s')));
        return redirect()->route('admin.bikashpaied');
    }
    public function confirmpayment()
    {
        $yo = DB::table('postads')->where('topad',1)->orderBy('id','dsc')->get();
        $data = [
            'yo'=>$yo,
        ];
        return view('Admin.paidlist',$data);
    }
    public function unverified($id)
    {
        $confirm = DB::table('payments')->where('post_id', $id)->update(array('status' => 0));
        $confirm2 = DB::table('postads')->where('id', $id)->update(array('topad' => 0,'toptime' => date('Y-m-d H:i:s')));
        return redirect()->back();
    }
    public function password()
    {
        return view('Admin.pass');
    }
    public function post_complains()
    {
        $allads = DB::table('postads')->where('active', 7)->orderBy('id', 'dsc')->paginate(10);
        $jobpost = DB::table('jobpost')->where('active', 7)->orderBy('id', 'dsc')->paginate(10);
        $data = [
            'jobpost'=>$jobpost,
            'allads' => $allads,
        ];
//        dd($data);
        return view('Admin.post_complains',$data);
    }
    public function approvedsearch(Request $request)
    {
        $search = $request->search;
//       dd($search);
        $cat = Categories::all();
        $dis = District::all();
        $ad = DB::table('postads')->where('ptitle','like',"%$search%")->orderBy('id', 'dsc')->paginate(10);
        $data = [
            'cat' => $cat,
            'dis' => $dis,
            'ad' => $ad,
        ];

//        dd($ad);
        return view('Admin.appsersult',compact('ad'),$data);
    }
}
