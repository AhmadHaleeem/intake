<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technieks;
use Illuminate\Support\Facades\Auth;
class TechnieksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function storeTechniek(Request $request) {

        $this->validate($request,  [
            'linkTheEmail'       => 'required',
            'newEmailAddress'    => 'required',
            'offTheWebsite'      => 'required',
            'budget'             => 'required',
            'siteStatistics'     => 'required',
            'timeOfSuccess'      => 'required',

        ]);

        $technieks = new Technieks;

        $technieks->user_name             = Auth::user()->name;
        $technieks->linkTheEmail          = $request->linkTheEmail;
        $technieks->newEmailAddress       = $request->newEmailAddress;
        $technieks->offTheWebsite         = $request->offTheWebsite;
        $technieks->budget                = $request->budget;

        $technieks->selfDo                = $request->selfDo;
        $technieks->beeldrTakesCMS        = $request->beeldrTakesCMS;
        $technieks->beeldrOnlineMarketing = $request->beeldrOnlineMarketing;
        $technieks->siteStatistics        = $request->siteStatistics;
        $technieks->timeOfSuccess         = $request->timeOfSuccess;

        $technieks->save();
        return redirect('/hosting');
    }
}


