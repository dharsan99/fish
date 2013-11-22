<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 20:21:34
         compiled from "C:\wamp\www\fish\admin5632\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11404526690f611d437-30397524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a84179e6d9c3e8a4eea1582b0c1fb25ee784ebb' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\admin5632\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1377665062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11404526690f611d437-30397524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526690f61cfde4_85614592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526690f61cfde4_85614592')) {function content_526690f61cfde4_85614592($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>