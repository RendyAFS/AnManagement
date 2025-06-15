<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SablonHistory extends Model
{
    use HasFactory;

    protected $fillable = ['sablons_id'];

    public function sablon()
    {
        return $this->belongsTo(Sablon::class, 'sablons_id');
    }
}
