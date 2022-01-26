<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Models\Profile;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if($role=='1')
        {
            return view('trainer.dashboard');
        }
        else if($role == '2')
        {
            $profile = Profile::with('user')->first()->id;
            $tracking = Tracking::with('tracking')->first()->id;
            return view('trainee.dashboard', compact('tracking','profile'));
        }
        else
        {
            return view('welcome');
        }
    }
}
