<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hostings;
use Illuminate\Support\Facades\Auth;
class HostingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function storeHosting(Request $request) {
//        $this->validate($request,  [
//            'domainName'        => 'required',
//            'hostingPackage'    => 'required',
//            'websiteSecure'     => 'required',
//            'mailSecure'        => 'required',
//
//
//        ]);
        $hostings = new Hostings;

        $hostings->user_name          = Auth::user()->name;
        $hostings->domainName        = $request->domainName;
        $hostings->hostingPackage    = $request->hostingPackage;
        $hostings->websiteSecure     = $request->websiteSecure;
        $hostings->mailSecure        = $request->mailSecure;


        $hostings->save();
        return redirect('/klaar');
    }
}
