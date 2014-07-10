<footer class="foot" id="footer">
        <div class="container footerpadding">
            <div class="row">
                <div class="col-xs-3">
                    <h4>Key Dates</h4>
                    <div id="keydates">
                    <ul>
                        <li>Paper Submission Ends :<br> July 16, 2014</li>
                        <li>Acceptance Notification :<br> July 31, 2014</li>
                        <li>Camera Ready Paper :<br> August 10, 2014</li>
                        <li>Last Date of Registration :<br> August 10, 2014</li>
                        <li>Conference Date :<br> August 29-30, 2014</li>
                    </ul>
                    </div>    
                
                </div>
                <div class="col-xs-3"><h4>Announcements</h4><p>TBA</p></div>
                <div class="col-xs-3"><h4>Events</h4><p>TBA</p></div>
                 <div class="col-xs-3"><h4>Partners</h4>
                     <div class="col-xs-10">
                     <img class="base_logo" src="images/ieee.jpg" height="50px" width="100%" alt="IEEE"/>
                     <img class="base_logo" src="images/dae.JPG" height="50px" width="100%" alt="DAE"/>
                     <img class="base_logo" src="images/dst.gif" height="50px" width="100%" alt="DST"/>
                     </div>
                     <div class="col-xs-2"></div>
                 </div>
                
            </div>
            <hr>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div id="credits">
                    &COPY; 2014 <a href="http://www.facebook.com/koustuvsinha" target="__blank">IEM Computer Society</a>
                    <!-- Author : Koustuv Sinha, IEM CSE 2014 Batch -->
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
        
    </footer>
<!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.als-1.2.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#date_list").als({
                    visible_items: 1,
	scrolling_items: 1,
	orientation: "vertical",
	circular: "yes",
	autoscroll: "yes",
	interval: 5000
            });
	});	
</script>
<script type="text/javascript">
$("ul.dropdown1").hover(function() { $("li.dropdown1").css("background", "#1D2C3D")},function(){
    $("li.dropdown1").css("background-color",""); });
$("ul.dropdown2").hover(function() { $("li.dropdown2").css("background", "#1D2C3D")},function(){
    $("li.dropdown2").css("background-color",""); });
$("ul.dropdown3").hover(function() { $("li.dropdown3").css("background", "#1D2C3D")},function(){
    $("li.dropdown3").css("background-color",""); });
$('.bottom-right').notify({
    message: { text: 'The game rules has been updated! Check the Rules Page' },
    type: blackgloss
  }).show();
</script>

