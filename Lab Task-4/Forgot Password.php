<!DOCTYPE html>
<html>
<head>
  <title>Public Home</title>
</head>
<body>
<table border="1" width="100%">
  <tr>
    <td align="right">
       <a href="Home.php"> <img src="logo.png" align="left"> </a>
       <a href="Public Home.php"> Home </a> |
      <a href="login.php"> Login </a> |
      <a href="registration.php"> Registration </a> 
      
    </td>
  </tr>
    <tr height="300px">
    <td align="center">



 <!DOCTYPE html>  
 <html>  
      <head>  
           
           
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                      <fieldset> 
                     <legend>FORGOT PASSWORD</legend> 
                      
                     <label>Enter email</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     

                    



                     
                    </fieldset>
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  

       </td>
    
  </tr>

  <tr>
    <td colspan="2" align="center" height ="50px">Copyright @ 2017</td>
    
  </tr>
 </table>
</body>
</html>