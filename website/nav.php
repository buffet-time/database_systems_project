<?php
session_start();
include 'databaseConnect.php';

// If the user is logged in then it draws the html
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
    { 
?>

<html>
	<head>
		<meta char = "utf-8">
		<link rel="stylesheet" href="nav.css">
	</head>
	<body>
		<ul>
			<li><a href = "home.php">Home</a></li>
			<li class = "drp"><a class = "drpBtn" href = "javascript:void(0)">Product</a>
    			<div class = "drpContent">
    				<a href = "clothing.php"    class = "clothing">Clothing</a>
    				<a href = "mugs.php"        class = "mugs">Mugs</a>
    				<a href = "poster.php"      class = "poster">Poster</a>
    				<a href = "figurines.php"   class = "figurs">Figurines/Plushies</a>
    				<a href = "accessory.php"   class = "acc">Accessory</a>
    				<a href = "all.php"         class = "all">All</a>
    			</div>
			</li>
			<li><a href = "receipt.php">Receipt</a></li>    <!--receipt page-->
			<li><a href = "cart.php">Cart</a></li>      <!--Cart page-->
			<li>
				<form action = "results.php" method = "post">
					<input type = "text" name = "searchterm"  placeholder = "Search Here">
				</form>
			</li>
			    <?php echo "<span style='color:red;'>Welcome, " .$_SESSION['name']. "!</span>";?>
			    <form action = 'logout.php'>
        			<li><button onclick = 'myFunction()'>Log out</button></li>
			    </form>
		</ul>
	</body>
</html>
<?php
    } 
    // if the user isn't logged in then it redirects the user to login.php
    else 
        {
            header("location:login.php");
        }
?>