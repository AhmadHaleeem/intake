<?php

namespace App\Http\Controllers;

use App\Evaluations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EvaluationController extends Controller
{
    public function index() {
        return view('admin.home');
    }


    public function storeEval(Request $request) {
        $eval = Evaluations::where('user_id', \auth()->user()->id)->first();

        if (!$eval) {
            $evals = new Evaluations;
            if ( is_array( $request->get('goals') ) ) {
                $goalsOfTheWebsite = implode(", ", $request->get('goals'));
                $evals->goalsOfTheWebsite =  $goalsOfTheWebsite;
            }
            $evals->user_id        = Auth::user()->id;
            $evals->products        = $request->products;
            $evals->goal            = $request->goal;
            $evals->competitors      = $request->competitors;
            $evals->makeCompanyBeter = $request->makeCompanyBeter;
            $evals->anders           = $request->anders;
            $evals->reasonMakeWebsite = $request->reasonMakeWebsite;
            $evals->oldBadWebsites   = $request->oldBadWebsites;
            $evals->visitor          = $request->visitor;
            $evals->save();

            return redirect('/ontwerp');

        } else {
            $id = Auth::user()->id;
            $evals1 = Evaluations::where('user_id', $id)->first();
            if ( isset($request->goals)) {
                $goalsOfTheWebsite = implode(", ", $request->get('goals'));
                $evals1->goalsOfTheWebsite =  $goalsOfTheWebsite;
            }
            $evals1->user_id        = Auth::user()->id;
            $evals1->products        = $request->products;
            $evals1->goal            = $request->goal;
            $evals1->competitors      = $request->competitors;
            $evals1->makeCompanyBeter = $request->makeCompanyBeter;
            $evals1->anders           = $request->anders;
            $evals1->reasonMakeWebsite = $request->reasonMakeWebsite;
            $evals1->oldBadWebsites   = $request->oldBadWebsites;
            $evals1->visitor          = $request->visitor;

            $evals1->save();
            return redirect('/ontwerp')->with('success', 'data updated');
        }



    }
}
