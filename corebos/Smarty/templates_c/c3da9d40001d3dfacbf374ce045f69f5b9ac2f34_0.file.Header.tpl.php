<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:35:02
  from '/www/Smarty/templates/Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c6206111aa9_14534990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3da9d40001d3dfacbf374ce045f69f5b9ac2f34' => 
    array (
      0 => '/www/Smarty/templates/Header.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:BrowserVariables.tpl' => 1,
    'file:Components.tpl' => 1,
    'file:Clock.tpl' => 1,
  ),
),false)) {
function content_5c4c6206111aa9_14534990 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['LBL_CHARSET']->value;?>
">
	<meta name="robots" content="noindex">
	<title><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 - <?php echo getTranslatedString($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['coreBOS_app_name']->value;?>
</title>
	<link REL="SHORTCUT ICON" HREF="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['favicon'];?>
">
	<style type="text/css">@import url("themes/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/style.css");</style>
	<?php if ($_smarty_tpl->tpl_vars['Application_JSCalendar_Load']->value != 0) {?><link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css"><?php }?>
	<link rel="stylesheet" href="include/print.css" type="text/css" media="print" />
	<link rel="stylesheet" href="include/LD/assets/styles/salesforce-lightning-design-system.css" type="text/css" />
	<link rel="stylesheet" href="include/LD/assets/styles/mainmenu.css" type="text/css" />
	<link rel="stylesheet" href="include/LD/assets/styles/override_lds.css" type="text/css" />
<?php if ($_smarty_tpl->tpl_vars['HEADERCSS']->value) {?>
	<!-- Custom Header CSS -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADERCSS']->value, 'HDRCSS');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HDRCSS']->value) {
?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HDRCSS']->value->linkurl;?>
" />
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- END -->
<?php }?>
	<!-- ActivityReminder customization for callback -->

	<style type="text/css">div.fixedLay1 { position:fixed; }</style>
	<!--[if lte IE 6]>
	<style type="text/css">div.fixedLay { position:absolute; }</style>
	<![endif]-->
	<style type="text/css">div.drop_mnu_user { position:fixed; }</style>
	<!--[if lte IE 6]>
	<style type="text/css">div.drop_mnu_user { position:absolute; }</style>
	<![endif]-->

	<!-- End -->
</head>
<?php $_smarty_tpl->_subTemplateRender('file:BrowserVariables.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Components.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body leftmargin=0 topmargin=0 marginheight=0 marginwidth=0 class=small>
	<a name="top"></a>
	<!-- header -->
	<?php echo '<script'; ?>
 type="text/javascript" src="include/sw-precache/service-worker-registration.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/jquery/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/jquery/jquery-ui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/meld.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/corebosjshooks.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/general.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/vtlib.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" id="_current_language_" src="include/js/<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
.lang.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/QuickCreate.js"><?php echo '</script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['CALCULATOR_DISPLAY']->value == 'true') {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/calculator/calc.js"><?php echo '</script'; ?>
>
	<?php }?>
	<?php echo '<script'; ?>
 type="text/javascript" src="modules/Calendar/script.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/notificationPopup.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="modules/Calendar4You/fullcalendar/lib/moment.min.js"><?php echo '</script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['Application_JSCalendar_Load']->value != 0) {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="jscalendar/calendar.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="jscalendar/calendar-setup.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="jscalendar/lang/calendar-<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_JSCALENDAR_LANG'];?>
.js"><?php echo '</script'; ?>
>
	<?php }?>
<!-- asterisk Integration -->
<?php if ($_smarty_tpl->tpl_vars['USE_ASTERISK']->value == 'true') {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="include/js/asterisk.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	if(typeof(use_asterisk) == 'undefined') use_asterisk = true;
	<?php echo '</script'; ?>
>
<?php }?>
	<?php echo '<script'; ?>
 type="text/javascript">
	<!-- browser tab identification on ajax calls -->
	jQuery(document).ready(function() {
		jQuery(document).ajaxSend(function() {
			document.cookie = "corebos_browsertabID="+corebos_browsertabID;
		});
	});
	<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['HEADERSCRIPTS']->value) {?>
	<!-- Custom Header Script -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADERSCRIPTS']->value, 'HEADERSCRIPT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADERSCRIPT']->value) {
?>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HEADERSCRIPT']->value->linkurl;?>
"><?php echo '</script'; ?>
>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- END -->
<?php }?>

		<img src="<?php echo vtiger_imageurl('layerPopupBg.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" style="display: none;"/>
