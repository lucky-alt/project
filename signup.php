<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name)  && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Offers.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/loginnav.css">
    <link rel="stylesheet" href="css/navresponsive.css">
</head>
<body>
      <!-- header -->
      <header>
           <!-- navigation bar start here -->
     

    <div class="login-nav">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="#" /></a>
     </div>
      <nav>
        <ul class="links">
          <li class="hide"> <a href="index.php"> Home</a></li>
          <li class="hide"><a href="about.php"> About</a></li>
          <li class="hide"> <a href="Faculty.php"> Faculty</a></li>
          <li class="hide"><a href="Offers.php"> Offers</a></li>
          <li class="hide"><a href="Contact.php">Contact us </a></li>
         <a href="#"><li  class="hidebar" onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></li></a>
        </ul>
         <!--responsive navigation bar start here -->

  <ul class="dropdown">
    <a href="#"><li onclick=hidesidebar()><svg xmlns="http://www.w3.org/2000/svg" height="59px" viewBox="0 -960 960 960" width="34px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></li></a>
    <a href="index.php"> <li>Home</li></a>
    <a href="about.php"> <li>About</li></a>
    <a href="Faculty.php"> <li>Faculty</li></a>
    <a href="Offers.php"> <li>Offers</li></a>
    <a href="Contact.php"> <li>Contact us </li></a>
</ul>       
    
  <!-- partial:index.partial.html -->
      </nav>
    
    <!-- navigation bar end here -->
      
<div class="wrapper">
  <div class="login_box">
    <form method="post">
     <div class="login-header">
       <span>Login</span>
     </div>
     <div class="button"><a href="index.php">&times;</a></div>
 
     <div class="input_box">
       <input type="text" id="user" class="input-field" name="user_name" required>
       <label for="user" class="label">Username</label>
       <i class="bx bx-user icon"></i>
     </div>
    
 
     <div class="input_box">
       <input type="password" id="pass" class="input-field" name="password" required>
       <label for="pass" class="label">Password</label>
       <i class="bx bx-lock-alt icon"></i>
     </div>
 
     <div class="remember-forgot">
       <div class="remember-me">
         <input type="checkbox" id="remember">
         <label for="remember">Remember me</label>
       </div>
 
       <div class="forgot">
         <a href="#">Forgot password?</a>
       </div>
     </div>
 
     <div class="input_box">
       <input type="submit" class="input-submit" onclick="func()" value="Login">
     </div>
 
     <div class="register">
       <span>Don't have an account? <a href="registration.php">Sign up</a></span>
     </div>
    </form>
   </div>
 </div>
 <!-- partial --> 
     </header>
     <!-- end header inner -->
<script>
  function showSidebar(){
    const dropdown = document.querySelector('.dropdown')
    dropdown.style.display = 'flex'
  }

  function hidesidebar(){
    const dropdown = document.querySelector('.dropdown')
    dropdown.style.display = 'none'
  }

  // function func(){
  //   const inputsubmit = document.querySelector('.input-submit')
  //   inputsubmit.style.display = 'none'
  // }
  
</script>      
</body>
</html>