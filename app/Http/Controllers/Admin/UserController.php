<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\UserTypes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Fancades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UserController extends Controller
{
    public function profile()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.profile')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function uploadProfile(Request $request) 
    {
        $user = User::find(Auth::user()->id);
        if ($user) {
        $validate = $request->validate([
            'name' => 'required|min:2'
        ]);
            $user->name = $request['name'];
            $user->phone_number = $request['phone_number'];
            $this->uploadAvatar($request);
            $user->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $this->deleteOldImage();
            $request->image->storeAs('image', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);
        }
        return redirect()->back();
    }

    protected function deleteOldImage()
    {
        if (auth()->user()->avatar) {
            Storage::delete('/public/image/' . auth()->user()->avatar);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function Logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('/'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
