<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/AdvanceFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc7f0734_73585463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73cf0f72601eec97b0a5dab2f2e94aaa7f8f6862' => 
    array (
      0 => '/www/Smarty/templates/AdvanceFilter.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfbc7f0734_73585463 (Smarty_Internal_Template $_smarty_tpl) {
?><!--*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *********************************************************************************/
-->
<style>
	.wizard .layerPopup {
		border: 0;
		position: absolute;
		z-index: 50;
		display: none;
		width: 100%;
		height:100%;
		background:transparent;
		top: 0 !important;
		left:0 !important;
	}

	.wizard .layerPopupBlock {
		width: 300px;
		position: absolute;
		top: 50%;
		left: 0;
		right: 0;
	}
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/advancefilter.js"><?php echo '</script'; ?>
>
<?php if (empty($_smarty_tpl->tpl_vars['JS_DATEFORMAT']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('JS_DATEFORMAT', parse_calendardate($_smarty_tpl->tpl_vars['APP']->value['NTC_DATE_FORMAT']));
}?>
<input type="hidden" id="jscal_dateformat" name="jscal_dateformat" value="<?php echo $_smarty_tpl->tpl_vars['JS_DATEFORMAT']->value;?>
" />
<input type="hidden" id="image_path" name="image_path" value="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
" />
<input type="hidden" name="advft_criteria" id="advft_criteria" value="" />
<input type="hidden" name="advft_criteria_groups" id="advft_criteria_groups" value="" />
<?php echo '<script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['SOURCE']->value != 'reports') {?>
		var BLOCKJS = "";
		var BLOCKCRITERIA = "";
		<?php if ($_smarty_tpl->tpl_vars['SOURCE']->value != 'customview') {?>
			var COL_BLOCK = '<?php echo $_smarty_tpl->tpl_vars['COLUMNS_BLOCK']->value;?>
';
		<?php } else { ?>
			var COL_BLOCK = "<?php echo $_smarty_tpl->tpl_vars['COLUMNS_BLOCK']->value;?>
";
		<?php }?>;
		var FOPTION_ADV = "";
		var MOMENT = "";
	<?php }
echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/JavaScript">
function addColumnConditionGlue(columnIndex) {

	var columnConditionGlueElement = document.getElementById('columnconditionglue_'+columnIndex);

	if(columnConditionGlueElement) {
		columnConditionGlueElement.innerHTML = "<select name='fcon"+columnIndex+"' id='fcon"+columnIndex+"' class='detailedViewTextBox'>"+
			"<option value='and'><?php echo getTranslatedString('LBL_CRITERIA_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+
			"<option value='or'><?php echo getTranslatedString('LBL_CRITERIA_OR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+
			"</select>";
	}
}

function addConditionRow(groupIndex) {
	var groupColumns = column_index_array[groupIndex];
	if(typeof(groupColumns) != 'undefined') {
		for(var i=groupColumns.length - 1; i>=0; --i) {
			var prevColumnIndex = groupColumns[i];
			if(document.getElementById('conditioncolumn_'+groupIndex+'_'+prevColumnIndex)) {
				addColumnConditionGlue(prevColumnIndex);
				break;
			}
		}
	}

	var columnIndex = advft_column_index_count+1;
	var nextNode = document.getElementById('groupfooter_'+groupIndex);

	var newNode = document.createElement('tr');
	newNodeId = 'conditioncolumn_'+groupIndex+'_'+columnIndex;
  	newNode.setAttribute('id',newNodeId);
  	newNode.setAttribute('name','conditionColumn');
	nextNode.parentNode.insertBefore(newNode, nextNode);

	node1 = document.createElement('td');
	node1.setAttribute('class', 'dvtCellLabel');
	node1.setAttribute('width', '25%');
	newNode.appendChild(node1);
	<?php if ($_smarty_tpl->tpl_vars['SOURCE']->value == 'reports') {?>
		node1.innerHTML = '<select name="fcol'+columnIndex+'" id="fcol'+columnIndex+'" onchange="updatefOptions(this, \'fop'+columnIndex+'\');addRequiredElements('+columnIndex+');updateRelFieldOptions(this, \'fval_'+columnIndex+'\');" class="detailedViewTextBox">'+
							'<option value=""><?php echo getTranslatedString('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>'+COL_BLOCK+
						'</select>';
	<?php } else { ?>
		node1.innerHTML = "<select name='fcol"+columnIndex+"' id='fcol"+columnIndex+"' onchange='updatefOptions(this, \"fop"+columnIndex+"\");addRequiredElements("+columnIndex+");' class='detailedViewTextBox'>"+
							"<option value=''><?php echo getTranslatedString('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+COL_BLOCK+
						"</select>";
	<?php }?>
	node2 = document.createElement('td');
	node2.setAttribute('class', 'dvtCellLabel');
	node2.setAttribute('width', '25%');

	node2.innerHTML = '<select name="fop'+columnIndex+'" id="fop'+columnIndex+'" class="repBox" style="width:100px;" onchange="addRequiredElements('+columnIndex+');">'+FOPTION_ADV+
							'<option value=""><?php echo getTranslatedString('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>'+
						'</select>';
	newNode.appendChild(node2);
	node3 = document.createElement('td');
	node3.setAttribute('class', 'dvtCellLabel');
	newNode.appendChild(node3);
	<?php if ($_smarty_tpl->tpl_vars['SOURCE']->value == 'reports') {?>
		node3.innerHTML = '<input name="fval'+columnIndex+'" id="fval'+columnIndex+'" class="repBox" type="text" value="">'+
						'<img height=20 width=20 align="absmiddle" style="cursor: pointer;" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FIELD_FOR_COMPARISION'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FIELD_FOR_COMPARISION'];?>
" src="themes/images/terms.gif" onClick="hideAllElementsByName(\'relFieldsPopupDiv\'); fnShowDrop(\'show_val'+columnIndex+'\');"/>'+
						'<img align="absmiddle" style="cursor: pointer;" onclick="document.getElementById(\'fval'+columnIndex+'\').value=\'\';return false;" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" src="themes/images/clear_field.gif"/>'+
						'<div class="layerPopup" id="show_val'+columnIndex+'" name="relFieldsPopupDiv" >'+
							'<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="mailClient mailClientBg layerPopupBlock">'+
								'<tr>'+
									'<td>'+
										'<table width="100%" cellspacing="0" cellpadding="0" border="0" class="layerHeadingULine">'+
											'<tr background="themes/images/qcBg.gif" class="mailSubHeader">'+
												'<td width=90% class="genHeaderSmall"><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SELECT_FIELDS'];?>
</b></td>'+
												'<td align=right>'+
													'<img border="0" align="absmiddle" src="themes/images/close.gif" style="cursor: pointer;" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" onclick="hideAllElementsByName(\'relFieldsPopupDiv\');"/>'+
												'</td>'+
											'</tr>'+
										'</table>'+

										'<table width="100%" cellspacing="0" cellpadding="0" border="0" class="small">'+
											'<tr>'+
												'<td>'+
													'<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="white" class="small">'+
														'<tr>'+
															'<td width="30%" align="left" class="cellLabel small"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RELATED_FIELDS'];?>
</td>'+
															'<td width="30%" align="left" class="cellText">'+
																'<select name="fval_'+columnIndex+'" id="fval_'+columnIndex+'" onChange="AddFieldToFilter('+columnIndex+',this);" class="detailedViewTextBox">'+
																	'<option value=""><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NONE'];?>
</option>'+
																	REL_FIELDS+
																'</select>'+
															'</td>'+
														'</tr>'+
													'</table>'+
													'<!-- save cancel buttons -->'+
													'<table width="100%" cellspacing="0" cellpadding="5" border="0" class="layerPopupTransport">'+
														'<tr>'+
															'<td width="50%" align="center">'+
																'<input type="button" style="width: 70px;" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DONE'];?>
