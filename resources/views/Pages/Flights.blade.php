<!DOCTYPE html>
<html>

    <title>Flights</title>
    @extends('Layouts.Head')
    <head>
        @extends('pages.Style')  
    </head>

    <body style="background-color:lightblue;">
        <div class="header" style="background-color:lightblue;">
                <h1>Find a low flight fare</h1>
                <p>Here are the sheapest flights for you to explore the country with us</p>
              </div>
              
                  <form action="{{URL::to('/VutshilaAirlines')}}">
                    <div class="center">
                    <button type="submit" >Edit Search</button>
                    </div>
                  </form>
                <div class="wrapper">
                    <div class="slihtCenter">
                    <h2>Departing Flights</h2>
                    </div>
                    <div class="Table">
                    <table>
                        
                        <tr>
                            <th>Flight(s)</th>
                            <th>Depature Airport</th>
                            <th> Destination Airport</th>
                            <th> Date </th>
                            <th> Depature Time </th>
                            <th>Arival Time</th>
                            <th>Price</th>
                        </tr>
                        
                    </table>
                    </div>

                </div>
            

                  
              
    </body>
</html>