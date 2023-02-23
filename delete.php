<?php
include('header/header.php');
include('header/connection.php');
include('header/navadmin.php');
?>

<!DOCTYPE html>
<head>
<title>Delete Record | Welcome</title>
  <br>
  <div class="type">
    <label>Delete a Record</label>
    <br><br>
  <label>Select Donor OR Recipient:</label>
<form class="" action="" method="post">
  <select name="dp">
    <option>Select</option>
    <option>Donor</option>
    <option>Recipient</option>
    </select>
    <br>
      <label>Enter ID of Donor OR Recipient:</label>
      <br>
    <input type="text" name="id" placeholder="Enter ID" style="font-size: 22px; width: 220px; height: 40px; border-radius: 10px;">
      <input name="sub" type="submit" value="Delete" style="font-weight:bold;font-size: 12px; width: 90px; height: 35px;border-radius:10px;background-color:#F9054B;font-size:18px;">

    </form>
</div>
<br></br>

<?php
if(isset($_POST['sub']))
{
  $dp=@$_POST['dp'];
  $id=$_POST['id'];
  $count=0;
if($dp=="Donor"){
    $q=$db->prepare("DELETE FROM `donor` WHERE id='$id'");

    $count=$db->query("SELECT * FROM donor WHERE id='$id'")->fetchColumn();
}
else {
    $q=$db->prepare("DELETE FROM `recipient` WHERE id='$id'");
    $count=$db->query("SELECT * FROM recipient WHERE id='$id'")->fetchColumn();
}

          if($q->execute() && $count!=0){
              echo "<script>alert('Deleted Selected Data')</script>";
          }
          else{
              echo "<script>alert('Deletion Failed!')</script>";
          }
}
 ?>
</body>
</html>
