<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url("dist/images/logo.png"); ?>">

    <title>Adviser-Student Records Management System</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/pure-release-0.6.0/pure-min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/design.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/styles.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/TableCSSCode.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/pure-release-0.6.0/grids-responsive.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/pure-release-0.6.0/forms-min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/jquery.dataTables.min.css"); ?>">
	<script src="<?php echo base_url("dist/jquery-2.1.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("dist/jquery.js"); ?>"></script>
	<script src="<?php echo base_url("dist/jquery.dataTables.min.js"); ?>"></script>
	<script>
		$(document).ready( function () {
			$('#table').DataTable();
		} );

		$(document).ready(function(){
			//change cursor to pointer
			$('.toggle').hover(function(){
				$(this).css( 'cursor', 'pointer' );
			});
			//set hide as default
			$($('div.initHide')).hide();
			//toggle between hide and show
			$("#hideFirstSem").click(function(){
				$("#firstsem").toggle("slow");
				$("#button").show("slow");
			});
		});
	</script>

</head>

<body>
	<div class="header">
		<div class="pure-g">
			<div class="pure-u-lg-7-8">
				<h1 class="heading">Adviser-Student Records Management System</h1>
			</div>
			<div class="pure-u-lg-1-8">
				<a href="<?php echo base_url('logout') ?>" class="pure-button button-logout">Log out</a>
			</div>
		</div>
	</div>
	<div class="logo">
		<img src="<?php echo base_url("dist/images/logo.png"); ?>" class="pure-img">
	</div>