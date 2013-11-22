<?php /*%%SmartyHeaderCode:2996552668003b3d9b2-49540894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12be62def5f17cbb26100a267c4bd3e3e93114bc' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2996552668003b3d9b2-49540894',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266923a68f579_60190761',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266923a68f579_60190761')) {function content_5266923a68f579_60190761($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/fish/index.php?controller=supplier" title="Suppliers">Suppliers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/fish/index.php?id_supplier=1&amp;controller=supplier" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/fish/index.php?id_supplier=2&amp;controller=supplier" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/fish/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://localhost/fish/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://localhost/fish/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>