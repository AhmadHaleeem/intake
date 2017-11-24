<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Evaluations;
use App\Ontwerps;
use App\Inhouds;
use App\Technieks;
use App\Hostings;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $users = User::all();
        return view('admin.layouts.user', compact('users'));
    }




    public function login()
    {
        $users = User::all();
        return view('admin.layouts.user', compact('users'));
    }

    public function evalu()
    {
        $evaluations = Evaluations::all();
        return view('admin.layouts.bedrijf', compact('evaluations'));
    }

    public function ontwer()
    {
        $ontwerps = Ontwerps::all();
        return view('admin.layouts.ontwerps', compact('ontwerps'));
    }

    public function inhoud()
    {
        $inhouds = Inhouds::all();
        return view('admin.layouts.inhoud', compact('inhouds'));
    }

    public function techniek()
    {
        $technieks = Technieks::all();
        return view('admin.layouts.techniek', compact('technieks'));
    }

    public function hosting()
    {
        $hostings = Hostings::all();
        return view('admin.layouts.hosting', compact('hostings'));
    }

    public function deny()
    {
        return view('admin.layouts.deny');
    }

    public function destroy() {
        auth()->logout();
        return redirect('/login');
    }

//    public function create() {
//        return view('admin.layouts.login');
//    }
//
//    public function store() {
//        if (!auth()->attempt(request(['email', 'password']))) {
//            return back()->withErrors([
//                'Message' => 'Your Email or Password is Not Correct'
//            ]);
//        }
//            return redirect('/home');
//
//
//    }








//    public function addRole(Request $request)
//{
//    $user = User::where('id', $request['id'])->first();
//    $user->roles()->detach();
//    if ($request['role-user']) {
//        $user->roles()->attach(Role::where('name', 'user')->first());
//    }
//    if ($request['role-admin']) {
//        $user->roles()->attach(Role::where('name', 'admin')->first());
//    }
//    return redirect()->back();
//}

}
