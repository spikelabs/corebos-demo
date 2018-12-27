<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/MergeColumns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc803c01_56835835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '890636a53fb5ac14d1e81b8a295b1bcb8de6f476' => 
    array (
      0 => '/www/Smarty/templates/MergeColumns.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfbc803c01_56835835 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="include/jquery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/jquery/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/smoothscroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javaScript" src="include/js/dedup.js"><?php echo '</script'; ?>
>

<form enctype="multipart/form-data" name="mergeDuplicates" method="post" action="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=FindDuplicateRecords" onsubmit="VtigerJS_DialogBox.block();">
	<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
	<input type="hidden" name="parenttab" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
">
	<input type="hidden" name="action" value="FindDuplicateRecords">
	<input type="hidden" name="selectedColumnsString"/>
	<table class="searchUIBasic small" border="0" cellpadding="5" cellspacing="0" width="80%" height="10" align="center">
		<tbody><tr class="lvtCol" style="Font-Weight: normal"><br>
					<td colspan="2" class="cblds-p_medium">
						<span class="moduleName"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT_MERGECRITERIA_HEADER'];?>
</span><br>
						<span font-weight:normal><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT_MERGECRITERIA_TEXT'];?>
</span>
					</td>
					<td valign="top" align="right" class="small cblds-t-align_right">
						<span>&nbsp;</span>
						<span align="right" onClick="mergeshowhide('mergeDup')" onmouseover="this.style.cursor='pointer';"><img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"></span><br>
					</td>
				</tr>
				<tr><td colspan="3"></td></tr>
				<tr>
					<td class="cblds-p_medium"><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_AVAILABLE_FIELDS'];?>
</b></td>
					<td></td>
					<td class="cblds-p_medium"><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECTED_FIELDS'];?>
</b></td>
				</tr>
				<tr>
					<td width=47% class="cblds-p_medium">
						<select id="availList" multiple size="10" name="availList" class="txtBox" Style="width: 100%">
						<?php echo $_smarty_tpl->tpl_vars['AVALABLE_FIELDS']->value;?>

						</select>
					</td>
					<td width="6%">
						<div align="center">
							<input type="button" name="Button" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="addColumn()" class="crmButton small" width="100%" /><br /><br />
							<input type="button" name="Button1" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="delColumn()" class="crmButton small" width="100%" /><br /><br />
						</div>
					</td>
					<td width="47%" class="cblds-p_medium">
						<select id="selectedColumns" size="10" name="selectedColumns" multiple class="txtBox" Style="width: 100%">
						<?php echo $_smarty_tpl->tpl_vars['FIELDS_TO_MERGE']->value;?>

						</select>
					</td>
				</tr> 
				<tr>
					<td colspan="3" align="center" class="cblds-t-align_center cblds-p_medium">
					<input type="submit" name="save&merge" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_MERGE_BUTTON_TITLE'];?>
" class="crmbutton small edit" onClick="return formSelectColumnString()"/>
					<input type="button" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" class="crmbutton small cancel" type="button" onClick="mergeshowhide('mergeDup');">
					</td>
				</tr>
		</tbody>
	</table>
</form>

<?php }
}
