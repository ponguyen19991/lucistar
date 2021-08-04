<?php

namespace App\Http\Controllers;

use App\EventInsert;
use Illuminate\Http\Request;

class CalendarController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function CalendarEvent($id)
    {
        $calendar = EventInsert::find($id);
        return view('events.calendar', ['calendar' => $calendar]);    
        
    }
}
