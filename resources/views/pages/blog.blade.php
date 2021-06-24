

<link href="{{asset("assets/css/b1.css")}}" rel="stylesheet" type="text/css" />

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
                <a href="wishlist">Cart</a>
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

                <div class="page blog-page">
                    <div class="page-title">
                        <a href="/blog/rss/1" class="link-rss" title="Click here to be informed automatically when we add new items to our site.">RSS</a>
                        <h1>
                            Blog        </h1>
                    </div>
                    <div class="page-body">

                        <div class="blog-posts">
                            <div class="post">


                                <div class="rich-blog-image">
                                    <a href="/a-drivers-nice-friend" alt="A Driver&#x2019;s Nice Friend"><img src="{{asset("assets/images/uploaded/0000633_900opt.jpeg")}}" title="A Driver&#x2019;s Nice Friend" alt="A Driver&#x2019;s Nice Friend" /></a>
                                </div>

                                <div class="post-head">
                        <span class="post-date">
                            <span class="day">08</span>
                            <span class="month">Oct</span>
                            <span class="year">2017</span>
                        </span>
                                    <div class="buttons">
                                        <a href="/a-drivers-nice-friend" class="read-more">details</a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <a class="post-title" href="/a-drivers-nice-friend">A Driver&#x2019;s Nice Friend</a>
                                    <div class="post-text">
                                        <p>Lorem ipsum dolor sit amet, splendide adolescens dissentias te sea, in quo dicant verear regione. Ea pri postea voluptatibus, eos democritum adipiscing at. Eros audiam graecis te duo, ad verear sanctus invenire est, dolor intellegam ei duo. Qui ea mutat dolores, ea mei alia zril, nibh error per at.</p>
                                        <p>Vim tation adipisci molestiae et, ea primis nominati disputando eos. Est ad erat inimicus, ad sea urbanitas ullamcorper. At qualisque elaboraret signiferumque vis, sit errem pericula scriptorem no, adhuc hendrerit vulputate an sit. Quo ne iracundia gloriatur, ad mucius tacimates vis, ad eirmod mnesarchum intellegam duo. Essent tincidunt adipiscing eu sea, epicuri vivendum cu has, ne nec bonorum pertinax.</p>
                                    </div>
                                </div>

                                <div class="blog-details">
                                    <a href="/a-drivers-nice-friend#comments" class="read-comments">Comments (1)</a>
                                </div>


                                <div class="post-footer">

                                    <div class="post-actions">
                                        <a href="/a-drivers-nice-friend" class="read-more">Read More</a>

                                        <ul class="share-post" id="share-buttons">
                                            <li class="facebook">
                                                <!-- Facebook -->
                                                <a href="javascript:openShareWindow('https://www.facebook.com/sharer.php?u=https://www.excohdparts.com//a-drivers-nice-friend')"></a>
                                            </li>
                                            <li class="twitter">
                                                <!-- Twitter -->
                                                <a href="javascript:openShareWindow('https://twitter.com/share?url=https://www.excohdparts.com//a-drivers-nice-friend')"></a>
                                            </li>
                                            <li class="pinterest">
                                                <!-- Pinterest -->
                                                <a data-pin-do="buttonPin" data-pin-custom="true" data-pin-description="A Driver&#x2019;s Nice Friend"
                                                   data-pin-media="https://www.excohdparts.com/images/thumbs/0000633_900.jpeg" href="https://www.pinterest.com/pin/create/button/?url=https://www.excohdparts.com//a-drivers-nice-friend"></a>
                                            </li>
                                            <li class="linkedin">
                                                <!-- LinkedIn -->
                                                <a href="javascript:openShareWindow('https://www.linkedin.com/shareArticle?mini=true&url=https://www.excohdparts.com//a-drivers-nice-friend')"></a>
                                            </li>
                                            <li class="google">
                                                <!-- Google+ -->
                                                <a href="javascript:openShareWindow('https://plus.google.com/share?url=https://www.excohdparts.com//a-drivers-nice-friend')"></a>
                                            </li>
                                        </ul>
                                        <script>
                                            function openShareWindow(url) {
                                                var winWidth = 520;
                                                var winHeight = 400;
                                                var winTop = (screen.height / 2) - (winHeight / 2);
                                                var winLeft = (screen.width / 2) - (winWidth / 2);

                                                window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                                            }

                                            !function (a, b, c) { var d, e, f; d = "PIN_" + ~~((new Date).getTime() / 864e5), a[d] ? a[d] += 1 : (a[d] = 1, a.setTimeout(function () { e = b.getElementsByTagName("SCRIPT")[0], f = b.createElement("SCRIPT"), f.type = "text/javascript", f.async = !0, f.src = c.mainUrl + "?" + Math.random(), e.parentNode.insertBefore(f, e) }, 10)) }(window, document, { mainUrl: "//assets.pinterest.com/js/pinit_main.js" });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="post">


                                <div class="rich-blog-image">
                                    <a href="/blog-1" alt="The EXCO HD PARTS training modules"><img src="{{asset("assets/images/uploaded/0000632_900opt.jpeg")}}" title="The EXCO HD PARTS training modules" alt="The EXCO HD PARTS training modules" /></a>
                                </div>

                                <div class="post-head">
                        <span class="post-date">
                            <span class="day">09</span>
                            <span class="month">Sep</span>
                            <span class="year">2017</span>
                        </span>
                                    <div class="buttons">
                                        <a href="/blog-1" class="read-more">details</a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <a class="post-title" href="/blog-1">The EXCO HD PARTS training modules</a>
                                    <div class="post-text">
                                        <p><span style="font-size: 12pt;"><strong>Training</strong></span></p>
                                        <p><br />Take advantage of the comprehensive knowledge of our in-house engineers. Sign up for our diversified training opportunities and draw on our engineering excellence and experience. Whether you choose a topic-related seminar, for example on chassis and steering technology, or a product-related training course, for example on EXCO HD PARTS our experts will be happy to share their knowledge with you.</p>
                                        <p> </p>
                                        <p><span style="font-size: 12pt;"><strong>The EXCO HD PARTS training modules</strong></span></p>
                                        <p><br />Training courses are open to wholesalers (field representatives and in-house personnel) and employees of aftermarket retailers and workshops.</p>
                                        <p> </p>
                                        <p><span style="font-size: 12pt;"><strong>Knowledge shared is knowledge gained</strong></span></p>
                                        <p><br />Learn what makes EXCO HD PARTS so special. Run by skilled and qualified trainers, the content of our training seminars is geared to the respective audience and date and place of the courses can be arranged flexibly. Whether during trade fairs, at our head office or as part of an event at your site – the EXCO HD PARTS training modules are packed with field-relevant knowledge.</p>
                                    </div>
                                </div>

                                <div class="blog-details">
                                    <a href="/blog-1#comments" class="read-comments">Comments (3)</a>
                                </div>


                                <div class="post-footer">

                                    <div class="post-actions">
                                        <a href="/blog-1" class="read-more">Read More</a>

                                        <ul class="share-post" id="share-buttons">
                                            <li class="facebook">
                                                <!-- Facebook -->
                                                <a href="javascript:openShareWindow('https://www.facebook.com/sharer.php?u=https://www.excohdparts.com//blog-1')"></a>
                                            </li>
                                            <li class="twitter">
                                                <!-- Twitter -->
                                                <a href="javascript:openShareWindow('https://twitter.com/share?url=https://www.excohdparts.com//blog-1')"></a>
                                            </li>
                                            <li class="pinterest">
                                                <!-- Pinterest -->
                                                <a data-pin-do="buttonPin" data-pin-custom="true" data-pin-description="The EXCO HD PARTS training modules"
                                                   data-pin-media="https://www.excohdparts.com/images/thumbs/0000632_900.jpeg" href="https://www.pinterest.com/pin/create/button/?url=https://www.excohdparts.com//blog-1"></a>
                                            </li>
                                            <li class="linkedin">
                                                <!-- LinkedIn -->
                                                <a href="javascript:openShareWindow('https://www.linkedin.com/shareArticle?mini=true&url=https://www.excohdparts.com//blog-1')"></a>
                                            </li>
                                            <li class="google">
                                                <!-- Google+ -->
                                                <a href="javascript:openShareWindow('https://plus.google.com/share?url=https://www.excohdparts.com//blog-1')"></a>
                                            </li>
                                        </ul>
                                        <script>
                                            function openShareWindow(url) {
                                                var winWidth = 520;
                                                var winHeight = 400;
                                                var winTop = (screen.height / 2) - (winHeight / 2);
                                                var winLeft = (screen.width / 2) - (winWidth / 2);

                                                window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                                            }

                                            !function (a, b, c) { var d, e, f; d = "PIN_" + ~~((new Date).getTime() / 864e5), a[d] ? a[d] += 1 : (a[d] = 1, a.setTimeout(function () { e = b.getElementsByTagName("SCRIPT")[0], f = b.createElement("SCRIPT"), f.type = "text/javascript", f.async = !0, f.src = c.mainUrl + "?" + Math.random(), e.parentNode.insertBefore(f, e) }, 10)) }(window, document, { mainUrl: "//assets.pinterest.com/js/pinit_main.js" });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="side-2">



                <div class="block blog-search-box">
                    <div class="title">
                        <strong>Blog search</strong>
                    </div>
                    <div class="listbox">
                        <form method="get" id="rich-blog-search-form" action="/RichBlogSearch/ListResults">
                            <input id="rich-blog-searchterms" class="search-box-text" type="text" name="phrase" placeholder="Search in blog" />
                            <button class="search-box-button" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#rich-blog-searchterms").kendoAutoComplete({
                            highlightFirst: false,
                            minLength: 3,
                            dataTextField: "Title",
                            filter: "contains",
                            popup: {
                                appendTo: $("#rich-blog-search-form")
                            },
                            template: '<span class="rich-blog-search-item" data-url="' + '/' + '${ data.SEName }">${ data.Title }</span>',
                            select: function (e) {
                                var advancedSearchItemId = this.dataItem(e.item.index()).Id;

                                if (advancedSearchItemId === 0) {
                                    e.preventDefault();

                                    window.location = '/RichBlogSearch/ListResults' + '?phrase=' + $('#rich-blog-searchterms').val();
                                }
                            },
                            dataSource: new kendo.data.DataSource({
                                serverFiltering: true,
                                requestStart: function (e) {
                                    $("#rich-blog-searchterms").addClass("rich-blog-search-busy");
                                },
                                requestEnd: function (e) {
                                    e.response.push({ Title: 'Search for "' + $('#rich-blog-searchterms').val() + '"', Id: 0 });
                                },
                                change: function (e) {
                                    $("#rich-blog-searchterms").removeClass("rich-blog-search-busy");
                                },
                                transport: {
                                    read: "/RichBlogSearch/Search",
                                    parameterMap: function () {
                                        return { phrase: $("#rich-blog-searchterms").val() };
                                    }
                                }
                            }),
                            change: function () {
                                var selected = $(".k-list").find(".k-state-selected");
                                var url = selected.find('.rich-blog-search-item').attr('data-url');
                                if (typeof url === "undefined") {
                                    // do nothing as the value has probably been changed from the onblur event handler rather than from dropdown selection
                                } else {
                                    // navigate to the searched product
                                    window.location.href = url;
                                }
                            },
                            dataBound: function (e) {
                                $(".k-animation-container").addClass("blog-instant-search");
                                $(e.sender.list).find('li:last').addClass('rich-blog-autocomplete-last-item');
                            }
                        });
                    });
                </script>
                <div class="block block-blog-archive">
                    <div class="title">
                        <strong>Blog archive</strong>
                    </div>
                    <div class="listbox">
                        <ul class="list" id="blog-month-list">
                            <li class="year">
                                <strong class="number">2017</strong>
                                <div class="sublist-toggle-button"></div>
                                <ul class="sublist" id="blog-year-2017">
                                    <li class="month">
                                        <a href="/blog/month/2017-10">October
                                            (1)</a>
                                    </li>
                                    <li class="month">
                                        <a href="/blog/month/2017-9">September
                                            (1)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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




    <div class="footer">
        <div class="footer-map-holder">
            <div class="title" onclick="displaymap();">
                <strong>Where To Buy</strong>
            </div>
            <div class="">


                <div class="map-wrapper" id="mymap" style="display: none;">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.5238462090742!2d-74.3196348845905!3d40.860376779316034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3074bd6876997%3A0x3cac1cf3e9939605!2s1275%20Bloomfield%20Ave%2C%20Fairfield%2C%20NJ%2007004%2C%20USA!5e0!3m2!1sen!2seg!4v1622022059300!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <script type="text/javascript">
                    $(window).load(function () {
                        var scrollBarrier = 200;
                        var windowObj = $(window);

                        if ($('body').outerHeight() < windowObj.outerHeight() + scrollBarrier) {
                            loadFooterMapScript();
                        }
                        else {
                            windowObj.on('scroll.venturefootermap', function () {
                                if ($(this).scrollTop() > scrollBarrier) {
                                    $(this).off('scroll.venturefootermap');
                                    loadFooterMapScript();
                                }
                            });
                        }
                    });

                    var footerMap;

                    function loadFooterMapScript() {
                        //This check is necessary because if the map script is duplicated (by store locator for example) there are errors in the log and problems with Google maps.
                        if (typeof google === 'object' && typeof google.maps === 'object') {
                            initializeFooterMap();
                        } else {
                            var script = document.createElement("script");
                            script.src = "https://maps.googleapis.com/maps/api/js?callback=initializeFooterMap";
                            var apiKey = "";

                            if (apiKey) {
                                script.src += "&key=" + apiKey;
                            }

                            document.body.appendChild(script);
                        }
                    }

                    function getVentureCustomMapStyles() {
                        var mapStyles = $('.footer-map').attr('data-mapstyles');
                        var mapStylesJson = '';

                        if (!mapStyles) {
                            return '';
                        }

                        try {
                            mapStylesJson = JSON.parse(mapStyles);
                        }
                        catch (e) {
                            console.log('Invalid custom map styles value!');
                        }

                        return mapStylesJson;
                    }

                    function initializeFooterMap() {
                        var mapWrapper = $('.footer-map');
                        mapWrapper.show();
                        var markerX = mapWrapper.attr('data-latitude');
                        var markerY = mapWrapper.attr('data-longitude');

                        var mapOptions = {
                            center: new google.maps.LatLng(markerX, markerY),
                            zoom: 15,
                            draggable: true,
                            scrollwheel: false,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            styles: getVentureCustomMapStyles()
                        };

                        footerMap = new google.maps.Map(mapWrapper[0], mapOptions);

                        var image = mapWrapper.attr('data-pathtoimages') + '/footer-map-marker-icon.png';

                        google.maps.event.addListenerOnce(footerMap, 'idle', function () {
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(markerX, markerY),
                                map: footerMap,
                                title: '',
                                icon: image,
                                draggable: false
                            });

                            marker.setMap(footerMap);

                            footerMap.setCenter(new google.maps.LatLng(markerX, markerY));

                            $(document).trigger('ventureMapLoaded');
                        });
                    }

                </script>
            </div>
        </div>
        <div class="footer-upper">
            <div class="footer-block find-us">
                <div class="title">
                    <strong>Find Us</strong>
                </div>
                <ul class="list footer-collapse">
                    <li class="address">
                        <span>1275 Bloomfield Ave , Fairfield , NJ 07004</span>
                    </li>

                    </li>
                    <li class="mobile-phone">
                        <span>+1 (973) 227-5926</span>
                    </li>
                    <li class="phone">
                        <span>+1 (973) 227-5926</span>
                    </li>
                </ul>
            </div>
            <div class="footer-block information">
                <div class="title">
                    <strong>Information</strong>
                </div>
                <ul class="list footer-collapse">
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\contactus.html">Contact us</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\shippingandreturns.html">Shipping &amp; returns</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\Privacynotice.html">Privacy notice</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\conditionofuse.html">Conditions of Use</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\aboutus.html">About Us</a></li>

                </ul>
            </div>
            <div class="footer-block my-account">
                <div class="title">
                    <strong>My Account</strong>
                </div>
                <ul class="list footer-collapse">
                    <li><a href="C:\Users\user7\Desktop\Themes\headergrey\orders.html">Orders</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\headergrey\addresses.html">Addresses</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\headergrey\submenu\recentvew.html">Recently viewed products</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\sitemap.html">Sitemap</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\applyforvendor.html">Apply for vendor account</a></li>
                </ul>
            </div>
            <div class="footer-block newsetter">
                <div class="title">
                    <strong>Newsletter</strong>
                </div>
                <div class="footer-collapse">
                    <p class="newsletter-subscribe-text">Subscribe and become part of the our community. Be the first to hear about our latest offers and discounts!</p>
                    <div class="newsletter">
                        <div class="title">
                            <strong>Newsletter</strong>
                        </div>
                        <div class="newsletter-subscribe" id="newsletter-subscribe-block">
                            <div class="newsletter-email">
                                <input id="newsletter-email" class="newsletter-subscribe-text" placeholder="Enter your email here..." type="email" name="NewsletterEmail" value="" />
                                <input type="button" value="Subscribe" id="newsletter-subscribe-button" class="button-1 newsletter-subscribe-button"/>
                            </div>
                            <div class="newsletter-validation">
                                <span id="subscribe-loading-progress" style="display: none;" class="please-wait">Wait...</span>
                                <span class="field-validation-valid" data-valmsg-for="NewsletterEmail" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="newsletter-result" id="newsletter-result-block"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">



            <ul class="social-sharing">
                <li><a target="_blank" class="twitter" href="https://twitter.com/"></a></li>
                <li><a target="_blank" class="facebook" href="https://www.facebook.com/"></a></li>
                <li><a target="_blank" class="youtube" href="https://www.youtube.com/user/"></a></li>
                <li><a target="_blank" class="rss" href="/news/rss/1"></a></li>
            </ul>
        </div>
        <div class="footer-lower">
            <div class="footer-disclaimer">
                Copyright &copy; 2021 Exco Parts. All rights reserved.
            </div>
            <div class="footer-powered-by" style="display:none;">
                Powered by <a href="http://www.nopcommerce.com/">nopCommerce</a>
            </div>


        </div>

    </div>

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
