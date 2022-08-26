<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assure;
use App\Models\Dossier;

use DB;

class GoogleController extends Controller
{
    public function index()
    {
        $assure_h = Assure::where('sexe', 'homme')->count();
        $assure_f = Assure::where('sexe', 'femme')->count();

        $dossier_r = Dossier::where('statu', 'rejet')->count();
        $dossier_c = Dossier::where('statu', 'en cours')->count();
        $dossier_i = Dossier::where('statu', 'indemnisé')->count();
        $dossier_ip = Dossier::where('statu', 'incomplet')->count();

        $dossier_t1 = Dossier::where('type', 'sécurité sociale')->count();
        $dossier_t2 = Dossier::where('type', 'mutuelle')->count();


        return view('statistique', compact('assure_h', 'assure_f', 'dossier_r', 'dossier_c', 'dossier_i', 'dossier_ip', 'dossier_t1', 'dossier_t2'));
    }
}
