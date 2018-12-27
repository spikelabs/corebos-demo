<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/ListViewSearchBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc98df86_28990636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c1c65d004af719c08d41d062b09e11db40ae9b' => 
    array (
      0 => '/www/Smarty/templates/ListViewSearchBlock.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfbc98df86_28990636 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['LVCSearchActive']->value) && $_smarty_tpl->tpl_vars['LVCSearchActive']->value != 0) {?>
<tr bgcolor='white' name='customAdvanceSearch' id='customAdvanceSearch'>
	<td>&nbsp;
		<a onclick="clearAllField()">
			<img src="<?php echo vtiger_imageurl('no.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" />
		</a>
		<select name='fcolcolumnIndex' id='fcolcolumnIndex' style="display:none" ><?php echo $_smarty_tpl->tpl_vars['COLUMNS_BLOCK']->value;?>
</select>
		<input type="hidden" value="<?php echo count($_smarty_tpl->tpl_vars['TKS_LIST_SEARCH']->value);?>
" name="noofsearchfields" id="noofsearchfields" />
	</td>
	<?php $_smarty_tpl->_assignInScope('val', 0);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TKS_LIST_SEARCH']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'date' || $_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'datetime' || $_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'owner' || $_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'select' || $_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'checkbox') {?>
	<td width="11%">
	<?php } else { ?>
	<td>
	<?php }?>
		<input type="hidden" name="fname_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" />
		<input type="hidden" name="fvalue_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['value'];?>
" />
		<input type="hidden" name="customval_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" value="" />
		<input type="hidden" name="type_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldtype'];?>
