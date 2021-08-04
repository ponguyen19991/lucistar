<?php

namespace App\Http\Controllers;

use App\EventInsert;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EventController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function getThem()
    {
        return view('newevent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postThem(Request $request)
    
    {
        $event = new EventInsert();
        $ticket = new Ticket();
        if($request->hasFile('anh')){
            $fileImg = $request->anh->getClientOriginalName();
            $request->anh->move('img', $fileImg);
            if(isset($event)) {
                $event->tensk = $request['tensk'];
                $event->anh = $fileImg;
				$event->chude = $request['chude'];
				$event->nhatochuc = $request['nhatochuc'];
				$event->noidungsk = $request['noidungsk'];
				$event->thanhpho = $request['thanhpho'];
				$event->diachi = $request['diachi'];
				$event->ngaybatdau = $request['ngaybatdau'];
				$event->ngayketthuc = $request['ngayketthuc'];
                $event->timestart = $request['timestart'];
                $event->timeend = $request['timeend'];

                if($event->save()) {
                    $ticket->TENVE = $request['tenve'];
                    $ticket->SOLUONG = $request['soluong'];
                    $ticket->GIAVE = $request['giave'];
                    $ticket->MUATRUOCNGAY = $request['muatruocngay'];
                    $ticket->GIAVECON = $request['giavecon'];
                    $ticket->MUATUNVE = $request['muatunve'];
                    $ticket->GIAVENCON = $request['giavencon'];
                    $ticket->MOTA = $request['mota'];
                    $ticket->save();
                }
				return  view('newevent')->with('status',"Insert successfully");
            }
        }else{
            return  view('newevent')->with('failed', "Khoong Luu Duoc");
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventInsert  $eventInsert
     * @return \Illuminate\Http\Response
     */
    public function show(EventInsert $eventInsert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventInsert  $eventInsert
     * @return \Illuminate\Http\Response
     */
    public function edit(EventInsert $eventInsert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventInsert  $eventInsert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventInsert $eventInsert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventInsert  $eventInsert
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventInsert $eventInsert)
    {
        //
    }
}
