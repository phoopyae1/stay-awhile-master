<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentalProperty as property;
use App\User;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property-register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new User();
      $user->email = "phonemyatkhine88@gmail.com";
      $user->password =  Hash::make("UIT122869np!");
      $user->first_name = "Phone Myat";
      $user->last_name = "Khine";
      $user->DOB = "2000-03-16";
      $user->phone_number = "09250074453";
      $user->city = "Yangon";
      $user->country ="Myanmar";
      $user->nrc_num = "12/TaMaNa(N)122869";
      $user->gender = "Male";
      $user->save();
      
      $property = new property();
      $property->host_id = 1;
      $property->category = $request->category;
      $property->type = $request->type;
      $property->privacy = $request->privacy;
      $property->setup = $request->setup;
      $property->ownership = $request->onwership;
      $property->guest_limitation = $request->guest_limitation;
      $property->bathroom_count = $request->bathroom_count;
      $property->bathroom_type = $request->bathroom_type;
      $property->city = $request->city;
      $property->country = $request->country;
      $property->street = $request->street;
      $property->number = $request->number;
      $property->zip_code = $request->zip_code;
      $property->price_per_month = $request->price_per_month;
      $property->price_per_day = $request->price_per_day;
      $property->rating = 0;
      $property->weight = 0;
      $property->reports = 0;
      $property->status = true;

      $property->save();
      dd($property);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
