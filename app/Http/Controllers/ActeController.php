<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acte;

class ActeController extends Controller
{
    public function index(Request $request)
    {
        $dossier = $request->id;
        $data = Acte::where('dossier_id', $dossier)->latest()->paginate(5);
        return view('/acte/index', compact('data', 'dossier'))
            ->with((request()->input('page', 1) - 1) * 5);
    }

    public function create(Request $request)
    {
        $dossier = $request->id;
        return view('/acte/create', compact('dossier'));
    }
    public function delete(Request $request){
        $acte = $request->id;
        Acte::find($acte)->delete();
        return redirect()->back();

    }


    public function store(Request $request)
    {
        $acte = new Acte;
        $acte->nature = $request['nature'];
        $acte->date_act = $request['date_act'];
        $acte->montant = $request['montant'];
        $acte->dossier_id = $request['dossier_id'];
        $acte->save();
        return redirect('/dossier')->with('success', 'Acte created successfully.');
    }

    public function show(Acte $acte)
    {
        return view('acte.show', compact('acte'));
    }
}
