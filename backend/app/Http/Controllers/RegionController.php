<?php

namespace App\Http\Controllers;

use App\Exceptions\RegionNotBelongsToUser;
use App\Http\Requests\RegionRequest;
use App\Http\Resources\Region\RegionCollection;
use App\Http\Resources\Region\RegionResource;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegionController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegionCollection::collection(Region::paginate(20));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegionRequest $request)
    {
        $region = new Region;
        $region->name = $request->name;
        $region->save();
        return response([
            'data' => new RegionResource($region)


        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return new RegionResource($region);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\region $region
     * @return \Illuminate\Http\Response
     */
    public function edit(region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\region $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, region $region)
    {
        $this->RegionUserCheck($region);
        $region->update($request->all());
        return response([
            'data' => new RegionResource($region)

        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\region $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(region $region)
    {
        $region->delete();
        return response(null, 204);
    }

    public function RegionUserCheck($region)
    {
        if (Auth::id() !== $region->user_id) {
            throw new RegionNotBelongsToUser;
        }
    }
}
