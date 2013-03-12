<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET;?>">
<?$APPLICATION->ShowMeta("keywords")?>
<?$APPLICATION->ShowMeta("description")?>
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowCSS();?>
<?$APPLICATION->ShowHeadStrings()?>
<?$APPLICATION->ShowHeadScripts()?>
</head>
<body BGCOLOR="#FFFFFF" TEXT="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> <? $APPLICATION->ShowPanel (); ?> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100"> 
  <tbody> 
    <tr valign="top"> <td background="bitrix/templates/test/images/pix_s.jpg" width="20%" align="right"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_tc.jpg"></td> </tr>
           </tbody>
         </table>
       </td> <td width="1024" background="bitrix/templates/test/images/pix_s.jpg"> 
        <table width="1024" border="0" cellspacing="0" cellpadding="0" height="100"> 
          <tbody> 
            <tr valign="top"> <td width="25" background="bitrix/templates/test/images/pix_ts.jpg"></td> <td background="bitrix/templates/test/images/fon2.jpg" align="center" width="350"><img src="bitrix/templates/test/images/log_top.gif" width="316" height="92"  /></td> <td background="bitrix/templates/test/images/fon2.jpg"> 
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text"> 
                  <tbody> 
                    <tr> <td align="right"> 
<!-- #Begin_Auth -->
 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"REGISTER_URL" => "/auth/",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/personal/profile/",
		"SHOW_ERRORS" => "N"
	)
);?> 
<!-- #End_Auth -->
 </td> <td align="right" width="10"></td> </tr>
                   
                    <tr><td align="right"> 
<!-- #Begin_Include -->
 
<!-- #End_Include -->
 </td> </tr>
                   </tbody>
                 </table>
               </td> </tr>
           </tbody>
         </table>
       </td> <td background="bitrix/templates/test/images/pix_s.jpg" width="20%"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_tc_l.jpg"></td> </tr>
           </tbody>
         </table>
       </td> </tr>
   </tbody>
 </table>
 
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100"> 
  <tbody> 
    <tr valign="top"> <td background="bitrix/templates/test/images/pix_c.jpg" width="20%" align="right"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_c.jpg"></td> </tr>
           </tbody>
         </table>
       </td> <td width="1024" background="bitrix/templates/test/images/pix_c.jpg"> 
        <table width="1024" border="0" cellspacing="0" cellpadding="0"> 
          <tbody> 
            <tr> <td valign="top" background="bitrix/templates/test/images/fot_tabl_w.gif" width="250"> 
<!-- #Begin_Left_Menu -->
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"fish1",
	Array(
		"ROOT_MENU_TYPE" => "left",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => ""
	)
);?> 
<!-- #End_Left_Menu -->
 
                <br />
               
                <table width="100%" border="0" cellspacing="0" cellpadding="0" height="2"> 
                  <tbody> 
                    <tr> <td></td> </tr>
                   </tbody>
                 </table>
               </td> <td width="774" background="bitrix/templates/test/images/fon_glav.jpg" valign="top" align="right"> 
                <table border="0" cellspacing="0" cellpadding="0" width="100%"> 
                  <tbody> 
                    <tr> <td height="20" width="150"></td> 				 <td height="20"></td> 				<td height="20" width="10"></td></tr>
                   
                    <tr> <td height="20" width="150" background="bitrix/templates/test/images/fon_pix_g.jpg"><img src="bitrix/templates/test/images/fon_pix_g.jpg" width="150" height="1"  /></td> 				 <td height="20" background="bitrix/templates/test/images/pix_c_menu.jpg" align="right"> 
