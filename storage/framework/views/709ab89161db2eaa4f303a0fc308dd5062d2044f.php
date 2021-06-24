<link href="<?php echo e(asset("assets/css/real.css")); ?>" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/html"/>

<?php if(Auth::check()): ?>
    <?php echo $__env->make('menus.header.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('menus.header.loggedout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<!-- css and js links -->

<script>
    import Scripts3 from "../../public/assets/js/scripts3";

    export default {
        components: {Scripts3}
    }
</script>

<script src="<?php echo e(asset("assets/js/real.js")); ?>" type="text/javascript"></script>
<style>
    .loader {
        border: 4px solid #f3f3f3;
        border-radius: 50%;
        border-top: 4px solid #3498db;
        width: 30px;
        height: 30px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes  spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<!--stat from here-->
<div class="video-slider-wrapper">
    <div id="video-player" class="video-player" data-id=""
         data-platform-url="https://www.youtube.com/embed/lGmRwY8FhYU">
        <img src="<?php echo e(asset("assets/images/uploaded/0000504opt.jpeg")); ?>" alt="Cover photo"/>
        <div class="video-overlay"></div>
        <div class="play-button-wrapper">
            <h3 class="video-button-title">See the Motion</h3>
            <h4 class="video-button-subtitle">Feel The Speed</h4>
            <div class="play">Play</div>
        </div>
    </div>

    <script src="https://www.youtube.com/embed/lGmRwY8FhYU"></script>
</div>


<div class="home-page-filters-wrapper ajax-filters-pro">

    <div class="home-page-filters">


        <div class="row">
            <div class="search-container home-page-filter-button">

                <span style="color:white; margin-right: 10px!important;"> <strong>Find Your Parts:</strong> </span>
                <select style="width: 150px !important;" placeholder="MANUFACTURER" id="manufacturer"
                        name="manufacturer">
                    <option selected="false">MANUFACTURER</option>
                    <?php $__currentLoopData = DB::table('product_specification_mapping')
                        ->select('product_specification_mapping.*')
                        ->get()
                        ->unique('manufacturer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($manu->manufacturer); ?>"><?php echo e($manu->manufacturer); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>


                <select style="width: 150px !important;" placeholder="MAKE" id="make" name="make">
                    <option selected="false">MAKE</option>
                </select>


                <select style="width: 150px !important;" placeholder="MODEL" id="model" name="model">
                    <option selected="false">MODEL</option>
                </select>


                <select style="width: 150px !important;" placeholder="ENGINE MANU" id="enginemanu" name="enginemanu">
                    <option selected="false">ENGINE-MANUFACTURER</option>
                </select>


                <select style="width:150px !important;" placeholder="ENGINE" id="engine" name="engine">
                    <option selected="false">ENGINE</option>
                </select>


                <button type="submit" id="searchnow" name="searchnow" class="search-button">Search</button>

            </div>

            <input type="hidden" id="manufacturers" name="manufacturerId" value="0" autocomplete="off"/>
        </div>

        <div class="">
            <input type="hidden" id="specification_18" name="specificationOptions" value="0" class="" data-id="18"
                   data-name="Model" autocomplete="off"/>
        </div>

        <div class="">
            <input type="hidden" id="specification_22" name="specificationOptions" value="0" class="" data-id="22"
                   data-name="Engine" autocomplete="off"/>
        </div>

    </div>
</div>

<input name="__RequestVerificationToken" type="hidden"
       value="CfDJ8KbjZjDJvz9Ire7PA-9PUq4tWIOyunOo4zq2lN8ZSwTfbTnWEQWEWt9SB1uyKv-qBqTmHWO215Y5l0k1gNFM38A0u0SKI2KEqlFPkZ_1bFYPLeKRmTIksWf_J23b-eb7Hx1XXiQVUvDK_wBFScCoXz0"/>

<div class="overlayOffCanvas"></div>
<div class="responsive-nav-wrapper-parent">
    <div class="responsive-nav-wrapper">
        <div class="menu-title">
            <span>Menu</span>
        </div>
        <div class="mobile-logo">


            <a href="/" class="logo">


                <img alt="Exco Parts" src="<?php echo e(asset("assets/images/uploaded/0000520.png")); ?>"/></a>
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


    <div class="master-column-wrapper">
        <div class="center-1">


            <div class="page home-page product-box-layout-1">
                <div class="page-body">


                    <div class="topic-block">
                        <div class="topic-block-body">
                            <div class="banner-bottom">
                                <ul>
                                    <li><a href="ken"><img
                                                src="<?php echo e(asset("assets/images/uploaded/home_small_banner1opt.png")); ?>" alt=""
                                                width="445" height=""/></a></li>
                                    <li><a href="/"><img
                                                src="<?php echo e(asset("assets/images/uploaded/home_small_banner2opt.png")); ?>" alt=""
                                                width="445" height=""/></a></li>
                                    <li><a href="compareproduct"><img
                                                src="<?php echo e(asset("assets/images/uploaded/home_small_banner3opt.png")); ?>" alt=""
                                                width="445" height=""/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="spc-categories-wrapper">

                        <div class="spc spc-categories landscape"
                             notloaded
                             data-categorygroupid="333"
                             data-getcategorygroupinfourl="/PrepareCategoryGroupSPC"
                             data-getItemProductsUrl="/GetProductsForItemSPC">
                            
                            
                            
                        </div>

                    </div>
                    <div class="category-grid home-page-category-grid">
                        <div class="item-grid">
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/brake-chambers-2" title="Show products in category BRAKE CHAMBERS">
                                            BRAKE CHAMBERS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/brake-chambers-2" title="Show products in category BRAKE CHAMBERS">
                                            <img alt="Picture for category BRAKE CHAMBERS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000821_brake-chambers_600-removebg-previewopt.png")); ?>"
                                                 title="Show products in category BRAKE CHAMBERS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/triple-convoluted-air-springs"
                                           title="Show products in category 3-IN-1 &amp; 4-IN-1 AIR/ELEC">
                                            3-IN-1 &amp; 4-IN-1 AIR/ELEC
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/triple-convoluted-air-springs"
                                           title="Show products in category 3-IN-1 &amp; 4-IN-1 AIR/ELEC">
                                            <img alt="Picture for category 3-IN-1 &amp; 4-IN-1 AIR/ELEC"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000820_3-in-1-4-in-1-airelec_600-removebg-preview.png")); ?>"
                                                 title="Show products in category 3-IN-1 &amp; 4-IN-1 AIR/ELEC"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/shock-mounting-accessories" title="Show products in category VALVES">
                                            VALVES
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/shock-mounting-accessories" title="Show products in category VALVES">
                                            <img alt="Picture for category VALVES"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000814_valves_600opt.png")); ?>"
                                                 title="Show products in category VALVES"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/slack-adjusters-3" title="Show products in category SLACK ADJUSTERS">
                                            SLACK ADJUSTERS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/slack-adjusters-3" title="Show products in category SLACK ADJUSTERS">
                                            <img alt="Picture for category SLACK ADJUSTERS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000818_slack-adjusters_600-removebg-previewopt.png")); ?>"
                                                 title="Show products in category SLACK ADJUSTERS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/brake-valves-2" title="Show products in category BRAKE VALVES">
                                            BRAKE VALVES
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/brake-valves-2" title="Show products in category BRAKE VALVES">
                                            <img alt="Picture for category BRAKE VALVES"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000808_brake-valves_600-removebg-previewopt.png")); ?>"
                                                 title="Show products in category BRAKE VALVES"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/dryer-cartridges-assemblies"
                                           title="Show products in category AIR DRYER KIT &amp; CARTRIDGES">
                                            AIR DRYER KIT &amp; CARTRIDGES
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/dryer-cartridges-assemblies"
                                           title="Show products in category AIR DRYER KIT &amp; CARTRIDGES">
                                            <img alt="Picture for category AIR DRYER KIT &amp; CARTRIDGES"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000817_air-dryer-kit-cartridges_600-removebg-preview.png")); ?>"
                                                 title="Show products in category AIR DRYER KIT &amp; CARTRIDGES"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/drag-links" title="Show products in category DRAG LINKS">
                                            DRAG LINKS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/drag-links" title="Show products in category DRAG LINKS">
                                            <img alt="Picture for category DRAG LINKS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000822_drag-links_600-removebg-preview.png")); ?>"
                                                 title="Show products in category DRAG LINKS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/air-springs" title="Show products in category AIR SPRINGS">
                                            AIR SPRINGS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/air-springs" title="Show products in category AIR SPRINGS">
                                            <img alt="Picture for category AIR SPRINGS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000816_air-springs_600opt.png")); ?>"
                                                 title="Show products in category AIR SPRINGS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/camshaft-repair-kits-2"
                                           title="Show products in category CAMSHAFT &amp; REPAIR KITS">
                                            CAMSHAFT &amp; REPAIR KITS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/camshaft-repair-kits-2"
                                           title="Show products in category CAMSHAFT &amp; REPAIR KITS">
                                            <img alt="Picture for category CAMSHAFT &amp; REPAIR KITS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000819_camshaft-repair-kits_600-removebg-previewopt.png")); ?>"
                                                 title="Show products in category CAMSHAFT &amp; REPAIR KITS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/drive-line"
                                           title="Show products in category HUB CAPS &amp; COMPONENTS">
                                            HUB CAPS &amp; COMPONENTS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/drive-line"
                                           title="Show products in category HUB CAPS &amp; COMPONENTS">
                                            <img alt="Picture for category HUB CAPS &amp; COMPONENTS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000810_hub-caps-components_600opt.png")); ?>"
                                                 title="Show products in category HUB CAPS &amp; COMPONENTS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/abs-sensors-components-2"
                                           title="Show products in category ABS SENSORS &amp; COMPONENTS">
                                            ABS SENSORS &amp; COMPONENTS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/abs-sensors-components-2"
                                           title="Show products in category ABS SENSORS &amp; COMPONENTS">
                                            <img alt="Picture for category ABS SENSORS &amp; COMPONENTS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000813_abs-sensors-components_600opt.png")); ?>"
                                                 title="Show products in category ABS SENSORS &amp; COMPONENTS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/filters-4" title="Show products in category FILTERS">
                                            FILTERS
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/filters-4" title="Show products in category FILTERS">
                                            <img alt="Picture for category FILTERS"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000799_filters_600opt.png")); ?>"
                                                 title="Show products in category FILTERS"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box">
                                <div class="category-item">
                                    <h2 class="title">
                                        <a href="/driveline-3" title="Show products in category DRIVELINE">
                                            DRIVELINE
                                        </a>
                                    </h2>
                                    <div class="picture">
                                        <a href="/driveline-3" title="Show products in category DRIVELINE">
                                            <img alt="Picture for category DRIVELINE"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000815_driveline_600opt.png")); ?>"
                                                 title="Show products in category DRIVELINE"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="spc spc-products "
                         notloaded
                         data-getitemproductsurl="/GetProductsForItemSPC">
                        <div class="spc-header">
                            <h2 class="title"><span>Best Sellers</span></h2>
                            <ul class="navigation">
                                <li class="tab">

                                    <span onclick="showmohamed();" id="bestseller"
                                          style="color: black">Bestsellers</span>
                                </li>

                                <li class="tab">
                                    <span onclick="showdina();" id="airbrake">Air Brake &amp; Wheel</span>
                                </li>
                            </ul>
                            <div class="mobile-navigation products-mobile-navigation">
                                <select class="products-mobile-navigation-select">
                                    <option class="tab" value="11" data-tabId="11">Bestsellers</option>
                                    <option class="tab" value="12" data-tabId="12">Air Brake &amp; Wheel</option>
                                </select>
                            </div>
                        </div>
                        <center>
                            <div id="dina" style="display: none; color:#909090">SOME PRODUCTS ARE NOT AVAILABLE</div>
                        </center>
                        <center>
                            <div id="mohamed" style="color: #909090">EXPLORE OUR PRODUCTS
                                <AVAILABLE></AVAILABLE>
                            </div>
                        </center>
                        <div class="spc-body">
                            <div class="product-grid" data-tabid="12">
                                <div class="item-grid"></div>
                            </div>
                            <div class="product-grid" data-tabid="12">
                                <div class="item-grid"></div>
                            </div>
                            <!--                                <div class="loading-overlay">-->
                            <!--                                    <span>Loading...</span>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                    <div class="carousel-wrapper">
                        <div class="nop-jcarousel product-grid  home-page-product-grid">

                            <div class="title carousel-title">
                                <strong>NEW PRODUCTS</strong>
                            </div>


                        </div>
                        <center>
                            <div id="jcarousel-1-243" class="jCarouselMainWrapper "> </cener>
                                <div class="slick-carousel item-grid">
                                    <?php $__currentLoopData = DB::table('products')
                                    ->select('products.*')
                                    ->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="carousel-item">
                                            <div class="item-box">


                                                <div class="product-item" data-productid="113">
                                                    <div class="picture">
                                                        <a href="<?php echo e(Route('productinfo',$product->id)); ?>" target="_blank"
                                                            title="Show details for TIE ROD END - LEFT HAND">
                                                            <img class="picture-img"
                                                                 src="<?php echo e(asset("assets/images/uploaded/0000802_lx1900h-lube-spin-on-filter_360.jpeg")); ?>"
                                                                 alt="Picture of TIE ROD END - LEFT HAND"
                                                                 title="Show details for TIE ROD END - LEFT HAND"/>
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <h2 class="product-title">
                                                            <a href="<?php echo e(Route('productinfo',$product->id)); ?>"><?php echo e($product->name); ?></a>
                                                        </h2>
                                                        <div class="product-rating-box" title="0 review(s)">
                                                            <div class="rating">
                                                                <div style="width: 0%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="description">
                                                            TIE ROD END - LEFT HAND
                                                        </div>
                                                        <div class="add-info">

                                                            <div class="prices">
                                                                <div class="box-prices-wrapper">
                                                                    <span class="price actual-price">$<?php echo e($product->price); ?></span>
                                                                </div>
                                                                <div class="additional-price-info">
                                                                </div>
                                                            </div>

                                                            <div class="buttons items-3">
                                                                <input type="button" value="Add to compare list"
                                                                       title="Add to compare list"
                                                                       class="button-2 add-to-compare-list-button"
                                                                       onclick="AjaxCart.addproducttocomparelist('/compareproducts/add/113');return false;"/>
                                                                <input type="button" value="Add to wishlist"
                                                                       title="Add to wishlist"
                                                                       class="button-2 add-to-wishlist-button"
                                                                       onclick="AjaxCart.addproducttocart_catalog('/addproducttocart/catalog/113/2/1');return false;"/>
                                                                <input type="button" value="Add to cart" title="Add to cart"
                                                                       class="button-2 product-box-add-to-cart-button"
                                                                       onclick="AjaxCart.addproducttocart_catalog('/addproducttocart/catalog/113/1/1');return false;"/>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                    </div>


                    <div class="rich-blog-homepage">
                        <div class="title">
                            <strong>Latest From Blog</strong>
                        </div>
                        <div class="blog-posts">
                            <div class="blog-post">
                                <div class="post-primary">
                                    <a class="post-picture" href="/a-drivers-nice-friend">
                                        <img src="<?php echo e(asset("assets/images/uploaded/0000630_590.jpeg")); ?>"
                                             alt="A Driver&#x2019;s Nice Friend" title="A Driver&#x2019;s Nice Friend"/>
                                    </a>
                                    <span class="post-date">
                        <span class="day">08</span>
                        <span class="month">Oct</span>
                        <span class="year">2017</span>
                    </span>
                                    <a class="read-more" href="/a-drivers-nice-friend">Read More</a>
                                </div>
                                <div class="post-details">
                                    <a class="post-title" href="/a-drivers-nice-friend">A Driver&#x2019;s Nice
                                        Friend</a>
                                    <div class="post-description">
                                        <p>Lorem ipsum dolor sit amet, splendide adolescens dissentias te sea, in quo
                                            dicant verear regione. Ea pri postea voluptatibus, eos democritum adipiscing
                                            at. Eros audiam graecis te duo, ad verear sanctu...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post">
                                <div class="post-primary">
                                    <a class="post-picture" href="/blog-1">
                                        <img src="<?php echo e(asset("assets/images/uploaded/0000631_590.jpeg")); ?>"
                                             alt="The EXCO HD PARTS training modules"
                                             title="The EXCO HD PARTS training modules"/>
                                    </a>
                                    <span class="post-date">
                        <span class="day">09</span>
                        <span class="month">Sep</span>
                        <span class="year">2017</span>
                    </span>
                                    <a class="read-more" href="/blog-1">Read More</a>
                                </div>
                                <div class="post-details">
                                    <a class="post-title" href="/blog-1">The EXCO HD PARTS training modules</a>
                                    <div class="post-description">
                                        <p><span style="font-size: 12pt;"><strong>Training</strong></span></p>
                                        <p><br/>Take advantage of the comprehensive knowledge of our in-house engineers.
                                            Sign up for our diversified training opportunities and draw on our
                                            engineering excellence and experience. Whether you...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-all">
                            <a href="/blog">View All Blog Posts</a>
                        </div>
                    </div>


                    <div class="home-page-bottom-wrapper">
                        <div class="carousel-wrapper">


                            <div id="jcarousel-1-243" class="jCarouselMainWrapper ">
                                <div class="nop-jcarousel product-grid  home-page-product-grid">

                                    <div class="title carousel-title">
                                        <strong>Current Product</strong>
                                    </div>

                                    <div class="slick-carousel item-grid">
                                        <?php $__currentLoopData = DB::table('products')
                                          ->select('products.*')
                                          ->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="carousel-item">
                                                <div class="item-box">


                                                    <div class="product-item" data-productid="113">
                                                        <div class="picture">
                                                            <a href="<?php echo e(Route('productinfo',$product->id)); ?>" target="_blank"
                                                               title="Show details for TIE ROD END - LEFT HAND">
                                                                <img class="picture-img"
                                                                     src="<?php echo e($product->image); ?>"
                                                                     alt="Picture of TIE ROD END - LEFT HAND"
                                                                     title="Show details for TIE ROD END - LEFT HAND"/>
                                                            </a>
                                                        </div>
                                                        <div class="details">
                                                            <h2 class="product-title">
                                                                <a href="<?php echo e(Route('productinfo',$product->id)); ?>"><?php echo e($product->name); ?></a>
                                                            </h2>
                                                            <div class="product-rating-box" title="0 review(s)">
                                                                <div class="rating">
                                                                    <div style="width: 0%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="description">
                                                                TIE ROD END - LEFT HAND
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="prices">
                                                                    <div class="box-prices-wrapper">
                                                                        <span class="price actual-price">$<?php echo e($product->price); ?></span>
                                                                    </div>
                                                                    <div class="additional-price-info">
                                                                    </div>
                                                                </div>

                                                                <div class="buttons items-3">
                                                                    <input type="button" value="Add to compare list"
                                                                           title="Add to compare list"
                                                                           class="button-2 add-to-compare-list-button"
                                                                           onclick="AjaxCart.addproducttocomparelist('/compareproducts/add/113');return false;"/>
                                                                    <input type="button" value="Add to wishlist"
                                                                           title="Add to wishlist"
                                                                           class="button-2 add-to-wishlist-button"
                                                                           onclick="AjaxCart.addproducttocart_catalog('/addproducttocart/catalog/113/2/1');return false;"/>
                                                                    <input type="button" value="Add to cart"
                                                                           title="Add to cart"
                                                                           class="button-2 product-box-add-to-cart-button"
                                                                           onclick="AjaxCart.addproducttocart_catalog('/addproducttocart/catalog/113/1/1');return false;"/>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="home-page-featured-video-wrapper">
                            <div class="home-page-video-title title">
                                <strong>Video</strong>
                            </div>
                            <!--                                <iframe src='https://www.youtube.com/embed/7lrXgIiH9ig?rel=0' frameborder='0' allowfullscreen></iframe>-->
                            <div class="home-page-featured-video">
                                <iframe width="760" height="415" src="https://www.youtube.com/embed/7lrXgIiH9ig"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
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
                    //var item = $("#categories").data('kendoDropDownList').get(18);
                    //$("#categories").data('kendoDropDownList').remove(18);
                    // $("#categories").data('kendoDropDownList').remove(item);


                    var ddl = $("#categories").data("kendoDropDownList");
                    if (ddl !== null) {
                        var oldData = ddl.dataSource.data();
                        ddl.dataSource.remove(oldData[0]); //remove 1st item
                    }
                });
            </script>

        </div>

    </div>

