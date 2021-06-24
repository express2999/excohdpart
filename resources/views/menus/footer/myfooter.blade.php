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
                    <span><a href="https://goo.gl/maps/sMFLrH5YABRZkKy79">1275 Bloomfield Ave , Fairfield , NJ 07004</a></span>
                </li>

                <li class="e-mail">
                    <span><a href="mailto:info@excofilter.com">info@excofilter.com</a></span>
                </li>
                <li class="mobile-phone">
                    <span> <a href="tel:973-227-5960">+1 (973) 227-5926</a></span>
                </li>
                <li class="phone">
                    <span><a href="tel:973-227-5926">+1 (973) 227-5926</a></span>
                </li>
            </ul>
        </div>
        <div class="footer-block information">
            <div class="title">
                <strong>Information</strong>
            </div>
            <ul class="list footer-collapse">
                <li><a href="{{Route('contactus')}}">Contact us</a></li>
                <li><a href="{{Route('shippingandreturns')}}">Shipping &amp; returns</a></li>
                <li><a href="{{Route('Privacynotice')}}">Privacy notice</a></li>
                <li><a href="{{Route('conditionofuse')}}">Conditions of Use</a></li>
                <li><a href="{{Route('aboutus')}}">About Us</a></li>

            </ul>
        </div>
        <div class="footer-block my-account">
            <div class="title">
                <strong>My Account</strong>
            </div>
            <ul class="list footer-collapse">
                <li><a href="{{Route('orders')}}">Orders</a></li>
                <li><a href="{{Route('addresses')}}">Addresses</a></li>
                <li><a href="{{Route('recentlyviewedproducts')}}">Recently viewed products</a></li>
                <li><a href="{{Route('sitemap')}}">Sitemap</a></li>
                <li><a href="{{Route('applyforvendor')}}">Apply for vendor account</a></li>
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
                            <input id="newsletter-email" class="newsletter-subscribe-text" placeholder="Enter your email ..." type="email" name="NewsletterEmail" value="" />
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

