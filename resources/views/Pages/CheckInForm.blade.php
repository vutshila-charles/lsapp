<!DOCTYPE html>
<html style="background-color:lightblue;">

    
    <title>Check-In</title>

    @extends('Layouts.Head')
    
    <head>
        @extends('pages.Style')  
    </head>
    <body style="background-color:lightblue;">
<div class="header" style="background-color:lightblue;">
        <h1>Vutshila Airlines</h1>
        <p>We gatchu Covered In our Wings </p>
      </div>

      <div class="topnav" >
        <a href="VutshilaAirlines">Flight</a>
        <a href="CheckInForm">Check-in</a>
        <a href="MyBookingForm">My Booking</a>
        
      </div>

      <div class="container" style="background-color:lightblue;">
          <form class="" action="{{URL::to('/')}}" method="post" style="background-color:lightblue;">
            <div class="form-group">
                
            <input type="text" class="form-control" placeholder="Booking reference" name=" reference">
            </div>
            <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Surname" name=" Surname">
                </div>

                <button type="submit">Continue</button>
          </form>
      </div>


    </body>

</html>