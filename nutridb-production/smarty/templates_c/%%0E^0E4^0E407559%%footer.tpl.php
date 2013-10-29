<?php /* Smarty version 2.6.18, created on 2012-12-31 16:11:35
         compiled from footer.tpl */ ?>

<div id='footer'>
	<div id='footerLinks'>
		<a href='/'>Search</a> |
		<a href='faq'>FAQ</a> |
		<a href='terms.html' onclick='openInNewWindow("terms.html"); return false;'>Terms &amp; Conditions</a>
	</div>
</div>

<?php echo '
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://analytics.nutridb.org/" : "http://analytics.nutridb.org/");
document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://analytics.nutridb.org/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
'; ?>


</body>

</html>