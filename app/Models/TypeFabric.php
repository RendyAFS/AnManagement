<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFabric extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function fabric()
    {
        return $this->hasMany(Fabric::class, 'type_fabrics_id');
    }

        public function price()
    {
        return $this->hasMany(Price::class, 'type_fabrics_id');
    }
}
