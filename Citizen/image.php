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
      <u><h1>FIR Details</h1></u>
      <br>
      <br>
                 <?php

                    if(isset($_GET['ID']))
                    {

                    
                    $ID=$_GET['ID'];

                     mysql_connect("localhost", "root", "") or die(mysql_error()); 
                     mysql_select_db("Law") or die(mysql_error()); 
                     $query= mysql_query("SELECT * FROM `FIR` WHERE `FIR_ID` = '".$_GET['ID']."'")or die(mysql_error());
                     $arr = mysql_fetch_array($query);
                     ?>

                     <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">FIR_ID</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h5><?php echo $arr['FIR_ID']; ?></h5>
                     </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Department Name</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h5><?php echo $arr['Department Name']; ?></h5>
                     </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Citizen/Group Applied by</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h5><?php echo $arr['Applied by']; ?></h5>
                     </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Citizen/Group Applied to</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h5><?php echo $arr['Applied to']; ?></h5>
                     </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Date</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h5><?php echo $arr['Date']; ?></h5>
                     </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Application</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                     <?php
                    if($arr['Application']){?>

         

                      
                         <?php

                           echo '<img class="featurette-image img-fluid mx-auto" src="data:image/jpeg;base64,'.base64_encode( $arr['Application'] ).'"  width="400" height="400" />';
                          ?>
                       
                    
                     </div>
                    </div>   
                       
                     
                </center>
                <br><br><br>
                <center>
                  <form >
                  <a href="profile.php#FIR2" class="btn btn-outline-success my-2 my-sm-0" type="submit"> Back to previous page</a>
                  </form>
                </center>
                <?php
              }
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