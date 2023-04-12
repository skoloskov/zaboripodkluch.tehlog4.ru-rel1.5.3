<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/inc_tmpl/banner.php"
    )
);?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/inc_tmpl/infografics.php"
    )
);?>

<section class="fences_type">
    <div class="fences_type_container container">
        <div class="fences_type__title_block">
            <h2 class="fences_type__title colored_title">Виды <span>заборов</span></h2>
            <span class="fences_type__descr">Каталог предложений по строительству заборов и ограждений</span>
        </div>
        <?php /* Секция Виды заборов */ ?>
        <?php $APPLICATION->IncludeComponent(
            "seologica:catalog.section.list",
            "fences_type",
            Array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPONENT_TEMPLATE" => ".default",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "3",
                "IBLOCK_TYPE" => "objects",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(0=>"",1=>"",),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "USE_DOMENS_FOR_CACHE" => $_SERVER["HTTP_HOST"],
                "VIEW_MODE" => "LINE"
            )
        ); ?>
    </div>
</section>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/inc_tmpl/prices.php"
    )
);?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/inc_tmpl/tender_form.php"
    )
);?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>