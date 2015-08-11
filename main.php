<?php session_start() ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rayweb</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsiveslides.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/responsiveslides.min.js"></script>
    <script>
    $(function () {

      $("#slider3").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 1000,
        maxwidth: 800,
        namespace: "large-btns"
      });

    });
  </script>
    
</head>
<body>

<div class="header">
	<a href="main.php" class="pull-left"><img src="images/back.png"></a>
	<ul class="nav-header">
    <li>
    	<?php if($_SESSION['lang'] == 'fa') 
				{echo "<a href='include/aboutUs.php' id='en'></a>";}
				 else {
					 echo "<a href='include/aboutUs.php' id='fa'></a>";
					 }
				 ?>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="main.php?page=aboutUs">abous us</a></li>
                <li><a href="main.php?page=rostampoor">Mr.Rostampoor</a></li>
                <li><a href="main.php?page=development">Historical Development</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contact Us</a></li>
     </ul>

</div>
<?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/home.php';
					}


?>

<div class="footer">
	<p class="designer">Design : <a href="http://rayweb.ir">Rayweb</a></p>
    <a><img src="images/39.png" class="visible-lg"></a>
</div>



<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>