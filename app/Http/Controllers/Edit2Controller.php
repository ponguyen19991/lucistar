<?php

namespace App\Http\Controllers;

use App\EventInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Edit2Controller extends Controller
{

    public function getEvents2($id)
    {
        $editevent = EventInsert::find($id);
        return view('events.edit2', ['editevent' => $editevent]);    
        
    }

    public function UploadEdit2(Request $request, $id)
    {
        $editevent = new  EventInsert();
        
        if ($request->hasFile('anh')) {
            $fileimg = $request->anh->getClientOriginalName();
            $request->anh->move('img', $fileimg);
            if ($editevent) {
                $editevent
                    ->where('id', $id)
                    ->update([
                        'tensk' => $request['tensk'],
                        'chude' => $request['chude'],
                        'nhatochuc' => $request['nhatochuc'],
                        'thanhpho' => $request['thanhpho'],
                        'diachi' => $request['diachi'],
                        'anh' => $fileimg,
                    ]);
                return redirect()->back()->with('success', 'Cập nhật sự kiện thành công');
            }
        }
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
