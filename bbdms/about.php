<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | About Us </title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<link rel="stylesheet" href="css/fontawesome-all.css">
	

	
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	

</head>

<body>
	<?php include('includes/header.php');?>

	
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
	
	</div>

	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div>
	

	
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<?php 
$pagetype="aboutus";
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
			<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title"><?php   echo htmlentities($result->PageName); ?></h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
			</div>
			<p class="aboutpara text-center mx-auto"><?php  echo $result->detail; ?></p>
<?php } } ?>
			
		</div>
	</section>
	



	<?php include('includes/footer.php');?>


	
	<script src="js/jquery-2.2.3.min.js"></script>
	
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	
	<script src="js/fixed-nav.js"></script>
	


	<script src="js/SmoothScroll.min.js"></script>

	<script src="js/move-top.js"></script>

	<script src="js/easing.js"></script>

	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>


</body>

</html>