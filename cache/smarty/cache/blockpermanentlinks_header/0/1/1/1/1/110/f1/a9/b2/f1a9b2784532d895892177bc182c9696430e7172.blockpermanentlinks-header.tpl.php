<?php /*%%SmartyHeaderCode:2719952668002777433-01949109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a9b2784532d895892177bc182c9696430e7172' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2719952668002777433-01949109',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266923a2ba971_81067945',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266923a2ba971_81067945')) {function content_5266923a2ba971_81067945($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/fish/index.php?controller=contact" title="Contact">Contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/fish/index.php?controller=sitemap" title="Sitemap">Sitemap</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/fish/index.php?id_category=8&amp;controller=category', 'Pomfret Fish - Fresh Fish', 'bookmark');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>