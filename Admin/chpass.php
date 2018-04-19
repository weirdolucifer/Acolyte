<?php include('pass.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Acolyte | Magistrate </title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/lgo1.gif" />
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/citizen.css" rel="stylesheet">
    <link href="../css/chpass.css" rel="stylesheet">
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
                <a class="nav-link active" href="profile.php">
                  <span data-feather="users"></span>
                  Profile <span class="sr-only">(current)</span>
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="profile.php#Police">
                  <span data-feather="award"></span>
                  Appoint Police Officer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php#CPS">
                  <span data-feather="plus-circle"></span>
                  Create Police Station
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php#PS1">
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
                <a class="nav-link" href="profile.php#criminal">
                  <span data-feather="file-text"></span>
                  Criminal Record
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php#case">
                  <span data-feather="file"></span>
                  Case Detail
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php#citizen">
                  <span data-feather="user"></span>
                  Citizens
                </a>
              </li>
             
            </ul>
           
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Settings</h1>
            
          </div>
          <font color="green"><center><h3><?php if(isset($message)) { echo $message; } ?></h3></center></font>
           <form class="form-signin" action="chpass.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="../images/5.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Change password</h1>
        <font color="red"><?php include('../errors.php'); ?></font>
      </div>

      <div class="form-label-group">
        <input type="text" id="text" class="form-control" name="user" placeholder="Email address" required autofocus>
        <label for="inputEmail">Username</label>
      </div>

     <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control"  name="pass1" placeholder="Password" required>
        <label for="inputPassword">Old password</label>
      </div>
      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control"  name="pass2" placeholder="Password" required>
        <label for="inputPassword">New password</label>
      </div>
      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control"  name="pass3" placeholder="Password" required>
        <label for="inputPassword">Confirm new password</label>
      </div>
     
      <button class="btn btn-lg btn-primary btn-block" name= "submit" type="submit">Update password</button>
    </form>
      


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  
  </body>
</html>
