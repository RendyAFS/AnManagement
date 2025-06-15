<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryHistory extends Model
{
    use HasFactory;

    protected $fillable = ['salarys_id'];

    public function salaryHistory()
    {
        return $this->belongsTo(SalaryHistory::class, 'salarys_id');
    }
}
