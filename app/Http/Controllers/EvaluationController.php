<?php

namespace App\Http\Controllers;

use App\Evaluations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
{
    public function index() {
        return view('admin.home');
    }


    public function storeEval(Request $request) {

        $this->validate($request,  [
            'products'          => 'required',
            'goal'              => 'required',
            'competitors'       => 'required',
            'makeCompanyBeter'  => 'required',
            'reasonMakeWebsite' => 'required',
            'oldBadWebsites'    => 'required',
            'visitor'           => 'required',
//        ],
//            [
//                'products.required' => 'je moet de producten field invullen..',
////                'goal.required'     => 'je moet de doelen field invullen..',
////                'competitors.required' => 'je moet de concurrenten field invullen..',
////                'products.required' => 'je moet de producten field invullen..',
////                'products.required' => 'je moet de producten field invullen..',
////                'products.required' => 'je moet de producten field invullen..',
////                'products.required' => 'je moet de producten field invullen..',
            ]);





            $evals = new Evaluations;
            $golasOfTheWebsite = implode(", ", $request->get('goals'));


            $evals->user_name        = Auth::user()->name;
            $evals->products         = $request->products;
            $evals->goal            = $request->goal;
            $evals->competitors      = $request->competitors;
            $evals->makeCompanyBeter = $request->makeCompanyBeter;

            $evals->goalsOfTheWebsite =  $golasOfTheWebsite;

            $evals->anders           = $request->anders;
            $evals->reasonMakeWebsite = $request->reasonMakeWebsite;
            $evals->oldBadWebsites   = $request->oldBadWebsites;
            $evals->visitor          = $request->visitor;
            $evals->save();
            return redirect('/ontwerp');
    }


}
//            $evals->presentCompany   = $request->presentCompany;
//            $evals->newCustomers     = $request->newCustomers;
//            $evals->takeTheTasks     = $request->takeTheTasks;
//            $evals->revenue          = $request->revenue;
//            $evals->accessibility    = $request->accessibility;
//            $evals->imageStrengthen  = $request->imageStrengthen;
//            $evals->extraInfo        = $request->extraInfo;