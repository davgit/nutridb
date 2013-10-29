<?php /* Smarty version 2.6.18, created on 2012-12-31 18:04:43
         compiled from food_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'food_search.tpl', 7, false),)), $this); ?>
<?php echo $this->_tpl_vars['header']; ?>

<div id='columnContainer'>

	<div id='middleColumn'>
		<div id='middleData'>
			<div>
				<strong>Search text</strong>: '<?php echo ((is_array($_tmp=$this->_tpl_vars['searchString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'<br />
				<strong>Search type</strong>: <?php echo ((is_array($_tmp=$this->_tpl_vars['searchType'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['wordType'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<br />
				<strong>Category</strong>: <?php echo ((is_array($_tmp=$this->_tpl_vars['foodCatName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<br />
				<strong>Sort by</strong>: <?php echo ((is_array($_tmp=$this->_tpl_vars['sortType'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

			</div>
<?php if (isset ( $this->_tpl_vars['searchResults'] )): ?>
			<div style='margin-top: 2ex;'>
				The following items matched your search.
				Select one, or <a href='/?<?php echo $_SERVER['QUERY_STRING']; ?>
'>refine your search</a>.
			</div>
			<div style='margin-top: 2ex;'>
	<?php if ($this->_tpl_vars['sortType'] == 'Category'): ?>
		<?php $_from = $this->_tpl_vars['searchResults']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category'] => $this->_tpl_vars['foodCat']):
?>
			<div style='text-align: center; background-color: #e0e0e0;'><?php echo $this->_tpl_vars['foodCat']['foodCatName']; ?>
</div>
			<?php $_from = $this->_tpl_vars['foodCat']['searchResults']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['searchResult']):
?>
				<div>
				<?php if ($this->_tpl_vars['category'] == 'userFood'): ?>
					<a href='view_food?<?php echo $this->_tpl_vars['searchResult']['food']; ?>
&description=<?php echo $this->_tpl_vars['searchResult']['foodDesc']; ?>
'><?php echo $this->_tpl_vars['searchResult']['foodDesc']; ?>
</a>
				<?php elseif ($this->_tpl_vars['category'] == 'userMeal'): ?>
					<a href='view_meal?meal=<?php echo $this->_tpl_vars['searchResult']['food']; ?>
&description=<?php echo $this->_tpl_vars['searchResult']['foodDesc']; ?>
'><?php echo $this->_tpl_vars['searchResult']['foodDesc']; ?>
</a>
				<?php else: ?>
					<a href='food_quantity?food=<?php echo $this->_tpl_vars['searchResult']['food']; ?>
'><?php echo $this->_tpl_vars['searchResult']['foodDesc']; ?>
</a>
				<?php endif; ?>
				</div>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php $_from = $this->_tpl_vars['searchResults']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['searchResult']):
?>
				<div>	
			<?php if ($this->_tpl_vars['searchResult']['category'] == 'userFood'): ?>
					<a href='view_food?<?php echo $this->_tpl_vars['searchResult']['food']; ?>
&description=<?php echo ((is_array($_tmp=$this->_tpl_vars['searchResult']['foodDesc'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['searchResult']['foodDesc'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
			<?php elseif ($this->_tpl_vars['searchResult']['category'] == 'userMeal'): ?>
					<a href='view_meal?meal=<?php echo $this->_tpl_vars['searchResult']['food']; ?>
&description=<?php echo ((is_array($_tmp=$this->_tpl_vars['searchResult']['foodDesc'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['searchResult']['foodDesc'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
			<?php else: ?>
					<a href='food_quantity?food=<?php echo $this->_tpl_vars['searchResult']['food']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['searchResult']['foodDesc'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
			<?php endif; ?>
				</div>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
			</div>
			<div class='pageNav'>	
				<?php echo $this->_tpl_vars['pageNav']; ?>

			</div>
<?php else: ?>
			<div style='margin-top: 2ex;'>
				<span class='msgError'>No items matched your search.</span><br />
			</div>
			<div>
				Would you like to <a href='/?<?php echo $_SERVER['QUERY_STRING']; ?>
'>refine your search</a>?
			</div>
			<div>
				Don't understand the search options?  See the <a href='faq#searching'>help</a> on searching.
			</div>
<?php endif; ?>
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
