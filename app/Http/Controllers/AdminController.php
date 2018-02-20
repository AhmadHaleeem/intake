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

    public function getContent($id) {
        $user       = User::find($id);
        $evals      = Evaluations::all();
        $ontwerps   = Ontwerps::all();
        $inhouds    = Inhouds::all();
        $technieks  = Technieks::all();
        $hostings   = Hostings::all();
        return view('admin.layouts.file', compact('user', 'evals', 'ontwerps', 'inhouds', 'technieks', 'hostings'));

    }

    public function login()
    {
        $users = User::all();
        return view('admin.layouts.user', compact('users'));
    }

    public function deny()
    {
        return view('admin.layouts.deny');
    }

    public function destroy() {
        auth()->logout();
        return redirect('/login');
    }








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
