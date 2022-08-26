<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiaire;
use App\Models\Dossier;

class Assure extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_assure', 'nom', 'prenom','date_naissance','sexe', 'email', 'adresse', 'commune'
    ];
    public function beneficiaires()
    {
        return $this->hasMany(Beneficiaire::class);
    }
    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }
}
