<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
    <html >

     <head>
        <title>FarmersWorld.in</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

<meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />





<style>
.container {
  position: relative;
  width: 100%;
  max-width: 10000px;
}

.container img {
  width: 100%;
  height: auto;
  position: relative;
}

.container .rbtn {
  position: absolute;
  top: 50%;
  right: 45%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #40ff00 ;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .lbtn {
  position: absolute;
  top: 50%;
  left: 65%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #40ff00 ;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}


.container .rbtn:hover {
  background-color: #bfff00 ;
}


.container .lbtn:hover {
  background-color: #bfff00 ;
}


.text {
  color: white;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  top: 60px;
  width: 100%;
  text-align: center;
}







.text1 {
  color: white;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  top: 60px;
  width: 100%;
  text-align: center;
}




</style>




    </head>

    <body>
        <?php
            require 'menu.php';
        ?>

       <!-- <section id="banner" class="wrapper">-->
        
           <div class="container">



                 <img src="https://www.agriculture.com.ph/wp-content/uploads/2019/08/26Organic-Farming.jpg" alt="Snow" style="width:100%">
 

                <header class="text">
                    <h1>Welcome<br></h1>
                    <h5> Account is not verified! Please confirm your email by clicking
                            on the email link!
                       </h5>
                </header>
                <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
                </p>

                <?php
                    if ( !$active )
                    {
                        echo
                        "<div>
                            Account is not verified! Please confirm your email by clicking
                            on the email link!
                        </div>";
                    }
                ?>
                  <h2><?php echo $name; ?></h2>
                  <p><?= $email ?></p>

                 <?php if($_SESSION['Category'] == 1): ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../profileView.php class="lbtn">My Profile</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="rbtn">LOG OUT</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../market.php class="lbtn">Digital Market</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="rbtn">LOG OUT</a>
                        </div>
                    </div>
                

                <?php endif; ?>


    </body>
</html>
