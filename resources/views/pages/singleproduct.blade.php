


<link href="{{asset("assets/css/style2.css")}}" rel="stylesheet" type="text/css" />




@if(Auth::check())
    @include('menus.header.navbar')
@else
    @include('menus.header.loggedout')
@endif
@foreach($mydata as $yourdata)

<script src="{{asset("assets/js/real.js")}}" type="text/javascript"></script>


    <div class="overlayOffCanvas"></div>
    <div class="responsive-nav-wrapper-parent">
        <div class="responsive-nav-wrapper">
            <div class="menu-title">
                <span>Menu</span>
            </div>
            <div class="mobile-logo">




                <a href="/" class="logo">


                    <img alt="Exco Parts" src="{{asset("assets/images/uploaded/0000520.png")}}" /></a>
            </div>
            <div class="search-wrap">
                <span>Search</span>
            </div>
            <div class="shopping-cart-link">
                <a href="/cart">Cart</a>
            </div>
        </div>
    </div>
    <div class="master-wrapper-content">





        <div class="ajaxCartInfo" data-getAjaxCartButtonUrl="/NopAjaxCart/GetAjaxCartButtonsAjax"
             data-productPageAddToCartButtonSelector=".add-to-cart-button"
             data-productBoxAddToCartButtonSelector=".product-box-add-to-cart-button"
             data-productBoxProductItemElementSelector=".product-item"
             data-enableOnProductPage="True"
             data-enableOnCatalogPages="True"
             data-miniShoppingCartQuatityFormattingResource="({0})"
             data-miniWishlistQuatityFormattingResource="({0})"
             data-addToWishlistButtonSelector=".add-to-wishlist-button">
        </div>

        <input id="addProductVariantToCartUrl" name="addProductVariantToCartUrl" type="hidden" value="/AddProductFromProductDetailsPageToCartAjax" />
        <input id="addProductToCartUrl" name="addProductToCartUrl" type="hidden" value="/AddProductToCartAjax" />
        <input id="miniShoppingCartUrl" name="miniShoppingCartUrl" type="hidden" value="/MiniShoppingCart" />
        <input id="flyoutShoppingCartUrl" name="flyoutShoppingCartUrl" type="hidden" value="/NopAjaxCartFlyoutShoppingCart" />
        <input id="checkProductAttributesUrl" name="checkProductAttributesUrl" type="hidden" value="/CheckIfProductOrItsAssociatedProductsHasAttributes" />
        <input id="getMiniProductDetailsViewUrl" name="getMiniProductDetailsViewUrl" type="hidden" value="/GetMiniProductDetailsView" />
        <input id="flyoutShoppingCartPanelSelector" name="flyoutShoppingCartPanelSelector" type="hidden" value="#flyout-cart" />
        <input id="shoppingCartMenuLinkSelector" name="shoppingCartMenuLinkSelector" type="hidden" value=".cart-qty" />
        <input id="wishlistMenuLinkSelector" name="wishlistMenuLinkSelector" type="hidden" value="span.wishlist-qty" />






        <div id="product-ribbon-info" data-productid="0"
             data-productboxselector=".product-item, .item-holder"
             data-productboxpicturecontainerselector=".picture, .item-picture"
             data-productpagepicturesparentcontainerselector=".product-essential"
             data-productpagebugpicturecontainerselector=".picture"
             data-retrieveproductribbonsurl="/RetrieveProductRibbons">
        </div>


        <div class="quickViewData" data-productselector=".product-item"
             data-productselectorchild=".buttons"
             data-retrievequickviewurl="/quickviewdata"
             data-quickviewbuttontext="Quick View"
             data-quickviewbuttontitle="Quick View"
             data-isquickviewpopupdraggable="True"
             data-enablequickviewpopupoverlay="True"
             data-accordionpanelsheightstyle="content">
        </div>


        <div class="breadcrumb">
            <ul>
                <li>
                    <a href="/" title="Home">Home</a>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <a href="/look-up-by-truck-4" title="LOOK UP BY TRUCK">LOOK UP BY TRUCK</a>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <a href="/freightliner-5" title="FREIGHTLINER">FREIGHTLINER</a>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <strong class="current-item">108SD</strong>
                </li>
            </ul>
        </div>

        <div class="master-column-wrapper">



            <div class="center-2 items-4">




                <div class="page category-page">
                    <div class="category-page-title">
                        <div class="title-picture-wrapper" style="display:none;">
                            <div class="category-picture-wrapper">
                                <img alt="Picture for category 108SD" title="Picture for category 108SD" src="https://www.excohdparts.com/images/default-image.png"/></div>
                            <h1>
                                <span>{{$yourdata->name}}</span>
                            </h1>
                        </div>

                    </div>
                    <div class="page-body">
                        <h1>
                            <span>{{$yourdata->name}}</span>
                        </h1>





                        <div class="product-filters">
                        </div>



                    </div>
                </div>


            </div>
            <div class="side-2">
                <div class="category-left-filter">


                    <form id="AjaxFiltersProForm" action="/AjaxFiltersProSearch/Search" method="post">
                        <div class="home-page-filters-wrapper ajax-filters-pro">

                            <div class="home-page-filters">
                                <div class="home-page-filter-title">
                                    <strong>Find Your Parts:</strong>
                                </div>



                                <div class="home-page-filter-selector">
                                    <input type="hidden" id="manufacturers" name="manufacturerId" value="0" autocomplete="off"/>
                                </div>

                                <div class="home-page-filter-selector">
                                    <input type="hidden" id="specification_18" name="specificationOptions" value="0" class="ajaxFiltersProSpecificationItem" data-id="18" data-name="Model" autocomplete="off"/>
                                </div>
                                <div class="home-page-filter-selector">
                                    <input type="hidden" id="specification_22" name="specificationOptions" value="0" class="ajaxFiltersProSpecificationItem" data-id="22" data-name="Engine" autocomplete="off"/>
                                </div>
                                <div class="home-page-filter-button">
                                    <span id="home-page-filter-total-products-count" class="results-number"></span>
                                    <button type="submit" class="search-button" disabled="disabled">Search</button>
                                </div>
                            </div>
                        </div>
                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq5k3x-Wrye70cHk8s6kZrfGUcLfHwYnw7yBgTnY9xZUisf0XHX28J-Jgpa73HOzpo7inibM1T7KHckNCea9PuwPkaL4xIKQk1cEWomx8PRK_63iqwyYIVwyRYRPIPnp-7M" /></form>
                </div>



                <div class="nopAjaxFilters7Spikes"
                     data-categoryid="442"
                     data-manufacturerid="0"
                     data-vendorid="0"
                     data-isonsearchpage="False"
                     data-searchkeyword=""
                     data-searchcategoryid="0"
                     data-searchmanufacturerid="0"
                     data-searchvendorid ="0"
                     data-searchpricefrom=""
                     data-searchpriceto=""
                     data-searchincludesubcategories="False"
                     data-searchinproductdescriptions="False"
                     data-searchadvancedsearch="False"
                     data-getfilteredproductsurl="/getFilteredProducts"
                     data-productslistpanelselector=".product-list"
                     data-productsgridpanelselector=".product-grid"
                     data-pagerpanelselector=".pager"
                     data-pagerpanelintegrationselector=".product-grid, .product-list"
                     data-sortoptionsdropdownselector="#products-orderby"
                     data-viewoptionsdropdownselector=".viewmode-icon, #products-viewmode"
                     data-productspagesizedropdownselector="#products-pagesize"
                     data-filtersuimode="usedropdowns"
                     data-defaultviewmode="grid"
                     data-enableinfinitescroll="False"
                     data-infinitescrollloadertext="Loading more products ..."
                     data-scrolltoelement="False"
                     data-scrolltoelementselector=".product-selectors"
                     data-scrolltoelementadditionaloffset="0"
                     data-showselectedfilterspanel="True"
                     data-numberofreturnedproductsselector="false"
                     data-selectedOptionsTargetSelector=".nopAjaxFilters7Spikes .filtersPanel:first"
                     data-selectedOptionsTargetAction="prependTo"
                     data-isRTL="false"
                     data-closeFiltersPanelAfterFiltrationInMobile="true">

                </div>

                <input id="availableSortOptionsJson" name="availableSortOptionsJson" type="hidden" value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;Position&quot;,&quot;Value&quot;:&quot;0&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Name: A to Z&quot;,&quot;Value&quot;:&quot;5&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Name: Z to A&quot;,&quot;Value&quot;:&quot;6&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Price: Low to High&quot;,&quot;Value&quot;:&quot;10&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Price: High to Low&quot;,&quot;Value&quot;:&quot;11&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Created on&quot;,&quot;Value&quot;:&quot;15&quot;}]" />
                <input id="availableViewModesJson" name="availableViewModesJson" type="hidden" value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;Grid&quot;,&quot;Value&quot;:&quot;grid&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;List&quot;,&quot;Value&quot;:&quot;list&quot;}]" />
                <input id="availablePageSizesJson" name="availablePageSizesJson" type="hidden" value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;3&quot;,&quot;Value&quot;:&quot;3&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;6&quot;,&quot;Value&quot;:&quot;6&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;9&quot;,&quot;Value&quot;:&quot;9&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;12&quot;,&quot;Value&quot;:&quot;12&quot;}]" />        <div class="blocks-wrapper">
                <div class="block block-category-navigation">
                    <div class="title">
                        <strong>Categories</strong>
                    </div>
                    <div class="listbox">
                        <ul class="list">

                            <li class="inactive">
                                <a href="/triple-convoluted-air-springs" class="">
                                    3-IN-1 &amp; 4-IN-1 AIR/ELEC
                                </a>
                            </li>

                            <li class="active">
                                <a href="/look-up-by-truck-4" class="width-sublist">
                                    LOOK UP BY TRUCK
                                </a>
                                <div class="sublist-toggle-button"></div>
                                <ul class="sublist">

                                    <li class="active">
                                        <a href="/freightliner-5" class="width-sublist">
                                            FREIGHTLINER
                                        </a>
                                        <div class="sublist-toggle-button"></div>
                                        <ul class="sublist">

                                            <li class="active last">
                                                <a href="/108sd" class="">
                                                    108SD
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/argosy-new" class="">
                                                    ARGOSY NEW
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/114sd" class="">
                                                    114SD
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/122sd" class="">
                                                    122SD
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/c2" class="">
                                                    C2
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/cascadia-2" class="">
                                                    CASCADIA
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/argosy" class="">
                                                    ARGOSY
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/century" class="">
                                                    CENTURY
                                                </a>
                                            </li>

                                            <li class="inactive">
                                                <a href="/columbia" class="">
                                                    COLUMBIA
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="inactive">
                                        <a href="/chevrolet-2" class="">
                                            CHEVROLET
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/hino-3" class="">
                                            HINO
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/ihc-3" class="">
                                            IHC
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/kenworth-4" class="">
                                            KENWORTH
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/mack-3" class="">
                                            MACK
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/peterbilt-3" class="">
                                            PETERBILT
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/sprinter-3" class="">
                                            SPRINTER
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/volvo-3" class="">
                                            VOLVO
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/western-star-3" class="">
                                            WESTERN STAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/gmc-3" class="">
                                            GMC
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/daf-3" class="">
                                            DAF
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/isuzu-3" class="">
                                            ISUZU
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/iveco-3" class="">
                                            IVECO
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/man-3" class="">
                                            M.A.N
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/mercedes-benz-3" class="">
                                            MERCEDES-BENZ
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/mitsubishi-fuso-3" class="">
                                            MITSUBISHI FUSO
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/mitsubishi-3" class="">
                                            MITSUBISHI
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/prevost-3" class="">
                                            PREVOST
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/renault-3" class="">
                                            RENAULT
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/sterling-3" class="">
                                            STERLING
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/ud-3" class="">
                                            UD
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/scania-3" class="">
                                            SCANIA
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/coronado" class="">
                                            CORONADO
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/coronado-new" class="">
                                            CORONADO NEW
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/fl70" class="">
                                            FL70
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/fl112" class="">
                                            FL112
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/fld120-classic" class="">
                                            FLD120 CLASSIC
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/m2-business-class" class="">
                                            M2 BUSINESS CLASS
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/m2-106" class="">
                                            M2 106
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/m2-112" class="">
                                            M2 112
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/mt4555" class="">
                                            MT45/55
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/thomas-bus" class="">
                                            THOMAS BUS
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vah-200" class="">
                                            VAH 200
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vah-430" class="">
                                            VAH 430
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vah-630" class="">
                                            VAH 630
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vhd-200" class="">
                                            VHD 200
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vhd-300" class="">
                                            VHD 300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vhd-400" class="">
                                            VHD 400
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vhd-430" class="">
                                            VHD 430
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-300" class="">
                                            VNL 300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-300-2" class="">
                                            VNL 300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-400" class="">
                                            VNL 400
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-430" class="">
                                            VNL 430
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-610" class="">
                                            VNL 610
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-630" class="">
                                            VNL 630
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-660" class="">
                                            VNL 660
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-670" class="">
                                            VNL 670
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-670-2" class="">
                                            VNL 670
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-730" class="">
                                            VNL 730
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-740" class="">
                                            VNL 740
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-760" class="">
                                            VNL 760
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-770" class="">
                                            VNL 770
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-780" class="">
                                            VNL 780
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnm-200" class="">
                                            VNM 200
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnm-430" class="">
                                            VNM 430
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnm-630" class="">
                                            VNM 630
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnr-300" class="">
                                            VNR 300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnr-400" class="">
                                            VNR 400
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnr-640" class="">
                                            VNR 640
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnx-300" class="">
                                            VNX 300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/wx-series17" class="">
                                            WX SERIES&#xA0;&#xA0;17
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/c500" class="">
                                            C500
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t170" class="">
                                            T170
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t270" class="">
                                            T270
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t300" class="">
                                            T300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t370" class="">
                                            T370
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t400" class="">
                                            T400
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t440" class="">
                                            T440
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t450" class="">
                                            T450
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t470" class="">
                                            T470
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t600" class="">
                                            T600
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t660" class="">
                                            T660
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t680-2" class="">
                                            T680
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t700" class="">
                                            T700
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t880-2" class="">
                                            T880
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t2000" class="">
                                            T2000
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/w900" class="">
                                            W900
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/220" class="">
                                            220
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/320" class="">
                                            320
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/325" class="">
                                            325
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/330" class="">
                                            330
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/335" class="">
                                            335
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/337" class="">
                                            337
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/340" class="">
                                            340
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/348" class="">
                                            348
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/357" class="">
                                            357
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/359" class="">
                                            359
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/362" class="">
                                            362
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/367" class="">
                                            367
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/9200" class="">
                                            9200
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/9400" class="">
                                            9400
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/9600" class="">
                                            9600
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/9900" class="">
                                            9900
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/be-series" class="">
                                            BE SERIES
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/ce-series" class="">
                                            CE SERIES
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/durastar" class="">
                                            DURASTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/fe-series" class="">
                                            FE SERIES
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/hc-series" class="">
                                            HC SERIES
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/lonestar" class="">
                                            LONESTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/paystar" class="">
                                            PAYSTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/prostar" class="">
                                            PROSTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/re-series" class="">
                                            RE SERIES
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/terrastar" class="">
                                            TERRASTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/transtar" class="">
                                            TRANSTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/workstar" class="">
                                            WORKSTAR
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnl-860" class="">
                                            VNL 860
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/377" class="">
                                            377
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnx-430" class="">
                                            VNX 430
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/378" class="">
                                            378
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/wia-42" class="">
                                            WIA 42
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/379" class="">
                                            379
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vnx-630" class="">
                                            VNX 630
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/t800" class="">
                                            T800
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/365" class="">
                                            365
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/384" class="">
                                            384
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/c2-new" class="">
                                            C2 NEW
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/vt64" class="">
                                            VT&#xA0;&#xA0;64
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/385" class="">
                                            385
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/4900" class="">
                                            4900
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/flc112" class="">
                                            FLC112
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/386" class="">
                                            386
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/hx515" class="">
                                            HX515
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/cascadia-new" class="">
                                            CASCADIA NEW
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/fld120" class="">
                                            FLD120
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/387" class="">
                                            387
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/388" class="">
                                            388
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/389" class="">
                                            389
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/520" class="">
                                            520
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/567" class="">
                                            567
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/579" class="">
                                            579
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/587" class="">
                                            587
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/4300" class="">
                                            4300
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/4400" class="">
                                            4400
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/4500" class="">
                                            4500
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/lc-series" class="">
                                            LC SERIES
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/ford-3" class="">
                                            FORD
                                        </a>
                                    </li>

                                    <li class="inactive">
                                        <a href="/lt-series" class="">
                                            LT SERIES
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="inactive">
                                <a href="/air-and-brake-3" class="width-sublist">
                                    AIR SYSTEM
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/wheel-end-3" class="width-sublist">
                                    BRAKES &amp; WHEEL END
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/body-parts-3" class="width-sublist">
                                    BODY PARTS
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/lighting-5" class="width-sublist">
                                    LIGHTING
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/steering-4" class="width-sublist">
                                    STEERING
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/suspension-4" class="width-sublist">
                                    SUSPENSION
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/fitting-fasteners-3" class="width-sublist">
                                    FITTING &amp; FASTENERS
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/cooling-system-5" class="width-sublist">
                                    COOLING SYSTEM
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/engine-4" class="">
                                    ENGINE
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/filters-4" class="">
                                    FILTERS
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/driveline-3" class="width-sublist">
                                    DRIVELINE
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/electrical-5" class="width-sublist">
                                    ELECTRICAL
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/chrome-stainless-steel-4" class="">
                                    CHROME &amp; STAINLESS STEEL
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/trailer-4" class="">
                                    TRAILER
                                </a>
                            </li>

                            <li class="inactive">
                                <a href="/universal-parts-2" class="">
                                    UNIVERSAL PARTS
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>





            </div>
            </div>

            <script lang="ja" type="text/javascript">
                jQuery(window).load(function () {
                    // $("#manufacturers").data('kendoDropDownList').value(10);
                    // $(".ajax-filters-pro .home-page-filters div:nth-child(2)").css("display", "none");
                    // $(".search-button").removeAttr("disabled");

                    // $("#categories_listbox li:nth-child(2)").css("display", "none");

                    var ddl = $("#categories").data("kendoDropDownList");

                    if(ddl!==null){
                        var oldData = ddl.dataSource.data();
                        ddl.dataSource.remove(oldData[0]); //remove 1st item
                    }

                });
            </script>

        </div>

    </div>




