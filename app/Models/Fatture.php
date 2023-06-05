<?php

namespace App\Models;

use App\Models\Points;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatture extends Model
{
    protected $table = 'fatture';
    protected $primaryKey = 'id';

    public function point()
    {
        return $this->belongsTo(Points::class, 'id_point');
    }
}
