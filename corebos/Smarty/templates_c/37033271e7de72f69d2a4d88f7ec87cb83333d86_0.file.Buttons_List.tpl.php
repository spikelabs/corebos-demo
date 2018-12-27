<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/Buttons_List.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc7a64c0_10767990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37033271e7de72f69d2a4d88f7ec87cb83333d86' => 
    array (
      0 => '/www/Smarty/templates/Buttons_List.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfbc7a64c0_10767990 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
.js"><?php echo '</script'; ?>
>
<?php if (empty($_smarty_tpl->tpl_vars['Module_Popup_Edit']->value)) {?>
<TABLE id="LB_buttonlist" border=0 cellspacing=0 cellpadding=0 width=100% class=small>
<tr><td style="height:2px"></td></tr>
<tr>
	<?php if (empty($_smarty_tpl->tpl_vars['CATEGORY']->value)) {?>
		<?php $_smarty_tpl->_assignInScope('CATEGORY', '');?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['CATEGORY']->value == 'Settings' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar4You') {?>
	<?php $_smarty_tpl->_assignInScope('action', "index");?>
	<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('action', "ListView");?>
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('MODULELABEL', getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
	<td style="padding-left:10px;padding-right:50px" class="moduleName" nowrap><a class="hdrLink" href="index.php?action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MODULELABEL']->value;?>
</a></td>
	<td width=100% nowrap>
		<table border="0" cellspacing="0" cellpadding="0" >
		<tr>
		<td class="sep1" style="width:1px;"></td>
		<td class=small >
			<!-- Add and Search -->
			<table border=0 cellspacing=0 cellpadding=0>
			<tr>
			<td>
				<table border=0 cellspacing=0 cellpadding=5>
				<tr>
					<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['CreateView'] == 'yes' && ($_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar4You')) {?>
						<td id="LB_AddButton" class="LB_Button" style="padding-right:0px;padding-left:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Add.gif" alt="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADD_EVENT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADD_EVENT'];?>
" border=0 <?php echo $_smarty_tpl->tpl_vars['ADD_ONMOUSEOVER']->value;?>
></td>
					<?php } elseif ($_smarty_tpl->tpl_vars['CHECK']->value['CreateView'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Emails') {?>
						<td id="LB_AddButton" class="LB_Button" style="padding-right:0px;padding-left:10px;"><a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=EditView&return_action=DetailView&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Add.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['SINGLE_MOD']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['SINGLE_MOD']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border=0></a></td>
					<?php } else { ?>
						<td id="LB_AddButtonFaded" class="LB_Button" style="padding-right:0px;padding-left:10px;"><img src="<?php echo vtiger_imageurl('btnL3Add-Faded.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border=0></td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['index'] == 'yes' && ($_REQUEST['action'] == 'ListView' || $_REQUEST['action'] == 'index') && $_smarty_tpl->tpl_vars['MODULE']->value != 'Emails' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Calendar4You') {?>
						<td id="LB_SearchButton" class="LB_Button" style="padding-right:10px"><a href="javascript:;" onClick="searchshowhide('searchAcc','advSearch');mergehide('mergeDup')" ><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Search.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_ALT'];
echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_TITLE'];
echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border=0></a></td>
					<?php } else { ?>
						<td id="LB_SearchButtonFaded" class="LB_Button" style="padding-right:10px"><img src="<?php echo vtiger_imageurl('btnL3Search-Faded.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border=0></td>
					<?php }?>
				</tr>
				</table>
			</td>
			</tr>
			</table>
		</td>
		<td style="width:20px;" class="LB_Divider">&nbsp;</td>
		<td class="small">
			<!-- Calendar, Clock and Calculator -->
				<table border=0 cellspacing=0 cellpadding=5>
				<tr>
					<?php if ($_smarty_tpl->tpl_vars['CALENDAR_DISPLAY']->value == 'true') {?>
						<?php if ($_smarty_tpl->tpl_vars['CATEGORY']->value == 'Settings' || $_smarty_tpl->tpl_vars['CATEGORY']->value == 'Tools' || $_smarty_tpl->tpl_vars['CATEGORY']->value == 'Analytics') {?>
							<?php $_smarty_tpl->_assignInScope('PTCATEGORY', 'My Home Page');?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('PTCATEGORY', $_smarty_tpl->tpl_vars['CATEGORY']->value);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['Calendar'] == 'yes') {?>
							<td id="LB_CalButton" class="LB_Button" style="padding-right:0px;padding-left:10px;"><a href="javascript:;" onclick="fnvshobj(this,'miniCal');getITSMiniCal('');"><img src="<?php echo vtiger_imageurl('btnL3Calendar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALENDAR_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALENDAR_TITLE'];?>
" border=0></a></td>
						<?php } else { ?>
							<td id="LB_CalButtonFaded" class="LB_Button" style="padding-right:0px;padding-left:10px;"><img src="<?php echo vtiger_imageurl('btnL3Calendar-Faded.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['WORLD_CLOCK_DISPLAY']->value == 'true') {?>
						<td id="LB_ClockButton" class="LB_Button" style="padding-right:0px"><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Clock.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOCK_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOCK_TITLE'];?>
" border=0 onClick="fnvshobj(this,'wclock');"></a></td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['CALCULATOR_DISPLAY']->value == 'true') {?>
						<td id="LB_CalcButton" class="LB_Button" style="padding-right:0px"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Calc.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALCULATOR_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALCULATOR_TITLE'];?>
" border=0 onClick="fnvshobj(this,'calculator_cont');fetch_calc();"></a></td>
					<?php }?>
					<td id="LB_TrackButton" class="LB_Button" style="padding-right:10px"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Tracker.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LAST_VIEWED'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LAST_VIEWED'];?>
" border=0 onClick="fnvshobj(this,'tracker');"></td>
				</tr>
				</table>
		</td>
		<td style="width:20px;" class="LB_Divider">&nbsp;</td>
		<td class="small">
			<!-- Import / Export -->
			<table border=0 cellspacing=0 cellpadding=5>
			<tr>
			<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['Import'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Documents' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Calendar' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Calendar4You') {?>
				<td id="LB_ImportButton" class="LB_Button" style="padding-right:0px;padding-left:10px;"><a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Import&step=1&return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=index&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
tbarImport.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" border="0"></a></td>
			<?php } elseif ($_smarty_tpl->tpl_vars['CHECK']->value['Import'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar') {?>
				<td id="LB_ImportButton" class="LB_Button" style="padding-right:10px"><a name='import_link' href="javascript:void(0);" onclick="fnvshobj(this,'CalImport');" ><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
tbarImport.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" border="0"></a></td>
			<?php } else { ?>
				<td id="LB_ImportButtonFaded" class="LB_Button" style="padding-right:0px;padding-left:10px;"><img src="<?php echo vtiger_imageurl('tbarImport-Faded.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"></td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['Export'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Calendar' && $_smarty_tpl->tpl_vars['MODULE']->value != 'Calendar4You') {?>
				<td id="LB_ExportButton" class="LB_Button" style="padding-right:10px"><a name='export_link' href="javascript:void(0)" onclick="return selectedRecords('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
tbarExport.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EXPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EXPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" border="0"></a></td>
			<?php } elseif ($_smarty_tpl->tpl_vars['CHECK']->value['Export'] == 'yes' && $_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar') {?>
				<td id="LB_ExportButton" class="LB_Button" style="padding-right:10px"><a name='export_link' href="javascript:void(0);" onclick="fnvshobj(this,'CalExport');" ><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
tbarExport.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EXPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EXPORT'];?>
 <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" border="0"></a></td>
			<?php } else { ?>
				<td id="LB_ExportButtonFaded" class="LB_Button" style="padding-right:10px"><img src="<?php echo vtiger_imageurl('tbarExport-Faded.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"></td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['DuplicatesHandling'] == 'yes' && ($_REQUEST['action'] == 'ListView' || $_REQUEST['action'] == 'index')) {?>
				<td id="LB_FindDuplButton" class="LB_Button" style="padding-right:10px"><a href="javascript:;" onClick="mergeshowhide('mergeDup');searchhide('searchAcc','advSearch');"><img src="<?php echo vtiger_imageurl('findduplicates.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FIND_DUPLICATES'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FIND_DUPLICATES'];?>
" border="0"></a></td>
			<?php } else { ?>
				<td id="LB_FindDuplButtonFaded" class="LB_Button" style="padding-right:10px"><img src="<?php echo vtiger_imageurl('FindDuplicates-Faded.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"></td>
			<?php }?>
			</tr>
			</table>
		<td style="width:20px;" class="LB_Divider">&nbsp;</td>
		<td class="small">
				<table border=0 cellspacing=0 cellpadding=5>
				<tr>
				<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar4You') {?>
					<?php if ($_smarty_tpl->tpl_vars['MODE']->value != 'DetailView' && $_smarty_tpl->tpl_vars['MODE']->value != 'EditView' && $_smarty_tpl->tpl_vars['MODE']->value != 'RelatedList') {?>
					<td id="LB_ITSCalSettings" class="LB_Button" style="padding-left:50px;"><a href="javascript:;" onclick="fnvshobj(this,'calSettings'); getITSCalSettings();"><img src="themes/softed/images/tbarSettings.gif" alt="Settings" title="Settings" align="absmiddle" border="0"></a></td>
					<?php }?>
					<td id="LB_TaskIcon" class="LB_Button"><a href='index.php?module=cbCalendar&action=index'><img src="themes/images/tasks-icon.png" alt="<?php echo getTranslatedString('Tasks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo getTranslatedString('Tasks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" border="0"></a></td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['moduleSettings'] == 'yes') {?>
					<td id="LB_ModSettingsButton" class="LB_Button" style="padding-left:10px;"><a href='index.php?module=Settings&action=ModuleManager&module_settings=true&formodule=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&parenttab=Settings'><img src="<?php echo vtiger_imageurl('settingsBox.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SETTINGS'];?>
" title="<?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SETTINGS'];?>
" border="0"></a></td>
				<?php }?>
				</tr>
				</table>
		</td>
		</tr>
		</table>
	</td>
</tr>
<tr><td style="height:2px"></td></tr>
</TABLE>
<?php }
}
}
