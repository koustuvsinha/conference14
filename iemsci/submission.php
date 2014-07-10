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
                <h2>Paper Submission</h2>
                <hr>
                <p>Submitted papers must be formatted according to the guidelines provided <a href="author_guidelines.php">here</a>. Submission of papers will be handled electronically via <a href="https://www.easychair.org/conferences/?conf=iemsci2014">EasyChair</a>.</p>
            </div>
            
            <?php  include 'includes/sidebar.php'; ?>
        </div>
    </div>
    

    <?php include 'includes/footer.php'; ?>
    

    <script type="text/javascript">
     $(document).ready(function() {
        document.getElementById("call_nav").setAttribute("class","dropdown active"); 
     });
    </script>

  </body>
</html>