<?php if (empty($_smarty_tpl->tpl_vars['Module_Popup_Edit']->value)) {?>
<TABLE border=0 cellspacing=0 cellpadding=0 width=100% class="small">
	<tr>
		<td valign=top align=left><img src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['applogo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['companyname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['companyname'];?>
" border=0 style="width: 15em;height: 4.2em;"></td>
		<td align="center" valign=bottom>
			<div align ="center" width ="50%" border='3' style="padding:5px;" class="noprint">
				<?php if ($_smarty_tpl->tpl_vars['Application_Global_Search_Active']->value || (isset($_smarty_tpl->tpl_vars['GS_AUTOCOMP']->value) && isset($_smarty_tpl->tpl_vars['GS_AUTOCOMP']->value['searchin']))) {?>
				<table border=0 cellspacing=0 cellpadding=0 id="search" align="center">
				<?php } else { ?>
				<table border=0 cellspacing=0 cellpadding=0 align="center">
				<?php }?>
					<tr>
						<?php if ($_smarty_tpl->tpl_vars['Application_Global_Search_Active']->value) {?>
						<form name="UnifiedSearch" method="post" action="index.php" style="margin:0px" onsubmit="if (document.getElementById('query_string').value=='') return false; VtigerJS_DialogBox.block();">
						<?php } else { ?>
						<form name="UnifiedSearch" style="margin:0px" onsubmit="return false;">
						<?php }?>
							<td style="background-color:#ffffef;border:1px;border-color:black;vertical-align:middle;" nowrap>
								<?php if ($_smarty_tpl->tpl_vars['Application_Global_Search_Active']->value || (isset($_smarty_tpl->tpl_vars['GS_AUTOCOMP']->value) && isset($_smarty_tpl->tpl_vars['GS_AUTOCOMP']->value['searchin']))) {?>
								<input type="hidden" name="action" value="UnifiedSearch" style="margin:0px">
								<input type="hidden" name="module" value="Home" style="margin:0px">
								<input type="hidden" name="parenttab" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
" style="margin:0px">
								<input type="hidden" name="search_onlyin" value="--USESELECTED--" style="margin:0px">
								<input type="text" name="query_string" id="query_string" value="<?php echo $_smarty_tpl->tpl_vars['QUERY_STRING']->value;?>
" class="searchBox" onFocus="this.value=''" autocomplete="off" data-autocomp='<?php echo json_encode($_smarty_tpl->tpl_vars['GS_AUTOCOMP']->value);?>
'>
									<div id="listbox-unique-id" role="listbox" class="">
										<ul class="slds-listbox slds-listbox_vertical slds-dropdown slds-dropdown_fluid relation-autocomplete__target" style="opacity: 0; width: 100%;left:45%;" role="presentation"></ul>
									</div>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['Application_Global_Search_Active']->value) {?>
							<td align ="right" style="background-color:#FFFFEF; vertical-align:middle;padding:5px;" onclick="UnifiedSearch_SelectModuleForm(this);">
								<a href='javascript:void(0);'><img src="<?php echo vtiger_imageurl('arrow_down_black.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align='left' style="max-width:initial;"></a>
							</td>
							<td style="background-color:#cccccc">
								<input type="image" class="searchBtn" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FIND'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FIND'];?>
" width="70%" height="70%" src="<?php echo vtiger_imageurl('searchicon.PNG',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align='left' border=1>
							</td>
							<?php }?>
						</form>
					</tr>
				</table>
			</div>
		</td>
		<td nowrap align="right" style="padding-right:10px;" class="cblds-float_right small cblds-p-top_small">
			<table border=0 cellspacing=0 cellpadding=0 class="cblds-width_auto" id="usermenu-headerlinks">
				<tr>
					<td valign="top" class="genHeaderSmall" style="padding-left:10px;padding-top:3px;">
						<span class="userName"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</span>
					</td>
					<td class="small" valign="bottom" nowrap style="padding-bottom: 1em;"><a id="headerUser" class="headerlink" href="index.php?module=Users&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
&modechk=prefview"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEPATH']->value;?>
user.PNG" border=0 style="padding: 0px;padding-left:5px" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MY_PREFERENCES'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MY_PREFERENCES'];?>
"></a></td>
										<?php if ($_smarty_tpl->tpl_vars['HEADERLINKS']->value) {?>
						<td valign="bottom" nowrap style="padding-bottom: 1em;" class="small" nowrap>
							<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_headerLinksLay');" onclick="fnvshobj(this,'vtlib_headerLinksLay');"><img src="<?php echo vtiger_imageurl('menu_more.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border=0 style="padding: 0px;padding-left:5px"></a>
							<div class="drop_mnu_user" style="display: none; width:155px;" id="vtlib_headerLinksLay"
								 onmouseout="fninvsh('vtlib_headerLinksLay')" onmouseover="fnvshNrm('vtlib_headerLinksLay')">
								<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADERLINKS']->value, 'HEADERLINK', false, 'actionlabel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['actionlabel']->value => $_smarty_tpl->tpl_vars['HEADERLINK']->value) {
?>
										<?php $_smarty_tpl->_assignInScope('headerlink_href', $_smarty_tpl->tpl_vars['HEADERLINK']->value->linkurl);?>
										<?php $_smarty_tpl->_assignInScope('headerlink_label', $_smarty_tpl->tpl_vars['HEADERLINK']->value->linklabel);?>
										<?php if ($_smarty_tpl->tpl_vars['headerlink_label']->value == '') {?>
											<?php $_smarty_tpl->_assignInScope('headerlink_label', $_smarty_tpl->tpl_vars['headerlink_href']->value);?>
										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('headerlink_label', getTranslatedString($_smarty_tpl->tpl_vars['headerlink_label']->value,$_smarty_tpl->tpl_vars['HEADERLINK']->value->module()));?>
										<?php }?>
										<li class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_hover" aria-haspopup="true">
											<a href="<?php echo $_smarty_tpl->tpl_vars['headerlink_href']->value;?>
" class="slds-context-bar__label-action" title="<?php echo $_smarty_tpl->tpl_vars['headerlink_label']->value;?>
">
													<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['headerlink_label']->value;?>
</span>
											</a>
										</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						</td>
					<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['HELP_URL']->value) {?>
				<td valign="bottom" nowrap style="padding-bottom: 1em;" class="small" nowrap><a id="headerHelp" class="headerlink" href="<?php echo $_smarty_tpl->tpl_vars['HELP_URL']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEPATH']->value;?>
info.PNG" border=0 style="padding: 0px;padding-left:5px" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_HELP'];?>
"></a></td>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['ADMIN_LINK']->value)) {?>
					<td valign="bottom" nowrap style="padding-bottom: 1em;" class="small" onmouseout="fnHideDrop('mainsettings');" onmouseover="fnDropDown(this,'mainsettings');" nowrap><a id="headerSettings" class="headerlink" href="index.php?module=Settings&action=index&parenttab=" id="settingslink"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEPATH']->value;?>
mainSettings.PNG" border=0 style="padding: 0px;padding-left:5px"></a></td>
				<?php }?>
				<td valign="bottom" nowrap style="padding-bottom: 1em;" class="small" nowrap><a id="headerLogout" class="headerlink" href="index.php?module=Users&action=Logout"> <img src="themes/images/logout.png" border=0 style="padding: 0px;padding-left:5px " title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOGOUT'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOGOUT'];?>
"></a></td>
			</tr>
			</table>
		</td>
	</tr>
</TABLE>
<?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value) {?>
	<table width ="100%">
		<tr colspan="3" width="100%">
			<td width="90%" align=center>
				<marquee id="rss" direction="left" scrolldelay="10" scrollamount="3" behavior="scroll" class="marStyle" onMouseOver="javascript:stop();" onMouseOut="javascript:start();">&nbsp;<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value;?>
</marquee>
			</td>
			<td width="10%" align="right" style="padding-right:38px;"><img src="<?php echo vtiger_imageurl('Announce.PNG',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
		</tr>
	</table>
<?php }?>

