<?php

namespace App\Http\Controllers;

use App\EventInsert;
use App\ThongTin;
use App\Ticket;
use Illuminate\Http\Request;

class FeaturesController extends Controller
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
    public function FeaturesEvents()
    {
        $inforevent = EventInsert::all();
        $ticket = Ticket::all();
        $thongtinve = ThongTin::all();
        return view('features', ['inforevent' => $inforevent, 'ticket' => $ticket, 'thongtinve' => $thongtinve]);    
        
    }
}
