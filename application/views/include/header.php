<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Fidelity" content="">
    <title>CMS - Fidelity</title>
	
	

    <!-- fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,300italic,400italic,600italic,700,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">    
	<link rel="stylesheet" href="<?php echo base_url("assets/stylesheets/lib/spectrum.css"); ?>" />	
	<link rel="stylesheet" href="<?php echo base_url("assets/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"); ?>" />
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/stylesheets/app.css"); ?>" />
	
	<!-- DATATABLES -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
	

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery/dist/ie10-viewport-bug-workaround.js')?>"></script>

</head>
<body>

<div id="sidemenu">
    <div class="logoholder">
        <a href=""> logo here</a>
    </div>
    <div id="menu">
        <ul>
            <li class="das"><a href="<?php echo base_url("dashboard"); ?>"><i class="icon"></i><span>DASHBOARD</span></a></li>
            <li class="mer"><a href="<?php echo base_url("merchant"); ?>"><i class="icon"></i><span>MERCHANT</span></a></li>
            <li class="usr"><a href="<?php echo base_url("users"); ?>"><i class="icon"></i><span>USERS</span></a></li>            
            <li class="man"><a href="<?php echo base_url("management"); ?>"><i class="icon"></i><span>MANAGEMENT</span></a></li>
            <li class="add"><a href="<?php echo base_url("addons"); ?>"><i class="icon"></i><span>ADD-ONS</span></a></li>
            <li class="des"><a href="<?php echo base_url("design"); ?>"><i class="icon"></i><span>DESIGN</span></a></li>
            <li class="pro"><a href="<?php echo base_url("promos"); ?>"><i class="icon"></i><span>PROMOS</span></a></li>
            <li class="ach"><a href="<?php echo base_url("achievementunlock"); ?>"><i class="icon"></i><span>ACHIVEMENT UNLOCK</span></a></li>
            <li class="rep"><a href="<?php echo base_url("reports"); ?>"><i class="icon"></i><span>REPORTS</span></a></li>
            <li class="tra"><a href="<?php echo base_url("transactionhistory"); ?>"><i class="icon"></i><span>TRANSACTION HISTORY</span></a></li>
            <li class="hel"><a href="<?php echo base_url("help"); ?>"><i class="icon"></i><span>HELP</span></a></li>
			<li class="out"><a href="#"><i class="icon"></i><span>LOGOUT</span></a></li>

        </ul>
    </div>
</div>