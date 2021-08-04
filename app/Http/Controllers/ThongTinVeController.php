<?php

namespace App\Http\Controllers;

use app\ThongTin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ThongTinVeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function getThemSoLuong()
    {
        return view('events.inforevent/{id}');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postThemSoLuong(Request $request)
    
    {
        $thongtinve = new ThongTin();
            if(isset($thongtinve)) {
                $thongtinve->masanpham = $request['masanpham'];
                $thongtinve->tinhtrang = $request['tinhtrang'];
				$thongtinve->soluongve = $request['soluongve'];
                $thongtinve->save();
                }
				return  view('events.inforevent/{id}')->with('status',"Insert successfully");
    }


}