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
        $hosting = Hostings::where('user_id', \auth()->user()->id)->first();
        if (!$hosting) {
            $hostings = new Hostings;

            $hostings->user_id          = Auth::user()->id;
            $hostings->domainName        = $request->domainName;
            $hostings->hostingPackage    = $request->hostingPackage;
            $hostings->websiteSecure     = $request->websiteSecure;
            $hostings->mailSecure        = $request->mailSecure;
            $hostings->save();
            return redirect('/klaar');
        } else {
            $hosting1 = Hostings::where('user_id', \auth()->user()->id)->first();
            $hosting1->user_id         = Auth::user()->id;
            $hosting1->domainName        = $request->domainName;
            $hosting1->hostingPackage    = $request->hostingPackage;
            $hosting1->websiteSecure     = $request->websiteSecure;
            $hosting1->mailSecure        = $request->mailSecure;
            $hosting1->save();
            return redirect('/klaar');
        }

    }
}
