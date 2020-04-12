<?php
require_once "../includes/counter.php";

$play = "Watch this video";
$website = "See website";
$behance = "Watch in Behance";
$github = "GitHub repository";

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title> Léu Almeida | Front-End Developer</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- SEO -->
	<meta name="description" content="Freelance front end development focusing on user experience. Shall we have some coffee?" />
	<meta name="keywords" content="leu almeida, leo almeida, leonardo almeida, freelance design, ux design freelancer, ui designer freelancer, brazilian freelance, brazilian development" />

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="../assets/common-css/bootstrap.css" rel="stylesheet">

	<link href="../assets/common-css/ionicons.css" rel="stylesheet">

	<link href="../assets/common-css/fluidbox.min.css" rel="stylesheet">

	<link href="../assets/css/style.css" rel="stylesheet">

	<link href="../assets/css/collection.css" rel="stylesheet">

	<link href="../assets/css/responsive.css" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

</head>

<body>

	<!-- MOBILE MENU 
<div class="FABMenu">
  <input type="checkbox" checked/>
  <div class="hamburger">
    <div class="dots">
      <span class="first"></span>
      <span class="second"></span>
      <span class="third"></span>
    </div>
  </div>
  <div class="action_items_bar">
    <div class="action_items">
      <a href="#portfolio">
      <span class="first_item">
        <i class="material-icons">
        code
        </i>
      </span>
  	  </a>

  	  <a href="#about">
      <span class="second_item">
        <i class="material-icons">
        assignment_ind
        </i>
      </span>
  	  </a>
  	  
      <span class="third_item">
      	<a href="#professional">
        <i class="material-icons">
        work
        </i>
        </a>
      </span>
  	  
  	  
      <span class="fourth_item">
      	<a href="#education">
        <i class="material-icons">
        school
        </i>
        </a>
      </span>
  	 
    </div>
  </div>
