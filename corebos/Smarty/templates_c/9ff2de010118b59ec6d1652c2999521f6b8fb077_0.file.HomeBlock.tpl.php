<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:35:02
  from '/www/Smarty/templates/Home/HomeBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c62061d0167_24840264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff2de010118b59ec6d1652c2999521f6b8fb077' => 
    array (
      0 => '/www/Smarty/templates/Home/HomeBlock.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4c62061d0167_24840264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<div class='hide_tab' id="editRowmodrss_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" style="position:absolute; top:0px;left:0px;">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="small" valign="top">
	<tr>
<?php if ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "Module" || $_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "RSS" || $_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "Default") {?>
		<td align="left" class="homePageMatrixHdr" style="height:28px;" nowrap width="40%">
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_SHOW'];?>
&nbsp;
			<select id="maxentries_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" name="maxid" class="small" style="width:40px;">
	<?php
$_smarty_tpl->tpl_vars['__smarty_section_iter'] = new Smarty_Variable(array());
if (true) {
for ($__section_iter_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] = 1; $__section_iter_0_iteration <= 12; $__section_iter_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']++){
?>
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] : null);?>
" <?php if ($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Maxentries'] == (isset($_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] : null)) {?> selected <?php }?>>
					<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iter']->value['index'] : null);?>

				</option>
	<?php
}
}
?>
			</select>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_ITEMS'];?>

		</td>
		<td align="right" class="homePageMatrixHdr" nowrap style="height:28px;" width=60<?php echo '%>';?>
			<input type="button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " name="save" class="crmbutton small save" onclick="saveEntries('maxentries_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
')">
			<input type="button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " name="cancel" class="crmbutton small cancel" onclick="cancelEntries('editRowmodrss_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
')">
		</td>
<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "DashBoard") {?>
		<td  valign="top" align='center' class="homePageMatrixHdr" style="height:28px;" width=60<?php echo '%>';?>
			<input type="radio" id="dashradio_0" name="dashradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value="horizontalbarchart" <?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'horizontalbarchart') {?>checked<?php }?>><?php echo getTranslatedString('LBL_HOME_HORIZONTAL','Home');?>

			<input type="radio" id="dashradio_1" name="dashradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value="verticalbarchart"<?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'verticalbarchart') {?>checked<?php }?>><?php echo getTranslatedString('LBL_HOME_VERTICAL','Home');?>

			<input type="radio" id="dashradio_2" name="dashradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value="piechart" <?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'piechart') {?>checked<?php }?>><?php echo getTranslatedString('LBL_HOME_PIE','Home');?>

		</td>
		</tr>
		<tr>
			<td  valign="top" align="center" class="homePageMatrixHdr" nowrap style="height:28px;" width="40%">
			<input type="button" name="save" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " class="crmbutton small save" onclick="saveEditDash(<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
)">
			<input type="button" name="cancel" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " class="crmbutton small cancel" onclick="cancelEntries('editRowmodrss_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
')">
			</td>
		</tr>
<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "ReportCharts") {?>
		<td  valign="top" align='center' class="homePageMatrixHdr" style="height:28px;" width=60<?php echo '%>';?>
			<input type="radio" id="reportradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
_0" name="reportradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value="horizontalbarchart" <?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'horizontalbarchart') {?>checked<?php }?> onclick="changeGraphType(<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
,'horizontalbarchart');"><?php echo getTranslatedString('LBL_HOME_HORIZONTAL','Home');?>

			<input type="radio" id="reportradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
_1" name="reportradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value="verticalbarchart"<?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'verticalbarchart') {?>checked<?php }?> onclick="changeGraphType(<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
,'verticalbarchart');"><?php echo getTranslatedString('LBL_HOME_VERTICAL','Home');?>

			<input type="radio" id="reportradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
