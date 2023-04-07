<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id',
        'production',
        'vente',
        'productionVendue',
        'Description'
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
	