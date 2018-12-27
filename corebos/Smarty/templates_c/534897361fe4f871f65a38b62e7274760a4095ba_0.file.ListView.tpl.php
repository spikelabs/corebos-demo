<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:28
  from '/www/Smarty/templates/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfbc709927_57338726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534897361fe4f871f65a38b62e7274760a4095ba' => 
    array (
      0 => '/www/Smarty/templates/ListView.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Buttons_List.tpl' => 1,
    'file:AdvanceFilter.tpl' => 1,
    'file:MergeColumns.tpl' => 1,
    'file:ListViewEntries.tpl' => 1,
    'file:DocumentsListViewEntries.tpl' => 1,
  ),
),false)) {
function content_5c24cfbc709927_57338726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/Smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
echo '<script'; ?>
 type="text/javascript" src="include/js/ListView.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/Merge.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/dtlviewajax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/FieldDependencies.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/FieldDepFunc.js"><?php echo '</script'; ?>
>
<?php if (!isset($_smarty_tpl->tpl_vars['Document_Folder_View']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('Document_Folder_View', 0);
}
echo '<script'; ?>
>var Document_Folder_View=<?php echo $_smarty_tpl->tpl_vars['Document_Folder_View']->value;?>
;<?php echo '</script'; ?>
>
		<?php $_smarty_tpl->_subTemplateRender('file:Buttons_List.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
								<div id="searchingUI" style="display:none;">
										<table border=0 cellspacing=0 cellpadding=0 width=100<?php echo '%>';?>
										<tr>
												<td align=center>
												<img src="<?php echo vtiger_imageurl('searching.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCHING'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCHING'];?>
">
												</td>
										</tr>
										</table>
								</div>
						</td>
				</tr>
				</table>
		</td>
</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
	<tr>
	<td valign=top><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
	<td class="showPanelBg" valign="top" width=100% style="padding:10px;">
	<!-- SIMPLE SEARCH -->
<div id="searchAcc" style="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_SEARCH_PANEL_STATUS']->value;?>
;position:relative;">
<form name="basicSearch" method="post" action="index.php" onSubmit="document.basicSearch.searchtype.searchlaunched='basic';return callSearch('Basic');">
<table width="100%" cellpadding="5" cellspacing="0" class="searchUIBasic small" align="center" border=0>
	<tr>
		<td class="searchUIName small" nowrap align="left">
		<span class="moduleName"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH'];?>
</span><br><span class="small"><a href="#" onClick="fnhide('searchAcc');show('advSearch');document.basicSearch.searchtype.value='advance';document.basicSearch.searchtype.searchlaunched='';"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GO_TO'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_ADVANCED_SEARCH'];?>
</a></span>
		<!-- <img src="themes/images/basicSearchLens.gif" align="absmiddle" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_BASIC_SEARCH'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_BASIC_SEARCH'];?>
" border=0>&nbsp;&nbsp;-->
		</td>
		<td class="small" nowrap align=right><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_FOR'];?>
</b></td>
		<td class="small"><input type="text" class="txtBox" style="width:120px" name="search_text"></td>
		<td class="small" nowrap><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IN'];?>
</b>&nbsp;</td>
		<td class="small" nowrap>
			<div id="basicsearchcolumns_real">
			<select name="search_field" id="bas_searchfield" class="txtBox" style="width:150px">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SEARCHLISTHEADER']->value),$_smarty_tpl);?>

			</select>
			</div>
			<input type="hidden" name="searchtype" value="BasicSearch">
			<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" id="curmodule">
			<input name="maxrecords" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MAX_RECORDS']->value;?>
" id='maxrecords'>
			<input type="hidden" name="parenttab" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
">
			<input type="hidden" name="action" value="index">
			<input type="hidden" name="query" value="true">
			<input type="hidden" name="search_cnt">
		</td>
		<td class="small" nowrap width=40% >
			<input name="submit" type="button" class="crmbutton small create" onClick="callSearch('Basic');document.basicSearch.searchtype.searchlaunched='basic';" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_NOW_BUTTON'];?>
 ">&nbsp;
		</td>
		<td class="small closeX" valign="top" onMouseOver="this.style.cursor='pointer';" onclick="searchshowhide('searchAcc','advSearch');document.basicSearch.searchtype.searchlaunched='';">[x]</td>
	</tr>
	<tr>
		<td colspan="7" align="center" class="small">
			<table border=0 cellspacing=0 cellpadding=0 width=100<?php echo '%>';?>
				<tr>
				<?php echo $_smarty_tpl->tpl_vars['ALPHABETICAL']->value;?>

				</tr>
			</table>
		</td>
	</tr>
</table>
</form><br class="searchbreak">
</div>
<!-- ADVANCED SEARCH -->
<div id="advSearch" style="display:none;">
<form name="advSearch" method="post" action="index.php" onSubmit="document.basicSearch.searchtype.searchlaunched='advance';return callSearch('Advanced');">
	<table cellspacing=0 cellpadding=5 width=100% class="searchUIAdv1 small" align="center" border=0>
		<tr>
			<td class="searchUIName small" nowrap align="left"><span class="moduleName"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH'];?>
</span><br><span class="small"><a href="#" onClick="show('searchAcc');fnhide('advSearch');document.basicSearch.searchtype.searchlaunched='';"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GO_TO'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_BASIC_SEARCH'];?>
</a></span></td>
			<td class="small closeX" align="right" valign="top" onMouseOver="this.style.cursor='pointer';" onclick="searchshowhide('searchAcc','advSearch');document.basicSearch.searchtype.searchlaunched='';">[x]</td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="0" width="100%" align="center" class="searchUIAdv2 small" border=0>
		<tr>
			<td align="center" class="small" width=90<?php echo '%>';?>
				<?php $_smarty_tpl->_subTemplateRender('file:AdvanceFilter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SOURCE'=>'customview','COLUMNS_BLOCK'=>$_smarty_tpl->tpl_vars['FIELDNAMES']->value), 0, false);
