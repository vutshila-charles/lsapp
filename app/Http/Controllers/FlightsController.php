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
        $Name =$request-> input('PassengerName');
        $Surname =$request-> input('Surname');
        $Dateofbirth =$request-> input('DateofBirth');
        $mobile =$request-> input('Mobile');
        $email =$request-> input('email');
        $RefNo=substr($Name,0,3).substr($Surname,0,2).substr($mobile,4,7);

      DB::insert('insert into passengers(id,Names,Surname,Date,Mobile,Email,RefNum) values(?,?,?,?,?,?,?)',[null,$Name, $Surname, $Dateofbirth,$mobile,$email,$RefNo]);
      echo '<script>window.location.href="UserLogin";</script>';
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
        //echo "<h2>Flights not available choose different route</h2>";
        return view('pages.ErrorPage');
    }
 }


}
