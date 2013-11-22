<?php /*%%SmartyHeaderCode:151052668005396d27-83740492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac443e7041ede6d7b7e27af13eff1292eff7b454' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151052668005396d27-83740492',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266923abb7fe4_07252301',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266923abb7fe4_07252301')) {function content_5266923abb7fe4_07252301($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/fish/index.php?controller=my-account" title="Manage your customer account" rel="nofollow">My account</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/fish/index.php?controller=history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/fish/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/fish/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/fish/index.php?controller=identity" title="Manage your personal information" rel="nofollow">My personal info</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/fish/index.php?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>