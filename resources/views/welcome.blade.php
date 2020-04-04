<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saturn Code</title>

        <!-- Fonts -->        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
        
        <!-- Styles -->        
        <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        
    </head>
    <body class="loader">
        <!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="{{asset('images/logo/logo-loader.png')}}" alt="logo">
	    </div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
	    <!-- header start -->
	    <header class="fixed-header">
		    <!-- header-flex-box start -->
			<div class="header-flex-box">
			    <!-- logo start -->
				<a href="index-2.html" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-white" src="{{asset('images/logo/logo-white.png')}}" alt="logo">
				        <img class="logo-black" src="{{asset('images/logo/logo-black.png')}}" alt="logo">
			        </div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end -->
		
		<!-- nav-container start -->	
		<nav class="nav-container dark-bg-1">
			<!-- nav-logo start -->
			<div class="nav-logo">
				<img src="{{asset('images/logo/logo-white.png')}}" alt="logo">
			</div><!-- nav-logo end -->
			
			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>

			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->

			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1">
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active dropdown-open">
					<a class="pointer-large nav-link">
						<span class="nav-btn active" data-text="Home">Home</span>
					</a>
					
					<!-- dropdown start -->
					<ul class="dropdown">
						<li class="nav-box">
							<a href="index-2.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Slider Home">Slider Home</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="video_home.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Video Bg">Video Bg</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="home_fullscreen.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Fullscreen Bg">Fullscreen Bg</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="home_particles.html" class="animsition-link pointer-large">
								<span class="nav-btn active" data-text="Particles">Particles</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="home_typewriter.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Typewriter">Typewriter</span>
							</a>
						</li>
					</ul><!-- dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/pexels-photo-1806031.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="about.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="services.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Services">Services</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a class="pointer-large nav-link">
						<span class="nav-btn" data-text="Portfolio">Portfolio</span>
					</a>
					
					<!-- dropdown start -->
					<ul class="dropdown">
						<li class="nav-box">
							<a href="portfolio.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Standard">Standard</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_full_screen.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="FullScreen">FullScreen</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_slider.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Slider 1">Slider 1</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_columns_slider.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Slider 2">Slider 2</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_filter.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Filter">Filter</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="project.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Single project">Single project</span>
							</a>
						</li>
					</ul><!-- dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a class="pointer-large nav-link">
						<span class="nav-btn" data-text="Blog">Blog</span>
					</a>
					
					<!-- dropdown start -->
					<ul class="dropdown">
						<li class="nav-box">
							<a href="blog.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Blog">Blog</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="single_post.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Single post">Single post</span>
							</a>
						</li>
					</ul><!-- dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/beautiful-black-close-up-1689731.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="contact.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Contact">Contact</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/double-exposure-2390185_1920.jpg);"></div>
				</li><!-- nav-box end -->
			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->
	    
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-2 particles-home">
				<!-- page-head-bg -->
				<div class="page-head-bg" id="particles-js" style="background-image: url({{asset('images/backgrounds/fullscreen/my_logo.jpg')}});"></div>
				
				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- container start eji vrai text@ -->
		  			<div class="container top-bottom-padding-120">
					  	<!-- <h2 class="overlay-loading2 medium-title red-color">Welcome Xen</h2>
				  		<h3 class="large-title-bold text-color-4">
							<span class="overlay-loading2 overlay-light-bg-1 tr-delay01">We generate</span><br>
							<span class="overlay-loading2 overlay-light-bg-1 tr-delay02">creative &</span><br>
							<span class="overlay-loading2 overlay-light-bg-1 tr-delay03">novation ideas</span>
						</h3>
						<p class="d-flex-wrap top-margin-20 text-color-4">
							<span class="small-title-oswald text-height-20 fade-loading tr-delay04 top-margin-10">Creative team</span>
							<span class="small-title-oswald text-height-20 fade-loading tr-delay05 top-margin-10">Innovation ideas</span>
							<span class="small-title-oswald text-height-20 fade-loading tr-delay06 top-margin-10">Best services</span>
						</p> -->
		  			</div><!-- container end -->
	  			</div><!-- flex-min-height-inner end -->
	  			
	  			<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">ScrrrollKaren</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- page-head end -->
			
			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 class="large-title text-height-12">
									<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="We are Creative">We are Creative</span><br>
									<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="We are Xen">We are Xen</span>
								</h2>
							</div><!-- column end -->
							<!-- column start -->
							<div class="six-columns">
								<div class="content-right-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim">Affogato thundercats quinoa, portland cold-pressed edison bulb artisan paleo banjo tousled try-hard food truck pop-up bushwick godard. Occupy 90's try-hard tote bag chicharrones stumptown polaroid hashtag cliche +1, tousled fanny pack. Tote bag iPhone crucifix hella helvetica food truck bicycle rights cloud bread. Yr iPhone asymmetrical, next level vexillologist godard blog green juice chia. Tacos jean shorts pickled PBR&B poutine.</p>
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="six-columns">
								<div class="content-left-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay03" data-animation="fade-anim">Godard slow-carb chartreuse occupy, tumblr letterpress pok pok tattooed yr lyft yuccie kinfolk. IPhone kombucha shaman gastropub snackwave 90's lo-fi pug chillwave pok pok tofu. Swag deep v listicle roof party seitan man braid raclette church-key trust fund locavore vexillologist green juice raw denim tilde meh. Austin thundercats locavore taiyaki snackwave hoodie put a bird on it tattooed selvage kitsch ramps. </p>
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="twelve-columns text-center">
								<p data-animation-child class="p-letter-style text-color-4 text-height-13 fade-anim-box tr-delay04" data-animation="fade-anim">Godard slow-carb chartreuse occupy, tumblr letterpress</p>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->
		
			<!-- section start -->
			<section class="light-bg-1 bottom-padding-30 top-padding-120" data-midnight="black">
				<!-- container start -->
				<div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">Recent Works</h2><br>
					<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">We Offer Digital Solutions</p>
				</div><!-- container end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Commercial</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Bushwick selfies</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">pork belly lyft</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">brooklyn messeng</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Narwhal pop-up intelligentsia tbh pinterest, microdosing tilde cloud bread gochujang tattooed leggings cornhole 8-bit. Austin fam chia cold-pressed raw denim. Glossier drinking vinegar portland lo-fi, polaroid bespoke lomo. Banjo art party XOXO, fashion axe sustainable retro ethical gentrify.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/pexels-photo-1619654.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/audio-cassette-cassette-tape-1626481.jpg)"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Graphic Design</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">tumeric tumblr</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">gluten-free</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">Man bun small</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Slow-carb green juice subway tile bicycle rights, fanny pack raclette palo santo put a bird on it mustache actually fam mumblecore iPhone. Iceland post-ironic health goth snackwave, mixtape synth four dollar toast sartorial. Health goth la croix vexillologist, before they sold out shabby chic.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Branding</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">batch kombucha</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">subway tile</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">salvia brooklyn</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Mlkshk YOLO wolf, leggings vinyl crucifix stumptown tousled. Pabst venmo gentrify deep v microdosing migas occupy master cleanse intelligentsia sartorial chia activated charcoal. Iceland small batch live-edge raclette roof party dreamcatcher austin pickled. Chillwave cronut messenger bag truffaut.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/blur-close-up-equipment-1034651.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/chocolate-delicious-dessert-890500.jpg)"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Web design</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">organic activated</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">charcoal vape</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">viral ennui</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Tote bag cornhole pork belly swag, cronut hoodie snackwave 90's messenger bag pour-over disrupt chartreuse. Vape ugh cardigan hell of. Vaporware umami master cleanse neutra, chartreuse flexitarian lo-fi selvage hella hoodie freegan gentrify. 8-bit air plant umami asymmetrical franzen semiotics before.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
			</section><!-- section end -->
			
			<!-- section start -->
			<section class="dark-bg-2">
				<!-- container start -->
				<div class="container small top-bottom-padding-120">
					<!-- medium-title start -->
					<h2 data-animation-container class="medium-title">
						<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Fine Folks">Fine Folks</span><br>
						<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="We’ve Worked">We’ve Worked</span><br>
						<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="With">With</span>
					</h2><!-- medium-title end -->
					
					<!-- client-list start -->
					<ul class="client-list d-flex-wrap top-padding-60">
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/3eabc7ab-8bae-44f0-8389-0169389e38c2.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/1c4bfb0e-0b9f-4c19-ba5c-113fb0714514.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/6b9fcb90-c595-432a-a97c-fcd318b74c04.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/699301b6-83ff-47f8-ad46-a6b871e79293.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/7d1fe64f-fbd7-4e5f-896d-6d79c91f29bf.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/858e2e28-faae-441c-bd9c-5c490c72b562.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/8b587214-bdcb-4d74-bb61-2480d1d15aa7.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/4b983c9a-759d-4921-ba60-dbbcaa702ee5.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/8f65e211-cd41-46dc-8c1d-ba228ac36eb9.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/9c30d6d6-6af9-4fb1-bed3-e5ea4df4c281.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/4731da4b-b2fb-4c10-aee7-c89484a5d473.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/69cb9e61-d0b8-4420-b8bd-454c9b9e1dc1.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/492492b2-b7d9-4648-a164-f530ecd6321a.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/9a6c570f-d03a-4806-9a30-dddc648707d9.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/b908b85c-f837-4dba-80cf-d961d6fcad29.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/6e63c653-6997-42c6-b788-28e9fb6d15b7.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/d5f831cf-3fb0-490b-aadc-3591c8b64156.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/2ed0436b-e3ea-48aa-85ca-755de0719c9a.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/d51e13e6-1320-4227-8bc8-c36aaa82dffd.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/aed14647-8ecf-4fef-8274-737d79a7ede1.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/d383cf8d-abee-4290-810d-a965f6c0fa6c.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/7f7b6ede-3a3e-4e17-af25-f881c0121d63.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li class="empty-spot-box">
							<a data-animation-container href="#" class="pointer-large p-style-bold-up empty-spot d-block">
								<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="This spot">This spot</span>
								<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="Awaits">Awaits</span>
								<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="You">You</span>
							</a>
						</li>
					</ul><!-- client-list end -->
				</div><!-- container end -->
			</section><!-- section end -->

			<!-- light-bg-2 start -->
			<div class="light-bg-2 top-bottom-padding-120" data-midnight="black">
				<!-- testimonials-slider start -->
				<div class="testimonials-slider container small">
					<!-- swiper-wrapper start -->
					<div class="swiper-wrapper">
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/adult-beanie-black-background-1529350.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse brooklyn meh organic man braid. Actually humblebrag sriracha authentic chia. IPhone glossier schlitz fam, la croix keytar retro offal. Artisan selfies mlkshk pinterest gastropub knausgaard live-edge.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Balanchaev Balancha, <span class="text-color-2">Investor</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-428340.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral lyft tacos retro. Bespoke drinking vinegar single-origin coffee pop-up, whatever air plant austin hexagon selfies tattooed. Fixie taxidermy forage hot chicken, locavore church-key authentic coloring book.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Fred Kinney, <span class="text-color-2">Designer</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-764529.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over snackwave plaid four dollar toast. Messenger bag keffiyeh church-key, synth iPhone pabst leggings ethical. PBR&B cred hot chicken pork belly.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Steve Kong, <span class="text-color-2">Web developer</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-809433.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Chambray enamel pin synth shabby chic palo santo. Franzen 90's man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct trade, food truck tacos biodiesel craft beer. Af hammock listicle vape banjo echo park meditation organic cred subway tile. Echo park DIY.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Balanchaev Balancha, <span class="text-color-2">Investor</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-894156.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw denim swag drinking vinegar. Yuccie jianbing bespoke retro, photo booth salvia hella meh post-ironic cornhole tacos plaid.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Fred Kinney, <span class="text-color-2">Designer</span>
							</div>
						</div><!-- slide end -->
					</div><!-- swiper-wrapper end -->
					
					<!-- swiper-pagination -->
					<div class="swiper-pagination"></div>
				</div><!-- testimonials-slider end -->
			</div><!-- light-bg-2 end -->
			
			<!-- video-content-bg start -->
			<div class="video-content-bg" style="background-image:url(assets/images/backgrounds/business-calligraphy-chinese-lanterns-1455969.jpg)">
				<div class="bg-overlay"></div>
				<a href="https://www.youtube.com/watch?v=9TGlc0Fufgk" class="video-play-button popup-youtube pointer-large">
					<span></span>
				</a>
			</div><!-- video-content-bg end -->
			
			<!-- latest-news start -->
			<section class="latest-news top-padding-120 bottom-padding-30 light-bg-1" data-midnight="black">
				<!-- container start -->
				<div class="container">
					<!-- text-center start -->
					<div data-animation-container class="text-center">
						<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">From the blog</h2><br>
						<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">Check our latest news</p>
					</div><!-- text-center end -->

					<!-- flex-container start -->
					<div class="flex-container response-999 top-padding-60">
						<!-- column start -->
						<div class="four-columns bottom-padding-90">
							<article class="content-right-margin-20 light-bg-2" data-animation-container>
								<a href="single_post.html" class="pointer-large animsition-link hover-box d-block">
									<div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
										<img class="hover-img" src="assets/images/blog/bodypaint-female-girl-50595.jpg" alt="blog img">
									</div>
									<h3 class="title-style text-color-1 top-margin-30 blog-title content-padding-l-r-20">
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">subway tile</span><br>
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">brooklyn bun</span><br>
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">pickled bespoke</span>
									</h3>
								</a>
								<div class="content-padding-bottom-20 content-padding-l-r-20">
			                        <ul data-animation-child class="blog-category top-margin-30 fade-anim-box tr-delay04 text-color-2" data-animation="fade-anim">
			                            <li><i class="fas fa-thumbtack text-color-3"></i></li>
			                            <li class="p-letter-style pointer-small hover-color"><a href="#">branding</a></li>
			                            <li class="p-letter-style pointer-small hover-color"><a href="#">design</a></li>
			                            <li class="p-letter-style pointer-small hover-color"><a href="#">art</a></li>
			                        </ul>
			                        <ul data-animation-child class="blog-tags top-margin-10 fade-anim-box tr-delay05 text-color-2" data-animation="fade-anim">
		                                <li><i class="fas fa-tags text-color-3"></i></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">template</a></li>
			                            <li class="p-letter-style pointer-small hover-color"><a href="#">post formats</a></li>
			                        </ul>
		                            <div data-animation-child class="blog-autor-date top-margin-30 fade-anim-box tr-delay06 text-color-1" data-animation="fade-anim">
		                            	<a class="xsmall-title-oswald pointer-small hover-color" href="#">Balanchaev Balancha</a>
										<a class="xsmall-title-oswald pointer-small hover-color" href="#">March 20, 2019</a>
		                            </div>
								</div>					
							</article>
						</div><!-- column end -->
						<!-- column start -->
						<div class="four-columns bottom-padding-90">
							<article class="content-left-right-margin-10 light-bg-2" data-animation-container>
								<a href="single_post.html" class="pointer-large animsition-link hover-box d-block">
									<div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
										<img class="hover-img" src="assets/images/blog/auto-automobile-automotive-358201.jpg" alt="blog img">
									</div>
									<h3 class="title-style text-color-1 top-margin-30 blog-title content-padding-l-r-20">
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Cornhole slow</span><br>
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">franzen woke</span><br>
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">master cleanse</span>
									</h3>
								</a>
								<div class="content-padding-bottom-20 content-padding-l-r-20">
									<ul data-animation-child class="blog-category top-margin-30 fade-anim-box tr-delay04 text-color-2" data-animation="fade-anim">
		                                <li><i class="fas fa-thumbtack text-color-3"></i></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">branding</a></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">design</a></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">art</a></li>
		                            </ul>
		                            <ul data-animation-child class="blog-tags top-margin-10 fade-anim-box tr-delay05 text-color-2" data-animation="fade-anim">
		                                <li><i class="fas fa-tags text-color-3"></i></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">template</a></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">post formats</a></li>
		                            </ul>
		                            <div data-animation-child class="blog-autor-date top-margin-30 fade-anim-box tr-delay06 text-color-1" data-animation="fade-anim">
		                            	<a class="xsmall-title-oswald pointer-small hover-color" href="#">Steve Kong</a>
										<a class="xsmall-title-oswald pointer-small hover-color" href="#">March 13, 2019</a>
		                            </div>		
								</div>						
							</article>
						</div><!-- column end -->
						<!-- column start -->
						<div class="four-columns bottom-padding-90">
							<article class="content-left-margin-20 light-bg-2" data-animation-container>
								<a href="single_post.html" class="pointer-large animsition-link hover-box d-block">
									<div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
										<img class="hover-img" src="assets/images/blog/art-blur-close-up-1826029.jpg" alt="blog img">
									</div>
									<h3 class="title-style text-color-1 top-margin-30 blog-title content-padding-l-r-20">
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Man bun 8-bit</span><br>
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">artisan pickled</span><br>
										<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">hot chicken</span>
									</h3>
								</a>
								<div class="content-padding-bottom-20 content-padding-l-r-20">
									<ul data-animation-child class="blog-category top-margin-30 fade-anim-box tr-delay04 text-color-2" data-animation="fade-anim">
		                                <li><i class="fas fa-thumbtack text-color-3"></i></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">branding</a></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">design</a></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">art</a></li>
		                            </ul>
		                            <ul data-animation-child class="blog-tags top-margin-10 fade-anim-box tr-delay05 text-color-2" data-animation="fade-anim">
		                                <li><i class="fas fa-tags text-color-3"></i></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">template</a></li>
		                                <li class="p-letter-style pointer-small hover-color"><a href="#">post formats</a></li>
		                            </ul>
		                            <div data-animation-child class="blog-autor-date top-margin-30 fade-anim-box tr-delay06 text-color-1" data-animation="fade-anim">
		                            	<a class="xsmall-title-oswald pointer-small hover-color" href="#">James Basinski</a>
										<a class="xsmall-title-oswald pointer-small hover-color" href="#">March 10, 2019</a>
		                            </div>								
								</div>
							</article>
						</div><!-- column end -->
					</div><!-- flex-container end -->
				</div><!-- container end -->
			</section><!-- latest-news end -->
		</main><!-- animsition-overlay end -->
		
		<!-- footer start -->
		<footer class="footer dark-bg-1">
			<!-- flex-container start -->
			<div class="flex-container container top-bottom-padding-90">
				<!-- column start -->
				<div class="two-columns bottom-padding-60">
					<div class="content-right-margin-10 footer-center-mobile">
						<img class="footer-logo" src="assets/images/logo/logo-white.png" alt="logo">
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="three-columns bottom-padding-60">
					<div class="content-left-right-margin-10">
						<ul class="footer-menu text-color-4">
							<li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="index-2.html">Home</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="about.html">About</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="services.html">Services</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="portfolio.html">Portfolio</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="blog.html">Blog</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="four-columns bottom-padding-60">
					<div class="content-left-right-margin-10 footer-center-mobile">
						<ul class="footer-information text-color-4">
							<li><i class="far fa-envelope"></i><a href="#" class="xsmall-title-oswald">email@xen_agency.com</a></li>
							<li><i class="fas fa-mobile-alt"></i><a href="#" class="xsmall-title-oswald">+23 8 8532 7834</a></li>
							<li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17">PO Box 223158 Oliver Street<br><span>East Victoria 2006 UK</span></a></li>
						</ul>
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="three-columns bottom-padding-60">
					<div class="content-left-margin-10">
						<ul class="footer-social">
							<li>
								<div class="flip-btn-box">
									<a href="#" class="flip-btn pointer-small" data-text="Instagram">Instagram</a>
								</div>
							</li>
							<li>
								<div class="flip-btn-box">
									<a href="#" class="flip-btn pointer-small" data-text="Facebook">Facebook</a>
								</div>
							</li>
							<li>
								<div class="flip-btn-box">
									<a href="#" class="flip-btn pointer-small" data-text="Spotify">Spotify</a>
								</div>
							</li>
							<li>
								<div class="flip-btn-box">
									<a href="#" class="flip-btn pointer-small" data-text="Vimeo">Vimeo</a>
								</div>
							</li>
							<li>
								<div class="flip-btn-box">
									<a href="#" class="flip-btn pointer-small" data-text="Behance">Behance</a>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="twelve-columns">
					<p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright 2019 XENKaren Aroyan 20. Theme by <a href="#">Jinna Gik</a></p>
				</div><!-- column end -->
			</div><!-- flex-container end -->
		</footer><!-- footer end -->
		
		<!-- scripts --> 
        
        <script src="{{asset('js/plugins.js')}}"></script> 
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/particles_init.js')}}"></script>
    </body>
</html>
