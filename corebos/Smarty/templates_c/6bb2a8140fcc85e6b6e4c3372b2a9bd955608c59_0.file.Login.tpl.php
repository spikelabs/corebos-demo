<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:11
  from '/www/Smarty/templates/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfab78e816_65773037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb2a8140fcc85e6b6e4c3372b2a9bd955608c59' => 
    array (
      0 => '/www/Smarty/templates/Login.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:LoginHeader.tpl' => 1,
    'file:Login/".((string)$_smarty_tpl->tpl_vars[\'LoginPage\']->value).".tpl' => 1,
    'file:LoginFooter.tpl' => 1,
  ),
),false)) {
function content_5c24cfab78e816_65773037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:LoginHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:Login/".((string)$_smarty_tpl->tpl_vars['LoginPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:LoginFooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
