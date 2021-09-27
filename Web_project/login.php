<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login-অপরাজিতা</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="login.js"></script>
</head>
<style>
    body{
        margin: 0px;
        padding: 0px;
    }
    .sidemenu{
        flex: 2;
        
    }
    .logform{
       flex: 4;
        
    }
    p{
        color: red;
        text-align: center;
        font-weight: bold;
    }
    
    
    
    </style>
<body>
  
<!--  header part-->
   <div class="header" style="background-color: crimson;"><h1 style="color: white; padding: 5px;"><center>অপরাজিতা</center></h1></div>
   
<!--   end of header part-->
   
   
   
   <div class="container-fluid" style="display: flex; height: 450px;">
     
<!--     left side part-->
      <div class="sidemenu">
          <h1 style="color: crimson; text-align: center; margin-top: 90px">Don't have any account?</h1><br>
          <center><a href="regform.php"><button type="button" class="btn btn-primary">Sign up</button></a></center>
          
      </div>
<!--      end of left side part-->
      
      
<!--      login form area starts here-->
       <div class="logform">
         
<!--         inner box part of login-->
          
          <div class="box" style="margin: 0 auto; width: 65%; background-color: white; border-radius: 5px; box-shadow: 10px 10px 25px 10px grey;">
          
          <div class="upper" style="background-color: crimson; height: 70px; padding: 10px; border-radius: 5px; border-bottom-left-radius: 30%; border-bottom-right-radius: 30%; margin-top: 40px;">
          <div class="logobox" style="height: 50px; width: 50px; border-radius: 50%; background-color: white; margin: 0 auto;"><img src="ladylogo.png" alt="" style="width: 50px; height: 50px;"></div></div>
           <div class="lower">
             
              
<!--              form starts here-->
               
               <form action="logprocess.php" onsubmit="return valid()" method="post" style="margin: 20px;">
               
<!--               UID part-->
    <div class="form-group">
      <label for="email">User ID:</label>
      <input type="text" class="form-control" id="uid" placeholder="Enter UID" name="uid">
    </div>
<!--    end of UID part-->
   
<!--   password part-->
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div>
<!--    end of password part-->
   
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Submit</button>
  </form>
              <?php if(isset($_SESSION['id']))
               echo "<p>Incorrect UID or Password</p>";
               session_destroy();
               ?>
               
           </div>
      </div>
          
<!--          end of inner box part of login-->
           
       </div>
<!--       end of log form-->
       
       
   </div>
   
   
    
</body>
</html>