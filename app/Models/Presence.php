<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $fillable = ['employees_id', 'presences'];

    public function employee()
    {
        return $this->hasMany(Employee::class, 'employees_id');
    }

    public function salary()
    {
        return $this->hasMany(Salary::class, 'presences_id');;
    }
}