</div>
-->

	<!-- Country select -->
	<nav class="navbar navbar-light bg-light">
		<span class="navbar-text text-center" style="padding-top: 0 !important;padding-bottom: 0 !important;">

			<!-- PORTUGUESE -->
			<span data-toggle="tooltip" data-placement="bottom" title="Português">
				<a href="#" data-toggle="modal" data-target="#portugueseModal">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
						<circle style="fill:#6DA544;" cx="256" cy="256" r="256" />
						<polygon style="fill:#FFDA44;" points="256,100.174 467.478,256 256,411.826 44.522,256 " />
						<circle style="fill:#F0F0F0;" cx="256" cy="256" r="89.043" />
						<g>
							<path style="fill:#0052B4;" d="M211.478,250.435c-15.484,0-30.427,2.355-44.493,6.725c0.623,48.64,40.227,87.884,89.015,87.884
	c30.168,0,56.812-15.017,72.919-37.968C301.362,272.579,258.961,250.435,211.478,250.435z" />
							<path style="fill:#0052B4;" d="M343.393,273.06c1.072-5.524,1.651-11.223,1.651-17.06c0-49.178-39.866-89.043-89.043-89.043
	c-36.694,0-68.194,22.201-81.826,53.899c12.05-2.497,24.526-3.812,37.305-3.812C263.197,217.043,309.983,238.541,343.393,273.06z" />
						</g>
					</svg>
				</a>
			</span>

			<!-- ENGLISH -->
			<span data-toggle="tooltip" data-placement="bottom" title="English">
				<a href="#" data-toggle="modal" data-target="#englishModal">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
						<circle style="fill:#F0F0F0;" cx="256" cy="256" r="256" />
						<g>
							<path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z" />
							<path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z" />
							<path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784
	z" />
							<path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z" />
							<path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z" />
							<path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z" />
							<path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z" />
							<path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z" />
						</g>
						<g>
							<path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0
	c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391
	h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442
	C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z" />
							<path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435
	l-97.802-97.802h-31.482V322.784z" />
							<path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804
	V322.784z" />
							<path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803
	H189.217z" />
							<path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047
	l-97.802,97.803V189.219z" />
						</g>
					</svg>
				</a>
			</span>

			<!-- DEUTSCH -->
			<span data-toggle="tooltip" data-placement="bottom" title="Deutsch">
				<a href="#" data-toggle="modal" data-target="#deutschModal">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
						<path style="fill:#FFDA44;" d="M15.923,345.043C52.094,442.527,145.929,512,256,512s203.906-69.473,240.077-166.957L256,322.783
	L15.923,345.043z" />
						<path d="M256,0C145.929,0,52.094,69.472,15.923,166.957L256,189.217l240.077-22.261C459.906,69.472,366.071,0,256,0z" />
						<path style="fill:#D80027;" d="M15.923,166.957C5.633,194.69,0,224.686,0,256s5.633,61.31,15.923,89.043h480.155
	C506.368,317.31,512,287.314,512,256s-5.632-61.31-15.923-89.043H15.923z" />
						</g>
					</svg>
				</a>


			</span>
	</nav>

	<!-- Header -->

	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>São Paulo</h5>
								<h5>SP - Brazil</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>+55 11 9.3804-5313</h5>
								<h6>MON. - SAT. | 9am - 10pm</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>leo@webid.net.br</h5>
								<h6>RESPONSE UP TO 24 HOURS</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->

			<!-- a class="downlad-btn" href="curriculo.pdf">Baixar CV   <i class="fas fa-file-download"></i></a -->

			<!-- Modal Temporário -->
			<!--button type="button" class="downlad-btn-2"  data-toggle="modal" data-target="#Modal" style="float:left;">Curriculum Vitae   <i class="fas fa-file-download"></i></button>

			<button type="button" class="downlad-btn" onClick="openLattes()" target="_blank" style="float:right;">Curriculum Lattes   <i class="fas fa-search"></i></button -->
			<!-- Fim do Modal Temporário -->

		</div><!-- container -->
	</header>

	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="../images/leu-almeida.jpg" alt=""></div>
						<h2><b>Léu Almeida</b></h2>
						<h4 class="font-yellow">Front-End Developer, UX & UI Designer</h4>
						<ul class="information margin-tb-30">
							<li><b>AGE : </b>20 Years Old</li>
							<li><b>E-MAIL : </b>leo@webid.net.br</li>
						</ul>
						<ul class="social-icons">
							<li><a href="https://github.com/LeuAlmeida" target="_blank" data-toggle="tooltip" data-placement="top" title="GitHub"><i class="fab fa-github"></i></a></li>
							<li><a href="https://www.behance.net/almeida99" target="_blank" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fab fa-behance"></i></a></li>
							<li><a href="https://pt.stackoverflow.com/users/154875/l%c3%a9u-almeida" target="_blank" data-toggle="tooltip" data-placement="top" title="Stack Overflow"><i class="fab fa-stack-overflow"></i></a></li>
							<li><a href="https://www.linkedin.com/in/leonardoalmeida99/" target="_blank" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/1bigo/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="ion-social-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/leuzinhopataty" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="ion-social-facebook"></i></a></li>
							<!--li><a href="https://wa.me/5511938045313" target="_blank" data-toggle="tooltip" data-placement="top" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li -->
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->

	<section class="portfolio-section section" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>RECENT JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						<a href="#" data-filter=".frontend"><b>WEB DEVELOPMENT</b></a>
						<a href="#" data-filter=".app"><b>APP DEVELOPMENT</b></a>
						<a href="#" data-filter=".branding"><b>VISUAL ID</b></a>
						<a href="#" data-filter=".audiovisual"><b>AUDIOVISUAL</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->

		<?php include_once "../includes/portfolio.php" ?>



		<!-- p-item -->

		</div><!-- portfolioContainer -->

	</section><!-- portfolio-section -->


	<section class="about-section section" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About Me</b></h3>
						<h6 class="font-lite-black"><b>PERSONAL AND PROFESSIONAL</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="mb-2">
						Hello! My name is Leonardo Almeida, but you can call me Léu :)<br />
						I’m 20 years old and I’m a tech enthusiast with a focus on front-end. Alongside this I also seek to learn about back-end so I can become a full stack developer. I also have experience on audiovisual production, 3D modeling and Graphic Design for occasional needs.<br />
						I’ve been involved with this market for a decade, when I was only 10 years old and started studying Basic HTML. Since then my crave for learning only got bigger.<br />
						My projects are focused on the user experience and it’s usability as a whole, aiming for a good relationship between user and platform - whether it’s a system or a full website.
					</p>
					<p class="mb-2">
						From my perspective, proactivity and optimism should walk side by side in a way that great results are achieved on a relaxed workspace.
					</p>
					<p class="margin-b-50">
						Now that you know a little about me, <a href="mailto:leo@webid.net.br?subject=Léu, I’ll take that coffee!"><strong>let’s grab a coffee?</strong></a>
					</p>

					<div class="heading hobbies-header">
						<h3 class="mb-4"><b>Tastes and quirks</b></h3>
						<div class="row">
							<div class="col-sm-3 hobbies">
								<i class="fas fa-code hobbies"></i>
								<span class="hobbies">
									Coding
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-coffee hobbies"></i>
								<span class="hobbies">
									Coffee
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-headphones hobbies"></i>
								<span class="hobbies">
									Music
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-tv hobbies"></i>
								<span class="hobbies">
									Series
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-dumbbell hobbies mt-5"></i>
								<span class="hobbies">
									Workout
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-pencil-ruler hobbies mt-5"></i>
								<span class="hobbies">
									Studying
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-book-open hobbies mt-5"></i>
								<span class="hobbies">
									Books
								</span>
							</div>
							<div class="col-sm-3 hobbies">
								<i class="fas fa-gamepad hobbies mt-5"></i>
								<span class="hobbies">
									Games
								</span>
							</div>
						</div>
					</div>

					<div class="heading mt-5">
						<h3><b>Interests</b></h3>
						<p>
							<span class="badge badge-success"><i class="fas fa-laptop-code"></i></span> Freelancer: <strong class="text-success"> open for new projects!</strong><br />
							<span class="badge badge-warning" style="width: 26px;"><i class="fas fa-thumbtack"></i></span> In loco experience: <span class="text-warning"> available for new opportunities on <strong>Germany</strong> only.</span><br />
						</p>
					</div>

					<div class="heading">
						<h3 class="mb-3"><b>Languages</b></h3>
						<div class="line-progress margin-b-30" data-prog-percent="1">
							<div></div>
							<p class="progress-title"><b>Portuguese</b> <span class="badge badge-info">Native</span></p>
						</div>

						<div class="line-progress margin-b-30" data-prog-percent=".65">
							<div></div>
							<p class="progress-title"><b>English</b> <span class="badge badge-info">Pre Advanced</span></p>
						</div>

						<div class="line-progress margin-b-30" data-prog-percent=".35">
							<div></div>
							<p class="progress-title"><b>Spanish</b> <span class="badge badge-info">Basic</span></p>
						</div>

						<div class="line-progress margin-b-30" data-prog-percent=".0">
							<div></div>
							<p class="progress-title"><b>German</b> <span class="badge badge-info">Basic</span> <span class="badge badge-success">Exchange in Jul/2020</span></p>
						</div></p>
					</div>

				</div><!-- row -->
			</div><!-- col-sm-8 -->
		</div><!-- row -->
	</section><!-- about-section -->


	<section class="skills-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 center-text">
					<div class="heading">
						<h3><b>Technical Skills</b></h3>
						<h6 class="font-lite-black"><b>A SIP OF COFFEE AND A NEW NOTATION</b></h6>
					</div>
				</div><!-- col-sm-12 -->

				<div class="col-sm-12 col-md-6">
					<h4><b>Web / Mobile Development</b></h4>
					<h6 class="expert text-uppercase">Involved knowledge</h6>

					<p class="margin-tb-30">The more I learn, the more I realize how big is the Development universe.<br />
						See some of the skills I’m already experienced with, and some of the ones that I am studying to be even more qualified.
					</p>

					<div class="line-progress margin-b-30" data-prog-percent=".85">
						<p class="progress-title"><b>HTML5</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".80">
						<p class="progress-title"><b>Cascade Style Sheets (CSS3)</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent="1">
						<p class="progress-title"><b>Bootstrap</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".70">
						<p class="progress-title"><b>EcmaScript 6</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".55">
						<p class="progress-title"><b>PHP</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".45">
						<p class="progress-title"><b>NodeJS</b> <span class="badge badge-info">Studying</span></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".95">
						<p class="progress-title"><b>WordPress</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".65">
						<p class="progress-title"><b>React.JS</b> <span class="badge badge-info">Studying</span></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".65">
						<p class="progress-title"><b>React Native</b> <span class="badge badge-info">Studying</span></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".85">
						<p class="progress-title"><b>Search Engine Optimization (SEO)</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".35">
						<p class="progress-title"><b>Flutter</b></p>
					</div>


				</div><!-- col-md-6 -->

				<div class="col-sm-12 col-md-6">
					<h4><b>Distinctions</b></h4>
					<h6 class="expert text-uppercase">Graphic design, Audiovisual Production, UX/UI Design and more!</h6>

					<p class="margin-tb-30">You can never have too much knowledge right?<br />
						With that in mind, I’ve been working hard to gather skills that I consider fundamental for a professional that looks for the best user experience and usability. See some of those below:
					</p>

					<div class="line-progress margin-b-30" data-prog-percent=".85">
						<p class="progress-title"><b>PHOTOSHOP</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".75">
						<div></div>
						<p class="progress-title"><b>ILLUSTRATOR</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".70">
						<p class="progress-title"><b>ADOBE PREMIERE</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".65">
						<p class="progress-title"><b>AFTER EFFECTS</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent="1">
						<p class="progress-title"><b>E-MAIL MARKETING</b></p>
					</div>

					<div class="line-progress margin-b-30" data-prog-percent=".45">
						<p class="progress-title"><b>AUTODESK MAYA <span class="badge badge-info">Studying</span></b></p>
					</div>

					<div class="line-progress margin-b-50" data-prog-percent=".75">
						<p class="progress-title"><b>PROTOTYPING</b></p>
					</div>

				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- skills-section -->

	<section class="experience-section section" id="professional">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Professional Experience</b></h3>
						<h6 class="font-lite-black"><b>PAST JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">

					<div class="experience margin-b-50">
						<h4><b>Assistant Front End Developer</b></h4>
						<h5 class="font-yellow"><b>METHODIST UNIVERSITY OF SÃO PAULO</b></h5>
						<h6 class="margin-t-10">JUNE 2019 - PRESENT</h6>
						<p class="font-semi-white margin-tb-30">
							<ul class="list margin-b-30">
								<li>Development of Web Projects with HTML, CSS3, Javascript and Plone language use;</li>
								<li>Production and dispatching of marketing mail;</li>
								<li>Production and dispatching of SMS marketing.</li>
							</ul>
						</p>
					</div>

					<div class="experience margin-b-50">
						<h4><b>WEB DESIGNER INTERN</b></h4>
						<h5 class="font-yellow"><b>METHODIST UNIVERSITY OF SÃO PAULO</b></h5>
						<h6 class="margin-t-10">JULY 2017 - JUNE 2019</h6>
						<p class="font-semi-white margin-tb-30">
							<ul class="list margin-b-30">
								<li>Front-End content Update;</li>
								<li>Production and dispatching of marketing mail;</li>
								<li>Production and dispatching of SMS marketing. </li>

							</ul>
						</p>
					</div>

					<div class="experience margin-b-50">
						<h4><b>WEB DESIGNER APPRENTICE</b></h4>
						<h5 class="font-yellow"><b>METHODIST UNIVERSITY OF SÃO PAULO</b></h5>
						<h6 class="margin-t-10">JULY 2016 - JUNE 2017</h6>
						<p class="font-semi-white margin-tb-30">
							<ul class="list margin-b-30">
								<li>Production and dispatching of marketing mail;</li>
								<li>Production and dispatching of SMS marketing.</li>
							</ul>
						</p>
					</div>

					<div class="experience margin-b-50">
						<h4><b>EVENT ORGANIZER</b></h4>
						<h5 class="font-yellow"><b>FREELANCER</b></h5>
						<h6 class="margin-t-10">JULY 2016 - DECEMBER 2017</h6>
						<p class="font-semi-white margin-tb-30">
							<ul class="list margin-b-30">
								<li>People Management (retailers, promoters, security, firefighters and audio team);</li>
								<li>Hiring of Security Guards, Place and Infrastructure of a whole event;</li>
								<li>Digital Marketing.</li>
							</ul>
						</p>
					</div>

					<div class="experience margin-b-50">
						<h4><b>ADMINISTRATIVE ASSISTANT APPRENTICE</b></h4>
						<h5 class="font-yellow"><b>INSAT RASTREADORES</b></h5>
						<h6 class="margin-t-10">APRIL 2014 - APRIL 2015</h6>
						<p class="font-semi-white margin-tb-30">
							<ul class="list margin-b-30">
								<li>Use of internal CSM;</li>
								<li>Administrative assistant on the subject of satellite tracking management;</li>
								<li>Client payment control.</li>

							</ul>
						</p>

					</div><!-- experience -->

					<div class="experience margin-b-50">

						<p class="font-semi-white margin-tb-30">

							<a class="btn btn-warning btn-lg btn-block" href="https://www.linkedin.com/in/leonardoalmeida99/" target="_blank">See my LinkedIn profile   
								<!-- i class="fas fa-file-download"></i --></a>

						</p>
					</div><!-- experience -->

				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->

	</section><!-- experience-section -->



	<section class="education-section section" id="education">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Bachelor's degree in Publicity and Advertising</b></h4>
							<h5 class="font-yellow text-uppercase"><b>UMESP – Methodist University of São Paulo</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Graduated on December 2020 <span class="badge badge-pill badge-warning">4 YEARS</span> <!-- a href="#" data-toggle="modal" data-target="#modalCertificadoFalse" class="badge badge-pill badge-danger" title="Certificado Indisponível">SEE CERTIFICATE</a -->
							</h6>
							<p class="margin-tb-30">
								Graduated by the Methodist University of São Paulo in Rudge Ramos – São Bernardo do Campo, with 4 years of duration. Some of the projects done during this period can be <a href="https://www.behance.net/almeida99" style="font-weight: bold;" target="_blank">seen here</a>.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Online Extension course: Digital Marketing</b></h4>
							<h5 class="font-yellow text-uppercase"><b>FGV – Getúlio Vargas Foundation</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on December 2018 <span class="badge badge-pill badge-warning">5 HOURS</span> <a href="../certificados/marketing-digital.pdf" class="badge badge-pill badge-danger" target="_blank" title="Certificado Marketing Digital">SEE CERTIFICATE</a></h6>
							<p class="margin-tb-30">
								Self-institutional online course from the Getúlio Vargas Foundation that explains and teaches the foundations and techniques of the Digital Marketing and it’s applications.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Online Extension course: information technology and communication</b></h4>
							<h5 class="font-yellow"><b>SENAI</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on December 2018 <span class="badge badge-pill badge-warning">14 HOURS</span> <a href="../certificados/tic.pdf" class="badge badge-pill badge-danger" target="_blank" title="Certificado TIC">SEE CERTIFICATE</a></h6>
							<p class="margin-tb-30">
								Introductory course about information technology and communication, that aims for the knowledge about hardware, network security notions, among other modules about the basic notios of ITC.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Online Extension course: Search Engine Optimization</b></h4>
							<h5 class="font-yellow"><b>RICARDO ZACHO</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on December 2018 <span class="badge badge-pill badge-warning">5 HOURS</span> <a href="../certificados/seo.pdf" class="badge badge-pill badge-danger" target="_blank" title="Certificado SEO">SEE CERTIFICATE</a></h6>
							<p class="margin-tb-30">
								Online Course about the advanced notions of Search Engine Optimization, which is the optimization of content and development for a well-indexed website on the search engines (Google, Yahoo, Bing etc.)
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Online Extension course: Interface Design</b></h4>
							<h5 class="font-yellow"><b>JAMILTON DAMASCENO, ANDRE BERNARDES AND JORGE SANT ANA</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on December 2018 <span class="badge badge-pill badge-warning">15 HOURS</span> <a href="../certificados/design-de-interface.pdf" class="badge badge-pill badge-danger" target="_blank" title="Certificado Design de Interface">SEE CERTIFICATE</a></h6>
							<p class="margin-tb-30">
								Online Course to improve on theory and practice the concepts of UX and UI Design, Information Architecture, Prototyping as well as concepts of Usability, Wireframes and Layouts, Organizations and navigation Systems and much more.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Online Extension course: Bootstrap 4</b></h4>
							<h5 class="font-yellow"><b>PONTO COURSES</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on December 2018 <span class="badge badge-pill badge-warning">10,5 HOURS</span> <a href="../certificados/bootstrap.pdf" class="badge badge-pill badge-danger" target="_blank" title="Certificado Bootstrap">SEE CERTIFICATE</a></h6>
							<p class="margin-tb-30">
								Complete Course of one of the biggest open source web frameworks. Learning about all the functionalities and options that the Bootstrap gives to the developer and to the consumer.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Extension Course: Tourism Monitoring</b></h4>
							<h5 class="font-yellow"><b>FORMA TOURISM</b></h5>
							<h6 class="font-lite-black margin-t-text-uppercase">Finished on February 2017 <span class="badge badge-pill badge-warning">40 HOURS</span> <a href="#" data-toggle="modal" data-target="#modalCertificadoFalse" class="badge badge-pill badge-danger" title="Certificado Indisponível">SEE CERTIFICATE</a> <!-- a href="../certificados/forma-turismo" class="badge badge-pill badge-danger" target="_blank" title="Certificado Forma Turismo">SEE CERTIFICATE</a -->
							</h6>
							<p class="margin-tb-30">
								A 40 hours course focused on the communicational accomplishment of Tourism. With neurolinguistics programming (PNL), Verbal and Non-Verbal communication, among other techniques that work with communication for the public.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Online Extension Course: After effects</b></h4>
							<h5 class="font-yellow"><b>PUFLIX</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on November 2017 <span class="badge badge-pill badge-warning">11 HOURS</span> <a href="#" data-toggle="modal" data-target="#modalCertificadoFalse" class="badge badge-pill badge-danger" title="Certificado Indisponível">SEE CERTIFICATE</a><!-- a href="../certificados/after-effects.pdf" class="badge badge-pill badge-danger" target="_blank" title="Certificado After Effects">SEE CERTIFICATE</a -->
							</h6>
							<p class="margin-tb-30">
								Practical and theoretical course of After Effects CC done online in 2017 to improve the knowledge on animation and professional video editing.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>High School Graduate</b></h4>
							<h5 class="font-yellow"><b>PERFIL PÁDUA HIGH SCHOOL</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Graduated on December 2016
								<!-- a href="#" data-toggle="modal" data-target="#modalCertificadoFalse" class="badge badge-pill badge-danger" title="Certificado Indisponível">SEE CERTIFICATE</a -->
							</h6>
							<p class="margin-tb-30">
								Graduated from High School on December 2016 at the Perfil Pádua High School ( Santa Cruz Garden, South Side of São Paulo)
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Extension Course: Computer Graphics</b></h4>
							<h5 class="font-yellow"><b>SAGA - SCHOOL OF ART, GAME AND ANIMATION</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on October 2013 <span class="badge badge-pill badge-warning">3 YEARS</span> <!-- a href="#" data-toggle="modal" data-target="#modalCertificadoFalse" class="badge badge-pill badge-danger" title="Certificado Indisponível">SEE CERTIFICATE</a -->
							</h6>
							<p class="margin-tb-30">
								Professional course of Computer Graphics done in Tatuapé (East Side of São Paulo), with a duration of 3 years. Modules on many softwares, such as After effects, Adobe Premiere, Dreamweaver, Fireworks, Photoshop, Autodesk Maya, and Digital Painting Techniques.
							</p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Extension Course: Introduction to Web Design</b></h4>
							<h5 class="font-yellow"><b>OBJETIVA SCHOOL</b></h5>
							<h6 class="font-lite-black margin-t-10 text-uppercase">Finished on March 2010 <a href="#" data-toggle="modal" data-target="#modalCertificadoFalse" class="badge badge-pill badge-danger" title="Certificado Indisponível">SEE CERTIFICATE</a> </h6>
							<p class="margin-tb-30">
								Introductory course of Web Design in software such as Macromedia Flash 8, Macromedia Fireworks 8, Macromedia Dreamweaver 8, that would eventually become Basic Adobe HTML, Basic CSS.
							</p>
						</div><!-- education -->

					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->

	</section><!-- about-section -->

	<section class="counter-section" id="counter">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="<?php echo $softwares ?>">0</span></b></h1>
						<h5 class="desc"><b>Softwares Used</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="600" data-count="<?php echo $projects ?>">0</span></b></h1>
						<h5 class="desc"><b>Projects Done</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="800" data-count="<?php echo $clients ?>">0</span></b></h1>
						<h5 class="desc"><b>Satisfied Clients</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="1000" data-count="<?php echo $coffee ?>">0</span></b></h1>
						<h5 class="desc"><b>Cups of coffee</b></h5>
					</div><!-- margin-b-30 -->
				</div><!-- col-md-3-->

			</div><!-- row-->
		</div><!-- container-->
	</section><!-- counter-section-->

	<section class="quoto-section center-text">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<i class="icon ion-quote"></i>
					<h3><b>You may never know what <span class="font-yellow-correct">results come of your actions,</span></b></h3>
					<h3><b>but if you do nothing, there will be no <span class="font-yellow-correct">results</span>.</b></h3>
					<h5><b><span class="font-yellow-correct">Mahatma Gandhi</span></b></h5>
				</div><!-- col-sm-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- quoto-section -->

	<footer>
		<p class="copyright">
			Done with <i class="fas fa-heart font-yellow-correct"></i> and a lot of <i class="fas fa-mug-hot font-yellow-correct"></i> | <a href="mailto:leo@webid.net.br" target="_blank">#SendJobs</a>
		</p>



		<!-- Modal -->
		<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Curriculum Vitae Indisponível</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span class="font-weight-light">Peço desculpas pelo transtorno, em breve meu currículo estará aqui.</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- FIM DO MODAL -->

		<!-- Modal Certificados -->
		<div class="modal fade" id="modalCertificadoFalse" tabindex="-1" role="dialog" aria-labelledby="modalCertificadoFalseTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalCertificadoFalseTitle">Unavailable Certificate</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						I apologize for the inconvenience, unfortunately, this certificate is not available :(
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Fim Modal Certificados -->

		<!-- Portuguese Modal -->
		<div class="modal fade" id="portugueseModal" tabindex="-1" role="dialog" aria-labelledby="portugueseModalTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="portugueseModalTitle">Do you wish to leave this page?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						I saw through your location that this is the best language for you.
						Do you still wish to go to the portuguese version?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<a href="../pt-br" class="btn btn-success">Continue</a>
					</div>

				</div>
			</div>
		</div>
		<!-- Portuguese Modal end -->

		<!-- English Modal -->
		<div class="modal fade" id="englishModal" tabindex="-1" role="dialog" aria-labelledby="englishModalTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="englishModalTitle">Ops!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						You’re already on this page :)
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- English Modal end -->

		<!-- Deutsch Modal -->
		<div class="modal fade" id="deutschModal" tabindex="-1" role="dialog" aria-labelledby="deutschModalTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="deutschModalTitle">Do you wish to leave this page?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						I saw through your location that this is the best language for you.
						Do you still wish to go to the german version?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<a href="../de" class="btn btn-success">Continue</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Deutsch Modal end -->


	</footer>

	<!-- SCIPTS -->

	<script src="../assets/common-js/jquery-3.2.1.min.js"></script>

	<script src="../assets/common-js/tether.min.js"></script>

	<script src="../assets/common-js/bootstrap.js"></script>

	<script src="../assets/common-js/isotope.pkgd.min.js"></script>

	<script src="../assets/common-js/jquery.waypoints.min.js"></script>

	<script src="../assets/common-js/progressbar.min.js"></script>

	<script src="../assets/common-js/jquery.fluidbox.min.js"></script>

	<script src="../assets/common-js/scripts.js"></script>

	<script type="text/javascript">
		function openLattes() {
			window.open("http://lattes.cnpq.br/0577768186253470");
		}
		$(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>



</body>

</html>