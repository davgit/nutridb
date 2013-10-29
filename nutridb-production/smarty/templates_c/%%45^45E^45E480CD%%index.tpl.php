<?php /* Smarty version 2.6.18, created on 2012-12-31 16:11:35
         compiled from index.tpl */ ?>
<?php echo $this->_tpl_vars['header']; ?>

<div id='columnContainer'>

	<div id='middleColumn'>
		<div id='middleData'>
			<form action='food_search' method='post' id='searchForm' onsubmit='return validateSearchBox();'>
				<div class='standardMargins' style='text-align: justify;'>
					<span style="font-size: 110%; font-weight: bold;">Welcome to NutriDB.</span>
					NutriDB is simple tool which allows you to view nutritional information
					for a particular food, or calculate the nutritional profile of a whole recipe.
				</div>
				<div class='standardMargins' style='text-align: justify;'>
					The default <a href='faq#searching'>search options</a> are fine for most
					people, but a few extras are added for anyone needing or wanting a bit of
					extra control.  Just type something in the search box and press the Search
					button to get started.
				</div>
				<div class='standardMargins' style='text-align: center;'>
					<strong>Search for</strong>:
					<input type='text' name='searchString' id='searchString' value='<?php echo $this->_tpl_vars['currentSearchString']; ?>
' size='25' />
					<!--
						Apparently IE won't send the submit button's name/value pair when a form
						is submitted via the Enter key ... unless there are at least two text
						input fields.  This is documented all over the web.
					-->
					<input type='text' name='IEHack' value='IEHack: see note above' style='display: none;' />
					<input type='submit' name='doSearch' value='Search' />
				</div>
				<div class='standardMargins'>
					<strong>Category</strong>:<br />
					<select name='foodCat'>
<?php $_from = $this->_tpl_vars['foodCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foodCat']):
?>
	<?php if ($this->_tpl_vars['foodCat']['fdgrp_cd'] == $this->_tpl_vars['currentFoodCat']): ?>
						<option value='<?php echo $this->_tpl_vars['foodCat']['fdgrp_cd']; ?>
' selected='selected'><?php echo $this->_tpl_vars['foodCat']['fdgrp_desc']; ?>
</option>
	<?php else: ?>
						<option value='<?php echo $this->_tpl_vars['foodCat']['fdgrp_cd']; ?>
'><?php echo $this->_tpl_vars['foodCat']['fdgrp_desc']; ?>
</option>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
				<div class='standardMargins'>
					<strong>Type of search</strong>:<br />
<?php $_from = $this->_tpl_vars['searchTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['searchType']):
?>
	<?php if ($this->_tpl_vars['searchType'] == $this->_tpl_vars['currentSearchType']): ?>
					<input type='radio' name='searchType' value='<?php echo $this->_tpl_vars['searchType']; ?>
' checked='checked' /><?php echo $this->_tpl_vars['searchType']; ?>
<br />
	<?php else: ?>
					<input type='radio' name='searchType' value='<?php echo $this->_tpl_vars['searchType']; ?>
' /><?php echo $this->_tpl_vars['searchType']; ?>
<br />
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
				</div>
				<div class='standardMargins'>
					<strong>Type of word search</strong>:<br />
<?php $_from = $this->_tpl_vars['wordTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wordType']):
?>
	<?php if ($this->_tpl_vars['wordType'] == $this->_tpl_vars['currentWordType']): ?>
					<input type='radio' name='wordType' value='<?php echo $this->_tpl_vars['wordType']; ?>
' checked='checked' /><?php echo $this->_tpl_vars['wordType']; ?>
<br />
	<?php else: ?>
					<input type='radio' name='wordType' value='<?php echo $this->_tpl_vars['wordType']; ?>
' /><?php echo $this->_tpl_vars['wordType']; ?>
<br />
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
				</div>
				<div class='standardMargins'>
					<strong>Sort order</strong>:<br />
<?php $_from = $this->_tpl_vars['sortTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sortType']):
?>
	<?php if ($this->_tpl_vars['sortType'] == $this->_tpl_vars['currentSortType']): ?>
					<input type='radio' name='sortType' value='<?php echo $this->_tpl_vars['sortType']; ?>
' checked='checked' /><?php echo $this->_tpl_vars['sortType']; ?>
<br />
	<?php else: ?>
					<input type='radio' name='sortType' value='<?php echo $this->_tpl_vars['sortType']; ?>
' /><?php echo $this->_tpl_vars['sortType']; ?>
<br />
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
				</div>
			</form>

			<hr />

			<div class='standardMargins'>
				Alternatively, you can search for the top 50 foods in the database containing
				the highest concentrations of the specified nutrient.
			</div>

			<form action='nutrient_search' method='post' id='nutrientSearchForm'>
				<div>
					<select name='nutrient'>
<?php $_from = $this->_tpl_vars['nutrientList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nutrient']):
?>
						<option value='<?php echo $this->_tpl_vars['nutrient']['nutr_no']; ?>
'><?php echo $this->_tpl_vars['nutrient']['nutrdesc']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
					</select>
					<input type='submit' name='doFindNutrients' value='Search' />
				</div>
			</form>
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
