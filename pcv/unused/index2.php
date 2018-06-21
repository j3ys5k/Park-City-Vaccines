
	<div class="hero--hp section">
		<div class="container p--l center-text">
			<h1>Immunizations for Travel, Health, and Wellness</h1>
			<a href="" class="btn btn--orange col-12 col-6-m col-4-l center mb">Contact Us</a>
			<a class="or-call" href="tel:435-604-0250">Or Call us at 435-604-0250</a>
		</div>
	</div>

	<div class="section">
		<div class="container p--l">
			<h2 class="center-text">What We Do</h2>
			<div class="clear">
				<div class="col-6-l col-full">
					<img class="block center mt mb--m " alt="Park City Vaccines Office Building" src="wp-content/uploads/2016/10/pcv-building.jpg" />
				</div>
				<div class="col-6-l col-full">
					<p>Park City Vaccines is a "vaccine center" providing vaccinations, education and consultation about the latest recommendations on routine and travel immunizations supported by the CDC and the ACIP. We work with college students, group and business travelers and individuals that want to keep current with their vaccinations.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="bg--gray section ">
		<div class="container p--l">
			<h2 class="text-center">Services</h2>
			<div class="clear">
				<div class="col-6-l col-full">
					<div class="col-3-l col-full">
						<div class="icon-vaccine service-icon"></div>
					</div>
					<div class="col-9-l col-full">
						<h3>Vaccinations</h3>
						<p>Park City Vaccines provides both routine and travel vaccinations</p>
					</div>
				</div>

				<div class="col-6-l col-full">
					<div class="col-3-l col-full">
						<div class="icon-globe service-icon"></div>
					</div>
					<div class="col-9-l col-full">
						<h3>Immigration</h3>
						<p>We provide the physical exam, lab tests and vaccinations</p>
					</div>
				</div>
			</div>

			<div class="clear">
				<div class=" col-6-l col-full">
					<div class="col-3-l col-full">
						<div class="icon-meeting service-icon"></div>
					</div>
					<div class=" col-9-l col-full">
						<h3>Consultations</h3>
						<p>We can help inform you on the latest recomm</p>
					</div>
				</div>

				<div class=" col-6-l col-full">
					<div class=" col-3-l col-full">
						<div class="icon-book service-icon"></div>
					</div>
					<div class=" col-9-l col-full">
						<h3>Resources</h3>
						<p>Here is information that will help you plan your travel</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container section p--l clear">
		<h2 class="center-text">Experience Matters</h2>
			
			<div class="col-6-l col-full">
				<img class="block center mt mb--m " alt="Park City Vaccines Office Building" src="wp-content/uploads/2016/10/pcv-building.jpg" />
			</div>

			<div class="col-6-1 col-full">
				<p>Park City Vaccines opened in 2008 to assist people in getting the most current medical advice on specific vaccines needed for their travel. Our staff can help with most questions and send you find vaccine information prior to your appointment. We strive to make your time with us as efficient as possible and share all vaccines given at our clinic with you family's doctors.  As a courtesy, we bill your insurance for all routine vaccines e.g. Hepatitis A/B , Tetanus, flu, etc. so you only have to pay for the travel vaccinations. </p>
			</div>
			
		</div>
	</div>

    <div class="container">
	  <?php $posts_query = new WP_Query('posts_per_page=5');
	        while ($posts_query->have_posts()) : $posts_query->the_post();
	    ?>
	    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <?php endwhile; wp_reset_query(); ?>

   </div>

	<div class="section bg--gray">
		<div class="container p--l">
			<h2 class="center-text">News / Updates</h2>
			<div class=" clear">
				<div class="col-2-l col-full">
					<img alt="" src="" />
				</div>
				<div class="col-10">
					<h3>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit
						Set Do EisMond</h3>
						<h4>Mar 17th, 2016</h4>
				</div>
			</div>
			<div class="row clear">
				<div class="col-2-l col-full">
					<img alt="" src="" />
				</div>
				<div class="col-10">
					<h3>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit
						Set Do EisMond</h3>
						<h4>Mar 17th, 2016</h4>
				</div>
				</div>
				<div class="row clear">
					<div class="col-2-l col-full">
						<img alt="" src="" />
					</div>
					<div class="col col-10-l">
						<h3>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit
							Set Do EisMond</h3>
							<h4>Mar 17th, 2016</h4>
					</div>
				</div>
		</div>
	</div>

	<div class="section">
		<div class="container p--l center-text">
			<h2 class="center-text">Patient Forms</h2>
			<p>Please print, complet and bring new patient paperwork with you to your appointment</p>
			<div class="clear">
				<div class="col-4-l col-full">
				    <a class="patient-form" href="">
				   	 	<div class="icon-file-add"></div>
				   	 	<p>New Patient Form</p>
				   	 </a>
				</div>
				<div class="col-4-l col-full">
					 <a class="patient-form" href="">
				   	 	<div class="icon-file-add"></div>
				   	 	<p>Yellow Fever Form</p>
				   	 </a>
				</div>
				<div class="col-4-l col-full">
					 <a class="patient-form" href="">
				   	 	<div class="icon-file-add"></div>
				   	 	<p>Medical Relase Form</p>
				   	 </a>
				</div>


			</div>

		</div>

	</div>