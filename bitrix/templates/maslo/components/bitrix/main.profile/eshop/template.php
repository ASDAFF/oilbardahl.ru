<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
?>
<?=ShowError($arResult["strProfileError"]);?>
<?
if ($arResult['DATA_SAVED'] == 'Y')
	echo ShowNote(GetMessage('PROFILE_DATA_SAVED'));
?>
<div class="bx_profile bx_<?=$arResult["THEME"]?>">
	<form method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>?" enctype="multipart/form-data">
		<?=$arResult["BX_SESSION_CHECK"]?>
		<input type="hidden" name="lang" value="<?=LANG?>" />
		<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
		<input type="hidden" name="LOGIN" value=<?=$arResult["arUser"]["LOGIN"]?> />
		<input type="hidden" name="EMAIL" value=<?=$arResult["arUser"]["EMAIL"]?> />
		
		<h2><?=GetMessage("LEGEND_PROFILE")?></h2>
		<strong><?=GetMessage('NAME')?></strong><br/>
		<input type="text" name="NAME" maxlength="50" value="<?=$arResult["arUser"]["NAME"]?>" /><br><br>

		<strong><?=GetMessage('LAST_NAME')?></strong><br/>
		<input type="text" name="LAST_NAME" maxlength="50" value="<?=$arResult["arUser"]["LAST_NAME"]?>" /><br><br>

		<strong><?=GetMessage('SECOND_NAME')?></strong><br/>
		<input type="text" name="SECOND_NAME" maxlength="50"  value="<?=$arResult["arUser"]["SECOND_NAME"]?>" /><br><br>

		<h2><?=GetMessage("MAIN_PSWD")?></h2>
		<strong><?=GetMessage('NEW_PASSWORD_REQ')?></strong><br/>
		<input type="password" name="NEW_PASSWORD" maxlength="50" value="" autocomplete="off" /> <br><br>

		<strong><?=GetMessage('NEW_PASSWORD_CONFIRM')?></strong><br/>
		<input type="password" name="NEW_PASSWORD_CONFIRM" maxlength="50" value="" autocomplete="off" /> <br><br>

		<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
			<h2><?=strlen(trim($arParams["USER_PROPERTY_NAME"])) > 0 ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></h2>
			<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
				<strong><?=$arUserField["EDIT_FORM_LABEL"]?><?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;?></strong><br/>
				<?$APPLICATION->IncludeComponent(
					"bitrix:system.field.edit",
					$arUserField["USER_TYPE"]["USER_TYPE_ID"],
					array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y")
				);?>
				<br/>
			<?endforeach;?>
		<?endif;?>

		<input name="save" value="<?=GetMessage("MAIN_SAVE")?>" class="bx_bt_button bx_big shadow" type="submit">
	</form>
</div>
<br>
<?
if($arResult["SOCSERV_ENABLED"])
{
	$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
			"SHOW_PROFILES" => "Y",
			"ALLOW_DELETE" => "Y"
		),
		false
	);
}
?>
