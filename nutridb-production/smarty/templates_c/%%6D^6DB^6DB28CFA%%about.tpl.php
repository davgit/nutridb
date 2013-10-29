<?php /* Smarty version 2.6.18, created on 2012-12-31 16:19:42
         compiled from about.tpl */ ?>
<?php echo $this->_tpl_vars['header']; ?>

<div id='columnContainer'>

	<div id='middleColumn'>
		<div id='middleData' style='text-align: justify;'>

			<h2 style='text-align: center;'>ABOUT</h2>

			<div class='standardMargins'>
				The software that runs this site is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>.  It is released under an
				<a href="http://www.opensource.org/licenses/mit-license.php">MIT (X11)</a>
				license.  You can <a href="download">download</a> the source code and the
				database, alter it, improve it or otherwise do whatever you like with it.  If you'd
				like to help improve NutriDB, then feel free to send patches or other
				improvements.
			</div>

			<div class='standardMargins'>
				NutriDB, like pretty much every other nutrition calculator in the world, uses data from the <a href="http://www.ars.usda.gov/ba/bhnrc/ndl">U.S. Department of Agriculture, Agricultural Research Service</a>.  NutriDB currently uses USDA National Nutrient Database for Standard Reference, Release 25.
			</div>

			<div class='standardMargins'>
				NutriDB also calculates the percentage of the <a href="http://fnic.nal.usda.gov/dietary-guidance/dietary-reference-intakes">Dietary Reference Intake</a> (DRI) for nutrients for which a DRI exists. The DRIs have replaced the RDA (Recommended Daily Allowance), for people more familiar with the acronym RDA.
			</div>

		</div>
	</div>

	<div id='leftColumn'>
		<div id='leftData'>
			<?php echo $this->_tpl_vars['sidebar_left']; ?>

		</div>
	</div>

	<div id='rightColumn'>
		<div id='rightData'>
			<?php echo $this->_tpl_vars['sidebar_right']; ?>

		</div>
	</div>

</div>
<?php echo $this->_tpl_vars['footer']; ?>
 