<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="includes/general_style.css">
	<link rel="stylesheet" type="text/css" href="includes/header_style.css">
	<link rel="stylesheet" type="text/css" href="includes/sidebar_nav_style.css">
	<link rel="stylesheet" type="text/css" href="includes/index_style.css">
	<link rel="stylesheet" type="text/css" href="includes/shaming_list_style.css">
	<title>רשימת הבושה הגדולה</title>
</head>
<body>
	<nav id="headerNav">
				<ul>
					<li><a href="index.html">בית</a></li>
					<li><a href="#">אודות</a></li>
					<li><a href="#">אזור אישי</a></li>
					<li><a href="#">שאלות ותשובות</a></li>
					<li><a href="#">חדשות ועדכונים</a></li>
					<li><a href="#">צור קשר</a></li>
					<li><a href="#">רשימת הבושה הגדולה</a></li>
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
				<section class="mainShaming" dir="rtl">
					<?php

					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "shaming";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					$conn->set_charset("utf8");
					// Check connection
					if ($conn->connect_error) 
					{
					    die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT * FROM list";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) 
					{
						echo "<table id='shamingTable' dir='rtl'><tr><th>שם</th><th>עבירה</th><th>ניקוד</th><th>תמונה</th></tr>";
					    // output data of each row
					    while( $row = $result->fetch_assoc() ) 
					    {
					        echo "<tr><td>".$row["name"]."</td><td>".$row["reason"]."</td><td>".$row["score"] ."</td><td><img src='".$row["picture_path"]."'></td></tr>";
					    }
					    echo "</table><br>";
					} 
					else 
					{
					    echo "0 results";
					}
					$conn->close();

					?>
					<h1 dir="rtl">הלשן על חבריך עכשיו!</h1><br>
					<form enctype="multipart/form-data" action="rat_on_friend.php" dir="rtl" method="POST">

						<label>שם העבריין:</label>
						<input type="text" name="name"><br><br>

						<label>סיבת העבירה:</label>
						<input type="text" name="reason">&nbsp;&nbsp;

						<label>מידת עבריינות מ-1 עד 20:</label>
						<input type="number" name="score" min="1" max="20"><br><br>

						<label>תמונת העבריין:</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="10000"/>
						<input type="file" name="picture"></label><br><br>

						<input type="submit" value="הלשן עכשיו!">
					</form>
				</section>

			</main>	
			<div class="clear"></div>
			<footer></footer>
		</div>
	
</body>
</html>