<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/ListViewEntries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc8870c8_02799224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e19cb7d9350de996c741066d5d3b2e8ece9a21' => 
    array (
      0 => '/www/Smarty/templates/ListViewEntries.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:applicationmessage.tpl' => 1,
    'file:ListViewButtons.tpl' => 2,
    'file:ListViewSearchBlock.tpl' => 1,
  ),
),false)) {
function content_5c24cfbc8870c8_02799224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/Smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
if (!empty($_REQUEST['ajax'])) {?>
&#&#&#<?php if (isset($_smarty_tpl->tpl_vars['ERROR']->value)) {
echo $_smarty_tpl->tpl_vars['ERROR']->value;
}?>&#&#&#
<?php } else {
$_smarty_tpl->_subTemplateRender('file:applicationmessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
echo '<script'; ?>
 type="text/javascript" src="include/js/ListView.js"><?php echo '</script'; ?>
>
<form name="massdelete" method="POST" id="massdelete" onsubmit="VtigerJS_DialogBox.block();">
	<input name='search_url' id="search_url" type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['SEARCH_URL']->value;?>
'>
	<input name="idlist" id="idlist" type="hidden">
	<input name="change_owner" type="hidden">
	<input name="change_status" type="hidden">
	<input name="action" type="hidden">
	<input name="where_export" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['export_where']->value;?>
">
	<input name="step" type="hidden">
	<input name="excludedRecords" type="hidden" id="excludedRecords" value="">
	<input name="numOfRows" id="numOfRows" type="hidden" value="">
	<input name="allids" type="hidden" id="allids" value="<?php if (isset($_smarty_tpl->tpl_vars['ALLIDS']->value)) {
echo $_smarty_tpl->tpl_vars['ALLIDS']->value;
}?>">
	<input name="selectedboxes" id="selectedboxes" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTEDIDS']->value;?>
">
	<input name="allselectedboxes" id="allselectedboxes" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ALLSELECTEDIDS']->value;?>
">
	<input name="current_page_boxes" id="current_page_boxes" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PAGE_BOXES']->value;?>
">
	<!-- List View Master Holder starts -->
	<table border=0 cellspacing=1 cellpadding=0 width=100% class="lvtBg">
		<tr>
			<td>
				<!-- List View's Buttons and Filters starts -->
				<table width="100%" class="layerPopupTransport">
					<tr>
						<td width="25%" class="small" nowrap align="left"><?php echo $_smarty_tpl->tpl_vars['recordListRange']->value;?>
</td>
						<td><table align="center">
								<tr>
									<td>
										<!-- Filters -->
										<?php if (empty($_smarty_tpl->tpl_vars['HIDE_CUSTOM_LINKS']->value) || $_smarty_tpl->tpl_vars['HIDE_CUSTOM_LINKS']->value != '1') {?>
										<table cellpadding="5" cellspacing="0" class="small cblds-table-border_sep cblds-table-bordersp_medium">
											<tr>
												<td style="padding-left:5px;padding-right:5px" align="center">
													<b><font size=2><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_VIEW'];?>
</font></b> <SELECT NAME="viewname" id="viewname" class="small" style="max-width:240px;" onchange="showDefaultCustomView(this,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_OPTION']->value;?>
</SELECT>
												</td>
												<?php if (isset($_smarty_tpl->tpl_vars['ALL']->value) && $_smarty_tpl->tpl_vars['ALL']->value == 'All') {?>
												<td style="padding-left:5px;padding-right:5px" align="center"><a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=CustomView&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_CREATEVIEW'];?>
</a>
													<span class="small">|</span>
													<span class="small" disabled><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_EDIT'];?>
</span>
													<span class="small">|</span>
													<span class="small" disabled><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_DELETE'];?>
</span>
												</td>
												<?php } else { ?>
												<td style="padding-left:5px;padding-right:5px" align="center">
													<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=CustomView&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_CREATEVIEW'];?>
</a>
													<span class="small">|</span>
													<?php if ($_smarty_tpl->tpl_vars['CV_EDIT_PERMIT']->value != 'yes' || $_smarty_tpl->tpl_vars['SQLERROR']->value) {?>
														<span class="small" disabled><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_EDIT'];?>
</span>
													<?php } else { ?>
														<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=CustomView&record=<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_EDIT'];?>
</a>
													<?php }?>
													<span class="small">|</span>
													<?php if ($_smarty_tpl->tpl_vars['CV_DELETE_PERMIT']->value != 'yes') {?>
														<span class="small" disabled><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_DELETE'];?>
</span>
													<?php } else { ?>
														<a href="javascript:confirmdelete('index.php?module=CustomView&action=Delete&dmodule=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_CV_DELETE'];?>
</a>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_PERMISSION']->value['ChangedStatus'] != '' && $_smarty_tpl->tpl_vars['CUSTOMVIEW_PERMISSION']->value['Label'] != '') {?>
														<span class="small">|</span>
														<a href="#" id="customstatus_id" onClick="ChangeCustomViewStatus(<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_PERMISSION']->value['Status'];?>
,<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_PERMISSION']->value['ChangedStatus'];?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_PERMISSION']->value['Label'];?>
</a>
													<?php }?>
												</td>
												<?php }?>
											</tr>
										</table>
										<!-- Filters END-->
										<?php }?>
									</td>
								</tr>
							</table>
						</td>
						<!-- Page Navigation -->
						<td nowrap align="right" width="25%" class="cblds-t-align_right">
							<table border=0 cellspacing=0 cellpadding=0 class="small" style="display: inline-block;">
								<tr><?php echo $_smarty_tpl->tpl_vars['NAVIGATION']->value;?>
