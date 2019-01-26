<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:35:02
  from '/www/Smarty/templates/Home/HomeButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c6206d7dc47_33224212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c0da2910cca3718139ae9a5b2dbc92ad07ac10c' => 
    array (
      0 => '/www/Smarty/templates/Home/HomeButtons.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4c6206d7dc47_33224212 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border=0 cellspacing=0 cellpadding=5 width="50%" class="small homePageButtons">
<tr style="cursor: pointer;">
	<td style="padding-left:10px;padding-right:50px" width=10% class="moduleName" nowrap>
		<a class="hdrLink" href="index.php?action=index&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
			<?php echo $_smarty_tpl->tpl_vars['APP']->value[$_smarty_tpl->tpl_vars['MODULE']->value];?>

		</a>
	</td>
	<td class="sep1">
		&nbsp;
	</td>

	<td align='left'>
		<img width="27" height="27" onClick='fnAddWindow(this,"addWidgetDropDown");' onMouseOut='fnRemoveWindow();' src="<?php echo vtiger_imageurl('btnL3Add.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_ADDWINDOW'];?>
" alt"<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_ADDWINDOW'];?>
" style="cursor:pointer;border:0;max-width:initial;">
	</td>

<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['Calendar'] == 'yes' && $_smarty_tpl->tpl_vars['CALENDAR_ACTIVE']->value == 'yes' && $_smarty_tpl->tpl_vars['CALENDAR_DISPLAY']->value == 'true') {?>
	<td id="LB_CalButton" class="LB_Button" style="padding-right:0px;padding-left:10px;">
		<a href="javascript:;" onclick="fnvshobj(this,'miniCal');getITSMiniCal('');">
		<img src="<?php echo vtiger_imageurl('btnL3Calendar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALENDAR_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALENDAR_TITLE'];?>
" style="border:0;max-width:initial;">
		</a>
	</td>
<?php }
if ($_smarty_tpl->tpl_vars['WORLD_CLOCK_DISPLAY']->value == 'true') {?>
	<td id="LB_ClockButton" class="LB_Button" style="padding-right:0px">
		<a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Clock.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOCK_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOCK_TITLE'];?>
" style="border:0;max-width:initial;" onClick="fnvshobj(this,'wclock');"></a>
	</td>
<?php }
if ($_smarty_tpl->tpl_vars['CALCULATOR_DISPLAY']->value == 'true') {?>
	<td>
	<td id="LB_CalcButton" class="LB_Button" style="padding-right:0px">
		<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
btnL3Calc.gif" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALCULATOR_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CALCULATOR_TITLE'];?>
" style="border:0;max-width:initial;" onClick="fnvshobj(this,'calculator_cont');fetch_calc();"></a>
	</td>
<?php }?>
	<td>
		<img width="27" height="27" src="<?php echo vtiger_imageurl('btnL3Tracker.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LAST_VIEWED'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LAST_VIEWED'];?>
" style="border:0;max-width:initial;" onClick="fnvshobj(this,'tracker');">
	</td>

	<td align='left'>
		<img width="27" height="27" onClick='showOptions("changeLayoutDiv");' src="<?php echo vtiger_imageurl('orgshar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" style="border:0;max-width:initial;" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_LAYOUT'];?>
" alt"<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_LAYOUT'];?>
" style="cursor:pointer;">
	</td>

	<td width="100%" align="center">
		<span id="vtbusy_info" style="display:none;" valign="bottom">
		<div role="status" class="slds-spinner slds-spinner_brand slds-spinner_x-small" style="position:relative; top:6px;">
			<div class="slds-spinner__dot-a"></div>
			<div class="slds-spinner__dot-b"></div>
		</div>
		</span>
	</td>
</tr>
</table>

<form name="Homestuff" id="formStuff" style="display: inline;" method="post">
	<input type="hidden" name="action" value="homestuff">
	<input type="hidden" name="module" value="Home">
	<div id='addWidgetDropDown' style='background-color: #fff; display:none;' onmouseover='fnShowWindow()' onmouseout='fnRemoveWindow()'>
		<ul class="widgetDropDownList">
		<li>
			<a href='javascript:;' class='drop_down' id="addmodule">
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_MODULE'];?>

			</a>
		</li>
