<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
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
    public function TicketT($id)
    {
        $ticket = Ticket::find($id);
        return view('events.inforevent', ['ticket' => $ticket ]);    
    }
}