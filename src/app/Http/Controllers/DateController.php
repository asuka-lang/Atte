<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Work;
use App\Models\User;

class DateController extends Controller
{
    public function index()
    {
        $date= Carbon::today();

        $works=Work::with('user')->whereDate('start',$date)->whereDate('end',$date)->get();

        // dd($works);

        return view('attendance',compact('date','works'));
    }

    public function preview()
    {
        $date= Carbon::today()->subDay(1);

        $works=Work::with('user')->whereDate('start',$date)->whereDate('end',$date)->get();

        return view('attendance',compact('date','works'));

    }

    public function next()
    {
        $date= Carbon::today()->addDay(1);

        $works=Work::with('user')->whereDate('start',$date)->whereDate('end',$date)->get();

        return view('attendance',compact('date','works'));
    }
}
