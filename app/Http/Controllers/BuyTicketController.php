<?php

namespace App\Http\Controllers;

use App\EventInsert;
use App\Ticket;
use Illuminate\Http\Request;

class BuyTicketController extends Controller
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
    public function BuyTicket($id)
    {
        $inforevent = EventInsert::find($id);
        $ticket = Ticket::find($id);
        return view('events.buy', ['inforevent' => $inforevent, 'ticket' => $ticket ]);  
    }
}