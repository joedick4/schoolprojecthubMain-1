<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="css/vendor/tooltipster.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title> School Project Hub| Home </title>
</head>
<body>

	<!-- HEADER -->
	<div class="header-wrap">
		<header>
			<!-- LOGO -->
			<a href="index.php">
				<figure class="logo">
					<img src="images/logo1.png" alt="logo">
				</figure>
			</a>
			<!-- /LOGO -->

			<!-- MOBILE MENU HANDLER -->
			<div class="mobile-menu-handler left primary">
				<img src="images/pull-icon.png" alt="pull-icon">
			</div>
			<!-- /MOBILE MENU HANDLER -->

			<!-- LOGO MOBILE -->
			<a href="index.php">
				<figure class="logo-mobile">
					<img src="images/logo_mobile.png" alt="logo-mobile">
				</figure>
			</a>
			<!-- /LOGO MOBILE -->

			<!-- MOBILE ACCOUNT OPTIONS HANDLER -->
			<div class="mobile-account-options-handler right secondary">
				<span class="icon-user"></span>
			</div>
			<!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

			<!-- USER BOARD -->
			
				<!-- /USER QUICKVIEW -->

				

				<!-- ACCOUNT ACTIONS -->
				<div class="account-actions">
					<a href="register.php" class="button primary">Become a Seller</a>
					<a href="logout.php" class="button secondary">Logout</a>
				</div>
				<!-- /ACCOUNT ACTIONS -->
			</div>
			<!-- /USER BOARD -->
		</header>
	</div>
	<!-- /HEADER -->

	<!-- SIDE MENU -->
	<div id="mobile-menu" class="side-menu left closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<figure class="logo small">
				<img src="images/logo.png" alt="logo">
			</figure>
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Main Links</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect interactive">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php">Home</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="hirewriter2.php">Hire a writer</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="projects.php">Projects</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="csc.php">Source Codes</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="payments.php">Payment</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			
		</ul>
		<!-- /DROPDOWN -->
	</div>
	<!-- /SIDE MENU -->

	

	<!-- MAIN MENU -->
	<div class="main-menu-wrap">
		<div class="menu-bar">
			<nav>
				<ul class="main-menu">
					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="index.php">Home</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="http://localhost:8080/SchproHub/hirewriter2.php">Hire a writer</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="projects.php">Projects</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="csc.php">Source Codes</a>
					</li>
					<li class="menu-item">
						<a href="payments.php">Payment</a>
					</li>
					<li class="menu-item">
						<a href="blog.php">Blog</a>
					</li>
					<li class="menu-item">
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</nav>
			<!--<form class="search-form">
				<input type="text" class="rounded" name="search" id="search_products" placeholder="Search project topics here...">
				<input type="image" src="images/search-icon.png" alt="search-icon">
			</form>-->
		</div>
	</div>
	<!-- /MAIN MENU -->

	<!-- BANNER -->
	<div class="banner-wrap">
		<section class="banner banner-v2">
			<h5></h5>
			<h1>Millions of Final Year Project<span> Topics & Materials Available</span></h1>
			<!--<p>We have thousands of Final Year Projects  Topics for you</p>-->
			<!--<h5>Register now and start</h5>
			<h1><span>Buying and Selling</span></h1>-->

			<form class="search-widget-form">
				<input type="text" name="category_name" placeholder="Search project topics here...">
				<label for="categories" class="select-block">
					<select name="categories" id="categories">
						<option value="0">All Department</option>
						<option value="1">Accounting</option>
						<option value="2">Agriculture</option>
						<option value="3">Banking & Fin</option>
						<option value="4">Business Admin</option>
						<option value="5">Business Edu.</option>
						<option value="6">Computer Science</option>
						<option value="7">Education</option>
						<option value="8">Marketing</option>
						<option value="8">SLT</option>
						<option value="8">Pol Science</option>
					</select>
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</label>
				<button class="button medium primary">Search Now!</button>
			</form>
		</section>
	</div>
	<!-- /BANNER -->

	<!-- CATEGORY NAV -->
	<div class="category-nav-wrap">
		<div class="category-nav primary">
			<div class="category-tabs">
				<div class="category-tab">
					<p>Departments</p>
				</div>

				<!--<div class="category-tab">
					<p>Departments</p>
				</div>

				<!--<div class="category-tab">
					<p>Source Codes</p>
				</div>-->
			</div>

			<!-- SLIDE CONTROLS -->
			<div class="slide-control-wrap primary">
				<div class="slide-control left">
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</div>

				<div class="slide-control right">
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</div>
			</div>
			<!-- /SLIDE CONTROLS -->
		</div>
	</div>
	<!-- /CATEGORY NAV -->

	<!-- PRODUCT SIDESHOW -->
	<div id="product-sideshow-wrap">
		<div id="product-sideshow">
		
			<!-- PRODUCT SHOWCASE -->
				<div class="product-showcase tabbed">
					
				</div>
				<!-- /PRODUCT SHOWCASE -->
				
				<div class="product-showcase tabbed">
				<div class="product-list list full">
						<!-- PRODUCT ITEM -->
						<div class="product-item">
							

							<!-- PRODUCT INFO -->
							<div class="author-data">
								<a href="accounting.php">
									<p class="text-header">Accounting</p>
								</a>
								<p class="product-description">234 projects</p>
								
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Agriculture</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /AUTHOR DATA -->

							<!-- ITEM METADATA -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Banking And Finance</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- ITEM METADATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Biochemistry</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Biology</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /ITEM ACTIONS -->
							<!-- ITEM ACTIONS -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Business Administration</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /ITEM ACTIONS -->
							
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							

							<!-- PRODUCT INFO -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Business Education</p>
								</a>
								<p class="product-description">234 projects</p>
								
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Civil Engineering</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /AUTHOR DATA -->

							<!-- ITEM METADATA -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Computer Science</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- ITEM METADATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Criminology And Security Studies</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Economics</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /ITEM ACTIONS -->
							<!-- ITEM ACTIONS -->
							<div class="author-data">
								<a href="item-v1.html">
									<p class="text-header">Education</p>
								</a>
								<p class="product-description">234 projects</p>
							</div>
							<!-- /ITEM ACTIONS -->
							
						</div>
						<!-- /PRODUCT ITEM -->
						
						
					</div>
					<!-- /PRODUCT LIST -->
				</div>
				<!-- /PRODUCT SHOWCASE -->
			</div>
			<!-- /PRODUCT SHOWCASE -->
				

			<a href="#" class="button big dark"><span>Load More</span> Departments</a>
		</div>
	</div>
	<!-- /PRODUCT SIDESHOW -->

	<!-- SERVICES -->
	<div id="services-wrap">
		<section id="services" class="services-v2">
			<!-- SERVICE LIST -->
			<div class="service-list small column3-wrap">
				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<span class="icon-present"></span>
					</div>
					<h3>Buy &amp; Sell Easily</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<span class="icon-lock"></span>
					</div>
					<h3>Secure Transaction</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<span class="icon-like"></span>
					</div>
					<h3>Products Control</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<span class="icon-diamond"></span>
					</div>
					<h3>Quality Platform</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<span class="icon-earphones-alt"></span>
					</div>
					<h3>Assistance 24/7</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="outer-ring">
						<div class="inner-ring"></div>
						<span class="icon-bubble"></span>
					</div>
					<h3>Support Forums</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->
			</div>
			<!-- /SERVICE LIST -->
			<div class="clearfix"></div>
		</section>
	</div>
	<!-- /SERVICES -->

	<!-- SUBSCRIBE BANNER -->
	<div id="subscribe-banner-wrap">
		<div id="subscribe-banner">
			<!-- SUBSCRIBE CONTENT -->
			<div class="subscribe-content">
				<!-- SUBSCRIBE HEADER -->
				<div class="subscribe-header">
					<figure>
						<img src="images/news_icon.png" alt="subscribe-icon">
					</figure>
					<p class="subscribe-title">Subscribe to our Newsletter</p>
					<p>And receive the latest news and offers</p>
				</div>
				<!-- /SUBSCRIBE HEADER -->

				<!-- SUBSCRIBE FORM -->
				<form class="subscribe-form">
					<input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter your email here...">
					<button class="button medium dark">Subscribe!</button>
				</form>
				<!-- /SUBSCRIBE FORM -->
			</div>
			<!-- /SUBSCRIBE CONTENT -->
		</div>
	</div>
	<!-- /SUBSCRIBE BANNER -->

	<!-- FOOTER -->
	<footer>
		<!-- FOOTER TOP -->
		<div id="footer-top-wrap">
			<div id="footer-top">
				<!-- COMPANY INFO -->
				<div class="company-info">
					<figure class="logo small">
						<img src="images/logo_small.png" alt="logo-small">
					</figure>
					<p>We at SchoolProjectHub strive to provide our clients with the best quality research materials and software.Our team of Researchers and software engineering professionals are always on the move for developing innovative areas and software functionality to meet our client needs</p>
					
					<!-- SOCIAL LINKS -->
					<ul class="social-links">
						<li class="social-link fb">
							<a href="https://www.facebook.com/schoolprojecthub/"></a>
						</li>
						<li class="social-link twt">
							<a href="#"></a>
						</li>
						
						
					</ul>
					<!-- /SOCIAL LINKS -->
				</div>
				<!-- /COMPANY INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">SchoolProjectHub Market</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="projects.php">Project Topics</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="hirewriter.php">Hire a Writer</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="csc.php">Source Codes</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="payments.php">Payment</a>
						</li>
						
						<li class="link-item">
							<div class="bullet"></div>
							<a href="blog.php">Blog</a>
						</li>
						
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Popular Categories</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="accounting.php">Accounting</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="agriculture.php">Agriculture</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="baf.php">Banking And Finance</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="bam.php">Business Administration</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="csc.php">Computer Science</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="education.php">Education</a>
						</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Help and FAQs</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="about.php">About Us</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="contact.php">Contact Us</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="faq.php">FAQs</a>
						</li>
						
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				
			</div>
		</div>
		<!-- /FOOTER TOP -->

		<!-- FOOTER BOTTOM -->
		<div id="footer-bottom-wrap">
			<div id="footer-bottom">
				<p><span>&copy;</span><a href="index.php">School ProjectHub</a> - All Rights Reserved 2019</p>
			</div>
		</div>
		<!-- /FOOTER BOTTOM -->
	</footer>
	<!-- /FOOTER -->

	<div class="shadow-film closed"></div>

<!-- SVG ARROW -->
<svg style="display: none;">	
	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
	</symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG STAR -->
<svg style="display: none;">
	<symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">	
		<polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751 
	2.495,6.313 -0.002,3.878 3.45,3.376 "/>
	</symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG PLUS -->
<svg style="display: none;">
	<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect x="5" width="3" height="13"/>
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG PLUS -->

<!-- jQuery -->
<script src="js/vendor/jquery-3.1.0.min.js"></script>
<!-- Tooltipster -->
<script src="js/vendor/jquery.tooltipster.min.js"></script>
<!-- Tweet -->
<script src="js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- Side Menu -->
<script src="js/side-menu.js"></script>
<!-- Tooltip -->
<script src="js/tooltip.js"></script>
<!-- User Quickview Dropdown -->
<script src="js/user-board.js"></script>
<!-- Home v2 -->
<script src="js/home-v2.js"></script>
<!-- Footer -->
<script src="js/footer.js"></script>
</body>

</html>