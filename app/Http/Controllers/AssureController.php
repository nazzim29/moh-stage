<?php

namespace App\Http\Controllers;

use App\Models\Assure;
use App\Models\Commune;
use App\Models\Beneficiaire;

use Illuminate\Http\Request;

class AssureController extends Controller
{
    public function index()
    {
        $commune = Commune::all();
        $data = Assure::latest()->paginate(5);
        return view('assure.index', compact('data'))
            ->with((request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $communes = Commune::all();
        return view('assure.create', compact('communes'));
    }

    public function show(Assure $assure)
    {
        return view('assure.show', compact('assure'));
    }

    public function store(Request $request)
    {
        $article = Assure::create($request->all());
        $article->save();
        return redirect('/assure')->with('success', 'Assure created successfully.');
    }
    public function edit(assure $assure)
    {
        return view('assure.edit', compact('assure'));
    }

    public function update(Request $request, Assure $assure)
    {
        $request->validate([
            'numero_assure' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'adresse' => 'required',
        ]);
        $assure->update($request->all());

        return redirect()->route('assure.index')
            ->with('success', 'Assure updated successfully');
    }

    public function destroy(Assure $assure)
    {
        $assure->delete();

        return redirect()->route('assure.index')
            ->with('success', 'Assuré deleted successfully');
    }
}
