<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Assure;
use App\Models\Acte;

use App\Models\Beneficiaire;

class Dossier extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'assure_id', 'beneficiaire_id', 'n_dossier', 'statu', 'type'
    ];
    public function assure()
    {
        return $this->BelongsTo(Assure::class);
    }
    public function beneficiaire()
    {
        return $this->BelongsTo(Beneficiaire::class);
    }
    public function actes()
    {
        return $this->hasMany(Acte::class);
    }
}
