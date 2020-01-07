<?php
session_start();
error_reporting(0);
include('includes/config.php');


    ?>




<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="css/vendor/tooltipster.css">
	<link rel="stylesheet" href="css/vendor/jquery.range.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!--Topics Table--> 
	
	<!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>School ProjectHub | Accounting</title>
</head>
<body>

	<!-- HEADER -->
	<div class="header-wrap">
		<header>
			<!-- LOGO -->
			<a href="index.php">
				<figure class="logo">
					<img src="images/logo.png" alt="logo">
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
				<a href="hirewriter.php">Hire a writer</a>
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
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="blog.php">Blog</a>
			</li>
			<!-- /DROPDOWN ITEM -->
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="contact.php">Contact Us</a>
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
						<a href="register.php">Hire a writer</a>
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

	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Accounting </h2>
			<p>Home<span class="separator">/</span><span class="current-section">Accounting</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<!-- CONTENT -->
			<div class="content ">
				 
				<!-- /HEADLINE -->
						<article class="post">
					

					<hr class="line-separator">

					<!-- POST CONTENT -->
					<div class="post-content">
						

						<!-- POST PARAGRAPH -->
						<div class="post-paragraph">
							
							<table id="example" class="display responsive-table ">
                                    <thead>
                                        <tr>
                                            <th>Sr no</th>
                                            <th>Pcode</th>
                                            <th>Project Topic</th>
                                            
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
<?php $sql = "SELECT pid,pcode,topic from tblaccounting";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
                                        <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->pcode);?></td>
											<td><a href="topicdetails.php?topicid=<?php echo htmlentities($result->pid);?>"><?php echo htmlentities($result->topic);?></a></td>
                                           

									   </tr>
                                         <?php $cnt++;} }?>
                                    </tbody>
                                </table>
							
						</div>
						<!-- /POST PARAGRAPH -->
						
						
						<div class="clearfix"></div>
					</div>
					<!-- /POST CONTENT -->

					<hr class="line-separator">

					<!-- SHARE -->
					<div class="share-links-wrap">
						<p class="text-header small">Share this:</p>
						<!-- SHARE LINKS -->
						<ul class="share-links hoverable">
							<li><a href="https://www.facebook.com/schoolprojecthub/" class="fb"></a></li>
							<li><a href="#" class="twt"></a></li>
							
						</ul>
						<!-- /SHARE LINKS -->
					</div>
					<!-- /SHARE -->
				</article>
				<!-- /POST -->
				<!-- PRODUCT SHOWCASE -->
				<div class="product-showcase">
					
					
					
					<!-- PRODUCT LIST -->
					<div class="product-list grid column">
						<!-- PRODUCT ITEM -->
						
						
						
					</div>
					<!-- /PRODUCT LIST -->
				</div>
				<!-- /PRODUCT SHOWCASE -->

				
			</div>
			<!-- CONTENT -->

			<!-- SIDEBAR -->
			<div class="sidebar">
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-items">
					<h4>All Categories</h4>
					
					<!-- DROPDOWN -->
				<ul class="dropdown hover-effect">
					<li class="dropdown-item active">
					<?php
$sql = "SELECT pid from  tblaccounting";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totaccttopics=$query->rowCount();
?>   
                                
                              <a href="accounting.php"> Accounting  (<?php echo htmlentities($totaccttopics);?>)
						</a>
					</li>
					<li class="dropdown-item ">
						
						<?php
