<?php
// Turn on PHP Error Reporting
#ini_set("display_errors","2");
#ERROR_REPORTING(E_ALL);

// get variables from query
$day = (isset($_REQUEST["day"]))?$_REQUEST["day"]:"";

// Check day is a number
if (preg_match("/^[0-9]+$/", $day)) {
	$d = $day-1;
} else {
	Header("Location: /");
}

// See if the day visited is also the advent door
date_default_timezone_set('Europe/London');
$now = time();
$start = date("U", mktime(7, 45, 0, 12, $day, 2011));
$end = $start + (24*3600) + 1;

if($now<$end && $now>$start) {
	$today = 1;
} else {
	$today = 0;
}

// Check that day specified is not in the future
if ($start>$now) {
	Header("Location: /nopeeking.php");
}


// Bring in all the font data for each day
include_once("1.php");
include_once("2.php");
include_once("3.php");
include_once("4.php");
include_once("5.php");
include_once("6.php");
include_once("7.php");
include_once("8.php");
include_once("9.php");
include_once("10.php");
include_once("11.php");
include_once("12.php");
include_once("13.php");
include_once("14.php");
include_once("15.php");
include_once("16.php");
include_once("17.php");
include_once("18.php");
include_once("19.php");
include_once("20.php");
include_once("21.php");
include_once("22.php");
include_once("23.php");
include_once("24.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $day; ?> December 2011 | Adfont Calendar 2011 &middot; A free font every day from Fontdeck</title>
<link rel="stylesheet" href="http://f.fontdeck.com/s/css/9ksXHOoiTZWAB3ugYP2wrsRFbf4/<?php echo $_SERVER["HTTP_HOST"]; ?>/2332.css" type="text/css" />
<link href="/css/core.css" rel="stylesheet" />
</head>
<body class="day">

<div class="popup">

<link rel="stylesheet" href="http://f.fontdeck.com/s/css/<?php echo $fd_href_crypto[$d]; ?>/<?php echo $_SERVER["HTTP_HOST"]; ?>/<?php echo $fd_project_id[$d]; ?>.css" type="text/css" />
<style type="text/css">
.popup h1, .popup .sampler {
	<?php echo $fd_css[$d]; ?>
}
</style>

<div class="close"><a href="/" class="close" title="close"><img src="/i/back.png" alt="close" /></a></div>
<div class="main">
<h1><?php echo $typeface[$d]; ?></h1>

<a href="<?php echo $typeface_url[$d]; ?>" id="fdlogo"><img src="/i/fontdeck.png" alt="View typeface on Fontdeck" title="View typeface on Fontdeck" /></a>

<div class="info">

<dl>
<dt>Foundry</dt>
<dd><?php echo $foundry[$d]; ?></dd>
<dt>Designer<?php echo $designer_plural[$d]; ?></dt>
<dd><?php echo $designer[$d]; ?></dd>
</dl>

<p><?php echo $typeface_description[$d]; ?></p>

<?php if($today) { ?>

<div class="free">

<h2>Free from Fontdeck</h2>
<p>For one day only, get this webfont for&nbsp;free:</p>

<div class="font"><p><a href="<?php echo $font_url[$d]; ?>"><?php echo $font[$d]; ?></a></p></div>

<p>If your website is still in Limited mode, then click <strong>Upgrade to Live</strong> in your Fontdeck settings to make use of the free font offer.</p>

</div> <!-- /.free -->

<?php } else { ?>

<div class="free">

<div class="font"><p><a href="<?php echo $typeface_url[$d]; ?>"><?php echo $typeface[$d]; ?></a></p></div>

</div> <!-- /.free -->

<p><small>Free webfont offer ended <?php echo $day; ?> December 2011.</small></p>

<?php } ?>

</div> <!-- /.info -->

<div class="sampler">
<?php echo $sampler[$d]; ?>
</div>

<?php if($today) { ?>
<small>* <?php echo $day; ?> December 2011 from 7.45am <abbr class="smallcaps">GMT</abbr> for 24 hours. Free subscription applies to websites with &lt;&nbsp;1&nbsp;million page views per&nbsp;month.</small>
<?php } ?>

</div> <!-- /.shelf -->
</div> <!-- /#popup -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-132181-12']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
