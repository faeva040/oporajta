<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up-অপরাজিতা</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      input{
          width: 80%;
      }
      select{
          width: 80%;
      }
    </style>
    <script src="regform.js"></script>
</head>
<body>
   
   <!--  header part-->
   <div class="header" style="background-color: crimson;"><h2 style="color: white; padding: 5px;"><center>অপরাজিতা</center></h2></div>
   
<!--   end of header part-->
  
  
   <div class="container-fluid">
      
      
      <!--         inner box part of login-->
          
          <div class="box" style="margin: 0 auto; width: 60%; background-color: white; border-radius: 5px; box-shadow: 10px 10px 25px 10px grey;">
          
          <div class="upper" style="background-color: crimson; height: 70px; padding: 10px; border-radius: 5px; border-bottom-left-radius: 30%; border-bottom-right-radius: 30%; margin-top: 10px;">
          <div class="logobox" style="height: 50px; width: 50px; border-radius: 50%; background-color: white; margin: 0 auto;"><img src="ladylogo.png" alt="" style="width: 50px; height: 50px;"></div></div>
           <div class="lower" style="padding-left: 70px;">
             
             
             
             
             
              
<!--              form starts here-->
               
               <form action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return regvalid()" style="margin: 20px;">
               
<!--               Name part starts here-->
Name: <br>
<input type="text" name="name" id="name" placeholder="Enter Your full name" required>
<br>
<!--              name part ends here-->
               
<!--               UID part-->
    UID: <br>
<input type="text" name="uid" id="uid" placeholder="Enter User ID" required>
<br>
<!--    end of UID part-->
   
<!--   Email part-->
    Email: <br>
<input type="email" name="email" id="email" placeholder="Enter User Email" required>
<br>
<!--    end of email part-->
 
 
  
  <!--   date part-->
    Birth Date: <br>
<input type="date" name="bday" id="bday" style="margin-bottom: 5px;" required>
<br>
<!--    end of date part-->
  
<!--  area part-->
 Living Area: <br>
 <select name="area" id="area" required>
     <option value="Please Select your area here">Please Select your area here</option>
     <option value="Mohammadpur">Mohammadpur</option>
     <option value="Dhanmondi">Dhanmondi</option>
     <option value="Khilgaon">Khilgaon</option>
     <option value="Puran Dhaka">Puran Dhaka</option>
     <option value="Uttara">Uttara</option>
     <option value="Baily Road">Bailey Road</option>
     
     
 </select>
  
<!--  end of area part-->
   <br>
<!--   password part-->
    Password: <br>
    <input type="password" name="pass" id="pass" placeholder="password must contain a digit in the end & min length is 6" required>
    <br>
    Confirm Password <br>
    <input type="password" name="cpass" id="cpass" placeholder="This field must match up with password" required>
    <br>
<!--    end of password part-->
  
   
<!--   profile pic upload part-->
Photo: <input type="file" name="file">
  <!-- end of  profile pic upload part-->
    
    
    <button type="submit" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 10px; width: 80%;">Submit</button>
  </form>
               
           </div>
      </div>
          
<!--          end of inner box part of login-->
       
       
       
   </div>
    
</body>
</html>