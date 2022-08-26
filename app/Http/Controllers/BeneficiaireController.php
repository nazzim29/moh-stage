<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaire;
use Illuminate\Http\Request;

class BeneficiaireController extends Controller
{
    public function index(Request $request)
    {
        $assu = $request->id;
        $data = Beneficiaire::where('assure_id', $assu)->latest()->paginate(5);
        return view('/beneficiaire/index', compact('data', 'assu'))
            ->with((request()->input('page', 1) - 1) * 5);
    }
    public function index_json(Request $request)
    {
        $assu = $request->id;
        $data = Beneficiaire::where('assure_id', $assu)->get();
        return $data;
    }
    public function show(Beneficiaire $ben)
    {
        return view('beneficiaire.show', compact('beneficiaire'));
    }

    public function create(Request $request)
    {
        $assu = $request->id;
        return view('/beneficiaire/add', compact('assu'));
    }

    public function edit(beneficiaire $ben)
    {
        return view('beneficiaire.edit', compact('beneficiaire'));
    }

    public function update(Request $request, beneficiaire $ben)
    {
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',


        ]);

        $ben->update($request->all());

        return redirect()->route('beneficiaire.index')
            ->with('success', 'Beneficiaire updated successfully');
    }


    public function store(Request $request)
    {
        $ben = new Beneficiaire;
        $ben->assure_id = $request['assure_id'];
        $ben->nom = $request['nom'];
        $ben->prenom = $request['prenom'];
        $ben->save();
        return redirect('/assure')->with('success', 'Beneficiaire created successfully.');
    }

    public function destroy(beneficiaire $ben)
    {
        $ben->delete();

        return redirect()->route('beneficiaire.index')
            ->with('success', 'beneficiaire deleted successfully');
    }
}
