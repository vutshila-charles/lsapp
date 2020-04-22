<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\URL;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $flights = Flight::all();
        return view('flying.Flightindx')->with('flights',$flights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('flying.create');
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
    public function destroy(request $request)
 {
        //
         //echo "You have logged in";
    $departure =$request-> input('Departure');
    $destination =$request->input('Destination');
    
  $data= DB:: select('select * from Flights where Departure=? and Destination=?',[$departure,$destination]);
 if(count($data))
  {
    //echo '<script>window.location.href="DynamicWeb";</script>';
    return view('flying.Flightindx')->with('flights',$data);
    //return Flight::where('Departure','Cape Town')->get();

   }
    else
    {
        echo "Flights not available choose different route";
    }
 }


}
