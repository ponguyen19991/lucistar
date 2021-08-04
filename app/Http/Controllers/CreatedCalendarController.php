<?php

namespace App\Http\Controllers;

use App\EventInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreatedCalendarController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function CreateCalendarEvent($id)
    {
        $createca = EventInsert::find($id);
        return view('events.createcalendar', ['createca' => $createca]);    
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function ThemLich(Request $request)
    
    // {
    //     $themlich = new EventInsert();
    //         if(isset($themlich)) {
    //             $themlich->thanhpho = $request['thanhpho'];
    //             $themlich->diachi = $request['diachi'];
	// 			$themlich->ngaybatdau = $request['ngaybatdau'];
	// 			$themlich->ngayketthuc = $request['ngayketthuc'];
	// 			$themlich->timestart = $request['timestart'];
	// 			$themlich->timeend = $request['timeend'];
    //             $themlich->save();
    //             }
	// 			return  view('events.createcalendar')->with('status',"Insert successfully");
    // }


}