<link href="<?php echo e(asset("assets/css/style2.css")); ?>" rel="stylesheet" type="text/css"/>


<style>

    select {
        background-color: white;
        opacity: 50% !important;
        color: black;
    }
</style>

<?php if(Auth::check()): ?>
    <?php echo $__env->make('menus.header.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('menus.header.loggedout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<script src="<?php echo e(asset("assets/js/real.js")); ?>" type="text/javascript"></script>


<div class="overlayOffCanvas"></div>
<div class="responsive-nav-wrapper-parent">
    <div class="responsive-nav-wrapper">
        <div class="menu-title">
            <span>Menu</span>
        </div>
        <div class="mobile-logo">


            <a href="/" class="logo">


                <img alt="Exco Parts" src="https://www.excohdparts.com/images/thumbs/0000520.png"/></a>
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
    <div class="master-column-wrapper">


        <div class="center-2 items-4">

            <div class="page manufacturer-page">
                <div class="page-title">
                    <h1>Kenworth</h1>
                </div>
                <div class="page-body">


                    <div class="product-selectors">

                        <div class="filters-button-wrapper">
                            <button class="filters-button">Filter</button>
                        </div>

                        <div class="product-viewmode">
                            <a href="https://www.excohdparts.com/kenworth-3?viewmode=grid" title="Grid"
                               class="viewmode-icon grid hidden" style="display: none;"></a>
                            <span data-items="3" title="3 Items in Grid" class="grid items-3 ">3 Items in Grid</span>
                            <span data-items="4" title="4 Items in Grid"
                                  class="grid items-4 selected">4 Items in Grid</span>
                            <a href="https://www.excohdparts.com/kenworth-3?viewmode=list" title="List"
                               class="viewmode-icon list ">List</a>
                        </div>
                        <div class="compare-products-link">
                            <a href="/compareproducts">Compare products list</a>
                        </div>
                        <div class="product-page-size">
                            <select id="products-pagesize" name="products-pagesize" onchange="setLocation(this.value);">
                                <option value="https://www.excohdparts.com/kenworth-3?pagesize=3">3 items per page
                                </option>
                                <option value="https://www.excohdparts.com/kenworth-3?pagesize=6" selected='selected'>6
                                    items per page
                                </option>
                                <option value="https://www.excohdparts.com/kenworth-3?pagesize=9">9 items per page
                                </option>
                            </select>
                        </div>
                        <div class="product-sorting">
                            <select id="products-orderby" name="products-orderby" onchange="setLocation(this.value);">
                                <option selected="selected" value="https://www.excohdparts.com/kenworth-3?orderby=0">
                                    Position
                                </option>
                                <option value="https://www.excohdparts.com/kenworth-3?orderby=5">Name: A to Z</option>
                                <option value="https://www.excohdparts.com/kenworth-3?orderby=6">Name: Z to A</option>
                                <option value="https://www.excohdparts.com/kenworth-3?orderby=10">Price: Low to High
                                </option>
                                <option value="https://www.excohdparts.com/kenworth-3?orderby=11">Price: High to Low
                                </option>
                                <option value="https://www.excohdparts.com/kenworth-3?orderby=15">Created on</option>
                            </select>
                        </div>
                    </div>


                    <div class="product-grid">
                        <div class="item-grid">
                            <?php if(isset($alldata) && $alldata -> count() > 0): ?>
                                <?php $__currentLoopData = $alldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item-box">

                                        <div class="product-item" data-productid="111">
                                            <div class="picture">
                                                <a href="/test3" title="Show details for TEST3">
                                                    <img class="picture-img"
                                                         src="https://www.excohdparts.com/images/thumbs/default-image_360.png"
                                                         alt="Picture of TEST3" title="Show details for TEST3"/>
                                                </a>
                                            </div>
                                            <div class="details">
                                                <h2 class="product-title">
                                                    <a href="/test3"><?php echo e($product->name); ?></a>
                                                </h2>
                                                <div class="product-rating-box" title="0 review(s)">
                                                    <div class="rating">
                                                        <div style="width: 0%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <?php echo e($product->shortDescription); ?>

                                                </div>
                                                <div class="add-info">

                                                    <div class="prices">
                                                        <div class="box-prices-wrapper">
                                                            <span class="price actual-price"></span>
                                                        </div>
                                                        <div class="additional-price-info">
                                                        </div>
                                                    </div>

                                                    <div class="buttons items-2">
                                                        <input type="button" value="Add to compare list"
                                                               title="Add to compare list"
                                                               class="button-2 add-to-compare-list-button"
                                                               onclick="AjaxCart.addproducttocomparelist('/compareproducts/add/111');return false;"/>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>

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


                            <div class="row">
                                <div class="search-container home-page-filter-button">

                                    <span
                                        style="color:black; margin-right: 10px!important; margin-bottom: 10px!important;"> <strong>Find Your Parts:</strong> </span>
                                    <select style="width: 250px !important;" placeholder="MANUFACTURER"
                                            id="manufacturer"
                                            name="manufacturer">
                                        <option selected="false">MANUFACTURER</option>
                                        <?php $__currentLoopData = DB::table('offhighway')
                                            ->select('offhighway.*')
                                            ->get()
                                            ->unique('manufacturer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($manu->manufacturer); ?>"><?php echo e($manu->manufacturer); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>


                                    <select style="width: 250px !important;" placeholder="MODEL" id="model"
                                            name="model">
                                        <option selected="false">MODEL</option>
                                    </select>


                                    <select style="width:250px !important;" placeholder="ENGINE" id="engine"
                                            name="engine">
                                        <option selected="false">ENGINE</option>
                                    </select>
                                    <button type="submit" id="searchnow" name="searchnow" class="search-button">Search
                                    </button>

                                </div>

                                <input type="hidden" id="manufacturers" name="manufacturerId" value="0"
                                       autocomplete="off"/>
                            </div>

                            <div class="">
                                <input type="hidden" id="specification_18" name="specificationOptions" value="0"
                                       class="" data-id="18"
                                       data-name="Model" autocomplete="off"/>
                            </div>

                            <div class="">
                                <input type="hidden" id="specification_22" name="specificationOptions" value="0"
                                       class="" data-id="22"
                                       data-name="Engine" autocomplete="off"/>
                            </div>

                        </div>
                    </div>
                    <input name="__RequestVerificationToken" type="hidden"
                           value="CfDJ8KbjZjDJvz9Ire7PA-9PUq5p4gq3gQHsxiLtqwUte-wIEfMkHF9FLx1I9DAL8Ld9-6qvipaakViXnZBetkRBjv3xr_caG4MX_Y9Ic2Qk-re9nYoVoCd5D_DpOKk3s12tbom0e2J77tfAv91Z1CPL468"/>
                </form>
            </div>


            <div class="nopAjaxFilters7Spikes"
                 data-categoryid="0"
                 data-manufacturerid="27"
                 data-vendorid="0"
                 data-isonsearchpage="False"
                 data-searchkeyword=""
                 data-searchcategoryid="0"
                 data-searchmanufacturerid="0"
                 data-searchvendorid="0"
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

            <input id="availableSortOptionsJson" name="availableSortOptionsJson" type="hidden"
                   value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;Position&quot;,&quot;Value&quot;:&quot;0&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Name: A to Z&quot;,&quot;Value&quot;:&quot;5&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Name: Z to A&quot;,&quot;Value&quot;:&quot;6&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Price: Low to High&quot;,&quot;Value&quot;:&quot;10&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Price: High to Low&quot;,&quot;Value&quot;:&quot;11&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;Created on&quot;,&quot;Value&quot;:&quot;15&quot;}]"/>
            <input id="availableViewModesJson" name="availableViewModesJson" type="hidden"
                   value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;Grid&quot;,&quot;Value&quot;:&quot;grid&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;List&quot;,&quot;Value&quot;:&quot;list&quot;}]"/>
            <input id="availablePageSizesJson" name="availablePageSizesJson" type="hidden"
                   value="[{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;3&quot;,&quot;Value&quot;:&quot;3&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:true,&quot;Text&quot;:&quot;6&quot;,&quot;Value&quot;:&quot;6&quot;},{&quot;Disabled&quot;:false,&quot;Group&quot;:null,&quot;Selected&quot;:false,&quot;Text&quot;:&quot;9&quot;,&quot;Value&quot;:&quot;9&quot;}]"/>
            <div class="blocks-wrapper">
                <div class="block block-category-navigation">
                    <div class="title">
                        <strong>Categories</strong>
                    </div>
                    <div class="listbox">
                        <?php $__currentLoopData = DB::table('categories')
                         ->select('categories.name')
                         ->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul class="list">

                                <li class="inactive" style="line-height: 0.1em!important;">
                                    <a href="/triple-convoluted-air-springs" class="">
                                        <?php echo e($product->name); ?>

                                    </a>
                                </li>




                            </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                if (ddl !== null) {
                    var oldData = ddl.dataSource.data();
                    ddl.dataSource.remove(oldData[0]); //remove 1st item
                }

            });
        </script>

    </div>

