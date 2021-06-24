
<link href="{{asset("assets/css/news1.css")}}" rel="stylesheet" type="text/css" />

@if(Auth::check())
    @include('menus.header.navbar')
@else
    @include('menus.header.loggedout')
@endif

<script src="{{asset("assets/js/j1.js")}}" type="text/javascript"></script>

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
                <a href="C:\Users\user7\Desktop\Themes\subheader-black\shoppingcart.html">Cart</a>
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
        <div class="master-column-wrapper">



            <div class="center-2 items-4">

                <div class="page news-list-page">
                    <div class="page-title">
                        <a href="/news/rss/1" class="link-rss" title="Click here to be informed automatically when we add new items to our site.">RSS</a>
                        <h1>News</h1>
                    </div>
                    <div class="page-body">

                        <div class="news-items">
                            <div class="news-item">
                                <div class="news-head">
                        <span class="news-date">
                            <span class="day">26</span>
                            <span class="month">Sep</span>
                            <span class="year">2017</span>
                        </span>
                                    <div class="buttons">
                                        <a href="/find-out-about-our-products" class="read-more">details</a>
                                    </div>


                                </div>
                                <div class="news-body">
                                    <a class="news-title" href="/find-out-about-our-products">Find out about our products</a>
                                    <div class="news-text">
                                        Lorem ipsum faucibus lacinia integer duis integer sodales accumsan...
                                    </div>
                                </div>

                            </div>
                            <div class="news-item">
                                <div class="news-head">
                        <span class="news-date">
                            <span class="day">26</span>
                            <span class="month">Sep</span>
                            <span class="year">2017</span>
                        </span>
                                    <div class="buttons">
                                        <a href="/check-out-our-latest-offers" class="read-more">details</a>
                                    </div>


                                </div>
                                <div class="news-body">
                                    <a class="news-title" href="/check-out-our-latest-offers">Check out our latest offers</a>
                                    <div class="news-text">
                                        Lorem ipsum faucibus lacinia integer duis integer sodales accumsan...
                                    </div>
                                </div>

                            </div>
                            <div class="news-item">
                                <div class="news-head">
                        <span class="news-date">
                            <span class="day">26</span>
                            <span class="month">Sep</span>
                            <span class="year">2017</span>
                        </span>
                                    <div class="buttons">
                                        <a href="/visit-our-new-store" class="read-more">details</a>
                                    </div>


                                </div>
                                <div class="news-body">
                                    <a class="news-title" href="/visit-our-new-store">Visit our new store</a>
                                    <div class="news-text">
                                        Lorem ipsum faucibus lacinia integer duis integer sodales accumsan...
                                    </div>
                                </div>

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
                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq47qk3S1IDdQKB7xwYpDTBKrier-rOBPDJIqTdcESixuuRJgtbWgmh94rVamRCl1tVTLVKsSkssdU75tw5tEbF9r0RpzP7mh2lnB4Q1AhBDSQ0MJJbcCAt7UFWOSiJm3Qs" /></form>
                </div>
                <div class="blocks-wrapper">
                    <div class="block block-category-navigation">
                        <div class="title">
                            <strong>Categories</strong>
                        </div>
                        <div class="listbox">
                            @foreach(DB::table('categories')
                             ->select('categories.name')
                             ->get() as $product)
                                <ul class="list">

                                    <li class="inactive" style="line-height: 0.1em!important;">
                                        <a href="/triple-convoluted-air-springs" class="">
                                            {{$product->name}}
                                        </a>
                                    </li>




                                </ul>
                            @endforeach
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


<script src="{{asset("assets/js/news1.js")}}" type="text/javascript"></script>

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
</script><script>
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
