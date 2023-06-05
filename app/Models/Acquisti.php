<?php

namespace App\Models;

use App\Models\Points;
use App\Models\Servizi;
use App\Models\Utenti;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquisti extends Model
{
    protected $table = 'acquisti';
    protected $primaryKey = 'id';

    public function servizio()
    {
        return $this->belongsTo(Servizi::class, 'id_servizio');
    }

    public function point()
    {
        return $this->belongsTo(Points::class, 'id_point');
    }

    public function utente()
    {
        return $this->belongsTo(Utenti::class, 'id_utente');
    }
}
