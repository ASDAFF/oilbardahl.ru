<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><? if (!$mainDir):?> 
				</div>
			</div>
		</div>
<? endif?> 	
<?php if ((in_array(1, $USER->GetUserGroupArray()) == "1") || (in_array(19, $USER->GetUserGroupArray()) != "1")){ ?>	   
	<? if (defined('SHOW_IN_DETAIL_PRODUCT')):?> 
		<?$APPLICATION->IncludeComponent( 
		"bitrix:news.line",	
		"line-services",				 
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"CACHE_GROUPS" => "N",
			"CACHE_TIME" => "300",
			"CACHE_TYPE" => "A",
			"COMPONENT_TEMPLATE" => "line-services",
			"DETAIL_URL" => "",
			"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PROPERTY_TYPE_ICON",3=>"PROPERTY_LINK_TO_PAGE",),
			"IBLOCKS" => array(0=>"6",),
			"IBLOCK_TYPE" => "services",
			"NEWS_COUNT" => "3",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC"
		)
	);?> 
	<?  $APPLICATION->ShowViewContent("smart_recomend");?> <? endif?> <? if ($_SERVER['REAL_FILE_PATH']!=='/catalog_main.php'):?> 
	<?  if ($mainDir):?> <?$APPLICATION->IncludeComponent(
		"bitrix:subscribe.form",
		"subscribe-footer",
		Array(
			"CACHE_TIME" => "3600",
			"CACHE_TYPE" => "N",
			"PAGE" => "#SITE_DIR#personal/subscribe/subscr_edit.php",
			"SHOW_HIDDEN" => "Y",
			"USE_PERSONALIZATION" => "Y"
		)
	); ?>
	<? endif ?> 
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.line",
		"partner_main_page",
		Array(
			"ACTIVE_DATE_FORMAT" => "FULL",
			"CACHE_GROUPS" => "N",
			"CACHE_TIME" => "300",
			"CACHE_TYPE" => "A",
			"COMPONENT_TEMPLATE" => "news_main_page",
			"DETAIL_URL" => "",
			"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"PROPERTY_LINK_TO_PAGE",),
			"IBLOCKS" => array(0=>"7",),
			"IBLOCK_TYPE" => "services",
			"NEWS_COUNT" => "20",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC"
		)
	);?> <? endif?> 
	<?  if ($APPLICATION->GetCurPage(false) === '/') { ?>
	<div id="main-page-text">
		<div class="container content">
			<h1>Bardahl</h1>
			<p>
				Bardahl � ��� �����, �������� � ����������� �������� �������� �������� ��� ��������������, ������� � ��������������, � ����� ������� �������. �������� Bardahl ��������� � 1939 ���� � ���. �� ����������� ���� ��� �������� ������������� � ���������� ��������� �������� �� ���������� ����������, ������� �������� ������� ����������� �� ������. ����� �� ����� �������� ����������� ������.
			</p>
			<p>
				���������������� �������� Bardahl ������������ � ������ ������� ����: ������������ ����������� ����������� � ���, �������, ������, �������, ������� � ��������. ����� ������������ ����� ��� ����� �������� ����� ��� ����������� �������� ��� ������? ������ Bardahl ��� ������ ����� ���������� �� ������� � ���.&nbsp;
			</p>
			<h2>��������� Bardahl</h2>
			<p>
				��������� ���� Bardahl � ������� �������� ��������� ������� �������� ������� �����. � ������������ ����������� ������� ����� ����� ��� ������ ����� ����������.
			</p>
			<ul>
				<li><em>��� ��������������</em>: �����, ���������� ������ � ���������� �� �������� ������� ���������� �����������, ��������� ����������, ��������� � �����-��������� ���������. ��� ������� ��������� ������� ������������� ��� ������������� � ������� ��������, ��� ������� �������� ��� ��������� �&nbsp; ����������� ��������. ������������ ����� Bardahl � ��� �������� ������ � ���������� ������������������, ������� �������� ��������� ��������� � �������. � ���������� ������������� ���� � ����������� ��������� ���� ����� ����������� ������������� ��������� ���������.</li>
				<li><em>��� ��������������</em>: ����� � �������� ������� ��� �������������� ������������ ������������ ������ ��������� ��� ����� ������������� ���������. ����� ����� �������������� ��� ��������, ����������, ������, ����������� � �������������� ���������� � ������ �����.</li>
				<li><em>��� �����������: </em>����������� ������� ��������� ���������� Bardahl ������������� ��� ����������� ����������, ������������ � ������������ ������ �������, ����������, ���������, ���������, ������������� � �������������� ������������. �� ������� ������ Bardahl �����, ���������� � ����������� ������, ������������ � ����������� ������������. ��� ������� �������� ������������������ ������� � ����������� � �������� ������� ��������.</li>
				<li><em>��� ������� ����������:</em> �������� � ����� ������� ��� ����������� ����� � ������ ����� �����������. ��������� ������������ ���������� ������ � ���������� ���� ������, � ����� ��������� �� ���������� �����.</li>
			</ul>
			<h2>������� �������� Bardahl</h2>
			<p>
				�������� Bardahl ���� ������� � ����� ��� ���������� ��� �������, ����������� �� ���������� �������� � �������������� � ��� � �������� �������� ���. ������ ����� ��� ������ �����, � ��������� ����� ����������� � �� ������� �����������, �������� �� �������� �������, ������� ��������� �� ��������� �������� ��������� ��� ������� ��������� � ������������. ������������� ������ �������� � ���������� ������������ ������������ �������� ������������� ���������� �������.
			</p>
			<p>
				� 1939 ���� � ������ ���������� �������� �������� Bardahl. ����� ��������� ������ ���� ������������ ���������� � �������� � �����, ���������� ��������� �� ����- � ����������. ��������� ��� ������ ����� �������� ������ Bardahl ��� ������� � ������� ����������. � ���������� ������ ������� ����� �� ��������� ������ �������� �������� ������������ �����, � ���� ��� ������� ���� �����������, � Bardahl ������� ������������� ����� ��� ������� �������.
			</p>
			<p>
				������� ���� ������������ � ����� ��������� �����, ����� �� �������� Bardahl ���� �������� ����������� ����������� ����� ���. ������ ����������� ������ S.A.D.A.P.S Bardahl ��� ������ � 1950-�� ����� �� �������. � ������ ��� ������ ����� �������� ������� �������� ��� ����������� � ������������� ��������� ���������, �������������� � ������ �������� ���������. ������������� ���� ��������� Bardahl Industry. �� �������� � ��������� �������� ������������ ������ ������������� ������� � �����������, ����� ������� General Electric, Boeing � NASA. �� ����������� ���� Bardahl Manufacturing Corporation � ��� ���������� ��������, ����� ����� ���������� ���������.
			</p>
			<h2>���������� Bardahl</h2>
			<p>
				�� ����� ������ �������� Bardahl ����������� ��������� ���������� ������ � ��������� ��������, �� ��� �������� ������ ������.
			</p>
			<ul>
				<li><em>Fullerene C60</em>. ����� ��������, �������������� ����� 60 ������, ������� ������������� � ���������� ���������. ��� �������� ����� ����� �������� � ������� � ���������� ���������� �60. �������� �60 ����������� �������� ������ � ������� ������� ������, ��������� ����������� ��� ��������� � ������� ������. �� �������� ������� ������� ����������� ������.</li>
				<li><em>Octane Booster</em>. �������, ���������� ��������� ����� � ���������� ����������� �������������� ������� ��� ���������� � ��������. �� ��������� ��������� �������� ��������� � ����������� ������������ ���������� � ���� ���������. ������ � ������ ��������� ����� ����� � �������� ��� �������.</li>
				<li><em>Polar Plus</em>. ������� �������, ����������� ������� ������ ������ ��������� � �������� �� �� ��������. ��������, ����������� �� �����������, ������� ������, ������� �������� ��� ����������� ���������, �������� �������� ������������ �� ���������� ������� �������. ���������� � ������� ������� ��� ������ ����� �������.</li>
			</ul>
			<p>
				�������� Bardahl � ��� ���������� ������������� ����������� ����� � ����, ���������� ������������ ������������� � ���������� ���������������� �����������. �������� �������� ������� �������������� �� ���� ������ ������������. ������ Bardahl �� ������� �� ����� �����: � ������������ ����������� ������� ����� �������� �����, ����� � �����������, �������� � ����������� ���������. � ��� ��������� ���� �������.&nbsp;&nbsp;
			</p>
			<p>
				&nbsp;
			</p>
		</div>
	</div>
	<? } ?> <!--=== Footer v4 ===-->
	<div class="footer-v4">
		<div class="footer">
			<div class="container">
				<div class="row">
					<!-- About -->
					<div class="col-md-3 md-margin-bottom-40">
	<a href="<?=SITE_DIR?>"><img src="/bitrix/templates/maslo/assets/img/logo.jpg" class="footer-logo" alt="Bardahl Official"></a> <br>
						<ul class="list-unstyled address-list margin-bottom-20">
							<li>119285, ������, <?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/adress-head.php"
		)
	);?></li>
							<li><?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/phone.php"
		)
	);?></li>
							<li><?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/email-main.php"
		)
	);?></li>
						</ul>
						<ul class="list-inline shop-social">
							<li><a href="https://www.facebook.com/bardahlofficial" rel="nofollow"><i class="fb rounded-md fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/bardahl_official/" rel="nofollow"><i class="yt rounded-md fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<!-- End About --> <!-- Simple List -->
					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<h2 class="thumb-headline">����������</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/maslo_v_dvigatel/">
									����� � ��������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/prisadki_v_dvigatel/">
									�������� � ��������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/maslo_v_kpp_i_reduktor/">
									����� � ��� � �������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/prisadki_v_toplivo/">
									�������� � ������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/prisadki_v_kpp/">
									�������� � ��� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/prisadki_v_gur_akpp/">
									�������� � ���/���� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/antifriz/">
									�������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/prisadki_v_okhlazhdayushchuyu_zhidkost/">
									�������� � ����������� �������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/avtomobili/tormoznaya_zhidkost/">
									��������� �������� </a> </li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Simple List -->
					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<h2 class="thumb-headline">�����������</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/mototekhnika/masla_4t/">
									����� 4� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/mototekhnika/masla_2t/">
									����� 2� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/mototekhnika/moto_prisadki_v_toplivo/">
									�������� � ������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/mototekhnika/moto_prisadki_v_dvigatel/">
									�������� � ��������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/mototekhnika/moto_tormoznaya_zhidkost/">
									��������� �������� </a> </li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Simple List -->
					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<h2 class="thumb-headline">����������</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/antifriza/">
									�������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/masla_v_dvigatel/">
									����� � ��������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/masla_v_kpp_i_reduktor/">
									����� � ��� � �������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/prisadok_v_gur_i_v_akpp/">
									�������� � ��� � � ���� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/prisadok_v_dvigatel/">
									�������� � ��������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/prisadkok_v_kpp/">
									�������� � ��� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/prisadok_v_okhlazhdayushchuyu_zhidkost/">
									�������� � ����������� �������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/prisadkok_v_toplivo/">
									�������� � ������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/rasprodazha1/tormoznoy_zhidkosti/">
									��������� �������� </a> </li>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- Simple List -->
					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<h2 class="thumb-headline">����������</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/how_buy_order/">
									��� ������� ����� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/pay_method/">
									������ ������ </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/cumulative_discounts/">
									������������� ������ </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/return_product/">
									������� ������ </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/public_ofert/">
									��������� ������ </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/delivery/">
									�������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/partners/">
									�������������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/sertificate/">
									�������� ��������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/rules_sale_for_online_shop/">
									������� ������� ������� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a target="_blank" href="http://www.bardahloils.com/en_GB">
									������ ����� ������ </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a href="/info/oil_series/">
									����������� ����� </a> </li>
									<!-- second level-->
									<li class="bx-nav-2-lvl"> <a target="_blank" href="/upload/Bardahl_Catalog.pdf">
									����������� ������� ����� </a> </li>
									<li class="bx-nav-2-lvl"> <a target="_blank" href="/upload/electronic_catalog_auto_chemical_goods.pdf">
									����������� ������� ��������� </a> </li>
								</ul>
							</div>
						</div>
					</div>
	<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-8 mob-fot-style" style="width: 40.666667%;">
						<p>
							<?=date('Y')?> � OILBARDAHL. ��� ����� ��������. <a href="/info/politic/">�������� ������������������</a> 
							<a class="mob-href-fuul-vis" href="<?php echo $_SERVER['REQUEST_URI'];?>?full_version">������ ������</a>
						</p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline sponsors-icons pull-right">
							<li><a href="https://www.visa.com.ru/" target="_blank" rel="nofollow"><img src="/bitrix/templates/maslo/assets/img/visa.jpg"></a></li>
							<li><a href="https://www.mastercard.ru/ru-ru.html" target="_blank" rel="nofollow"><img src="/bitrix/templates/maslo/assets/img/mastercard.jpg"></a></li>
							<li><a href="https://www.raiffeisen.ru/business/acquiring/internet/" target="_blank" rel="nofollow"><img src="/bitrix/templates/maslo/assets/img/raiffeisenbank.jpg"></a></li>
							<li><a href="https://mironline.ru/" target="_blank" rel="nofollow"><img src="/bitrix/templates/maslo/assets/img/layworld.jpg"></a></li>
							<!--<li><a href="https://money.yandex.ru/" target="_blank" rel="nofollow"><img src="/bitrix/templates/maslo/assets/img/yandex.png"></a></li>
							<li><a href="https://qiwi.com/" target="_blank" rel="nofollow"><img src="/bitrix/templates/maslo/assets/img/qiwi.png"></a></li>-->
						</ul>
						</div>
					</div>
				</div>
			</div>

		
		<!-- Wait Block -->
		<div style="display: none; ">
			<a href="#popup-add-to-cart" id="link-open-modal-add-to-cart"></a>
			<div id="popup-add-to-cart" class="popup-b">
				<div class="popup-wrapper">
					<div class="popup-title"><h3>���������� ������� ��������</h3></div>
					<!-- end login-form -->
					<div class="popup-bottom">
						<span class="popup-bottom--text">������� �������� �����, ��� �� ���������� �������</span>
						<a id="popup-checkout" onclick="$.fancybox.close();" name="<?=SITE_DIR?>" class="popup-submit btn-blue">���������� �������</a>
				<a href="<?=SITE_DIR?>personal/cart/" class="popup-submit-1 btn-blue">�������� �����</a>
			</div>
					<div class="send-text"></div>
				</div>
			</div>
		</div>
