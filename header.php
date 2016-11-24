<?php
if ($operator == '') {
	$title = "Chris Mayther Band";
	$bodyID = "cmband";
}else{
	$title = ucfirst($operator);
	$bodyID = strtolower($operator);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title; ?></title>
<link href="cmayther.ico" type="image/x-icon" rel="shortcut icon">
<link href="cmayther.ico" type="image/x-icon" rel="icon">
<link href="cmband.css" type="text/css" rel="stylesheet" media="all">
<?php
if ($operator == "pictures") {
	echo '<link href="lightbox.css" type="text/css" rel="stylesheet" media="screen">
<script src="prototype.js" type="text/javascript"></script>
<script src="scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="lightbox.js" type="text/javascript"></script>';
}
?>
<script type="text/javascript">
function MouseOver(imgName) {
	document[imgName].src = imgName + "-hover.jpg";
}
function MouseOut(imgName) {
	document[imgName].src = imgName + ".jpg";
}

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3026948-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head><body id="<?php echo $bodyID; ?>">

<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" height="100%"><tr>
<td colspan="2" align="center" valign="top"><a href="index.php"><img src="cmb-title.gif" border="0" alt="[Chris Mayther Band]"></a></td>
</tr><tr>
<td width="18%" align="center" id="cmbandmenu"><br />
	<p><a href="bio.php" onMouseOver="MouseOver('bio')" onMouseOut="MouseOut('bio')">
		<img src="bio-hover.jpg" class="invisible" />
		<img src="bio.jpg" border="0" alt="[Bio]" name="bio" />
	</a></p>
	<p><a href="quotes.php" onMouseOver="MouseOver('quotes')" onMouseOut="MouseOut('quotes')">
		<img src="quotes-hover.jpg" class="invisible" />
		<img src="quotes.jpg" border="0" alt="[Quotes]" name="quotes" />
	</a></p>
	<p><a href="music.php" onMouseOver="MouseOver('music')" onMouseOut="MouseOut('music')">
		<img src="music-hover.jpg" class="invisible" />
		<img src="music.jpg" border="0" alt="[Music]" name="music" />
	</a></p>
	<p><a href="pictures.php" onMouseOver="MouseOver('pictures')" onMouseOut="MouseOut('pictures')">
		<img src="pictures-hover.jpg" class="invisible" />
		<img src="pictures.jpg" alt="[Pictures]" border="0" name="pictures" />
	</a></p>
	<?php /*
	<p><a href="calendar.php" onMouseOver="MouseOver('calendar')" onMouseOut="MouseOut('calendar')">
		<img src="calendar-hover.jpg" class="invisible" />
		<img src="calendar.jpg" alt="[Calendar]" border="0" name="calendar" />
	</a></p>
	<p><a href="booking.php" onMouseOver="MouseOver('booking')" onMouseOut="MouseOut('booking')">
		<img src="booking-hover.jpg" class="invisible" />
		<img src="booking.jpg" alt="[Booking]" border="0" name="booking" />
	</a></p>
	<p><a href="purchase.php" onMouseOver="MouseOver('purchase')" onMouseOut="MouseOut('purchase')">
		<img src="purchase-hover.jpg" class="invisible" />
		<img src="purchase.jpg" alt="[Purchase]" border="0" name="purchase" />
	</a></p>
	*/ ?>
</td>