<?php if ($_smarty_tpl->tpl_vars['ALLOW_RSS']->value == "yes") {?>
		<li>
			<a href='javascript:;' class='drop_down' id="addrss">
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_RSS'];?>

			</a>
		</li>
<?php }?>	
<?php if ($_smarty_tpl->tpl_vars['ALLOW_DASH']->value == "yes") {?>
		<li>
			<a href='javascript:;' class='drop_down' id="adddash">
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_DASHBOARD'];?>

			</a>
		</li>
<?php }?>
		<li>
			<a href='javascript:;' class='drop_down' id="addNotebook">
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTEBOOK'];?>

			</a>
		</li>

<?php if ($_smarty_tpl->tpl_vars['ALLOW_REPORT']->value == "yes") {?>
		<li>
			<a href='javascript:;' class='drop_down' id="addReportCharts">
				<?php echo getTranslatedString('LBL_REPORTCHARTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

			</a>
		</li>
<?php }?>
		<li>
			<a href='javascript:;' class='drop_down' id="defaultwidget">
				<?php echo getTranslatedString('LBL_DEFAULT_WIDGET',$_smarty_tpl->tpl_vars['MODULE']->value);?>

			</a>
		</li>
			</div>

		<div id="addWidgetsDiv" class="layerPopup" style="z-index:2000; display:none; width:400px;">
		<input type="hidden" name="stufftype" id="stufftype_id">
		<table width="100%" border="0" cellpadding="5" cellspacing="0" class="layerHeadingULine">
		<tr>
			<td class="layerPopupHeading" align="left" id="divHeader"></td>
			<td align="right"><a href="javascript:;" onclick="fnhide('addWidgetsDiv');document.getElementById('stufftitle_id').value='';">
				<img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" style="border:0;max-width:initial;" align="absmiddle" /></a>
			</td>
		</tr>
		</table>
		<table border=0 cellspacing=0 cellpadding=5 width=95% align=center>
		<tr>
			<td class=small >
						<table border="0" cellspacing="0" cellpadding="3" width="100%" align="center" bgcolor="white">
			<tr id="StuffTitleId" style="display:block;">
				<td class="dvtCellLabel"  width="110" align="right">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_STUFFTITLE'];?>

					<font color='red'>*</font>
				</td>
				<td class="dvtCellInfo" colspan="2" width="300">
					<input type="text" name="stufftitle" id="stufftitle_id" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:57%">
				</td>
			</tr>
						<tr id="showrow">
				<td class="dvtCellLabel"  width="110" align="right"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_SHOW'];?>
</td>
				<td class="dvtCellInfo" width="300" colspan="2">
					<select name="maxentries" id="maxentryid" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:60%">
						<?php
$_smarty_tpl->tpl_vars['__smarty_section_iter'] = new Smarty_Variable(array());
if (true) {
for ($__section_iter_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] = 1; $__section_iter_1_iteration <= 12; $__section_iter_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']++){
?>
						<option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] : null);?>
</option>
						<?php
}
}
?>
					</select>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_ITEMS'];?>

				</td>
			</tr>
			<tr id="moduleNameRow" style="display:block">
				<td class="dvtCellLabel"  width="110" align="right"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_MODULE'];?>
</td>
				<td width="300" class="dvtCellInfo" colspan="2">
					<select name="selmodule" id="selmodule_id" onchange="setFilter(this)" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:60%">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_NAME']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
							<?php $_smarty_tpl->_assignInScope('MODULE_LABEL', getTranslatedString($_smarty_tpl->tpl_vars['arr']->value[1],$_smarty_tpl->tpl_vars['arr']->value[1]));?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['MODULE_LABEL']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<input type="hidden" name="fldname">
				</td>
			</tr>
			<tr id="moduleFilterRow" style="display:block">
				<td class="dvtCellLabel" align="right" width="110" ><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_FILTERBY'];?>
</td>
				<td id="selModFilter_id" colspan="2" class="dvtCellInfo" width="300">
				</td>
			</tr>
			<tr id="modulePrimeRow" style="display:block">
				<td class="dvtCellLabel" width="110" align="right" valign="top"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_Fields'];?>
