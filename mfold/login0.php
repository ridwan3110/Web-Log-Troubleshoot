<?php include 'validate.php'; ?>
<?php
error_reporting(0);
if($_SESSION['user'] != null){
    header("location:/web");
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../css/login6.css">
<!------ Include the above in your HEAD tag ---------->
   </head>
   <body>



<div class="custom_body">
    <div class="container">
    	<div class="row">

    	    <div class="login_box">
    	        <section class="main-box">
        	        <form>
        	        <div class="input-box">
            	        <span class="input-group-addon i_icon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control input_layout" name="user" placeholder="Email">
                    </div>
                    <div class="input-box">
            	         <span class="input-group-addon i_icon"><i class="glyphicon glyphicon-lock"></i></span>
                         <input id="password" type="password" class="form-control input_layout" name="pass" placeholder="Password">
                    </div>
                    </form>
                    <input type="submit" name="login" value="login">
                    <button type="button" class="btn btn-default btn_style">LOGIN</button>
                </section>
    	    </div>

    	</div>
    </div>
</div>
   </body>
 </html>
