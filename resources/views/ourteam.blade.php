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
	p{
		text-indent: 2px;
	}
	.All-div-image{
		background-size: cover;
		background-repeat: no-repeat;
		background-position: 50%;
		height:430px;
		width: 100%;
		background-attachment: fixed;
		background-image:linear-gradient(rgba(18,18 ,17, 0.8), rgba(18,18 ,17, 0.8)),url('../images/ourteam1.jpg');
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
		<div class="All-div-image">
			<div class="container">
				<div class="row" style="">
					<h1 style="text-align: center; color: white; margin-left: 290px; margin-top:150px;">WHO WE ARE? Meet Our Team</h1>
					<p style="text-align: center; color: white; margin-left: 240px;">
						We listen, We discuss, We devise and develop, We love to learn and use the latest technologies
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				@php
				$count=0;
				$color=array('#ff99cc','#99ccff');
				@endphp
				@foreach($allinfo as $key1=>$value1)
				<div class="col-4 text-center" style="margin-top: -130px; ">
				<img  style=" border-radius: 50%;border: 5px solid #66ffcc;" src="{{url(''.$value1['path'])}}" width="200px" height="200px" alt="Image"/>
				<br>
				<ul style="list-style-type:none; padding-right: 50px; font-weight: bold; color: blue;" class="">	
				<li>{{$value1['id']}}</li>
				<li>{{$value1['name']}}</li>
				<li>{{$value1['email']}}</li>
				<li>{{$value1['phone']}}</li>
				<li>
					<a href="{{$value1['facebook']}}"><i style="font-size: 20px;" class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="{{$value1['linkedin']}}"><i style="font-size: 20px; margin-left: 20px;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					<a href="{{$value1['inst']}}"><i style="margin-left: 20px; font-size: 20px;" class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				</ul>
				</div>
				@endforeach
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