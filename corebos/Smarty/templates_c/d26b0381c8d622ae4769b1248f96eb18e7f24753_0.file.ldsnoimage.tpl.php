<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:34:50
  from '/www/Smarty/templates/Login/ldsnoimage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c61fa9959a2_93126410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd26b0381c8d622ae4769b1248f96eb18e7f24753' => 
    array (
      0 => '/www/Smarty/templates/Login/ldsnoimage.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4c61fa9959a2_93126410 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="themes/login/lds/sfdc_210.css">

<style type="text/css">
a {
	color: #0070d2;
}

body {
	background-color: #F4F6F9;
}

#content, .container {
	background-color: #ffffff;
}

#header {
	color: #16325c;
}

body {
	display: table;
	width: 100%;
}

#content {
	margin-bottom: 24px;
}

#wrap {
	height: 100%;
}

#right {
	vertical-align: middle;
}

.errorMessage {
	font-size: 12px;
	color: #982121;
}
</style>

</head>
<body onload="set_focus()" data-gr-c-s-loaded="true">
	<div id="left" class="pr">
		<div id="wrap">
			<div id="main">
				<div id="wrapper">
					<div id="logo_wrapper" class="standard_logo_wrapper mb24">
						<h1 style="height: 100%; display: table-cell; vertical-align: bottom;">
							<img id="logo" class="standard_logo"
								src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['companylogo'];?>
"
								alt="<?php echo $_smarty_tpl->tpl_vars['coreBOS_uiapp_name']->value;?>
" border="0" name="logo">
						</h1>
					</div>
					<h2 id="header" class="mb12" style="display: none;"></h2>
					<div id="content" style="display: block;">
						<div id="chooser" style="display: none">
							<div class="loginError" id="chooser_error" style="display: block;"></div>
						</div>
						<div id="theloginform" style="display: block;">
							<?php if ($_smarty_tpl->tpl_vars['LOGIN_ERROR']->value != '') {?>
							<div class="errorMessage"><?php echo $_smarty_tpl->tpl_vars['LOGIN_ERROR']->value;?>
</div>
							<?php }?>
							<form method="post" id="login_form" action="index.php" target="_top" autocomplete="off" novalidate="novalidate">
								<input type="hidden" name="module" value="Users" />
								<input type="hidden" name="action" value="Authenticate" />
								<input type="hidden" name="return_module" value="Users" />
								<input type="hidden" name="return_action" value="Login" />
								<div id="usernamegroup" class="inputgroup">
									<label for="username" class="label"><?php echo getTranslatedString('LBL_USER_NAME','Users');?>
</label>
									<div id="username_container">
										<input class="input r4 wide mb16 mt8 username" type="email" value="" name="user_name" id="username" style="display: block;">
									</div>
								</div>
								<label for="password" class="label"><?php echo getTranslatedString('LBL_PASSWORD','Users');?>
</label>
								<input class="input r4 wide mb16 mt8 password" type="password" id="password" name="user_password"
									onkeypress="checkCaps(event)" autocomplete="off">
								<div id="pwcaps" class="mb16" style="display: none">
									<img id="pwcapsicon" alt="<?php echo getTranslatedString('CapsLockActive');?>
" width="12" src="themes/login/lds/capslock_blue.png">
									<?php echo getTranslatedString('CapsLockActive');?>

								</div>
								<input class="button r4 wide primary" type="submit" id="Login" name="Login" value="<?php echo getTranslatedString('StartSession');?>
">
							</form>
						</div>
					</div>
				</div>
			</div>

			<div id="footer">
				© Powered by <?php echo $_smarty_tpl->tpl_vars['coreBOS_uiapp_name']->value;?>
.
			</div>
		</div>

	</div>
<?php }
}
