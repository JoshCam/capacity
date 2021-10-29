<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::paginate(9);
        return view('clubs.index', compact('clubs'));
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

    public function storeEvent(StoreEventRequest $request, Club $club)
    {
        // TODO:
        // Create view for event widget for users & admins
        // Add middleware to this route so that only an admin of
        // the specified club can create an event for their club
        $club->events()->create($request->validated());
        return redirect()->route('admin.show', $club);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        $events = $club->events;
        return view('clubs.show' , compact('club', 'events'));
    }

    // #### HOME PAGE FOR ADMINS #### 
    public function showAdmin(Club $club)
    {
        $club = Auth::user()->club;
        $events = $club->events;

        return view('admin.show' , compact('club', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        $club = Auth::user()->club;
        return view('admin.editClub', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        // Function updates club details from Admin panel
        // ######TIDY THIS UP - PUT IT IN A VALIDATOR AND SEND IT BACK HERE AS A REQUEST####//
        $club->name = $request->name;
        $club->image = $request->image;
        $club->capacity = $request->capacity;
        $club->address = $request->address;
        $club->description = $request->description;

        $club->save();

        return redirect()->route('admin.show', $club);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
