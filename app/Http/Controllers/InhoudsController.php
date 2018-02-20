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
            $inhoud = Inhouds::where('user_id', \auth()->user()->id)->first();
            if (!$inhoud) {
                $inhouds = new Inhouds;
                if (is_array($request->get('functions'))) {
                    $functionsString = implode(", ", $request->get('functions'));
                    $inhouds->functions      = $functionsString;
                }
                if (is_array($request->get('vElement'))) {
                    $elemntsString = implode(", ", $request->get('vElement'));
                    $inhouds->vElement       = $elemntsString;
                }
                $inhouds->user_id      = Auth::user()->id;
                $inhouds->advices        = $request->advices;
                $inhouds->newRegular     = $request->newRegular;
                $inhouds->socialMedia    = $request->socialMedia;
                $inhouds->pages          = $request->pages;
                $inhouds->moreLanguages  = $request->moreLanguages;
                $inhouds->seoSearch      = $request->seoSearch;
                $inhouds->anders         = $request->anders;
                $inhouds->save();
                return redirect('/techniek');
            } else {
                $inhouds1 = Inhouds::where('user_id', \auth()->user()->id)->first();
                if (is_array($request->get('functions'))) {
                    $functionsString = implode(", ", $request->get('functions'));
                    $inhouds1->functions      = $functionsString;
                }
                if (is_array($request->get('vElement'))) {
                    $elemntsString = implode(", ", $request->get('vElement'));
                    $inhouds1->vElement       = $elemntsString;
                }
                $inhouds1->user_id      = Auth::user()->id;
                $inhouds1->advices        = $request->advices;
                $inhouds1->newRegular     = $request->newRegular;
                $inhouds1->socialMedia    = $request->socialMedia;
                $inhouds1->pages          = $request->pages;
                $inhouds1->moreLanguages  = $request->moreLanguages;
                $inhouds1->seoSearch      = $request->seoSearch;
                $inhouds1->anders         = $request->anders;
                $inhouds1->save();
                return redirect('/techniek');
            }

    }
}


