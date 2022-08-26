<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PieceJointe;

class PieceJointeController extends Controller
{
    //
    public function index(Request $req)
    {
        // get all pieces jointes
        $pieces = PieceJointe::where('dossier_id', $req->id)->get();
        return view('piecejointe.index', ['data' => $pieces, 'dossier' => $req->id]);
    }
    public function create(Request $req)
    {
        // get all pieces jointes
        return view('piecejointe.create', ['dossier' => $req->id]);
    }
    public function store(Request $req)
    {
        // validate data
        $data = $req->validate([
            'nom' => 'required',
            'fichier' => 'required',
        ]);
        // dd($req);
        // store the file
        $file = $req->file("fichier");
        $filepath = $file->storeAs('public/piecejointes', time() . $file->getClientOriginalName());

        // create the piece jointe
        $piece = new PieceJointe();
        $piece->dossier_id = $req->id;
        $piece->nom = $data['nom'];
        $piece->chemin = $filepath;
        $piece->save();
        // redirect to the dossier page
        return redirect('/piece-jointe/' . $req->id)->with('success', 'Piece jointe created successfully.');
    }
    public function download(Request $req)
    {
        // get the piece jointe
        $piece = PieceJointe::find($req->id);
        // download the file
        return response()->download(storage_path('app/' . $piece->chemin));
    }
}
