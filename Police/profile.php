
<!doctype html>
<?php 
$results =NULL;
$query1=NULL;
 session_start();
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("Law") or die(mysql_error()); 
 $query= mysql_query("SELECT * FROM `police` WHERE `Officer_id` = '".$_SESSION['sess_user']."'")or die(mysql_error());
 $arr = mysql_fetch_array($query);
 $num = mysql_numrows($query);
?>
<html lang="en">
  <head>
    <title>Acolyte | Police Officer</title>
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
                  Profile 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#criminal">
                  <span data-feather="file-text"></span>
                  Criminal Record
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#case">
                  <span data-feather="file"></span>
                  Case Detail
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#citizen">
                  <span data-feather="user"></span>
                  Citizens
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Dept">
                  <span data-feather="award"></span>
                  Departments
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#proof">
                  <span data-feather="edit"></span>
                  Permit License
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chpass.php">
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
          <h5 >
            <center>This is me</center>
          
          </h5>
         
        <img class="d-block mx-auto mb-4" src="../images/3.png" alt="" width="200" height="200">
          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal Details</h4>
          <br>
          <?php if($num > 0){ ?>

          <form class="needs-validation" novalidate>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Officer_ID</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Officer_id']; ?></h6>
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
                <label for="#">Officer Type</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Type']; ?></h6>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Date of Birth</label>
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
                <h6> <?php echo $arr['DOB']; ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Homeplace</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Homeplace']; ?></h6>
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
  
          </form>
          <?php }else{ ?>
           Officer not found.
           <?php } ?>
        </div>

      </div>
      </div>
         
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>
  
      <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Police Station Details</h4>
          <br>
          <form class="needs-validation" novalidate>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Station Code</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Station_Code']; ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name</label>
              </div>
              <div class="col-md-6 mb-3">
               <h6> <?php echo $arr['Departmentname']; ?></h6>
             </div>
            </div>
           
        <?php

        $query1= mysql_query("SELECT * FROM `PS` WHERE `Station_Code` = '".$arr['Station_Code']."'")or die(mysql_error());
        $arr1 = mysql_fetch_array($query1);

        $query2= mysql_query("SELECT * FROM `Streets` WHERE `Station_Code` = '".$arr['Station_Code']."'")or die(mysql_error());
       $arr2 = mysql_fetch_array($query2);

         ?>
     




            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">State</label>
              </div>
              <div class="col-md-6 mb-3">
               <h6> <?php echo $arr1['State']; ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Zone</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr1['Zone']; ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Location</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr1['Location']; ?></h6>
             </div>
            </div>
            <?php 
            if($arr2 > 0){ ?>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Streets</label>
              </div>
              <div class="col-md-6 mb-3">
               <?php
            while($resultsx = mysql_fetch_array($query2)){
               ?>
               <h6> <?php echo $resultsx['Street']; ?>  </h6>
               <?php } ?>
             </div>
            </div>
            <?php } ?>

          </form>
        </div>
      </div>
     </div>
            



           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>



    <section id ="criminal" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Criminal Record</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate>
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Input the Criminal ID</h5>
              </div>
              <div class="col-md-6 mb-3">
              	<div class="form-inline mt-2 mt-md-0">
              		<form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query1" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#criminal"  type="submit">Search</button>
                    </form>
                     <?php
                          if (isset($_GET['query1']))
                          {
                          $query1 = $_GET['query1']; 
                          $raw_results = mysql_query("SELECT * FROM Criminal WHERE Criminal_ID='".$query1."'") or die(mysql_error());
                          
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
                <label for="#">Criminal ID</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $results['Criminal_ID'] ?></h6>
             </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Name" placeholder="" value="<?php echo $results['Name'] ?>" required>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Date of Birth</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="DOB" placeholder="" value="<?php echo $results['DOB'] ?>" required>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Age</label>
              </div>
              <div class="col-md-6 mb-3">
            
                <input type="text" class="form-control" id="" name="Age" placeholder="" value="<?php echo $results['Age'] ?>" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address</label>
              </div>
              <div class="col-md-6 mb-3">
               
                <input type="text" class="form-control" id="" name="Address" placeholder="" value="<?php echo $results['Address'] ?>" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Parent's Name</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Parents_name"  placeholder="" value="<?php echo $results['Parents_name'] ?>" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Job</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Job" placeholder="" value="<?php echo $results['Job'] ?>" required>
             </div>
            </div>
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">State</label>
            
              </div>
              <div class="col-md-6 mb-3">
               
                <input type="text" class="form-control" id="" name="State" placeholder="" value="<?php echo $results['State'] ?>" required>
             </div>
            </div>




             


             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Warrent Status</label>
              </div>
              <div class="col-md-6 mb-3">
              	<input type="text" class="form-control" id="" name="Warrant_Status" placeholder="" value="<?php echo $results['Warrant_Status'] ?>" required>
              
             </div>
            </div>

           <br><br>
           
             <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Save Changes</button>
            </form>
            
                 <?php

                    if(isset($_POST['submit']))
                    {

                    $user=$query1;
                 
            

                    mysql_query(" UPDATE Criminal SET Name='".$_POST['Name']."', Parents_name='".$_POST['Parents_name']."', DOB='".$_POST['DOB']."', Age='".$_POST['Age']."', Address='".$_POST['Address']."', State='".$_POST['State']."', Job='".$_POST['Job']."', Warrant_Status='".$_POST['Warrant_Status']."'  where

                     Criminal_ID='".$user."' ");


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
                
               <h6><?php echo $results['Status'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Location</label>
              </div>
              <div class="col-md-6 mb-3">
               <input type="text" class="form-control" id="" name="Location" placeholder="" value="<?php echo $results['Location'] ?>" required>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Property_Seizer</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Property_seizer" placeholder="" value="<?php echo $results['Property_seizer'] ?>" required>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name</label>
              </div>
              <div class="col-md-6 mb-3">
              	<input type="text" class="form-control" id="" name="Department" placeholder="" value="<?php echo $results['Department'] ?>" required>
             
             </div>
            </div>

           <?php 
           if($raw_results1 > 0)
           {?>
           <br>
           	<div class="row">
              <div class="col-md-6 mb-3">
                <h6>Chareges Filled</h6>
              </div>
              <div class="col-md-6 mb-3">
                <h6>Criminal ID</h6l>
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
                <input type="text" class="form-control" id="" name="Charges_filed<?php echo $i; ?>" placeholder=""  value="<?php echo $results1['Charges_filed'] ?>" readonly>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Criminal_ID<?php echo $i; ?>" placeholder=""  value="<?php echo $results1['Criminal_ID'] ?>" readonly>
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
                    mysql_query("UPDATE Case_Details SET Location='".$_POST['Location']."',Property_seizer='".$_POST['Property_seizer']."',Department='".$_POST['Department']."' WHERE Case_ID ='".$user."'");
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




<section id ="citizen" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Citizen Details</h1>
            
          </div>
 <div class="container">
   
      <form class="needs-validation"  novalidate  >
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Input the Citizen ID</h5>
              </div>
              <div class="col-md-6 mb-3">
              	<div class="form-inline mt-2 mt-md-0">
              		<form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query3"  placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#case" type="submit">Search</button>
                  </form>

                  <?php
                          if (isset($_GET['query3']))
                          {
                          $query3 = $_GET['query3']; 
                          $raw_results = mysql_query("SELECT * FROM Citizen WHERE Citizen_id='".$query3."'") or die(mysql_error());
                    
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
                <label for="#">Citizen ID</label>
              </div>
              <div class="col-md-6 mb-3">
                
               <h6><?php echo $results['Citizen_id'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Citizen Name</label>
              </div>
              <div class="col-md-6 mb-3">
                
               <h6><?php echo $results['Name'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Date Of Birth</label>
              </div>
              <div class="col-md-6 mb-3">
               <h6><?php echo $results['DOB'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Age</label>
              </div>
              <div class="col-md-6 mb-3">
               <h6><?php echo $results['Age'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $results['Address'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Parent's Name</label>
              </div>
              <div class="col-md-6 mb-3">
               <h6><?php echo $results['Parents_name'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Qualification</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6><?php echo $results['Qualification'] ?></h6>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address Proof</label>
              </div>
              <div class="col-md-6 mb-3">
              <?php
             echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['image'] ).'" class="d-block mx-auto mb-4"  width="200" height="200" />';
          ?>
              
             </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Cross Check Status</label>
              </div>
              <div class="col-md-6 mb-3">
               <input type="text" class="form-control" name="a" id="" placeholder="" value="<?php echo $results['CrossCheckStatus'] ?>" required>
             </div>
            </div>
      

      <br><br>
           
           <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Save Changes</button>

</form>
            
                 <?php

                    if(isset($_POST['submit']))
                    {
                  
                    $user=$query3;
                    mysql_query("UPDATE Citizen SET CrossCheckStatus='".$_POST['a']."' WHERE Citizen_id ='".$user."'");
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


<section id ="Dept" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Department Cases</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate>
      <div class="container">
   
      <form class="needs-validation"  novalidate  >
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5> Name of Department</h5>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-inline mt-2 mt-md-0">
                  <form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query5"  placeholder="<?php echo $arr['Departmentname'] ?>" aria-label="Search" readonly="">
               
                  </form>
                   </div>
          </div>
    </div>
                   
            <br><br>
            
                  <?php
                          if (isset($arr['Departmentname']))
                          {
                  
                          $raw_results = mysql_query("SELECT * FROM Case_Details WHERE Department='".$arr['Departmentname']."'") or die(mysql_error());
                          
                          if(mysql_num_rows($raw_results) > 0 && $arr != NULL)
                          {  
                            ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <h5>Case ID</h5>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h5>View Cases </h5>
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

             
  </form>

</div>
  
</section>


       
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>

<section id ="proof" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Permit Licence</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate>
      <div class="container">
   
      <form class="needs-validation"  novalidate  >
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Input the Licence ID</h5>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-inline mt-2 mt-md-0">
                  <form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query4"  placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#proof" type="submit">Search</button>
                  </form>
                   </div>
          </div>
    </div>
                   
            <br><br>
            
                  <?php
                          if (isset($_GET['query4']))
                          {
                          $query4 = $_GET['query4']; 
                          $raw_results = mysql_query("SELECT * FROM Licence WHERE Licence_id='".$query4."'") or die(mysql_error());
                          
                          if(mysql_num_rows($raw_results) > 0 && $arr != NULL)
                          {  
                            ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <h5>Citizen ID</h5>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h5>View Licence</h5>
                             </div>
                            </div>

                           <?php    
                              while($results = mysql_fetch_array($raw_results))
                              {
                                ?>

                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <input type="text" class="form-control" name="ID" placeholder="" value="<?php echo $results['Citizen_id'] ?>" readonly>
                                       
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      
                                     <a href="image.php?ID=<?php echo $results['Licence_id']; ?>" class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">View Image</a>
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

             
  </form>

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
   
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
   </script>
  </body>
</html>
