<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\Tracking;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profiles = Profile::with('user')->get();
        $users = User::with('profiles')->get();

        $track = Profile::with('track')->get();
        $tracking = Tracking::with('tracking')->get();
        return view('tracking.index', compact('profiles', 'users','track','tracking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tracking.create');
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
            'track_id'=>'required',
            'Activity'=>'required',
            'Date'=>'required',
            'Sets_Reps'=>'required',
            'Duration'=>'required',
        ]);

        Tracking::create([
            'track_id'=>request('track_id'),
            'Activity'=>request('Activity'),
            'Date'=>request('Date'),
            'Sets_Reps'=>request('Sets_Reps'),
            'Duration'=>request('Duration'),
        ]);

         return redirect('tracking')->with('success','New Session Tracking Details Created Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $tracking)
    {
        //
        $tracking = Tracking::find($tracking);
        return view('tracking.show', ['tracking' => $tracking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        //
        return view('tracking.edit', ['tracking' => $tracking]);
    }

    public function edit_user(Tracking $tracking)
    {
        //
        return view('tracking.edit_user', ['tracking' => $tracking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracking $tracking)
    {
        //
        request()->validate([
            'track_id',
            'Activity',
            'Date',
            'Sets_Reps',
            'Duration',
        ]);

        $tracking->update([
            'track_id'=> request('track_id'),
            'Activity'=> request('Activity'),
            'Date'=> request('Date'),
            'Sets_Reps'=> request('Sets_Reps'),
            'Duration'=> request('Duration'),
        ]);

        return redirect('/tracking');
    }

    public function update_user(Request $request, Tracking $tracking)
    {
        //
        request()->validate([
            'track_id',
            'Activity',
            'Date',
            'Sets_Reps',
            'Duration',
        ]);

        $tracking->update([
            'track_id'=> request('track_id'),
            'Activity'=> request('Activity'),
            'Date'=> request('Date'),
            'Sets_Reps'=> request('Sets_Reps'),
            'Duration'=> request('Duration'),
        ]);

        return redirect('/redirects')->with('success','Tracking Details Updated Successfully!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        //
        $tracking->delete();
        return redirect('/redirects')->with('success','Tracking Details Deleted Successfully!'); ;
    }
}
