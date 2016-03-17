<!doctype html>

<html lang="en">
	<?php include 'includes/head.php'; ?>
<body>
	<?php include 'includes/navigation.php'; ?>
<!-- Information -->
	<div class="mainWrapper">
		<h1 class="name">Tim Gauthier</h1>
		<div id="timPic"></div>
		<article id="mainTextPromo">
			<h3>Get Live Music!</h3> 
		<p>I have been performing music at a professional level for over 25 years.  
			I am fortunate to work with other musicians who have the experience 
			and flexibility to perform in different styles and in large or small group 
			configurations.  I would love to help you find just the right combination of 
			talent to perform for your venue, celebration, or corporate event.  Please 
			take a moment to submit the fields below, and I will contact you as soon 
			as possible.</p> 
		<div id="contact_form">
			<form name="contactform" method="post" action="send_form_email.php">
			<article id="input">
			<fieldset id="outerBox">
			<legend class="heading">Live Performance Request</legend>
			<fieldset id="leftBox">
			<legend>Interested In:</legend>	
				<input id="quote" type="checkbox" name="quote">
				<label for="quote">Performance quote for your event/venue (please provide details below)</label>
				<br>
				<input id="solo" type="checkbox" name="solo">
				<label for="solo">Solo jazz guitar</label>
				<br>
				<input id="duo" type="checkbox" name="duo">
				<label for="duo">Jazz duo</label>
				<br>
				<input id="trio" type="checkbox" name="trio">
				<label for="trio">Jazz trio</label>
				<br>
				<input id="largerGroup" type="checkbox" name="largerGroup">
				<label for="largerGroup">Jazz quartet or larger</label>
				<br>
				<input id="hiResPic" type="checkbox" name="hiResPic">
				<label for="hiResPic">Hi resolution photograph</label>
				<br>
				<input id="bio" type="checkbox" name="bio">
				<label for="bio">Bio</label>
				<br>
			</fieldset>
			<fieldset id="rightBox">
				<label for="first_name">name: *</label>
				<br>						
				<input id="text"  type="text" name="first_name" maxlength="50" size="30">
				<br>							
				<label for="email">email address: *</label> 
				<br>							
				<input  id="text" type="text" name="email" maxlength="80" size="30">
				<br>							
				<label for="telephone">telephone number:</label>
				<br>							
				<input id="text" type="text" name="telephone" maxlength="30" size="30">
				<br>							
				<label for="comments">message: *</label>
				<br>							
				<textarea id="text" name="comments" maxlength="1000" cols="25" rows="6"></textarea>				
				<div id="subClrDiv" style="clear:both; text-align:center;">
					<input id="Submit" type="submit" value="Submit" name="Submit">
					<input id="Reset" type="reset" value="Reset" name="Reset">
				</div>
			</fieldset>
			</fieldset>
			</article>
			</form>
		</div>
		<!--div class="tuneMenu">
			<p><a id="tune" href="http://www.btgauthier.com/Brochure%201.pdf">Brochure page 1</a><p class="linkComment"></p></p>
			<p><a id="tune" href="http://www.btgauthier.com/Brochure%202.pdf">Brochure page 2</a><p class="linkComment"></p></p>
			<p><a id="tune" href="http://www.btgauthier.com/Tune%20List%20Solo%20Jazz%20Guitar.pdf">Sample Solo Jazz Guitar Play List</a><p class="linkComment"></p></p>
			<p><a id="tune" href="http://www.btgauthier.com/Poster%20Blank%20BW.pdf">Black & White Poster</a><p class="linkComment"></p></p>
			<p><a id="tune" href="http://www.btgauthier.com/Poster%20Blank%20CLR.pdf">Color Poster</a><p class="linkComment"></p></p>
		</div-->
		</article>	
			<?php include 'includes/guitar.php'; ?>
			<!--?php include 'includes/footer.php'; ?-->	
	</div> 
  <script src="js/scripts.js"></script>
</body>
</html>