<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<table width="99%" border="0" cellspacing="0" cellpadding="0">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<tr> <td height="25" background="bitrix/templates/test/images/fot_tabl_centr.jpg" width="25"><img src="bitrix/templates/test/images/ukazatel_red.gif" width="25" height="25"  /></td> <td width="1" height="25" valign="top" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td height="25" background="bitrix/templates/test/images/fot_tabl_centr.jpg"><img src="bitrix/templates/test/images/pix.gif" width="10" height="10"  /><a class="left-menu" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></td> <td width="1" height="25" valign="top" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> </tr>

    <tr> <td height="1" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td width="1" height="1"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td height="1" background="bitrix/templates/test/images/fot_tabl_c.gif"><img src="bitrix/templates/test/images/fot_tabl_w.gif" width="2" height="2"  /></td> <td width="1" height="1"><img src="bitrix/templates/test/images/fot_tabl_c.gif" width="2" height="2"  /></td> </tr>

<?endforeach?>

</table>
<?endif?>
