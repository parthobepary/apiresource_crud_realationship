<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Resources\CountryResource;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::with('cities')->get();
        return([
            // 'data'=> CountryResource::collection($country)
            'data'=>$country
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $country = Country::create($request->validated());
        return(['data'=> $country]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return (["data" => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update($request->validated());
        return  $country;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response()->noContent();
    }
}
