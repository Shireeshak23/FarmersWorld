<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "profile.php";
		}
		else {
				$link = "../profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">AgroCulture</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> DigitalMarket</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
						<li><a href="machinery.php"><i style='font-size:24px;color:white' class='fas'>&#xf0d1;</i>machinery</a></li>
						<li><a href="govtsch.html">PestDection</a></li>
						<li><a href="check1.html"></i>weatherAlert</a></li>
                         <li><a href="loan.php">Loan</a></li>
                         <li><a href="govtsch.html"></i>GScms</a></li>

					</ul>
				</nav>
			</header>

	</body>
</html>
