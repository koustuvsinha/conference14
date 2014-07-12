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
                <h2>Call for Papers</h2>
                <hr>
                <p>Prospective authors are invited to submit manuscripts reporting original unpublished research and recent developments in the topics related to the conference. It is required that the manuscript follows the standard Elsevier's camera-ready paper format.  Submissions must include title, abstract, keywords, author and affiliation with email address. Please double-check the paper size in your page setup to make sure you are using the letter-size paper layout (8.5 inch X 11 inch). The paper should not contain page numbers or any special headers or footers.</p>
                <p>The Elsevier templates in Microsoft Word (US Letter) and LaTeX format can be found at :</p>
                <p><a href="http://www.elsevier.com/journal-authors/home">http://www.elsevier.com/journal-authors/home</a></p>
                <p><strong>IEMCON Paper Categories</strong></p>
                <ul>
                    <li>Regular Paper  - 5 pages maximum (3 additional pages allowed but at an extra charge)</li>
                    <li>Short Paper (Work-in-Progress) - 4 pages maximum (2 additional pages allowed but at an extra charge)</li>
                    <li>Poster - 3 pages maximum</li>
                </ul>
                <p>Regular papers should present novel perspectives within the general scope of the conference. Short papers (Work-in-Progress) are an opportunity to present preliminary or interim results. Posters are intended for ongoing research projects, concrete realizations, or industrial applications/projects presentations. </p>
                <p>IEMCON 2014 welcomes submissions on, but not limited to:</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Computer Science</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Distributed Systems</li>
                                <li>Smart Grid and Networking</li>
                                <li>Human-Computer Interaction</li>
                                <li>Software Engineering</li>
                                <li>Real-Time Systems</li>
                                <li>Artificial Intelligence</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Electronics Engineering</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Analogue and Digital Electronics</li>
                                <li>Circuit & Systems Design </li>
                                <li>Robotics and Mechatronics</li>
                                <li>Power Systems</li>
                                <li>Instrumentation</li>
                                <li>Bio-Electronics</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Telecommunications</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Advanced network protocol design and analysis</li>
                                <li>Communication Theory, QoS and Reliability</li>
                                <li>Key Cryptography & Message Authentication</li>
                                <li>Mobile Network Layer</li>
                                <li>Routing and traffic engineering</li>
                                <li>Wireless ad hoc and sensor networks</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                         
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Signal Processing</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Medicine and Biology Applications</li>
                                <li>Image and Video Processing</li>
                                <li>DSP algorithms and hardware implementations</li>
                                <li>Speech and Audio Processing</li>
                                <li>Signal Detection and Estimation</li>
                                <li>Signal Processing Education</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12" id="key_dates">
                        <h3>Key Dates</h3>
                        <hr>
                        <table class="table table-hover table-bordered table-responsive">
                            <tr class="danger"><td>Paper Submission (Full) Deadline</td><td>July 31, 2014</td></tr>
                            <tr><td>Acceptance Notification</td><td>August 7, 2014</td></tr>
                            <tr><td>Camera Ready Paper</td><td>August 10, 2014</td></tr>
                            <tr class="success"><td>Conference Date</td><td>August 28-29, 2014</td></tr>
                        </table>
                        <br>
                        <p>N.B. Author registrations that are completed AFTER the Late Registration Deadline may not be included in the Conference Proceedings. </p>
                    </div>
                </div>
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