</tr>
							</table>
						</td>
					</tr>
				</table>
				<table border=0 cellspacing=0 cellpadding=2 width=100% class="small cblds-table-border_sep cblds-table-bordersp_small">
					<tr>
						<!-- Buttons -->
						<td style="padding-right:20px" nowrap><?php $_smarty_tpl->_subTemplateRender('file:ListViewButtons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></td>
					</tr>
				</table>
				<!-- List View's Buttons and Filters ends -->

			<div>
			<table border=0 cellspacing=1 cellpadding=3 width=100% class="lvt small">
			<!-- Table Headers -->
			<tr>
				<td class="lvtCol"><input type="checkbox" name="selectall" id="selectCurrentPageRec" onClick=toggleSelect_ListView(this.checked,"selected_id")></td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTHEADER']->value, 'header', false, NULL, 'listviewforeach', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_listviewforeach']->value['iteration']++;
?>
					<td class="lvtCol"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
			<?php $_smarty_tpl->_subTemplateRender("file:ListViewSearchBlock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SOURCE'=>'customview','COLUMNS_BLOCK'=>$_smarty_tpl->tpl_vars['FIELDNAMES']->value), 0, false);
?>
			<tr>
				<td id="linkForSelectAll" class="linkForSelectAll" style="display:none;" colspan=15>
					<span id="selectAllRec" class="selectall" style="display:inline;" onClick="toggleSelectAll_Records('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
',true,'selected_id')"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT_ALL'];?>
 <span id="count"> </span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_RECORDS_IN'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
					<span id="deSelectAllRec" class="selectall" style="display:none;" onClick="toggleSelectAll_Records('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
',false,'selected_id')"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DESELECT_ALL'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
				</td>
			</tr>
			<!-- Table Contents -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTENTITY']->value, 'entity', false, 'entity_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entity_id']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
				<tr bgcolor=white onMouseOver="this.className='lvtColDataHover'" onMouseOut="this.className='lvtColData'" id="row_<?php echo $_smarty_tpl->tpl_vars['entity_id']->value;?>
