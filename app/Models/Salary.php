<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'data_salary',
        'presences_id',
        'loans_id',
        'total',
    ];

    public function presence()
    {
        return $this->belongsTo(Presence::class, 'presences_id'); ;
    }
    public function loan()
    {
        return $this->belongsTo(Loan::class, 'presences_id'); ;
    }
}
