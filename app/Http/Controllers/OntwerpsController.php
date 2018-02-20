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
        $ontwerp = Ontwerps::where('user_id', \auth()->user()->id)->first();
        if (!$ontwerp) {
            $ontwerps = new Ontwerps;
            $ontwerps->user_id             = Auth::user()->id;
            $ontwerps->apperance             = $request->apperance;
            $ontwerps->corporateIdentity     = $request->corporateIdentity;
            $ontwerps->website1              = $request->website1;
            $ontwerps->website2              = $request->website2;
            $ontwerps->website3              = $request->website3;
            $ontwerps->mooiWebsite1          = $request->mooiWebsite1;
            $ontwerps->mooiWebsite2          = $request->mooiWebsite2;
            $ontwerps->mooiWebsite3          = $request->mooiWebsite3;
            $ontwerps->save();
            return redirect('/inhoud');
        } else {
            $id = Auth::user()->id;
            $ontwerps1 = Ontwerps::where('user_id', $id)->first();
            $ontwerps1->user_id             = Auth::user()->id;
            $ontwerps1->apperance             = $request->apperance;
            $ontwerps1->corporateIdentity     = $request->corporateIdentity;
            $ontwerps1->website1              = $request->website1;
            $ontwerps1->website2              = $request->website2;
            $ontwerps1->website3              = $request->website3;
            $ontwerps1->mooiWebsite1          = $request->mooiWebsite1;
            $ontwerps1->mooiWebsite2          = $request->mooiWebsite2;
            $ontwerps1->mooiWebsite3          = $request->mooiWebsite3;
            $ontwerps1->save();
            return redirect('/inhoud');
        }


    }
}
