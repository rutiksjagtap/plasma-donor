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

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="icon" href="icon/reg.png" />
	<style type="text/css">

        label { display: inline-block; width: 130px; text-align: center; }

		ul{
			margin:0px;
			padding:0px;
			list-style: none;
		}
		ul li{
			float:left;
			width:220px;
			height:40px;
			background-color:#27ae60;
			opacity:.8;
			line-height: 40px;

			font-size:20px;
			margin-right:2px;
		}

		ul li a{
			text-decoration: none;
			color:black;
			text-transform: uppercase;
			font-weight: bold;
			display:block;
		}
		ul li a:hover{
			background-color:red;
		}
		ul li ul li{
			display:none;
		}
		ul li:hover ul li{
			display:block;
		}

		.reg{
			margin-left: 500px;;
		}


	</style>
</head>
<body>


	</ul>



<h1 align="center">Donor Registration</h1>
    <br />

	<form style="text-align:justify;font-size:18px;color:#FF5733" method="post"> 
<div class="reg">
	<label for="first" >Full Name:</label>
	<input id="first" type="text" name="name" placeholder="Full Name"  autofocus required />

	<br /><br />

	<label>Plasma Group:</label>

	<select name="plgroup" style="border-radius: 10px">
		<option>Select</option>
		<option>A+</option>
		<option>A-</option>
		<option>B+</option>
		<option>B-</option>
		<option>AB+</option>
		<option>AB-</option>
		<option>O+</option>
		<option>O-</option>

		</select>

	<br /><br />

	<label for="Gender">Gender:</label>
	<input type="radio" name="gender" value="Male"/>Male
	<input type="radio" name="gender" value="Female"/>Female
	<input type="radio" name="gender" value="Others"/>Others

	<br /><br />

	<label for="age">Age:</label>
	<input id="last" type="text" placeholder="" name="age" />
	<br /><br />
	<label for="weight">Weight:</label>
	<input id="weight" type="text" name="weight" placeholder="" />
	<br /> <br />

	<label>Last Donated:</label>
			<input id="date" name="date" type="date" value="2019-01-01">
		 <br /><br />



	<label for="phone">Phone Number:</label>
	<input id="phone" type="tel" name="number"placeholder="+91*****" required />

	<br /><br />

	<label for="address">Address:</label>
	<textarea name="address" id="address" placeholder="Please include your Division & City" cols="35" rows="2"></textarea>
	<br /><br />
	<br><br />
		<input name="sub" type="submit" value="Submit" style="background-color:#FEFE1C;color:black;font-size:18px;" />
		<input type="reset" value="Reset" style="background-color:#ff0000;color:white;font-size:18px;" />
	<br /><br />

</div>


<br>
	</form>
	<br />

    <?php
    if(isset($_POST['sub'])){
        $name=$_POST['name'];
        $plgroup=$_POST['plgroup'];
        $gender=@$_POST['gender'];
        $age=$_POST['age'];
        $weight=$_POST['weight'];
        $date=$_POST['date'];
        $number=$_POST['number'];
        $address=$_POST['address'];
				$id=uniqid();

        $q=$db->prepare("INSERT INTO donor(id,name,plgroup,gender,age,weight,date,number,address) VALUES (:id,:name,:plgroup,:gender,:age,:weight,:date,:number,:address)");

        $q->bindValue('id',$id);
        $q->bindValue('name',$name);
        $q->bindValue('plgroup',$plgroup);
        $q->bindValue('gender',$gender);
        $q->bindValue('age',$age);
        $q->bindValue('weight',$weight);
        $q->bindValue('date',$date);
        $q->bindValue('number',$number);
        $q->bindValue('address',$address);

        if($q->execute()){

	          echo "<script>alert('Registration Succesfull!')</script>";
        }
        else{
            echo "<script>alert('Registration Failed!')</script>";
        }
    }

    ?>

</body>
</html>
