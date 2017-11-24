<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class HomeContrlller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function jebedrijf() {
        return view('intake.jeBedrijf');
    }
    public function ontwerp() {
        return view('intake.ontwerp');
    }
    public function inhoud() {
        return view('intake.inhoud');
    }
    public function techniek() {
        return view('intake.techniek');
    }
    public function hosting() {
        return view('intake.hosting');
    }

    public function klaar() {
        return view('intake.klaar');
    }

    public function register() {
        return view('intake.register');
    }




//    public function store(Request $request) {
//        $this->validate($request, [
//           'firstname'      => 'required|min:5|max:32',
//           'lastname'       => 'required|min:5|max:32',
//           'email'          => 'required|min:5|max:32',
//           'password'       => 'required|min:5|max:32',
//        ]);
//
//        $user = new User;
//        $user->firstname = $request->firstname;
//        $user->lastname = $request->lastname;
//        $user->email = $request->email;
//        $user->password = bcrypt($request->password);
//        $user->save();
//
//        $user->roles()->attach(Role::where('name', 'user')->first());
//        auth()->login($user);
//        return redirect('/bedrijf');
//    }
}
