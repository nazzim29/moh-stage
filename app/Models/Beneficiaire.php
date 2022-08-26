<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Assure;
use App\Models\Dossier;


class Beneficiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'assure_id', 'nom', 'prenom'
    ];

    public function assure()
    {
        return $this->BelongsTo(Assure::class);
    }
    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }
}
