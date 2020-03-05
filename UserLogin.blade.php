<html>
<head>
<title>Login Form </title>
</head>
<body style="background-color:blue;">


<form class="" action="{{URL::to('/login')}}" method="post" >

@csrf
<div>
Username:<input type="text" name=" username"><br>
</div>
<div class="form-group">
Password:<input type="password" name=" password"><br>
</div>
<button type="submit">Login</button>
</form>
</body>



</html>