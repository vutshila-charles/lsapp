<!DOCTYPE html>
<html lang="en">
    
<head>
<title>Registration </title>
@extends('Layouts.Head')
</head>
<body style="background-color:blue;">

<div class="container">
    <h2>Register</h2>
<form class="" action="{{URL::to('/registerr')}}" method="post" >
@csrf
<div class="form-group">
    <label for="username">Username:</label>
<input type="text" class="form-control" name=" username" placeholder="username" value="">

</div>
<div class="form-group">
    <label for="email">Email:</label>
<input type="text" class="form-control"  name="email" placeholder="email" value="">

</div>
<div class="form-group">
    <label for="password">Password:</label>
<input type="password"  class="form-control"  name=" password" placeholder="password" value="">
</div>
<button type="submit" name="button">Register</button>
</form>
</div>
<div id="footer"><p>&copy; Copyright by Reason Charles Hlongwane 2020 </p></div>
</body>



</html>