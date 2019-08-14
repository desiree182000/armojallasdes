<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="icon" type="image/ico" href="title.jpg"/>
	<style type="text/css">
	html,
	body{font-family: courier new;}
	form{border: 3px solid #f1f1f1;}

	input[type=text], input[type=password]{
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	button{
		background-color: #af4c4e;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	button:hover{
		opacity: 0.8;
	}
	.cancelbtn{
		width: auto;
		padding:10px 18px;
		background-color: #f44336;
	}
	.imgcontainer{
		text-align: center;
		margin: 24px 0 12px 0;
	}
	img.avatar{
		width: 40%;
		border-radius: 50%;
	}
	.container{
		padding: 16px;
	}
	span.psw{
		float:right;
		padding-top: 16px;
	}
	a{
		text-decoration: none;
	}
	/*change*/
	@media screen and (max-width: 300px){
		span.psw{
			display:block;
			float: none;
		}
		.cancelbtn{
			width: 100%;
		}
	}
	
</style>

</head>
<body>
<main>
	<h1 align="center"> Login </h1>
	<form action="/log in.html">
		<div class="imgcontainer">
			<img src="title.jpg" alt="Avatar" class="Avatar">
		</div>
	<div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<button type="submit"><a href="home page.html" target="self">Login</button></a>
		<label>
			<input type="checkbox" checked="checked" name="remember">Remember me</label>
		</div>

		<div class="container" style="background-color: #f1f1f1">
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="forgotpassword.html">password?</a></span>
			<span class="signup"><p align="center">Don't have an account?&nbsp;<a href="signup.html">Sign Up</a></span></p>
		</div>
	</form>


</body>
</html>
