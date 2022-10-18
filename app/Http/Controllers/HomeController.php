<?php

namespace App\Http\Controllers;

use App\Models\Refugees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('worker.whome');
            }
            elseif(Auth::user()->usertype == '0')
            {
                $refugee = Refugees::all();
                return view('worker.whome', compact('refugee'));
            }
            
            else
            {
                return view('donor.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

     public function index ()
    {
        $refugee = Refugees::all();
        return view('worker.whome', compact('refugee'));
        return view('user.homes');
    } 

    public function donate ()
    {
        return view('donation.home');
    }

    public function profile()
    {
        $refugee = Refugees::all();
        return view('worker.profilehome', compact('refugee'));
    }

    public function worker_redirect()
    {
        $refugees = Refugees::all();
        return view('worker.bodyhome', compact('refugees'));
    }
}
