<?php
	include('HeaderAndFooter/header.html');
?>

<html>
	<head>
		<title>Melodic Marketplace</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<script src="index.js"></script>
	</head>

	<body>
		
		<div class="list">
			<center>
				<br>
				<!-- SEARCH BAR -->
				<div class="search-container">
					<input type="text" id="search-input" placeholder="Search instrument...">
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
				<br>
				<!-- VARIABLES -->
				<div class="container">
					<h1>PRACTICE MAKES BETTER</h1>
					<h4>Find you musical buddy!</h4>
					<!--  -->
					<div class="row header">
						<span class="cell" id="art">Instruments</span>
						<span class="cell">Name</span>
						<span class="cell">Types</span>
						<span class="cell">Price</span>
					</div>
					<!-- DATA COLUMNS ROWS -->
					<div id="artist-list">
					<div class="row">
						<span class="cell"><img src="" alt="Instrument Album"></span>
						<span class="cell"></span>
						<span class="cell"></span>
						<span class="cell"></span>
					</div>
				</div>
					<!-- LOADING -->
					<div id="loading" style="display: none;">
						<div class="spinner"></div>
					</div>
						<button id="loadMore">Load More</button>
					</div>
			</center>
		</div>
		<br><br>
	</body>
</html>

<?php
	include('HeaderAndFooter/footer.html');
?>