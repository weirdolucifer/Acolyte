<!doctype html>
<html lang="en">
  <head>
    <title>Acolyte | Approve Proof</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/lgo1.gif" />
    <link href="css/login.css" rel="stylesheet">
    <link href="css/citizen.css" rel="stylesheet">

 
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
      <u><h1>Police Station Details</h1></u>
      <br>
      <br>
                 <?php

                    if(isset($_POST['value1']))
                    {

                    
                  
                    $Department = trim(strip_tags($_POST['value1']));

                     mysql_connect("localhost", "root", "") or die(mysql_error()); 
                     mysql_select_db("Law") or die(mysql_error()); 
                     $query= mysql_query("SELECT * FROM Case_Details WHERE Department='".$Department."' ")or die(mysql_error());

                    

                     $arr = mysql_fetch_array($query);
                     
                     ?>


                     <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Station Code</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h6><?php echo $arr['Case_ID']; ?></h6>
                     </div>
                    </div>

                  
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">State</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h6><?php echo $arr['State']; ?></h6>
                     </div>
                    </div> 
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Zone</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h6><?php echo $arr['Zone']; ?></h6>
                     </div>
                    </div> 
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="#">Location</label>
                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <h6><?php echo $arr['Location']; ?></h6>
                     </div>
                     </div> 


                       <?php  
                       $i=1;  
                              while($results = mysql_fetch_array($raw_results))
                              {

                                ?>
                                  
                                  <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="#">Department <?php echo $i; ?></label>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                      
                                        <h6><?php echo $results['Departmentname']; ?></h6>
                                     </div>
                                     </div> 
                                  
                                  <?php
                                  $i++;
                              }
                        ?>

                        <?php  
                       $i=1;  
                              while($results1 = mysql_fetch_array($raw_results1))
                              {

                                ?>
                                  
                                  <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="#">Street <?php echo $i; ?></label>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                      
                                        <h6><?php echo $results1['Street']; ?></h6>
                                     </div>
                                     </div> 
                                  
                                  <?php
                                  $i++;
                              }
                        ?>

















                       
                     
                </center>
                <br><br><br>
                <center>
                  <form >
                  <a href="log1.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"> Back to previous page</a>
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