">
					<td width="2%"><?php if ($_smarty_tpl->tpl_vars['entity_id']->value > 0) {?><input type="checkbox" NAME="selected_id" id="<?php echo $_smarty_tpl->tpl_vars['entity_id']->value;?>
" value= '<?php echo $_smarty_tpl->tpl_vars['entity_id']->value;?>
' onClick="check_object(this)"><?php } else { ?><span class="listview_row_sigma">&Sigma;</span><?php }?></td>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entity']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
												<td onmouseover="vtlib_listview.trigger('cell.onmouseover', this)" onmouseout="vtlib_listview.trigger('cell.onmouseout', this)"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			<?php
}
} else {
?>
			<tr>
			<td style="background-color:#efefef;height:340px" align="center" colspan="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_listviewforeach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listviewforeach']->value['iteration'] : null)+1;?>
">
			<div id="no_entries_found" style="border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 45%; position: relative;">
				<?php $_smarty_tpl->_assignInScope('vowel_conf', 'LBL_A');?>
				<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Invoice') {?>
					<?php $_smarty_tpl->_assignInScope('vowel_conf', 'LBL_AN');?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('MODULE_CREATE', $_smarty_tpl->tpl_vars['SINGLE_MOD']->value);?>
				<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'HelpDesk') {?>
					<?php $_smarty_tpl->_assignInScope('MODULE_CREATE', 'Ticket');?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['SQLERROR']->value) {?>
					<table border="0" cellpadding="5" cellspacing="0" width="98%">
					<tr>
						<td rowspan="2" width="25%"><img src="<?php echo vtiger_imageurl('empty.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="60" width="61"></td>
						<td style="border-bottom: 1px solid rgb(204, 204, 204);" nowrap="nowrap" width="75%">
							<span class="genHeaderSmall"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</span>
						</td>
					</tr>
					<tr>
						<td class="small" align="left" nowrap="nowrap"><?php echo getTranslatedString('ERROR_GETTING_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
					</tr>
					</table>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['EditView'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Emails') {?>
						<table border="0" cellpadding="5" cellspacing="0" width="98%">
						<tr>
							<td rowspan="2" width="25%"><img src="<?php echo vtiger_imageurl('empty.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" height="60" width="61"></td>
							<td style="border-bottom: 1px solid rgb(204, 204, 204);" nowrap="nowrap" width="75%">
								<span class="genHeaderSmall"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</span>
							</td>
						</tr>
						<tr>
							<td class="small" align="left" nowrap="nowrap">
								<?php if ($_smarty_tpl->tpl_vars['MODULE']->value != 'Calendar') {?>
									<b><a class="nef_action" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=EditView&return_action=DetailView&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value[$_smarty_tpl->tpl_vars['vowel_conf']->value];?>

										<?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE_CREATE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

										<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['Import'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Documents') {?>
										</a></b><br>
										<b><a class="nef_action" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Import&step=1&return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=ListView&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

										<?php }?>
									</a></b><br>
								<?php } else { ?>
									<b><a class="nef_action" href="index.php?module=Calendar4You&amp;action=EventEditView&amp;return_module=Calendar4You&amp;activity_mode=Events&amp;return_action=DetailView&amp;parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_AN'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['Event'];?>
</a></b><br>
									<b><a class="nef_action" href="index.php?module=Calendar4You&amp;action=EventEditView&amp;return_module=Calendar4You&amp;activity_mode=Task&amp;return_action=DetailView&amp;parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_A'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['Task'];?>
</a></b>
								<?php }?>
							</td>
						</tr>
						</table>
					<?php } else { ?>
						<table border="0" cellpadding="5" cellspacing="0" width="98%">
						<tr>
							<td rowspan="2" width="25%"><img src="<?php echo vtiger_imageurl('denied.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
							<td style="border-bottom: 1px solid rgb(204, 204, 204);" nowrap="nowrap" width="75%"><span class="genHeaderSmall"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</span></td>
						</tr>
						<tr>
							<td class="small" align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_YOU_ARE_NOT_ALLOWED_TO_CREATE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value[$_smarty_tpl->tpl_vars['vowel_conf']->value];?>

							<?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE_CREATE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

							<br>
							</td>
						</tr>
						</table>
					<?php }?>
				<?php }?> 			</div>
			</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
			</div>

			<table border=0 cellspacing=0 cellpadding=2 width=100<?php echo '%>';?>
			<tr>
				<td style="padding-right:20px" nowrap><?php $_smarty_tpl->_subTemplateRender('file:ListViewButtons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td>
				<td align="right" width=40<?php echo '%>';?>
					<table border=0 cellspacing=0 cellpadding=0 class="small">
					<tr>
						<?php if (!empty($_smarty_tpl->tpl_vars['WORDTEMPLATES']->value)) {?>
							<?php if (count($_smarty_tpl->tpl_vars['WORDTEMPLATES']->value) > 0) {?>
								<td><?php echo getTranslatedString('LBL_SELECT_TEMPLATE_TO_MAIL_MERGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
								<td style="padding-left:5px;padding-right:5px">
									<select class="small" name="mergefile">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WORDTEMPLATES']->value, '_TEMPLATE_NAME', false, '_TEMPLATE_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_TEMPLATE_ID']->value => $_smarty_tpl->tpl_vars['_TEMPLATE_NAME']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_NAME']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td>
									<input title="<?php echo getTranslatedString('LBL_MERGE_BUTTON_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" accessKey="<?php echo getTranslatedString('LBL_MERGE_BUTTON_KEY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"
										class="crmbutton small create" onclick="return massMerge('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')" type="submit" name="Merge" value="<?php echo getTranslatedString('LBL_MERGE_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
								</td>
							<?php } elseif ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 'true') {?>
								<td>
									<a href='index.php?module=Settings&action=upload&tempModule=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&parenttab=Settings'><?php echo getTranslatedString('LBL_CREATE_MERGE_TEMPLATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
								</td>
							<?php }?>
						<?php }?>
					</tr>
					</table>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td class="small" nowrap align="left"><?php echo $_smarty_tpl->tpl_vars['recordListRange']->value;?>
</td>
						<td nowrap width="50%" align="right" class="cblds-t-align_right">
							<table border=0 cellspacing=0 cellpadding=0 class="small" style="display: inline-block;">
							<tr><?php echo $_smarty_tpl->tpl_vars['NAVIGATION']->value;?>
</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
<div id="basicsearchcolumns" style="display:none;"><select name="search_field" id="bas_searchfield" class="txtBox" style="width:150px"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SEARCHLISTHEADER']->value),$_smarty_tpl);?>
</select></div><?php }
}
