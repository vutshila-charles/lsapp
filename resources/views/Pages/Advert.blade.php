<!DOCTYPE html>
<html>
    @extends('Layouts.Head')
    <title>Advert</title>
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
<body>

<div class="header">
  <h1>Vutshila Cars</h1>
  <p>Welcome friend let us help you choose the best car!!</p>
</div>

<div class="topnav">
  <a href="DynamicWeb">Home</a>
  <a href="Calculator">Check Affordability</a>
  <a href="DateForm">Check Date and time</a>
  <a href="HomePage" style="float:right">Logout</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Mercedez Benz</h2>
      <h5>Drive off in one of SA's most loved luxury sedan, The Mercedez Benz C-Class form 7999pm</h5>
      <div style="height:250px; width:200px;">
        <img alt="c classs" title="Mercedez Benz C Class" src="C200.jpg" />
    </div>
      <p>The Mercedes-Benz C-Class continues to prove itself, now with an even more elegant cabin, advanced features, cinematic display screen, and intuitive technology. Experience the world of superior comfort; one that relaxes, calms and in the same breathe, actively stimulates.</p>
      <p>
        Features included:

        AVANTGARDE interior
        AVANTGARDE exterior
        Ambient Lighting
        Parking package
        Mirror package 
      </p>
    </div>
    <div class="card" style="background-color:lightblue;">
      <h2>BMW</h2>
      <h5>AN ICON REINVENTED
        </h5>
        <p>The all-new BMW 3 Series
            At an affordable price of R8099 pm
        </p>
      <div style="height:250px; width:200px;">
        <img alt="3series" title="BMW" src="320i.jpg" />
    </div>
      
      <h6>BMW 320i Sport Launch Edition Automatic</h6>
      <p>Change is happening at unprecedented speed. And there's no better way to navigate it than in the most intelligent BMW 3 Series ever built;with sleek,precise and powerful lines,high-performance thrills and cutting-edge infotainment. Complete with high-end connectivity tailgate,Park Assit and more!!</p>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card" style="background-color:yellow;">
      <h2>About Us</h2>
      <div style="height:250px; width:250px;background-color:yellow;" >
        <img alt="Bossess" title="Board Members" src="Capture.png" />
    </div>
      <p>Vutshila Cars is a local automotive organization, which began as Charlee's automobile inventions, as early as 2017 lol!,We revolutionized the way people make their choices on choosing the best vehicle of their choice. Today the  company , shapes the future of mobility through premium, innovative mobility solutions supported by a comprehensive value chain and supported by responsible business ethics.</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow follow us</h3>
      <div class="topnav">
        <a href="">Facebook</a>
        
        
      </div>
      <p>Thanks in advance for following our page</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>