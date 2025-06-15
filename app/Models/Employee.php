<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'no_telp'];

    public function loan()
    {
        return $this->hasMany(Loan::class, 'employees_id');
    }
    public function presence()
    {
        return $this->hasMany(Presence::class, 'employees_id');
    }
}
