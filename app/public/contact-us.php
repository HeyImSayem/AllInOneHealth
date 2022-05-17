<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?> 
</head>
<body>

    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
            <h3>Contact Us</h3>
        </div>
    </div>
    
	

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">


					<!--- Chatbox -->
	<div class="row justify-content-center text-center">
			<div class="col-10 py-5">			
				<div class="chat-popup" id="myForm">
  					<form action="/action_page.php" class="form-container">
    				<h1>Send a message</h1>

    <label for="msg"><b></b></label>
    <p></p><textarea placeholder="Type message.." name="msg" required></textarea></p>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
			</div>
	</div>
	

	<!--- End Chatbox -->
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/steth.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<?php include 'includes/navbar.php'; ?>  

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>




</body>
</html>
