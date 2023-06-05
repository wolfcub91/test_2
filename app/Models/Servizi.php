<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servizi extends Model
{
    protected $table = 'servizi';
    protected $primaryKey = 'id';

    public function point()
    {
        return $this->belongsTo(Points::class, 'id_point');
    }

    public function acquisti()
    {
        return $this->hasMany(Acquisti::class, 'id_servizio');
    }
}
