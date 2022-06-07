<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Member;
class AdminController extends Controller
{
    public function index()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('thongke');
        } else {
            return view('admin_login');
        }
    }
    public function makeAcc(Request $request){

    }
    public function dashboard(Request $request)
    {
        $data = $request->all();
        $login_id = $data['login_id'];
        $password = $data['password'];
        $login = Member::where('login_id', $login_id)->where('password', $password)->first();
        if ($login) {
            $login_count = $login->count();
            if ($login_count > 0) {
                // Session::put(['admin_name' => $login->admin_name]);
                Session::put(['id' => $login->id]);
                // return Redirect::to('/thongke');
                echo('abc');
            }
        } else {
            Session::put('message', "Làm ơn nhập lại");
            return Redirect::to('/admin');
        }
    }
}
