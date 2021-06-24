


<link href="<?php echo e(asset("assets/css/c1.css")); ?>" rel="stylesheet" type="text/css" />




<?php if(Auth::check()): ?>
    <?php echo $__env->make('menus.header.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('menus.header.loggedout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<script src="<?php echo e(asset("assets/js/j1.js")); ?>" type="text/javascript"></script>


    <div class="overlayOffCanvas"></div>
    <div class="responsive-nav-wrapper-parent">
        <div class="responsive-nav-wrapper">
            <div class="menu-title">
                <span>Menu</span>
            </div>
            <div class="mobile-logo">




                <a href="/" class="logo">


                    <img alt="Exco Parts" src="<?php echo e(asset("assets/images/uploaded/0000520.png")); ?>" /></a>
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
            <div class="center-1">

                <div class="page contact-page">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="page-body">
                        <div class="topic-block">
                            <div class="topic-block-body">
                                <div class="page-title">1275 Bloomfield Ave , Fairfield , NJ 07004<br /> Email : sales@ex-corp.com<br /> Call Us : 1 (973) 227-5926</div>
                            </div>
                        </div>


                        <form method="post" action="/contactus">

                            <div class="fieldset">
                                <div class="form-fields">
                                    <div class="inputs">
                                        <label for="FullName">Your name:</label>
                                        <input placeholder="Enter your name." class="fullname" type="text" data-val="true" data-val-required="Enter your name" id="FullName" name="FullName" value="" />
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="inputs">
                                        <label for="Email">Your email:</label>
                                        <input placeholder="Enter your email address." class="email" type="email" data-val="true" data-val-email="Wrong email" data-val-required="Enter email" id="Email" name="Email" value="moe@ex-corp.com" />
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="inputs">
                                        <label for="Enquiry">Enquiry:</label>
                                        <textarea placeholder="Enter your enquiry." class="enquiry" data-val="true" data-val-required="Enter enquiry" id="Enquiry" name="Enquiry">
</textarea>
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Enquiry" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <input type="submit" name="send-email" class="button-1 contact-us-button" value="Submit" />
                            </div>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq7ZwbixYHp-xR6Yh21DNyDFvcnDFrxxBWwf3AUT1WfEPGGuzOdmL0frUfCG8riU5OxWpaj8xvezCRGoxbySZ9anhnfp0tzAob_rgPTrVJcejl8c9K0mzx-gB8fJCjkDQlY" /></form>

                    </div>
                </div>


            </div>

        </div>

    </div>




<?php echo $__env->make('menus.footer.myfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script lang="ja" type="text/javascript">

        $(document).ready(function () {
            $(".sublist-wrap > ul.rootlevel").append('<li><a href="/product/all" class="view-all">View All</a></li>');
        });
    </script>

</div>

<script type="text/javascript">function add_chatinline(){var hccid=97799330;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); </script>


<script src="<?php echo e(asset("assets/js/j2.js")); ?>" type="text/javascript"></script>

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


<div class="scroll-back-button" id="goToTop" onclick="jumpScroll()"></div>
<script>

    function jumpScroll() {
        window.scrollTo({top: 0, behavior: 'smooth'});
    }
</script>
</body>
</html>
<?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/resources/views/pages/contactus.blade.php ENDPATH**/ ?>