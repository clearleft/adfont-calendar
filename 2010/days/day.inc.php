<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $day; ?> December 2010 | Adfont Calendar 2010 &middot; A free font every day from Fontdeck</title>
<link rel="stylesheet" href="http://f.fontdeck.com/s/css/9ksXHOoiTZWAB3ugYP2wrsRFbf4/<?php echo $_SERVER["HTTP_HOST"]; ?>/2332.css" type="text/css" />
<link href="/css/core.css" rel="stylesheet" />
</head>
<body class="day">

<div class="popup">

<link rel="stylesheet" href="http://f.fontdeck.com/s/css/<?php echo $fd_href_crypto; ?>/<?php echo $_SERVER["HTTP_HOST"]; ?>/<?php echo $fd_project_id; ?>.css" type="text/css" />
<style type="text/css">
.popup h1, .popup .sampler {
	<?php echo $fd_css; ?>
}
</style>

<div class="close"><a href="/" class="close" title="close"><img src="/i/back.png" alt="close" /></a></div>
<div class="main">

<h1><?php echo $typeface; ?></h1>

<a href="<?php echo $typeface_url; ?>" id="fdlogo"><img src="/i/fontdeck.png" alt="View typeface on Fontdeck" title="View typeface on Fontdeck" /></a>

<div class="info">

<dl>
<dt>Foundry</dt>
<dd><?php echo $foundry; ?></dd>
<dt>Designer<?php echo $designer_plural; ?></dt>
<dd><?php echo $designer; ?></dd>
</dl>

<p><?php echo $typeface_description; ?></p>

<?php if($today) { ?>

<div class="free">

<h2>Free from Fontdeck</h2>
<p>For one day only, get this webfont for&nbsp;free:</p>

<div class="font"><p><a href="<?php echo $font_url; ?>"><?php echo $font; ?></a></p></div>

<p>If your website is still in Limited mode, then click <strong>Upgrade to Live</strong> in your Fontdeck settings to make use of the free font offer.</p>

</div> <!-- /.free -->

<?php } else { ?>

<div class="free">

<div class="font"><p><a href="<?php echo $typeface_url; ?>"><?php echo $typeface; ?></a></p></div>

</div> <!-- /.free -->

<p><small>Free webfont offer ended <?php echo $day; ?> December 2010.</small></p>

<?php } ?>

</div> <!-- /.info -->

<div class="sampler">
<?php echo $sampler; ?>
</div>

<?php if($today) { ?>
<small>* <?php echo $day; ?> December 2010 from 8am <abbr class="smallcaps">GMT</abbr> for 24 hours. Free subscription applies to websites with &lt;&nbsp;1&nbsp;million page views per&nbsp;month.</small>
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
