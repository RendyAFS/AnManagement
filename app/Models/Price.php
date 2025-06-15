<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'suppliers_id',
        'type_fabrics_id',
        'layers_id',
        'total'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }
    public function typeFabric()
    {
        return $this->belongsTo(TypeFabric::class, 'type_fabrics_id');
    }
    public function layer()
    {
        return $this->belongsTo(Layer::class, 'layers_id');
    }
}
