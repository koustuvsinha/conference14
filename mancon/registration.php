<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IEM Conference 2014</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/conference.css">
    <link rel="shortcut icon" href="images/favicon.ico">
   

    <!-- Add custom CSS here -->
    <style>
        body {margin-top: 60px;}
    </style>

  </head>

  <body>

    <?php include 'includes/navbar.php'; ?>

    <div class="container main_body">
        <div class="row">
            <div class="col-md-9">
                <h2>Registration</h2>
                <hr>
                <strong><a href="docs/IEMCON_RegistrationForm.docx" >Download Registration Form</a></strong>
                <br>
                <h5>For more information, please contact Conference Secretariat at <strong><a href="mailto:conference.secretary@iemcal.com">conference.secretary@iemcal.com</a></strong></h5>
                <hr>
                <h3>Registration Fees</h3>
                <hr>
                <table class="table table-hover table-bordered table-responsive">
                    <tr class="success"><th>Category</th><th>On or before<br>Submission Date</th><th>Late Submission</th></tr>
                    <tr><td>General</td><td>Rs. 4000</td><td>Rs. 4500</td></tr>
                    <tr><td>Industry and R&D<br>Organisation </td><td>Rs. 5000</td><td>Rs. 6000</td></tr>
                    
                </table>
                <p>Fees for only Participation in the conference is Rs 500.</p>
                <p>Fees for per extra pages of submission is Rs 500.</p>
            
            </div>
            
            <?php  include 'includes/sidebar.php'; ?>
        </div>
    </div>
    

    <?php include 'includes/footer.php'; ?>
    

    <script type="text/javascript">
     $(document).ready(function() {
        document.getElementById("reg_nav").setAttribute("class","active"); 
     });
    </script>

  </body>
</html>