_2" name="reportradio_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value="piechart" <?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'piechart') {?>checked<?php }?> onclick="changeGraphType(<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
,'piechart');"><?php echo getTranslatedString('LBL_HOME_PIE','Home');?>

		</td>
	</tr>
	<tr>
		<td  valign="top" align="center" class="homePageMatrixHdr" nowrap style="height:28px;" width="40%">
			<input type="button" name="save" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " class="crmbutton small save" onclick="saveEditReportCharts(<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
)">
			<input type="button" name="cancel" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " class="crmbutton small cancel" onclick="cancelEntries('editRowmodrss_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
')">
		</td>
	</tr>
<?php }?>
	</tr>
	</table>
</div>
<input type=hidden id="test_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" value = <?php echo $_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value;?>
/>
<?php if ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "Module") {?>
	<input type=hidden id=more_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value['ModuleName'];?>
"/>
	<input type=hidden id=cvid_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value['cvid'];?>
">
	<table border=0 cellspacing=0 cellpadding=2 width=100<?php echo '%>';?>
	<?php $_smarty_tpl->_assignInScope('cvid', $_smarty_tpl->tpl_vars['HOME_STUFF']->value['cvid']);?>
	<?php $_smarty_tpl->_assignInScope('modulename', $_smarty_tpl->tpl_vars['HOME_STUFF']->value['ModuleName']);?>
	<tr>
		<td width=5<?php echo '%>';?>
			&nbsp;
		</td>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Header'], 'header');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
?>
		<td align="left">
			<b><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</b>
		</td>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
	<?php if (count($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Entries']) > 0) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Entries'], 'row', false, 'crmid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['crmid']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
 	<tr>
		<td>
			<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value['ModuleName'];?>
&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['crmid']->value;?>
">
				<img src="<?php echo vtiger_imageurl('bookMark.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
"/>
			</a>
		</td>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
		<td align="left"/>
			<?php echo $_smarty_tpl->tpl_vars['element']->value;?>

		</td>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<div class="componentName"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</div>
	<?php }?>
	</table>

<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "Default") {?>
	<input type=hidden id=more_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 value="<?php if (isset($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['ModuleName'])) {
echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['ModuleName'];
}?>"/>
	<?php if (is_array($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Entries']) && count($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Entries']) > 0) {?>
		<table border=0 cellspacing=0 cellpadding=2 width=100<?php echo '%>';?>
		<tr>
			<td width=5<?php echo '%>';?>&nbsp;</td>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Header'], 'header');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
?>
				<td align="left"><b><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</b></td>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Entries'], 'row', false, 'crmid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['crmid']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
			<tr>
				<td>
				<?php if (isset($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Title'])) {?>
					<?php if ($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Title'][1] == "My Sites") {?>
					<img src="<?php echo vtiger_imageurl('bookMark.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
"/>
					<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Title'][1] != "Key Metrics" && $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Title'][1] != "My Group Allocation") {?>
					<img src="<?php echo vtiger_imageurl('bookMark.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
"/>
					<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Title'][1] == "Key Metrics") {?>
					<img src="<?php echo vtiger_imageurl('bookMark.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
 "/>
					<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['Title'][1] == "My Group Allocation") {?>
					<img src="<?php echo vtiger_imageurl('bookMark.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
"/>
					<?php }?>
				<?php }?>
				</td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
				<td align="left"/> <?php echo $_smarty_tpl->tpl_vars['element']->value;?>
</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<div class="componentName"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</div>
	<?php }?>
	</table>

<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "RSS") {?>
	<input type=hidden id=more_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Entries']['More'];?>
"/>
	<table border=0 cellspacing=0 cellpadding=2 width=100<?php echo '%>';?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Entries']['Details'], 'details');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
?>
			<tr>
				<td align="left">
					<a href="<?php echo $_smarty_tpl->tpl_vars['details']->value[1];?>
" target="_blank">
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['details']->value[0],50);?>
...
					</a>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>

