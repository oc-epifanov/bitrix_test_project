<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="information-block"> 	 	 
	<div class="information-block-head">���������������</div>
	�������� ��������: �� ��������� ����������� ������ <b>��������</b>. ��������������� ��������� ����������� �������� ������ ����-�����. �������� ��������� ����������� ������ �� ����� ����� �� ����������� <a href="/bitrix/admin/cache.php">��������</a>.
</div>

<div class="information-block">
<div class="information-block-head">������ �����</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork.group_top",
	"",
	Array(
		"GROUP_VAR" => "group_id", 
		"PATH_TO_GROUP" => "/club/group/#group_id#/", 
		"PATH_TO_GROUP_SEARCH" => "/club/group/search/", 
		"ITEMS_COUNT" => "4", 
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s", 
		"DISPLAY_IMAGE" => "Y", 
		"DISPLAY_DESCRIPTION" => "N", 
		"DISPLAY_NUMBER_OF_MEMBERS" => "Y", 
		"DISPLAY_SUBJECT" => "Y", 
		"CACHE_TIME" => "180" 
	)
);?>
</div>

<div class="information-block"> 	 	 
  <div class="information-block-head">�����</div>
 	<?$APPLICATION->IncludeComponent(
	"bitrix:voting.current",
	"main_page",
	Array(
		"CHANNEL_SID" => "ANKETA",
		"CACHE_TYPE"	=>	"A",
		"CACHE_TIME"	=>	"3600",
		"AJAX_MODE" => "Y", 
		"AJAX_OPTION_SHADOW" => "Y", 
		"AJAX_OPTION_JUMP" => "Y", 
		"AJAX_OPTION_STYLE" => "Y", 
		"AJAX_OPTION_HISTORY" => "N", 		
	)
);?> </div>


	<div class="information-block">
		<div class="information-block-head">���� ���</div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:photo.random",
	"",
	Array("IBLOCK_TYPE" => "gallery", 
		"IBLOCKS" => Array("10"), 
		"DETAIL_URL" => "/content/photo/#SECTION_ID#/#ELEMENT_ID#/", 
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "180")
	);?></div>