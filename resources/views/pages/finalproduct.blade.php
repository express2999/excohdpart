<html>
<link href="{{asset("assets/css/style2.css")}}" rel="stylesheet" type="text/css" />

@if(Auth::check())
    @include('menus.header.navbar')
@else
    @include('menus.header.loggedout')
@endif


<script src="{{asset("assets/js/real.js")}}" type="text/javascript"></script>
<body>


    <div class="overlayOffCanvas"></div>
    <div class="responsive-nav-wrapper-parent">
        <div class="responsive-nav-wrapper">
            <div class="menu-title">
                <span>Menu</span>
            </div>
            <div class="mobile-logo">




                <a href="/" class="logo">


                    <img alt="Exco Parts" src="https://www.excohdparts.com/images/thumbs/0000520.png" /></a>
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
                    <a href="/wheel-end-3" title="BRAKES &amp; WHEEL END">BRAKES &amp; WHEEL END</a>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <a href="/camshaft-repair-kits-2" title="CAMSHAFT &amp; REPAIR KITS">CAMSHAFT &amp; REPAIR KITS</a>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <strong class="current-item">CAMSHAFTS</strong>
                </li>
            </ul>
        </div>

        <div class="master-column-wrapper">



            <div class="center-2 items-4">



                @if(isset($mydata))
                <div class="page category-page">
                    <div class="category-page-title">
                        <div class="title-picture-wrapper" style="display:none;">
                            <div class="category-picture-wrapper">
                                <img alt="Picture for category CAMSHAFTS" title="Picture for category CAMSHAFTS" src="https://www.excohdparts.com/images/default-image.png"/></div>
                            <h1>
                                <span>CAMSHAFTS</span>
                            </h1>
                        </div>

                        <div class="sub-category-toggle-select">Select Subcategory</div>
                        <div class="sub-categories-wrapper">
                            @foreach(DB::table('finalcategory')
                           ->select('finalcategory.*')
                              ->where('finalcategory.parent_id','=', $mydata)
                              ->get() as $category)
                            <div class="title">
                                <div class="sub-cat-img-thumb">
                                    <a class="categorie-thumb" href="/1-14-10-spline" title="Show products in category 1-1/4&quot; - 10 SPLINE">
                                        <img alt="Picture for category 1-1/4&quot; - 10 SPLINE" src="https://www.excohdparts.com/images/thumbs/default-image_600.png" title="Show products in category 1-1/4&quot; - 10 SPLINE" />
                                    </a>
                                    <a class="categorie-name" href="/1-14-10-spline" title="Show products in category 1-1/4&quot; - 10 SPLINE">
                                        {{$category->name}}
                                    </a>
                                </div>


                            </div>
                            @endforeach

                        </div>
                    </div>
                    @endif
                    <div class="page-body">






                        <div class="product-filters">
                        </div>



                    </div>
                </div>


            </div>
            <div class="side-2">
                <div class="category-left-filter">


                    <form id="AjaxFiltersProForm" action="/AjaxFiltersProSearch/Search" method="post">
                        <div class="home-page-filters-wrapper ajax-filters-pro"
                             data-showCategoryDropdown="false"
                             data-showCategoryAndSubcategoryDropdown="false"
                             data-showManufacturerDropdown="true"
                             data-showCategoryAndManufacturerDropdown="false"
                             data-showCategorySubcategoryAndManufacturerDropdown="false"
                             data-categoryResource="Category"
                             data-subcategoryResource="Subcategory"
                             data-manufacturerResource="Manufacturer"
                             data-getCategoriesUrl="/AjaxFiltersProSearch/GetCategories"
                             data-getManufacturersUrl="/AjaxFiltersProSearch/GetManufacturers"
                             data-getSpecificationsUrl="/AjaxFiltersProSearch/GetSpecification">

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
                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq5FicgfvBbbRuZCBM9QuL5qpnRiWS_Eve95DxfA92Sgm2Umyb_u9xgwfO40zklPSyFXLETFxA_IE80SM-IF0S2Uy9Al66x1qp4lhW58zccQxv1ZxDW9ihEcFQEO1NCEvyk" /></form>
                </div>



                <div class="nopAjaxFilters7Spikes"
                     data-categoryid="583"
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
                <input id="availablePageSizesJson" name="availablePageSizesJson" type="hidden" value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;3&quot;,&quot;Value&quot;:&quot;3&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;6&quot;,&quot;Value&quot;:&quot;6&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;9&quot;,&quot;Value&quot;:&quot;9&quot;}]" />        <div class="blocks-wrapper">
                    <div class="block block-category-navigation">
                        <div class="title">
                            <strong>Categories</strong>
                        </div>
                        <div class="listbox">
                            <ul class="list">

                                <li class="inactive">
                                    <a href="/look-up-by-truck-4" class="width-sublist">
                                        LOOK UP BY TRUCK
                                    </a>
                                </li>

                                <li class="inactive">
                                    <a href="/air-and-brake-3" class="width-sublist">
                                        AIR SYSTEM
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="/wheel-end-3" class="width-sublist">
                                        BRAKES &amp; WHEEL END
                                    </a>
                                    <div class="sublist-toggle-button"></div>
                                    <ul class="sublist">

                                        <li class="inactive">
                                            <a href="/slack-adjusters-3" class="width-sublist">
                                                SLACK ADJUSTERS
                                            </a>
                                        </li>

                                        <li class="active">
                                            <a href="/camshaft-repair-kits-2" class="width-sublist">
                                                CAMSHAFT &amp; REPAIR KITS
                                            </a>
                                            <div class="sublist-toggle-button"></div>
                                            <ul class="sublist">

                                                <li class="active last">
                                                    <a href="/camshafts" class="width-sublist">
                                                        CAMSHAFTS
                                                    </a>
                                                    <div class="sublist-toggle-button"></div>
                                                    <ul class="sublist">

                                                        <li class="inactive">
                                                            <a href="/1-14-10-spline" class="">
                                                                1-1/4&quot; - 10 SPLINE
                                                            </a>
                                                        </li>

                                                        <li class="inactive">
                                                            <a href="/1-12-10-spline" class="">
                                                                1-1/2&quot; - 10 SPLINE
                                                            </a>
                                                        </li>

                                                        <li class="inactive">
                                                            <a href="/1-12-28-spline" class="">
                                                                1-1/2&quot; - 28 SPLINE
                                                            </a>
                                                        </li>

                                                        <li class="inactive">
                                                            <a href="/1-58-37-spline" class="">
                                                                1-5/8&quot; - 37 SPLINE
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="inactive">
                                                    <a href="/camshafts-hardware" class="">
                                                        CAMSHAFTS HARDWARE
                                                    </a>
                                                </li>

                                                <li class="inactive">
                                                    <a href="/camshafts-repair-kits" class="">
                                                        CAMSHAFTS REPAIR KITS
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="inactive">
                                            <a href="/drive-line" class="width-sublist">
                                                HUB CAPS &amp; COMPONENTS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/miscellaneous" class="">
                                                AXLE NUTS &amp; WASHERS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/cabin-seat-air-springs" class="">
                                                BRAKE SHOE &amp; COMPONENTS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/brake-drums-2" class="">
                                                BRAKE DRUMS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/brake-rotors-components-2" class="">
                                                BRAKE ROTORS &amp; COMPONENTS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/rolling-lobe-air-springs" class="">
                                                BRAKE SPIDERS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/single-convoluted-air-springs" class="">
                                                HUBS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/double-convoluted-air-springs" class="">
                                                BRAKE CALIPERS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/wheel-studs-nuts" class="">
                                                WHEEL STUDS &amp; NUTS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/wheel-bearing" class="">
                                                WHEEL BEARING
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/wheel-seals" class="">
                                                WHEEL SEALS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/steel-wheels" class="">
                                                STEEL WHEELS
                                            </a>
                                        </li>

                                        <li class="inactive">
                                            <a href="/aluminum-wheels" class="">
                                                ALUMINUM WHEELS
                                            </a>
                                        </li>
                                    </ul>
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


    <script src="{{asset("assets/js/j2.js")}}" type="text/javascript"></script>

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

    <div class="scroll-back-button" id="goToTop" onclick="jumpScroll()"></div>
    <script>

        function jumpScroll() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
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
</body>
</html>
