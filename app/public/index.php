<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?> 
</head>
<body>
	<?php include 'includes/navbar.php'; ?>  

	<!--- Image Slider -->

	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/AOHBannerBig.png"></div>
			<div class="carousel-item"><img src="img/Banner2.png"></div>
			<div class="carousel-item"><img src="img/banner 4.png"></div>
		</div>
	</div>
	
	<!--- End Image Slider -->

	<!--- About Me -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>All In One Health</h2>
				<p class="lead">All In One Health is a website created to make the process of finding healthcare easy. We take ideas from your favorite apps that provide convenience and translate them into a way to assist you in taking care of yourself. We combine the convenience of Tellihealth, where you can schedule a video call conference with a physician. We partnered with Uber as well to provide you with any transportation assistance if necessary to the nearest clinic. Our site also implements Instacart to deliver medications to your doorstep. To wrap it all up we use our version of Yelp to provide you with verified reviews of each physician so you can see what type of care you will receive. </p><a class="btn btn-purple btn-lg" href="https://www.google.com/search?q=all+in+one+health&oq=all+in+one+health&aqs=chrome..69i64j46i175i199i512j0i512l2j5j5i44l2j5i10i44.10041j0j7&sourceid=chrome&ie=UTF-8" target="_blank">Click Here To Get Started</a>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">Your Health Should Be Convenient</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/tellihealth2.png">
						<h3>Tellihealth</h3>
						<p>Schedule and consult a physician through video calls.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/uber.png">
						<h3>Uber</h3>
						<p>Need a ride? No problem we can handle that and provide you with transportation if needed.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/cart.png">
						<h3>InstaCart</h3>
						<p>We deliver any needed medications reliably and as fast as possible</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/yelp.png">
						<h3>Yelp</h3>
						<p>Using our proprietary software we provide you verified reviews from patients of each of our physicians to ensure you receive the best quality care. With your help in reviews we can help create a system of excellent providers </p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">We are here to provide you the absolute best care</h3>
				<p>We value your time and understand that each person has different needs</p>
				<p>So we combined concepts from popular apps into one site where it can all be done with a click of a button. This extra paragraph is also here to show how these two columns stack when you resize the window. Will that matter? Probably not but it took a while to learn.</p><a class="btn btn-purple btn-lg" href="https://www.google.com/search?q=cute+pictures+of+animals&oq=cute+pictures+of+animals&aqs=chrome.0.0i512l10.3416j0j9&sourceid=chrome&ie=UTF-8">Here's proof we care about your happiness</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/steth.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<!--- Chatbox -->
	<div class="row justify-content-center text-center">
			<div class="col-10 py-5">			
				<div class="chat-popup" id="myForm">
  					<form action="/action_page.php" class="form-container">
    				<h1>Any Questions?</h1>

    <label for="msg"><b></b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
			</div>
	</div>
	

	<!--- End Chatbox -->


	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>




</body>
</html>


