<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use Illuminate\Http\Request;

class JoinTableController extends Controller
{

    function index()
    {
        $data = Ticket::join('events', 'events.ve_ID', '=', 'events.events_id');
    }

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
}