<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"/>
    <title>WEb site</title>



    <?php
      $msg1="";
      $msg2="";

if(isset($_POST['sent'])){


  







  // registration form
  if($_POST['sent']=="REGISTER"){

      echo "reg";

      // user name validation
      $_POST['name'] = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
      if(empty($_POST['name'])) $msg1.="Your name cannot be empty (php)<br>";

      // email validation
      $_POST['gmail'] = trim($_POST['gmail']);
      if(empty($_POST['gmail'])) $msg1.="Email cannot be empty (php)<br>";
      elseif(!filter_var($_POST['gmail'],FILTER_VALIDATE_EMAIL)) $msg1.="Email address it not valid (php)<br>";

      // password validation
      $_POST['password'] = htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8');
      if(empty($_POST['password']))  $msg1.="Passwords cannot be empty (php)<br>";


      // db operations
      if($msg1==""){
          try {
              // connect to db
              include "db_form.php";

              // check for existing email
              $check = $db->prepare("SELECT `id` FROM `login` WHERE `email`=?");
              $check->execute(array($_POST['gmail']));

              if($check->rowCount()>0) {
                  $msg2.="Email address you entered is registered already <br>";
              }
              else{
                  // insert user
                  $pwd = password_hash($_POST['password'],PASSWORD_DEFAULT);
                  
                  $ok = $db->prepare("INSERT INTO `login` (`username`, `email`, `password`) VALUES (?,?,?)")->execute(array($_POST['name'], $_POST['gmail'], $pwd));

                  $okmsg1 = "Successfully Registred!";

              }

          } catch (PDOException $e) {
              $msg1.=$e->getMessage();

                          // echo $e;
          }

      }

      
  }










  // login form
  elseif($_POST['sent']=="LOGIN"){
      // email validation
      $_POST['login_email'] = trim($_POST['login_email']);
      if(empty($_POST['login_email'])) $msg2.="Email cannot be empty <br>";
      //elseif(!filter_var($_POST['login_username'],FILTER_VALIDATE_EMAIL)) $msg.="Email address it not valid (php**)<br>";

      // password validation
      if(empty($_POST['login_password'])) 
      $msg2.="Password cannot be empty <br>";

      // db operations
      //if(true){
      if($msg2==""){
          try{
              //connect to db
              include "db_form.php";

              // check for a registered user
              $check = $db->prepare("SELECT `id`,`username`, `email`,`password` FROM `login` WHERE `email`=?");
              $check->execute(array($_POST['login_email']));

              if($check->rowCount()>0){
                  if($result=$check->fetch()){
                      // password verification
                      // if(true){
                      $pswd = $_POST['login_password'];
                      if(password_verify($pswd, $result['password'])){
                          // set session variables
                      //    $_SESSION['id']=$result['id'];
                      //    $_SESSION['name']=$result['username'];
                          // redirect to homepage
                          header("location:order.php");
                      } else {
                          $msg2.="Password you entered is incorrect <br>";
                      }
                  }
              } else $msg2.="Email address you entered is not registered <br>";
          } catch (PDOException $e){
              $msg.=$e->getMessage();
              echo $e;
          }
      }

  }
  
}
  
?>




      
    </head>
    




</head>



<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">LiBrArY &nbsp;&nbsp; cAlMs</a></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="book_details.php">Book Details</a></li>
                <li><a href="service.php">Our Service</a></li>
                <li><a href="careere.php">Careers</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="login.php" class="action_btn">Login</a>
            <div class="toggle_btn"></div>
            <i class="fa-solid fa-bars"></i>
        </div>
     </header>






    
     <div class="reg-container">
      <div class="reg-form">
        <div class="reg-btn">
        <button class="signUpBtn">SIGN UP</button>
      <button class="loginBtn">LOG IN</button>
        </div>



       
        
        <?php if(isset($okmsg1)) echo '<div id="okmsg">',$okmsg1,'</div>'; ?>
        <?php if($msg1!="") echo $msg1; ?>
        <form  method="post" class="signUp">


     <div class="reg-formGroup">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Username" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
                        </div>

						<div class="reg-formGroup">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="gmail" placeholder="Email" value="<?php if(isset($_POST['gmail'])) echo $_POST['gmail']; ?>">
                        </div>

						<div class="reg-formGroup">
                                <i class="fas fa-lock"></i>
								<input type="password" name="password" placeholder="Password" >
                        </div>

	  					<div  class="reg-formGroup">
                       	 <input type="submit" name="sent" value="REGISTER" class="btn">
						</div>    
        </form>
  <!------ Login Form -------- -->
  
  
  
  
  
  <form method="post" class="login" action="db_form.php" >

<?php if(isset($okmsg)) echo '<div id="okmsg">',$okmsg,'</div>'; ?>
                  <?php if($msg2!="") echo $msg2; ?>

    
		<div class="reg-formGroup">
			<i class="fas fa-envelope"></i>
		   <input type="text" name="login_email" placeholder="Email" value="<?php if(isset($_POST['login_email'])) echo $_POST['login_email']; ?>">
		</div>

	 <div class="reg-formGroup">
	   <i class="fas fa-lock"></i>
	   <input type="password" name="login_password" placeholder="Password">
	   </div>

	 <div class="reg-checkBox">
	 <input type="checkbox" name="checkbox" id="checkbox">
	   <span class="reg-text">Keep me signed in on this device</span>
	 </div>

	   <div class="reg-formGroup">
	   <input type="submit" name="sent" value="LOGIN" class="btn">
	   </div>
	 
	 </form>
	 
	   </div>
	 </div>
	   
	 <script src="jQuery.js"></script>
  




   <div class="footer">
    <div class="footerb"> 
    
        <b>Quick Link</b>
        <br><br><br>
        <div class="re-foo">
        <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a><li><br>
        <li><a href="about.php"><i class="fa fa-users"></i>About</a><li><br>
        <li><a href="book_details.php"><i class="fa fa-edit"></i>Book Details</a><li><br>
        <li><a href="service.php"><i class="fa fa-phone"></i>Our Service</a><li><br>
        <li><a href="careere.php"><i class="fa fa-user"></i>Careers</a><l</li><br><br>
        <li><a href="contact.php"><i class="fa fa-user"></i>Contact</a><l</li><br>
        
    </div>
    
    </div>
    
    
    <div class="footerb"> 
    
        <b>Available</b>
        <br><br>
        <div class="re-foo">
                <li><a href="novel.php">Novel</a></li><br>
                <li><a href="buddhist.php">Buddhist</a></li><br>
                <li><a href="magazine.php">Magazine</a></li><br>
                <li><a href="short.php">Short</a></li><br>
                <li><a href="romance.php">Romantic</a></li><br>
                
    
            </div>
    </div>
    

    
    <div class="footerb">

        <b>Address</b>
        <br><br><br>
        Address:
        150,New Road,peradeniya,kandy<br><br>
        Email:librarycalm@gmail.com<br><br>
        Mobile:0815826348<br><br>
        Time: 9:00AM to 10:00PM<br><br>


    </div>
    
    
    <div class="footerb"> 
    <b>Find Us</b>
    <br> <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31685.469656992354!2d79.85911585377299!3d6.928358154797135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25947b5704567%3A0x3c99cc963494fd1e!2sNew%20Kingdom%20Manpower%20%26%20Travels!5e0!3m2!1sen!2slk!4v1664046816590!5m2!1sen!2slk" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>



</div>





</body>
</html>