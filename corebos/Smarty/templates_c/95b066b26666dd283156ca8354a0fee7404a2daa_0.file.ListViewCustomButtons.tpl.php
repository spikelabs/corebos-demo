<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/ListViewCustomButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc9162d9_53021030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b066b26666dd283156ca8354a0fee7404a2daa' => 
    array (
      0 => '/www/Smarty/templates/ListViewCustomButtons.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfbc9162d9_53021030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/Smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value && $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['LISTVIEWBASIC']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['LISTVIEWBASIC'], 'CUSTOMLINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOMLINK']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('customlink_href', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkurl);?>
		<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel);?>
		<?php $_smarty_tpl->_assignInScope('customlink_id', smarty_modifier_replace($_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel,' ',''));?>
		<?php if ($_smarty_tpl->tpl_vars['customlink_label']->value == '') {?>
			<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['customlink_href']->value);?>
		<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('customlink_label', getTranslatedString($_smarty_tpl->tpl_vars['customlink_label']->value,$_smarty_tpl->tpl_vars['CUSTOMLINK']->value->module()));?>
		<?php }?>
		<input class="crmbutton small edit" type="button" id="LISTVIEWBASIC_<?php echo $_smarty_tpl->tpl_vars['customlink_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['customlink_label']->value;?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
" />
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value && !empty($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['LISTVIEW'])) {?>
	&nbsp;
	<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_customLinksLay');" onclick="fnvshobj(this,'vtlib_customLinksLay');">
		<b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ACTIONS'];?>
 <img src="<?php echo vtiger_imageurl('arrow_down.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"></b>
	</a>
	<div style="display: none; left: 193px; top: 106px;width:155px; position:absolute;" id="vtlib_customLinksLay"
		onmouseout="fninvsh('vtlib_customLinksLay')" onmouseover="fnvshNrm('vtlib_customLinksLay')">
		<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;"><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ACTIONS'];?>
 &#187;</b></td>
		</tr>
		<tr>
			<td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['LISTVIEW'], 'CUSTOMLINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOMLINK']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('customlink_href', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkurl);?>
					<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel);?>
					<?php if ($_smarty_tpl->tpl_vars['customlink_label']->value == '') {?>
						<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['customlink_href']->value);?>
					<?php } else { ?>
												<?php $_smarty_tpl->_assignInScope('customlink_label', getTranslatedString($_smarty_tpl->tpl_vars['customlink_label']->value,$_smarty_tpl->tpl_vars['CUSTOMLINK']->value->module()));?>
					<?php }?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
" class="drop_down"><?php echo $_smarty_tpl->tpl_vars['customlink_label']->value;?>
</a>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</td>
		</tr>
		</table>
	</div>
<?php }
}
}
