<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>Welcome To Admindash</title>
<link rel="stylesheet" href="../csss/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="../image/growmore.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li class="logout"><a href="logout.php">Logout</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
       <h3><a href="addmark.php">1. Add Mark </a></h3>
       <h3><a href="updatemark.php">2. Update Mark </a></h3>
       <h3><a href="deleteform.php">3. Delete Mark </a></h3>
       <h3><a href="allstudentdata.php">4. All Student Data </a></h3>
       <h3><a href="usermassage.php">5. User Message </a></h3>
      </div>
    </header>
    
</body>
</html>