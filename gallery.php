<?php

$links = array(
'<li><h1><a href="gallery1.php">Dojo Seminar Oct 2012</a></h1></li>',
'<li><h1><a href="gallery3.php">Dojo Class Jan 2012</a></h1></li>',
'<li><h1><a href="gallery2.php">Nationals 2010</a></h1></li>',
'<li><h1><a href="gallery4.php">Stonewall Tournament 2010</a></h1></li>',
'<li><h1><a href="gallery5.php">Sensei Seminar In India</a></h1></li>',
'<li><h1><a href="gallery6.php">Dojo 2008/2009</a></h1></li>',
'<li><h1><a href="gallery7.php">Dojo Older Photos</a></h1></li>',
'<li><h1><a href="gallery8.php">Interesting Moments From Sensei Loreths Past</a></h1></li>'
);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Winnipeg Shotokan Karate</title>
<link rel="stylesheet" type="text/css" href="shotokan.css" />
<link rel="stylesheet" type="text/css" href="shotokan2.css" />

<link media="only screen and (max-device-width: 480px)"
    href="iphone.css" type="text/css" rel="stylesheet" />

<!--[if  IE 6]>

<link rel="stylesheet" type="text/css" href="ieshotokan.css" />
<script type="text/javascript" src="supersleight.js"></script>

<![endif]-->

<!--[if IE 7]>

<link rel="stylesheet" type="text/css" href="ieshotokan7.css" />
<![endif]-->

<!--[if IE 8]>

<link rel="stylesheet" type="text/css" href="ieshotokan8.css" />
<![endif]-->




</head>

<body id="gallerypage">

  <form method="post">


<div id="wrapper"> 
		<div id="pageheader">  
		<h1>Winnipeg Shotokan Karate</h1>  
		</div>	
<div id="background"> 


<div id="title"> 
	<h1>Gallery <em> Shotokan</em> Winnipeg</h1>
	</div>

<div id="highlighted_events"><a href="training.html#events">click for upcoming events</a></div>


<!--[if lt IE 7]>
	<div class="backimage">
</div>

<![endif]-->




<div id="linklist">
	<ul id="nav">
		<li id="home"><a href="index.html">Home</a></li>
		<li id="about"><a href="about.html">About</a>

	<ul id="unsubs">	

      <li><a href="about.html#title">Shotokan <span>Winnipeg</span></a></li>
      <li><a href="about.html#history">Shotokan <span>Karate</span></a></li>

	</ul>
</li>
		<li id="training"><a href="training.html">Training</a>
	
	<ul id="subs">	
      <li><a href="training.html#dojokun">Dojo Kun</a></li>
      <li><a href="training.html#classes">Classes</a></li>
      <li><a href="training.html#kata">Kata</a></li>
      <li><a href="training.html#events">Events</a></li>
	    <li><a href="training.html#forms">Forms</a></li>

	</ul>
</li>

		<li id="contact"><a href="contact.html" >Contact</a></li>
		<li id="gallery"><a href="gallery.php" >Gallery</a></li>
		<li id="links"><a href="links.html" >Links</a></li>
	</ul>
</div>	


<div id="main">


<div class="photogal">
<?php foreach ($links as $key):?>
<?= "{$key}" ?>
<?php endforeach ?>

</div>

</div>

<div id="iskf">
<h5>Affiliated <br />International Shotokan<br />Karate Federation</h5>
</div>

<!--[if  IE 7]>

<div id="sensei">
		<h3> &nbsp; </h3>
</div>

<![endif]-->




<div id="sensei">
		<h3> &nbsp; </h3>
		
</div>



	</div>

<div id="footer">
<h5>All content copyright &copy; Dennis Kashton Design</h5>
</div>
  

</div>	
</body>
</html>