</div>


<div class="home-page-footer-banners">


    <div class="slider-wrapper anywhere-sliders-nivo-slider theme- no-captions"
         data-imagesCount="1"
         data-sliderHtmlElementId="WidgetSlider-venture_theme_footer_banner_1-2"
         data-imagesString="&lt;a href=&quot;/protective-gear&quot; title=&quot;&quot;&gt;&lt;img src=&quot;<?php echo e(asset("assets/images/uploaded/0000642.jpeg")); ?>&quot; data-thumb=&quot;https://www.excohdparts.com/images/thumbs/0000642.jpeg&quot; alt=&quot;slider image&quot; /&gt;&lt;/a&gt;"
         data-effect="fade"
         data-slices="15"
         data-boxCols="8"
         data-boxRows="4"
         data-animSpeed="500"
         data-pauseTime="3000"
         data-directionNav="false"
         data-controlNav="false"
         data-controlNavThumbs="false"
         data-pauseOnHover="true"
         data-prevText=""
         data-nextText="">

        <a href="/protective-gear" title=""><img class="nivo-main-image"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000642.jpeg")); ?>"
                                                 alt="banner"/></a>
        <div class="nivo-caption" style="display: block;"></div>
    </div>


    <div class="slider-wrapper anywhere-sliders-nivo-slider theme- no-captions"
         data-imagesCount="1"
         data-sliderHtmlElementId="WidgetSlider-venture_theme_footer_banner_2-3"
         data-imagesString="&lt;a href=&quot;/exhaust&quot; title=&quot;&quot;&gt;&lt;img src=&quot;<?php echo e(asset("assets/images/uploaded/0000388.jpeg")); ?>&quot; data-thumb=&quot;https://www.excohdparts.com/images/thumbs/0000388.jpeg&quot; alt=&quot;slider image&quot; /&gt;&lt;/a&gt;"
         data-effect="slideInRight"
         data-slices="15"
         data-boxCols="8"
         data-boxRows="4"
         data-animSpeed="500"
         data-pauseTime="3000"
         data-directionNav="false"
         data-controlNav="false"
         data-controlNavThumbs="false"
         data-pauseOnHover="true"
         data-prevText=""
         data-nextText="">

        <a href="/exhaust" title=""><img class="nivo-main-image" src="<?php echo e(asset("assets/images/uploaded/0000388.jpeg")); ?>"
                                         alt="banner"/></a>
        <div class="nivo-caption" style="display: block;"></div>
    </div>


    <div class="slider-wrapper anywhere-sliders-nivo-slider theme- no-captions"
         data-imagesCount="1"
         data-sliderHtmlElementId="WidgetSlider-venture_theme_footer_banner_3-4"
         data-imagesString="&lt;a href=&quot;/slack-adjusters&quot; title=&quot;&quot;&gt;&lt;img src=&quot;<?php echo e(asset("assets/images/uploaded/0000639.jpeg")); ?>&quot; data-thumb=&quot;https://www.excohdparts.com/images/thumbs/0000639.jpeg&quot; alt=&quot;slider image&quot; /&gt;&lt;/a&gt;"
         data-effect="fade"
         data-slices="15"
         data-boxCols="8"
         data-boxRows="4"
         data-animSpeed="500"
         data-pauseTime="3000"
         data-directionNav="false"
         data-controlNav="false"
         data-controlNavThumbs="false"
         data-pauseOnHover="true"
         data-prevText=""
         data-nextText="">

        <a href="/slack-adjusters" title=""><img class="nivo-main-image"
                                                 src="<?php echo e(asset("assets/images/uploaded/0000639.jpeg")); ?>"
                                                 alt="banner"/></a>
        <div class="nivo-caption" style="display: block;"></div>
    </div>
