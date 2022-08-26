<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Models\Assure;
use App\Models\Beneficiaire;
use PDF;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    public function index()
    {
        $data = Dossier::latest()->paginate(5);
        return view('dossier.index', compact('data'))
            ->with((request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $assures = Assure::all();
        $beneficiaires = Beneficiaire::all();
        return view('dossier.create', compact('assures', 'beneficiaires'));
    }
    public function show(Dossier $dossier)
    {
        $dossier::with('assure', 'beneficiaire')->get();
        return view('dossier.show', compact('dossier'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'type' => 'required',
            'beneficiaire_id' => 'numeric | nullable',
            'assure_id' => 'required',

        ]);
        $doss = Dossier::orderBy('id', 'desc')->first();
        if ($doss == null) {
            $newDossierId = "DOSS_ASSU20220722001";
        } else {
            $lastdossierId = Dossier::orderBy('id', 'desc')->first()->id;
            $lastIncreament = substr($lastdossierId, -3);
            $newDossierId = 'DOSS_ASSU' . date('Ymd') . str_pad($lastIncreament + 1, 3, 0, STR_PAD_LEFT);
        }
        $dossier = Dossier::create([
            'n_dossier' => $newDossierId,
            'statu' => "en cours",
            'type' => $data['type'],
            'beneficiaire_id' => $data['beneficiaire_id'],
            'assure_id' => $data['assure_id'],
        ]);
        $dossier->save();
        return redirect('/dossier')->with('success', 'Dossier created successfully.');
    }
    public function rejet($id)
    {
        Dossier::where('id', $id)->update([
            'statu' => "rejet",
        ]);
        return redirect('/dossier')->with('success', 'Dossier mise a jour.');
    }
    public function indemnise($id)
    {
        Dossier::where('id', $id)->update([
            'statu' => "indemnisé",
        ]);
        return redirect('/dossier')->with('success', 'Dossier mise a jour.');
    }
    public function incomplet($id)
    {
        Dossier::where('id', $id)->update([
            'statu' => "incomplet",
        ]);
        return redirect('/dossier')->with('success', 'Dossier mise a jour.');
    }
    public function destroy(Request $request){
        $dossier = $request->id;
        Dossier::find($dossier)->delete();
        return redirect()->route('dossier.index');
    }
/// Borderau
    public function bordeurau($id)
    {
        $dossier = Dossier::with('assure','beneficiaire','actes')->get()->find($id);

        $pdf = PDF::loadView('dossier.bordeuro', compact('dossier'));
        // return view('dossier.bordeuro', compact('dossier'));
        return $pdf->stream('bordeurau_'.time().'.pdf');
    }
    public function last_bordeuro(Request $request){
        $dossiers = Dossier::latest()->take(10)->get();
        $pdf = PDF::loadView('dossier.b',compact("dossiers"));
        return $pdf->stream('bordeurau_' . time() . '.pdf');
    }


}