<?php } ?>
	<!-- JS Implementing Plugins -->
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/back-to-top.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/smoothScroll.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/jquery.parallax.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/fancy-box.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.number.js"></script>
	<!-- JS Customization -->
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/shop.app.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/forms/page_login.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/stepWizard.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/forms/product-quantity.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/owl-carousel.js"></script>
	<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/revolution-slider.js"></script>
	<script>
	var StepMakeOrder = false;
   	<? if ($APPLICATION->GetCurDir()==SITE_DIR.'personal/order/make/'):?>
   		var StepMakeOrder = '<?=SITE_DIR?>personal/cart/';
   	<? endif?>
	    jQuery(document).ready(function() {
	        App.init();
			App.initScrollBar();
			App.initParallaxBg();
	        OwlCarousel.initOwlCarousel();
	        RevolutionSlider.initRSfullWidth();

			FancyBox.initFancybox();
	        Login.initLogin();


		    <? if ($APPLICATION->GetCurDir()==SITE_DIR.'personal/cart/'):?>
                StepWizard.initStepWizard();
	        	$("#basket_form_container .actions").html('<div style="float: left;"><input class="button_to_back" type="button" onclick="history.back();" value="�����"/></div><ul><li><a href="<?=SITE_DIR?>personal/order/make/">������� � ���������� ������</a><li><ul>');
	        <? endif?>
	        <? if ($APPLICATION->GetCurDir()==SITE_DIR.'personal/order/make/'):?>
	        	$(".shopping-cart .actions ul li").eq($(".shopping-cart .actions ul li").length-1).find('a').text('��������');
	        	$(".shopping-cart .actions ul li").eq(0).find('a').text('�����');
	        <? endif?>
	    });
	</script>
	<script type="text/javascript">
	function targetGroup1(className){
	    var elemArray = document.getElementsByClassName(className);
	    for(var i = 0; i < elemArray.length; i++){
	        var elem = document.getElementById(elemArray[i].id);
	        elem.value++;
	    }
	}
	</script>
	<script type="text/javascript">
	function targetGroup2(className){

	    var elemArray = document.getElementsByClassName(className);
	    for(var i = 0; i < elemArray.length; i++){
	        var elem = document.getElementById(elemArray[i].id);
	        elem.value--;
	    }
	}
	</script>
	<!--[if lt IE 9]>
	    <script src="#BXPHP_60#/assets/plugins/respond.js"></script>
	    <script src="#BXPHP_61#/assets/plugins/html5shiv.js"></script>
	    <script src="#BXPHP_62#/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
	<!--[if lt IE 10]>
	    <script src="#BXPHP_63#/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=QGy7veUIHokgoiFgyKTfut7ukxKatCh40rAdjn81LRgpRf3D9RTiFD37LbH8sDC*JIwt/1Vl5i0fH8N0bqgkWvxHlO5ZmR1Y3tfefKHwsfedQ/2OYF96lSWxXfDgyO5dYqYM*2DmbokQoRSPp3NFst0h9KQscoW6cimQMHxFiBk-&pixel_id=1000027383';</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66142478-1', 'auto');
  ga('send', 'pageview');

