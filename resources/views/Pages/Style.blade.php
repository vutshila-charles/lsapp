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
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: blue;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}

    /*aligning*/
    .left{float:left;}
    .right{float: right;}
    .center{margin-left:50%;}
    .slihtCenter{margin-left:43%;}

    /*my table */
     .Table{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: red;
  color: white;
  border: 1px solid black;
  padding: 8px;
  font-family: monospace;
  border-collapse: separate;
  width: 100%;
  tr:nth-child(even){background-color: #f2f2f2;}
  tr:hover {background-color: #ddd;}
}
                </style>