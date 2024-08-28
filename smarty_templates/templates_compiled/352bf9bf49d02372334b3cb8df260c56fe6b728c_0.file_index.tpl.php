<?php
/* Smarty version 5.4.0, created on 2024-08-28 15:44:37
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cf29c51015e2_38914346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352bf9bf49d02372334b3cb8df260c56fe6b728c' => 
    array (
      0 => 'index.tpl',
      1 => 1724852667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common_views/header.tpl' => 1,
    'file:common_views/footer.tpl' => 1,
  ),
))) {
function content_66cf29c51015e2_38914346 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/Senior_PHP_Developer_Task_With_YIPONLINE/smarty_templates/templates_view';
$_smarty_tpl->renderSubTemplate("file:common_views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
    <div class="index_main">
        <img src="./public/senior_php_developer.jpeg" class="senior_php_developer_img" alt="Senior PHP Developer image">
    </div>
 </div>
 
 <?php $_smarty_tpl->renderSubTemplate("file:common_views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
