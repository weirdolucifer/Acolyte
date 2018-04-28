
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
                 <?php

                    if(isset($_GET['ID']))
                    {

                     
                    $ID=$_GET['ID'];

                     mysql_connect("localhost", "root", "") or die(mysql_error()); 
                     mysql_select_db("Law") or die(mysql_error()); 
                     $query= mysql_query("SELECT * FROM `Licence` WHERE `Licence_id` = '".$ID."'")or die(mysql_error());
                     $arr = mysql_fetch_array($query);
                    
                    if($arr['Licence']){?>

         

                      
                         <?php

                           echo '<img class="featurette-image img-fluid mx-auto" src="data:image/jpeg;base64,'.base64_encode( $arr['Licence'] ).'"  width="400" height="400" />';
                          ?>
                          
                       
                     
                </center>
                <br><br><br>
                <center>
<!--                         <form class="needs-validation"  novalidate  >
 -->                  <form method="POST" action="submit.php">
 	 <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="#">Licence ID</label>
                    </div>
                    <div class="col-md-6 mb-3">
                     <input type="text" class="form-control abc" name="ID" id="" placeholder="" value="<?php echo $arr['Licence_id'] ?>" readonly>
                   </div>
               </div>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="#">Status (0/1 (Not permitted/permitted)  )</label>
                    </div>
                    <div class="col-md-6 mb-3">
                     <input type="text" class="form-control" name="app" id="" placeholder="" value="<?php echo $arr['Status'] ?>" required>
                     </div>
                 </div>
                    
                  
                    <button class="btn btn-outline-success my-2 my-sm-0" name="sub" type="submit">Approve Proof</button>
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