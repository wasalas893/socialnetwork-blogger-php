<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

  body{
     overflow-x: hidden; 
  }
 
 
  #centered2{
   position: absolute;
   font-size: 10vw;
   top: 70%;
   left: 40%;
   transform: translate(-50%,-50%);
  }

	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}
</style>
<body>
      <div class="row">
      <div class="col-sm-12">
         <div class="well">
           <center><h1 style="color: white;">Blogger</h1></center>
         </div>
      </div>
      </div>
 
      <div class="row">
        <div class="col-sm-6" style="left: 0.5%;">
          <img src="images/Travel-Blogger-1024x682 (1).jpg" class="img-rounded" title="Blogger" width="650px"
          height="565px">
        
          <div id="centered2" class="centered">
              <h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>
            &nbsp;&nbsp;<strong>Follow Your chat..</strong></h3>
          </div>
         
        </div>
        <div class="col-sm-6" style="left: 8%;">
        <img src="images/png-transparent-blogger-google-blog-search-spam-blog-blogging-text-orange-logo.png" alt="" class="img-rounded"
        title="blogger" width="80px" height="80px">
        <h2><strong>See what's happening in <br>the world right now</strong></h2>
        <h4><strong style="color: red;">join Blogger Today...</strong></h4>
        <form method="post" action="">
        <button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button><br><br>
        <?php  
          if(isset($_POST['signup'])){
            echo"<script>window.open('signup.php','_self')</script>";
          }
        
        ?>

        <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
        <?php

          if(isset($_POST['login'])){
            echo"<script>window.open('signup.php','_self')</script>";
          }
        ?>
        </form>
      
      </div>
      </div>

    
</body>
</html>