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
                <h2>Author Guidelines</h2>
                <hr>
                <h3>Preparation of Camera Ready Papers</h3>
                <p>Your final camera-ready paper(s) must conform to the style for Elsevier's Procedia Technology. Use the templates provided below to typesetting your paper:</p>
                <div class="row">
                    <div class="col-md-3"><a href="files/word_template.doc">Template in Word</a></div>
                    <div class="col-md-3"><a href="files/ecrc_protcy.zip">Latex Typeset</a></div>
                </div>
                <br>
                <p>When preparing your paper, make sure to include the following information in the first page:</p>
                <ul>
                    <li>Conference Title: SCICON 2014 1st International Science Conference</li>
                    <li>Title of the paper</li>
                    <li>Each author's name and affiliation, including present address:</li>
                    <li><ul><li> Follow this format to typesetting your author list: <br>
                            &LT;First name&GT; &LT;Middle name initial&GT; &LT;Surname&GT; </li>
                        <li> When possible, use hyphens for composed surnames</li>
                        <li>Remember to include the correct superscript linking to the appropriate affiliation details.</li>
                        <li>Remember to include the correct superscript linking to the appropriate author details.</li>
                    </ul><li>
                    <li>Abstract (50-150 words): Insert an abstract of 50-150 words, giving a brief account of the most relevant aspects of the paper.</li>
                    <li>Keywords (5-10): Insert 5 - 10 keywords.</li>
                </ul>
                <br>
                <h3></h3>
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