@include('menus.footer.myfooter')

    <script lang="ja" type="text/javascript">

        $(document).ready(function () {
            $(".sublist-wrap > ul.rootlevel").append('<li><a href="/product/all" class="view-all">View All</a></li>');
        });
    </script>

</div>

<script type="text/javascript">function add_chatinline(){var hccid=97799330;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); </script>


<script src="{{asset("assets/js/scripts3.js")}}" type="text/javascript"></script>


<script type="text/javascript">
    function newsletter_subscribe(subscribe) {
        var subscribeProgress = $("#subscribe-loading-progress");
        subscribeProgress.show();
        var postData = {
            subscribe: subscribe,
            email: $("#newsletter-email").val()
        };
        $.ajax({
            cache: false,
            type: "POST",
            url: "/subscribenewsletter",
            data: postData,
            success: function(data) {
                subscribeProgress.hide();
                $("#newsletter-result-block").html(data.Result);
                if (data.Success) {
                    $('#newsletter-subscribe-block').hide();
                    $('#newsletter-result-block').show();
                } else {
                    $('#newsletter-result-block').fadeIn("slow").delay(2000).fadeOut("slow");
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert('Failed to subscribe.');
                subscribeProgress.hide();
            }
        });
    }

    $(document).ready(function () {
        $('#newsletter-subscribe-button').click(function () {
            newsletter_subscribe('true');            });
        $("#newsletter-email").keydown(function (event) {
            if (event.keyCode == 13) {
                $("#newsletter-subscribe-button").click();
                return false;
            }
        });
    });
</script>
<script type="text/javascript">
    (function () {
        AjaxCart.init(false, '.header-links .cart-qty', '.header-links .wishlist-qty', '#flyout-cart');
    })();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c-cart-buttons').on('mouseenter', '.ico-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.c-cart-buttons').on('mouseleave', '.ico-cart', function () {
            $('#flyout-cart').removeClass('active');
        });
        $('.header').on('mouseenter', '#flyout-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.header').on('mouseleave', '#flyout-cart', function () {
            $('#flyout-cart').removeClass('active');
        });

        //$('.header').on('mouseenter', '#flyout-cart', function () {
        //    $(this).addClass('active');
        //}).on('mouseleave', '#flyout-cart', function () {
        //    $(this).removeClass('active');
        //});
    });
