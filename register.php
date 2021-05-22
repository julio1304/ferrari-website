
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.html"><img src="assets/ferrari-monza-sp2-v-green-carbon-gold-tse-nasha-spetsyfika-dnia-1200x800.jpg" alt="" style="width:350px; height: 150px;"></a>
		 </div>

		</div>	
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>User Account Registration
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="register.php" method="post" >
                    
           <div>
               <label>Name</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR NAME " name="username" required>
             </div>
            
            <div><br/>
               <label>Email</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR EMAIL" name="useremail" required>
             </div>
             
             
            <div><br/>
               <label>Adress</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR ADDRESS" name="useraddress" required>
             </div>
             
             
            <div><br/>
               <label>phone</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR PHONE NUMBER" name="userphone" required>
             </div>
 
            <div><br/>
               <label>PASSWORD</label>
      <input type="password" class="form-control transparent-input" size="50" placeholder="PASSWORD PLEASE" name="pass" required>
             </div>
 
            <div><br/>
                <button type="submit" name="reg" class="btn btn-warning" value="reg">Sign up</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>




<?php 
$db=mysqli_connect("localhost","root","","julio");

// REGISTER USER
if(isset($_POST['reg'])) 
{
    
    
	// receive all input values from the form
    $username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$password = $_POST['pass'];
    $userphone = $_POST['userphone'];
    $useraddress = $_POST['useraddress'];
    
    if($useremail!='' || $username!=''|| $password!=''|| $userphone!=''|| $useraddress!='' )
    {
       $query = "CALL register('$username','$useremail','$password','$userphone','$useraddress')";
        
		mysqli_query($db, $query);
        
        $message = "registration done ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
        
      
    }
	
		

		
	
	
}

 ?>

    	
    	
            