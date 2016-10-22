<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="" />
		<meta name="Gestured" content="" />
		<meta name="generator" content="WordPress 4.0" />
		<meta name="viewport" content="width=device-width">
		
		<title>Auction it yourself</title>
		
		<link rel="shortcut icon" href="http://learn.jquery.com/jquery-wp-content/themes/learn.jquery.com/i/favicon.ico">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jquery/css/base.css?v=1">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jqueryui.com/style.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		
		<style type="text/css">
			#submitButton{
				background-color: #474719 !important;
			}
		</style>

		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/modernizr.custom.2.6.2.min.js"></script>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
		<script>window.jQuery || document.write(unescape('%3Cscript src="//learn.jquery.com/jquery-wp-content/themes/jquery/js/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/plugins.js"></script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/main.js"></script>
		<script src="http://use.typekit.net/wde1aof.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>	
	</head>
	<body class="jquery-learn home page page-id-17 page-template page-template-home-php page-slug-index single-author singular">
		<?php
			error_reporting(0);
			$mb = 0;
			if($id>0)
				$mb = $id;
		?>
		<form action="computer_validate.php" method="post">
			<input type="hidden" name="mbid" value="<?php echo $mb; ?>"/>
			<div class="row">
				<div class="three columns">
					<p><label for="compbrand">Brand:</label>
				</div>
				<div class="nine columns">
					<input type="text" name="compbrand" id="compbrand" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="os">OS:</label></p>
				</div>
				<div class="nine columns">
					<input type="text" name="os" id="os" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="color">Color:</label></p>
				</div>
				<div class="nine columns">
					<input type="text" name="compcolor" id="color" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="ram">RAM:</label></p>
				</div>
				<div class="nine columns">
					<input type="text" name="ram" id="ram" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="processor">Processor:</label>
				</div>
				<div class="nine columns">
					<input type="text" name="processor" id="processor" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="hdd">Hard Disk:</label>
				</div>
				<div class="nine columns">
					<input type="text" name="hdd" id="hdd" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="gc">Graphic card:</label>
				</div>
				<div class="nine columns">
					<input type="text" name="gc" id="gc" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="compbase">Base Price:</label>
				</div>
				<div class="nine columns">
					<input type="text" name="compbase" id="compbase" />
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p><label for="comments" style="vertical-align: top;">Comments:</label>
				</div>
				<div class="nine columns">
					<textarea name="comments" rows="10" cols="30" id="comments"></textarea>
				</div>
			</div>
			<input type="submit" name="submit" value="submit" id="submitButton" />
		</form>
	</body>
</html>