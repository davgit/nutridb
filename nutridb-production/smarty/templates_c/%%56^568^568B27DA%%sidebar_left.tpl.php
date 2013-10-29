<?php /* Smarty version 2.6.18, created on 2012-12-31 16:11:34
         compiled from sidebar_left.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sidebar_left.tpl', 6, false),)), $this); ?>
		<div><strong>Current recipe</strong>:</div>
		<div id='divCurrentMeal'>
<?php if ($this->_tpl_vars['currentMealItems']): ?>
	<?php $_from = $this->_tpl_vars['currentMealItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['currentMealItem']):
?>
			<div id='currentMealItem-<?php echo $this->_tpl_vars['key']; ?>
'>
				<a href='<?php echo $_SERVER['REQUEST_URI']; ?>
' onclick='verifyRemoveCurrentMealItem("<?php echo $this->_tpl_vars['key']; ?>
"); return false;' title='Remove: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentMealItem']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'><img src='<?php echo $this->_tpl_vars['config']->_imgUri; ?>
/remove.png' alt='(Del)' /></a>
				<a href='view_food?food=<?php echo $this->_tpl_vars['currentMealItem']['food']; ?>
&amp;weight=<?php echo $this->_tpl_vars['currentMealItem']['weight']; ?>
&amp;quantity=<?php echo $this->_tpl_vars['currentMealItem']['quantity']; ?>
&amp;description=<?php echo ((is_array($_tmp=$this->_tpl_vars['currentMealItem']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;action=viewFood' id='currentMealItemDesc-<?php echo $this->_tpl_vars['key']; ?>
' title='View this item'><?php echo ((is_array($_tmp=$this->_tpl_vars['currentMealItem']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
			</div>
	<?php endforeach; endif; unset($_from); ?>
			<div style='margin-top: 1ex;'>
				<a href='view_meal?meal=0&amp;action=getMeal' title='View current recipe'>View recipe</a> |
				<a href='<?php echo $_SERVER['REQUEST_URI']; ?>
' onclick='verifyClearCurrentMeal(); return false;' title='Remove all recipe items'>Clear recipe</a>
			</div>
<?php else: ?>
			No items in recipe.
<?php endif; ?>
		</div>
<?php if ($this->_tpl_vars['isLoggedIn']): ?>
		<div style='margin-top: 2ex;'><strong>Favorites:</strong></div>
		<div style='margin-top: 1ex;'>
	<?php if ($this->_tpl_vars['favFoods']): ?>
			<form action='view_food' method='post' id='frmFavFoods' style='margin: 0;'>
				<select name='queryString' style='width: 100%;' onchange='return submitForm("frmFavFoods");'>
					<option value=''> -- Foods -- </option>
					<option value='viewAllFoods'>[View All]</option>
		<?php $_from = $this->_tpl_vars['favFoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['favFood']):
?>
					<option value='food=<?php echo $this->_tpl_vars['favFood']['food']; ?>
&amp;weight=<?php echo $this->_tpl_vars['favFood']['weight']; ?>
&amp;quantity=<?php echo $this->_tpl_vars['favFood']['quantity']; ?>
&amp;description=<?php echo ((is_array($_tmp=$this->_tpl_vars['favFood']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;action=viewFood'><?php echo ((is_array($_tmp=$this->_tpl_vars['favFood']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
				</select>
				<input type='hidden' name='action' value='viewFood' />
			</form>
	<?php else: ?>
			* No favorite foods.<br />
	<?php endif; ?>
		</div>
		<div style='margin-top: 1ex;'>
	<?php if ($this->_tpl_vars['favMeals']): ?>
			<form action='view_meal' method='post' id='frmFavMeals' style='margin: 0;'>
				<select name='meal' style='width: 100%;' onchange='return submitForm("frmFavMeals");'>
					<option value=''> -- Recipes -- </option>
					<option value='viewAllMeals'>[View All]</option>
		<?php $_from = $this->_tpl_vars['favMeals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['favMeal']):
?>
					<option value='<?php echo $this->_tpl_vars['favMeal']['id']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['favMeal']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
				</select>
				<input type='hidden' name='action' value='viewMeal' />
			</form>
	<?php else: ?>
			* No favorite recipes.<br />
	<?php endif; ?>
		</div>
		<div style='margin-top: 1ex;'>
	<?php if ($this->_tpl_vars['userDiaries']): ?>
			<form action='view_diary' method='post' id='frmFavDiaries' style='margin: 0;'>
				<select name='diary' style='width: 100%;' onchange='return submitForm("frmFavDiaries");'>
					<option value=''> -- Diaries -- </option>
					<option value='viewAllDiaries'>[View All]</option>
		<?php $_from = $this->_tpl_vars['userDiaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userDiary']):
?>
					<option value='<?php echo $this->_tpl_vars['userDiary']['id']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['userDiary']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
				</select>
				<input type='hidden' name='action' value='viewDiary' />
			</form>
	<?php else: ?>
			* No diaries.
	<?php endif; ?>
		</div>
		<div style='margin-top: 2ex;'>
				<a href='manage'>Manage account</a>.
		</div>
<?php endif; ?>