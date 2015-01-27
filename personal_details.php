<?php
	$servername = "182.50.131.14";//"localhost";
	$username = "mtastudDB1";//"root";
	$password = "mtastudDB1!";//"root";
	$dbname = "mtastudDB1";//"shaming";

	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 

	if (isset($_POST["disputeFormToken"])) //Add row to db if page was entered via form
	{
		$uid = 12345; //Mock UID
		$date = date('Y-m-d');
		$disputeNumber = $_POST["disputeNumber"];
		$disputeText = $_POST["disputeBody"];

		$conn->query("INSERT INTO Disputes 
								VALUES ('".$uid."','".$date."','".$disputeNumber."','".$disputeText."')");
	}

	$sql = "SELECT * FROM Disputes";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="includes/general_style.css">
		<link rel="stylesheet" type="text/css" href="includes/header_style.css">
		<link rel="stylesheet" type="text/css" href="includes/sidebar_nav_style.css">
		<link rel="stylesheet" type="text/css" href="includes/main_area_style.css">
		<link rel="stylesheet" type="text/css" href="includes/tabbed_layout.css">
		<link rel="stylesheet" type="text/css" href="includes/table_style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="true" />
		<title>רשות השידור אגף הגביה</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="includes/bootbox.min.js"></script>
		<script src="includes/complaintSubmitEventHandler.js"></script>
	</head>
	<body id="personalDetailsPage">
		<nav id="headerNav">
				<ul>
					<li><a href="index.html">בית</a></li>
					<li><a href="#">אודות</a></li>
					<li><a href="#">אזור אישי</a></li>
					<li><a href="#">שאלות ותשובות</a></li>
					<li><a href="#">חדשות ועדכונים</a></li>
					<li><a href="#">צור קשר</a></li>
					<li><a href="shaming_list.php">רשימת הבושה הגדולה</a></li>
				</ul>
			</nav>
		<div id="wrapper">
			<header>
				<section id="mobileHeader">
					<label>שלום, בן</label>
					<a id="logoMobile" href="#"></a>
					<label>רשות השידור אגף הגבייה</label>
					<section id="menuBTN"></section>
					<div class="clear"></div>
				</section>
				<section id="desktopHeader">
					<a id="logo" href="#"></a>
					<section id="titleArea"><h2>רשות השידור אגף הגביה</h2></section>
					<section id="actionArea">
						<section id="signupLogin">
							<label id="loggedinLabel">שלום, בן ישראלי | <a href="index.html">התנתק</a></label>
						</section>
						<section id="siteSearch">
							<form action="#">
								<input type="submit" value=""/>
								<input type="text" placeholder="חיפוש"/>
							</form>
						</section>
					</section>
					<div class="clear"></div>
				</section>
			</header>
			<section id="breadCrumbs">
				<ul>
					<li><a href="index.html">בית</a></li>
					<li>&gt;</li>
					<li><a href="#">אזור אישי</a></li>
					<li>&gt;</li>
					<li>הסטורית תשלומים</li>
				</ul>
			</section>
			<aside id="mainFlowNav">
				<nav>
					<ul>
						<li>
							<section class="mainFlowNavContainer">
								<a href="personal_details.php" id="personalSpace" class="mainFlowNavBox" ></a>
								<label>אזור אישי</label>
							<section>
						</li>
						<li>
							<section class="mainFlowNavContainer">
								<a href="calc_page.html" id="calcStep" class="mainFlowNavBox"></a>
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
				<div>
					<ul id="tabBar">
						<li id="personalDetailsTab" class="selectedTab" data-content="personalDetailsContent">פרטים אישיים</li>
						<li id="paymentHistoryTab" data-content="paymentHistoryContent">הסטוריית תשלומים</li>
						<li id="disputesHistoryTab" data-content="disputesHistoryContent">ערעורים</li>
					</ul>
				</div>
				<section id="tabsContainer">
					<section id="personalDetailsContent" class="tabContent">
						<h2>פרטים אישיים</h2>
						<label class="userdata">שם:בן ישראלי</label>
						<label class="userdata">תז:12355789</label>
						<label class="userdata">מייל:beni123@gmail.com</label>
						<label class="userdata">מספר טלפון:052-3455432</label>
						<label class="userdata">מין:זכר</label>
						<label class="userdata">סטטוס משפחתי:נשוי</label>
						<label class="userdata">גיל:45</label>
						<label class="userdata">כתובת:השוטטות 25</label>
						<label class="userdata">עיר:ראשון לציון</label>
						<label class="userdata">מיקוד:756321</label>
						<a id="editBTN" href="#">ערוך</a>
					</section>
					<section id="paymentHistoryContent" class="tabContent">
						<h2>הסטורית תשלומים</h2>
						<form id="searchForm" action="#">
							<label>חפש לפי מספר חשבונית </label><input type="text"/><input type="submit" value="חפש"/>
						</form>
						<form id="filterForm" action="#">
							<label>חשבונית בין שנה <select>
															<option value="2014">2014</option>
															<option value="2013">2013</option>
															<option value="2012">2014</option>
															<option value="2011">2013</option>
															<option value="2010">2014</option>
															<option value="2009">2013</option>
																						</select> לשנה <select>
															<option value="2014">2014</option>
															<option value="2013">2013</option>
															<option value="2012">2014</option>
															<option value="2011">2013</option>
															<option value="2010">2014</option>
															<option value="2009">2013</option>
																						</select></label><br/>
							<label>חשבונית בין סכום<input type="number"/> לסכום <input type="number"/></label><br/>
							<label>שולם באיחור<input type="checkbox" name="isPaidLate" value="1"><input type="submit" value="סנן"/></label>
						</form>
						<table class="table-fill">
							<thead>
								<tr>
									<th>תאריך</th>
									<th>מס' חשבונית</th>
									<th>אגרה</th>
									<th>קנסות</th>
									<th>סה"כ</th>
									<th>חשבונית</th>
								</tr>
							</thead>
							<tbody class="table-hover">
								<tr>
									<td>1.1.2010</td>
									<td>33946</td>
									<td>450</td>
									<td>אין</td>
									<td>450</td>
									<td><a href="#"><img src="assets/paymentHistory/exportpdf.png"/></a></td>
								</tr>
								<tr>
									<td>1.1.2011</td>
									<td>64086</td>
									<td>450</td>
									<td>110</td>
									<td>560</td>
									<td><a href="#"><img src="assets/paymentHistory/exportpdf.png"/></a></td>
								</tr>
								<tr>
									<td>1.1.2012</td>
									<td>74767</td>
									<td>450</td>
									<td>56</td>
									<td>516</td>
									<td><a href="#"><img src="assets/paymentHistory/exportpdf.png"/></a></td>
								</tr>
								<tr>
									<td>1.1.2013</td>
									<td>76010</td>
									<td>450</td>
									<td>אין</td>
									<td>450</td>
									<td><a href="#"><img src="assets/paymentHistory/exportpdf.png"/></a></td>
								</tr>
								<tr>
									<td>1.1.2014</td>
									<td>57987</td>
									<td>450</td>
									<td>אין</td>
									<td>450</td>
									<td><a href="assets/paymentHistory/exportpdf.png" data-lightbox="image-1"><img src="assets/paymentHistory/exportpdf.png"/></a></td>
								</tr>
							</tbody>
						</table></section>
					<section id="disputesHistoryContent" class="tabContent">
						<h2>הסטוריית ערעורים</h2>
						<table class="table-fill">
							<thead>
								<tr>
									<th>תאריך</th>
									<th>מספר חשבונית</th>
									<th>סטטוס ערעור</th>
								</tr>
							</thead>
							<tbody class="table-hover">
							<?php
								if ($result->num_rows > 0) 
								{
								    while( $row = $result->fetch_assoc() ) 
								    {
								        echo "<tr><td>".$row["disputeDate"]."</td><td>".$row["disputeID"]."</td><td>".$row["disputeText"] ."</td></tr>";
								    }
								}
							?>
							</tbody>
						</table>
						</section>
				</section>
			</main>	
			<div class="clear"></div>
		</div>
	</body>
</html>
<?php
	$conn->close();
?>