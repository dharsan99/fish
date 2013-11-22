<?php /* Smarty version Smarty-3.1.14, created on 2013-11-10 16:42:49
         compiled from "C:\wamp\www\fish\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27645527f6a31f1b422-03494293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a44520975fbc7aa79b3c7e5a4c6b166eeb9fd5d' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1377665062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27645527f6a31f1b422-03494293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527f6a32002f67_41396882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527f6a32002f67_41396882')) {function content_527f6a32002f67_41396882($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>