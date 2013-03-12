<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<table width="1024" height="10" 
		cellspacing="0" cellpadding="0" 
		border="0" class="bottom-menu">
	<tr>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<td align="center"><img width="4" height="4" src="/bitrix/templates/test/images/punkt_top.gif"  /><a href="<?=$arItem["LINK"]?>" 
class="bottom-menu" class="selected">
<?=$arItem["TEXT"]?>
</a></td>
	<?else:?>
		<td align="center"><img width="4" height="4" src="/bitrix/templates/test/images/punkt_top.gif"  /><a href="<?=$arItem["LINK"]?>" class="bottom-menu"><?=$arItem["TEXT"]?></a></td>
	<?endif?>
	
<?endforeach?>
	</tr>
</table>
<?endif?>