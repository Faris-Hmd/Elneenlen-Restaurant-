<?php echo ‘hay from your php’; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

  <head>
    <link rel="stylesheet" href="CSS/homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="JS/restrurant.js">
    </script>
<link rel="stylesheet" href="CSS/fontawesome-free-5.15.4-web/css/all.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>

    <title>Home</title>
  </head>
  <body>
     <div class="container">
	<div class="sideOne">
	<div class="nav-bar">
		<div class="nav-con">About Us</div>
		<div class="nav-con">Contact</div>
		<div class="nav-con">Servies</div>
		<div class="nav-con">Home</div>
	</div>
      <div class="txt">
        <h2>Welcome to </h2>
        <h1>Elneelen Restaurant</h1>
        <h4>Burger, pizza, Sandwich, Ice cream, Hot Drinks, Cold Drinks, Public Meals,
          Fish...etc </h4>
	      <div class="btn-order">
        <a href="HTML/menu.html">Order Now!</a>
      </div>

      </div>
	</div>
	<div class="sideTwo">
	<form id="signIn" netlify>
			<div class="signIn" onclick="showForm()">
		Sign In</div>
			<div class="signUp" onclick="showForm(1)">
		Sign Up</div><br>
	<i class="far fa-user fa-2x"></i>	<input type="text" placeholder="Username"><br>
	<i class="far fa-lock fa-2x"></i>
	<input type="password" placeholder="Password">
<input type="submit" value="Log in">

	</form>
	
		<form id="signUp" netlify>
			<div class="signIn" onclick="showForm()">
		Sign In</div>
			<div class="signUp" onclick="showForm(1)">
		Sign Up</div><br>
	<i class="far fa-user fa-2x"></i>	<input type="text" placeholder="Username"><br>
		<i class="far fa-envelope fa-2x"></i>	<input type="email" placeholder="Email"><br>
		<i class="far fa-credit-card fa-2x"></i>	<input type="number" placeholder="Credit Card"><br>
	<i class="far fa-lock fa-2x"></i>
	<input type="password" placeholder="Password">
		<input type="submit" value="Creat Now"><br>
	<div class="already">Already have acount? <span onclick="showForm()">Login</span></div>

	</form>
	</div>
	</div>

  </body>

</html>