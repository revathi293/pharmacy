<html>
<?php
// Start the session
session_start();
?>
	<head>
		<style>
			
			#title{
				background-color:yellow;
				font-size:24px;
				color:#E53935;
				
				color:black;
				margin-left:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: yellow;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: black;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #F6BE00;
			}

			.active {
				background-color: #F6BE00;
			}
			
			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #4dff4d;
			}

			.container {
			    
				border-radius: 5px;
				background-color: #ffffff;
				padding: 20px;
			}

			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
			}
			
			
		</style>
	</head>
	
	<body>
		
	<?php
        if($_SESSION["adminid"] === ""){
          echo $_SESSION['adminid'];
          echo "login";
          header("Location: home.php ");
        }
      ?>
		
		<ul>
			<li id="titlehead"><p id="title">Sri Maruthi Pharma</p></li>
			<li style=margin-right:10px;><a href="admin_logout.php">Logout</a></li>
			<li><a class="active" href="admin_home.php">Admin</a></li>
		</ul>
		
		
		
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">Delete Pharmacist</h2>
		
		<div style="text-align:center;"> <img src="image\deletemain.png">  </div>
		
		<div class="container">
			<form action="delete_pharmacist_action.php" method = "get">
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Pharmacist Id</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="pharmacistid" placeholder="Enter pharmacist Id...">
					</div>
				</div>
				
				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Delete">
				</div>
			</form>
			
			
			
		</div>
		
		
		
		
	</body>
	
	
	


</html>