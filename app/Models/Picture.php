<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sablon()
    {
        return $this->hasMany(Sablon::class, 'pictures_id');
    }
}
