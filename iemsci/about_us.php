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
                <h2>About Us</h2>
                <hr>
                <h3>Institute of Engineering & Management, Kolkata</h3>
                <hr>
                <div class="row">
                    <div class="col-md-7"><p>Institute of Engineering & Management (IEM) started as the first Private Engineering college in West Bengal and has been running Management and Engineering programmes for the last 21 years. IEM has been ranked "Outstanding Engineering Institute in Eastern India" by Star News and ranked Best among Private Engineering colleges in West Bengal by the Telegraph. The Business School of IEM has been ranked A+++ by Just Careers Magazine. Due to its track record of high quality education for more than two decades, IEM received written invitation from the Government of Rajasthan to open a high quality Technical University in Rajasthan.</p></div>
                    <div class="col-md-5"><img class="img-responsive img-thumbnail" src="images/college_pic.jpg" alt="IEM"/></div>
                    
                </div>
                <br>
                <h3>University of Engineering & Management, Jaipur</h3>
                <hr>
                <div class="row">
                    <div class="col-md-5"><img class="img-responsive img-thumbnail" src="images/uem_image.jpg" alt="IEM"/></div>
                    <div class="col-md-7"><p>University of Engineering and Management (UEM), is a privately funded premier technical and management university located at Jaipur in the state of Rajasthan, India. University of Engineering & Management (UEM), Jaipur campus is a 32 acre lush green area, equipped with eminent technological facilities and beautiful ancient gothic architecture building, situated at Gurukul, Udaipuria, Sikar Road NH-11, Jaipur, Rajasthan.</p></div>
                    
                </div>
            </div>
            
            <?php  include 'includes/sidebar.php'; ?>
        </div>
    </div>
    

    <?php include 'includes/footer.php'; ?>
    

    <script type="text/javascript">
     $(document).ready(function() {
        document.getElementById("about_nav").setAttribute("class","active"); 
     });
    </script>

  </body>
</html>