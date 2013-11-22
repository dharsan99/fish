<?php /*%%SmartyHeaderCode:25398526680037b6e17-39037747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9a307437130b20a202e425708e1633574dd2ac' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\themes\\default\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
    '9e6f1a84590d3f6d2ff0d7aa79dbaeae6837b0b1' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\themes\\default\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25398526680037b6e17-39037747',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52669b36737990_45084877',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52669b36737990_45084877')) {function content_52669b36737990_45084877($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/fish/index.php?id_category=7&amp;controller=category" 		title="Rohu fish">Rohu Fish</a>
	</li>

												
<li >
	<a href="http://localhost/fish/index.php?id_category=8&amp;controller=category" 		title="Pomfret Fish">Pomfret Fish</a>
	</li>

												
<li >
	<a href="http://localhost/fish/index.php?id_category=9&amp;controller=category" 		title="Raw Fish">Raw Fish</a>
	</li>

												
<li class="last">
	<a href="http://localhost/fish/index.php?id_category=10&amp;controller=category" 		title="Cleaned Fish">Cleaned Fish</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>