" />
		<?php if ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'checkbox') {?>
		<table>
			<tr>
				<td width="80%">
				<select name="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" id="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" class="small" multiple="multiple">
					<option value="1"><?php echo getTranslatedString('LBL_YES');?>
</option>
					<option value="0"><?php echo getTranslatedString('LBL_NO');?>
</option>
				</select>
				</td>
				<td align="right">
					<a onclick="clearSelect('tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
');">
						<img src="<?php echo vtiger_imageurl('no.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="13" width="12" />
					</a>
				</td>
			</tr>
		</table>
		<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'owner') {?>
		<table>
			<tr>
				<td width="80%">
					<select name="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" id="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" multiple="multiple">
						<optgroup id='Users' label='Users'>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value['pickdata']['users'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
							<option value ='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</optgroup>
						<optgroup id='Groups' label='Groups'>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value['pickdata']['group'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
							<option value ='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</optgroup>
					</select>
				</td>
				<td align="right">
					<a onclick="clearSelect('tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
');">
						<img src="<?php echo vtiger_imageurl('no.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="13" width="12" />
					</a>
				</td>
			</tr>
		</table>
		<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'select') {?>
		<table>
			<tr>
				<td width="80%">
					 <select name="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" id="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" class="small" multiple="multiple">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value['pickdata'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
							<option value ='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</td>
				<td align="right">
					<a onclick="clearSelect('tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
');">
						<img src="<?php echo vtiger_imageurl('no.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="13" width="12" />
					</a>
				</td>
			</tr>
		</table>
		<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'date' || $_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'datetime') {?>
		<table>
			<tr>
				<td>
					<input name="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1" id="jscal_field_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1"
						type="text" style="border:1px solid #bababa;" size="8" maxlength="10" value=""
						onchange="copyDate( 'jscal_field_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1', 'jscal_field_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2')" onkeypress="return disableEnterKey(event,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')" />
					<img src="<?php echo vtiger_imageurl('btnL3Calendar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" id="jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1">
					<?php echo '<script'; ?>
 type="text/javascript" id='massedit_calendar_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1'>
						<?php if ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'datetime') {?>
						var dt = true;
						var timeformat = ' %H:%M:%S';
						<?php } else { ?>
						var dt = false;
						timeformat = '';
						<?php }?>
						Calendar.setup ({
							inputField : "jscal_field_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1", ifFormat : "<?php echo parse_calendardate('');?>
"+timeformat,
							showsTime : dt, button : "jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date1", singleClick : true, step : 1
						})
					<?php echo '</script'; ?>
>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					<input name="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2" id="jscal_field_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2"
						type="text" style="border:1px solid #bababa;" size="8" maxlength="10" value="" onkeypress="return disableEnterKey(event,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')" />
					<img src="<?php echo vtiger_imageurl('btnL3Calendar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" id="jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2">
					<?php echo '<script'; ?>
 type="text/javascript" id='massedit_calendar_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2'>
						<?php if ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'datetime') {?>
						var dt = true;
						var timeformat = ' %H:%M:%S';
						<?php } else { ?>
						var dt = false;
						timeformat = '';
						<?php }?>
						Calendar.setup ({
							inputField : "jscal_field_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2", ifFormat : "<?php echo parse_calendardate('');?>
"+timeformat,
							showsTime : dt, button : "jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
_date2", singleClick : true, step : 1
						})
					<?php echo '</script'; ?>
>
				</td>
			</tr>
		</table>
		<?php } else { ?>
		<table>
			<tr>
				<td width="70%">
					<input type="text" id="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" name="tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" value="" width:"100%" onkeypress="return disableEnterKey(event,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')" />
				</td>
				<td align="right">
					<a onblur="disableDiv('div_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
')" onclick="enableDiv('div_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
')">
						<img src="<?php echo vtiger_imageurl('arrow.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="13" width="12" />
					</a>
					<a onclick="clearField('tks_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
');disableDiv('div_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
')">
						<img src="<?php echo vtiger_imageurl('no.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="13" width="12" />
					</a>
				</td>
			</tr>
		</table>
		<div id="div_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
" style="z-index:12;width:200px;position:absolute;display:none;" class="layerPopup" name ='layerPopup'>
			<table border="0" cellspacing="0" cellpadding="5" width="100%" class="layerHeadingULine">
				<tbody>
					<tr>
						<td width="90%" align="left" class="genHeaderSmall"><?php echo getTranslatedString('Select Condition');?>
 &nbsp;</td>
						<td width="10%" align="right">
							<a onclick="disableDiv('div_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
')">
								<img title="<?php echo getTranslatedString('LBL_CLOSE');?>
" alt="<?php echo getTranslatedString('LBL_CLOSE');?>
" src="themes/images/close.gif" border="0" align="absmiddle">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
			<table border="0" cellspacing="0" cellpadding="5" width="95%" align="center">
				<tbody>
					<tr>
						<td class="small">
							<select name="op_cond_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" id="op_cond_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="repBox" style="width:100px;" onblur="document.getElementById('div_<?php echo $_smarty_tpl->tpl_vars['arr']->value['fieldname'];?>
').style.display='none'">
								<?php if ($_smarty_tpl->tpl_vars['arr']->value['fieldtype'] == 'text') {?>
								<option value="e"><?php echo getTranslatedString('equals','CustomView');?>
</option>
								<option value="n"><?php echo getTranslatedString('not equal to','CustomView');?>
</option>
								<option value="s"><?php echo getTranslatedString('starts with','CustomView');?>
</option>
								<option value="ew"><?php echo getTranslatedString('ends with','CustomView');?>
</option>
								<option value="c" selected="selected"><?php echo getTranslatedString('contains','CustomView');?>
</option>
								<option value="k"><?php echo getTranslatedString('does not contain','CustomView');?>
</option>
								<?php } else { ?>
								<option value="e" selected="selected"><?php echo getTranslatedString('equals','CustomView');?>
</option>
								<option value="n"><?php echo getTranslatedString('not equal to','CustomView');?>
</option>
								<option value="l"><?php echo getTranslatedString('less than','CustomView');?>
</option>
								<option value="g"><?php echo getTranslatedString('greater than','CustomView');?>
</option>
								<option value="m"><?php echo getTranslatedString('less or equal','CustomView');?>
</option>
								<option value="h"><?php echo getTranslatedString('greater or equal','CustomView');?>
</option>
								<?php }?>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php }?>
	</td>
	<?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<td>
		<input type="button" id="tks_searchbutton" name="tks_searchbutton" value="<?php echo getTranslatedString('LBL_Search','MailManager');?>
" onclick="activateCustomSearch('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')" class="crmbutton small create" />
	</td>
</tr>
<?php }
}
}
