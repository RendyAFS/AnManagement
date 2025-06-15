<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['employees_id', 'total'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employees_id');
    }
        public function salary()
    {
        return $this->hasMany(Salary::class, 'loans_id');;
    }
}
