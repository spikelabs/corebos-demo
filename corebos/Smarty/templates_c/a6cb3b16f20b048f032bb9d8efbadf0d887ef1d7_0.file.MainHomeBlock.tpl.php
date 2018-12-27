<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:16
  from '/www/Smarty/templates/Home/MainHomeBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfb0018af7_90308328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6cb3b16f20b048f032bb9d8efbadf0d887ef1d7' => 
    array (
      0 => '/www/Smarty/templates/Home/MainHomeBlock.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfb0018af7_90308328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('homepagedashboard_title', getTranslatedString('Home Page Dashboard','Home'));
$_smarty_tpl->_assignInScope('keymetrics_title', getTranslatedString('Key Metrics','Home'));
$_smarty_tpl->_assignInScope('stitle', $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle']);
echo '<script'; ?>
 type="text/javascript">var vtdashboard_defaultDashbaordWidgetTitle = '<?php echo $_smarty_tpl->tpl_vars['homepagedashboard_title']->value;?>
';<?php echo '</script'; ?>
>
<div id="stuff_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="MatrixLayer <?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] == $_smarty_tpl->tpl_vars['homepagedashboard_title']->value) {?>twoColumnWidget<?php }?>" style="float:left;overflow-x:<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Tag Cloud") {?>hidden<?php } else { ?>auto<?php }?>;overflow-y:<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Tag Cloud") {?>hidden<?php } else { ?>auto<?php }?>;">
	<table width="100%" cellpadding="0" cellspacing="0" class="small" style="padding-right:0px;padding-left:0px;padding-top:0px;">
		<tr id="headerrow_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="headerrow">
			<td align="left" class="homePageMatrixHdr" style="height:30px;" nowrap width=60<?php echo '%>';?><b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['stitle']->value;?>
</b></td>
			<td align="right" class="homePageMatrixHdr" style="height:30px;" width=5<?php echo '%>';?>
				<span id="refresh_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" style="position:relative;">&nbsp;&nbsp;</span>
			</td>
			<td align="right" class="homePageMatrixHdr" style="height:30px;" width=35% nowrap>

<?php if (($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Default" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != $_smarty_tpl->tpl_vars['keymetrics_title']->value) && ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Default" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != $_smarty_tpl->tpl_vars['homepagedashboard_title']->value) && ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Tag Cloud") && ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Notebook")) {?>
				<a style='cursor:pointer;' onclick="showEditrow(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
)">
					<img src="<?php echo vtiger_imageurl('windowSettings.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" hspace="2" align="absmiddle"/>
				</a>
<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] == $_smarty_tpl->tpl_vars['keymetrics_title']->value) {?>
				<a style='cursor:pointer;' href="index.php?module=Home&action=HomeBlock&homestuffid=<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
&blockstufftype=<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
" target="_blank">
					<img src="<?php echo vtiger_imageurl('webmail_uparrow.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="Open" title="Open"  hspace="2" align="absmiddle"/>
				</a>
			<?php }?>
				<img src="<?php echo vtiger_imageurl('windowSettings-off.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" hspace="2" align="absmiddle"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] == $_smarty_tpl->tpl_vars['homepagedashboard_title']->value) {?>
				<a style='cursor:pointer;' onclick="fetch_homeDB(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
);">
					<img src="<?php echo vtiger_imageurl('windowRefresh.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REFRESH'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REFRESH'];?>
" hspace="2" align="absmiddle"/>
				</a>
<?php } else { ?>
				<a style='cursor:pointer;' onclick="loadStuff(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
');">
					<img src="<?php echo vtiger_imageurl('windowRefresh.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REFRESH'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REFRESH'];?>
" hspace="2" align="absmiddle"/>
				</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Default" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Tag Cloud") {?>
				<a style='cursor:pointer;' onclick="HideDefault(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
)"><img src="<?php echo vtiger_imageurl('windowMinMax.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HIDE'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HIDE'];?>
" hspace="5" align="absmiddle"/></a>
<?php } else { ?>
				<img src="<?php echo vtiger_imageurl('windowMinMax-off.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HIDE'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HIDE'];?>
" hspace="5" align="absmiddle"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Default" && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Tag Cloud") {?>
				<a id="deletelink" style='cursor:pointer;' onclick="DelStuff(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
)"><img src="<?php echo vtiger_imageurl('windowClose.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" hspace="5" align="absmiddle"/></a>
<?php } else { ?>
				<img src="<?php echo vtiger_imageurl('windowClose-off.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE'];?>
" hspace="5" align="absmiddle"/>
<?php }?>
			</td>
		</tr>
	</table>

	<table width="100%" cellpadding="0" cellspacing="0" class="small" style="padding-right:0px;padding-left:0px;padding-top:0px;">
<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Module") {?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="show_tab winmarkModulesusr">
<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Default" && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != $_smarty_tpl->tpl_vars['homepagedashboard_title']->value) {?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="show_tab winmarkModulesdef">
<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "RSS") {?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="show_tab winmarkRSS">
<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "DashBoard" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "ReportCharts") {?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="show_tab winmarkDashboardusr">
<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Default" && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] == $_smarty_tpl->tpl_vars['homepagedashboard_title']->value) {?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="show_tab winmarkDashboarddef">
<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Notebook" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Tag Cloud") {?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
">
<?php } else { ?>
		<tr id="maincont_row_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" class="show_tab">
<?php }?>
			<td colspan="2">
				<div id="stuffcont_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
" style="height:260px; overflow-y: auto; overflow-x:hidden;width:100%;height:100%;">
				</div>
			</td>
		</tr>
	</table>
<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != "Tag Cloud") {?>
	<table width="100%" cellpadding="0" cellspacing="0" class="small scrollLink">
	<tr>
		<td align="left">
			<a href="javascript:;" onclick="addScrollBar(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
);">
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SCROLL'];?>

			</a>
		</td>
<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Module" || ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "Default" && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != "Key Metrics" && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != $_smarty_tpl->tpl_vars['homepagedashboard_title']->value && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != "My Group Allocation") || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "RSS" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "DashBoard" || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == "ReportCharts") {?>
		<td align="right">
			<a href="#" id="a_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MORE'];?>

			</a>
		</td>
<?php }?>
	</tr>
	</table>
<?php }?>
</div>

<?php echo '<script'; ?>
>
		window.onresize = function(){positionDivInAccord('stuff_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
','<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle']);?>
','<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
');};
	positionDivInAccord('stuff_<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
','<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle']);?>
','<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
');
<?php echo '</script'; ?>
>
<?php }
}
