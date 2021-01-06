<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body{
		margin: 0px;
	}

	.bg1{
		background: #000;
		background-attachment: fixed;
		background-size: cover;
		width: 100%;
		height: 300px;
		padding-left: 120px;
		padding-top: 120px;
		background-image:linear-gradient(rgba(18,18 ,17, 0.5), rgba(18,18 ,17, 0.8)),url('../images/contactus.jpg');
		color: rgba(255, 255, 255, 1.0);

	}
</style>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#"><i style="font-size: 50px; color: white; margin-left: 30px;" class="fa fa-twitter" aria-hidden="true"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul  class="navbar-nav">
					<li class="nav-item active">
						<a style="color: white;" class="nav-link" href="http://127.0.0.1:8000">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a style="color: white;" class="nav-link" href="{{url('../ourteam')}}">Ourteam</a>
					</li>
					<li class="nav-item">
						<a style="color: white;" class="nav-link" href="{{url('../contactus')}}">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="bg1">
			<h1 style="display: inline-block; margin-left: 50px; opacity: 0.9;">Contact Us</h1>
			<h1 style="display: inline-block; margin-left: 50px; opacity: 0.4;">Contact Us</h1>
			<h1 style="display: inline-block; margin-left: 50px; opacity: 0.3;">Contact Us</h1>
			<h1 style="display: inline-block; margin-left: 50px; opacity: 0.2;">Contact Us</h1>
		</div>  
		<div class="container mt-5">
			<div class="row">
				<div class="col-5">
					<ul style="list-style-type:none;">
						<h1>How to Find Us</h1>
						<p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit TaxExpert at one of our comfortable offices.</p>
						<h3>Headquarters</h3>
						<li>9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</li>
						<li>Telephone +1 800 603 6035</li>
						<li>E-mail mail@demolink.org</li>
						<h3>Support Centre</h3>
						<li>9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45</li>
						<li>9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45</li>
						<li>E-mail mail@demolink.org</li>
					</ul>
				</div>
				<div class="col-7 ">
					<h1 class="ml-5">Get in Touch</h1>
					<form  class="ml-5">
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" placeholder="NAME">
							</div>
							<div class="col-6">
								<input type="text" class="form-control" placeholder="EMAIL">
							</div>
							<div class="col-12 mt-3">
								<label for="exampleFormControlTextarea1">Massege</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-primary btn-block">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
  <div class="row mt-5">
  	<div class="col-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.4799491102526!2d0.13981316579549186!3d52.1983250797545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d870871b04717d%3A0x153a497d7cef1bc!2sBig%20Nose%20Studios!5e0!3m2!1sen!2sjo!4v1609803035810!5m2!1sen!2sjo" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
  </div>

		
	</body>
	<footer class="mt-5" style="height: 60px; background-color: #555;">
		<div class="container">
			<div class="row ">
				<div class="col-6 mt-3">
					<p style="color: white;">© Saif Aldeen Alawneh /  privacy policy </p>	
				</div>
				<div class="col-6 mt-3"><p style="color: white;">Asian owned & operated / est. 2007</p></div>
			</div>
		</div>
	</footer>
	</html>