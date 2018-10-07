<?php

namespace App\Http\Controllers;

use App\Http\Resources\Level\LevelCollection;
use App\Http\Resources\Level\LevelResource;
use App\Models\Country;
use App\Models\Region;
use App\Models\Level\Level;
use Illuminate\Http\Request;
use App\Http\Requests\LevelRequest;


class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($region_id = null, $country_id = null, Request $request)
    {
        $level_id = $request->id;

        // return level only level one
        if ($level_id == null) {
            $country = Country::find($country_id);
            $levels = $country->levels()->where('level_id', $level_id)->get();

        } else {
            $level = Level::find($level_id);
            $levels = $level->levels()->where('level_id', $level_id)->get();

        }

        return LevelCollection::collection($levels);

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
    public function store(LevelRequest $request,$region,$country,$id)
    {
        dd($request,$region,$country);
        $level = new Level($request->all());
        $country->Level()->save($level);
        return response([
            'data' => new LevelResource($level)

        ], 201);    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Level\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show($region_id, $country_id, $level_id)
    {
        $level = Level::find($level_id);

        return new LevelResource($level);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Level\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Level\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Level\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
    }
}