</div>

<?php echo $__env->make('menus.footer.myfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script lang="ja" type="text/javascript">

    $(document).ready(function () {
        $(".sublist-wrap > ul.rootlevel").append('<li><a href="/product/all" class="view-all">View All</a></li>');
    });
</script>

<script src="<?php echo e(asset("assets/js/real2.js")); ?>" type="text/javascript"></script>




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
<script>
    $(document).ready(function () {
        var carouselHtmlElementId = "jcarousel-1-243";
        var jCarousel = $("#" + carouselHtmlElementId + " .slick-carousel");

        if (jCarousel.length === 0) {
            return;
        }

        var numOfSlidesToScroll = 1;
        var loopItems = true;
        var pauseOnHover = true;
        var isRtl = false;
        var autoscrollTimeout = 3;
        var autoscroll = autoscrollTimeout > 0 ? true : false;
        var navigationArrows = true;
        var carouselArrowsContainer = "#" + carouselHtmlElementId + " .carousel-title";
        var navigationDots = false;
        // TODO: Make a validator for this setting.
        var numberOfVisibleItems = 6 < 1 ? 1 : 6;
        var animationSpeedString = 'fast';
        var initialSlide = 1 - 1;
        var prevArrowHtml = '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>';
        var nextArrowHtml = '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>';
        var animationSpeed;

        switch (animationSpeedString) {
            case 'slow':
                animationSpeed = 300;
                break;
            case 'fast':
                animationSpeed = 150;
                break;
            default:
                animationSpeed = 0;
        }

        var responsiveBreakpointsObj = {};

        try {

            responsiveBreakpointsObj = JSON.parse('[{"breakpoint":1064,"settings":{"slidesToShow":3}},{"breakpoint":675,"settings":{"slidesToShow":2}},{"breakpoint":300,"settings":{"slidesToShow":1}}]');

            for (var i = 0; i < responsiveBreakpointsObj.length; i++) {
                if (responsiveBreakpointsObj[i].settings.slidesToShow < numOfSlidesToScroll) {
                    responsiveBreakpointsObj[i].settings.slidesToScroll = responsiveBreakpointsObj[i].settings.slidesToShow;
                }
            }
        } catch (e) {
            console.log('Invalid slick slider responsive breakpoints setting value!');
        }

        jCarousel.on('init', function () {
            $.event.trigger({type: "newProductsAddedToPageEvent"});
            $(".carousel-title").show();
        });

        jCarousel.slick({
            rtl: isRtl,
            infinite: loopItems,
            slidesToShow: numberOfVisibleItems,
            slidesToScroll: numOfSlidesToScroll,
            dots: navigationDots,
            speed: animationSpeed,
            autoplay: autoscroll,
            autoplaySpeed: autoscrollTimeout * 1000,
            arrows: navigationArrows,
            appendArrows: carouselArrowsContainer,
            cssEase: 'linear',
            respondTo: 'slider',
            edgeFriction: 0.05,
            initialSlide: initialSlide,
            pauseOnHover: pauseOnHover,
            draggable: false,
            prevArrow: prevArrowHtml,
            nextArrow: nextArrowHtml,
            responsive: responsiveBreakpointsObj
        });

        var slidesCount = jCarousel.slick('getSlick').slideCount;

        if (slidesCount > numberOfVisibleItems && navigationArrows) {
            $('#' + carouselHtmlElementId + ' .carousel-title').addClass('has-navigation');
        }
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
<script>


    function showmohamed() {
        let dina = document.getElementById("dina");
        let mohamed = document.getElementById("mohamed");
        let bestseller = document.getElementById("bestseller");
        let airbrake = document.getElementById("airbrake");
        dina.style.display = "none";
        mohamed.style.display = "block";
        bestseller.style.color = "black";
        bestseller.style.fontStyle = "underline";
        airbrake.style.color = "#909090";

    }

    function showdina() {
        let dina = document.getElementById("dina");
        let mohamed = document.getElementById("mohamed");
        let bestseller = document.getElementById("bestseller");
        let airbrake = document.getElementById("airbrake");
        dina.style.display = "block";
        mohamed.style.display = "none";
        airbrake.style.color = "black";
        bestseller.style.color = "#909090";

    }
</script>


<!-- Ajax Manufacturer -->

<script type="text/javascript">

    //Manufacturer change
    $(document).ready(function () {
        jQuery('select[name="manufacturer"]').on('change', function () {
            //document.getElementById("loader1").style.display = "block";
            let manufacturerID = jQuery(this).val();
            if (manufacturerID) {
                jQuery.ajax({
                    url: '/make/' + manufacturerID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        jQuery('select[name="make"]').empty(); // remove last selected item
                        jQuery('select[name="make"]').append('<option>MAKE</option>');
                        jQuery.each(data, function (key, value) {

                            $('select[name="make"]').append('<option value="' + key + '">' + value + '</option>');
                            //document.getElementById("loader1").style.display = "none";
                        });
                    }
                });
            } else {
                $('select[name="make"]').empty();
            }

        });
    });


    //make change

    $(document).ready(function () {
        jQuery('select[name="make"]').on('change', function () {
            //document.getElementById("loader1").style.display = "block";
            let makeID = jQuery(this).val();
            if (makeID) {
                jQuery.ajax({
                    url: '/model/' + makeID,
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
                    url: '/enginemanu/' + modelID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        jQuery('select[name="enginemanu"]').empty(); // remove last selected item
                        jQuery('select[name="enginemanu"]').append('<option>ENGINE-MANUFACTURER</option>');
                        jQuery.each(data, function (key, value) {

                            $('select[name="enginemanu"]').append('<option value="' + key + '">' + value + '</option>');
                            //document.getElementById("loader1").style.display = "none";
                        });
                    }
                });
            } else {
                $('select[name="enginemanu"]').empty();
            }

        });
    });


    //engine-manufacturer change

    $(document).ready(function () {
        jQuery('select[name="enginemanu"]').on('change', function () {
            //document.getElementById("loader1").style.display = "block";
            let enginemanuID = jQuery(this).val();
            if (enginemanuID) {
                jQuery.ajax({
                    url: '/engine/' + enginemanuID,
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


    $("#searchnow").on("click", function () {
        let manufacturer = document.getElementById("manufacturer").value;
        let make = document.getElementById("make").value;
        let model = document.getElementById("model").value;
        let engine = document.getElementById("engine").value;
        let enginemanu = document.getElementById("enginemanu").value;

        $.ajax({
            url: window.location.href = "getData/" + manufacturer + "/" + model + "/" + engine+ "/" + make+ "/" + enginemanu,
        });
    });

    <!--Button Clicked-->
    /* el commit */

</script>

<div style="display: none">mourad</div>
</body>

</html>
<?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/resources/views/index.blade.php ENDPATH**/ ?>