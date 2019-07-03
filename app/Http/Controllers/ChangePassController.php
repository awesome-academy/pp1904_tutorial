<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use App\Http\Requests\ChangePasswordRequest;

class ChangePassController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function changePass() 
    {
    	return view('auth.changepass');
    }

    public function changePassSubmit(ChangePasswordRequest $request)
    {
    	// $validated = $request->validated();

    	// code to do
		// dd($request->all());
    	
    	$user = User::find(Auth::id());
    	// dd($user);
    	
    	$user->password = Hash::make($request->password);
    	$user->save();

    	$request->session()->flush();

    	return redirect('home');
    }
}
