<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:12:15
  from '/www/Smarty/templates/Clock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cfafbeb9a1_27018333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '173a663f9757a52153155499183094c0f01f53a1' => 
    array (
      0 => '/www/Smarty/templates/Clock.tpl',
      1 => 1545915642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cfafbeb9a1_27018333 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['WORLD_CLOCK_DISPLAY']->value == 'true') {?>

<div id="wclock" style="z-index:10000001;" class="layerPopup">
	<table class="mailClientBg" align="center" border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr style="cursor:move;" >
		<td style="text-align:left;" id="Handle"><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_WORLD_CLOCK'];?>
</b></td>
		<td align="right">
			<a href="javascript:;">
				<img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"  onClick="fninvsh('wclock')" hspace="5" align="absmiddle">
			</a>
		</td>
	</tr>
	</table>
	<table class="hdrNameBg" align="center" border="0" cellpadding="2" cellspacing="0" width="100%">
	<tr>
	<td nowrap="nowrap" colspan="2">
	<div style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['IMAGEPATH']->value;?>
clock_bg.gif); background-repeat: no-repeat; background-position: 4px 38px;" id="theClockLayer">
<div id="theCities" class="citystyle">
<form action="" name="frmtimezone">
<select name="clockcity" size="1" class="importBox small" id="clockcity" style="width:125px;" onchange="lcl(this.selectedIndex,this.options[0].selected)">
<option value="0" selected="selected">Local time</option>
<option value="4.30">Afghanistan</option>
<option value="1">Algeria</option>
<option value="-3">Argentina</option>
<option value="9.30">Australia - Adelaide</option>
<option value="8">Australia - Perth</option>
<option value="10">Australia - Sydney</option>
<option value="1">Austria</option>
<option value="3">Bahrain</option>
<option value="6">Bangladesh</option>
<option value="1">Belgium</option>
<option value="-4">Bolivia</option>
<option value="-5">Brazil - Andes</option>
<option value="-3">Brazil - East</option>
<option value="-4">Brazil - West</option>
<option value="2">Bulgaria</option>
<option value="6.30">Burma (Myanmar)</option>
<option value="-5">Chile</option>
<option value="-7">Canada - Calgary</option>
<option value="-3.30">Canada - Newfoundland</option>
<option value="-4">Canada - Nova Scotia</option>
<option value="-5">Canada - Toronto</option>
<option value="-8">Canada - Vancouver</option>
<option value="-6">Canada - Winnipeg</option>
<option value="8">China - Mainland</option>
<option value="8">China - Taiwan</option>
<option value="-5">Colombia</option>
<option value="-5">Cuba</option>
<option value="1">Denmark</option>
<option value="-5">Ecuador</option>
<option value="2">Egypt</option>
<option value="12">Fiji</option>
<option value="2">Finland</option>
<option value="1">France</option>
<option value="1">Germany</option>
<option value="0">Ghana</option>
<option value="2">Greece</option>
<option value="-3">Greenland</option>
<option value="1">Hungary</option>
<option value="5.30">India</option>
<option value="8">Indonesia - Bali, Borneo</option>
<option value="9">Indonesia - Irian Jaya</option>
<option value="7">Indonesia - Sumatra, Java</option>
<option value="3.30">Iran</option>
<option value="3">Iraq</option>
<option value="2">Israel</option>
<option value="1">Italy</option>
<option value="-5">Jamaica</option>
<option value="9">Japan</option>
<option value="3">Kenya</option>
<option value="9">Korea (North &amp; South)</option>
<option value="3">Kuwait</option>
<option value="1">Libya</option>
<option value="8">Malaysia</option>
<option value="5">Maldives</option>
<option value="1">Mali</option>
<option value="4">Mauritius</option>
<option value="-6">Mexico</option>
<option value="0">Morocco</option>
<option value="5.45">Nepal</option>
<option value="1">Netherlands</option>
<option value="12">New Zealand</option>
<option value="1">Nigeria</option>
<option value="1">Norway</option>
<option value="4">Oman</option>
<option value="5">Pakistan</option>
<option value="-5">Peru</option>
<option value="8">Philippines</option>
<option value="1">Poland</option>
<option value="1">Portugal</option>
<option value="3">Qatar</option>
<option value="2">Romania</option>
<option value="11">Russia - Kamchatka</option>
<option value="3">Russia - Moscow</option>
<option value="9">Russia - Vladivostok</option>
<option value="4">Seychelles</option>
<option value="3">Saudi Arabia</option>
<option value="8">Singapore</option>
<option value="2">South Africa</option>
<option value="1">Spain</option>
<option value="3">Syria</option>
<option value="5.30">Sri Lanka</option>
<option value="1">Sweden</option>
<option value="1">Switzerland</option>
<option value="7">Thailand</option>
<option value="12">Tonga</option>
<option value="2">Turkey</option>
<option value="3">Ukraine</option>
<option value="5">Uzbekistan</option>
<option value="7">Vietnam</option>
<option value="4">UAE</option>
<option value="0">UK</option>
<option value="-9">USA - Alaska</option>
<option value="-9">USA - Arizona</option>
<option value="-6">USA - Central</option>
<option value="-5">USA - Eastern</option>
<option value="-10">USA - Hawaii</option>
<option value="-5">USA - Indiana East</option>
<option value="-7">USA - Mountain</option>
<option value="-8">USA - Pacific</option>
<option value="3">Yemen</option>
<option value="1">Yugoslavia</option>
<option value="2">Zambia</option>
<option value="2">Zimbabwe</option>
</select>
</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/clock.js"><?php echo '</script'; ?>
>
<div id="theDate" class="datestyle">\!</div>
<div id="amOrPm" class="ampmstyle">\!</div>
<div id="theFace0" class="facestyle" style="color: rgb(0, 0, 0); top: 81px; left: 96px;">3</div>
<div id="theFace1" class="facestyle" style="color: rgb(0, 0, 0); top: 102px; left: 90.3731px;">4</div>
<div id="theFace2" class="facestyle" style="color: rgb(0, 0, 0); top: 117.373px; left: 75px;">5</div>
<div id="theFace3" class="facestyle" style="color: rgb(0, 0, 0); top: 123px; left: 54px;">6</div>
<div id="theFace4" class="facestyle" style="color: rgb(0, 0, 0); top: 117.373px; left: 33px;">7</div>
<div id="theFace5" class="facestyle" style="color: rgb(0, 0, 0); top: 102px; left: 17.6269px;">8</div>
<div id="theFace6" class="facestyle" style="color: rgb(0, 0, 0); top: 81px; left: 12px;">9</div>
<div id="theFace7" class="facestyle" style="color: rgb(0, 0, 0); top: 60px; left: 17.6269px;">10</div>
<div id="theFace8" class="facestyle" style="color: rgb(0, 0, 0); top: 44.6269px; left: 33px;">11</div>
<div id="theFace9" class="facestyle" style="color: rgb(0, 0, 0); top: 39px; left: 54px;">12</div>
<div id="theFace10" class="facestyle" style="color: rgb(0, 0, 0); top: 44.6269px; left: 75px;">1</div>
<div id="theFace11" class="facestyle" style="color: rgb(0, 0, 0); top: 60px; left: 90.3731px;">2</div>
</div></td>
</tr>
</tbody>
</table>
</div>
<?php echo '<script'; ?>
>
	for (i=0; i < n; i++){
		cf[i]=document.getElementById("theFace"+i).style;
		cf[i].top=y-6+30*1.4*Math.sin(i*e*Math.PI/180)+"px";
		cf[i].left=xpos-6+30*1.4*Math.cos(i*e*Math.PI/180)+"px";
	}
	var theClockLayer = document.getElementById("theClockLayer");
	for (i=0; i < h; i++){
		var accdiv = document.createElement("div");
		accdiv.id = "H"+i;
		accdiv.className = "handsanddotsstyle";
		accdiv.style.backgroundColor = hCol;
		theClockLayer.appendChild(accdiv);
		ch[i]=document.getElementById("H"+i).style;
	}
	for (i=0; i < m; i++){
		var accdiv = document.createElement("div");
		accdiv.id = "M"+i;
		accdiv.className = "handsanddotsstyle";
		accdiv.style.backgroundColor = mCol;
		theClockLayer.appendChild(accdiv);
		cm[i]=document.getElementById("M"+i).style;
	}
	for (i=0; i < s; i++){
		var accdiv = document.createElement("div");
		accdiv.id = "S"+i;
		accdiv.className = "handsanddotsstyle";
		accdiv.style.backgroundColor = sCol;
		theClockLayer.appendChild(accdiv);
		cs[i]=document.getElementById("S"+i).style;
	}

	var dsp1=document.getElementById("amOrPm").style;
	dsp1.color = aCol;
	var dsp2=document.getElementById("theCities").style;
	var dsp3=document.getElementById("theDate").style;
	dsp3.color = cCol;
	//var dsp4=document.getElementById("city").style;
	var dsp5=document.getElementById("theClockLayer").style;
	dsp1.top=y+"px";
	dsp1.left=xpos-8+"px";
	dsp2.top=y-80+"px";
	dsp2.left=xpos-55+"px";
	dsp3.top=y+55+"px";
	dsp3.left=xpos-60+"px";
	dsp5.backgroundImage="url(themes/images/clock_bg.gif)";
	dsp5.backgroundRepeat="no-repeat";
	dsp5.backgroundPosition="4px 38px";
	ClockAndAssign();
	if (get_cookie("timezone")==null || get_cookie("timezone")==false || get_cookie("timezone")<0 || get_cookie("timezone")=="1") {
		lcl(0,true)
	} else {
		lcl(get_cookie("timezone"),false)
		document.frmtimezone.clockcity.options[get_cookie("timezone")].selected=true
	}
	jQuery('#wclock').draggable({ handle: "#Handle" });
<?php echo '</script'; ?>
>

<?php }
}
}