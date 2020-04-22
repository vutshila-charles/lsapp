<!DOCTYPE html>
<html style="background-color:lightblue;">
    @extends('Layouts.Head')
    <title>Vutshila Airlines</title>
    <head>
        @extends('pages.Style')
    </head>

    <body  style="background-color:lightblue;">
        <div class="header" style="background-color:lightblue;">
            <h1>Vutshila Airlines</h1>
            <p>We gatchu Covered In our Wings </p>
          </div>
    
          <div class="topnav">
            
            <a href="CheckInForm">Check-in</a>
            <a href="MyBookingForm">My Booking</a>
            
          </div>
    
          <div class="container" style="background-color:lightblue;">
              <form class="" action="" method="get" style="background-color:lightblue;">
                @csrf
               
                        <div class="form-group">
                            <label for="Name(s)">Name</label>
                        <input type="text" class="form-control" placeholder="Passenger Name(s)" name=" PassengerName">
                        </div>

                        <div class="form-group">
                            <label for="Surname">Surname</label>
                        <input type="text" class="form-control" placeholder="Surname" name=" Surname">
                        </div>

                        <div class="form-group">
                            <label for="Date of Birth">Date of Birth</label>
                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" name=" Date of Birth">
                        </div>
                        <div class="form-group">
                            <label for="Mobile">Mobile</label>
                        <input type="text" class="form-control" placeholder="phone number" name=" Mobile">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                        <input type="text" class="form-control" placeholder="1234@email" name=" email">
                        </div>
                        <button type="submit">Continue</button>
                        
    
              </form>
          </div>
    </body>
    
    </html>