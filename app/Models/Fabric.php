<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    use HasFactory;

    protected $fillable = ['suppliers_id', 'type_fabrics_id', 'stok'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }

    public function typeFabric()
    {
        return $this->belongsTo(TypeFabric::class, 'type_fabrics_id');
    }

    public function sablon()
    {
        return $this->hasMany(Sablon::class, 'fabrics_id');
    }
}
