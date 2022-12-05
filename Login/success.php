<?php
    session_start();
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>FarmersWorld.in</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
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
  max-width: 100000px;
}

.container img {
    top: 0px;
  width: 100%;
  height: auto;
  position: relative;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  top: 80px;
  width: 100%;
  text-align: center;
}




</style>


















    </head>

    <body>
        <?php
            require 'menu.php';
        ?>

       <section id="banner" class="wrapper">
        
            <div class="container">
                 <img src="https://i.pinimg.com/736x/29/fc/87/29fc876338e4909137d42e6115dc1c13.jpg" alt="Snow" style="width:100%">
 
                <header class="major">
                     <div class="text">Caption Text</div>
                    <h2>SUCCESS</h2>
                </header>
                <p>
                    <?php
                        if( isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: ../index.php");
                        }
                    ?>
                </p><br />
                <a href = "../index.php" class="button special">HOME</a>


    	<?php $_SESSION['message'] = ""; ?>
    </div>
</div>
    </body>
</html>
