<!DOCTYPE html>
<html lang="en" class="export">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />

	<title>Infinite Scroll &#xB7; Full page demo</title>

	<link rel="stylesheet" href="css/infinite-scroll-docs.css?5" media="screen" />

</head>
<?php
	$page = 1; 
	include "page1.php";
?>	

	<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
	<script>
		
		let elem = document.querySelector('.article-feed');
		let infScroll = new InfiniteScroll( elem, {
			// options
			path: '.pagination__next',
			append: '.article',
			status: ".scroller-status",
			hideNav: ".pagination"
		});
	</script>
</body>

</html>