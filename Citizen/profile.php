
<!doctype html>
<html lang="en">
  <head>
    <title>Acolyte | Citizen</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/lgo1.gif" />
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/citizen.css" rel="stylesheet">
  </head>
<?php 
 session_start();
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("Law") or die(mysql_error()); 
 $query= mysql_query("SELECT * FROM `Citizen` WHERE `Citizen_id` = '".$_SESSION['sess_user']."'")or die(mysql_error());
 $arr = mysql_fetch_array($query);
 $num = mysql_numrows($query);
?>


  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Acolyte</a>
      <b><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Citizen</a></b>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="out.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="users"></span>
                  Profile <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#FIR1">
                  <span data-feather="file-text"></span>
                  e-FIR
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#FIR2">
                  <span data-feather="file"></span>
                  View FIR
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#Licence">
                  <span data-feather="folder-plus"></span>
                  Apply for Licence
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Licence1">
                  <span data-feather="folder-plus"></span>
                  View Licences
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#PS">
                  <span data-feather="map-pin"></span>
                  Know your Police Station
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="chpass.php">
                  <span data-feather="unlock"></span>
                  Change Password
                </a>
              </li>
             
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Provided Proofs</span>
              <a class="d-flex align-items-center text-muted" href="#">

              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#Aadhar">
                  <span data-feather="file-text"></span>
                  Aadhar 
                </a>
              </li>
             
             
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Profile</h1>
            
          </div>
        

    <div class="container">

     <div class="row">
     
      <?php if($num > 0){ ?>
        <div class="col-md-4 order-md-2 mb-4">
          
        
         <img class="d-block mx-auto mb-4" src="../images/1.png" alt="" width="200" height="200">
 
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal Details</h4>
          <br>
          

          <form class="needs-validation" novalidate>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Citizen_ID</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Citizen_id']; ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Name']; ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">DOB</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['DOB']; ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Age</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Age']; ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Parent's Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Parents_name']; ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Qualification</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Qualification']; ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Address']; ?></h6>
             </div>
            </div>
 
  
          </form>
          
        </div>
        <?php }else{ ?>
        <div class="col-md-4 order-md-2 mb-4">
          <h5 >
            <center>This is me</center>
          
          </h5>
         
        <img class="d-block mx-auto mb-4" src="../images/1.png" alt="" width="200" height="200">
          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal Details</h4>
          <br>
          

          <form class="needs-validation" novalidate>
            

           User not found.
           </form>

      </div>
      <?php } ?>
      </div>
         </div>
          <br><br><br><br><br> 
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>
            <br><br><br><br><br> 
    <section id ="FIR1" class="section-padding">
         <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">
            e-FIR</h1>
            
          </div>

    <div class="container">
      
      <div class="row">
        <div class="col-md-8 order-md-1" >
      
          <?php if($num > 0){ ?>
          <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="#FIR1">
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="dept" placeholder="Crime/traffic/Woman Empowerment" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Citizen/Group Applied by</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="pass" placeholder="Name of Citizen/Group Applied by"  required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Citizen/Group Applied to</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="pass1" placeholder="Name of Citizen/Group Applied to"  required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Date</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="pass2" placeholder="12/12/2003" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Upload Application</label>
                
              </div>
              <div class="col-md-6 mb-3">
             <input type="file" class="form-control" id="fileToUpload"  name="image"  required>
             </div>
            </div>

            <br><br>
           
           <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Apply FIR</button>


          </form>
           <?php

                    if(isset($_POST['submit']))
                    {

                    $user=$arr['Citizen_id'];
                    $Dept=$_POST['dept'];
                    $pass=$_POST['pass'];
                    $pass1=$_POST['pass1'];
                    $pass2=$_POST['pass2'];
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if($check !== false){
                          $image = $_FILES['image']['tmp_name'];
                          $imgContent = addslashes(file_get_contents($image));
                        }

                    if($Dept!= NULL){
                    mysql_query("INSERT INTO FIR VALUES (DEFAULT,'".$Dept."', '".$pass."','".$pass1."','".$pass2."','".$imgContent."')");
                    $user_check_query1 = "SELECT FIR_ID FROM FIR ORDER BY FIR_ID DESC LIMIT 1";
                    $result1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'Law'),$user_check_query1);
                    $ID = mysqli_fetch_assoc($result1);
                    mysql_query("INSERT INTO files VALUES ('".$user."','".$ID['FIR_ID']."')");
                    $user=NULL;
                    $Dept=NULL;
                    $pass=NULL;
                    $pass1=NULL;
                    $pass2=NULL;
                    $check=NULL;
                  }


                    }
                    
                    ?> 





          <?php }else{ ?>
     
          Citizen not found
          <?php } ?>
     </div>
        </div>
      </div>
       
            
</section>
<br><br><br><br><br>
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>






<section id ="FIR2" class="section-padding">
         <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">View Applied FIR</h1>
            
          </div>

    <div class="container">
   
    <form class="needs-validation"  novalidate  >
      <div class="row">
              <div class="col-md-6 mb-3">
           <br><br>
             <center>
            
                  <?php
                         if($num > 0 ){
                          
                         $raw_results = mysql_query("SELECT FIR_ID FROM files WHERE Citizen_id='".$_SESSION['sess_user']."'") or die(mysql_error());
                          
                          if(mysql_num_rows($raw_results) > 0 )
                          {  
                            ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <h5>FIR_ID</h5>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h5>View FIR</h5>
                             </div>
                            </div>

                           <?php 
                           }   
                              while($results = mysql_fetch_array($raw_results))
                              {
                                ?>

                            
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <input type="text" class="form-control" name="ID" placeholder="" value="<?php echo $results['FIR_ID']; ?>" readonly>
                                       
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      
                                    <a href="image.php?ID=<?php echo $results['FIR_ID']; ?>" class="btn btn-outline-success my-2 my-sm-0" name="go" type="submit">View FIR</a>
                                   </div>
                                  </div>
                              
                                  
                                  <?php
                              }
                          
                         }
                          else
                          {
                            ?>
                             
                              <font color="red"><h6>Citizen Not Found</h6></font>
                             
                          <?php
                          }
                        
                          
                  ?>
                  </center>
                </div>

             
  </form>

