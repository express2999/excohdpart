

<link href="{{asset("assets/css/ecat.css")}}" rel="stylesheet" type="text/css" />




@if(Auth::check())
    @include('menus.header.navbar')
@else
    @include('menus.header.loggedout')
@endif
<!-- css and js links -->
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

                <div class="page topic-page" id="ph-topic">
                    <div class="page-title" id="ph-title">
                        <h1>E-Catalogue</h1>
                    </div>
                    <div class="page-body">
                        <div class="panel-body">
                            <div class="page press-coverage">
                                <ul class="catalogue-grid">
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">

                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex55A-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_01.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex55A-AHAEXCOPARTS.pdf" target="_blank">AUTOMATIC BRAKE ADJUSTER</a></div>
                                        </div>
                                    </li>
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">
                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex55B-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_02.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex55B-AHAEXCOPARTS.pdf" target="_blank">STEERING</a></div>
                                        </div>
                                    </li>
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">
                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex55C-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_03.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex55C-AHAEXCOPARTS.pdf" target="_blank">WHEEL END PRODUCT</a></div>
                                        </div>
                                    </li>
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">
                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/EX55D-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_04.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/EX55D-AHAEXCOPARTS.pdf" target="_blank">SELF-ALIGNING</a></div>
                                        </div>
                                    </li>
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">
                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex56A-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_05.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex56A-AHAEXCOPARTS.pdf" target="_blank">AIR BRAKE VALVE</a></div>
                                        </div>
                                    </li>
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">
                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex56B-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_06.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex56B-AHAEXCOPARTS.pdf" target="_blank">CABLES 3-IN-1 &amp; 4-IN-1 WRAPS</a></div>
                                        </div>
                                    </li>
                                    <li class="catalogue-box" style="height: 270px;">
                                        <div class="catalogue-item">
                                            <div class="picture"><a href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex56C-AHAEXCOPARTS.pdf" target="_blank"> <img class="padtop10" src="{{asset("assets/images/uploaded/catalogue_07.jpg")}}" alt="catalogue" /> </a></div>
                                            <div class="product-title"><a style="text-decoration: none; font-size: 12px;" href="https://www.excohdparts.com/images/uploaded/ECatalog/Ex56C-AHAEXCOPARTS.pdf" target="_blank">CABLES WITH ZINC PLUGS</a></div>
                                        </div>
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

<script src="{{asset("assets/js/ecat.js")}}" type="text/javascript"></script>



<script lang="ja" type="text/javascript">

    $(document).ready(function () {
        $(".sublist-wrap > ul.rootlevel").append('<li><a href="/product/all" class="view-all">View All</a></li>');
    });
</script>

</div>

<script type="text/javascript">function add_chatinline(){var hccid=97799330;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); </script>



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

