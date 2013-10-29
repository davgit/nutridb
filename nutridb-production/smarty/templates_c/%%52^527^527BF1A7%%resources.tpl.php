<?php /* Smarty version 2.6.18, created on 2009-01-25 12:15:29
         compiled from resources.tpl */ ?>
<?php echo $this->_tpl_vars['header']; ?>

<div id='columnContainer'>

	<div id='middleColumn'>
		<div id='middleData' style='text-align: justify;'>

			<h2 style='text-align: center;'>RESOURCES</h2>

			<a name='nutritionsites' id='nutritionsites' style='position: absolute;'></a>
			<div class='standardMargins'>
				Here are a few other nutrition information sites that stand out to me.  They have a
				very complete set of tools and information.  You may find them useful.
					<ul>
						<li><a href='http://www.nutritiondata.com'>http://www.nutritiondata.com</a></li>
						<li><a href='http://www.thedailyplate.com'>http://www.thedailyplate.com</a></li>
					</ul>
			</div>

			<a name='ndl' id='ndl' style='position: absolute;'></a>
			<div class='standardMargins'>
				The USDA Nutrient Data Laboratory is where the vast majority of reliable nutrient
				data comes from, including for this site.
					<ul>
						<li>
							<a href="http://www.ars.usda.gov/ba/bhnrc/ndl">
								U.S. Department of Agriculture, Agricultural Research Service.
							</a>
						</li>
					</ul>
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
 
