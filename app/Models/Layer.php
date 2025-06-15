<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

        public function price()
    {
        return $this->hasMany(Price::class, 'layers_id');
    }

        public function layer()
    {
        return $this->hasMany(Layer::class, 'fabrics_id');
    }
}

