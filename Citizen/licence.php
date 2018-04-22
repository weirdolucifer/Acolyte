<!doctype html>
<html lang="en">
  <head>
    <title>Acolyte | Approve Proof</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/lgo1.gif" />
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/citizen.css" rel="stylesheet">

 
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Acolyte</a>
        
      </nav>
    </header>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>
    <center>
      <u><h1>Licence Details</h1></u>
      <br>
      <br>
                 <?php

                
                   

                    
                    $ID=$_GET['ID'];
                   
                     mysql_connect("localhost", "root", "") or die(mysql_error()); 
                     mysql_select_db("Law") or die(mysql_error()); 
                     $query= mysql_query("SELECT * FROM `Licence` WHERE `Licence_ID` = '".$_GET['ID']."'")or die(mysql_error());
                     $arr = mysql_fetch_array($query);
                     ?>

                    
                      
                     <?php
                    if($arr['Licence']){?>

         

                      
                         <?php

                           echo '<img class="featurette-image img-fluid mx-auto" src="data:image/jpeg;base64,'.base64_encode( $arr['Licence'] ).'"  width="400" height="400" />';
                          ?>
                       
                    <br><br><br>
                     <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="#">Approval Status</label>
                    </div>
                    <div class="col-md-6 mb-3">
                     <?php if($arr['Status'] != 0) {?>
                     <font color="green"><h6>Approved</h6></font>
                   <?php } else { ?>
                    <font color="red"><h6>Not Approved</h6></font>
                   
                   <?php } ?>
                   </div>
                  </div>
                       
                     
                </center>
                <br><br><br>
                <center>
                  <form >
                  <a href="profile.php#Licence1" class="btn btn-outline-success my-2 my-sm-0" type="submit"> Back to previous page</a>
                  </form>
                </center>
                <?php
              }
                    
                          
                  ?>


                  
                  
<br><br>
   <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2019 Acolyte</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>            
</body></html>