<?php

namespace App\Http\Controllers;
use App\Hostings;
use PDF;
use Illuminate\Http\Request;
use App\User;
use App\Evaluations;
use App\Ontwerps;
use App\Inhouds;
use App\Technieks;

class PdfController extends Controller
{
    public function export($id) {
//        $pdf = PDF::loadView('emails.calculators.specification', array('data' => $data) )->save('pdf/specification.pdf');
        $evals = Evaluations::all();
        $user = User::find($id);
        $ontwerps = Ontwerps::all();
        $inhouds = Inhouds::all();
        $technieks = Technieks::all();
        $hostings = Hostings::all();
        $pdf = \PDF::loadView('admin.layouts.file', compact('evals', 'user', 'ontwerps', 'inhouds', 'technieks', 'hostings'));
        return $pdf->stream('invoice.pdf');
    }
}
