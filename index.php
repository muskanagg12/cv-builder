<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
    
<style>
body {
  //padding: 25px;
  background-image: url("images/background.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
body {margin:0;}
.center{
	color:black;
	font-family:serif;
	text-align: center;
	font-size: 50px;
  font-style:oblique;
  font-weight: bolder;
}
.button {
  background-color:aliceblue;
  padding: 15px 30px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  color: darkblue;
  border: 2px solid grey;
  font-family: serif;
  font-style:normal;
}

div {
  height: 400px;
  width: 100%;
  position: center;
  color:azure;
font-family: serif;
font-size: 18px;
}
    
ul
{
    text-align: right; 
    font-family: serif;
    color: beige;
}
    
.link
    {
        color: azure;
    }
    
</style>
<body>
   	<div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <ul><a class="link" href="signup.html">Sign Up</a></ul>
               </ul>
         </div>
        
   	<center>
        <h1 class="center"><b>CV</b></h1>
        <br>
        <br>
        <br>
        <br>
        <br>
   	<center>   
    <div class="container">
    <label for="uname">Username</label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <br>
    <label for="psw">Password</label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
      <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
        <br>
        <br>
   <span class="psw"><a class="link" href="wrong_pass.html">Forgot password?</a></span>
  </div>
   </center>
</body>
</html>
