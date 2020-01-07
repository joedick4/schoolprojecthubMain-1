<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['add']))
{
$comment=$_POST['comment'];
  
$sql="INSERT INTO tblreview(message) VALUES(:comment)";
$query = $dbh->prepare($sql);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
//$query->bindParam(':deptcode',$deptcode,PDO::PARAM_STR);
//$query->bindParam(':deptshortname',$deptshortname,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Comment Successfully Posted";
}
else 
{
$error="Something went wrong. Please try again";
}

}
$did=intval($_GET['topicid']);
 ?>


   




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
	<title>SchoolProjectHub | Topic Details</title>
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
			<form class="search-form">
				<input type="text" class="rounded" name="search" id="search_products" placeholder="Search project topics here...">
				<input type="image" src="images/search-icon.png" alt="search-icon">
			</form>
		</div>
	</div>
	<!-- /MAIN MENU -->

	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2></h2>
			<p>Home<span class="separator">/</span>Accounting<span class="separator">/</span><span class="current-section">Payments</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->
<?php 
$did=intval($_GET['topicid']);
$sql = "SELECT pid,topic,description,price,format,chapters,pages,attribute,studylevel from tblaccounting WHERE pid=:did";
$query = $dbh -> prepare($sql);
$query->bindParam(':did',$did,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<!-- SIDEBAR -->
			<div class="sidebar right">
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item">
					<p class="price large"><span>&#x20A6;</span><?php echo htmlentities($result->price);?></p>
					<hr class="line-separator">
					<form id="aux_form" name="aux_form"></form>

					<!-- INFORMATION LAYOUT -->
					<div class="information-layout">
						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Format:</p>
							<p><?php echo htmlentities($result->format);?></p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Chapters:</p>
							<p><?php echo htmlentities($result->chapters);?></p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Pages:</p>
							<p><?php echo htmlentities($result->pages);?></p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Attributes:</p>
							<p><?php echo htmlentities($result->attribute);?></p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Study Level:</p>
							<p><?php echo htmlentities($result->studylevel);?></p>
						</div>
						
					</div>
					
					<a href="payment.php?topicid=<?php echo htmlentities($result->pid);?>" class="button mid dark spaced"><span class="primary">Pay Now!</span></a>
					
					
					<div class="clearfix"></div>
				</div>
				<!-- /SIDEBAR ITEM -->
					
					
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-items">
					<h4>Department Categories</h4>
					
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
					
					
					
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-bio">
					<h4>Follow Us on Social Media</h4>
					<hr class="line-separator">
					
					<!-- SHARE LINKS -->
					<ul class="share-links">
						<li><a href="#" class="fb"></a></li>
						<li><a href="#" class="twt"></a></li>
						
					</ul>
					<!-- /SHARE LINKS -->
					<a href="#" class="button mid dark spaced"> <span class="primary">Share</span></a>
					
				</div>
				<!-- /SIDEBAR ITEM -->

				

				

				
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content left">
				<!-- POST -->
				<article class="post">
					

					<hr class="line-separator">

					<!-- POST CONTENT -->
					<div class="post-content">
						<!-- POST PARAGRAPH -->
						<div class="post-paragraph">
						
							<h3 class="post-title">Topic:    <?php echo htmlentities($result->topic);?></h3>
							
						</div>
						<!-- /POST PARAGRAPH -->

						<!-- POST PARAGRAPH -->
						<div class="post-paragraph">
							<h3 class="post-title small">PAYMENT OPTION : BANK DEPOSIT/TRANSFER PAYMENTS</h3>
							 
						</div>
						
						<!-- COMMENTS -->
						<div class="comment-list">
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/gtb.png" alt="gtbank" >
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Account Name: <b>Seph Multiserver System</b><br>
							 Account Number:<b>(0254856544) NGN, (0254856568) USD</b><br>
							 Account Type: <b>Current</b><br>
							 Amount: <b>&#x20A6;<?php echo htmlentities($result->price);?></b></p>
									
								</div>
							</div>
							<!-- /COMMENT -->

							<!-- LINE SEPARATOR --
							<hr class="line-separator">
							<!-- /LINE SEPARATOR -->

							
						</div>
						<!-- /COMMENTS -->
						<div class="clearfix"></div>
						<div class="post-paragraph">
							<h3 class="post-title small">STEPS TO FOLLOW AFTER PAYMENT</h3>
							 
						
						
                           
                           <p>After payment, send the payment details stated below to 09096103352 or send an e-mail containing the payment details stated below to hello@schoolprojecthub.com
						   <!-- POST ITEM LIST -->
							<ul class="post-item-list">
								<li>
									<p class="bullet-icon">1.</p>
									<p>Payee's Name (Name of the person that made the payment)</p>
								</li>
								<li>
									<p class="bullet-icon">2.</p>
									<p>Your Phone Number</p>
								</li>
								<li>
									<p class="bullet-icon">3.</p>
									<p>A functional E-mail Address </p>
								</li>
								<li>
									<p class="bullet-icon">4.</p>
									<p>ATM location (for payments made from an ATM channel)</p>
								</li>
								<li>
									<p class="bullet-icon">5.</p>
									<p>Payment Bank; bank used in making the payment (for ATM Payments and Bank Branch Payments)</p>
								</li>
								
								<li>
									<p class="bullet-icon">6.</p>
									<p>Amount Paid</p>
								</li>
								<li>
									<p class="bullet-icon">7.</p>
									<p>The SchoolProjectHub Project Paid for</p>
								</li>
							</ul>
							<!-- POST ITEM LIST -->
		  
		   <!-- POST PARAGRAPH -->
						
		   </div>
						<!-- /POST PARAGRAPH -->
						<?php }} ?>
						
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

				<!-- POST TAB -->
				<div class="post-tab">
					<!-- TAB HEADER -->
					<div class="tab-header primary">
						<!-- TAB ITEM --
						<div class="tab-item selected">
							<p class="text-header">Comments (35)</p>
						</div>
						<!-- /TAB ITEM -->

						<!-- TAB ITEM -->
						<div class="tab-item selected">
							<p class="text-header ">Students Review</p>
						</div>
						<!-- /TAB ITEM -->

						<!-- TAB ITEM -->
						<div class="tab-item">
							<p class="text-header">Project FAQs</p>
						</div>
						<!-- /TAB ITEM -->
					</div>
					<!-- /TAB HEADER -->

					

					<!-- TAB CONTENT -->
					<div class="tab-content void">
						<!-- COMMENTS -->
						<div class="comment-list">
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_02.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">MeganV.</p>
									<!-- PIN -->
									<span class="pin greyed">Purchased</span>
									<!-- /PIN -->
									<p class="timestamp">5 Hours Ago</p>
									<a href="#" class="report">Report</a>
									<p>I’ve recently bought your theme and let me say it’s fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
								</div>
							</div>
							<!-- /COMMENT -->

							<!-- COMMENT REPLY -->
							<div class="comment-wrap comment-reply">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_09.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->

								<!-- COMMENT REPLY FORM -->
								<form class="comment-reply-form">
									<textarea name="treply10" placeholder="Write your comment here..."></textarea>
									<!-- CHECKBOX -->
									<input type="checkbox" id="notif10" name="notif10" checked>
									<label for="notif10">
										<span class="checkbox primary"><span></span></span>
										Receive email notifications
									</label>
									<!-- /CHECKBOX -->
									<button class="button primary">Post Comment</button>
								</form>
								<!-- /COMMENT REPLY FORM -->
							</div>
							<!-- /COMMENT REPLY -->

							
							<!-- LINE SEPARATOR -->
							<hr class="line-separator">
							<!-- /LINE SEPARATOR -->

							<!-- PAGER -->
							<div class="pager primary">
								<div class="pager-item"><p>1</p></div>
								<div class="pager-item active"><p>2</p></div>
								<div class="pager-item"><p>3</p></div>
								<div class="pager-item"><p>...</p></div>
								<div class="pager-item"><p>17</p></div>
							</div>
							<!-- /PAGER -->

							<div class="clearfix"></div>

							<!-- LINE SEPARATOR -->
							<hr class="line-separator">
							<!-- /LINE SEPARATOR -->

							<h3>Leave a Comment</h3>

							<!-- COMMENT REPLY -->
							<div class="comment-wrap comment-reply">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_09.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->

								<!-- COMMENT REPLY FORM -->
								<form class="comment-reply-form" name="chngpwd" method="post">
									<textarea name="comment" placeholder="Write your comment here..."></textarea>
									<button type="submit" name="add" class="button primary" >Post Comment</button>
								</form>
								<!-- /COMMENT REPLY FORM -->
							</div>
							<!-- /COMMENT REPLY -->
						</div>
						<!-- /COMMENTS -->
					</div>
					<!-- /TAB CONTENT -->

					<!-- TAB CONTENT -->
					<div class="tab-content">
						<!-- ITEM-FAQ -->
						<div class="accordion item-faq primary">
							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">How Do I Choose a Project Topic?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>Choosing a project research topic has been one of the major challenges for final year student in tertiary institution. However the following guide line will be of assistance to students.</p>
									
							<!-- POST ITEM LIST -->
							<ul class="post-item-list">
								<li>
									<p class="bullet-icon">1.  Brainstorm within a particular field of idea and write down possible challenges.</p>
									
								</li>
								<li>
									<p class="bullet-icon">2.  Study other materials that are much related to your ideas and their background information.</p>
								
								</li>
								<li>
									<p class="bullet-icon">3.  Choose a topic that you understand and avoid big vocabulary.</p>
									
								</li>
								<li>
									<p class="bullet-icon">4.  Define your idea as a focused project research topic.</p>
									
								</li>
								<li>
									<p class="bullet-icon">5.  Be certain of your research materials and be flexible.</p>
									
								</li>
								
								<li>
									<p class="bullet-icon">6.  Make sure you study and research more about on your project topic.</p>
									
								</li>
								<li>
									<p class="bullet-icon">7.   Come up with a thesis statement.</p>
									<p></p>
								</li>
								<li>
									<p class="bullet-icon">8.  Avoid plagiarism.</p>
								
								</li>
							</ul>
							<!-- POST ITEM LIST -->
								</div>
							</div>
							<!-- /ACCORDION ITEM -->

							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">How Do I Get The Complete Research Material After I make payment?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>After payment, send depositors name, transaction ID (for online payments), bank name, PHONE NUMBER and PROJECT TOPIC and PROJECT CODE to 09096103352 or 07086297862 or Email: info@schoolprojecthub.com, you will get the complete project materials through your email immediately  payment is confirmed by us. This process typically takes less than an hour to complete.</p>
								</div>
							</div>
							<!-- /ACCORDION ITEM -->

							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">How can I write my project abstract correctly?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>Aside writing your abstract following the above guideline, here are other mechanical notes you need to take.</p>
									
							<!-- POST ITEM LIST -->
							<ul class="post-item-list">
								<li>
									<p class="bullet-icon">1.  Start by introducing the actual issue your research seeks to understudy in simple or compound sentence.</p>
									
								</li>
								<li>
									<p class="bullet-icon">2.  The next sentence or two should explain how you set out to accomplish this ( the research methods, sample techniques, instrument for data gathering, population of study, sample size and the likes).</p>
								
								</li>
								<li>
									<p class="bullet-icon">3.  State clearly the research outcome in one, two or three sentences ( a generalized statement is often required).</p>
									
								</li>
								<li>
									<p class="bullet-icon">4.  State in one or two sentences, the recommendations you ‘did like to give.</p>
									
								</li>
								<li>
									<p class="bullet-icon">5.  Abstracts are often presented in ‘times new roman’ font except otherwise stated.</p>
									
								</li>
								
								<li>
									<p class="bullet-icon">6.  No spacing except otherwise stated.</p>
									
								</li>
								<li>
									<p class="bullet-icon">7.  Use Times New Roman, Font-size = ‘12’  Also note that is One paragraph</p>
									<p></p>
								</li>
								<li>
									<p class="bullet-icon">8.  No citation or quote.</p>
								
								</li>
							</ul>
							<!-- POST ITEM LIST -->
								</div>
							</div>
							<!-- /ACCORDION ITEM -->

							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">How do I decide the best area to choose my final year project topic from?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>You have your “Achilles heel” in your field of study, so do you have your ‘selling point’. Now in choosing your final year project topic, never choose from your weak areas; you will certainly fumble. Choose from your favorite area and by the way, some of these nuggets can be helpful too;</p>
									
							<!-- POST ITEM LIST -->
							<ul class="post-item-list">
								<li>
									<p class="bullet-icon">1.  Check your grades again and know the areas you are competent enough.</p>
									
								</li>
								<li>
									<p class="bullet-icon">2.  Question your personal capabilities as it relates to your field of study.</p>
								
								</li>
								<li>
									<p class="bullet-icon">3.  What career path do you wish to tour? </p>
									
								</li>
								
							</ul>
							
							<p>By answering these questions to yourself, the picture of your best area becomes clearer making it a good and easy start.</p>
							<!-- POST ITEM LIST -->
								</div>
							</div>
							<!-- /ACCORDION ITEM -->

							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">I just got my project topic approved, how do I start writing?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>Once your final year project topic is approved, the first thing you are expected to do is to; Start with the introduction: Introducing your research idea requires you to give a comprehensive and elaborate overview of the idea, issue, situation or need that has prompted your research. This implies giving a background history of how it all started, including quotes of the person’s involved or one that agrees with your argument. When that is done, you set the ball rolling by giving specific reasons and what you want to accomplish at the end of the research.</p>
									<h4>Follow these steps</h4>
									<!-- POST ITEM LIST -->
							<ul class="post-item-list">
								<li>
									<p class="bullet-icon">1. Background of the study (comprehensive overview).</p>
									
								</li>
								<li>
									<p class="bullet-icon">2.  Statement of the problem (stating the specific reason you chose to research on the topic you have chosen).</p>
								
								</li>
								<li>
									<p class="bullet-icon">3.  Objectives of the study (specific goals you want to accomplish at the end of the research). </p>
									
								</li>
								<li>
									<p class="bullet-icon">4. Research questions (turning your objectives into interrogative forms). </p>
									
								</li>
								<li>
									<p class="bullet-icon">5. Definition of terms (defining the major terms or words you will use consistently throughout the research, the way it will be applied in the research context). </p>
									
								</li>
								
							</ul>
								<p>By the time you are done with this, you would have almost rounded off your project chapter one.</p>
								</div>
							</div>
							<!-- /ACCORDION ITEM -->
							
							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">What are the sources of research problems?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>Here is mostly how research problems are coined; only a handful of research problems are entirely new, the rest ate either a rehash of what has already existed or an excerpt from it.</p>
									
									<!-- POST ITEM LIST -->
							<ul class="post-item-list">
								<li>
									<p class="bullet-icon">1. Recommendations for further research (often stated at the end of a previous research).</p>
									
								</li>
								<li>
									<p class="bullet-icon">2.  An enquiry into the causes and effects of reoccurring events (often bad ones).</p>
								
								</li>
								<li>
									<p class="bullet-icon">3.  Seeking to find solution to an existing problem. </p>
									
								</li>
								<li>
									<p class="bullet-icon">4. Seeking to enquire into the pattern of occurrence of events. </p>
									
								</li>
								
								
							</ul>
								
								</div>
							</div>
							<!-- /ACCORDION ITEM -->
							
							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">How can i trust this site?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									
									<p>We are proudly Nigerians, and are well aware of fraudulent activities that have been happening on the internet. It is regrettable, but hopefully declining. However, we wish to reinstate to our esteemed clients that we are genuine and duly registered with the Corporate Affairs Commission of the republic of Nigeria. Remember, fraudulent sites can NEVER post bank accounts which contains personal information. Free chapter 1 is always given on the site to prove to you that we got the material. If you are unable to view the free chapters 1 send an email to info@schoolprojecthub.com with the subject head "FREE CHAPTER 1' plus the topic. You will get a free chapter 1 within an hour. You can also check out what our happy clients have to say</p>
								
								</div>
							</div>
							<!-- /ACCORDION ITEM -->
							
							
							<!-- ACCORDION ITEM -->
							<div class="accordion-item">
								<h6 class="accordion-item-header">I have a fresh Topic that is not on your site. How do I go about it?</h6>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
								<div class="accordion-item-content">
									<p>We have got seasoned writers with years of experience in most departments. If you have a fresh topic, just click here to fill the form and one of our writers will contact you shortly.</p>
									
								</div>
							</div>
							<!-- /ACCORDION ITEM -->
							
							
						</div>
						<!-- /ITEM-FAQ -->
					</div>
					<!-- /TAB CONTENT -->
				</div>
				<!-- /POST TAB -->
			
			<!-- CONTENT -->
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

