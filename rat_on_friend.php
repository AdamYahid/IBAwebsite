<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="includes/general_style.css">
		<link rel="stylesheet" type="text/css" href="includes/header_style.css">
		<link rel="stylesheet" type="text/css" href="includes/sidebar_nav_style.css">
		<link rel="stylesheet" type="text/css" href="includes/index_style.css">
		<link rel="stylesheet" type="text/css" href="includes/rat_on_friend_style.css">

		<meta charset="utf-8">
		<title>דף הלשנה</title>
	</head>
	<body id="ratOnFriendPage">
		<nav id="headerNav">
			<ul>
				<li><a href="index.html">בית</a></li>
				<li><a href="#">אודות</a></li>
				<li><a href="#">אזור אישי</a></li>
				<li><a href="#">שאלות ותשובות</a></li>
				<li><a href="#">חדשות ועדכונים</a></li>
				<li><a href="#">צור קשר</a></li>
			</ul>
		</nav>
	<div id="wrapper">
		<header>
			<a id="logo" href="#"></a>
			<section id="titleArea"><h2>ברוכים הבאים<br/>לאתר רשות השידור אגף הגביה</h2></section>
			<section id="actionArea">
				<section id="signupLogin">
					<label id="loginLabel"><a href="#">רישום</a> | <a href="#" onclick="loginDummy();">התחברות</a></label>
					<label id="loggedinLabel">שלום, בן ישראלי | <a href="#" onclick="loginDummy();">התנתק</a></label>
				</section>
				<section id="siteSearch">
					<form action="#">
						<input type="submit" value=""/>
						<input type="text" placeholder="חיפוש"/>
					</form>
				</section>
			</section>
			<div class="clear"></div>
		</header>
		<section id="breadCrumbs"></section>
		<aside id="mainFlowNav">
			<label id="startProgressHint">(לחץ <a href="personal_details.html">כאן</a> לתחילת תהליך)</label>
			<nav>
				<ul>
					<li>
						<section class="mainFlowNavContainer">
							<a href="personal_details.html" id="personalSpace" class="mainFlowNavBox" ></a>
							<label>אזור אישי</label>
						<section>
					</li>
					<li>
						<section class="mainFlowNavContainer">
							<a href="#" id="calcStep" class="mainFlowNavBox"></a>
							<label>חשב תשלום</label>
						<section>
					</li>
					<li>
						<section class="mainFlowNavContainer">
							<a href="#" id="payStep" class="mainFlowNavBox"></a>
							<label>שלם</label>
						<section>
					</li>
					<li>
						<section class="mainFlowNavContainer">
							<a href="#" id="leaveStep" class="mainFlowNavBox"></a>
							<label>סיים תהליך והסתלק</label>
						<section>
					</li>
				</ul>
			</nav>
		</aside>
		<main>
			<section class="rattedOnFriend" dir="rtl">

				<?php

				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "shaming";

				$name = $_POST["name"];
				$reason = $_POST["reason"];
				$score = $_POST["score"];

				$upload_dir = 'assets/shaming_people/pending/';
				$upload_picture = $upload_dir . basename($_FILES['picture']['name']);

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				$conn->set_charset("utf8");
				// Check connection
				if ($conn->connect_error) 
				{
				    die("Connection failed: " . $conn->connect_error);
				} 

				if ( move_uploaded_file($_FILES['picture']['tmp_name'], $upload_picture) ) 
				{
				  echo "<h2 dir='rtl'>תודה רבה לך! ניפגש בגיהינום!</h2><a href='shaming_list.php'>לחץ כאן להלשין על עוד חבר!</a><br><img src='assets/see_you_in_hell.png'>";
				  mysqli_query($conn, "INSERT INTO pending_list (`name`, `reason`, `score`, `picture_path`) VALUES ('".$name."', '".$reason."', '".$score."', '".$upload_picture."')");
				} 
				else 
				{
				   echo "<h1>העלאת תמונה נכשלה, אנא נסה שוב</h1><br><a href='shaming_list.php' id='backToShaming'>חזור לעמוד הקודם</a>";
				}

				$conn->close();

				?>
			</section>

		</main>	
		<div class="clear"></div>
	</div>
		
	</body>
</html>