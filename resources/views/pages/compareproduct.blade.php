

<link href="{{asset("assets/css/c1.css")}}" rel="stylesheet" type="text/css" />

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
        <div class="master-column-wrapper">
            <div class="center-1">


                <div class="page compare-products-page">
                    <div class="page-title">
                        <h1>Compare products</h1>
                    </div>
                    <div class="page-body">
                        <a href="#" onclick="setLocation('/clearcomparelist')" class="clear-list">Clear list</a>
                        <div class="table-wrapper">
                            <table class="compare-products-table">
                                <tbody>
                                <tr class="remove-product">
                                    <td class="empty">&nbsp;</td>
                                    <td style="width: 43%;">
                                        <input type="button" value="Remove" title="Remove" class="button-2 remove-button" onclick="setLocation('/compareproducts/remove/112')" />
                                    </td>
                                    <td style="width: 43%;">
                                        <input type="button" value="Remove" title="Remove" class="button-2 remove-button" onclick="setLocation('/compareproducts/remove/111')" />
                                    </td>
                                </tr>
                                <tr class="product-picture">
                                    <td class="empty">&nbsp;</td>
                                    <td style="width: 43%;">
                                        <a class="picture" href="/lx1900h-lube-spin-on-filter"><img alt="Picture of LX1900H Lube , Spin-On Filter" src="https://www.excohdparts.com/images/thumbs/0000802_lx1900h-lube-spin-on-filter_360.jpeg" title="Show details for LX1900H Lube , Spin-On Filter" /></a>
                                    </td>
                                    <td style="width: 43%;">
                                        <a class="picture" href="/test3"><img alt="Picture of TEST3" src="https://www.excohdparts.com/images/thumbs/default-image_360.png" title="Show details for TEST3" /></a>
                                    </td>
                                </tr>
                                <tr class="product-name">
                                    <td>
                                        <label>Name</label>
                                    </td>
                                    <td style="width: 43%;">
                                        <a href="/lx1900h-lube-spin-on-filter">LX1900H Lube , Spin-On Filter</a>
                                    </td>
                                    <td style="width: 43%;">
                                        <a href="/test3">TEST3</a>
                                    </td>
                                </tr>
                                <tr class="product-price">
                                    <td>
                                        <label>Price</label>
                                    </td>
                                    <td style="width: 43%;">

                                    </td>
                                    <td style="width: 43%;">

                                    </td>
                                </tr>
                                <tr class="short-description">
                                    <td>
                                        <label>Short description</label>
                                    </td>
                                    <td style="width: 43%;">
                                        Fit: Cummins ISX Engine
                                    </td>
                                    <td style="width: 43%;">
                                        DDD
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="compare-products-mobile">
                            <div class="compare-section product-picture">
                                <ul>
                                    <li class="item">
                                        <div class="details">
                                            <button type="button" title="Remove" class="button-2 remove-button" onclick="setLocation('/compareproducts/remove/112')"><span>Remove</span></button>
                                        </div>
                                        <div class="picture">
                                            <a href="/lx1900h-lube-spin-on-filter"><img alt="Picture of LX1900H Lube , Spin-On Filter" src="https://www.excohdparts.com/images/thumbs/0000802_lx1900h-lube-spin-on-filter_360.jpeg" title="Show details for LX1900H Lube , Spin-On Filter" /></a>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="details">
                                            <button type="button" title="Remove" class="button-2 remove-button" onclick="setLocation('/compareproducts/remove/111')"><span>Remove</span></button>
                                        </div>
                                        <div class="picture">
                                            <a href="/test3"><img alt="Picture of TEST3" src="https://www.excohdparts.com/images/thumbs/default-image_360.png" title="Show details for TEST3" /></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="compare-section product">
                                <div class="title">Name</div>
                                <ul>
                                    <li class="item">
                                        <div class="details">
                                            <div class="product-name">
                                                <a href="/lx1900h-lube-spin-on-filter">LX1900H Lube , Spin-On Filter</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="details">
                                            <div class="product-name">
                                                <a href="/test3">TEST3</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="compare-section price">
                                <div class="title">Price</div>
                                <ul>
                                    <li class="item">
                                        <span></span>
                                    </li>
                                    <li class="item">
                                        <span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="compare-section description">
                                <div class="title">Short description</div>
                                <ul>
                                    <li class="item">
                                        <p>Fit: Cummins ISX Engine</p>
                                    </li>
                                    <li class="item">
                                        <p>DDD</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

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