<!-- SVG CHECK -->
<svg style="display: none;">
	<symbol id="svg-check" viewBox="0 0 15 12" preserveAspectRatio="xMinYMin meet">
		<polygon points="12.45,0.344 5.39,7.404 2.562,4.575 0.429,6.708 3.257,9.536 3.257,9.536 
			5.379,11.657 14.571,2.465 "/>
	</symbol>
</svg>
<!-- /SVG CHECK -->

<!-- jQuery -->
<script src="js/vendor/jquery-3.1.0.min.js"></script>
<!-- Tooltipster -->
<script src="js/vendor/jquery.tooltipster.min.js"></script>
<!-- ImgLiquid -->
<script src="js/vendor/imgLiquid-min.js"></script>
<!-- XM Tab -->
<script src="js/vendor/jquery.xmtab.min.js"></script>
<!-- Tweet -->
<script src="js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- Side Menu -->
<script src="js/side-menu.js"></script>
<!-- Liquid -->
<script src="js/liquid.js"></script>
<!-- Checkbox Link -->
<script src="js/checkbox-link.js"></script>
<!-- Image Slides -->
<script src="js/image-slides.js"></script>
<!-- Post Tab -->
<script src="js/post-tab.js"></script>
<!-- XM Accordion -->
<script src="js/vendor/jquery.xmaccordion.min.js"></script>
<!-- XM Pie Chart -->
<script src="js/vendor/jquery.xmpiechart.min.js"></script>
<!-- Item V1 -->
<script src="js/item-v1.js"></script>
<!-- Tooltip -->
<script src="js/tooltip.js"></script>
<!-- User Quickview Dropdown -->
<script src="js/user-board.js"></script>
<!-- Footer -->
<script src="js/footer.js"></script>
</body>


</html>