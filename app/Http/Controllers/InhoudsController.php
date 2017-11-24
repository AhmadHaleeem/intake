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

        $this->validate($request,  [
            'advices'       => 'required',
            'newRegular'    => 'required',
            'socialMedia'   => 'required',
            'pages'         => 'required',
            'moreLanguages' => 'required',
            'seoSearch'     => 'required',


        ]);


    $inhouds = new Inhouds;
    $functionsString = implode(", ", $request->get('functions'));
    $elemntsString = implode(", ", $request->get('vElement'));


    $inhouds->user_name      = Auth::user()->name;
    $inhouds->advices        = $request->advices;
    $inhouds->newRegular     = $request->newRegular;
    $inhouds->socialMedia    = $request->socialMedia;
    $inhouds->pages          = $request->pages;
    $inhouds->moreLanguages  = $request->moreLanguages;
    $inhouds->seoSearch      = $request->seoSearch;
    $inhouds->anders         = $request->anders;
    $inhouds->functions      = $functionsString;
    $inhouds->vElement       = $elemntsString;

    $inhouds->save();
    return redirect('/techniek');
    }
}


