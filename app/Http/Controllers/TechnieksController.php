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
        $techniek = Technieks::where('user_id', \auth()->user()->id)->first();
        if (!$techniek) {
            $technieks = new Technieks;
            $technieks->user_id             = Auth::user()->id;
            $technieks->linkTheEmail          = $request->linkTheEmail;
            $technieks->newEmailAddress       = $request->newEmailAddress;
            $technieks->offTheWebsite         = $request->offTheWebsite;
            $technieks->budget                = $request->budget;

            if ( isset($request->technieks)) {
                $all_technieks = implode(", ", $request->get('technieks'));
                $technieks->technieks =   $all_technieks;
            }

            $technieks->siteStatistics        = $request->siteStatistics;
            $technieks->timeOfSuccess         = $request->timeOfSuccess;

            $technieks->save();
            return redirect('/hosting');
        } else {
            $id = Auth::user()->id;
            $technieks1 = Technieks::where('user_id', $id)->first();
            $technieks1->user_id             = Auth::user()->id;
            $technieks1->linkTheEmail          = $request->linkTheEmail;
            $technieks1->newEmailAddress       = $request->newEmailAddress;
            $technieks1->offTheWebsite         = $request->offTheWebsite;
            $technieks1->budget                = $request->budget;

            if ( isset($request->technieks)) {
                $all_technieks = implode(", ", $request->get('technieks'));
                $technieks1->technieks =   $all_technieks;
            }
            $technieks1->siteStatistics        = $request->siteStatistics;
            $technieks1->timeOfSuccess         = $request->timeOfSuccess;

            $technieks1->save();
            return redirect('/hosting');
        }


    }
}


