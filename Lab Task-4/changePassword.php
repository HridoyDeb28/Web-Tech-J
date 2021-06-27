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
              <ul><a href="changePassword.php"> Change Password </a> </ul>
              <ul><a href="login.php"> Logout </a> </ul>
        
        </table>
      </fieldset>
    </td>
  
<td>
  <form > 
     <fieldset style="  width: 50% ;max-width: 50%;height:100%">
      <legend>CHANGE PASSWORD</legend>
      

                     <label>Current Password :</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <label>New Password :</label>
                     <input type="password" name = "npass" class="form-control" /><br />
                     <label>Retype New Password :</label>
                     <input type="password" name = "rnpass" class="form-control" /><br />



      
      <hr>
      <input type="submit" name="submit" value="submit">
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