<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "DashBoard") {?>
	<input type=hidden id=more_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['DashType'];?>
"/>
	<table border=0 cellspacing=0 cellpadding=5 width=100<?php echo '%>';?>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value;?>
</td>
		</tr>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['HOME_STUFFTYPE']->value == "ReportCharts") {?>
	<input type=hidden id=more_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['ReportId'];?>
"/>
	<table border=0 cellspacing=0 cellpadding=5 width=100<?php echo '%>';?>
		<tr>
			<td align="left">
			<canvas id="homechart<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
" style="width:500px;height:250px;margin:auto;padding:10px;"></canvas>
<?php echo '<script'; ?>
 type="text/javascript">
window.doChart<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 = function(charttype) {
	let stuffchart = document.getElementById('homechart<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
');
	let stuffcontext = stuffchart.getContext('2d');
	stuffcontext.clearRect(0, 0, stuffchart.width, stuffchart.height);

	let chartDataObject = {
		labels: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['xaxisData'], 'LABEL', false, NULL, 'chartlabels', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_chartlabels']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chartlabels']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_chartlabels']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_chartlabels']->value['total'];
?>"<?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_chartlabels']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_chartlabels']->value['last'] : null)) {?>,<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
		datasets: [{
			data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['yaxisData'], 'CVALUE', false, NULL, 'chartvalues', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CVALUE']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['total'];
?>"<?php echo $_smarty_tpl->tpl_vars['CVALUE']->value;?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['last'] : null)) {?>,<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
			backgroundColor: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['yaxisData'], 'CVALUE', false, NULL, 'chartvalues', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CVALUE']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['total'];
?>getRandomColor()<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_chartvalues']->value['last'] : null)) {?>,<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
		}]
	};
	var maxnum = Math.max.apply(Math, chartDataObject.datasets[0].data);
	var maxgrph = Math.ceil(maxnum + (5 * maxnum / 100));
	Chart.scaleService.updateScaleDefaults('linear', {
		ticks: {
			min: 0,
			max: maxgrph
		}
	});
	window.schart<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
 = new Chart(stuffchart,{
		type: charttype,
		data: chartDataObject,
		options: {
			responsive: true,
			legend: {
				position: "right",
				display: (charttype=='pie'),
				labels: {
					fontSize: 11,
					boxWidth: 18
				}
			}
		}
	});
	stuffchart.addEventListener('click',function(evt) {
		let activePoint = schart<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
.getElementAtEvent(evt);
		let clickzone = {
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOME_STUFF']->value['targetLink'], 'CLICKVALUE', false, 'CLICKINDEX', 'clickvalues', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CLICKINDEX']->value => $_smarty_tpl->tpl_vars['CLICKVALUE']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clickvalues']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_clickvalues']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_clickvalues']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_clickvalues']->value['total'];
echo $_smarty_tpl->tpl_vars['CLICKINDEX']->value;?>
:"<?php echo $_smarty_tpl->tpl_vars['CLICKVALUE']->value;?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_clickvalues']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clickvalues']->value['last'] : null)) {?>,<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		};
		let a = document.createElement("a");
		a.target = "_blank";
		a.href = clickzone[activePoint[0]._index];
		document.body.appendChild(a);
		a.click();
	});
}

<?php if ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'horizontalbarchart') {?>
let charttype = 'horizontalBar';
<?php } elseif ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'verticalbarchart') {?>
let charttype = 'bar';
<?php } elseif ($_smarty_tpl->tpl_vars['DASHDETAILS']->value[$_smarty_tpl->tpl_vars['HOME_STUFFID']->value]['Chart'] == 'piechart') {?>
let charttype = 'pie';
<?php } else { ?>
let charttype = 'verticalbarchart';
<?php }?>
doChart<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
(charttype);
<?php echo '</script'; ?>
>
			</td>
		</tr>
	</table>
<?php }
if (isset($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']) && is_array($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']) == 'true') {?>
<input id='search_qry_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
' name='search_qry_<?php echo $_smarty_tpl->tpl_vars['HOME_STUFFID']->value;?>
' type='hidden' value='<?php if (isset($_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['search_qry'])) {
echo $_smarty_tpl->tpl_vars['HOME_STUFF']->value['Details']['search_qry'];
}?>' />
<?php }
}
}
