<!DOCTYPE html>
<html lang="zxx" dir="ltr">
	

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<!-- Description -->
		<meta name="description" content="Metronal is a clean and elegant Personal Portfolio Page. Metronal comes with a very attractive, simple and beautiful design with the effectiveness of colorful simplicity.">

		<!-- Keywords -->
		<meta name="keywords" content="Metronal, Personal Page, Portfolio, CV, Resume, One Page, Web Template">

		<!-- Title -->
		<title>Jason D. Smith</title>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,800%7COpen+Sans:400,400i,700" rel="stylesheet">

		<!-- CSS Files -->
		<link href="{{ asset('/') }}assets/front/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('/') }}assets/front/css/fontawesome/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('/') }}assets/front/css/magnific-popup.css" rel="stylesheet">
		<link href="{{ asset('/') }}assets/front/css/skins/skin1.css" rel="stylesheet">
		<link href="{{ asset('/') }}assets/front/css/custom.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<!-- Pre Load Starts -->
	    <div id="pre-load">
	    	<div class="load-circle"></div>
	    </div>
	    <!-- Pre Load Ends -->
		<!-- Wrapper Starts -->
		@foreach ($about as $item)
		<div id="wrapper">
			<div class="container-fluid">
				<div class="row no-gutters v-full">
					<!-- Left Wrapper Starts -->
					<div id="left-wrapper" class="col-12 col-lg-8">
						<!-- Main Content (Home) Starts -->
						<div id="home" class="main-content">
							<!-- Content Hanging On Home Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-globe"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>HELLO <span>WORLD</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Home Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									
										
									
									<h3>I'M <span class="name">{{ $item->name }}</span></h3>
									<h5>As a <span class="passion">{{ $item->position }}</span></h5>
									
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- About Menu Starts -->
									<div id="about-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#about" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-id-card fa-3x"></i>
													<h5>About <span>Me</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- About Menu Ends -->
									<!-- Resume Menu Starts -->
									<div id="resume-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#resume" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-newspaper fa-3x"></i>
													<h5>My <span>Resume</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- Resume Menu Ends -->
									<!-- Portfolio Menu Starts -->
									<div id="portfolio-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#portfolio" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-toolbox fa-3x"></i>
													<h5>My <span>Portfolio</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- Portfolio Menu Ends -->
									<!-- Contact Menu Starts -->
									<div id="contact-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#contact" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-envelope fa-3x"></i>
													<h5>Contact <span>Me</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- Contact Menu Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Home) Ends -->
						<!-- Main Content (About) Starts -->
						<div id="about" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="close-button fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On About Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-id-card"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>ABOUT <span>ME</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On About Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>About <span>Me</span></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Personal Info Starts -->
									<div id="personal-info">
										<!-- Personal Info Heading Starts -->
										<h5>Personal Info</h5>
										<!-- Personal Info Heading Ends -->
										<div class="row no-gutters">
											<!-- Profile Picture Starts -->
											<div class="profile-picture col-md-2 col-sm-3 col-12"></div>
											<!-- Profile Picture Ends -->
											<!-- Summary Starts -->
											<div class="summary col-md-10 col-sm-9 col-12">
												<!-- Single Paragraph Starts -->
												<p>{{ $item->brief }}</p>
												<!-- Single Paragraph Ends -->
											</div>
											<!-- Summary Ends -->
											<!-- Single Profile Starts -->
											<div class="profile col-12 col-sm-6">
												<ul>
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Name</span>
														</span>
														<span class="dash">-</span>
														<span class="value">{{ $item->name }}</span>
													</li>
													<!-- Single Content On Profile Ends -->
													
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Date of Birth</span>
														</span>
														<span class="dash">-</span>
														<span class="value">08 June 1992</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Nationality</span>
														</span>
														<span class="dash">-</span>
														<span class="value">{{ $item->nationality }}</span>
													</li>
													<!-- Single Content On Profile Ends -->
												</ul>
											</div>
											<!-- Single Profile Ends -->
											<!-- Single Profile Starts -->
											<div class="profile col-12 col-sm-6">
												<ul>
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Phone</span>
														</span>
														<span class="dash">-</span>
														<span class="value">{{ $item->phone }}</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Email</span>
														</span>
														<span class="dash">-</span>
														<span class="value">{{ $item->email }}</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Address</span>
														</span>
														<span class="dash">-</span>
														<span class="value">{{ $item->addrss }}</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Languages</span>
														</span>
														<span class="dash">-</span>
														<span class="value">{{ $item->languages }}</span>
													</li>
													<!-- Single Content On Profile Ends -->
												</ul>
											</div>
											<!-- Single Profile Ends -->
											<!-- Social Media Starts -->
											<div class="social-media col-12">
												<ul>
													<!-- Single Social Media Starts -->
													<li>
														<a href="#">
															<span class="front">
																<i class="fab fa-facebook-f"></i>
															</span>
															<span class="back">
																<i class="fab fa-facebook-f"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
													<!-- Single Social Media Starts -->
													<li>
														<a href="#">
															<span class="front">
																<i class="fab fa-twitter"></i>
															</span>
															<span class="back">
																<i class="fab fa-twitter"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
													<!-- Single Social Media Starts -->
													<li>
														<a href="#">
															<span class="front">
																<i class="fab fa-instagram"></i>
															</span>
															<span class="back">
																<i class="fab fa-instagram"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
													<!-- Single Social Media Starts -->
													<li>
														<a href="#">
															<span class="front">
																<i class="fab fa-linkedin-in"></i>
															</span>
															<span class="back">
																<i class="fab fa-linkedin-in"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
												</ul>
											</div>
											<!-- Social Media Ends -->
											<!-- Button Wrapper Starts -->
											<div class="button-wrapper col-12">
												<!-- Single Button Starts -->
												<div class="single-button">
													<a href="#">
														<span class="front">
															<i class="fas fa-file-pdf"></i><span class="value">Download <span>CV</span></span>
														</span>
														<span class="back">
															<i class="fas fa-file-pdf"></i><span class="value">Download <span>CV</span></span>
														</span>
													</a>
												</div>
												<!-- Single Button Ends -->
												<!-- Single Button Starts -->
												<div class="single-button" id="contact-me">
													<a href="#contact" id="contact-button">
														<span class="front">
															<i class="fas fa-envelope"></i><span class="value">Contact <span>Me</span></span>
														</span>
														<span class="back">
															<i class="fas fa-envelope"></i><span class="value">Contact <span>Me</span></span>
														</span>
													</a>
												</div>
												<!-- Single Button Ends -->
											</div>
											<!-- Button Wrapper Ends -->
										</div>
									</div>
									<!-- Personal Info Ends -->
									<!-- Services Starts -->
									<div id="services">
										<!-- Services Heading Starts -->
										<h5>Services</h5>
										<!-- Services Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Service</span>
														<span class="second-word">01</span>
													</li>
													<li>
														<ul>
															<li class="service-name">
																<i class="fas fa-angle-double-right"></i><span>Web Design</span>
															</li>
															<li class="service-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore exercitationem.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Service</span>
														<span class="second-word">02</span>
													</li>
													<li>
														<ul>
															<li class="service-name">
																<i class="fas fa-angle-double-right"></i><span>Web Development</span>
															</li>
															<li class="service-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit dio hic deser.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Service</span>
														<span class="second-word">03</span>
													</li>
													<li>
														<ul>
															<li class="service-name">
																<i class="fas fa-angle-double-right"></i><span>UI / UX Design</span>
															</li>
															<li class="service-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, nostrum ad temporibus consequuntur nobis.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Service</span>
														<span class="second-word">04</span>
													</li>
													<li>
														<ul>
															<li class="service-name">
																<i class="fas fa-angle-double-right"></i><span>Photography</span>
															</li>
															<li class="service-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias adef trescing provident perferendis.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
										</div>
									</div>
									<!-- Services Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (About) Ends -->
						<!-- Main Content (Resume) Starts -->
						<div id="resume" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On Resume Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-newspaper"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>MY <span>RESUME</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Resume Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>My <span>Resume</span></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Skills Starts -->
									<div class="skills">
										<!-- Skills Heading Starts -->
										<h5>Skills</h5>
										<!-- Skills Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Skills Wrapper Starts -->
											<div class="single-skills-wrapper col-12 col-sm-6">
												<ul>
													<!-- Skills Heading Starts -->
													<li class="skills-heading">
														<span class="first-word">Soft</span>
														<span class="second-word">Skills</span>
													</li>
													<!-- Skills Heading Ends -->
													<li>
														<ul>
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Leadership</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">70%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Teamwork</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">85%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Communication</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">75%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Problem Solving</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">90%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Skills Wrapper Ends -->
											<!-- Single Skills Wrapper Starts -->
											<div class="single-skills-wrapper col-12 col-sm-6">
												<ul>
													<!-- Skills Heading Starts -->
													<li class="skills-heading">
														<span class="first-word">Hard</span>
														<span class="second-word">Skills</span>
													</li>
													<!-- Skills Heading Ends -->
													<li>
														<ul>
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>HTML5 / CSS3</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">95%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Javascript / React.js</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">80%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>PHP / Laravel</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">70%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>UI / UX Design</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">85%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Skills Wrapper Ends -->
										</div>
									</div>
									<!-- Skills Ends -->
									<!-- Education Starts -->
									<div class="education">
										<!-- Education Heading Starts -->
										<h5>Education</h5>
										<!-- Education Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">2017 - 2018</span>
														<span class="where">China</span>
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>Web Programming Course</span>
															</li>
															<li class="education-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident perferendis in nesciunt.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">2013 - 2017</span>
														<span class="where">New York</span>
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>Masters Degree</span>
															</li>
															<li class="education-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa nostrum. Alias provident adipisicing elit.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">2009 - 2013</span>
														<span class="where">Finland</span>
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>Bachelor Degree</span>
															</li>
															<li class="education-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit dio hic deser.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">2006 - 2009</span>
														<span class="where">New York</span>  
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>Engineering Diploma</span>
															</li>
															<li class="education-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore exercitationem.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
										</div>
									</div>
									<!-- Education Ends -->
									<!-- Experience Starts -->
									<div class="experience">
										<!-- Experience Heading Starts -->
										<h5>Experience</h5>
										<!-- Experience Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2017 - Present</span>
														<span class="where">Google</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>Full-Stack Web Developer</span>
															</li>
															<li class="experience-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident perferendis.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2013 - 2017</span>
														<span class="where">IBM</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>UI / UX Designer</span>
															</li>
															<li class="experience-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, nostrum ad temporibus.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2010 - 2013</span>
														<span class="where">Envato</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>Front-End Developer</span>
															</li>
															<li class="experience-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit dio hic deser.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2008 - 2010</span>
														<span class="where">Adobe</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>Community Manager</span>
															</li>
															<li class="experience-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore exercitationem.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
										</div>
									</div>
									<!-- Experience Ends -->
									<!-- Fun Facts Starts -->
									<div class="fun-facts">
										<!-- Fun Facts Heading Starts -->
										<h5>Fun Facts</h5>
										<!-- Fun Facts Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Fun Fact Starts -->
											<div class="single-fun-fact col-12 col-sm-4">
												<ul>
													<li class="fun-fact-icon">
														<i class="fas fa-business-time fa-3x"></i>
													</li>
													<li class="fun-fact-value">5+</li>
													<li class="fun-fact-body">
														<i class="fas fa-angle-double-right"></i><span>Years Experience</span>
													</li>
												</ul>
											</div>	
											<!-- Single Fun Fact Ends -->
											<!-- Single Fun Fact Starts -->
											<div class="single-fun-fact col-12 col-sm-4">
												<ul>
													<li class="fun-fact-icon">
														<i class="fas fa-handshake fa-3x"></i>
													</li>
													<li class="fun-fact-value">40+</li>
													<li class="fun-fact-body">
														<i class="fas fa-angle-double-right"></i><span>Done Projects</span>
													</li>
												</ul>
											</div>
											<!-- Single Fun Fact Ends -->
											<!-- Single Fun Fact Starts -->
											<div class="single-fun-fact col-12 col-sm-4">
												<ul>
													<li class="fun-fact-icon">
														<i class="fas fa-heart fa-3x"></i>
													</li>
													<li class="fun-fact-value">87+</li>
													<li class="fun-fact-body">
														<i class="fas fa-angle-double-right"></i><span>Happy Customers</span>
													</li>
												</ul>
											</div>
											<!-- Single Fun Fact Ends -->
										</div>
									</div>
									<!-- Fun Facts Ends -->
									<!-- Button Wrapper Starts -->
									<div class="button-wrapper">
										<!-- Single Button Starts -->
										<a href="#">
											<span class="front">
												<i class="fas fa-file-pdf"></i><span class="value">Download <span>Resume</span></span>
											</span>
											<span class="back">
												<i class="fas fa-file-pdf"></i><span class="value">Download <span>Resume</span></span>
											</span>
										</a>
										<!-- Single Button Ends -->
									</div>
									<!-- Button Wrapper Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Resume) Ends -->
						<!-- Main Content (Portfolio) Starts -->
						<div id="portfolio" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="close-button fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On Portfolio Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-toolbox"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>MY <span>PORTFOLIO</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Portfolio Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>My <span>Portfolio</span></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Projects Starts -->
									<div id="projects">
										<!-- Projects Heading Starts -->
										<h5>Projects</h5>
										<!-- Projects Heading Ends -->
										<div class="row no-gutters">
											<!-- Portfolio Filter Starts -->
											<div class="portfolio-filter col-12">
												<ul>
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter="*" class="current">All Elements</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".web-templates">Web Templates</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".logos">Logos</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".drawings">Drawings</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".ui-elements">UI Elements</a>
													</li>
													<!-- Single Filter Ends -->
												</ul>
											</div>
											<!-- Portfolio Filter Ends -->
											<!-- Portfolio Item Starts -->
											<div class="portfolio-item col-12">
												<div class="item-wrapper row">
													<!-- Single Item Starts -->
													<div class="item web-templates col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/data-analysis-landing-page.jpg" alt="Data Analysis Landing Page">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#data-analysis-landing-page">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Data Analysis Landing Page</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Web Templates</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="data-analysis-landing-page" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/data-analysis-landing-page.jpg" alt="Data Analysis Landing Page">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Data Analysis Landing Page</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Web Templates</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item logos drawings col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/hand-drawn-space-badge-collection.jpg" alt="Hand Drawn Space Badge Collection">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#hand-drawn-space-badge-collection">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Hand Drawn Space Badge</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Logos, Drawings</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="hand-drawn-space-badge-collection" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/hand-drawn-space-badge-collection.jpg" alt="Hand Drawn Space Badge Collection">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Hand Drawn Space Badge</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Logos, Drawings</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item web-templates col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/modern-teamwork-landing-page.jpg" alt="Modern Teamwork Landing Page">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#modern-teamwork-landing-page">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Modern Teamwork Landing Page</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Web Templates</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="modern-teamwork-landing-page" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/modern-teamwork-landing-page.jpg" alt="Modern Teamwork Landing Page">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Modern Teamwork Landing Page</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Web Templates</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item drawings col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/pack-of-polygonal-animal-tattoos.jpg" alt="Pack Of Polygonal Animal Tattoos">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#pack-of-polygonal-animal-tattoos">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Pack Of Polygonal Animal Tattoos</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Drawings</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="pack-of-polygonal-animal-tattoos" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/pack-of-polygonal-animal-tattoos.jpg" alt="Pack Of Polygonal Animal Tattoos">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Pack Of Polygonal Animal Tattoos</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Drawings</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item drawings col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/hand-drawn-patterned-circle.jpg" alt="Hand Drawn Patterned Circle">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#hand-drawn-patterned-circle">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Hand Drawn Patterned Circle</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Drawings</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="hand-drawn-patterned-circle" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/hand-drawn-patterned-circle.jpg" alt="Hand Drawn Patterned Circle">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Hand Drawn Patterned Circle</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Drawings</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item ui-elements col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/colorful-web-design-button-collection.jpg" alt="Colorful Web Design Button Collection">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#colorful-web-design-button-collection">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Colorful Web Design Button Collection</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">UI Elements</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="colorful-web-design-button-collection" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/colorful-web-design-button-collection.jpg" alt="Colorful Web Design Button Collection">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Colorful Web Design Button Collection</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">UI Elements</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item ui-elements col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/mobile-application-templates.jpg" alt="Mobile Application Templates">
														</div>
														<!-- Image Ends -->
														<!-- overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#mobile-application-templates">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Mobile Application Templates</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">UI Elements</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="mobile-application-templates" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/mobile-application-templates.jpg" alt="Mobile Application Templates">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Mobile Application Templates</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">UI Elements</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item web-templates col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/online-shopping-landing-page.jpg" alt="Online Shopping Landing Page">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#online-shopping-landing-page">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Online Shopping Landing Page</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Web Templates</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="online-shopping-landing-page" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/online-shopping-landing-page.jpg" alt="Online Shopping Landing Page">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Online Shopping Landing Page</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Web Templates</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item web-templates col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/web-design-agency-landing-page.jpg" alt="Web Design Agency Landing Page">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#web-design-agency-landing-page">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Web Design Agency Landing Page</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Web Templates</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="web-design-agency-landing-page" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/web-design-agency-landing-page.jpg" alt="Web Design Agency Landing Page">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Web Design Agency Landing Page</h5>
															<!-- Project Name Ends -->
															<!-- Projcet Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Web Templates</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item web-templates col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/online-education-landing-page.jpg" alt="Online Education Landing Page">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#online-education-landing-page">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Online Education Landing Page</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Web Templates</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="online-education-landing-page" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/online-education-landing-page.jpg" alt="Online Education Landing Page">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Online Education Landing Page</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Web Templates</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item logos col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/running-shoe-logos.jpg" alt="Running Shoe Logos">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#running-shoe-logos">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Running Shoe Logos</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Logos</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="running-shoe-logos" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/running-shoe-logos.jpg" alt="Running Shoe Logos">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Running Shoe Logos</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Logos</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item logos col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="{{ asset('/') }}assets/front/img/projects/restaurant-logo-collection.jpg" alt="Restaurant Logo Collection">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#restaurant-logo-collection">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Restaurant Logo Collection</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Logos</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="restaurant-logo-collection" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="{{ asset('/') }}assets/front/img/projects/restaurant-logo-collection.jpg" alt="Restaurant Logo Collection">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Restaurant Logo Collection</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">Envato</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">14 March 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Logos</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium esse Rem quidem, incidunt ad numquam quibusdam hic. Iste, sunt, corporis. Nisi itaque eligendi illum quod, ipsam dolor commodi blanditiis iste. Consequuntur doloribus accusantium sed tempora voluptatum, quisquam sit modi qui maxime reiciendis, harum, earum. Eum, ex quam excepturi.</p>
																	<!-- Single Paragraph Ends -->
																	<!-- Single Paragraph Starts -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus expedita explicabo sed voluptatum minus quos dolorum officia odio reiciendis nesciunt. Cupiditate, aperiam, architecto exercitationem repudiandae quas quisquam incidunt et quasi.</p>
																	<!-- Single Paragraph -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
												</div>
											</div>
											<!-- Portfolio Item Ends -->
										</div>
									</div>
									<!-- Projects Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Portfolio) Ends -->
						<!-- Main Content (Contact) Starts -->
						<div id="contact" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="close-button fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On Contact Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>CONTACT <span>ME</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Contact Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>Contact <span>Me</span></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Contact Info Starts -->
									<div id="contact-info">
										<!-- Contact Info Heading Starts -->
										<h5>Contact Info</h5>
										<!-- Contact Info Heading Ends -->
										<div class="row no-gutters">
											<!-- List Contact Info Starts -->
											<div class="list-contact-info col-12">
												<ul class="row no-gutters">
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Address</span>
														<span class="icon-of-value">
															<i class="fas fa-map-marker-alt"></i>
														</span>
														<span class="value">Silicon Valley, USA</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Phone</span>
														<span class="icon-of-value">
															<i class="fas fa-mobile-alt"></i>
														</span>
														<span class="value">+76 21 19 34 20</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Email</span>
														<span class="icon-of-value">
															<i class="fas fa-envelope"></i>
														</span>
														<span class="value">you@yourwebsite.com</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Website</span>
														<span class="icon-of-value">
															<i class="fas fa-globe"></i>
														</span>
														<span class="value">www.yourwebsite.com</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-12">
														<span class="contact-info-name">Social Media</span>
														<ul class="social-media">
															<!-- Single Social Media Starts -->
															<li>
																<a href="#">
																	<span class="front">
																		<i class="fab fa-facebook-f"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-facebook-f"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
															<!-- Single Social Media Starts -->
															<li>
																<a href="#">
																	<span class="front">
																		<i class="fab fa-twitter"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-twitter"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
															<!-- Single Social Media Starts -->
															<li>
																<a href="#">
																	<span class="front">
																		<i class="fab fa-instagram"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-instagram"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
															<!-- Single Social Media Starts -->
															<li>
																<a href="#">
																	<span class="front">
																		<i class="fab fa-linkedin-in"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-linkedin-in"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
														</ul>
													</li>
													<!-- Single Contact Info Ends -->
												</ul>
											</div>
											<!-- List Contact Info Ends -->
										</div>
									</div>
									<!-- Contact Info Ends -->
									<!-- Contact Form Starts -->
									<div id="contact-form">
										<!-- Contact Form Heading Starts -->
										<h5>Contact Form</h5>
										<!-- Contact Form Heading Ends -->
										<div class="row no-gutters">
											<!-- Note Starts -->
											<div class="note col-lg-9 col-md-9 col-12">
												<!-- Single Paragraph Starts -->
												<p>Want to chat? Send me a message!</p>
												<!-- Single Paragraph Ends -->
											</div>
											<!-- Note Ends -->
											<!-- Alert/Contact Message Starts -->
											<div class="alert contact-msg col-lg-9 col-md-9 col-12"></div>
											<!-- Alert/Contact Message Ends -->
											<!-- Form Wrapper Starts -->
											<div class="form-wrapper col-lg-9 col-md-9 col-12">
												<form name="contact" method="POST" action="https://rietts.herokuapp.com/web-templates/metronal/preview/php/process-form.php">
													<div class="form-group clearfix">
														<div class="inner-form-group">
															<input type="text" name="name" placeholder="Name" class="form-control" autocomplete="off" required>
														</div>
														<div class="inner-form-group">
															<input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
														</div>
													</div>
													<div class="form-group">
														<input type="text" name="subject" placeholder="Subject" class="form-control" autocomplete="off" required>
													</div>
													<div class="form-group">
														<textarea name="message" placeholder="Message" class="form-control" autocomplete="off" required></textarea>
													</div>
													<div class="form-group">
														<button type="submit">
															<span class="front">
																<i class="fas fa-paper-plane"></i>
																<span class="value">Send <span>Message</span></span>
															</span>
															<span class="back">
																<i class="fas fa-paper-plane"></i>
																<span class="value">Send <span>Message</span></span>
															</span>
														</button>
													</div>
												</form>
											</div>
											<!-- Form Wrapper Ends -->
										</div>
									</div>
									<!-- Contact Form Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Contact) Ends -->
					</div>
					<!-- Left Wrapper Ends -->
					<!-- Right Wrapper Starts -->
					<div id="right-wrapper" class="col-lg-4">
						<!-- Large Profile Picture Starts -->
						<div class="lg-profile-picture"></div> 
						<!-- Large Profile Picture Ends -->
					</div>	
					<!-- Right Wrapper Ends -->
				</div>
			</div>
		</div>
		@endforeach
		<!-- Wrapper Ends -->

		<!-- JS Files -->
		<script src="{{ asset('/') }}assets/front/js/jquery-3.3.1.min.js"></script>
		<script src="{{ asset('/') }}assets/front/js/bootstrap.min.js"></script>
		<script src="{{ asset('/') }}assets/front/js/imagesloaded.pkgd.min.js"></script>
		<script src="{{ asset('/') }}assets/front/js/isotope.pkgd.min.js"></script>
		<script src="{{ asset('/') }}assets/front/js/magnific-popup.min.js"></script>
		<script src="{{ asset('/') }}assets/front/js/typeit.min.js"></script>
		<script src="{{ asset('/') }}assets/front/js/custom.js"></script>
	</body>

</html>