<div id='miniCal' style='width:300px; position:absolute; display:none; left:100px; top:100px; z-index:100000'></div>

<?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Calendar') {?>
	<div id="CalExport" style="width:300px; position:absolute; display:none; left:500px; top:100px; z-index:100000" class="layerPopup">
		<table border=0 cellspacing=0 cellpadding=5 width=100% class=layerHeadingULine>
			<tr>
				<td class="genHeaderSmall" nowrap align="left" width="30%" ><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EXPORT'];?>
 </td>
				<td align="right"><a href='javascript:ghide("CalExport");'><img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="right" border="0"></a></td>
			</tr>
		</table>
		<table border=0 cellspacing=0 cellpadding=5 width=95% align=center>
			<tr>
				<td class="small">
					<table border=0 celspacing=0 cellpadding=5 width=100% align=center bgcolor=white>
						<tr>
							<td align="right" nowrap class="cellLabel small">
								<input class="small" type='radio' name='exportCalendar' value = 'iCal' onclick="jQuery('#ics_filename').removeAttr('disabled');" checked /> iCal Format
							</td>
							<td align="left">
								<input class="small" type='text' name='ics_filename' id='ics_filename' size='25' value='export.calendar'/>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="layerPopupTransport">
			<tr>
				<td class="small" align="center">
					<input type="button" onclick="return exportCalendar();" value="Export" class="crmbutton small edit" name="button"/>
				</td>
			</tr>
		</table>
	</div>
	<div id='CalImport' style='position:absolute; display:none; left:500px; top:100px; z-index:100000' class="layerPopup">
		<?php $_smarty_tpl->_assignInScope('label_filename', 'LBL_FILENAME');?>
		<form name='ical_import' id='ical_import' onsubmit="VtigerJS_DialogBox.block();" enctype="multipart/form-data" action="index.php" method="POST">
			<input type='hidden' name='module' value=''>
			<input type='hidden' name='action' value=''>
			<table border=0 cellspacing=0 cellpadding=5 width=100% class=layerHeadingULine>
				<tr>
					<td class="genHeaderSmall" nowrap align="left" width="30%" id="editfolder_info"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
