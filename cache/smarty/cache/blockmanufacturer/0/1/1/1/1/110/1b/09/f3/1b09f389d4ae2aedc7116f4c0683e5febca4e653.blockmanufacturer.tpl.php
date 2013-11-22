<?php /*%%SmartyHeaderCode:17316526680039861d2-56121743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b09f389d4ae2aedc7116f4c0683e5febca4e653' => 
    array (
      0 => 'C:\\wamp\\www\\fish\\themes\\default\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1377665064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17316526680039861d2-56121743',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266923a7050e0_52165038',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266923a7050e0_52165038')) {function content_5266923a7050e0_52165038($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost/fish/index.php?controller=manufacturer" title="Manufacturers">Manufacturers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost/fish/index.php?id_manufacturer=1&amp;controller=manufacturer" title="Learn more about Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost/fish/index.php?id_manufacturer=2&amp;controller=manufacturer" title="Learn more about Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/fish/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://localhost/fish/index.php?id_manufacturer=1&amp;controller=manufacturer">Apple Computer, Inc</option>
									<option value="http://localhost/fish/index.php?id_manufacturer=2&amp;controller=manufacturer">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>