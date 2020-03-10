<!DOCTYPE html>
<html lang="en">
  
<head>
<title>Login</title>
@extends('Layouts.Head')
</head>
<body style="background-color:blue;">
<div class="container">
    <h2>Login</h2>
<form class="" action="{{URL::to('/login')}}" method="post" >

@csrf
<div class="form-group">
    <label for="username">Username:</label>
<input type="text" class="form-control" placeholder="Enter Username" name=" username">
</div>
<div class="form-group">
    <label for="password">Password:</label>
<input type="password"  class="form-control" placeholder="Enter password" name=" password">
</div>
<div class="checkbox">
<label><input type="checkbox" name="remembr">Remember Me</label>
</div>
<button type="submit">Login</button>
</form>
</div>
</body>



</html>