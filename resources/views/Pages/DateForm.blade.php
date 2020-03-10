<?php
//@extends('Layouts.Head')
function make_calendar_pulldowns()
{

  $months = array(1 =>'January','February','March','April','May','June','July',
  'August','September','October','November','December');

 echo '<select name="month">';
    foreach ($months as $key => $value) 
    {
       
        echo "<option value=\"$key\"> $value</option>\n";
           

    }

 echo '</select>';//end month selection

 echo '<select name ="day">';
    for($day=1;$day <= 31;$day++)
    {
        echo "<option value=\"$day\">$day</option>\n";
            

    }

 echo '</select>';

 echo '<select name="year">';

     for($year = 2020; $year <= 2050;$year++)
      {
   
     echo "<option value=\"$year\">$year</option>\n";

     }

 echo '</select>';
}

 echo '<h1 id="mainhead">Select a date:</h1>
 <p><br/></p><form action="DateForm" method="GET">';
    
    

        $dates= getdate();
        make_calendar_pulldowns($dates['mon'],$dates['mday'],$dates['year']);
 echo '</form><p><br /><p>';

    echo '<p> Today is ' .date('l'). '.The Current time is '.date('g:i a').'.</p>';

?> 