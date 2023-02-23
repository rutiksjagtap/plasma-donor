<?php
include('header/header.php');
include('header/navadmin.php');?>
<!DOCTYPE html>
<html>
<body  style="background-image:url('img/admloginback.jpg');  background-repeat: no-repeat;">
<section id="boxes">
<div class="container">
  <div class="box">
    <img src="./img/donate.png" ALT="some text" WIDTH=180 HEIGHT=160>

      <ul style="list-style:none;">
          <li><a href="reg.php">Add Donor</a></li>
        </ul>

  </div>
  <div class="box">
    <img src="./img/back.png" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
    <li><a href="plasma.php">Search for Plasma</a></li>
  </ul>
  </div>
  <div class="box">
    <img src="./img/delete.png" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
  <li><a href="delete.php">Delete Donor/Recipient</a></li>
</ul>
  </div>
<br><br><br>
<div class="box">
  <img src="./img/patientlist.png" ALT="some text" WIDTH=190 HEIGHT=170>
  <ul style="list-style:none;">
<li><a href="reg2.php">Add Recipient</a></li>
</ul>
  </div>
	<div class="box">
    <img src="./img/donorl.png" ALT="some text" WIDTH=190 HEIGHT=170>
  	<ul style="list-style:none;">
  <li><a href="donorlist.php">Donor List</a></li>
	</ul>
	  </div>
    <div class="box">
  		<img src="./img/patientlist.png" ALT="some text" WIDTH=190 HEIGHT=170>
  		<ul style="list-style:none;">
  	<li><a href="recipientlist.php">Recipient List</a></li>
  	</ul>
  	  </div>
      <br><br>
</div>


</section>
</body>
</html>
