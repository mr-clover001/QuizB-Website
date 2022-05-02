<?php 

session_start();

  $message="";
  if(isset($_SESSION['email_alert'])){
    $message = "Email ID Already Exists";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CreateAccount on QuizB</title>
</head>
<style>
  .mes{
    color:red;
  }

  .member{
    padding:100px 50px;
  }
  .member h2{
    font-size:55px;
    text-align:center;
  }

  </style>
<body>



<div class="member" id="scrollspySignIn">
       
       <h2>Create your Account</h2>
       <h4 class="mes"><?php echo $message ?></h4>
       <form class="row g-3" action="userlogdata.php" method="post">
           <div class="col-md-6">
               <label for="inputName" class="form-label">First Name</label>
               <input type="text" name="firstname" class="form-control" id="inputName">
             </div>
             <div class="col-md-6">
               <label for="inputLastName" class="form-label">Last Name</label>
               <input type="text" name="lastname" class="form-control" id="inputLastName">
             </div>
           <div class="col-md-6">
             <label for="inputEmail4" class="form-label">Email</label>
             <input type="email" name="email" class="form-control" id="inputEmail4">
           </div>
           <div class="col-md-6">
             <label for="inputPassword4" class="form-label">Password</label>
             <input type="password" name="password" class="form-control" id="inputPassword4">
           </div>
          
          
           <div class="col-12">
             <button id="member-btn" type="submit" class="btn btn-primary">Create my Account</button>
             <button id="back-btn" type="back" class="btn btn-success">Go Back</button>
           </div>
         </form>
   </div>
<?php  unset($_SESSION['email_alert']);
?>
   </body>
</html>