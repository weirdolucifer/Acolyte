 <html>
 <center><h1>
 <?php    
              if(isset($_POST["submit1"])){  
              
              if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
                  $user=$_POST['user'];  
                  $pass=$_POST['pass'];  
                
                  $con=mysql_connect('localhost','root','') or die(mysql_error());  
                  mysql_select_db('Law') or die("cannot select DB");  
                
                  $query=mysql_query("SELECT * FROM Citizen WHERE Citizen_id='".$user."' AND Password='".$pass."'");  
                  $numrows=mysql_num_rows($query);  
                  if($numrows!=0)  
                  {  
                  while($row=mysql_fetch_assoc($query))  
                  {  
                  $dbusername=$row['Citizen_id'];  
                  $dbpassword=$row['Password'];  
                  }  
                
                  if($user == $dbusername && $pass == $dbpassword)  
                  {  
                  session_start();  
                  $_SESSION['sess_user']=$user;  
                  
                  /* Redirect browser */  
                  header("Location: Citizen/profile.php");  
                  }  
                  } else {  
                  echo "Invalid Citizen_id or password!";  
                  }  
                
              } else {  
                  echo "All fields are required!";  
              }  
              }  



              if(isset($_POST["submit2"])){  
              
              if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
                  $user=$_POST['user'];  
                  $pass=$_POST['pass'];  
                
                  $con=mysql_connect('localhost','root','') or die(mysql_error());  
                  mysql_select_db('Law') or die("cannot select DB");  
                
                  $query=mysql_query("SELECT * FROM administrator WHERE Username='".$user."' AND Password='".$pass."'");  
                  $numrows=mysql_num_rows($query);  
                  if($numrows!=0)  
                  {  
                  while($row=mysql_fetch_assoc($query))  
                  {  
                  $dbusername=$row['Username'];  
                  $dbpassword=$row['Password'];  
                  }  
                
                  if($user == $dbusername && $pass == $dbpassword)  
                  {  
                  session_start();  
                  $_SESSION['sess_user']=$user;  
                  
                  /* Redirect browser */  
                  header("Location: Admin/profile.php");  
                  }  
                  } else {  
                  echo "Invalid username or password!";  
                  }  
                
              } else {  
                  echo "All fields are required!";  
              }  
              }  


              if(isset($_POST["submit3"])){  
              $numrows=0;
              if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
                  $user=$_POST['user'];  
                  $pass=$_POST['pass'];  
                
                  $con=mysql_connect('localhost','root','') or die(mysql_error());  
                  mysql_select_db('Law') or die("cannot select DB");  
                
                  $query=mysql_query("SELECT * FROM police  WHERE Officer_id='".$user."' AND Password='".$pass."'");  
                  $numrows=mysql_num_rows($query);   
                  if($numrows!=0)  
                  {  
                  while($row=mysql_fetch_assoc($query))  
                  {  
                  $dbusername=$row['Officer_id'];  
                  $dbpassword=$row['Password'];  
                  }  
                
                  if($user == $dbusername && $pass == $dbpassword)  
                  {  
                  session_start();  
                  $_SESSION['sess_user']=$user;  
                  
                  /* Redirect browser */  
                  header("Location: Police/profile.php");  
                  }  
                  } else {  
                  echo "Invalid Officer_id or password!";  
                  }  
                
              } else {  
                  echo "All fields are required!";  
              }  
              }  

                
              if(isset($_POST["submit4"])){  
              
              if(!empty($_POST['user1'])  && !empty($_POST['user2']) && !empty($_POST['pass'])) {  
                  $user1=$_POST['user1']; 
                  $user2=$_POST['user2'];  
                  $pass=$_POST['pass'];  
                
                  $con=mysql_connect('localhost','root','') or die(mysql_error());  
                  mysql_select_db('Law') or die("cannot select DB");  
                
                  $query=mysql_query("SELECT * FROM magistrate WHERE District='".$user1."'AND Name='".$user2."' AND Password='".$pass."'");  
                  $numrows=mysql_num_rows($query);  
                  if($numrows!=0)  
                  {  
                  while($row=mysql_fetch_assoc($query))  
                  {  
                  $dbusername1=$row['District']; 
                  $dbusername2=$row['Name'];  
                  $dbpassword=$row['Password'];  
                  }  
                
                  if($user1 == $dbusername1 && $user2 == $dbusername2 && $pass == $dbpassword)  
                  {  
                  session_start();  
                  $_SESSION['sess_user']=$user2;  
                  
                  /* Redirect browser */  
                  header("Location: Magistrate/profile.php");  
                  }  
                  } else {  
                  echo "Invalid District,Name or password!";  
                  }  
                
              } else {  
                  echo "All fields are required!";  
              }  
              }  


?> 

</h1></center>
</html>