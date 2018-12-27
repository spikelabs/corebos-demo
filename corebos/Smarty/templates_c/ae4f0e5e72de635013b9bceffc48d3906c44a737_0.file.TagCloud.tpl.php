<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:18
  from '/www/Smarty/templates/Home/TagCloud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfb239f236_77412347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae4f0e5e72de635013b9bceffc48d3906c44a737' => 
    array (
      0 => '/www/Smarty/templates/Home/TagCloud.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfb239f236_77412347 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['USER_TAG_SHOWAS']->value != 'flat') {?>
<div id="tagcloud" style="overflow: hidden; width: 100%; padding-left: 2%; padding-right: 3%; min-height: 250px;" >
 <canvas style="width:290px;height:290px;overflow:hidden;" id="tagcloudCanvas">
  <ul><?php echo $_smarty_tpl->tpl_vars['ALL_TAG']->value;?>
</ul>
 </canvas>
</div>
<?php } else { ?>
<div id="tagcloud" style="overflow: hidden; width: 100%; padding-left: 2%; padding-right: 3%; min-height: 250px;" >
	<img src='<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
/tagCloudName.gif' style="display: block; width: 100%;"/>
	<br>
	<span id="tagfields"><?php echo $_smarty_tpl->tpl_vars['ALL_TAG']->value;?>
</span>
</div>
<?php }
}
}
