<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:35:02
  from '/www/Smarty/templates/Home/Homestuff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c6206d4ed07_29699286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b232037690fe50476a33118af19d1105df19f1' => 
    array (
      0 => '/www/Smarty/templates/Home/Homestuff.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Home/HomeButtons.tpl' => 1,
    'file:Home/MainHomeBlock.tpl' => 1,
    'file:Home/FirstTimeLogin.tpl' => 1,
  ),
),false)) {
function content_5c4c6206d4ed07_29699286 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="modules/Home/Homestuff.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/notebook.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/freetag/tagcanvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="include/chart.js/Chart.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="include/chart.js/randomColor.js"><?php echo '</script'; ?>
>
<input id="homeLayout" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
">

<?php $_smarty_tpl->_subTemplateRender("file:Home/HomeButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="vtbusy_homeinfo" style="display:none;">
	<img src="<?php echo vtiger_imageurl('vtbusy.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0">
</div>

<table width="97%" class="small showPanelBg" cellpadding="0" cellspacing="0" border="0" align="center" valign="top">
<tr>
	<td width="100%" align="center" valign="top" height="350">
		<div id="MainMatrix" class="show_tab topMarginHomepage" style="padding:0px;width:100%">
			<?php echo '<script'; ?>
 type="text/javascript" src="include/jquery/jquery-ui.js"><?php echo '</script'; ?>
>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOMEFRAME']->value, 'tablestuff', false, NULL, 'homeframe', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tablestuff']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:Home/MainHomeBlock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<?php echo '<script'; ?>
>
										<?php if ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == 'Default' && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] == getTranslatedString('Home Page Dashboard','Home')) {?>
						fetch_homeDB(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
);
					<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == 'DashBoard') {?>
						loadStuff(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
');
					<?php } elseif ($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] == 'ReportCharts') {?>
						loadStuff(<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
');
					<?php }?>
				<?php echo '</script'; ?>
>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</td>
</tr>
</table>

<?php echo '<script'; ?>
>
var Vt_homePageWidgetInfoList = [
<?php if (count($_smarty_tpl->tpl_vars['HOMEFRAME']->value) > 0) {?>
	<?php $_smarty_tpl->_assignInScope('HOMEFRAME', array_reverse($_smarty_tpl->tpl_vars['HOMEFRAME']->value));?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOMEFRAME']->value, 'tablestuff', false, 'index', 'homeframe', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['tablestuff']->value) {
?>
		<?php if (($_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != 'Default' || $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftitle'] != getTranslatedString('Home Page Dashboard','Home')) && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != 'DashBoard' && $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'] != 'ReportCharts') {?>
			{
				'widgetId':<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stuffid'];?>
,
				'widgetType':'<?php echo $_smarty_tpl->tpl_vars['tablestuff']->value['Stufftype'];?>
'
			}
			<?php if ($_smarty_tpl->tpl_vars['index']->value+1 < count($_smarty_tpl->tpl_vars['HOMEFRAME']->value)) {?>,<?php }?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
	];
loadAllWidgets(Vt_homePageWidgetInfoList, <?php echo $_smarty_tpl->tpl_vars['widgetBlockSize']->value;?>
);

initHomePage();

/**
 * this function is used to display the add window for different dashboard widgets
 */
function fnAddWindow(obj,CurrObj){
	var tagName = document.getElementById(CurrObj);
	var left_Side = findPosX(obj);
	var top_Side = findPosY(obj);
	tagName.style.left= left_Side + 2 + 'px';
	tagName.style.top= top_Side + 22 + 'px';
	tagName.style.display = 'block';
	document.getElementById("addmodule").href="javascript:chooseType('Module');fnRemoveWindow();setFilter(document.getElementById('selmodule_id'))";
	document.getElementById("addNotebook").href="javascript:chooseType('Notebook');fnRemoveWindow();show('addWidgetsDiv');placeAtCenter(document.getElementById('addWidgetsDiv'));";
    document.getElementById("defaultwidget").href="javascript:chooseType('defaultwidget');fnRemoveWindow();";
	//document.getElementById("addURL").href="javascript:chooseType('URL');fnRemoveWindow();show('addWidgetsDiv');placeAtCenter(document.getElementById('addWidgetsDiv'));";

<?php if ($_smarty_tpl->tpl_vars['ALLOW_RSS']->value == "yes") {?>
	document.getElementById("addrss").href="javascript:chooseType('RSS');fnRemoveWindow();show('addWidgetsDiv');placeAtCenter(document.getElementById('addWidgetsDiv'));";
<?php }
if ($_smarty_tpl->tpl_vars['ALLOW_DASH']->value == "yes") {?>
	document.getElementById("adddash").href="javascript:chooseType('DashBoard');fnRemoveWindow()";
<?php }
if ($_smarty_tpl->tpl_vars['ALLOW_REPORT']->value == "yes") {?>
    document.getElementById("addReportCharts").href="javascript:chooseType('ReportCharts');fnRemoveWindow()";
<?php }?>

}

var user_tag_showas = '<?php echo $_smarty_tpl->tpl_vars['USER_TAG_SHOWAS']->value;?>
';
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['FIRST_TIME_LOGIN']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:Home/FirstTimeLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
