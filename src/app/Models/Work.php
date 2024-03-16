<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'start',
        'end'
    ];

    public function getDetail()
    {
        $start=$this->start;
        $end=$this->end;
        $starttime=strtotime($start);
        $endtime=strtotime($end);
        $work= $endtime - $starttime;
        $worktime= gmdate("H:i:s",$work);
        return $worktime;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
