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
                <h2>Technical Program</h2>
                <hr>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Brief Overview of IEMCON 2014
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                          <div class="panel-body">
                              <h3>IEMCON 2014</h3>
                              <h4>5th International Conference on Electronics Engineering & Computer Science</h4>
                              <h5>Date : 28-29 August, 2014</h5>
                              <h5>Venue : Science City, Kolkata, India</h5>
                              <table class="table table-hover table-bordered table-responsive">
                                  <tr><th>Day</th><th>Timing</th><th>Activity</th></tr>
                                  <tr><td rowspan="10">Day 1</td><td>09:00 AM - 10:00 AM</td><td>Registration</td></tr>
                                  <tr><td>10:00 AM - 10:30 AM</td><td>High Tea</td></tr>
                                  <tr><td>10:30 AM - 12:30 PM</td><td>Inauguration & Welcome Session</td></tr>
                                  <tr><td>12:30 PM - 01:00 PM</td><td>Keynote Address</td></tr>
                                  <tr><td>01:00 PM - 01:15 PM</td><td>Vote of Thanks</td></tr>
                                  <tr><td>01:15 PM - 02:15 PM</td><td>Lunch</td></tr>
                                  <tr><td>02:15 PM - 03:15 PM</td><td>Invited Talk</td></tr>
                                  <tr><td>03:15 PM - 04:15 PM</td><td>Six Parallel Sessions</td></tr>
                                  <tr><td>04:15 PM - 04:30 PM</td><td>Tea Break</td></tr>
                                  <tr><td>04:30 PM - 06:00 PM</td><td>Six Parallel Sessions</td></tr>
                              
                                  <tr><td rowspan="8">Day 2</td><td>09:00 AM - 10:00 AM</td><td>Registration</td></tr>
                                  <tr><td>10:00 AM - 10:30 AM</td><td>High Tea</td></tr>
                                  <tr><td>10:30 AM - 11:30 AM</td><td>Invited Talk</td></tr>
                                  <tr><td>11:30 AM - 01:30 PM</td><td>Six Parallel Sessions</td></tr>
                                  <tr><td>01:30 PM - 02:30 PM</td><td>Lunch</td></tr>
                                  <tr><td>02:30 PM - 04:00 PM</td><td>Six Parallel Sessions</td></tr>
                                  <tr><td>04:00 PM - 04:15 PM</td><td>Tea Break</td></tr>
                                  <tr><td>04:15 PM - 05:15 PM</td><td>Valedictory</td></tr>
                                  
                              </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Technical Programs of IEMCON 2014
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                              <ul>
                                  <li><a href="docs/TecnnicalSessionDetails.docx" target="_blank">Click here to download the Technical Session Details of IEMCON 2014</a>.</li>
                                       
                              </ul>
                              
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Previous year Technical Programs
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            <ul>
                                  <li><a href="docs/TecnnicalSessionDetailsold.docx" target="_blank">Click here to download the Technical Session Details of IEMCON 2013</a>.</li>
                                  <li><a href="docs/Final Schedule1.pdf" target="_blank">Click here to download the Program Schedule of IEMCON 2013</a></li>      
                              </ul>
                          </div>
                        </div>
                      </div>
                </div>
              
                
            </div>
            
            <?php  include 'includes/sidebar.php'; ?>
        </div>
    </div>
    

    <?php include 'includes/footer.php'; ?>
    

    <script type="text/javascript">
     $(document).ready(function() {
        document.getElementById("tech_nav").setAttribute("class","active"); 
     });
    </script>

  </body>
</html>