" name="button" onclick="hideAllElementsByName(\'relFieldsPopupDiv\');" class="crmbutton small create" accesskey="X" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DONE'];?>
"/>'+
															'</td>'+
														'</tr>'+
													'</table>'+
												'</td>'+
											'</tr>'+
										'</table>'+
									'</td>'+
								'</tr>'+
							'</table>'+
						'</div>';
	<?php } else { ?>
		node3.innerHTML = '<input name="fval'+columnIndex+'" id="fval'+columnIndex+'" class="repBox" type="text" value="">'+ '<img align="absmiddle" style="cursor: pointer;" onclick="document.getElementById(\'fval'+columnIndex+'\').value=\'\';return false;" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" src="themes/images/clear_field.gif"/>';
	<?php }?>

	node4 = document.createElement('td');
	node4.setAttribute('class', 'dvtCellLabel');
	node4.setAttribute('id', 'columnconditionglue_'+columnIndex);
	node4.setAttribute('width', '60px');
	newNode.appendChild(node4);

	node5 = document.createElement('td');
	node5.setAttribute('class', 'dvtCellLabel');
	node5.setAttribute('width', '30px');
	newNode.appendChild(node5);
	node5.innerHTML = '<a onclick="deleteColumnRow('+groupIndex+','+columnIndex+');" href="javascript:;">'+
					'<img src="themes/images/delete.gif" align="absmiddle" border="0"></a>';

	if(document.getElementById('fcol'+columnIndex)) updatefOptions(document.getElementById('fcol'+columnIndex), 'fop'+columnIndex);
	if(typeof(column_index_array[groupIndex]) == 'undefined') column_index_array[groupIndex] = [];
	column_index_array[groupIndex].push(columnIndex);
	advft_column_index_count++;

}

function addGroupConditionGlue(groupIndex) {

	var groupConditionGlueElement = document.getElementById('groupconditionglue_'+groupIndex);
	if(groupConditionGlueElement) {
		groupConditionGlueElement.innerHTML = "<select name='gpcon"+groupIndex+"' id='gpcon"+groupIndex+"' class='small'>"+
			"<option value='and'><?php echo getTranslatedString('LBL_CRITERIA_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+
			"<option value='or'><?php echo getTranslatedString('LBL_CRITERIA_OR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+
		"</select>";
	}
}

