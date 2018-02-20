<?php

namespace App\Http\Controllers;

use App\Hostings;
use App\Inhouds;
use App\Ontwerps;
use App\Technieks;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Evaluations;

use Illuminate\Support\Facades\Auth;

class HomeContrlller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function jebedrijf() {
        $id = Auth::user()->id;
        $eval = Evaluations::where('user_id', $id)->first();
        if ($eval) {
            return view('intake.jeBedrijf', compact('eval'));
        } else {
            return view('intake.jeBedrijf', compact('eval'));
        }
        

    }
    public function ontwerp() {
        $id = Auth::user()->id;
        $ontwerp = Ontwerps::where('user_id', $id)->first();
        if ($ontwerp) {
            return view('intake.ontwerp', compact('ontwerp'));
        } else {
            return view('intake.ontwerp', compact('ontwerp'));
        }

    }
    public function inhoud() {
        $id = Auth::user()->id;
        $inhoud = Inhouds::where('user_id', $id)->first();
        if ($inhoud) {
            return view('intake.inhoud', compact('inhoud'));
        } else {
            return view('intake.inhoud', compact('inhoud'));
        }

    }
    public function techniek() {
        $id = Auth::user()->id;
        $techniek = Technieks::where('user_id', $id)->first();
        if ($techniek) {
            return view('intake.techniek', compact('techniek'));
        } else {
            return view('intake.techniek', compact('techniek'));
        }

    }
    public function hosting() {
        $id = Auth::user()->id;
        $hosting = Hostings::where('user_id', $id)->first();
        if ($hosting) {
            return view('intake.hosting', compact('hosting'));
        } else {
            return view('intake.hosting', compact('hosting'));
        }


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

