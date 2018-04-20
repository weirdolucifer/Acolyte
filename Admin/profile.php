<!doctype html>
<?php 
 session_start();
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("Law") or die(mysql_error()); 
$query= mysql_query("SELECT * FROM `administrator` WHERE `Username` = '".$_SESSION['sess_user']."'")or die(mysql_error());
$arr = mysql_fetch_array($query);
$num = mysql_numrows($query);
?>
<html lang="en">
  <head>
    <title>Acolyte | Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/lgo1.gif" />
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/citizen.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Acolyte</a>
    <b><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin</a></b>
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
                <a class="nav-link" href="#Police">
                  <span data-feather="award"></span>
                  Appoint Police Officer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#CPS">
                  <span data-feather="plus-circle"></span>
                  Create Police Station
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#PS1">
                  <span data-feather="edit"></span>
                  Edit/View Police Station
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
              <span>View Records</span>
              <a class="d-flex align-items-center text-muted" href="#">

              </a>
            </h6>
            <ul class="nav flex-column mb-2">
               <li class="nav-item">
                <a class="nav-link" href="#criminal">
                  <span data-feather="file-text"></span>
                  Criminal Record
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Dept">
                  <span data-feather="file"></span>
                  Department Cases
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#case">
                  <span data-feather="file"></span>
                  Case Detail
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Citizen">
                  <span data-feather="user"></span>
                  Citizens
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
          
         
        <img class="d-block mx-auto mb-4" src="../images/2.png" alt="" width="200" height="200">
          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal Details</h4>
          <br>
          <form class="needs-validation" novalidate>
            
            
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Username</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $arr['Username']; ?></h6>
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

      </div>
      </div>
         
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>
    <section id ="Police" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Appoint Police Officer</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate method="POST" action="#Police">
     

      <br><br>
 
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Officer ID</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Officer_ID" placeholder="2015001"  required>
             </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Password</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="Password" class="form-control" id="" name="Password"  required>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Name" placeholder="Aviansh Yadav" required>
             </div>
            </div>



            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Type </label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Type" placeholder="Daroga" required>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">DOB</label>
              </div>
              <div class="col-md-6 mb-3">
            
                <input type="text" class="form-control" id="" name="DOB" placeholder="12/12/2005" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Homeplace</label>
              </div>
              <div class="col-md-6 mb-3">
               
                <input type="text" class="form-control" id="" name="Homeplace" placeholder="Kanpur"  required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Qualification</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Qualification" placeholder="B.Sc." required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Station Code</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Station_Code" placeholder="1"  required>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Departmentname" placeholder="Crime/Traffic/Cyber"  required>
             </div>
            </div>
            

           <br><br>
           
             <button class="btn btn-outline-success my-2 my-sm-0" name="submitx" type="submit">Create New Police Station</button>
            </form>
            
                 <?php

                    if(isset($_POST['submitx']))
                    {

                     $Officer_ID=$_POST['Officer_ID'];
                     $Password=$_POST['Password'];
                     $Name=$_POST['Name'];
                     $DOB=$_POST['DOB'];
                     $Type=$_POST['Type'];
                     $Homeplace=$_POST['Homeplace'];
                     $Qualification=$_POST['Qualification'];
                     $Station_Code=$_POST['Station_Code'];
                     $Departmentname=$_POST['Departmentname'];
                     


                    mysql_query("INSERT INTO police VALUES ('".$Officer_ID."', '".$Password."',
                    	'".$Name."', '".$Type."', '".$DOB."', '".$Homeplace."', '".$Qualification."', '".$Station_Code."','".$Departmentname."')");
                  

                    }
                    
                    ?>  




         </div></section>



   
       
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>



    <section id ="CPS" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Create Police Station</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate method="POST">
     

      <br><br>
 
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">State Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="State" placeholder="Uttar Pradesh"  required>
             </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Zone</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Zone"   placeholder="Lucknow" required>
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Location</label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="" name="Location" placeholder="Dhoomanganj" required>
             </div>
            </div>



            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name 1</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Department1" placeholder="Woman Protection" required>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name 2(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
            
                <input type="text" class="form-control" id="" name="Department2" placeholder="Law and Order" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name 3(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
               
                <input type="text" class="form-control" id="" name="Department3" placeholder="Licencing"  required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name 4(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Department4" placeholder="Cyber Crime" required>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department Name 5(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <input type="text" class="form-control" id="" name="Department5" placeholder="Traffic"  required>
             </div>
            </div>
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Street Name 1</label>
            
              </div>
              <div class="col-md-6 mb-3">
               
                <input type="text" class="form-control" id="" name="Street1" placeholder="Jhalwa"  required>
             </div>
            </div>

              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Street Name 2(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
               
                <input type="text" class="form-control" id="" name="Street2" placeholder="Rajpooppur" v required>
             </div>
            </div>



             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Street Name 3(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
                
                <input type="text" class="form-control" id="" name="Street3" placeholder="Rishinagar"  required>
             </div>
            </div>


             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Street Name 4(optional)</label>
              </div>
              <div class="col-md-6 mb-3">
              	<input type="text" class="form-control" id="" name="Street4" placeholder="Anand Vihar"  required>
              
             </div>
            </div>

           <br><br>
           
             <button class="btn btn-outline-success my-2 my-sm-0" name="submity" type="submit">Create New Police Station</button>
            </form>
            
                 <?php

                    if(isset($_POST['submity']))
                    {

                     $State=$_POST['State'];
                     $Zone=$_POST['Zone'];
                     $Location=$_POST['Location'];
                     $Department1=$_POST['Department1'];
                     $Department2=$_POST['Department2'];
                     $Department3=$_POST['Department3'];
                     $Department4=$_POST['Department4'];
                     $Department5=$_POST['Department5'];
                     $Street1=$_POST['Street1'];
                     $Street2=$_POST['Street2'];
                     $Street3=$_POST['Street3'];
                     $Street4=$_POST['Street4'];


                    mysql_query("INSERT INTO PS VALUES (DEFAULT,'".$State."', '".$Zone."',
                    	'".$Location."')");
                  
                    $user_check_query1 = "SELECT Station_Code FROM PS ORDER BY Station_Code DESC LIMIT 1";
                    $result1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'Law'),$user_check_query1);
                     
                    $ID = mysqli_fetch_assoc($result1);
               
                    

                    if($Department1 != NULL)
                    {
                    mysql_query("INSERT INTO `Department`(`Station_Code`, `Departmentname`) VALUES ('".$ID['Station_Code']."','".$Department1."')");
                     }
                    if($Department2 != NULL)
                    {
                    mysql_query("INSERT INTO `Department`(`Station_Code`, `Departmentname`) VALUES ('".$ID['Station_Code']."','".$Department2."')");
                     }
                     if($Department3 != NULL)
                    {
                    mysql_query("INSERT INTO `Department`(`Station_Code`, `Departmentname`) VALUES ('".$ID['Station_Code']."','".$Department3."')");
                     }
                     if($Department4 != NULL)
                    {
                   mysql_query("INSERT INTO `Department`(`Station_Code`, `Departmentname`) VALUES ('".$ID['Station_Code']."','".$Department4."')");
                     }
                     if($Department5 != NULL)
                    {
                     mysql_query("INSERT INTO `Department`(`Station_Code`, `Departmentname`) VALUES ('".$ID['Station_Code']."','".$Department5."')");
                     }
                      if($Street1 != NULL){
                     mysql_query("INSERT INTO `Streets`(`Station_Code`, `Street`) VALUES ('".$ID['Station_Code']."','".$Street1."')");
                      }
                      if($Street2 != NULL){
                     mysql_query("INSERT INTO `Streets`(`Station_Code`, `Street`) VALUES ('".$ID['Station_Code']."','".$Street2."')");
                      }
                      if($Street3 != NULL){
                     mysql_query("INSERT INTO `Streets`(`Station_Code`, `Street`) VALUES ('".$ID['Station_Code']."','".$Street3."')");
                      }
                      if($Street4 != NULL){
                     mysql_query("INSERT INTO `Streets`(`Station_Code`, `Street`) VALUES ('".$ID['Station_Code']."','".$Street4."')");
                      }

                    }
                    
                    ?>  




         </div></section>



   
       
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>
     			
    <section id ="PS1" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit/View Police Station</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation"  novalidate  >
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Input the Station Code</h5>
              </div>
              <div class="col-md-6 mb-3">
              	<div class="form-inline mt-2 mt-md-0">
              		<form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query2"  placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#PS1" type="submit">Search</button>
                  </form>

                  <?php
                          if (isset($_GET['query2']))
                          {
                          $query2 = $_GET['query2']; 
                          $raw_results = mysql_query("SELECT * FROM PS WHERE Station_Code='".$query2."'") or die(mysql_error());
                          $raw_results1 = mysql_query("SELECT * FROM Department WHERE Station_Code='".$query2."'") or die(mysql_error());
                          $raw_results2 = mysql_query("SELECT * FROM Streets WHERE Station_Code='".$query2."'") or die(mysql_error());
                          
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
                <label for="#">Station Code</label>
              </div>
              <div class="col-md-6 mb-3">
              	<h6><?php echo $results['Station_Code'] ?></h6>
                
            
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">State</label>
              </div>
              <div class="col-md-6 mb-3">
                
                <input type="text" class="form-control" id="" name="State" value="<?php echo $results['State'] ?>"  >
              
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Zone</label>
              </div>
              <div class="col-md-6 mb-3">
              	<input type="text" class="form-control" id="" name="Zone" value="<?php echo $results['Zone'] ?>"  >
               
             </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Location</label>
              </div>
              <div class="col-md-6 mb-3">
              	<input type="text" class="form-control" id="" name="Location" value="<?php echo $results['Location'] ?>"  >
               
             </div>
            </div>
            <?php
            $i=1;
           while($results1 = mysql_fetch_array($raw_results1))
                              {
                              	$dep[$i]= $results1['Departmentname'];
                                ?>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Department name <?php echo $i; ?></label>
              </div>
              <div class="col-md-6 mb-3">
                <h6></h6>
                <input type="text" class="form-control" id="" name="Dept<?php echo $i; ?>" value="<?php echo $results1['Departmentname'] ?>" >
              
             </div>
            </div>

            <?php $i++; }?>

        <?php
            $i=1;
           while($results2 = mysql_fetch_array($raw_results2))
                              {
                              	$str[$i]= $results2['Street'];
                                ?>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Street <?php echo $i; ?></label>
              </div>
              <div class="col-md-6 mb-3">
                
                <input type="text" class="form-control" id="" name="str<?php echo $i; ?>" value="<?php echo $results2['Street'] ?>" >
              
             </div>
            </div>

            <?php $i++; }

        } ?>

      <br><br>
           
           <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Save Changes</button>
            </form>
            
                 <?php

                    if(isset($_POST['submit']))
                    {
                    $user=$query2;
                    mysql_query("UPDATE `PS` SET `State`='".$_POST['State']."',`Zone`='".$_POST['Zone']."',`Location`='".$_POST['Location']."' WHERE Station_Code ='".$user."'");

                    
                    if(isset($_POST['Dept1'])){
                      $Dept1=$_POST['Dept1'];
                      if($dep[1]!= $Dept1){
                       mysql_query("UPDATE Department SET Departmentname='".$Dept1."' where  Station_Code ='".$user."' AND Departmentname = '".$dep[1]."' LIMIT 1");
                      }
                     }
                     if(isset($_POST['Dept2'])){
                      $Dept2=$_POST['Dept2'];
                      if($dep[2]!= $Dept2){
                       mysql_query("UPDATE Department SET Departmentname='".$Dept2."' where  Station_Code ='".$user."' AND Departmentname = '".$dep[2]."' LIMIT 1");
                      }
                     }

                      if(isset($_POST['Dept3'])){
                      $Dept3=$_POST['Dept3'];
                      if($dep[3]!= $Dept3){
                       mysql_query("UPDATE Department SET Departmentname='".$Dept3."' where  Station_Code ='".$user."' AND Departmentname = '".$dep[3]."' LIMIT 1");
                      }
                     }
                     if(isset($_POST['Dept4'])){
                      $Dept4=$_POST['Dept4'];
                      if($dep[4]!= $Dept4){
                       mysql_query("UPDATE Department SET Departmentname='".$Dept4."' where  Station_Code ='".$user."' AND Departmentname = '".$dep[4]."' LIMIT 1");
                      }
                     }
                     if(isset($_POST['Dept5'])){
                      $Dept5=$_POST['Dept5'];
                      if($dep[5]!= $Dept5){
                       mysql_query("UPDATE Department SET Departmentname='".$Dept5."' where  Station_Code ='".$user."' AND Departmentname = '".$dep[5]."' LIMIT 1");
                      }
                     }


                    if(isset($_POST['str1'])){
                      $str1=$_POST['str1'];
                      if($str[1]!= $str1){
                       mysql_query("UPDATE Streets SET Street='".$str1."' where  Station_Code ='".$user."' AND Street = '".$str[1]."' LIMIT 1");
                      }
                     }
                     if(isset($_POST['str2'])){
                      $str2=$_POST['str2'];
                      if($str[2]!= $str2){
                       mysql_query("UPDATE Streets SET Street='".$str2."' where  Station_Code ='".$user."' AND Street = '".$str[2]."' LIMIT 1");
                      }
                     }
                     if(isset($_POST['str3'])){
                      $str3=$_POST['str3'];
                      if($str[3]!= $str3){
                       mysql_query("UPDATE Streets SET Street='".$str3."' where  Station_Code ='".$user."' AND Street = '".$str[3]."' LIMIT 1");
                      }
                     }
                     if(isset($_POST['str4'])){
                      $str1=$_POST['str4'];
                      if($str[4]!= $str4){
                       mysql_query("UPDATE Streets SET Street='".$str4."' where  Station_Code ='".$user."' AND Street = '".$str[4]."' LIMIT 1");
                      }
                     }


                    }
                    
                    ?>  






       </form>
            



       <?php 
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
                <h6> <?php echo $results['Name'] ?></h6>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Date of Birth</label>
              </div>
              <div class="col-md-6 mb-3">
              
               <h6> <?php echo $results['DOB'] ?></h6>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Age</label>
              </div>
              <div class="col-md-6 mb-3">
            
               <h6> <?php echo $results['Age'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address</label>
              </div>
              <div class="col-md-6 mb-3">
               
               <h6> <?php echo $results['Address'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Parent's Name</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <h6> <?php echo $results['Parents_name'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Job</label>
              </div>
              <div class="col-md-6 mb-3">
              
              <h6> <?php echo $results['Job'] ?></h6>
             </div>
            </div>
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">State</label>
            
              </div>
              <div class="col-md-6 mb-3">
               
              <h6> <?php echo $results['State'] ?></h6>
             </div>
            </div>

              




             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Warrant Status</label>
              </div>
              <div class="col-md-6 mb-3">
              <h6> <?php echo $results['Warrant_Status'] ?></h6>
              
             </div>
            </div>

            </form>
            

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

<br><br><br><br><br>


   
       
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          </div>


       <br><br><br><br><br>


<section id ="Dept" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Department Cases</h1>
            
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

             
  </form>

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
           
            </form>
            
                





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




  <section id ="Citizen" class="section-padding">
         <br><br><br>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Citizen Detail</h1>
            
          </div>

    <div class="container">
   
      <form class="needs-validation" novalidate>
      <div class="row">
              <div class="col-md-6 mb-3">
                <h5>Input the Citizen ID</h5>
              </div>
              <div class="col-md-6 mb-3">
              	<div class="form-inline mt-2 mt-md-0">
              		<form method="GET">
                <input class="form-control mr-sm-2" type="text" name="query6" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#Citizen"  type="submit">Search</button>
                    </form>
                     <?php
                          if (isset($_GET['query6']))
                          {
                          $query6 = $_GET['query6']; 
                          $raw_results = mysql_query("SELECT * FROM Citizen WHERE Citizen_id='".$query6."'") or die(mysql_error());
                          
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
                <h6> <?php echo $results['Citizen_id'] ?></h6>
             </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Name</label>
              </div>
              <div class="col-md-6 mb-3">
                <h6> <?php echo $results['Name'] ?></h6>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Date of Birth</label>
              </div>
              <div class="col-md-6 mb-3">
              
               <h6> <?php echo $results['DOB'] ?></h6>
             </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Age</label>
              </div>
              <div class="col-md-6 mb-3">
            
               <h6> <?php echo $results['Age'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address</label>
              </div>
              <div class="col-md-6 mb-3">
               
               <h6> <?php echo $results['Address'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Parent's Name</label>
              </div>
              <div class="col-md-6 mb-3">
              
                <h6> <?php echo $results['Parents_name'] ?></h6>
             </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Qualification</label>
              </div>
              <div class="col-md-6 mb-3">
              
              <h6> <?php echo $results['Qualification'] ?></h6>
             </div>
            </div>
            

              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="#">Address</label>
              </div>
              <div class="col-md-6 mb-3">
              <h6> <?php echo $results['Address'] ?></h6>
             </div>
            </div>
              <div class="row">
                              <div class="col-md-6 mb-3">
                                <label for="#">Cross Check Status</label>
                              </div>
                              <div class="col-md-6 mb-3">
                               <h6><?php if ($results['CrossCheckStatus'] == 0){
                               ?> 
                               <font color="red">
                                <?php
                                echo "Not Verified";} ?></font>
                               <?php if ($results['CrossCheckStatus'] == 1){
                                ?> 
                               <font color="green">
                                <?php
                                echo "Verified";} ?></font>
                               
                              </h6>
                             
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

            </form>
            

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
