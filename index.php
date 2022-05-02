<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login to QuizB</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template-->
  <link href="admin.css" rel="stylesheet">
  <script src="admin.js"></script>
  </head>

  <body class="bg-dark">
  <?php 

function createAccount()
{
  header('location:createAccount.php');
}

$host="sql302.epizy.com";
$user="epiz_31639098";
$password="HeRVvOCIv2L1JKc";
$dbname="epiz_31639098_userlogdata";

$con = mysqli_connect($server ,$username, $password);

mysqli_select_db($con, 'userlogdata');


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $passwordd=$_POST['password'];
    
    $sql="select * from userinfodata where email='".$uname."'AND password ='".$passwordd."' limit 1";

    
    $result = mysqli_query($con,$sql);
    
    if( mysqli_num_rows($result)==1){
      echo " You Have Entered Incorrect Password";
      exit();
    }
    else{
        
        echo " You Have Successfully Logged in";
        header('location: http://playquizwithme.epizy.com/quizSec.php');
  
    }
        
}
?>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

          <form name="form1" action="#" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" />
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group"> 
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" />
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <input type="submit" name="submit1" value="Submit" class="btn btn-primary btn-block" />
            <a href="http://playquizwithme.epizy.com/createAccount.php" onclick ="createAccount();">create your account?</a>
          </form>
        </div>
      </div>
    </div>

  </body>

</html>

