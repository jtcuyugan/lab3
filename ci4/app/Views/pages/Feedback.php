<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> [ FEEDBACK ] </title>
	<?php echo link_tag('css/feedback.css'); ?>
	<link rel="icon" type="image/x-icon" href="../images/wootteofeedback.ico">
</head>
<body>
<div id="navbar" id="top">
	<div id="pageselector">
		<center>
			<ul>
				<li id="buttons"><a href="../index" id="buttons">HOME</a></li>
				<li id="buttons"><a href="Leo" id="buttons">SUN</a></li>
				<li id="buttons"><a href="Gallery" id="logo"><img src="images/wootteogallery.png" id="logo" padding="none"></img></a></li>
				<li id="buttons"><a href="Sagi" id="buttons">MOON</a></li>
				<li id="buttons"><a href="Libra" id="buttons">RISING</a></li>
			</ul>
		</center>
		<hr id="header">
	</div>
</div>

<br><br><br><br><br>
<div id="contents">
    <br>
		<center>
		<?php
			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			$name = $email = $gender = $comment = $website = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "The Star must be named.";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed in this part of the galaxy.";
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Coordinates are required (Email)";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid coordinate format";
				}
			}
				
			if (empty($_POST["website"])) {
				$websiteErr = "Reference Needed (Website)";
			} else {
				$website = test_input($_POST["website"]);
			}

			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
			}

			if (empty($_POST["gender"])) {
				$genderErr = "Identity is required";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		}

		function test_input($data)
		{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
			?>

			<p style="font-size: 50px; font-family: joane_stencilregular; color: white;" id="lobbytext">Register a Star!</p>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;"><span class="error">* This field is required</span></p>

			<p style="font-size: 20; font-family: joane_stencilregular;" id="explore"><a href="Guests" id="explore">Explore the Created Galaxy</a></p>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error" style="font-size: 20px; font-family: TimesNewRoman; color: white;">* <?php echo $nameErr;?></span></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Coordinates: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Station: <input type="text" name="website" value="<?php echo $website;?>">
			<span class="error" style="font-size: 20px; font-family: TimesNewRoman; color: white;">* <?php echo $websiteErr;?></span></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Message: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Identity:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
			<span class="error">* <?php echo $genderErr;?></span></p>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
			</form>
		
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				$servername = "192.168.150.213";
				$username = "webprogmi212";
				$password = "b3ntRhino98";
				$dbname = "webprogmi212";
			
				// Create connection
				$con = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($con->connect_error) {
					die("Connection failed: " . $con->connect_error);
					}

			// database insert SQL code
			$sql = "INSERT INTO jcuyugan_Stars (name, email, website, comment, gender, reg_date) VALUES (NULL, '$name', '$email', '$website', '$comment', '$gender', current_timestamp())";
			
			if ($con->query($sql) === TRUE) {
				echo "<br><p style='font-size: 20px; font-family: joane_stencilregular; color: white;' id='restext'>Star Successfully Created!</p><br>";
        		exit;
			} else{
				echo "<br><p style='font-size: 20px; font-family: joane_stencilregular; color: white;' id='restext'>Failed to Register Star (Try Again!)</p><br>";
				mysqli_error($con);
			}
			// Close connection
			$con->close();
		}
			?>
			<br><br><br>
		</center>
    </div>
    </body>
</html>