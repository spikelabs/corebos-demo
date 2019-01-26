<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:35:02
  from '/www/Smarty/templates/BrowserVariables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c620611b181_43571412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a20cf13c8165851cdc32f5af230307fd00a668a' => 
    array (
      0 => '/www/Smarty/templates/BrowserVariables.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4c620611b181_43571412 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
var gVTModule = "<?php echo $_smarty_tpl->tpl_vars['GVTMODULE']->value;?>
";
var gVTTheme  = "<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
";
var gVTUserID = "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
";
var default_charset = "<?php echo $_smarty_tpl->tpl_vars['DEFAULT_CHARSET']->value;?>
";
var userDateFormat = "<?php echo $_smarty_tpl->tpl_vars['USER_DATE_FORMAT']->value;?>
";
var userHourFormat = "<?php echo $_smarty_tpl->tpl_vars['USER_HOUR_FORMAT']->value;?>
";
var userFirstDayOfWeek = <?php echo $_smarty_tpl->tpl_vars['USER_FIRST_DOW']->value;?>
;
var userCurrencySeparator = "<?php echo $_smarty_tpl->tpl_vars['USER_CURRENCY_SEPARATOR']->value;?>
";
var userDecimalSeparator = "<?php echo $_smarty_tpl->tpl_vars['USER_DECIMAL_FORMAT']->value;?>
";
var userNumberOfDecimals = "<?php echo $_smarty_tpl->tpl_vars['USER_NUMBER_DECIMALS']->value;?>
";
var gVTuserLanguage = "<?php echo $_smarty_tpl->tpl_vars['USER_LANGUAGE']->value;?>
";
var gServiceWorkermd5 = '<?php echo $_smarty_tpl->tpl_vars['SW_MD5']->value;?>
';
var goldcorebos_browsertabID = '<?php echo $_smarty_tpl->tpl_vars['corebos_browsertabID']->value;?>
';
if (typeof(Storage) !== "undefined") {
	if (sessionStorage.corebos_browsertabID) {
		var corebos_browsertabID = sessionStorage.corebos_browsertabID;
	} else {
		sessionStorage.corebos_browsertabID = Math.random().toString().substring(2);
		var corebos_browsertabID = sessionStorage.corebos_browsertabID;
		fetch('index.php?module=Utilities&action=UtilitiesAjax&file=ExecuteFunctions&functiontocall=updateBrowserTabSession&newtabssid=' + corebos_browsertabID + '&oldtabssid=' + goldcorebos_browsertabID, {
			credentials: 'same-origin'
		});
	}
	window.addEventListener('beforeunload', function(event) {
		document.cookie = "corebos_browsertabID="+corebos_browsertabID;
	});
}
<?php echo '</script'; ?>
>
<?php }
}
