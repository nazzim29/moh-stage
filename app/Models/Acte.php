<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dossier;

class Acte extends Model
{
    use HasFactory;
    protected $fillable = [
        'nature','date_act', 'montant', 'chemin'
    ];
    public function dossier()
    {
        return $this->BelongsTo(Dossier::class);
    }
}
