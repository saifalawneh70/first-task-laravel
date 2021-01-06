<!DOCTYPE html>
<html>
<head>
	<title>Fist Task</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	p{
		 text-indent: 2px;
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
					<a style="color: white;" class="nav-link" href="http://127.0.0.1:8000/">Home<span class="sr-only">(current)</span></a>
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
	</header>
	<div style="background-image: url('../images/Backgound9.jpg');background-size: cover; width:100%; height: 500px;  background-repeat: no-repeat;">
		<div class="container" >
			<div class="jumbotron card card-image mt-5" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg); ">
				<div class="text-white text-center py-5 px-4">
					<div>
						<h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
						<p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
							optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<h3> What is Twitter and why should you use it? </h3>
		<p> Twitter is a 'microblogging' system that allows you to send and receive short posts called tweets. Tweets can be up to 140 characters long and can include links to relevant websites and resources.</p>
		<p> Twitter users follow other users. If you follow someone you can see their tweets in your twitter 'timeline'. You can choose to follow people and organisations with similar academic and personal interests to you.</p>
		<p> You can create your own tweets or you can retweet information that has been tweeted by others. Retweeting means that information can be shared quickly and efficiently with a large number of people.</p>
	</div>
	<div class="container mt-5">
		<h3> Why use Twitter? </h3>
		<p> Twitter has become increasingly popular with academics as well as students, policymakers, politicians and the general public. Many users struggled to understand what Twitter is and how they could use it, but it has now become the social media platform of choice for many.</p>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-6">
				<img src="{{url('../images/gettyimages-502130278.jpg')}}" width="450px" height="320px" alt="Image"/>
			</div>
			<div class="col-6">
				<h3>About Us</h3>
				<p>  Twitter, Inc. is a global platform for public self-expression and conversation in real time. It provides a network that connects users to people, information, ideas, opinions, and news. The company's services include live commentary, live connections and live conversations. Its application provides social networking services and micro-blogging services through mobile devices and the Internet. The company can also be used as a marketing tool for businesses. It's products and services include Twitter, Periscope, Promoted Tweets, Promoted Accounts and Promoted Trends. Twitter was founded by Jack Dorsey, Christopher Isaac Stone, Noah E. Glass, Jeremy LaTrasse, and Evan Williams on March 21, 2006 and is headquartered in San Francisco, CA.</p>
			</div>
		</div>
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