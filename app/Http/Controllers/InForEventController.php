<?php

namespace App\Http\Controllers;

use App\EventInsert;
use App\ThongTin;
use App\Ticket;
use Illuminate\Http\Request;

class InForEventController extends Controller
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
    public function InforEvents($id)
    {
        $inforevent = EventInsert::find($id);
        $ticket = Ticket::find($id);
        $thongtinve = ThongTin::find($id);
        return view('events.inforevent', ['inforevent' => $inforevent, 'ticket' => $ticket, 'thongtinve' => $thongtinve]);    
        
    }
}
