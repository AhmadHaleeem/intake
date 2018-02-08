<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inhouds;
use Illuminate\Support\Facades\Auth;

class InhoudsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function storeInhoud(Request $request)
    {

//        $this->validate($request,  [
//            'advices'       => 'required',
//            'newRegular'    => 'required',
//            'socialMedia'   => 'required',
//            'pages'         => 'required',
//            'moreLanguages' => 'required',
//            'seoSearch'     => 'required',
//
//
//        ]);


    $inhouds = new Inhouds;
    if (is_array($request->get('functions'))) {
        $functionsString = implode(", ", $request->get('functions'));
        $inhouds->functions      = $functionsString;
    }
    if (is_array($request->get('vElement'))) {
        $elemntsString = implode(", ", $request->get('vElement'));
        $inhouds->vElement       = $elemntsString;
    }




    $inhouds->user_name      = Auth::user()->name;
    $inhouds->advices        = $request->advices;
    $inhouds->newRegular     = $request->newRegular;
    $inhouds->socialMedia    = $request->socialMedia;
    $inhouds->pages          = $request->pages;
    $inhouds->moreLanguages  = $request->moreLanguages;
    $inhouds->seoSearch      = $request->seoSearch;
    $inhouds->anders         = $request->anders;



    $inhouds->save();
    return redirect('/techniek');
    }
}


