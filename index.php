<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$user=filter_var( $_POST['username'] , FILTER_SANITIZE_STRING);
$email = filter_var( $_POST['email'] , FILTER_SANITIZE_EMAIL);
$phone=filter_var( $_POST['cellphone'] , FILTER_SANITIZE_NUMBER_INT);
$msg=filter_var( $_POST['message'] , FILTER_SANITIZE_STRING);
if(strlen($user)<=3)
$userError="please user name must be larger than 3 letters" . '<br>';
if(strlen($msg)<=10)
$msgError="please message must be larger than 10 letters" .'<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="assests/css/bootstrap.min.css">
        <!-- Font Awesome Library-->
    <link rel="stylesheet" href="assests/css/all.min.css">
     <!-- style -->
             <link rel="stylesheet" href="style.css">
          <!-- google font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;700;900&display=swap" rel="stylesheet">
    <title> contact form</title>
</head>
<body>
<div class="contaner"> 
<h1 class="text-center">contact me</h1>
<form class="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <div class="form-group">
    <input 
     class="form-control username" 
     type="text"
     name="username" 
     placeholder="type your user name"
     id="one"
     value="<?php  if(isset($user)) { echo $user; } ?>"
    >
     <i class="fa fa-user fa-fw"></i>
     <i class="fa fa-asterisk star" ></i>
     <div class="alert alert-danger alert-dismissible custome-alert fade show" role="alert">
        user name cant be less than three letters
</div>
     <!-- <?php
     if(isset($userError))
     {
     ?> -->
          <!-- <?php  
            echo $userError;
         ?>
  
</div>
  <?php
     }
     ?>  -->
     </div>
     <div class="form-group">
         <input 
               class="form-control email"
               type="email" name="email"   
               placeholder="insert your valid email"
               value="<?php  if(isset($email)) { echo $email; } ?>"
         >
         <i class="fa fa-envelope fa-fw"></i>
         <i class="fa fa-asterisk star" aria-hidden="true"></i>
         <div class="alert alert-danger alert-dismissible custome-alert fade show" role="alert">
         email cant be empty </div>
      </div>
   <div class="form-group">
      <input 
            class="form-control cellphone"
            type="text"
            name="cellphone" 
            placeholder="insert your valid cell phone"
            value="<?php  if(isset($phone)) { echo $phone; } ?>"
      />
      <i class="fa fa-phone fa-fw"></i>
   </div>
   <div class="form-group">
      <textarea class="form-control message"
      placeholder="insert your message"
         name="message"  
         ><?php  if(isset($msg)) { echo $msg; } ?>
      </textarea>
      <i class="fa fa-asterisk msgstar" aria-hidden="true"></i>
      <div class="alert alert-danger alert-dismissible custome-alert fade show" role="alert">
         the message must be more than <strong>10</strong> letters
      </div>
   </div>
    <!-- <?php
     if(isset($msgError))
     {
     ?>
             <?php 
            echo $msgError;
         ?>
 </div>
  <?php
     }
     ?> -->
    <input class="btn btn-success" type="submit" value="send message">
   <i class="fa fa-paper-plane"></i>
</div>   
</form>
    <script src="assests/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assests/js/popper.min.js" ></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/main.js"></script>
 
</body>
</html>