<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="information-block"><?$APPLICATION->IncludeComponent(
	"bitrix:voting.current",
	"main_page",
	Array(
		"CHANNEL_SID" => "BOOKS_VOTE",
		"CACHE_TYPE"	=>	"A",
		"CACHE_TIME"	=>	"3600",
	)
);?> </div>

<div class="information-block">
  <div class="information-block-head">��� ������ ������� ����</div>

  <div class="information-block-body">���������� � ������ ��������������� ��������� �������: ������ ��� ��������� <b>������� ����</b>. ��� ����� ���� ������� ��� �������������� �����:
    <ul>
      <li>������; </li>

      <li>�����; </li>

      <li>��������. </li>
    </ul>
  <a href="/e-store/">���������...</a> </div>
</div>
