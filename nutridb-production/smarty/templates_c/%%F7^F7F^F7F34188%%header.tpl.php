<?php /* Smarty version 2.6.18, created on 2013-07-12 14:09:29
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header.tpl', 22, false),)), $this); ?>
<!DOCTYPE html>
	
<html lang='en'>

<head><?php echo $this->_tpl_vars['myHeaders']; ?>
</head>

<?php if ($this->_tpl_vars['config']->_thisScript == "/"): ?>
<body onload='getElement("searchForm").searchString.focus();'>
<?php else: ?>
<body>
<?php endif; ?>

<div id='header'>
	<div id='headerLeft'>
		<a href='<?php echo $this->_tpl_vars['config']->_rootUri; ?>
/' style='color: #ffffff;'>Nutri<span style="color: #b5e7bd;">DB</span></a>
		<span style="font-size: 75%;">... an online food and recipe nutrition calculator</span>
		
	</div>

<?php if (isset ( $this->_tpl_vars['isLoggedIn'] )): ?>
	<div id='headerRight'>
		Hi <?php echo ((is_array($_tmp=$_SESSION['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
.<br />
		[<a href='logout'>Logout</a>]

	</div>
<?php else: ?>
	<div id='headerRight'>
		<form action='login' method='post' id='loginForm' onsubmit='return validateLoginFields();'>
			<div id='loginLeft'>
				Login <input type='text' name='username' id='username' size='15' maxlength='25' /><br />
				Password <input type='password' name='password' id='password' size='15' maxlength='25' />
			</div>
			<div id='loginRight'>
				<input type='submit' name='doLogin' value='Login' style='margin-bottom: 1ex;' /><br />
				<a href='register'>Register</a>.
			</div>
		</form>
	</div>
<?php endif; ?>

	<div id='headerLinkBar'>
		<div id='headerLinks'>
			<a href='<?php echo $this->_tpl_vars['config']->_rootUri; ?>
' title='Home/Search Page'>Search</a> &nbsp; | &nbsp;
			<a href='about' title='About nutridb.org'>About</a> &nbsp; | &nbsp;
			<a href='guide' title='A brief guide'>Guide</a> &nbsp; | &nbsp;
			<a href='faq' title='FAQ'>FAQ</a> &nbsp; | &nbsp;
			<a href='download' title='Download'>Download</a> &nbsp; | &nbsp;
			<a href='contact' title='Contact'>Contact</a>
		</div>
		<div id='systemMsgs'><?php echo $this->_tpl_vars['systemMsg']; ?>
</div>
	</div>
</div>

