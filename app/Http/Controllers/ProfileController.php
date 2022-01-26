<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\Tracking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $profile = Profile::all();
        $profiles = Profile::with('user')->get();
        $users = User::with('profiles')->get();
        return view('profiles.index', compact('profiles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profiles.create');
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
        request()->validate([
            'profile_id'=>'required',
            'Gender' => 'required',
            'Weight' => 'required',
            'Height' => 'required',
            'Muscle_Focus'  => 'required',
            'Health_Problem'  => 'required',
            'Purpose'  => 'required',
            'Location'  => 'required',
        ]);

        Profile::create([
            'profile_id'=>request('profile_id'),
            'Gender' => request('Gender'),
            'Weight' => request('Weight'),
            'Height' => request('Height'),
            'Muscle_Focus'=> request('Muscle_Focus'),
            'Health_Problem' => request('Health_Problem'),
            'Purpose' => request('Purpose'),
            'Location' => request('Location'),
        ]);

       return redirect('profiles')->with('success','New Profile Details Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        // get id
        $profile = Profile::find($profile);

        // show the view and pass the variable
        return view('profiles.show', ['profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        return view('profiles.edit', ['profile' => $profile]);
    }

    public function edit_user(Profile $profile)
    {
        //
        return view('profiles.edit_user', ['profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
        request()->validate([
            'Gender' => 'required',
            'Weight' => 'required',
            'Height' => 'required',
            'Muscle_Focus' => 'required',
            'Health_Problem' => 'required',
            'Purpose' => 'required',
            'Location' => 'required',
        ]);

        $profile->update([
            'Gender' => request('Gender'),
            'Weight' => request('Weight'),
            'Height' => request('Height'),
            'Muscle_Focus'=> request('Muscle_Focus'),
            'Health_Problem' => request('Health_Problem'),
            'Purpose' => request('Purpose'),
            'Location' => request('Location'),
        ]);

        return redirect('/profiles');
    }

    public function update_user(Request $request, Profile $profile)
    {
        //
        request()->validate([
            'Gender' => 'required',
            'Weight' => 'required',
            'Height' => 'required',
            'Muscle_Focus' => 'required',
            'Health_Problem' => 'required',
            'Purpose' => 'required',
            'Location' => 'required',
        ]);

        $profile->update([
            'Gender' => request('Gender'),
            'Weight' => request('Weight'),
            'Height' => request('Height'),
            'Muscle_Focus'=> request('Muscle_Focus'),
            'Health_Problem' => request('Health_Problem'),
            'Purpose' => request('Purpose'),
            'Location' => request('Location'),
        ]);

        return redirect('/redirects')->with('success','Profile Details Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
        $profile->delete();
        return redirect('/redirects')->with('success','Profile Details Deleted Successfully!');
    }

}
