<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ontwerps;
use Illuminate\Support\Facades\Auth;
class OntwerpsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function storeOntwerp(Request $request) {
        $this->validate($request,  [
            'apperance'           => 'required',
            'corporateIdentity'   => 'required',

        ]);

            $ontwerps = new Ontwerps;
            $ontwerps->user_name             = Auth::user()->name;
            $ontwerps->apperance             = $request->apperance;
            $ontwerps->corporateIdentity     = $request->corporateIdentity;
            $ontwerps->website1              = $request->website1;
            $ontwerps->website2              = $request->website2;
            $ontwerps->website3              = $request->website3;
            $ontwerps->mooiWebsite1          = $request->mooiWebsite1;
            $ontwerps->mooiWebsite2          = $request->mooiWebsite2;
            $ontwerps->mooiWebsite3          = $request->mooiWebsite3;

            $ontwerps->save();
        if ($request->has('apperance')) {
            return redirect('/inhoud');
        } else {
            return redirect()->back();
        }

    }
}
