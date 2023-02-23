<?php
session_start();
include('header/header.php');
include('header/connection.php');
if(isset($_SESSION['loggedin'])==true){
	include('header/navadmin.php');
}
else {
	include('header/navuser.php');
}
?>
<!DOCTYPE html>
<html>

<section id="" style="background-image:url('img/background.jpg');  background-repeat: no-repeat; background-size: 100% 100%;">
<div class="">
  <div class=""align="center">
    <img src="./img/vision.png" ALT="some text" WIDTH=180 HEIGHT=160>
      <ul style="list-style:none;">
          <li><a href=""><u>Our Vision</u></a></li>
        </ul>
<p> To Make The World A Safer Place  </p>
  </div>
  <br><br>
  <div class=""align="center">
    <img src="./img/target.png" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
    <li><a href=""><u>Our Goal</u></a></li>
    <p>To Connect As Many Donor And Recievers As Possible </p>
  </ul>
  </div>
  <br><br>
  <div class=""align="center">
    <img src="./img/mission.png" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
  <li><a href=""><u>Our Mission</u></a></li>
  <p>To Make India A Covid Free Country</p>
</ul>
  </div>

      <br><br>
</div>
</section>
</html>