function addConditionGroup(parentNodeId) {

	for(var i=group_index_array.length - 1; i>=0; --i) {
		var prevGroupIndex = group_index_array[i];
		if(document.getElementById('conditiongroup_'+prevGroupIndex)) {
			addGroupConditionGlue(prevGroupIndex);
			break;
		}
	}

	var groupIndex = advft_group_index_count+1;
	var parentNode = document.getElementById(parentNodeId);

	var newNode = document.createElement('div');
	newNodeId = 'conditiongroup_'+groupIndex;
  	newNode.setAttribute('id',newNodeId);
  	newNode.setAttribute('name','conditionGroup');

  	newNode.innerHTML = "<table class='small crmTable' border='0' cellpadding='5' cellspacing='1' width='100%' valign='top' id='conditiongrouptable_"+groupIndex+"'>"+
			"<tr id='groupheader_"+groupIndex+"'>"+
				"<td colspan='5' align='right' class='cblds-t-align_right'>"+
					"<a href='javascript:void(0);' onclick='deleteGroup(\""+groupIndex+"\");'><img border=0 src=<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
 alt='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_GROUP'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_GROUP'];?>
'/></a>"+
				"</td>"+
			"</tr>"+
			"<tr id='groupfooter_"+groupIndex+"'>"+
				"<td colspan='5' align='left'>"+
					"<input type='button' class='crmbutton edit small' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEW_CONDITION'];?>
' onclick='addConditionRow(\""+groupIndex+"\")' />"+
				"</td>"+
			"</tr>"+
		"</table>"+
		"<table class='small' border='0' cellpadding='5' cellspacing='1' width='100%' valign='top'>"+
			"<tr><td align='center' class='cblds-t-align_center' id='groupconditionglue_"+groupIndex+"'>"+
			"</td></tr>"+
		"</table>";

	parentNode.appendChild(newNode);

	group_index_array.push(groupIndex);
	advft_group_index_count++;
}

function add_grouping_criteria(grouping_criteria) {
	if(grouping_criteria == null)
		return false;
	var grouping_criteria_length = Object.keys(grouping_criteria).length;

	if(grouping_criteria_length > 0) {
		for(var i = 1;i <= grouping_criteria_length; i++) {
			var group_columns = grouping_criteria[i].columns;
			addConditionGroup('adv_filter_div');
			for (var key in group_columns) {
				if (group_columns.hasOwnProperty(key)) {

					addConditionRow(i);
					var conditionColumnRowElement = document.getElementById('fcol'+advft_column_index_count);

					conditionColumnRowElement.value = group_columns[key].columnname;
					updatefOptions(conditionColumnRowElement, 'fop'+advft_column_index_count);
					document.getElementById('fop'+advft_column_index_count).value = group_columns[key].comparator;
					addRequiredElements(advft_column_index_count);
					<?php if ($_smarty_tpl->tpl_vars['SOURCE']->value == 'reports') {?>
						updateRelFieldOptions(conditionColumnRowElement, 'fval_'+advft_column_index_count);
					<?php }?>
					var columnvalue = group_columns[key].value;
					if(group_columns[key].comparator == 'bw' && columnvalue != '') {
						var values = columnvalue.split(",");
						document.getElementById('fval'+advft_column_index_count).value = values[0];
						if(values.length == 2 && document.getElementById('fval_ext'+advft_column_index_count))
							document.getElementById('fval_ext'+advft_column_index_count).value = values[1];
					} else {
						document.getElementById('fval'+advft_column_index_count).value = columnvalue;
					}
                                        var keyprev=key-1;
					if(document.getElementById('fcon'+keyprev))
						document.getElementById('fcon'+keyprev).value = group_columns[keyprev].column_condition;
				}
			}
                        var iprev=i-1;
			if(document.getElementById('gpcon'+iprev))
				document.getElementById('gpcon'+iprev).value = grouping_criteria[iprev].condition;
		}
	} else {
		addNewConditionGroup('adv_filter_div');
	}
}
<?php echo '</script'; ?>
>

<div style="overflow:auto;margin-top: 30px;" id='adv_filter_div' name='adv_filter_div'>
	<table class="small" border="0" cellpadding="5" cellspacing="0" width="100%">
		<tr>
			<td class="detailedViewHeader" align="left"><b><?php echo getTranslatedString('LBL_ADVANCED_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="button" class="crmbutton create small" value="<?php echo getTranslatedString('LBL_NEW_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="addNewConditionGroup('adv_filter_div')" />
			</td>
		</tr>
	</table>
<?php echo '<script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['SOURCE']->value != 'reports') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['CRITERIA_GROUPS']->value) && count($_smarty_tpl->tpl_vars['CRITERIA_GROUPS']->value) > 0) {?>
			add_grouping_criteria(<?php echo json_encode($_smarty_tpl->tpl_vars['CRITERIA_GROUPS']->value);?>
);
		<?php } else { ?>
			addNewConditionGroup('adv_filter_div');
		<?php }?>
	<?php }
echo '</script'; ?>
>
</div>
<?php }
}
