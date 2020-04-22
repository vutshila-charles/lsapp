<!DOCTYPE html>
<html style="background-color:lightblue;">
    @extends('Layouts.Head')
    <title>Vutshila Airlines</title>
    <head>
        <style>
            
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

            </style>
    </head>
<body  style="background-color:lightblue;">
    <div class="header" style="background-color:lightblue;">
        <h1>Vutshila Airlines</h1>
        <p>We gatchu Covered In our Wings </p>
      </div>

      <div class="topnav">
        <a href="VutshilaAirlines">Flight</a>
        <a href="CheckInForm">Check-in</a>
        <a href="MyBookingForm">My Booking</a>
        
      </div>

      <div class="container" style="background-color:lightblue;">
          <form class="" action="{{URL::to('/destroy')}}" method="post" style="background-color:lightblue;">
            @csrf
            <div class="radio">
                <label><input type="radio" name="firtoption">Round-trip</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="secondoption">One-way</label>
                    </div>
                    <div class="form-group">
                        <label for="Departure"></label>
                    <input type="text" class="form-control" placeholder="Departure Airport" name=" Departure">
                    </div>
                    <div class="form-group">
                        <label for="Arival"></label>
                    <input type="text" class="form-control" placeholder="Arival Airport" name=" Destination">
                    </div>
                    <div class="form-group">
                        <label for="Departure">Departure Date</label>
                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" name=" DepartureDate">
                    </div>
                    <div class="form-group">
                        <label for="Arival">Arrival Date</label>
                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" name=" ArivalDate">
                    </div>
                    <button type="submit">Search</button>
                    

          </form>
      </div>
</body>

</html>