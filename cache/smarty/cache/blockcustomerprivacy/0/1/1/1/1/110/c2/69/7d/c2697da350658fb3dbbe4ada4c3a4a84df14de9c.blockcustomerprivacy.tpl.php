<?php /*%%SmartyHeaderCode:8274527f6394e02e47-58805666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2697da350658fb3dbbe4ada4c3a4a84df14de9c' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8274527f6394e02e47-58805666',
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527f639503e1a3_05302463',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527f639503e1a3_05302463')) {function content_527f639503e1a3_05302463($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Customer data privacy</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy">The personal data you provide is used to answer queries, process orders or allow access to specific information. You have the right to modify and delete all the personal information found in the &quot;My Account&quot; page. </label>		
</fieldset><?php }} ?>