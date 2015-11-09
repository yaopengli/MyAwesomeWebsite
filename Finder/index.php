<?php
	$page = "home";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>My awesome website</title>
		<meta charset="utf-8" />
		<!-- <meta name="viewport" content="width=device-width; height=device-heigh; init-scale=1.0" /> -->
		<link rel="stylesheet" href="style/bootstrap.css">
		<link rel="stylesheet" href="style/main.css">
		<link rel="stylesheet" href="style/header.css">
		<script src="js/jquery-2.1.1.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<!-- Header -->
		<header> 
			<?php require("pages/header_site_wide.php"); ?>
			
			<!-- Navigation Bar -->
			<?php require("pages/header_nav.php"); ?>
			<!-- End Navigation Bar -->
		</header> 
		<!-- End Header -->
		
		<!-- Main content -->
		<main class="row">
			<?php
				if (!isset($_GET["page"])){
					include "pages/home.php";
				}
				else{
					switch ($_GET["page"]){
						case "home":
							include "pages/home.php";
							break;
						case "members":
							include "pages/members.php";
							break;
						case "photos":
							include "pages/photos.php";
							break;
						case "pages":
							include "pages/pages.php";
							break;
						case "discussions":
							include "pages/discussions.php";
							break;
						case "more":
							include "pages/more.php";
							break;
						default:
							include "pages/home.php";
							break;
					}
				}
			?>
		</main>
		
		<!-- End Main content -->
		
		<script>
			/**
			 * Function: calcHeight()
			 * Description: Calculate the height of two div tag in main tag, and set equal height
			 *              to the larger one
			 */
			var scaleToEqualHeight = function(){
				var mainContentHeight = $(".main-content").height();
				var asideHeight = $(".side-bar").height();
				
				if (mainContentHeight > asideHeight){
					$(".side-bar").css("height", mainContentHeight);
				}
				else{
					$(".main-content").css("height", asideHeight);
				}
				
			};
		
			window.onload = function(){
				// Calculate Height and scale both div to the same height in main tag
				scaleToEqualHeight();
			};
		</script>
	</body>
</html>