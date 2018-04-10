<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Acolyte | New User</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/lgo1.gif" />
  <!-- CSS -->

    <title>New User</title>

    <!-- Bootstrap core CSS -->
    <link href="css/login.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/1.png" alt="" width="72" height="72">
        <h2>New User</h2>
      </div>
          <font color="red"><?php include('errors.php'); ?></font>
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Know your Police Station</span>
            <span class="badge badge-secondary badge-pill">*</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="col-md-5 mb-3">
                <label for="country">District</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Allahabad</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid District.
                </div>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="col-md-5 mb-3">
                <label for="country">Thana</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Dhoomanganj</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid Thana.
                </div>
              </div>
            </li>
            
          </ul>
           <button class="btn btn-primary btn-lg btn-block" type="submit">Find Details</button>
          
        </div>

        <div class="col-md-8 order-md-1">

          <h4 class="mb-3">Personal Details</h4>
          <form class="needs-validation" novalidate   method="post" action="log1.php" enctype="multipart/form-data">
          

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Citizen_id</label>
                
              </div>
              <div class="col-md-6 mb-3">
              <input type="text" class="form-control"  placeholder="Enter text or number"  value="<?php echo $Citizen_id; ?>" name="Citizen_id" required>
              
              <div class="invalid-feedback">
                Please enter Citizen_id
              </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="username" name="password_1" placeholder="Password" required>
                <div class="invalid-feedback" style="width: 100%;">
                 Please enter your password
               </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Confirm Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="username" name="password_2" placeholder="Re-enter Password" required>
                <div class="invalid-feedback" style="width: 100%;">
                 Please re-enter your password
               </div>
              </div>
            </div>


             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Name</label>
                
              </div>
              <div class="col-md-6 mb-3">
              <input type="text" class="form-control"  placeholder="Your full name"  value="<?php echo $username; ?>" name="username" required>
              
              <div class="invalid-feedback">
                Please enter your name.
              </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Date of Birth</label>
                
              </div>
              <div class="col-md-6 mb-3">
              <input type="text" class="form-control"  placeholder="12/12/1998"   value="<?php echo $dob; ?>" name="dob" required>
             
              <div class="invalid-feedback">
                Please enter Date of Birth.
              </div>
               </div>
            </div>
            
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Parent's Name</label>
                
              </div>
              <div class="col-md-6 mb-3">
              <input type="text" class="form-control"  placeholder="Your Parent's name"  value="<?php echo $parent; ?>" name="parent" required>
              
              <div class="invalid-feedback">
                Please enter your Parent's name.
              </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" value="<?php echo $address; ?>" name="address" placeholder="1234 Main St" required >
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Qualification</label>
                
              </div>
              <div class="col-md-6 mb-3">
              <input type="text" class="form-control"  name="Qualification" placeholder="Your Qualification"  value="<?php echo $Qualification; ?>" required>
              
              <div class="invalid-feedback">
                Please enter your Qualification.
              </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Upload Proof</label>
                
              </div>
              <div class="col-md-6 mb-3">
             <input type="file" class="form-control" id="fileToUpload"  name="image">
              
              <div class="invalid-feedback">
                upload an image file.
              </div>
              </div>
            </div>

            
            <hr class="mb-4">
         
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info" name="check">
              <div class="invalid-feedback">
                Click on this box.
              </div>
              <label class="custom-control-label" for="save-info">By clicking Create Account, you agree to our Terms and confirm that you have read our Data Policy, including Acolyte Cookie Use Policy.</label>
            </div>
            <br>
            <button class="btn btn-primary btn-lg btn-block" name="reg_user" type="submit">Create an account</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2019 Acolyte</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>

