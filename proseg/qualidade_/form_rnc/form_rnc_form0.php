<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - rnc"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - rnc"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_rnc/form_rnc_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_rnc_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_rnc_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

<?php
if ('' == $this->scFormFocusErrorName)
{
?>
  scFocusField('numero');

<?php
}
?>
  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_rnc_js0.php");
?>
<script type="text/javascript"> 
nmdg_enter_tab = true;
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" 
               action="./" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo NM_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo NM_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_rnc'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_rnc'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="90%">
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - rnc"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - rnc"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo NM_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['numero']))
           {
               $this->nmgp_cmp_readonly['numero'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numero']))
    {
        $this->nm_new_label['numero'] = "Numero";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numero = $this->numero;
   $sStyleHidden_numero = '';
   if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numero']);
       $sStyleHidden_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numero = 'display: none;';
   $sStyleReadInp_numero = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["numero"]) &&  $this->nmgp_cmp_readonly["numero"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numero']);
       $sStyleReadLab_numero = '';
       $sStyleReadInp_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numero" value="<?php echo NM_encode_input($numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_numero_label" id="hidden_field_label_numero" style="<?php echo $sStyleHidden_numero; ?>"><span id="id_label_numero"><?php echo $this->nm_new_label['numero']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['php_cmp_required']['numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['php_cmp_required']['numero'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_numero_line" id="hidden_field_data_numero" style="<?php echo $sStyleHidden_numero; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_numero_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["numero"]) &&  $this->nmgp_cmp_readonly["numero"] == "on")) { 

 ?>
<input type="hidden" name="numero" value="<?php echo NM_encode_input($numero) . "\"><span id=\"id_ajax_label_numero\">" . $numero . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_numero" class="sc-ui-readonly-numero css_numero_line" style="<?php echo $sStyleReadLab_numero; ?>"><?php echo NM_encode_input($this->numero); ?></span><span id="id_read_off_numero" style="white-space: nowrap;<?php echo $sStyleReadInp_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_numero_obj" style="" id="id_sc_field_numero" type=text name="numero" value="<?php echo NM_encode_input($numero) ?>"
 size=10 alt="{datatype: 'mask', maskList: '999 / 99', alignment: 'left', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numero_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['abertura']))
    {
        $this->nm_new_label['abertura'] = "Abertura";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $abertura = $this->abertura;
   $sStyleHidden_abertura = '';
   if (isset($this->nmgp_cmp_hidden['abertura']) && $this->nmgp_cmp_hidden['abertura'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['abertura']);
       $sStyleHidden_abertura = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_abertura = 'display: none;';
   $sStyleReadInp_abertura = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['abertura']) && $this->nmgp_cmp_readonly['abertura'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['abertura']);
       $sStyleReadLab_abertura = '';
       $sStyleReadInp_abertura = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['abertura']) && $this->nmgp_cmp_hidden['abertura'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="abertura" value="<?php echo NM_encode_input($abertura) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_abertura_label" id="hidden_field_label_abertura" style="<?php echo $sStyleHidden_abertura; ?>"><span id="id_label_abertura"><?php echo $this->nm_new_label['abertura']; ?></span></TD>
    <TD class="scFormDataOdd css_abertura_line" id="hidden_field_data_abertura" style="<?php echo $sStyleHidden_abertura; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_abertura_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["abertura"]) &&  $this->nmgp_cmp_readonly["abertura"] == "on") { 

 ?>
<input type="hidden" name="abertura" value="<?php echo NM_encode_input($abertura) . "\">" . $abertura . ""; ?>
<?php } else { ?>
<span id="id_read_on_abertura" class="sc-ui-readonly-abertura css_abertura_line" style="<?php echo $sStyleReadLab_abertura; ?>"><?php echo NM_encode_input($abertura); ?></span><span id="id_read_off_abertura" style="white-space: nowrap;<?php echo $sStyleReadInp_abertura; ?>">
 <input class="sc-js-input scFormObjectOdd css_abertura_obj" style="" id="id_sc_field_abertura" type=text name="abertura" value="<?php echo NM_encode_input($abertura) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['abertura']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['abertura']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['abertura']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_abertura_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_abertura_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['origem']))
    {
        $this->nm_new_label['origem'] = "Origem";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $origem = $this->origem;
   $sStyleHidden_origem = '';
   if (isset($this->nmgp_cmp_hidden['origem']) && $this->nmgp_cmp_hidden['origem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['origem']);
       $sStyleHidden_origem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_origem = 'display: none;';
   $sStyleReadInp_origem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['origem']) && $this->nmgp_cmp_readonly['origem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['origem']);
       $sStyleReadLab_origem = '';
       $sStyleReadInp_origem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['origem']) && $this->nmgp_cmp_hidden['origem'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="origem" value="<?php echo NM_encode_input($origem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_origem_label" id="hidden_field_label_origem" style="<?php echo $sStyleHidden_origem; ?>"><span id="id_label_origem"><?php echo $this->nm_new_label['origem']; ?></span></TD>
    <TD class="scFormDataOdd css_origem_line" id="hidden_field_data_origem" style="<?php echo $sStyleHidden_origem; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_origem_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["origem"]) &&  $this->nmgp_cmp_readonly["origem"] == "on") { 

 ?>
<input type="hidden" name="origem" value="<?php echo NM_encode_input($origem) . "\">" . $origem . ""; ?>
<?php } else { ?>
<span id="id_read_on_origem" class="sc-ui-readonly-origem css_origem_line" style="<?php echo $sStyleReadLab_origem; ?>"><?php echo NM_encode_input($this->origem); ?></span><span id="id_read_off_origem" style="white-space: nowrap;<?php echo $sStyleReadInp_origem; ?>">
 <input class="sc-js-input scFormObjectOdd css_origem_obj" style="" id="id_sc_field_origem" type=text name="origem" value="<?php echo NM_encode_input($origem) ?>"
 alt="{enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_origem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_origem_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['retorno']))
    {
        $this->nm_new_label['retorno'] = "Prazo de Retorno";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $retorno = $this->retorno;
   $sStyleHidden_retorno = '';
   if (isset($this->nmgp_cmp_hidden['retorno']) && $this->nmgp_cmp_hidden['retorno'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['retorno']);
       $sStyleHidden_retorno = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_retorno = 'display: none;';
   $sStyleReadInp_retorno = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['retorno']) && $this->nmgp_cmp_readonly['retorno'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['retorno']);
       $sStyleReadLab_retorno = '';
       $sStyleReadInp_retorno = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['retorno']) && $this->nmgp_cmp_hidden['retorno'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="retorno" value="<?php echo NM_encode_input($retorno) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_retorno_label" id="hidden_field_label_retorno" style="<?php echo $sStyleHidden_retorno; ?>"><span id="id_label_retorno"><?php echo $this->nm_new_label['retorno']; ?></span></TD>
    <TD class="scFormDataOdd css_retorno_line" id="hidden_field_data_retorno" style="<?php echo $sStyleHidden_retorno; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_retorno_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["retorno"]) &&  $this->nmgp_cmp_readonly["retorno"] == "on") { 

 ?>
<input type="hidden" name="retorno" value="<?php echo NM_encode_input($retorno) . "\">" . $retorno . ""; ?>
<?php } else { ?>
<span id="id_read_on_retorno" class="sc-ui-readonly-retorno css_retorno_line" style="<?php echo $sStyleReadLab_retorno; ?>"><?php echo NM_encode_input($retorno); ?></span><span id="id_read_off_retorno" style="white-space: nowrap;<?php echo $sStyleReadInp_retorno; ?>">
 <input class="sc-js-input scFormObjectOdd css_retorno_obj" style="" id="id_sc_field_retorno" type=text name="retorno" value="<?php echo NM_encode_input($retorno) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['retorno']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['retorno']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['retorno']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_retorno_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_retorno_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipoacao']))
    {
        $this->nm_new_label['tipoacao'] = "Tipo de Ação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipoacao = $this->tipoacao;
   $sStyleHidden_tipoacao = '';
   if (isset($this->nmgp_cmp_hidden['tipoacao']) && $this->nmgp_cmp_hidden['tipoacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipoacao']);
       $sStyleHidden_tipoacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipoacao = 'display: none;';
   $sStyleReadInp_tipoacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipoacao']) && $this->nmgp_cmp_readonly['tipoacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipoacao']);
       $sStyleReadLab_tipoacao = '';
       $sStyleReadInp_tipoacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipoacao']) && $this->nmgp_cmp_hidden['tipoacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipoacao" value="<?php echo NM_encode_input($tipoacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_tipoacao_label" id="hidden_field_label_tipoacao" style="<?php echo $sStyleHidden_tipoacao; ?>"><span id="id_label_tipoacao"><?php echo $this->nm_new_label['tipoacao']; ?></span></TD>
    <TD class="scFormDataOdd css_tipoacao_line" id="hidden_field_data_tipoacao" style="<?php echo $sStyleHidden_tipoacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipoacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipoacao"]) &&  $this->nmgp_cmp_readonly["tipoacao"] == "on") { 

 ?>
<input type="hidden" name="tipoacao" value="<?php echo NM_encode_input($tipoacao) . "\">" . $tipoacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipoacao" class="sc-ui-readonly-tipoacao css_tipoacao_line" style="<?php echo $sStyleReadLab_tipoacao; ?>"><?php echo NM_encode_input($this->tipoacao); ?></span><span id="id_read_off_tipoacao" style="white-space: nowrap;<?php echo $sStyleReadInp_tipoacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipoacao_obj" style="" id="id_sc_field_tipoacao" type=text name="tipoacao" value="<?php echo NM_encode_input($tipoacao) ?>"
 alt="{enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipoacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipoacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['processo']))
    {
        $this->nm_new_label['processo'] = "Processo ou Setor Envolvido";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $processo = $this->processo;
   $sStyleHidden_processo = '';
   if (isset($this->nmgp_cmp_hidden['processo']) && $this->nmgp_cmp_hidden['processo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['processo']);
       $sStyleHidden_processo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_processo = 'display: none;';
   $sStyleReadInp_processo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['processo']) && $this->nmgp_cmp_readonly['processo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['processo']);
       $sStyleReadLab_processo = '';
       $sStyleReadInp_processo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['processo']) && $this->nmgp_cmp_hidden['processo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="processo" value="<?php echo NM_encode_input($processo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_processo_label" id="hidden_field_label_processo" style="<?php echo $sStyleHidden_processo; ?>"><span id="id_label_processo"><?php echo $this->nm_new_label['processo']; ?></span></TD>
    <TD class="scFormDataOdd css_processo_line" id="hidden_field_data_processo" style="<?php echo $sStyleHidden_processo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_processo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["processo"]) &&  $this->nmgp_cmp_readonly["processo"] == "on") { 

 ?>
<input type="hidden" name="processo" value="<?php echo NM_encode_input($processo) . "\">" . $processo . ""; ?>
<?php } else { ?>
<span id="id_read_on_processo" class="sc-ui-readonly-processo css_processo_line" style="<?php echo $sStyleReadLab_processo; ?>"><?php echo NM_encode_input($this->processo); ?></span><span id="id_read_off_processo" style="white-space: nowrap;<?php echo $sStyleReadInp_processo; ?>">
 <input class="sc-js-input scFormObjectOdd css_processo_obj" style="" id="id_sc_field_processo" type=text name="processo" value="<?php echo NM_encode_input($processo) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_processo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_processo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['responsavel']))
    {
        $this->nm_new_label['responsavel'] = "Responsavel pela Identificação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $responsavel = $this->responsavel;
   $sStyleHidden_responsavel = '';
   if (isset($this->nmgp_cmp_hidden['responsavel']) && $this->nmgp_cmp_hidden['responsavel'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['responsavel']);
       $sStyleHidden_responsavel = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_responsavel = 'display: none;';
   $sStyleReadInp_responsavel = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['responsavel']) && $this->nmgp_cmp_readonly['responsavel'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['responsavel']);
       $sStyleReadLab_responsavel = '';
       $sStyleReadInp_responsavel = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['responsavel']) && $this->nmgp_cmp_hidden['responsavel'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="responsavel" value="<?php echo NM_encode_input($responsavel) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_responsavel_label" id="hidden_field_label_responsavel" style="<?php echo $sStyleHidden_responsavel; ?>"><span id="id_label_responsavel"><?php echo $this->nm_new_label['responsavel']; ?></span></TD>
    <TD class="scFormDataOdd css_responsavel_line" id="hidden_field_data_responsavel" style="<?php echo $sStyleHidden_responsavel; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_responsavel_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["responsavel"]) &&  $this->nmgp_cmp_readonly["responsavel"] == "on") { 

 ?>
<input type="hidden" name="responsavel" value="<?php echo NM_encode_input($responsavel) . "\">" . $responsavel . ""; ?>
<?php } else { ?>
<span id="id_read_on_responsavel" class="sc-ui-readonly-responsavel css_responsavel_line" style="<?php echo $sStyleReadLab_responsavel; ?>"><?php echo NM_encode_input($this->responsavel); ?></span><span id="id_read_off_responsavel" style="white-space: nowrap;<?php echo $sStyleReadInp_responsavel; ?>">
 <input class="sc-js-input scFormObjectOdd css_responsavel_obj" style="" id="id_sc_field_responsavel" type=text name="responsavel" value="<?php echo NM_encode_input($responsavel) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_responsavel_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_responsavel_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['detalhamento']))
    {
        $this->nm_new_label['detalhamento'] = "Detalhamento do Registro de Não Conformidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $detalhamento = $this->detalhamento;
   $sStyleHidden_detalhamento = '';
   if (isset($this->nmgp_cmp_hidden['detalhamento']) && $this->nmgp_cmp_hidden['detalhamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['detalhamento']);
       $sStyleHidden_detalhamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_detalhamento = 'display: none;';
   $sStyleReadInp_detalhamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['detalhamento']) && $this->nmgp_cmp_readonly['detalhamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['detalhamento']);
       $sStyleReadLab_detalhamento = '';
       $sStyleReadInp_detalhamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['detalhamento']) && $this->nmgp_cmp_hidden['detalhamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="detalhamento" value="<?php echo NM_encode_input($detalhamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_detalhamento_label" id="hidden_field_label_detalhamento" style="<?php echo $sStyleHidden_detalhamento; ?>"><span id="id_label_detalhamento"><?php echo $this->nm_new_label['detalhamento']; ?></span></TD>
    <TD class="scFormDataOdd css_detalhamento_line" id="hidden_field_data_detalhamento" style="<?php echo $sStyleHidden_detalhamento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_detalhamento_line" style="vertical-align: top;padding: 0px">
<?php
$detalhamento_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($detalhamento));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["detalhamento"]) &&  $this->nmgp_cmp_readonly["detalhamento"] == "on") { 

 ?>
<input type="hidden" name="detalhamento" value="<?php echo NM_encode_input($detalhamento) . "\">" . $detalhamento_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_detalhamento" class="sc-ui-readonly-detalhamento css_detalhamento_line" style="<?php echo $sStyleReadLab_detalhamento; ?>"><?php echo NM_encode_input($detalhamento_val); ?></span><span id="id_read_off_detalhamento" style="white-space: nowrap;<?php echo $sStyleReadInp_detalhamento; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_detalhamento_obj" style="white-space: pre-wrap;" name="detalhamento" id="id_sc_field_detalhamento" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $detalhamento; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_detalhamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_detalhamento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['causas']))
    {
        $this->nm_new_label['causas'] = "Causas da Não Conformidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $causas = $this->causas;
   $sStyleHidden_causas = '';
   if (isset($this->nmgp_cmp_hidden['causas']) && $this->nmgp_cmp_hidden['causas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['causas']);
       $sStyleHidden_causas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_causas = 'display: none;';
   $sStyleReadInp_causas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['causas']) && $this->nmgp_cmp_readonly['causas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['causas']);
       $sStyleReadLab_causas = '';
       $sStyleReadInp_causas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['causas']) && $this->nmgp_cmp_hidden['causas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="causas" value="<?php echo NM_encode_input($causas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_causas_label" id="hidden_field_label_causas" style="<?php echo $sStyleHidden_causas; ?>"><span id="id_label_causas"><?php echo $this->nm_new_label['causas']; ?></span></TD>
    <TD class="scFormDataOdd css_causas_line" id="hidden_field_data_causas" style="<?php echo $sStyleHidden_causas; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_causas_line" style="vertical-align: top;padding: 0px">
<?php
$causas_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($causas));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["causas"]) &&  $this->nmgp_cmp_readonly["causas"] == "on") { 

 ?>
<input type="hidden" name="causas" value="<?php echo NM_encode_input($causas) . "\">" . $causas_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_causas" class="sc-ui-readonly-causas css_causas_line" style="<?php echo $sStyleReadLab_causas; ?>"><?php echo NM_encode_input($causas_val); ?></span><span id="id_read_off_causas" style="white-space: nowrap;<?php echo $sStyleReadInp_causas; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_causas_obj" style="white-space: pre-wrap;" name="causas" id="id_sc_field_causas" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $causas; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_causas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_causas_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['imediata']))
    {
        $this->nm_new_label['imediata'] = "Ação Imediata";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $imediata = $this->imediata;
   $sStyleHidden_imediata = '';
   if (isset($this->nmgp_cmp_hidden['imediata']) && $this->nmgp_cmp_hidden['imediata'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['imediata']);
       $sStyleHidden_imediata = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_imediata = 'display: none;';
   $sStyleReadInp_imediata = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['imediata']) && $this->nmgp_cmp_readonly['imediata'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['imediata']);
       $sStyleReadLab_imediata = '';
       $sStyleReadInp_imediata = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['imediata']) && $this->nmgp_cmp_hidden['imediata'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="imediata" value="<?php echo NM_encode_input($imediata) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_imediata_label" id="hidden_field_label_imediata" style="<?php echo $sStyleHidden_imediata; ?>"><span id="id_label_imediata"><?php echo $this->nm_new_label['imediata']; ?></span></TD>
    <TD class="scFormDataOdd css_imediata_line" id="hidden_field_data_imediata" style="<?php echo $sStyleHidden_imediata; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_imediata_line" style="vertical-align: top;padding: 0px">
<?php
$imediata_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($imediata));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["imediata"]) &&  $this->nmgp_cmp_readonly["imediata"] == "on") { 

 ?>
<input type="hidden" name="imediata" value="<?php echo NM_encode_input($imediata) . "\">" . $imediata_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_imediata" class="sc-ui-readonly-imediata css_imediata_line" style="<?php echo $sStyleReadLab_imediata; ?>"><?php echo NM_encode_input($imediata_val); ?></span><span id="id_read_off_imediata" style="white-space: nowrap;<?php echo $sStyleReadInp_imediata; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_imediata_obj" style="white-space: pre-wrap;" name="imediata" id="id_sc_field_imediata" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $imediata; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_imediata_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_imediata_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['corretiva']))
    {
        $this->nm_new_label['corretiva'] = "Ação Corretiva";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $corretiva = $this->corretiva;
   $sStyleHidden_corretiva = '';
   if (isset($this->nmgp_cmp_hidden['corretiva']) && $this->nmgp_cmp_hidden['corretiva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['corretiva']);
       $sStyleHidden_corretiva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_corretiva = 'display: none;';
   $sStyleReadInp_corretiva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['corretiva']) && $this->nmgp_cmp_readonly['corretiva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['corretiva']);
       $sStyleReadLab_corretiva = '';
       $sStyleReadInp_corretiva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['corretiva']) && $this->nmgp_cmp_hidden['corretiva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="corretiva" value="<?php echo NM_encode_input($corretiva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_corretiva_label" id="hidden_field_label_corretiva" style="<?php echo $sStyleHidden_corretiva; ?>"><span id="id_label_corretiva"><?php echo $this->nm_new_label['corretiva']; ?></span></TD>
    <TD class="scFormDataOdd css_corretiva_line" id="hidden_field_data_corretiva" style="<?php echo $sStyleHidden_corretiva; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_corretiva_line" style="vertical-align: top;padding: 0px">
<?php
$corretiva_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($corretiva));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["corretiva"]) &&  $this->nmgp_cmp_readonly["corretiva"] == "on") { 

 ?>
<input type="hidden" name="corretiva" value="<?php echo NM_encode_input($corretiva) . "\">" . $corretiva_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_corretiva" class="sc-ui-readonly-corretiva css_corretiva_line" style="<?php echo $sStyleReadLab_corretiva; ?>"><?php echo NM_encode_input($corretiva_val); ?></span><span id="id_read_off_corretiva" style="white-space: nowrap;<?php echo $sStyleReadInp_corretiva; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_corretiva_obj" style="white-space: pre-wrap;" name="corretiva" id="id_sc_field_corretiva" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $corretiva; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_corretiva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_corretiva_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['responsavel_implementacao']))
    {
        $this->nm_new_label['responsavel_implementacao'] = "Responsavel pela Implementação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $responsavel_implementacao = $this->responsavel_implementacao;
   $sStyleHidden_responsavel_implementacao = '';
   if (isset($this->nmgp_cmp_hidden['responsavel_implementacao']) && $this->nmgp_cmp_hidden['responsavel_implementacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['responsavel_implementacao']);
       $sStyleHidden_responsavel_implementacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_responsavel_implementacao = 'display: none;';
   $sStyleReadInp_responsavel_implementacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['responsavel_implementacao']) && $this->nmgp_cmp_readonly['responsavel_implementacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['responsavel_implementacao']);
       $sStyleReadLab_responsavel_implementacao = '';
       $sStyleReadInp_responsavel_implementacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['responsavel_implementacao']) && $this->nmgp_cmp_hidden['responsavel_implementacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="responsavel_implementacao" value="<?php echo NM_encode_input($responsavel_implementacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_responsavel_implementacao_label" id="hidden_field_label_responsavel_implementacao" style="<?php echo $sStyleHidden_responsavel_implementacao; ?>"><span id="id_label_responsavel_implementacao"><?php echo $this->nm_new_label['responsavel_implementacao']; ?></span></TD>
    <TD class="scFormDataOdd css_responsavel_implementacao_line" id="hidden_field_data_responsavel_implementacao" style="<?php echo $sStyleHidden_responsavel_implementacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_responsavel_implementacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["responsavel_implementacao"]) &&  $this->nmgp_cmp_readonly["responsavel_implementacao"] == "on") { 

 ?>
<input type="hidden" name="responsavel_implementacao" value="<?php echo NM_encode_input($responsavel_implementacao) . "\">" . $responsavel_implementacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_responsavel_implementacao" class="sc-ui-readonly-responsavel_implementacao css_responsavel_implementacao_line" style="<?php echo $sStyleReadLab_responsavel_implementacao; ?>"><?php echo NM_encode_input($this->responsavel_implementacao); ?></span><span id="id_read_off_responsavel_implementacao" style="white-space: nowrap;<?php echo $sStyleReadInp_responsavel_implementacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_responsavel_implementacao_obj" style="" id="id_sc_field_responsavel_implementacao" type=text name="responsavel_implementacao" value="<?php echo NM_encode_input($responsavel_implementacao) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_responsavel_implementacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_responsavel_implementacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['eliminacao']))
    {
        $this->nm_new_label['eliminacao'] = "Prazo para Eliminação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $eliminacao = $this->eliminacao;
   $sStyleHidden_eliminacao = '';
   if (isset($this->nmgp_cmp_hidden['eliminacao']) && $this->nmgp_cmp_hidden['eliminacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['eliminacao']);
       $sStyleHidden_eliminacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_eliminacao = 'display: none;';
   $sStyleReadInp_eliminacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['eliminacao']) && $this->nmgp_cmp_readonly['eliminacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['eliminacao']);
       $sStyleReadLab_eliminacao = '';
       $sStyleReadInp_eliminacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['eliminacao']) && $this->nmgp_cmp_hidden['eliminacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="eliminacao" value="<?php echo NM_encode_input($eliminacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_eliminacao_label" id="hidden_field_label_eliminacao" style="<?php echo $sStyleHidden_eliminacao; ?>"><span id="id_label_eliminacao"><?php echo $this->nm_new_label['eliminacao']; ?></span></TD>
    <TD class="scFormDataOdd css_eliminacao_line" id="hidden_field_data_eliminacao" style="<?php echo $sStyleHidden_eliminacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_eliminacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["eliminacao"]) &&  $this->nmgp_cmp_readonly["eliminacao"] == "on") { 

 ?>
<input type="hidden" name="eliminacao" value="<?php echo NM_encode_input($eliminacao) . "\">" . $eliminacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_eliminacao" class="sc-ui-readonly-eliminacao css_eliminacao_line" style="<?php echo $sStyleReadLab_eliminacao; ?>"><?php echo NM_encode_input($eliminacao); ?></span><span id="id_read_off_eliminacao" style="white-space: nowrap;<?php echo $sStyleReadInp_eliminacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_eliminacao_obj" style="" id="id_sc_field_eliminacao" type=text name="eliminacao" value="<?php echo NM_encode_input($eliminacao) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['eliminacao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['eliminacao']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['eliminacao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_eliminacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_eliminacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['eliminacao_novo']))
    {
        $this->nm_new_label['eliminacao_novo'] = "Novo Prazo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $eliminacao_novo = $this->eliminacao_novo;
   $sStyleHidden_eliminacao_novo = '';
   if (isset($this->nmgp_cmp_hidden['eliminacao_novo']) && $this->nmgp_cmp_hidden['eliminacao_novo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['eliminacao_novo']);
       $sStyleHidden_eliminacao_novo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_eliminacao_novo = 'display: none;';
   $sStyleReadInp_eliminacao_novo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['eliminacao_novo']) && $this->nmgp_cmp_readonly['eliminacao_novo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['eliminacao_novo']);
       $sStyleReadLab_eliminacao_novo = '';
       $sStyleReadInp_eliminacao_novo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['eliminacao_novo']) && $this->nmgp_cmp_hidden['eliminacao_novo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="eliminacao_novo" value="<?php echo NM_encode_input($eliminacao_novo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_eliminacao_novo_label" id="hidden_field_label_eliminacao_novo" style="<?php echo $sStyleHidden_eliminacao_novo; ?>"><span id="id_label_eliminacao_novo"><?php echo $this->nm_new_label['eliminacao_novo']; ?></span></TD>
    <TD class="scFormDataOdd css_eliminacao_novo_line" id="hidden_field_data_eliminacao_novo" style="<?php echo $sStyleHidden_eliminacao_novo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_eliminacao_novo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["eliminacao_novo"]) &&  $this->nmgp_cmp_readonly["eliminacao_novo"] == "on") { 

 ?>
<input type="hidden" name="eliminacao_novo" value="<?php echo NM_encode_input($eliminacao_novo) . "\">" . $eliminacao_novo . ""; ?>
<?php } else { ?>
<span id="id_read_on_eliminacao_novo" class="sc-ui-readonly-eliminacao_novo css_eliminacao_novo_line" style="<?php echo $sStyleReadLab_eliminacao_novo; ?>"><?php echo NM_encode_input($eliminacao_novo); ?></span><span id="id_read_off_eliminacao_novo" style="white-space: nowrap;<?php echo $sStyleReadInp_eliminacao_novo; ?>">
 <input class="sc-js-input scFormObjectOdd css_eliminacao_novo_obj" style="" id="id_sc_field_eliminacao_novo" type=text name="eliminacao_novo" value="<?php echo NM_encode_input($eliminacao_novo) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['eliminacao_novo']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['eliminacao_novo']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['eliminacao_novo']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_eliminacao_novo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_eliminacao_novo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['registro_eficacia']))
    {
        $this->nm_new_label['registro_eficacia'] = "Registro da Verificação da Eficácia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $registro_eficacia = $this->registro_eficacia;
   $sStyleHidden_registro_eficacia = '';
   if (isset($this->nmgp_cmp_hidden['registro_eficacia']) && $this->nmgp_cmp_hidden['registro_eficacia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['registro_eficacia']);
       $sStyleHidden_registro_eficacia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_registro_eficacia = 'display: none;';
   $sStyleReadInp_registro_eficacia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['registro_eficacia']) && $this->nmgp_cmp_readonly['registro_eficacia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['registro_eficacia']);
       $sStyleReadLab_registro_eficacia = '';
       $sStyleReadInp_registro_eficacia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['registro_eficacia']) && $this->nmgp_cmp_hidden['registro_eficacia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="registro_eficacia" value="<?php echo NM_encode_input($registro_eficacia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_registro_eficacia_label" id="hidden_field_label_registro_eficacia" style="<?php echo $sStyleHidden_registro_eficacia; ?>"><span id="id_label_registro_eficacia"><?php echo $this->nm_new_label['registro_eficacia']; ?></span></TD>
    <TD class="scFormDataOdd css_registro_eficacia_line" id="hidden_field_data_registro_eficacia" style="<?php echo $sStyleHidden_registro_eficacia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_registro_eficacia_line" style="vertical-align: top;padding: 0px">
<?php
$registro_eficacia_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($registro_eficacia));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["registro_eficacia"]) &&  $this->nmgp_cmp_readonly["registro_eficacia"] == "on") { 

 ?>
<input type="hidden" name="registro_eficacia" value="<?php echo NM_encode_input($registro_eficacia) . "\">" . $registro_eficacia_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_registro_eficacia" class="sc-ui-readonly-registro_eficacia css_registro_eficacia_line" style="<?php echo $sStyleReadLab_registro_eficacia; ?>"><?php echo NM_encode_input($registro_eficacia_val); ?></span><span id="id_read_off_registro_eficacia" style="white-space: nowrap;<?php echo $sStyleReadInp_registro_eficacia; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_registro_eficacia_obj" style="white-space: pre-wrap;" name="registro_eficacia" id="id_sc_field_registro_eficacia" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $registro_eficacia; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_registro_eficacia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_registro_eficacia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['eficaz']))
    {
        $this->nm_new_label['eficaz'] = "A Ação foi Eficaz?";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $eficaz = $this->eficaz;
   $sStyleHidden_eficaz = '';
   if (isset($this->nmgp_cmp_hidden['eficaz']) && $this->nmgp_cmp_hidden['eficaz'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['eficaz']);
       $sStyleHidden_eficaz = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_eficaz = 'display: none;';
   $sStyleReadInp_eficaz = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['eficaz']) && $this->nmgp_cmp_readonly['eficaz'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['eficaz']);
       $sStyleReadLab_eficaz = '';
       $sStyleReadInp_eficaz = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['eficaz']) && $this->nmgp_cmp_hidden['eficaz'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="eficaz" value="<?php echo NM_encode_input($eficaz) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_eficaz_label" id="hidden_field_label_eficaz" style="<?php echo $sStyleHidden_eficaz; ?>"><span id="id_label_eficaz"><?php echo $this->nm_new_label['eficaz']; ?></span></TD>
    <TD class="scFormDataOdd css_eficaz_line" id="hidden_field_data_eficaz" style="<?php echo $sStyleHidden_eficaz; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_eficaz_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["eficaz"]) &&  $this->nmgp_cmp_readonly["eficaz"] == "on") { 

 ?>
<input type="hidden" name="eficaz" value="<?php echo NM_encode_input($eficaz) . "\">" . $eficaz . ""; ?>
<?php } else { ?>
<span id="id_read_on_eficaz" class="sc-ui-readonly-eficaz css_eficaz_line" style="<?php echo $sStyleReadLab_eficaz; ?>"><?php echo NM_encode_input($this->eficaz); ?></span><span id="id_read_off_eficaz" style="white-space: nowrap;<?php echo $sStyleReadInp_eficaz; ?>">
 <input class="sc-js-input scFormObjectOdd css_eficaz_obj" style="" id="id_sc_field_eficaz" type=text name="eficaz" value="<?php echo NM_encode_input($eficaz) ?>"
 alt="{enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_eficaz_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_eficaz_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['eficaz_data']))
    {
        $this->nm_new_label['eficaz_data'] = "Data:";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $eficaz_data = $this->eficaz_data;
   $sStyleHidden_eficaz_data = '';
   if (isset($this->nmgp_cmp_hidden['eficaz_data']) && $this->nmgp_cmp_hidden['eficaz_data'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['eficaz_data']);
       $sStyleHidden_eficaz_data = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_eficaz_data = 'display: none;';
   $sStyleReadInp_eficaz_data = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['eficaz_data']) && $this->nmgp_cmp_readonly['eficaz_data'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['eficaz_data']);
       $sStyleReadLab_eficaz_data = '';
       $sStyleReadInp_eficaz_data = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['eficaz_data']) && $this->nmgp_cmp_hidden['eficaz_data'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="eficaz_data" value="<?php echo NM_encode_input($eficaz_data) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_eficaz_data_label" id="hidden_field_label_eficaz_data" style="<?php echo $sStyleHidden_eficaz_data; ?>"><span id="id_label_eficaz_data"><?php echo $this->nm_new_label['eficaz_data']; ?></span></TD>
    <TD class="scFormDataOdd css_eficaz_data_line" id="hidden_field_data_eficaz_data" style="<?php echo $sStyleHidden_eficaz_data; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_eficaz_data_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["eficaz_data"]) &&  $this->nmgp_cmp_readonly["eficaz_data"] == "on") { 

 ?>
<input type="hidden" name="eficaz_data" value="<?php echo NM_encode_input($eficaz_data) . "\">" . $eficaz_data . ""; ?>
<?php } else { ?>
<span id="id_read_on_eficaz_data" class="sc-ui-readonly-eficaz_data css_eficaz_data_line" style="<?php echo $sStyleReadLab_eficaz_data; ?>"><?php echo NM_encode_input($eficaz_data); ?></span><span id="id_read_off_eficaz_data" style="white-space: nowrap;<?php echo $sStyleReadInp_eficaz_data; ?>">
 <input class="sc-js-input scFormObjectOdd css_eficaz_data_obj" style="" id="id_sc_field_eficaz_data" type=text name="eficaz_data" value="<?php echo NM_encode_input($eficaz_data) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['eficaz_data']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['eficaz_data']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['eficaz_data']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_eficaz_data_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_eficaz_data_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['novo_rnc']))
    {
        $this->nm_new_label['novo_rnc'] = "Novo Rnc:";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $novo_rnc = $this->novo_rnc;
   $sStyleHidden_novo_rnc = '';
   if (isset($this->nmgp_cmp_hidden['novo_rnc']) && $this->nmgp_cmp_hidden['novo_rnc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['novo_rnc']);
       $sStyleHidden_novo_rnc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_novo_rnc = 'display: none;';
   $sStyleReadInp_novo_rnc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['novo_rnc']) && $this->nmgp_cmp_readonly['novo_rnc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['novo_rnc']);
       $sStyleReadLab_novo_rnc = '';
       $sStyleReadInp_novo_rnc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['novo_rnc']) && $this->nmgp_cmp_hidden['novo_rnc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="novo_rnc" value="<?php echo NM_encode_input($novo_rnc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_novo_rnc_label" id="hidden_field_label_novo_rnc" style="<?php echo $sStyleHidden_novo_rnc; ?>"><span id="id_label_novo_rnc"><?php echo $this->nm_new_label['novo_rnc']; ?></span></TD>
    <TD class="scFormDataOdd css_novo_rnc_line" id="hidden_field_data_novo_rnc" style="<?php echo $sStyleHidden_novo_rnc; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_novo_rnc_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["novo_rnc"]) &&  $this->nmgp_cmp_readonly["novo_rnc"] == "on") { 

 ?>
<input type="hidden" name="novo_rnc" value="<?php echo NM_encode_input($novo_rnc) . "\">" . $novo_rnc . ""; ?>
<?php } else { ?>
<span id="id_read_on_novo_rnc" class="sc-ui-readonly-novo_rnc css_novo_rnc_line" style="<?php echo $sStyleReadLab_novo_rnc; ?>"><?php echo NM_encode_input($this->novo_rnc); ?></span><span id="id_read_off_novo_rnc" style="white-space: nowrap;<?php echo $sStyleReadInp_novo_rnc; ?>">
 <input class="sc-js-input scFormObjectOdd css_novo_rnc_obj" style="" id="id_sc_field_novo_rnc" type=text name="novo_rnc" value="<?php echo NM_encode_input($novo_rnc) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['novo_rnc']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['novo_rnc']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_novo_rnc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_novo_rnc_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['obs']))
    {
        $this->nm_new_label['obs'] = "Obs.:";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $obs = $this->obs;
   $sStyleHidden_obs = '';
   if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['obs']);
       $sStyleHidden_obs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_obs = 'display: none;';
   $sStyleReadInp_obs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['obs']) && $this->nmgp_cmp_readonly['obs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['obs']);
       $sStyleReadLab_obs = '';
       $sStyleReadInp_obs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="obs" value="<?php echo NM_encode_input($obs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_obs_label" id="hidden_field_label_obs" style="<?php echo $sStyleHidden_obs; ?>"><span id="id_label_obs"><?php echo $this->nm_new_label['obs']; ?></span></TD>
    <TD class="scFormDataOdd css_obs_line" id="hidden_field_data_obs" style="<?php echo $sStyleHidden_obs; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_obs_line" style="vertical-align: top;padding: 0px">
<?php
$obs_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($obs));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obs"]) &&  $this->nmgp_cmp_readonly["obs"] == "on") { 

 ?>
<input type="hidden" name="obs" value="<?php echo NM_encode_input($obs) . "\">" . $obs_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_obs" class="sc-ui-readonly-obs css_obs_line" style="<?php echo $sStyleReadLab_obs; ?>"><?php echo NM_encode_input($obs_val); ?></span><span id="id_read_off_obs" style="white-space: nowrap;<?php echo $sStyleReadInp_obs; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_obs_obj" style="white-space: pre-wrap;" name="obs" id="id_sc_field_obs" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $obs; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_obs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_obs_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>
<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['masterValue']);
?>
}
<?php
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_rnc");
 parent.scAjaxDetailHeight("form_rnc", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailHeight("form_rnc", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_rnc']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 
