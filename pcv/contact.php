
<?php /* Template Name: Contact*/ ?>
<?php get_header(); ?>


<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/form-validation.js"></script>

<div class="header--contact no-mt">

	<div class="container ptb--l desktop-pt--m desktop-pb">
		<h1 class="center-text no-mt no-mb">Contact Us</h1>

		<p class="center-text mt--s mb">Please submit the form below to reach us or you can contact us by phone at <a href="tel:435-604-0250">435-604-0250</a>
		<form class="col col-8-l col-10-m col-full center p" action="/form-parser.php" method="post" name="pcv_form" id="pcv_form">
		<div class="clear">
		<div class="col-6-l no-pl col-full">
				 	<label class="block" for="firstname">First Name:</label>
					<input class="col-full mb--s" id="firstname"name="firstname" type="text"  placeholder="First Name" required/>
		
					<label class="block"for="last-name">Last Name:</label>
					<input class="col-full mb--s" id="lastname"name="lastname" type="text" placeholder="Last Name" required />
		
					<label  class="block" for="email">Email:</label>
					<input class="col-full mb--s" id="email" name="email" type="email" placeholder="yourname@example.com" required />
		
					<label class="block" for="phone">Phone:</label>
					<input class="col-full mb--s" id="phone" name="phone" type="text" placeholder="555-555-5555" required />
				</div>
				<div class="col-6-l no-pr col-full">
					<label class="block" for="destination">Travel Destination:</label>
					<input class="col-full mb--s" id="destination" name="destination" type="text" placeholder="Travel Destination" />
		
					<label  class="block"for="appnttype">Request Type of Appointment:</label>
					<select class="col-full mb--s" id="appnttype" name="appnttype">
						<option disabled selected value>Select a Type</option>
						<option>Travel Vaccines / Prescriptions</option>
						<option>Vaccinations</option>
						<option>Immigration</option>
						<option>Flu Shot</option>
						<option>Questions / Consultation</option>
					</select>
		
					<label class="block" for="departuredate">Departure Date:</label>
					<input class="col-full mb--s" id="departuredate" name="departuredate" type="text" placeholder="MM/DD/YYYY" />
		
					<label class="block" for="length-of-stay">Length of Stay:</label>
					<input class="col-full mb--s" id="length-of-stay" name="length-of-stay" type="text" placeholder="Length of Stay" />
		
					
				</div>

				<label class="block" for="message">Message:</label>
					<textarea class="col-full" id="message" name="Message" type="text" placeholder="Enter Message Below" /> </textarea>

				</div>

				<div class="g-recaptcha" data-sitekey="6LeiAh0UAAAAAJd60jBNdycLHo4J04SFAlWpFUPo"></div>
				<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">

		<button style="border:none;" name="ContactButton" id="ContactButton" type="submit" value="submit" class="btn btn--orange text-center center col-5-l col-full mt">Get In Touch</button>


		</form>
	</div>



</div>

 <?php   get_footer(); ?> 