<!DOCTYPE html>
<html>
<head>
  <title>Public home design</title>
</head>
<body>
 <table border="1"  width="100%">
    <tr>

    <td colspan="3" align="right">
       <a href="Public Home.php"> <img src="logo.png" align="left"> </a>
    <?php 


session_start();

if (isset($_SESSION['un'])) {
  //echo "<p1> Welcome ".$_SESSION['un']."</p1>";
  echo "<a href='Dashboard.php'>Login in as ".$_SESSION['un']."</a>" ;
  echo "<br><a href='logout.php'>Logout</a><br>";

}


 ?>
    

    </td>
  </tr>
  <tr height="300px">
    <td colspan="2" style="width: 30%" >
        <fieldset>
        <table border="0">
          <td height="300px" width="450px">
            <b>Account</b>
            <hr>
              <ul><a href="Dashboard.php"> Dashbord </a> </ul>
              <ul><a href="viewProfile.php"> View Profile </a> </ul>
              <ul><a href="editProfile.php"> Edit Profile </a> </ul>
              <ul><a href="profilePicture.php"> Change Profile Picture </a> </ul>
              <ul><a href="change_Password.php"> Change Password </a> </ul>
              <ul><a href="logout.php"> Logout </a> </ul>
        
        </table>
      </fieldset>
    </td>
    <td>
      <form >
        <fieldset style="  width: 50% ;max-width: 50%;height:100%">
          <legend>EDIT PROFILE</legend>
            <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
            <table  class="table table-bordered">
            <tr>  
                            
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                      <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                     </fieldset>



                     <fieldset> 
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 
                    </fieldset>
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />
                
            </tr>
              
                
            </table>
             </div>
                 </div>
                
        </fieldset>
      </form>

    </td>
    
  </tr>

  <tr>
    <td colspan="3" align="center" height ="50px">Copyright @ 2017</td>
    
  </tr>
 </table>
 
</body>
</html>