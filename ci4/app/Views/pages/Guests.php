<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> [ GALAXY ] </title>
	<link rel="stylesheet" type="text/css" href = "css/feedback.css">
	<link rel="icon" type="image/x-icon" href="images/wootteofeedback.ico">
</head>
<body>

<center>
<br><br><br><br><br><br><br>
<div id="contents">
<?php
include("SQLTable.php");
$query = "SELECT name, email, website, comment, gender FROM jcuyugan_Stars";
$result = $conn->query($query);
?>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Website</th>
    <th>Comment</th>
    <th>Gender</th>
  </tr>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['website']; ?> </td>
   <td><?php echo $data['comment']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
 <tr>
 <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
  </table>
  </div>
  <p style="font-size: 20px; font-family: joane_stencilregular; color: white;" id="explore"><a href="Feedback" id="explore">Return to Register!</a></p>
</center>
</body>
</html>
