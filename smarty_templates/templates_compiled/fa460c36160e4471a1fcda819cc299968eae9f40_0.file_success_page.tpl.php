<?php
/* Smarty version 5.4.0, created on 2024-08-29 05:39:30
  from 'file:common_views/success_page.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cfed728f18b6_49272122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa460c36160e4471a1fcda819cc299968eae9f40' => 
    array (
      0 => 'common_views/success_page.tpl',
      1 => 1724902768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66cfed728f18b6_49272122 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/Senior_PHP_Developer_Task_With_YIPONLINE/smarty_templates/templates_view/common_views';
?><div id="valid_data_div">
	<div>
		<b>VALIDATION STATUS</b> - &nbsp;
		<i><?php echo $_smarty_tpl->getValue('status');?>
</i>
	</div>
	<div>
		<b>VALIDATION MESSAGE</b> - &nbsp;
		<i><?php echo $_smarty_tpl->getValue('message');?>
</i>
	</div>

	<div>
		<center>
			<table border="1" s>
				<thead>
					<tr>
						<th>#</th>
						<th>Input Label</th>
						<th>Input Balue</th>
					</tr>
				</thead>

				<tbody>
					<?php $_smarty_tpl->assign('serial_number', 1, false, NULL);?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('valid_data'), 'value', false, 'label');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('label')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
						<tr>
							<td><?php echo $_smarty_tpl->getVariable('serial_number')->postIncDec('++');?>
.</td>
							<td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('label'));?>
</td>
							<td><?php echo $_smarty_tpl->getValue('value');?>
</td>
						</tr>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		<center>
	</div>
</div><?php }
}