</script>
<script type="text/javascript">
    $("#small-search-box-form").submit(function(event) {
        if ($("#small-searchterms").val() == "") {
            alert('Please enter some search keyword');
            $("#small-searchterms").focus();
            event.preventDefault();
        }
    });
</script>
<script id="instantSearchItemTemplate" type="text/x-kendo-template">
    <div class="instant-search-item" data-url="${ data.CustomProperties.Url }">
        <div class="img-block">
            <img src="${ data.DefaultPictureModel.ImageUrl }" alt="${ data.Name }" title="${ data.Name }" style="border: none">
        </div>
        <div class="detail">
            <div class="title">${ data.Name }</div>
            <div class="price"># var price = ""; if (data.ProductPrice.Price) { price = data.ProductPrice.Price } # #= price #</div>
        </div>
    </div>
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c-cart-buttons').on('mouseenter', '.ico-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.c-cart-buttons').on('mouseleave', '.ico-cart', function () {
            $('#flyout-cart').removeClass('active');
        });
        $('.header').on('mouseenter', '#flyout-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.header').on('mouseleave', '#flyout-cart', function () {
            $('#flyout-cart').removeClass('active');
        });

        //$('.header').on('mouseenter', '#flyout-cart', function () {
        //    $(this).addClass('active');
        //}).on('mouseleave', '#flyout-cart', function () {
        //    $(this).removeClass('active');
        //});
    });
</script>
<script>
    function displaymap()
    {
        let mymap = document.getElementById("mymap");
        if(mymap.style.display == "none")
        {
            $("#mymap").slideDown("slow");


        }else{
            $("#mymap").slideUp("slow");


        }
    }
</script>
<div class="scroll-back-button" id="goToTop"></div>
</body>
</html>
@endforeach