</td>
				<td id="selModPrime_id" colspan="2" class="dvtCellInfo" width="300">
				</td>
			</tr>
			<tr id="rssRow" style="display:none">
				<td class="dvtCellLabel"  width="110" align="right"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_RSSURL'];?>
<font color='red'>*</font></td>
				<td width="300" colspan="2" class="dvtCellInfo"><input type="text" name="txtRss" id="txtRss_id" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:58%"></td>
			</tr>
			<tr id="dashNameRow" style="display:none">
				<td class="dvtCellLabel"  width="110" align="right"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_DASHBOARD_NAME'];?>
</td>
				<td id="selDashName" class="dvtCellInfo" colspan="2" width="300"></td>
			</tr>
			<tr id="homewidget" style="display:none">
				<td id="home" class="dvtCellInfo" colspan="2" width="300"></td>
			</tr>
			<tr id="dashTypeRow" style="display:none">
				<td class="dvtCellLabel" align="right" width="110"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_DASHBOARD_TYPE'];?>
</td>
				<td id="selDashType" class="dvtCellInfo" width="300" colspan="2">
					<select name="seldashtype" id="seldashtype_id" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:60%">
						<option value="horizontalbarchart"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_HORIZONTAL_BARCHART'];?>
</option>
						<option value="verticalbarchart"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_VERTICAL_BARCHART'];?>
</option>
						<option value="piechart"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_PIE_CHART'];?>
</option>
					</select>
				</td>
			</tr>
			<tr id="reportNameRow" style="display:none">
				<td class="dvtCellLabel"  width="110" align="right"><?php echo getTranslatedString('LBL_HOME_REPORT_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
				<td id="selReportName" class="dvtCellInfo" colspan="2" width="300"></td>
			</tr>
			<tr id="reportTypeRow" style="display:none">
				<td class="dvtCellLabel" align="right" width="110"><?php echo getTranslatedString('LBL_HOME_REPORT_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
				<td id="selReportType" class="dvtCellInfo" width="300" colspan="2">
					<select name="selreporttype" id="selreportcharttype_id" class="detailedViewTextBox" onfocus="this.className='detailedViewTextBoxOn'" onblur="this.className='detailedViewTextBox'" style="width:60%">
						<option value="horizontalbarchart"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_HORIZONTAL_BARCHART'];?>
</option>
						<option value="verticalbarchart"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_VERTICAL_BARCHART'];?>
</option>
						<option value="piechart"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_PIE_CHART'];?>
</option>
					</select>
				</td>
			</tr>
		</table>
						</td>
		</tr>
		</table>

		<table border=0 cellspacing=0 cellpadding=5 width=95% align="center">
			<tr>
				<td align="right">
					<input type="button" name="save" value=" &nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
&nbsp; " id="savebtn" class="crmbutton small save" onclick="frmValidate()"></td>
				<td align="left"><input type="button" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" class="crmbutton small cancel" onclick="fnhide('addWidgetsDiv');document.getElementById('stufftitle_id').value='';">
				</td>
			</tr>
		</table>
	</div>
</form>

<div id="seqSettings" style="background-color:#E0ECFF;z-index:6000000;display:none;">
</div>


<div id="changeLayoutDiv" class="layerPopup" style="z-index:2000; display:none;">
	<table>
	<tr class="layerHeadingULine">
		<td class="big">
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_LAYOUT'];?>

		</td>
		<td>
			<img onclick="hideOptions('changeLayoutDiv');" src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="right" style="cursor: pointer;border:0;max-width:initial;"/>
		</td>
	</tr>
	<tr id="numberOfColumns">
		<td class="dvtCellLabel" align="right">
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_OF_COLUMNS'];?>

		</td>
		<td class="dvtCellLabel">
			<select id="layoutSelect" class="small">
				<option value="2">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TWO_COLUMN'];?>

				</option>
				<option value="3">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THREE_COLUMN'];?>

				</option>
				<option value="4">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FOUR_COLUMN'];?>

				</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="button" name="save" value=" &nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
&nbsp; " id="savebtn" class="crmbutton small save" onclick="saveLayout();">
		</td>
		<td align="left">
			<input type="button" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" class="crmbutton small cancel" onclick="hideOptions('changeLayoutDiv');">
		</td>
	</tr>

	</table>
</div>
<?php }
}
