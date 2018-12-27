<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/applicationmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc8a2804_09906615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e01e4dc70d69231433061bbc67288b858abf22' => 
    array (
      0 => '/www/Smarty/templates/applicationmessage.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfbc8a2804_09906615 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)) {
if (empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE_CLASS']->value) || $_smarty_tpl->tpl_vars['ERROR_MESSAGE_CLASS']->value == "cb-alert-danger") {?>
	<?php $_smarty_tpl->_assignInScope('slds_role', "error");
} elseif ($_smarty_tpl->tpl_vars['ERROR_MESSAGE_CLASS']->value == "cb-alert-warning") {?>
	<?php $_smarty_tpl->_assignInScope('slds_role', "warning");
} elseif ($_smarty_tpl->tpl_vars['ERROR_MESSAGE_CLASS']->value == "cb-alert-info") {?>
	<?php $_smarty_tpl->_assignInScope('slds_role', "info");
} elseif ($_smarty_tpl->tpl_vars['ERROR_MESSAGE_CLASS']->value == "cb-alert-success") {?>
	<?php $_smarty_tpl->_assignInScope('slds_role', "success");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('slds_role', "error");
}?>
<div class="slds-m-top_x-small slds-m-bottom_x-small">
	<div class="slds-notify slds-notify_alert slds-theme_<?php echo $_smarty_tpl->tpl_vars['slds_role']->value;?>
 slds-theme_alert-texture" role="alert" style="padding:0.1rem">
	<h2>
		<svg class="slds-icon slds-icon_small slds-m-right_x-small" aria-hidden="true">
		<use xlink:href="include/LD//assets/icons/utility-sprite/svg/symbols.svg#<?php echo $_smarty_tpl->tpl_vars['slds_role']->value;?>
"></use>
		</svg><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>

	</h2>
	</div>
</div>
<?php }
}
}
