<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sablon extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'fabrics_id',
        'layers_id',
        'pictures_id',
        'data_sablons',
        'status',
    ];

    public function fabric()
    {
        return $this->belongsTo(Fabric::class, 'fabrics_id');
    }
    public function layer()
    {
        return $this->belongsTo(Layer::class, 'layers_id');
    }
    public function picture()
    {
        return $this->belongsTo(Picture::class, 'pictures_id');
    }
        public function sablonHistory()
    {
        return $this->hasMany(SablonHistory::class, 'sablons_id');
    }
}
