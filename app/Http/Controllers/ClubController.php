<?php

namespace App\Http\Controllers;

use App\Http\Requests\SortRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateClubRequest;
use App\Http\Resources\ClubResource;
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
    public function index(SortRequest $request)
    {
        // Sorts clubs from filter selected by user
        $request->validated();
        
        $sortBy = $request->getSort();
        $direction = $request->getSortDirection();
        $clubs = Club::SelectRaw('* , occupancy / capacity as ratio')->orderBy($sortBy, $direction)->paginate(9);
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

    public function showAdmin(Club $club)
    {
        // #### HOME PAGE FOR ADMINS #### 
        $user = Auth::user();
        $club = Auth::user()->club;
        $events = $club->events;

        return view('admin.show' , compact('club', 'events', 'user'));
    }

    // #### HOME PAGE FOR ADMINS #### 
    public function showClicker()
    {
        $club = Auth::user()->club;
        return view('admin.showClicker', compact('club'));
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
    public function update(UpdateClubRequest $request, Club $club)
    {
        // Function updates club details from Admin panel
        $club->update($request->validated());
        return redirect()->route('admin.show', $club);
    }

    public function updateOccupancy(Request $request, Club $club)
    {
        // Update clubs current occupancy from API
        ######## FEELS LIKE THIS NEEDS SOME SORT OF SECURITY??? #########
        if ($request->message) {
            return $request->message;
        }
        $club->update(['occupancy' => $request->occupancy]);
        return $club;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        // Function to delete club
        $club->delete();
    }

    public function getClubs(Request $request)
    {
        // dynamic search function that returns clubs like the search input
        $params = $request->validate([
            'search' => 'required|min:1'
        ]);

        $clubs = Club::where('name', 'like' , $params['search'] . '%')
            ->orderBy('name')
            ->limit(5)
            ->get();

        return ClubResource::collection($clubs);
    }

    public function getNearBy() {
        //provides HTTP response for nearby clubs call (just shows the correct blade temp)
        return view('clubs.near-by');
    }


    public function getClubsInRadius(Request $request) {
        // Function that returns clubs within 2km

        // TEST DATA - MY HOME COORDS IN BRIS
        // 51.45379047350099, -2.589045670526551

        // THE CODE FOR THE USERS LIVE LOCATION
        // $request->lat, $request->lng

        $clubs = Club::forClubsNear(51.45379047350099, -2.589045670526551)->get();

        return $clubs;
    }
}

