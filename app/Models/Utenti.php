<?php

namespace App\Models;

use App\Models\Acquisti;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utenti extends Model
{
    protected $table = 'utenti';
    protected $primaryKey = 'id';

    public function acquisti()
    {
        return $this->hasMany(Acquisti::class, 'id_utente');
    }
}