</script>
<script  defer src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.maskedinput.min.js"></script>
<script>
	jQuery(document).ready(function() {
		if (jQuery("#phone").val()) {
			var tel_pay_man = jQuery("#phone").val();
			var first_numb = jQuery("#phone").val()[0];			
		}
		
		if (jQuery(window).width() < '508') {
			jQuery(".dropdown").click(function(){
				if (jQuery(this).find(".dropdown-menu").hasClass('mobile-nav-active')) {
					jQuery(".dropdown-menu").removeClass('mobile-nav-active');
					jQuery(".mobile-serch").removeClass('mobile-serch-active');
					jQuery("ul.mobile-active").removeClass("mobile-active-ul-active")
				} else{
					jQuery(".dropdown-menu").not(this).removeClass('mobile-nav-active');
					jQuery(this).find(".dropdown-menu").addClass('mobile-nav-active');
					jQuery(".mobile-serch").addClass('mobile-serch-active');
					jQuery("ul.mobile-active").addClass("mobile-active-ul-active")
				}
			});
		}
		jQuery('input[name="REGISTER[PERSONAL_PHONE]"]').mask("+7(999)9999999");
		if (first_numb == "8") {
			jQuery("#phone").val(tel_pay_man.substring(1, tel_pay_man.length));
			jQuery("#phone").mask("+7(999)9999999");
		} else {
			jQuery("#phone").mask("+7(999)9999999");
		}
		jQuery('.REGISTER_PERSONAL_PHONE_REG').mask("+7(999)9999999");
		
		BX.addCustomEvent('onAjaxSuccess', function() {
			jQuery('input[name="REGISTER[PERSONAL_PHONE]"]').mask("+7(999)9999999");
			if (first_numb == "8") {
				jQuery("#phone").val(tel_pay_man.substring(1, tel_pay_man.length));
				jQuery("#phone").mask("+7(999)9999999");
			} else {
				jQuery("#phone").mask("+7(999)9999999");
			}
		});
	});
</script>
</body>
</html>