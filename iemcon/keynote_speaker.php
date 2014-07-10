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
                <h2>Keynote Speaker</h2>
                <hr>
                <div class="row">
                    <div class="col-md-5"><img class="img-responsive img-thumbnail" src="images/ericyap.jpg" alt="Dr Erik Yap"/></div>
                    <div class="col-md-7"><h3>Dr Erik Yap</h3><p><em>Head, Population Genetics Laboratory
                            <br>Defence Medical & Environmental Research Institute @ DSO National Laboratories</em> </p>
                        <br>
                        <p>Dr Eric Yap has been instrumental in spearheading the build-up of capabilities in Population Genetics and Biological Defence. 
                        </p><p>
Over the past 11 years, Dr Yap has helped to develop Singapore’s laboratory and field capabilities in detecting, as well as identifying biological agents and infections that can affect servicemen during military training and operations. He oversaw the establishment of a laboratory in human genetics for the study of multi-factorial diseases and DNA fingerprinting. </p>
                    
                    </div>
                </div>
            </div>
            
            <?php  include 'includes/sidebar.php'; ?>
        </div>
    </div>
    

    <?php include 'includes/footer.php'; ?>
    
 
    <script type="text/javascript">
     $(document).ready(function() {
        document.getElementById("key_nav").setAttribute("class","active"); 
     });
    </script>

  </body>
</html>