?>
			</td>
		</tr>
	</table>

	<table border=0 cellspacing=0 cellpadding=5 width=100% class="searchUIAdv3 small" align="center">
		<tr>
			<td align="center" class="small"><input type="button" class="crmbutton small create" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_NOW_BUTTON'];?>
 " onClick="callSearch('Advanced');document.basicSearch.searchtype.searchlaunched='advance';">
			</td>
		</tr>
	</table>
</form><br>
</div>

<div id="mergeDup" style="z-index:1;display:none;position:relative;">
	<?php $_smarty_tpl->_subTemplateRender("file:MergeColumns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
	<!-- PUBLIC CONTENTS STARTS-->
	<div id="ListViewContents" class="small" style="width:100%;">
	<?php if ($_smarty_tpl->tpl_vars['MODULE']->value != "Documents" || $_smarty_tpl->tpl_vars['Document_Folder_View']->value == 0) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:ListViewEntries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:DocumentsListViewEntries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
	</div>

	</td>
	<td valign=top><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
	</tr>
</table>

<!-- MassEdit Feature -->
<div id="massedit" class="layerPopup" style="display:none;width:80%;">
<table width="100%" border="0" cellpadding="3" cellspacing="0" class="layerHeadingULine">
<tr>
	<td class="layerPopupHeading" align="left" width="60%"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MASSEDIT_FORM_HEADER'];?>
</td>
	<td>&nbsp;</td>
	<td align="right" class="cblds-t-align_right" width="40%"><img onClick="fninvsh('massedit');" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" style="cursor:pointer;" src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0"></td>
</tr>
</table>
<div id="massedit_form_div"></div>

</div>
<div id="relresultssection" style="visibility:hidden;display:none;" class="slds-masseditprogress">
<div class="slds-grid">
<div class="slds-col">
	<div class="slds-page-header" role="banner">
		<div class="slds-col slds-has-flexi-truncate">
			<div class="slds-media slds-no-space slds-grow">
				<div class="slds-media__figure">
					<svg aria-hidden="true" class="slds-icon slds-icon-standard-user">
						<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#relate"></use>
					</svg>
				</div>
				<div class="slds-media__body">
					<h1 class="slds-page-header__title slds-m-right_small slds-align-middle slds-truncate"
						title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['Updated'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['Updated'];?>
...</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="slds-col slds-page-header" style="width:50%;">
<progress id='progressor' value="0" max='100' style="width:90%;height:14px;"></progress>
<span id="percentage" style="text-align:left; display:block; margin-top:5px;">0</span>
</div>
<div class="slds-col slds-page-header slds-p-top_small" style="width:10%;">
	<div class="slds-icon_container slds-icon_container_circle slds-p-around_xx-small slds-icon-action-close">
		<svg class="slds-icon slds-icon_xx-small" aria-hidden="true" onClick="fninvsh('relresultssection');">
			<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#close"></use>
		</svg>
		<span class="slds-assistive-text"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
</span>
	</div>
</div>
</div>
<div class="slds-grid">
<div class="slds-col">
<div id="relresults" style="border:1px solid #000; padding:10px; width:90%; height:450px; overflow:auto; background:#eee; margin:auto; margin-top:10px;"></div>
</div>
</div>
</div>
<!-- END -->
<?php if (hasEmailField($_smarty_tpl->tpl_vars['MODULE']->value)) {?>
<form name="SendMail" method="post"><div id="sendmail_cont" style="z-index:100001;position:absolute;"></div></form>
<?php }
if ((vt_hasRTE())) {
echo '<script'; ?>
 type="text/javascript" src="include/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php }
}
}
