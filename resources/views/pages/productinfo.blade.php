<head>

    <style>

        body{
                background-color: white!important;
        }
    </style>

</head>
<link href="{{asset("assets/css/productinfo.css")}}" rel="stylesheet" type="text/css" />
@if(Auth::check())
    @include('menus.header.navbar')
@else
    @include('menus.header.loggedout')
@endif

@foreach($mydata as $yourdata)

    <meta name="description" content="{{$yourdata->metaDescription}}">
    <meta name="keywords" content="{{$yourdata->metaKeyword}}">


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




        <div id="product-ribbon-info" data-productid="112"
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
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="/" itemprop="url">
                        <span itemprop="title">Home</span>
                    </a>
                </span>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/filters-4" itemprop="url">
                            <span itemprop="title">FILTERS</span>
                        </a>
                    </span>
                    <span class="delimiter">/</span>
                </li>
                <li>
                    <strong class="current-item">88X9781</strong>

                </li>
            </ul>
        </div>


        <div class="master-column-wrapper">
            <div class="center-1">


                <!--product breadcrumb-->

                <div class="page product-details-page">
                    <div class="page-body">

                        <form method="post" id="product-details-form" action="/lx1900h-lube-spin-on-filter">
                            <div itemscope itemtype="http://schema.org/Product" data-productid="112">
                                <div class="product-essential-wrapper">
                                    <div class="product-essential">





                                        <input type="hidden" class="cloudZoomPictureThumbnailsInCarouselData"
                                               data-vertical="true"
                                               data-numvisible="4"
                                               data-numScrollable="1"
                                               data-enable-slider-arrows="true"
                                               data-enable-slider-dots="false"
                                               data-size="1"
                                               data-rtl="false"
                                               data-responsive-breakpoints-for-thumbnails="[{&quot;breakpoint&quot;:1201,&quot;settings&quot;:{&quot;slidesToShow&quot;:5, &quot;slidesToScroll&quot;:1,&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;vertical&quot;:false}}]"
                                               data-magnificpopup-counter="%curr% of %total%"
                                               data-magnificpopup-prev="Previous (Left arrow key)"
                                               data-magnificpopup-next="Next (Right arrow key)"
                                               data-magnificpopup-close="Close (Esc)"
                                               data-magnificpopup-loading="Loading..." />
                                        <input type="hidden" class="cloudZoomAdjustPictureOnProductAttributeValueChange"
                                               data-productid="112"
                                               data-isintegratedbywidget="true" />
                                        <input type="hidden" class="cloudZoomEnableClickToZoom" />
                                        <div class="gallery sevenspikes-cloudzoom-gallery">
                                            <div class="picture-wrapper">
                                                <div class="picture" id="sevenspikes-cloud-zoom" data-zoomwindowelementid=""
                                                     data-selectoroftheparentelementofthecloudzoomwindow=""
                                                     data-defaultimagecontainerselector=".product-essential .gallery"
                                                     data-zoom-window-width="244"
                                                     data-zoom-window-height="257">
                                                    <a href="https://www.excohdparts.com/images/thumbs/0000802_lx1900h-lube-spin-on-filter.jpeg" data-full-image-url="https://www.excohdparts.com/images/thumbs/0000802_lx1900h-lube-spin-on-filter.jpeg" class="picture-link" id="zoom1">
                                                        <img src="https://www.excohdparts.com/images/thumbs/0000802_lx1900h-lube-spin-on-filter_400.jpeg" alt="Picture of LX1900H Lube , Spin-On Filter" class="cloudzoom" id="cloudZoomImage"
                                                             itemprop="image" data-cloudzoom="appendSelector: &#x27;.picture-wrapper&#x27;, zoomPosition: &#x27;inside&#x27;, zoomOffsetX: 0, captionPosition: &#x27;bottom&#x27;, tintOpacity: 0, zoomWidth: 244, zoomHeight: 257, easing: 3, touchStartDelay: true, zoomFlyOut: false, disableZoom: &#x27;auto&#x27;"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="overview"  id="Product-information">


                                            <div class="product-name">
                                                <h1 itemprop="name">88X9781</h1>
                                            </div>

                                            <div class="tableView price-hide">
                                                <span class="label"></span>
                                                <span class="value pull-right"><a href="javascript:void(0);" id="price-show-hide">Price show/hide</a></span>
                                            </div>


                                            <!--SKU, MAN, GTIN, vendor-->
                                            <div class="additional-details">

                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">EXCO PART NO:</span>

                                                    <span class="value" id="mpn-112">{{$yourdata->excoPartNo}}</span>

                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Name</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->name}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Short Description</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->shortDescription}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Full Description</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->fullDescription}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">UPC Code:</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->upc}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">StockQuantity</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->stockQuantity}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Price</span>
                                                    <span class="value" id="mpn-112">${{$yourdata->price}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Product Cost</span>
                                                    <span class="value" id="mpn-112">${{$yourdata->productCost}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Weight</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->weight}} lb(s)</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Length</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->length}}</span>
                                                </div>
                                                <div class="manufacturer-part-number tableView" >
                                                    <span class="label">Width</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->width}}</span>
                                                </div>



                                                <div class="sku tableView " >
                                                    <span class="label">Height</span>
                                                    <span class="value" id="mpn-112">{{$yourdata->height}}</span>
                                                </div>
                                            </div>

                                            <!--manufacturers-->



                                            <!--categories-->

                                            <div class="manufacturers tableView">
                                                @foreach(DB::table('product_category_mapping')
                                           ->select('product_category_mapping.category')
                                           ->where('product_category_mapping.excoPartNo','=',$yourdata->excoPartNo)
                                           ->get() as $product)
                                                <span class="label">Category:</span>
                                                <span class="value">
                                            <a href="/filters-4">{{$product->category}}</a>
                                             </span>
                                                @endforeach
                                            </div>


                                            <!--product reviews-->
                                            <div class="product-reviews-overview" >
                                                <div class="product-review-box">
                                                    <div class="rating">
                                                        <div style="width: 0%">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-no-reviews">
                                                    <a href="/productreviews/112">Be the first to review this product</a>
                                                </div>
                                            </div>



                                            <!--availability-->
                                            <div class="availability hidden">
                                                <div class="stock tableView">
                                                    <span class="label">Availability:</span>
                                                    <span class="value" id="stock-availability-value-112">In stock</span>
                                                </div>
                                            </div>
                                            <!--Warehouse stock -->
                                            <div class="WarehouseStock tableView">


                                                <span class="label">Availability:</span>

                                                <span class="value">
       <span class="warehouse-code">CA</span><span class="stock-qty" style="font-size: 14px;" >: In Stock</span>       <span class="separator"><br /></span>
       <span class="warehouse-code">NJ</span><span class="stock-qty" style="font-size: 14px;" >: In Stock</span>       <span class="separator"><br /></span>
       <span class="warehouse-code">TX</span><span class="stock-qty" style="font-size: 14px;" >: In Stock</span>       </span>
                                            </div>
                                            <!--price-->

                                            <!--weight-->

                                            <!--width height length -->
                                            <div class="weight tableView">
                                                <span class="label">Pkg. Dimensions - inch(es):</span>
                                                <span class="value">
                                    {{$yourdata->length}} x {{$yourdata->width}} x {{$yourdata->height}}
                                </span>
                                            </div>

                                            <!--delivery-->


                                            <div class="availability-attributes-wrapper">
                                                <!--attributes-->
                                                <!--rental info-->

                                            </div>
                                            <!--gift card-->


                                            <!--minimum quantity notification-->

                                            <!--buttons-->
                                            <div class="overview-buttons">

                                                <!--add to cart-->

                                                <!--wishlist-->
                                                <!--compare button-->
                                                <div class="compare-products-wrapper" title="Add to compare list">
                                                    <div class="compare-products">
                                                        <input type="button" value="Add to compare list" class="button-2 add-to-compare-list-button" onclick="AjaxCart.addproducttocomparelist('/compareproducts/add/112');return false;" />
                                                    </div>

                                                </div>

                                                <!--email a friend button-->
                                                <div class="email-a-friend-button-wrapper" title="Email a friend">
                                                    <div class="email-a-friend">
                                                        <input type="button" value="Email a friend" class="button-2 email-a-friend-button" onclick="setLocation('/productemailafriend/112')" />
                                                    </div>

                                                </div>

                                                <!--back in stock subscription button-->




                                            </div>



                                            <div class="overview-footer">




                                                <div class="product-social-buttons">
                                                    <label class="product-social-label">Share:</label>
                                                    <ul class="product-social-sharing">
                                                        <li>
                                                            <!-- Twitter -->
                                                            <a class="twitter" title="Share on Twitter" href="javascript:openShareWindow('http://twitter.com/share?url=https://www.excohdparts.com/lx1900h-lube-spin-on-filter')">Share on Twitter</a>
                                                        </li>
                                                        <li>
                                                            <!-- Facebook -->
                                                            <a class="facebook" title="Share on Facebook" href="javascript:openShareWindow('http://www.facebook.com/sharer.php?u=https://www.excohdparts.com/lx1900h-lube-spin-on-filter')">Share on Facebook</a>
                                                        </li>
                                                        <li>
                                                            <!-- Pinterest -->
                                                            <a class="pinterest" title="Share on Pinterest" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','https://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">Share on Pinterest</a>
                                                        </li>
                                                        <li>
                                                            <!-- Google+ -->
                                                            <a class="google" title="Share on Google Plus" href="javascript:openShareWindow('https://plus.google.com/share?url=https://www.excohdparts.com/lx1900h-lube-spin-on-filter')">Share on Google Plus</a>
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
                                                    </script>
                                                </div>
                                                <!--sample download button-->

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="product-page-bottom">



                                    <div id="quickTabs" class="productTabs "
                                         data-ajaxEnabled="false"
                                         data-productReviewsAddNewUrl="/ProductTab/ProductReviewsTabAddNew/112"
                                         data-productContactUsUrl="/ProductTab/ProductContactUsTabAddNew/112"
                                         data-couldNotLoadTabErrorMessage="Couldn&#x27;t load this tab.">

                                        <div class="productTabs-header">
                                            <ul>
                                                <li>
                                                    <a href="#quickTab-20">Specifications</a>
                                                </li>
                                                <li>
                                                    <a href="#quickTab-2">APPLICATIONS</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="productTabs-body">
                                            <a name="quickTab-20"></a>
                                            <div id="quickTab-20">
{{--                                                specs db--}}
                                                @foreach(DB::table('specs')
                                          ->select('specs.*')
                                          ->where('specs.excoPartNo','=',$yourdata->excoPartNo)
                                          ->get() as $product)
                                                <div class="custom-tab">
                                                    <p> </p>
                                                    <table border="0" width="561" cellspacing="0" cellpadding="0"><colgroup><col width="188" /> <col width="373" /> </colgroup>
                                                        <tbody>
                                                        <tr>
                                                            <td class="xl65" width="188" height="41">A</td>
                                                            <td class="xl65" width="373">B</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl66" width="188" height="40">Filter type: </td>
                                                            <td class="xl66" width="373">{{$product->type}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">excoBellows: </td>
                                                            <td class="xl67" width="373">{{$product->excoBellows}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl66" width="188" height="40">firestoneBellows:</td>
                                                            <td class="xl66" width="373">{{$product->firestoneBellows}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">goodyearBellows:</td>
                                                            <td class="xl67" width="373">{{$product->firestoneBellows}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl66" width="188" height="40">Contitech Bellows:</td>
                                                            <td class="xl66" width="373">{{$product->contitechBellows}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Triangle Bellows:</td>
                                                            <td class="xl67" width="373"> {{$product->triangleBellows}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Load (Lbs) @80 PSI:</td>
                                                            <td class="xl67" width="373"> {{$product->loadLBS80}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Load (Lbs) @100 PSI:</td>
                                                            <td class="xl67" width="373"> {{$product->loadLBS100}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Natural Freq. (CPM):</td>
                                                            <td class="xl67" width="373"> {{$product->natFrequency}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Design Height (In):</td>
                                                            <td class="xl67" width="373"> {{$product->designHeight}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Bottom Plate Type:</td>
                                                            <td class="xl67" width="373"> {{$product->bottomPlateType}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Top Plate Hole/Stud Qty:</td>
                                                            <td class="xl67" width="373"> {{$product->topPlateHole}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Top Plate Diameter (A):</td>
                                                            <td class="xl67" width="373"> {{$product->topPlateDiameter}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40"> Top Plate C to C Dia. (B):</td>
                                                            <td class="xl67" width="373"> {{$product->topPlateCtoC}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40"> Bottom Plate Hole/Stud Qty:</td>
                                                            <td class="xl67" width="373"> {{$product->bottomPlateHole}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40"> Bottom Plate Diameter (C):</td>
                                                            <td class="xl67" width="373"> {{$product->bottomPlateDiameter}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40"> Bottom Plate C to C Dia. (D):</td>
                                                            <td class="xl67" width="373"> {{$product->bottomPlateCtoC}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Bumper: </td>
                                                            <td class="xl67" width="373">{{$product->bumper}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Bracket: </td>
                                                            <td class="xl67" width="373"> {{$product->bracket}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Min. Height: </td>
                                                            <td class="xl67" width="373">{{$product->minHeight}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Max. Height: </td>
                                                            <td class="xl67" width="373"> {{$product->maxHeight}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="xl67" width="188" height="40">Max. Diameter: </td>
                                                            <td class="xl67" width="373"> {{$product->maxDiameter}} </td>
                                                        </tr>



                                                        </tbody>
                                                    </table>
                                                    <p> </p>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <a name="quickTab-2"></a>
                                            <div id="quickTab-2">
                                                <div class="custom-tab">
                                                    <div class="title"><strong>APPLICATION</strong></div>
                                                    <div class="table-wrapper">
                                                        <table class="data-table zebra-table">
                                                            <thead>
                                                            <tr><th class="a-left">Make</th><th class="a-left">Series</th><th class="a-left">Additional Information</th></tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>FREIGHTLINER</td>
                                                                <td>FLA & FLB Series - COE Truck & Tractor</td>
                                                                <td>1998 COE Series with FASII Rear Air Suspension</td>
                                                            </tr>
                                                            <tr>
                                                                <td>FREIGHTLINER</td>
                                                                <td>FLC & FLD Series - 112 & 120 Conventional Truck & Tractor</td>
                                                                <td>1998 Conventional Series with FASII Rear Air Suspension</td>
                                                            </tr>
                                                            <tr>
                                                                <td>FREIGHTLINER</td>
                                                                <td>Cargo - FC70 & FC80</td>
                                                                <td>1998 FC70 & FC80 Series with FAS II Rear Air Suspension</td>
                                                            </tr>
                                                            <tr>
                                                                <td>FREIGHTLINER</td>
                                                                <td>Business Class - FL50, 60, 70, 80</td>
                                                                <td>1998 FL Series with FAS II Rear Air Suspension</td>
                                                            </tr>
                                                            <tr>
                                                                <td>FREIGHTLINER</td>
                                                                <td>Century Class - C112 & C120</td>
                                                                <td>1998 Models with FAS II Rear Air Suspension</td>
                                                            </tr>
                                                            <tr>
                                                                <td>FREIGHTLINER</td>
                                                                <td>Legacy 1998 Models with FAS II Rear Air Suspension FREIGHTLINER Classic/ClassicXL</td>
                                                                <td>1998 Models with FASII Rear Air Suspension FREIGHTLINER Argosy 1998 Models with Freightliner FAS II Rear Air Suspension</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <script lang="ja" type="text/javascript">
                                            $(document).on('click', 'a[href^="#"]', function (event) {
                                                event.preventDefault();

                                                $('html, body').animate({
                                                    scrollTop: $($.attr(this, 'href')).offset().top
                                                }, 500);
                                            });
                                        </script>

                                    </div>

                                    <div class="product-collateral">
                                        <div class="full-description-wrapper">
                                            <div class="title">
                                                <strong>Description</strong>
                                            </div>
                                            <div class="full-description" itemprop="description">
                                                <table border="0" width="206" cellspacing="0" cellpadding="0"><colgroup><col width="206" /> </colgroup>
                                                    <tbody>
                                                    <tr>
                                                        <td width="206" height="20">AC-Delco PF1269</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">ALLIANCE ABP/N10G-LF9001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">ALLIANCE ABPN10GLF9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">ALLIANCE ABPN10GLF9001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Baldwin BD50000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Baldwin BD7153</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Baldwin BD7154</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Baldwin BD7355</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Baldwin BK6440</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Baldwin BK6464</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">BIG A 91745</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">BIG A 91745XD</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">BIG A 91746</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">BIG A 91746XD</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">BIG A 91748</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CARQUEST 84745</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CARQUEST 84745XD</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CARQUEST 84746</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CARQUEST 84746XD</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CARQUEST 84748</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CASE-IH 324617A1</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CASE-IH 441700A1</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CASE-IH 7612210</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CASE-IH LF9001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CASE-IH STX440</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CEDAR RAPIDS 459300015902</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Champion Laboratories LFP9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Champion Laboratories LFP9001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CMI 555005004005</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 3101868</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 3101869</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 3406809</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 340680900</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 3406810</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 340681000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS 4906633</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS XLF7111</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">CUMMINS XLF7222</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson ELF7900</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559581</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559589</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559600</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559609</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559617</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559622</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Donaldson P559626</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">FIL FILTER ZP3151MG</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard 40C0434</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF14000NN</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9011</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9018</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9031</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9070</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fleetguard LF9080</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">FLEETRITE LFR89000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">FLEETRITE LFR89001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">FLEETRITE LFR89011</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">FLEETRITE LFR89018</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fram PH8690</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fram PH8691</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fram PH8691A</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Fram PH8960</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">GONHER GP9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">GROVE A047950</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">HASTINGS LF498</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">HASTINGS LF499</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">HITACHI E12979663</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">HITACHI E12979905</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">HYSTER 1415822</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Hyundai 11NB70110</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">INGERSOLL-RAND 54662028</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">INGERSOLL-RAND 57645210</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">John Deere PMLF9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">KAWASAKI YE3101868</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">KAWASAKI YE3101869</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">KAWASAKI YE3406810</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">KAWASAKI YELF9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Komatsu 600-211-1340</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Komatsu 6002111340</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Komatsu 6216545110</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">KRALINATOR D390</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">KRALINATOR D391</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">LUBER-FINER LFP9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">LUBER-FINER LFP9001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">LUBER-FINER LFP9007</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">LUBER-FINER LFP9008</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">MACK 2191P559000</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Mann WP12001</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Mann WP12120</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">Mann WP121201</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">MANN &amp; HUMMEL WP12120</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">MORBARK 29213844</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>





                                </div>
                            </div>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq7Bq3DVRLaBSE4_FtpzucSzOZcFPQ-r_enpQzmNEXZLT6597a-DJtDC4vwUdu8mmhIpIcLwRYsGoh6Vazm1JKJWzF3iKn2cLyatuT74_9cUd_mkji0MQF1W3ImCB_ZDhak" /></form>

                    </div>
                </div>
                <script lang="ja" type="text/javascript">
                    $("#price-show-hide").click(function () {
                        $(".prices").toggle();
                    });
                </script>


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



<script src="{{asset("assets/js/productinfo.js")}}" type="text/javascript"></script>

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
@endforeach