</div>


<?php echo $__env->make('menus.footer.myfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script lang="ja" type="text/javascript">

    $(document).ready(function () {
        $(".sublist-wrap > ul.rootlevel").append('<li><a href="/product/all" class="view-all">View All</a></li>');
    });
</script>

</div>

<script type="text/javascript">function add_chatinline() {
        var hccid = 97799330;
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    }

    add_chatinline(); </script>


<script src="<?php echo e(asset("assets/js/scripts3.js")); ?>" type="text/javascript"></script>

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
            success: function (data) {
                subscribeProgress.hide();
                $("#newsletter-result-block").html(data.Result);
                if (data.Success) {
                    $('#newsletter-subscribe-block').hide();
                    $('#newsletter-result-block').show();
                } else {
                    $('#newsletter-result-block').fadeIn("slow").delay(2000).fadeOut("slow");
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert('Failed to subscribe.');
                subscribeProgress.hide();
            }
        });
    }

    $(document).ready(function () {
        $('#newsletter-subscribe-button').click(function () {
            newsletter_subscribe('true');
        });
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
    $("#small-search-box-form").submit(function (event) {
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
            <img src="${ data.DefaultPictureModel.ImageUrl }" alt="${ data.Name }" title="${ data.Name }"
                 style="border: none">
        </div>
        <div class="detail">
            <div class="title">${ data.Name }</div>
            <div class="price"># var price = ""; if (data.ProductPrice.Price) { price = data.ProductPrice.Price } # #=
                price #
            </div>
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
    function displaymap() {
        let mymap = document.getElementById("mymap");
        if (mymap.style.display == "none") {
            $("#mymap").slideDown("slow");


        } else {
            $("#mymap").slideUp("slow");


        }
    }
</script>
<!-- Ajax Manufacturer -->

<script type="text/javascript">

    //Manufacturerer change
    $(document).ready(function () {
        jQuery('select[name="manufacturer"]').on('change', function () {
            //document.getElementById("loader1").style.display = "block";
            let manufacturerID = jQuery(this).val();
            if (manufacturerID) {
                jQuery.ajax({
                    url: '/model/' + manufacturerID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        jQuery('select[name="model"]').empty(); // remove last selected item
                        jQuery('select[name="model"]').append('<option>MODEL</option>');
                        jQuery.each(data, function (key, value) {

                            $('select[name="model"]').append('<option value="' + key + '">' + value + '</option>');
                            //document.getElementById("loader1").style.display = "none";
                        });
                    }
                });
            } else {
                $('select[name="model"]').empty();
            }

        });
    });


    //model change

    $(document).ready(function () {
        jQuery('select[name="model"]').on('change', function () {
            //document.getElementById("loader1").style.display = "block";
            let modelID = jQuery(this).val();
            if (modelID) {
                jQuery.ajax({
                    url: '/engine/' + modelID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        jQuery('select[name="engine"]').empty(); // remove last selected item
                        jQuery('select[name="engine"]').append('<option>ENGINE</option>');
                        jQuery.each(data, function (key, value) {

                            $('select[name="engine"]').append('<option value="' + key + '">' + value + '</option>');
                            //document.getElementById("loader1").style.display = "none";
                        });
                    }
                });
            } else {
                $('select[name="engine"]').empty();
            }

        });
    });


    <!--Button Clicked-->


    $("#searchnow").on("click", function () {
        let manufacturer = document.getElementById("manufacturer").value;
        let model = document.getElementById("model").value;
        let engine = document.getElementById("engine").value;

        $.ajax({
            url: window.location.href = "getData/" + manufacturer + "/" + model + "/" + engine,
        });
    });

    <!--Button Clicked-->
    /* el commit */
</script>
</body>
</html>
<?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/resources/views/pages/resultproduct.blade.php ENDPATH**/ ?>