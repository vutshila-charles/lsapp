<html>
<head>
<title>Login Form </title>
</head>
<body style="background-color:blue;">


<form class="" action="{{URL::to('/registerr')}}" method="post" >
@csrf
<div>
<input type="text" name=" username" placeholder="username" value="">
<br><br>
</div>
<input type="text" name="email" placeholder="email" value="">
<br><br>
<input type="password" name=" password" placeholder="password" value="">
<br><br>
<button type="submit" name="button">Register</button>
</form>
</body>



</html>