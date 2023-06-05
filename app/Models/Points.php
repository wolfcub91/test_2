<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $table = 'points';
    protected $primaryKey = 'id';

    public function fatture()
    {
        return $this->hasMany(Fatture::class, 'id_point');
    }

    public function acquisti()
    {
        return $this->hasMany(Acquisti::class, 'id_point');
    }

    public function servizi()
    {
        return $this->hasMany(Servizi::class, 'id_point');
    }

}
