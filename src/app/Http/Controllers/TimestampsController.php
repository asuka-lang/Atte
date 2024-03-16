<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Breaking;

class TimestampsController extends Controller
{
    public function start(Request $request)
    {
        $start = $request->only(['user_id','start']);
        Work::create($start);
        return redirect('/');
    }

    public function end(Request $request)
    {
        $end = $request->only(['user_id','end']);
        Work::create($end);
        return redirect('/');
    }

    public function breakIn(Request $request)
    {
        $breakIn = $request->only(['work_id','break_in']);
        Breaking::create($breakIn);
        return redirect('/');
    }

    public function breakOut(Request $request)
    {
        $breakOut = $request->only(['work_id','break_out']);
        Breaking::create($breakOut);
        return redirect('/');
    }
}
