<?php #Script 3.5 -Claculator.blade.php
$page_title ='Widget Cost Calculator';
//include('/.includes/header.html');

if(isset($_GET['submitted']))
{
    //form validation
    if(is_numeric($_GET['quantity'])&& is_numeric($_GET['price'])&& is_numeric($_GET['tax']))
    {
        $taxrate =$_GET['tax']/100;
        $total = ($_GET['quantity'] *$_GET['price'])*($taxrate+1);
        
        echo '<h1 id="mainhead">Total Cost</h1>
        <p> The total cost of purchasing ' . $_GET['quantity'] . ' widget(s) at $' . number_format
            ($_GET['price'],2) . ' each, including a tax rate of ' . $_GET['tax'] .'%, is $' . number_format($total, 2). '.</p><p><br/></p>' ;
    }
    else{
        echo '<h1 id="mainhead">Error!</h1>
        <p class="error">Please enter valid quantity, price and tax.</p><p><br /></p>';
    }
}


?>


<h2> Widget Calculator</h2>
    <form action="{{URL::to('/Calculator')}}" method="GET">
        <p>Quantity:<input type="text" name="quantity" size="5" maxlength="10"/></p>
        <p>Price:<input type="text" name="price" size="5" maxlength="10"/></p>
        <p>Tax (%):<input type="text" name="tax" size="5" maxlength="10"/></p>
        <p>Quantity:<input type="submit" name="submit" value="Calculate"/></p>
        <input type="hidden" name ="submitted" value="TRUE" />
    </form>
    
   



