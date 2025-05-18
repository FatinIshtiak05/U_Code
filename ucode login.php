<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<style>

body {
  font-family: Helvetica;
  margin: 0;
}
a {
  text-decoration: none;
  color: #000;
}
.site-header { 
  border-bottom: 1px solid #ccc;
  padding: .5em 1em;
}

.site-header::after {
  content: "";
  display: table;
  clear: both;
}

.site-identity {
  float: left;
}



.site-identity img {
  max-width: 175px;
  float: left;
  margin: -40px 10px -45px 10px;
}

.site-navigation {
  float: right;
  font-size: 25px

  
  
}

.site-navigation ul, li {
  margin: 0; 
  padding: 0;
}

.site-navigation li {
  display: inline-block;
  margin: 0.2em 2em 0.5em 1em;
}
a:hover {
  background-color: #A6A6A6;
}
  
.button {
  background-color:#643B70 ;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 10px 10px;
  cursor: pointer;
  
  
}

.button {border-radius: 5px;}
.button:hover {
  background-color: #A6A6A6;
}

.footer {
  text-align: center;
  padding: 0.1px ;
  background-color:#643B70 ;
  color: white; 
  margin: 35em 0em 0em 0em;
}

.column {
   
  float: left;
  width: 98%;
  padding: 15px;
}


.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 870px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: red;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



/* Number text (1/3 etc) */
.numbertext {
  color: red;
  font-size: 12px;
  font-weight: bold;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


form {border: 6px solid #643B70;
width: 40% ;
height: 50%;
margin: 17px 30px 0px 500px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #643B70;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 30px;
  border-radius: 50%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  
}

span.psw {
  float: right;
  padding-top: 0px;
 
 
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
     
  }
  
}


</style>




</head>
<body>

<div class="site-header">
  <div class="site-identity">
    <a href="#"><img src="Code for life (2).png" alt="Site Name" /></a>
    
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="#" style="color:#643B70;"><b>Leaderboard</b></a></li> 
      <li><a href="#" style="color:#643B70;"><b>Sign Up</b></a></li> 
      <li>
         <a href="ucode.php" class="button"><b>Go Back</b></a> 
      </li> 
    </ul>
  </nav>
</div>


<div class="column">
<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="Login_logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter UIU Id." name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
        
    <button type="submit">Login</button>

    <div class="container">
    <span class="psw">Forgot <a href="#" style="color:Red;">password?</a></span>
    </div>
  </div>

  
    
  
</form>






</div>


<div class="footer">
        <p>UCODE</p>
        <p>Copyright © 2022 All rights reserved</p>
        <p>Powered By <b>Illusion</b></p>
</div>

  
</body>
</html>