<?php 
include('core/core.php');
if(!isset($_GET['page'])){
	//header('Location: index.php');
	}

if(isset($_POST['en'])){
		
		$_SESSION['lang'] = NULL;
		unset($_SESSION['lang']);
		$_SESSION['lang']='en';
		
	} 
	elseif(isset($_POST['fa'])){
		
		$_SESSION['lang'] = NULL;
		unset($_SESSION['lang']);
		$_SESSION['lang']='fa';
	}

//error_reporting(E_ALL);
//ini_set('display_errors','1');
if(isset($_SESSION['lang']) && $_SESSION['lang']=='fa'){
	require('lang/fa.php');
	}elseif(isset($_SESSION['lang']) && $_SESSION['lang']=='en'){
		require('lang/en.php');
		}
		
	if(isset($_POST['en'])){
		$_SESSION['lang']='en';
		header('Location: main.php');
	} 
	if(isset($_POST['fa'])){
		$_SESSION['lang']='fa';
		header('Location: index.php?page=main');
	} 
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>TAV</title>
		<meta name="description" content="Text Opening Sequence with CSS Animations" />
		<meta name="keywords" content="text, opening sequence, opening credits, css animations, typography, lettering.js" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
	</head>
	<body style="background-color: #000">
		<div class="container">	

			<div class="os-phrases" id="os-phrases">
            	<div align="center"><img src="images/welcome.png" width="200"></div>
				<h2>sustainable</h2>
				<h2>development</h2>
                <form method="post" class="language">
                <p>
                
                <button id="english" class="btn-link" name="en">ENGLISH</button>
				<button name="fa">PERSIAN</button>
                </p>
                </form>
                
				
			
                
			</div>
		</div><!-- /container -->
		<script src="js/jquery.js"></script>
	</body>
</html>