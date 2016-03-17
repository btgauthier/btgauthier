<!doctype html>

<html lang="en">
	<?php include 'includes/head.php'; ?>
<body>
	<?php include 'includes/navigation.php'; ?>
<!-- Information -->
	<div class="mainWrapper">
		<h1 class="name">Tim Gauthier</h1>
		<div id="timPic"></div>
		<article id="mainTextContact">
			<h3>Contact</h3> 
		<div id="contact_form">
			<form name="contactform" method="post" action="send_form_email.php">
			<article id="input">
			<fieldset id="outerBox">
			<legend class="heading">Send an email!</legend>
			<fieldset id="contactBox">
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
				<textarea id="messageText" name="comments" maxlength="1000" cols="25" rows="6"></textarea>				
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