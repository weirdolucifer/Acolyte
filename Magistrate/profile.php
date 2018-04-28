
<!doctype html>
<?php 
 session_start();
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("Law") or die(mysql_error()); 
$query= mysql_query("SELECT * FROM `magistrate` WHERE `Name` = '".$_SESSION['sess_user']."'")or die(mysql_error());
$arr = mysql_fetch_array($query);
$num = mysql_numrows($query);
?>
<html lang="en">
  <head>
    <title>Acolyte | Magistrate </title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/lgo1.gif" />
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/citizen.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Acolyte</a>

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
                <a class="nav-link" href="#Case1">
                  <span data-feather="folder"></span>
                  Cases List
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#case">
                  <span data-feather="file"></span>
                  Case Detail
                </a>
              </li>
              
              
              <li class="nav-item">
                <a class="nav-link " href="chpass.php">
                  <span data-feather="unlock"></span>
                  Change Password 
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
        <div class="col-md-4 order-md-2 mb-4">
          
         
        <img class="d-block mx-auto mb-4" src="../images/4.png" alt="" width="200" height="200">
          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal Details</h4>
          <br>
          <?php if($num > 0){ ?>
          <form class="needs-validation" novalidate>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $arr['Name']; ?></h6>
             </div>
            </div>


           <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">District</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $arr['District']; ?></h6>
             </div>
            </div>


            
  
          </form>
          <?php }else{ ?>
           Magistrate not found.
           <?php } ?>
        </div>

      </div>
      </div>
         
         
  

 
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>
 <<br><br><br><br><br>


<section id ="Case1" class="section-padding">
         <br><br><br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Case List</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation"  novalidate  method="POST" >
         <div class="row">
              <div class="col-md-6 mb-3">
                <h6>Select your Department</h6>
              </div>
              
              <div class="col-md-6 mb-3">
                <select class="custom-select d-block w-100" name="value1"> 
                  <option value1="Woman">Woman </option> 
                  <option value1="Crime">Crime</option> 
                  <option value1="Civil">Cvil</option> 
                  <option value1="Cyber">Cyber</option> 
              </select> 
               
             </div>
           </div>
          <br>
             <center><button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Find Details</button></center>
          </form>
          <br><br>

           <?php
                  if (isset($_POST['value1']))
                          {
                          $query5 = $_POST['value1']; 
                          
                  
                          $raw_results = mysql_query("SELECT * FROM Case_Details WHERE Department='".$query5."'") or die(mysql_error());
                          
                          if(mysql_num_rows($raw_results) > 0 && $arr != NULL)
                          {  
                            ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <h5>Case ID</h5>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h5>Cases under <?php echo $query5; ?> department  </h5>
                             </div>
                            </div>

                           <?php    
                              while($results = mysql_fetch_array($raw_results))
                              {
                                ?>

                                  <form method="POST" action="profile.php#case">
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <input type="text" class="form-control" name="ID" placeholder="" value="<?php echo $results['Case_ID'] ?>" readonly>
                                       
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      
                                    <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Copy ID and go to Case Details Section</button>
                                   </div>
                                  </div>
                                </form>
                                  
                                  <?php
                              }
                          }
                          else if ($arr == NULL) {?>
                          
                             
                              <font color="red"><h6>Please Login </h6></font>
                           <?php  
                          }
                          else
                          {
                            ?>
                             
                              <font color="red"><h6>Not Found</h6></font>
                             
                          <?php
                          }
                        }
                          
                  ?>
          </div>

</section>
<br><br><br><br><br>

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br> 





  <section id ="case" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Case Details</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation"  novalidate  >
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Input the Case ID</h5>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-inline mt-2 mt-md-0">
                  <form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query2"  placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#case" type="submit">Search</button>
                  </form>

                  <?php
                          if (isset($_GET['query2']))
                          {
                          $query2 = $_GET['query2']; 
                          $raw_results = mysql_query("SELECT * FROM Case_Details WHERE Case_ID='".$query2."'") or die(mysql_error());
                          $raw_results1 = mysql_query("SELECT * FROM Charges WHERE Case_ID='".$query2."'") or die(mysql_error());
                          
                          if(mysql_num_rows($raw_results) > 0 && $arr != NULL)
                          { 
                               
                              while($results = mysql_fetch_array($raw_results))
                              {
                                ?>

             </div>
          </div>
    </div>
                   
            <br><br>
            <form method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Case ID</label>
              </div>
              <div class="col-md-6 mb-3">
                
               <h6><?php echo $results['Case_ID'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">FIR ID</label>
              </div>
              <div class="col-md-6 mb-3">
                
               <h6><?php echo $results['FIR_ID'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Status</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Status" placeholder="" value="<?php echo $results['Status'] ?>" required>
               
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Location</label>
              </div>
              <div class="col-md-6 mb-3">
               <h6><?php echo $results['Location'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Property_Seizer</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $results['Property_seizer'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $results['Department'] ?></h6>
             
             </div>
            </div>

           <?php 
           if($raw_results1 > 0)
           {?>
           <br>
            <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Chareges Filled</h5>
              </div>
              <div class="col-md-6 mb-3">
                <h5>Criminal ID</h5>
             </div>
            </div>
            <?php
            $i=1;
            while($results1 = mysql_fetch_array($raw_results1)){
                      $dep1[$i]= $results1['Charges_filed'];
                      $dep2[$i]= $results1['Criminal_ID'];
            ?>
            <div class="row">
              <div class="col-md-6 mb-3">
                <h6><?php echo $results1['Charges_filed'] ?></h6>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $results1['Criminal_ID'] ?></h6>
             </div>
            </div>

              

            <?php 
         $i++;
        }} ?>
          

      <br><br>
           
           <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Save Changes</button>
            </form>
            
                 <?php

                    if(isset($_POST['submit']))
                    {
                  
                    $user=$query2;
                    mysql_query("UPDATE Case_Details SET Status='".$_POST['Status']."' WHERE Case_ID ='".$user."'");
                     }
                    
                    ?>  






       </form>
            



       <?php }
                          }
                          else if ($arr == NULL) {?>
                               </div></div></div>
                              <br><br>
                              <font color="red"><h6>Please Login </h6></font>
                           <?php  
                          }
                          else
                          {
                            ?>
                              </div></div></div>
                              <br><br>
                              <font color="red"><h6>Not Found</h6></font>
                             
                          <?php
                          }
                        }
                          
                  ?>
    
      

</div>
  
</section>


   
       
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
