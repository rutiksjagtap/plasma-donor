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
<head>
<title>Donor List | Welcome</title>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
	margin: 5px;
  text-align: center;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 18px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #FF5733;
  color: white;
}
</style>
</head>
  <br>
  <div class="plasma">
    <label>Search The Donors</label>
    <br><br>
  <label>Plasma Group: </label>
<form class="" action="" method="post">
  <select name="plgroup">
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
    <br>
	<br>
	<p> Please Click On 'Submit' Button To search group wise donors</p>
    <br>
		<input name="sub" type="submit" value="Submit" style="background-color:#1797DB;font-size:18px;" />
		<input type="reset" value="Reset" style="background-color:#ff0000;color:white;font-size:18px;" />
    </form>
</div>
<br></br>

<?php
if(isset($_POST['sub']))
{
  $plgroup=@$_POST['plgroup'];

?>
	<h1 align="center">Donor List</h1>
	<br>
	<table id="customers" style="margin: 0px auto;">

	  <tr>
			<th>ID</th>
	    <th>Name</th>
	    <th>Plasma Group</th>
	    <th>Gender</th>
			<th>Age</th>
			<th>Weight</th>
			<th>Last Donated</th>
			<th>Phone Number</th>
			<th>Address</th>

	  </tr>
		<?php
		{
	

	$q=$db->query("SELECT * FROM donor WHERE plgroup='$plgroup' ");
	$count=0;
	while ($p=$q->fetch(PDO::FETCH_OBJ)) {
		?>
		<tr>
  
	    <?php

	      {
	      ?>
	      <td><?= $p->id; ?></td>
	      <td><?= $p->name; ?></td>
	      <td><?= $p->plgroup; ?></td>
	  	  <td><?= $p->gender; ?></td>
	  	  <td><?= $p->age; ?></td>
	  	  <td><?= $p->weight; ?></td>
	      <td><?= $p->date; ?></td>
	      <td><?= $p->number; ?></td>
	    	<td><?= $p->address; ?></td>

	  <?php

	    }

	    ?>
	  </tr>
		<?php
}
	}
		 ?>
	</table>
	<?php

	}

 ?>

</body>
</html>
