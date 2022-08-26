<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceJointe extends Model
{
    use HasFactory;
    protected $fillable = [
        'chemin', 'nom', 'dossier_id'
    ];
    public function assure()
    {
        return $this->BelongsTo(Dossier::class);
    }
}