$sql = "SELECT pid from  tblagriculture";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totagrictopics=$query->rowCount();
?>   
                                
                              <a href="agriculture.php"> Agriculture (<?php echo htmlentities($totagrictopics);?>)
						</a>
						
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblbaf";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totbaftopics=$query->rowCount();
?>   
                                
                              <a href="baf.php"> Banking and Finance (<?php echo htmlentities($totbaftopics);?>)
						</a>	
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblbiochem";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totbiochemtopics=$query->rowCount();
?>   
                                
                              <a href="biochem.php"> Biochemistry (<?php echo htmlentities($totbiochemtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblbiology";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totbiologytopics=$query->rowCount();
?>   
                                
                              <a href="biology.php"> Biology (<?php echo htmlentities($totbiologytopics);?>)
						</a>
						
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblbusinessadmin";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totbamtopics=$query->rowCount();
?>   
                                
                              <a href="bam.php"> Business Administration (<?php echo htmlentities($totbamtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblbusinessedu";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totbizedutopics=$query->rowCount();
?>   
                                
                              <a href="businessedu.php"> Business Education (<?php echo htmlentities($totbizedutopics);?>)
						</a>
					</li>
					
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblcivileng";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totciviltopics=$query->rowCount();
?>   
                                
                              <a href="civileng.php"> Civil Engineering (<?php echo htmlentities($totciviltopics);?>)
						</a>
						
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblcomputersc";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totcsctopics=$query->rowCount();
?>   
                                
                              <a href="csc.php"> Computer Science  (<?php echo htmlentities($totcsctopics);?>)
						</a>
					</li>
					
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblcriminology";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totcrimetopics=$query->rowCount();
?>   
                                
                              <a href="crime.php"> Criminology and Security studies  (<?php echo htmlentities($totcrimetopics);?>)
						</a>
					</li>
					
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblecons";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$toteconstopics=$query->rowCount();
?>   
                                
                              <a href="econs.php"> Economics  (<?php echo htmlentities($toteconstopics);?>)
						</a>
					</li>
				<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tbleducation";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totedutopics=$query->rowCount();
?>   
                                
                              <a href="education.php"> Education  (<?php echo htmlentities($totedutopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblelectrical";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totelecttopics=$query->rowCount();
?>   
                                
                              <a href="elect.php"> Electrical Engineering  (<?php echo htmlentities($totelecttopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblenglish";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totengtopics=$query->rowCount();
?>   
                                
                              <a href="english.php"> English Language  (<?php echo htmlentities($totengtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblenterpreneurs";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totenterpreneurstopics=$query->rowCount();
?>   
                                
                              <a href="enterpreneurs.php"> Enterpreneural Studies  (<?php echo htmlentities($totenterpreneurstopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblfineart";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totfinearttopics=$query->rowCount();
?>   
                                
                              <a href="fineart.php"> Fine And Applied Art  (<?php echo htmlentities($totfinearttopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblfishery";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totfisherytopics=$query->rowCount();
?>   
                                
                              <a href="fishery.php"> Fishery And Aquaculture  (<?php echo htmlentities($totfisherytopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblgenetics";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totgeneticstopics=$query->rowCount();
?>   
                                
                              <a href="genetics.php"> Genetics And Biotechnology  (<?php echo htmlentities($totgeneticstopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblgeology";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totgeologytopics=$query->rowCount();
?>   
                                
                              <a href="geology.php"> Geology  (<?php echo htmlentities($totgeologytopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblguidance";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totguidancetopics=$query->rowCount();
?>   
                                
                              <a href="guidance.php"> Guidance And Councelling  (<?php echo htmlentities($totguidancetopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblhealthscience";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$tothealthsciencetopics=$query->rowCount();
?>   
                                
                              <a href="healthscience.php"> Health Science  (<?php echo htmlentities($tothealthsciencetopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblhistoryrs";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$tothistoryrstopics=$query->rowCount();
?>   
                                
                              <a href="historyrs.php"> History And Religious Studies  (<?php echo htmlentities($tothistoryrstopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblhomerural";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$tothomeruraltopics=$query->rowCount();
?>   
                                
                              <a href="homerural.php"> Home And Rural Economics (<?php echo htmlentities($tothomeruraltopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblhumanresources";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$tothumanresourcestopics=$query->rowCount();
?>   
                                
                              <a href="humanresources.php"> Human Resource Management  (<?php echo htmlentities($tothumanresourcestopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblindustrialchem";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totindustrialchemtopics=$query->rowCount();
?>   
                                
                              <a href="industrialchem.php"> Industrial Chemistry  (<?php echo htmlentities($totindustrialchemtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblinfotech";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totinfotechtopics=$query->rowCount();
?>   
                                
                              <a href="infotech.php"> Information Technology  (<?php echo htmlentities($totinfotechtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblinternationalrelation";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totinternationalrelationtopics=$query->rowCount();
?>   
                                
                              <a href="internationalrelation.php"> International Relations  (<?php echo htmlentities($totinternationalrelationtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tbllaw";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totlawtopics=$query->rowCount();
?>   
                                
                              <a href="law.php"> Law  (<?php echo htmlentities($totlawtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tbllibraryinfo";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totlibraryinfotopics=$query->rowCount();
?>   
                                
                              <a href="libraryinfo.php"> Library And Information Science  (<?php echo htmlentities($totlibraryinfotopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblmarinetransport";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totmarinetransporttopics=$query->rowCount();
?>   
                                
                              <a href="marinetransport.php"> Marine Transport  (<?php echo htmlentities($totmarinetransporttopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblmarketing";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totmarketingtopics=$query->rowCount();
?>   
                                
                              <a href="marketing.php"> Marketing  (<?php echo htmlentities($totmarketingtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblmasscomm";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totmasscommtopics=$query->rowCount();
?>   
                                
                              <a href="masscomm.php"> Mass Communication  (<?php echo htmlentities($totmasscommtopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblmicrobiology";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totmicrobiologytopics=$query->rowCount();
?>   
                                
                              <a href="microbiology.php"> Microbiology  (<?php echo htmlentities($totmicrobiologytopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tbloilgas";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totoilgastopics=$query->rowCount();
?>   
                                
                              <a href="oilgas.php"> Oil And Gas  (<?php echo htmlentities($totoilgastopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblpolscience";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totpolsciencetopics=$query->rowCount();
?>   
                                
                              <a href="polscience.php"> Political Science  (<?php echo htmlentities($totpolsciencetopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblpsychology";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totpsychologytopics=$query->rowCount();
?>   
                                
                              <a href="psychology.php"> Psychology  (<?php echo htmlentities($totpsychologytopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblpublicadmin";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totpublicadmintopics=$query->rowCount();
?>   
                                
                              <a href="publicadmin.php"> Public Administration  (<?php echo htmlentities($totpublicadmintopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblsecreterialstudies";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totsecreterialstudiestopics=$query->rowCount();
?>   
                                
                              <a href="secreterialstudies.php"> Secreterial Studies  (<?php echo htmlentities($totsecreterialstudiestopics);?>)
						</a>
					</li>
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblslt";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totslttopics=$query->rowCount();
?>   
                                
                              <a href="slt.php"> Science Lab Tech  (<?php echo htmlentities($totslttopics);?>)
						</a>
					</li>
					
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblsociology";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totsociologytopics=$query->rowCount();
?>   
                                
                              <a href="sociology.php"> Sociology  (<?php echo htmlentities($totsociologytopics);?>)
						</a>
					</li>
					
					<li class="dropdown-item">
					<?php
$sql = "SELECT pid from  tblurbanregionplan";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$toturbanregionplantopics=$query->rowCount();
?>   
                                
                              <a href="urbanregionplan.php"> Urban And Regional Planning  (<?php echo htmlentities($toturbanregionplantopics);?>)
						</a>
					</li>
				
				
				</ul>
				<!-- /DROPDOWN -->
					
					
					<div class="clearfix"></div>
				</div>
				<!-- /SIDEBAR ITEM -->

				

				
			</div>
			<!-- /SIDEBAR -->
		</div>
	</div>
	<!-- /SECTION -->

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
<!-- JRange -->
<script src="js/vendor/jquery.range.min.js"></script>
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
<!-- Shop -->
<script src="js/shop.js"></script>
<!-- Footer -->
<script src="js/footer.js"></script>

<!--Topic Tables -->
 <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/table-data.js"></script>

</body>


</html>