<?php
/* Smarty version 3.1.33, created on 2019-01-26 13:35:02
  from '/www/Smarty/templates/Components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4c6206143677_01842541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3183ed91c9814c887929241ea774e42d6f43cd5b' => 
    array (
      0 => '/www/Smarty/templates/Components.tpl',
      1 => 1548507597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4c6206143677_01842541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'cbmenu' => 
  array (
    'compiled_filepath' => '/www/Smarty/templates_c/3183ed91c9814c887929241ea774e42d6f43cd5b_0.file.Components.tpl.php',
    'uid' => '3183ed91c9814c887929241ea774e42d6f43cd5b',
    'call_name' => 'smarty_template_function_cbmenu_2582754875c4c620611c6f8_20977813',
  ),
  'cbsubmenu' => 
  array (
    'compiled_filepath' => '/www/Smarty/templates_c/3183ed91c9814c887929241ea774e42d6f43cd5b_0.file.Components.tpl.php',
    'uid' => '3183ed91c9814c887929241ea774e42d6f43cd5b',
    'call_name' => 'smarty_template_function_cbsubmenu_2582754875c4c620611c6f8_20977813',
  ),
  'cbsubsubmenu' => 
  array (
    'compiled_filepath' => '/www/Smarty/templates_c/3183ed91c9814c887929241ea774e42d6f43cd5b_0.file.Components.tpl.php',
    'uid' => '3183ed91c9814c887929241ea774e42d6f43cd5b',
    'call_name' => 'smarty_template_function_cbsubsubmenu_2582754875c4c620611c6f8_20977813',
  ),
));
?>





<?php }
/* smarty_template_function_cbmenu_2582754875c4c620611c6f8_20977813 */
if (!function_exists('smarty_template_function_cbmenu_2582754875c4c620611c6f8_20977813')) {
function smarty_template_function_cbmenu_2582754875c4c620611c6f8_20977813(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('i'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<nav class="slds-context-bar__secondary" role="navigation">
	<ul class="slds-grid" id="cbmenu">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'menuitem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'menu') {?>
		<li class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_hover" aria-haspopup="true">
			<a href="javascript:void(0);" class="slds-context-bar__label-action" title="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
">
				<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
</span>
			</a>
			<?php if (!empty($_smarty_tpl->tpl_vars['menuitem']->value['submenu'])) {?>
			<div class="slds-context-bar__icon-action slds-p-left_none" tabindex="0">
				<svg aria-hidden="true" class="slds-button__icon">
					<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#chevrondown"></use>
				</svg>
			</div>
			<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cbsubmenu', array('submenu'=>$_smarty_tpl->tpl_vars['menuitem']->value['submenu'],'i'=>$_smarty_tpl->tpl_vars['i']->value), true);?>

			<?php }?>
		</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'module') {?>
		<li class="slds-context-bar__item">
			<a href="index.php?action=index&amp;module=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mvalue'];?>
" class="slds-context-bar__label-action" title="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
">
				<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
</span>
			</a>
		</li>
		<?php }?>
		<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<div class="slds-context-bar__tertiary" style="float:left; margin-top:auto; margin-bottom:auto;">
		<div class="slds-form-element">
			<div class="slds-form-element__control">
				<div class="slds-select_container">
				<select id="qccombo" class="slds-select" onchange="QCreate(this);">
					<option value="none"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_QUICK_CREATE'];?>
...</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QCMODULE']->value, 'detail');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['detail']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['NEW'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['detail']->value[0];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				</div>
			</div>
		</div>
	</div>
</nav>
<?php
}}
/*/ smarty_template_function_cbmenu_2582754875c4c620611c6f8_20977813 */
/* smarty_template_function_cbsubmenu_2582754875c4c620611c6f8_20977813 */
if (!function_exists('smarty_template_function_cbsubmenu_2582754875c4c620611c6f8_20977813')) {
function smarty_template_function_cbsubmenu_2582754875c4c620611c6f8_20977813(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('j'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<div class="slds-dropdown slds-dropdown_center slds-nubbin_top">
	<ul class="slds-dropdown__list" role="menu" id="menu<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submenu']->value, 'menuitem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'module' && empty($_smarty_tpl->tpl_vars['menuitem']->value['submenu'])) {?>
		<li class="slds-dropdown__item" role="presentation">
			<a href="index.php?action=index&amp;module=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mvalue'];?>
" role="menuitem" tabindex="-1">
				<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
</span>
			</a>
		</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'module' && !empty($_smarty_tpl->tpl_vars['menuitem']->value['submenu'])) {?>
		<li class="slds-dropdown__item" role="presentation">
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cbsubsubmenu', array('submenuitem'=>$_smarty_tpl->tpl_vars['menuitem']->value,'i'=>$_smarty_tpl->tpl_vars['i']->value,'j'=>$_smarty_tpl->tpl_vars['j']->value,'k'=>0), true);?>

		<?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
		</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'menu' && !empty($_smarty_tpl->tpl_vars['menuitem']->value['submenu'])) {?>
		<li class="slds-dropdown__item" role="presentation">
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cbsubsubmenu', array('submenuitem'=>$_smarty_tpl->tpl_vars['menuitem']->value,'i'=>$_smarty_tpl->tpl_vars['i']->value,'j'=>$_smarty_tpl->tpl_vars['j']->value,'k'=>0), true);?>

		<?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
		</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'headtop') {?>
		<li class="slds-dropdown__header slds-has-divider_top-space" role="separator">
			<span class="slds-text-title_caps"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
</span>
		</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'headbottom') {?>
		<li class="slds-dropdown__header slds-has-divider_bottom-space" role="separator">
			<span class="slds-text-title_caps"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
</span>
		</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'sep') {?>
		<li class="slds-dropdown__header slds-has-divider_top-space" role="separator"></li>
		<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['mtype'] == 'url') {?>
		<li class="slds-dropdown__item" role="presentation">
			<a href="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mvalue'];?>
" role="menuitem" tabindex="-1">
				<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mlabel'];?>
</span>
			</a>
		</li>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php
}}
/*/ smarty_template_function_cbsubmenu_2582754875c4c620611c6f8_20977813 */
/* smarty_template_function_cbsubsubmenu_2582754875c4c620611c6f8_20977813 */
if (!function_exists('smarty_template_function_cbsubsubmenu_2582754875c4c620611c6f8_20977813')) {
function smarty_template_function_cbsubsubmenu_2582754875c4c620611c6f8_20977813(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<?php if (!empty($_smarty_tpl->tpl_vars['submenuitem']->value['submenu'])) {?>
		<?php if ($_smarty_tpl->tpl_vars['submenuitem']->value['mtype'] == 'module') {?>
		<a href="index.php?action=index&amp;module=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mvalue'];?>
" role="menuitem" tabindex="-1">
		<?php } else { ?>
		<a href="javascript:void(0);" role="menuitem" tabindex="-1">
		<?php }?>
			<span class="slds-truncate" style="padding-right: 20px;"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mlabel'];?>
</span>
			<svg aria-hidden="true" class="slds-button__icon">
				<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#chevronright"></use>
			</svg>
		</a>
		<ul id="submenu<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['j']->value;
if ($_smarty_tpl->tpl_vars['k']->value > 0) {?>-<?php echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="moreMenu">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submenuitem']->value['submenu'], 'submenu_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['submenu_item']->value) {
?>
			<li class="slds-dropdown__item" role="presentation">
				<?php $_smarty_tpl->_assignInScope('k', $_smarty_tpl->tpl_vars['k']->value+1);?>
				<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cbsubsubmenu', array('submenuitem'=>$_smarty_tpl->tpl_vars['submenu_item']->value,'i'=>$_smarty_tpl->tpl_vars['i']->value,'j'=>$_smarty_tpl->tpl_vars['j']->value,'k'=>$_smarty_tpl->tpl_vars['k']->value), true);?>

			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php } elseif ($_smarty_tpl->tpl_vars['submenuitem']->value['mtype'] == 'module') {?>
		<li class="slds-dropdown__item" role="presentation">
			<a href="index.php?action=index&amp;module=<?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mvalue'];?>
" role="menuitem" tabindex="-1">
				<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mlabel'];?>
</span>
			</a>
		</li>
	<?php } elseif ($_smarty_tpl->tpl_vars['submenuitem']->value['mtype'] == 'headtop') {?>
		<li class="slds-dropdown__header slds-has-divider_top-space" role="separator">
			<span class="slds-text-title_caps"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mlabel'];?>
</span>
		</li>
	<?php } elseif ($_smarty_tpl->tpl_vars['submenuitem']->value['mtype'] == 'headbottom') {?>
		<li class="slds-dropdown__header slds-has-divider_bottom-space" role="separator">
			<span class="slds-text-title_caps"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mlabel'];?>
</span>
		</li>
	<?php } elseif ($_smarty_tpl->tpl_vars['submenuitem']->value['mtype'] == 'sep') {?>
		<li class="slds-dropdown__header slds-has-divider_top-space" role="separator"></li>
	<?php } elseif ($_smarty_tpl->tpl_vars['submenuitem']->value['mtype'] == 'url') {?>
		<li class="slds-dropdown__item" role="presentation">
			<a href="<?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mvalue'];?>
" role="menuitem" tabindex="-1">
				<span class="slds-truncate"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['mlabel'];?>
</span>
			</a>
		</li>
	<?php }
}}
/*/ smarty_template_function_cbsubsubmenu_2582754875c4c620611c6f8_20977813 */
}