<!-- #Begin_part_menu -->
<?$APPLICATION->IncludeComponent("bitrix:menu", "fish3", array(
	"ROOT_MENU_TYPE" => "part",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
<!-- #End_part_menu -->
</td> <td height="20" background="bitrix/templates/test/images/pix_c_menu.jpg" width="10" align="right"></td></tr>
                   </tbody>
                 </table>
               </td> </tr>
           </tbody>
         </table>
       </td> <td background="bitrix/templates/test/images/pix_c.jpg" width="20%"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_c_l.jpg"></td> </tr>
           </tbody>
         </table>
       </td> </tr>
   </tbody>
 </table>
 
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="10"> 
  <tbody> 
    <tr background="bitrix/templates/test/images/pix_c.jpg" valign="top"> <td background="bitrix/templates/test/images/pix_ts.jpg" width="20%" align="right"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_ts.jpg"></td> </tr>
           </tbody>
         </table>
       </td> <td width="1024" background="bitrix/templates/test/images/pix_s.jpg"><img src="bitrix/templates/test/images/pix.gif" width="1024" height="10"  /></td> <td background="bitrix/templates/test/images/pix_ts.jpg" width="20%"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_ts_l.jpg"></td> </tr>
           </tbody>
         </table>
       </td> </tr>
   </tbody>
 </table>
 
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="10"> 
  <tbody> 
    <tr valign="top"> <td width="20%" align="right"> 
        <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%"> 
          <tbody> 
            <tr> <td background="bitrix/templates/test/images/fon_ten_w.jpg"></td> </tr>
           </tbody>
         </table>
       </td> <td width="1024"> 
        <table width="1024" border="0" cellspacing="0" cellpadding="0"> 
          <tbody> 
            <tr valign="top"> <td width="250" background="bitrix/templates/test/images/fon_l_stolba.jpg" class="br" align="center"> 
<!-- #Begin_left_Column -->
 
                <table width="99%" border="0" cellspacing="0" cellpadding="0"> 
                  <tbody> 
                    <tr> <td height="25" background="bitrix/templates/test/images/fot_tabl_centr.jpg" width="25"><img src="bitrix/templates/test/images/ukazatel_red.gif" width="25" height="25"  /></td> <td width="1" height="25" valign="top" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td height="25" background="bitrix/templates/test/images/fot_tabl_centr.jpg"><img src="bitrix/templates/test/images/pix.gif" width="10" height="10"  /><b><a href="#" class="text" ><font size="2" color="#666666">Блоги</font></a></b></td> </tr>
                   
                    <tr> <td height="1" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td width="1" height="1"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td height="1" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> </tr>
                   </tbody>
                 </table>
               
<!-- #Begin_blog -->
 
                <table width="99%" border="0" cellspacing="3" cellpadding="5"> 
                  <tbody> 
                    <tr> <td class="br" bgcolor="#DEDEE2" bordercolor="#bfbfbf"><img src="info_bloki/001.jpg" width="78" height="61" align="left"  /><font size="2">Споры о том, на что ловить и чем лучше прикармливать, наверное, никогда не закончатся. 
                          <br />
                         <a href="#" ><img src="bitrix/templates/test/images/ukaz_inf.jpg" width="20" height="20" align="right" border="0"  /></a> </font></td></tr>
                   </tbody>
                 </table>
               
                <table width="99%" border="0" cellspacing="3" cellpadding="5"> 
                  <tbody> 
                    <tr> <td class="br" bgcolor="#DEDEE2" bordercolor="#bfbfbf"><img src="info_bloki/002.jpg" width="78" height="61" align="left"  /><font size="2">Споры о том, на что ловить и чем лучше прикармливать, наверное, никогда не закончатся. 
                          <br />
                         <a href="#" ><img src="bitrix/templates/test/images/ukaz_inf.jpg" width="20" height="20" align="right" border="0"  /></a> </font></td></tr>
                   </tbody>
                 </table>
               
                <table width="99%" border="0" cellspacing="3" cellpadding="5"> 
                  <tbody> 
                    <tr> <td class="br" bgcolor="#DEDEE2" bordercolor="#bfbfbf"><img src="info_bloki/003.jpg" width="78" height="61" align="left"  /><font size="2">Споры о том, на что ловить и чем лучше прикармливать, наверное, никогда не закончатся. 
                          <br />
                         <a href="#" ><img src="bitrix/templates/test/images/ukaz_inf.jpg" width="20" height="20" align="right" border="0"  /></a> </font></td> </tr>
                   </tbody>
                 </table>
               
<!-- #End_blog -->
 
<!-- #End_left_Column -->
 </td> <td class="br" background="bitrix/templates/test/images/fot_centr_tabl.jpg"> 
                <table width="100%" border="0" cellspacing="0" cellpadding="5" height="100%" class="text"> 
                  <tbody> 
                    <tr> <td valign="top"> 
<!-- #Begin_nav -->
 <b><a href="#" class="text" ><font color="#666666" size="2">Статьи</font></a><font size="2"> / <a href="#" class="text" ><font color="#333333">Советы</font></a> / <a href="#" class="text" ><font color="#FF0000">О прикорме</font></a></font></b> 
<!-- #End_nav -->
 
                        <table width="100%" border="0" cellspacing="10" cellpadding="0"> 
                          <tbody> 
                            <tr> <td> 