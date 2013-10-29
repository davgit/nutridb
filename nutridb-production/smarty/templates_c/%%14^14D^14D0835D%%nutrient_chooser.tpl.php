<?php /* Smarty version 2.6.18, created on 2012-12-05 16:47:22
         compiled from nutrient_chooser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'nutrient_chooser.tpl', 26, false),)), $this); ?>
<?php echo $this->_tpl_vars['header']; ?>

<div id='columnContainer'>

	<div id='middleColumn'>
		<div id='middleData'>
			<h3 style='text-align: center;'>Nutrient Chooser</h3>
			<p style='text-align: justify;'>
				There is fairly bewildering array of nutrient data available for most of the foods
				in this database.  In most cases, you may only be concerned with a select few of
				these nutrients.  This form allows you to select which nutrients will be displayed
				in your food and recipe summaries.  Don't be afraid to uncheck too may options below.
				With every summary you will have the option to view information for all nutrients,
				including the ones you have selected to hide here.  Checked nutrients will be displayed
				in summaries.  Unchecked nutrients will be hidden.
			</p>
			<a href='javascript: checkAll("nutrients[]");'>Check all</a> |
			<a href='javascript: uncheckAll("nutrients[]");'>Uncheck all</a>
			<div style='width: 100%;'>
				<form action='<?php echo $this->_tpl_vars['_SERVER'][$this->_sections['PHP_SELF']['index']]; ?>
' method='post' id='nutrientChooser'>
					<table class='standardTable'>
						<tr class='tableTitleRow'>
							<th>Show/Hide</th>
							<th>Nutrient Description</th>
						</tr>
<?php $_from = $this->_tpl_vars['nutrients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nutrient']):
?>
						<tr class='<?php echo smarty_function_cycle(array('values' => "bgDark,bgLight"), $this);?>
'>
	<?php if (! empty ( $this->_tpl_vars['nutrient']['myNutrient'] )): ?>
							<td style='text-align: center;'><input type='checkbox' name='nutrients[]' value='<?php echo $this->_tpl_vars['nutrient']['nutr_no']; ?>
' checked='checked' /></td>
	<?php else: ?>
							<td style='text-align: center;'><input type='checkbox' name='nutrients[]' value='<?php echo $this->_tpl_vars['nutrient']['nutr_no']; ?>
' /></td>
	<?php endif; ?>
							<td><?php echo $this->_tpl_vars['nutrient']['nutrdesc']; ?>
</td>
						</tr>
<?php endforeach; endif; unset($_from); ?>
					</table>
					<br />
					<input type='submit' name='setNutrients' value='Save Changes'>
				</form>
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