</div>
  
</section>
<br><br><br><br><br>

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>


 <section id ="Licence" class="section-padding">
         <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">
            Apply for Licence</h1>
            
          </div>

    <div class="container">
      
      <div class="row">
        <div class="col-md-8 order-md-1" >
      
          <?php if($num > 0){ ?>
          <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="">
               <div class="row">
              <div class="col-md-6 mb-3">
                <h6><label for="firstName">Upload Licence</label></h6>
                
              </div>
              <div class="col-md-6 mb-3">
             <input type="file" class="form-control" id="fileToUpload"  name="image"  required>
             </div>
            </div>

            <br><br>
           
           <button class="btn btn-outline-success my-2 my-sm-0" name="submitx" type="submit">Apply Licence</button>


          </form>
           <?php

                    if(isset($_POST['submitx']))
                    {
                    $user=NULL;
                    
                    $check=NULL;

                    $user=$arr['Citizen_id'];
                   
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if($check !== false){
                          $image = $_FILES['image']['tmp_name'];
                          $imgContent = addslashes(file_get_contents($image));
                        }

                    if($imgContent!= NULL){
                    mysql_query("INSERT INTO Licence VALUES (DEFAULT,'".$user."','".$imgContent."','0')");
                    
                    
                  }


                    }
                    
                    }?>
                  </div>
                </div></div>
          
         
</section>
<<br><br><br><br><br>
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>






<section id ="Licence1" class="section-padding">
         <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">View Licences</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate>
      <div class="container">
   
      
                   
            <br><br>
            
                  <?php
                          if ($num > 0 )
                          {
                          
                           $raw_results = mysql_query("SELECT Licence_id FROM Licence WHERE Citizen_id='".$_SESSION['sess_user']."'") or die(mysql_error());
                          if(mysql_num_rows($raw_results) > 0 )
                          {  
                            ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <h5>Licence ID</h5>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h5>View Image</h5>
                             </div>
                            </div>
                           
                           <?php    
                              while($results = mysql_fetch_array($raw_results))
                              {
                                ?>

                                  
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <input type="text" class="form-control" name="ID" placeholder="" value="<?php echo $results['Licence_id']; ?>" readonly>
                                       
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      
                                    <a href="licence.php?ID=<?php echo $results['Licence_id']; ?>" class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">View Image</a>
                                   </div>
                                  </div>
                           
                                  
                                  <?php
                              }
                          }
                          
                          else
                          {
                            ?>
                             
                              <font color="red"><h6>Not Found</h6></font>
                             
                          <?php
                          }
                        }
                          
                  ?>

             
  </form>

</div>
  
</section>
<br><br><br><br><br>

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br> 
 <section id ="PS" class="section-padding">
         <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Details of Police Station</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation"  novalidate action="drop.php" method="POST" >
         <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Select your Zone</label>
              </div>
              
              <div class="col-md-6 mb-3">
                <select class="custom-select d-block w-100" name="value"> 
                  <option value="all">all</option> 
                  <option value="Lucknow">Lucknow</option> 
                  <option value="Atari">Atari</option> 
                  <option value="ali">ali</option> 
              </select> 
               
             </div>
           </div>
            
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Select your Location</label>
              </div>
              <div class="col-md-6 mb-3">
                
              <select class="custom-select d-block w-100" name="value1"> 
                  <option value1="all">all</option> 
                  <option value1="Dhoomanganj">Dhoomanganj</option> 
                  <option value1="gwalior">gwalior</option> 
                  
                  <option value1="ali">ali</option> 
              </select>    
             </div>
            </div>
            <br><br>
             <center><button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Find Details</button></center>
          </form>
          </div>

</section>
<br><br><br><br><br>

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br> 

  <section id ="Aadhar" class="section-padding">
        <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">
            Applied Proof</h1>
            
          </div>


    <div class="container">  
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5><label for="#">Cross Check Status</label></h5>
              </div>
       </div>
                 <?php
                         if($num > 0 ){
                          
                         $raw_results = mysql_query("SELECT CrossCheckStatus
                          FROM Citizen WHERE Citizen_id='".$_SESSION['sess_user']."'") or die(mysql_error());
                          
                          if(mysql_num_rows($raw_results) > 0 )
                          {  
                            ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <h6>Current Status</h6>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h6><?php if ($arr['CrossCheckStatus'] == 0){
                               ?> 
                               <font color="red">
                                <?php
                                echo "Not Verified";} ?></font>
                               <?php if ($arr['CrossCheckStatus'] == 1){
                                ?> 
                               <font color="green">
                                <?php
                                echo "Verified";} ?></font>
                               
                              </h6>
                             
                             </div>
                            </div>
                            <?php }} ?>



             </div>
            </div>

            <?php
             echo '<img src="data:image/jpeg;base64,'.base64_encode( $arr['image'] ).'" class="d-block mx-auto mb-4"  width="200" height="200" />';
          ?>
     
    </div>
  </section>       
<br><br><br><br><br>


   
       
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>






      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2019 Acolyte</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  
  </body>
</html>
