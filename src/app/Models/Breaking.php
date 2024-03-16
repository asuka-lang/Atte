<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaking extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_id',
        'break_in',
        'break_out'
    ];



    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
