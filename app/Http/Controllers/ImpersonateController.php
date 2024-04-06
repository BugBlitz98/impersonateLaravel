<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
class ImpersonateController extends Controller
{
    public function impersonate($id)
    {
        $user = User::find($id);
        //dd($user);
        Auth::user()->impersonate($user);
        return back();
    }

    public function leave(){
        Auth::user()->leaveImpersonation();
        return back();
    }
}
