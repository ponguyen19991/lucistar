<?php

namespace App\Http\Controllers;

use App\EventInsert;
use App\Ticket;
use Illuminate\Http\Request;

class WellcomeController extends Controller
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
    public function WellComePage()
    {
        $event = EventInsert::all();
        $ticket = Ticket::all();
        return view('/welcome', ['event' => $event, 'ticket' => $ticket]);
    }
}