</td>
					<td align="right"><a href='javascript:ghide("CalImport");'><img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0"></a></td>
				</tr>
			</table>
			<table border=0 cellspacing=0 cellpadding=5 width=95% align=center>
				<tr>
					<td class="small">
						<table border=0 celspacing=0 cellpadding=5 width=100% align=center bgcolor=white>
							<tr>
								<td align="right" nowrap class="cellLabel small"><b><?php echo getTranslatedString($_smarty_tpl->tpl_vars['label_filename']->value);?>
 </b></td>
								<td align="left">
									<input class="small" type='file' name='ics_file' id='ics_file'/>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table border=0 cellspacing=0 cellpadding=5 width=100% class="layerPopupTransport">
				<tr>
					<td class="small" align="center">
						<input type="button" onclick="return importCalendar();" value="Import" class="crmbutton small edit" name="button"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php }
echo $_smarty_tpl->tpl_vars['COREBOS_HEADER_PREMENU']->value;?>

<!-- header - master tabs -->
<div class="noprint">
<div class="slds-context-bar">
	<div class="slds-context-bar__primary slds-context-bar__item_divider-right">
		<div class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_click slds-no-hover">
			<div class="slds-context-bar__icon-action">
				<a href="index.php" class="slds-icon-waffle_container slds-context-bar__button">
					<div class="slds-icon-waffle">
						<div class="slds-r1"></div>
						<div class="slds-r2"></div>
						<div class="slds-r3"></div>
						<div class="slds-r4"></div>
						<div class="slds-r5"></div>
						<div class="slds-r6"></div>
						<div class="slds-r7"></div>
						<div class="slds-r8"></div>
						<div class="slds-r9"></div>
					</div>
				</a>
			</div>
			<span class="slds-context-bar__label-action slds-context-bar__app-name">
				<span class="slds-truncate" title="<?php echo $_smarty_tpl->tpl_vars['coreBOS_app_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['coreBOS_app_nameHTML']->value;?>
</span>
			</span>
		</div>
	</div>
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cbmenu', array('menu'=>$_smarty_tpl->tpl_vars['MENU']->value), true);?>

</div>
</div>
</td>

