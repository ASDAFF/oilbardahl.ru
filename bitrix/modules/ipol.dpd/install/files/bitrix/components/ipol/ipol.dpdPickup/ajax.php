<?php
require($_SERVER['DOCUMENT_ROOT'] .'/bitrix/modules/main/include/prolog_before.php');

$APPLICATION->IncludeComponent('ipol:ipol.dpdPickup', $_REQUEST['COMPONENT_TEMP'], array(
	'USER_LOCATION'     => $_REQUEST['COMPONENT_PARAMS']['USER_LOCATION'],

	'SHOP_LOCATION'     => $_REQUEST['COMPONENT_PARAMS']['SHOP_LOCATION'],

	'ORDER_ITEMS'       => $_REQUEST['COMPONENT_PARAMS']['ORDER_ITEMS'],

	'ORDER_PRICE'       => $_REQUEST['COMPONENT_PARAMS']['ORDER_PRICE'],

	'ALLOWED_LOCATIONS' => $_REQUEST['COMPONENT_PARAMS']['ALLOWED_LOCATIONS'] ?: []
));