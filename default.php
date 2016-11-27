<!DOCTYPE html>
<!-- saved from url=(0044)http://getbootstrap.com/examples/dashboard/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./Dashboard Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Dashboard Template for Bootstrap_files/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="images/../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="images/./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js.download"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="images/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="images/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html"><span><img alt="Brand" src="images/logo-cog.png" style="width:35px;height:35px"></span>Cognizant</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.html">Dashboard</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Settings</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Profile</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
     <div class="container">
	<div class="row">
	
		<div class="col-sm-8" >
			<div class="panel panel-default">
				<div class="panel-body">
				<h1 class="page-header">Announcements</h1>
					<h2>Announcement/Volunteer Work</h2>
					<p>It's that time of year again. As you all know, Christmas is our busiest season of the year. Every year it is a struggle for management and supervisors to find the time and energy to organize a staff Christmas party. This year, we have decided to postpone the Christmas party until after our busy season.

Party Details

Date: Second or third Saturday in January (T.B.A)
Theme: Beach
Food: Caribbean
Special events: Karaoke and belly dancing
We apologize that the celebration will have to wait until the new year, but we guarantee that it will be worth the wait. Anyone interested in volunteering to help out with the event is encouraged to call Lucy, our events coordinator. Lucy's cell phone number is 222-3098. Please contact Lucy outside of business hours regarding this matter.</p>
							<ul class="nav-pills">
								<li><a href="#"><img src="images/happy.png" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/sad.png" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/angry.png" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/neutral.png" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/surprised.png" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/fear.jpg" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/disgust.png" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
								<li><a href="#"><img src="images/contempt.jpg" width="15" height="15" class="img-responsive" alt="Generic placeholder thumbnail"></a></li>
							</ul>
							<span class="btn btn-default btn-xs" style="float:right">
								<button id="snap">Ive Read this</button> 
								<button id="upload">I understand and agree</button>
							</span>
							<div style="display:hidden"><video id="video" autoplay></video> </div>
		
		<button id="new">New</button> 
		<div style="display:hidden"><canvas id="canvas" width="640" height="480"></canvas> </div>
		<span id="error"></span>
					<!--name, emp no., position here-->
				</div>
			</div>
		

		
	</div>
	<div class="col-sm-4">
			<div class="panel panel-default panel-custom">
				<div class="panel-heading">
					<h3 class="panel-title">
						New Announcements</br>
						<small><a href="#">Refresh</a> ● <a href="#">View all</a></small>
					</h3>
				</div>
				<div class="panel-body">
					<div class="media">
						<div class="media-left">
							<img src="images/default.png" style="width:32px;height:32px;" alt="" class="media-object img-rounded">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Nome e cognome</h4>
							<a href="#" class="btn btn-default btn-xs">
								Read More
							</a>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<img src="images/default.png" style="width:32px;height:32px;" alt="" class="media-object img-rounded">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Nome e cognome</h4>
							<a href="#" class="btn btn-default btn-xs">
								Read More
							</a>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<img src="images/default.png" style="width:32px;height:32px;"alt="" class="media-object img-rounded">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Nome e cognome</h4>
							<a href="#" class="btn btn-default btn-xs">
								Read More
							</a>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row">
       
        <div>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
             <a href="charts.html"> <img src="images/happy.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Happy</h3>
              <span class="text-muted">1.5K</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="charts.html"><img src="images/sad.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Sad</h3>
              <span class="text-muted">2K</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <a href="charts.html"> <img src="images/angry.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Angry</h3>
              <span class="text-muted">500</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="charts.html"><img src="images/neutral.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Neutral</h3>
              <span class="text-muted">250</span>
            </div>
			<div class="col-xs-6 col-sm-3 placeholder">
              <a href="charts.html"><img src="images/surprised.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Surprised</h3>
              <span class="text-muted">1K</span>
            </div>
			<div class="col-xs-6 col-sm-3 placeholder">
              <a href="charts.html"><img src="images/fear.jpg" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Fear</h3>
              <span class="text-muted">50</span>
            </div>
			<div class="col-xs-6 col-sm-3 placeholder">
             <a href="charts.html"> <img src="images/disgust.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Disgust</h3>
              <span class="text-muted">15</span>
            </div>
			<div class="col-xs-6 col-sm-3 placeholder">
             <a href="charts.html"> <img src="images/contempt.jpg" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h3>Contempt</h3>
              <span class="text-muted">100</span>
            </div>
          </div>

          
        </div>
      </div>
		</div>
		
</div>
	 
    </div>
 </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="images/./Dashboard Template for Bootstrap_files/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="images/../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="images/./Dashboard Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="images/./Dashboard Template for Bootstrap_files/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="images/./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>


	<script>
	// Put event listeners into place
	window.addEventListener("DOMContentLoaded", function() {
	// Grab elements, create settings, etc.
	
		$('#upload').hide();
	var canvas = document.getElementById("canvas"),
	context = canvas.getContext("2d"),
	video = document.getElementById("video"),
	videoObj = { "video": true },
	errBack = function(error) {
		console.log("Video capture error: ", error.code); 
	};
	// Put video listeners into place
	if(navigator.getUserMedia) { // Standard
		navigator.getUserMedia(videoObj, function(stream) {
			video.src = stream;
			video.play();
		}, errBack);
		} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
		navigator.webkitGetUserMedia(videoObj, function(stream){
			video.src = window.webkitURL.createObjectURL(stream);
			video.play();
		}, errBack);
		} else if(navigator.mozGetUserMedia) { // WebKit-prefixed
		navigator.mozGetUserMedia(videoObj, function(stream){
			video.src = window.URL.createObjectURL(stream);
			video.play();
		}, errBack);
	}
	// Trigger photo take
	document.getElementById("snap").addEventListener("click", function() {
		context.drawImage(video, 0, 0, 640, 480);
		// Littel effects
		$('#video').fadeOut('slow');
		$('#canvas').fadeIn('slow');
		$('#snap').hide();
		$('#new').show();
		// Allso show upload button
		$('#upload').show();
	});
	// Capture New Photo
	document.getElementById("new").addEventListener("click", function() {
		$('#video').fadeIn('slow');
		$('#canvas').fadeOut('slow');
		$('#snap').show();
		$('#new').hide();
	});
	// Upload image to sever 
	document.getElementById("upload").addEventListener("click", function(){
		var dataUrl = canvas.toDataURL();
		$.ajax({
			type: "POST",
			url: "camsave.php",
			data: { 
				imgBase64: dataUrl
			}
			}).done(function(msg) {
			console.log('saved');
			$("#error").html("Saved Image");
			window.open("http://localhost/Hackaton/MainTest.php","_blank");
			// Do Any thing you want
		});
	});
}, false);
</script>
	

  

</body></html>