<div id="calculator_cont" style="position:absolute; z-index:10000" ></div>
<?php $_smarty_tpl->_subTemplateRender("file:Clock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="qcform" style="position:absolute;width:700px;top:80px;left:450px;z-index:90000;"></div>

<!-- Unified Search module selection feature -->
<div id="UnifiedSearch_moduleformwrapper" style="position:absolute;width:417px;z-index:100002;display:none;"></div>

<div id="status" style="position:absolute;display:none;left:850px;top:<?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value) {?>130<?php } else { ?>95<?php }?>px;height:27px;white-space:nowrap;">
	<div role="status" class="slds-spinner slds-spinner_small slds-spinner_brand">
		<div class="slds-spinner__dot-a"></div>
		<div class="slds-spinner__dot-b"></div>
	</div>
</div>

<div id="tracker" style="display:none;position:absolute;z-index:100000001;" class="layerPopup">
	<table border="0" cellpadding="5" cellspacing="0" width="200">
		<tr style="cursor:move;">
			<td colspan="2" class="mailClientBg small" id="Track_Handle"><strong><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LAST_VIEWED'];?>
</strong></td>
			<td align="right" style="padding:5px;" class="mailClientBg small">
				<a href="javascript:;"><img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" onClick="fninvsh('tracker')" hspace="5" align="absmiddle"></a>
			</td></tr>
	</table>
	<table border="0" cellpadding="5" cellspacing="0" width="200" class="hdrNameBg">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TRACINFO']->value, 'trackelements', false, NULL, 'trackinfo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['trackelements']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_trackinfo']->value['iteration']++;
?>
			<tr>
				<td class="trackerListBullet small" align="center" width="12"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_trackinfo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_trackinfo']->value['iteration'] : null);?>
</td>
				<td class="trackerList small"> <a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['trackelements']->value['module_name'];?>
&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['trackelements']->value['crmid'];?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['trackelements']->value['item_summary'];?>
</a> </td><td class="trackerList small">&nbsp;</td></tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<div id="mainsettings" class="drop_mnu_user" onmouseout="fnHideDrop('mainsettings');" onmouseover="fnvshNrm('mainsettings');" style="width:180px;">
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADERS']->value, 'actionlink', false, 'actionlabel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['actionlabel']->value => $_smarty_tpl->tpl_vars['actionlink']->value) {
?>
			<li class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_hover" aria-haspopup="true">
				<a href="<?php echo $_smarty_tpl->tpl_vars['actionlink']->value;?>
" class="slds-context-bar__label-action" title="<?php echo $_smarty_tpl->tpl_vars['actionlabel']->value;?>
">
						<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['actionlabel']->value;?>
</span>
				</a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<li class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_hover" aria-haspopup="true">
			<a href="index.php?module=Settings&action=index&parenttab=" class="slds-context-bar__label-action" title="<?php echo getTranslatedString('LBL_CRM_SETTINGS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
">
					<span class="slds-truncate"><?php echo getTranslatedString('LBL_CRM_SETTINGS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
			</a>
		</li>
	</ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	jQuery('#tracker').draggable({ handle: "#Track_Handle" });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="modules/evvtMenu/evvtMenu.js"><?php echo '</script'; ?>
>
</div>
<!-- ActivityReminder Customization for callback -->
<div class="lvtCol fixedLay1" id="ActivityRemindercallback" style="border: 0; right: 0px; bottom: 2px; display:none; padding: 2px; z-index: 10; font-weight: normal;" align="left">
</div>

<!-- divs for asterisk integration -->
<div class="lvtCol fixedLay1" id="notificationDiv" style="float: right; padding-right: 5px; overflow: hidden; border-style: solid; right: 0px; border-color: rgb(141, 141, 141); bottom: 0px; display: none; padding: 2px; z-index: 10; font-weight: normal;" align="left">
</div>

<div id="OutgoingCall" style="display: none;position: absolute;z-index:200;" class="layerPopup">
	<table border='0' cellpadding='5' cellspacing='0' width='100%'>
		<tr style='cursor:move;' >
			<td class='mailClientBg small' id='outgoing_handle'>
				<b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OUTGOING_CALL'];?>
</b>
			</td>
		</tr>
	</table>
	<table border='0' cellpadding='0' cellspacing='0' width='100%' class='hdrNameBg'>
		</tr>
		<tr><td style='padding:10px;' colspan='2'>
			<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OUTGOING_CALL_MESSAGE'];?>

		</td></tr>
	</table>
</div>
<!-- divs for asterisk integration :: end-->
<?php }
}
}
