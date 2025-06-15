<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresenceHistory extends Model
{
    use HasFactory;

    protected $fillable = ['presences_id'];

    public function presencesHistory()
    {
        return $this->belongsTo(PresenceHistory::class, 'presencess_id');
    }
}
