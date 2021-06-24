

<link href="<?php echo e(asset("assets/css/ourdis.css")); ?>" rel="stylesheet" type="text/css" />

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


                    <img alt="Exco Parts" src="<?php echo e(asset("assets/images/uploaded/0000520.png")); ?>" /></a>
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



                <div class="page registration-page">
                    <div class="page-title">
                        <h1>Our Distributor</h1>
                    </div>
                    <div class="page-body">
                        <form method="post" action="/distributor">
                            <div class="fieldset">
                                <div class="title">
                                    <strong>Locate a Distributor</strong>
                                </div>
                                <div class="form-fields">
                                    <div class="inputs">
                                        <label for="CountryId">Country:</label>
                                        <select data-val="true" data-val-required="The Country field is required." id="CountryId" name="CountryId"><option selected="selected" value="0">Select country</option>
                                            <option value="1">United States</option>
                                            <option value="88">Afghanistan</option>
                                            <option value="89">Albania</option>
                                            <option value="90">Algeria</option>
                                            <option value="91">American Samoa</option>
                                            <option value="92">Andorra</option>
                                            <option value="93">Angola</option>
                                            <option value="94">Anguilla</option>
                                            <option value="95">Antarctica</option>
                                            <option value="96">Antigua and Barbuda</option>
                                            <option value="3">Argentina</option>
                                            <option value="4">Armenia</option>
                                            <option value="5">Aruba</option>
                                            <option value="6">Australia</option>
                                            <option value="7">Austria</option>
                                            <option value="8">Azerbaijan</option>
                                            <option value="9">Bahamas</option>
                                            <option value="97">Bahrain</option>
                                            <option value="10">Bangladesh</option>
                                            <option value="98">Barbados</option>
                                            <option value="11">Belarus</option>
                                            <option value="12">Belgium</option>
                                            <option value="13">Belize</option>
                                            <option value="99">Benin</option>
                                            <option value="14">Bermuda</option>
                                            <option value="100">Bhutan</option>
                                            <option value="15">Bolivia</option>
                                            <option value="16">Bosnia and Herzegowina</option>
                                            <option value="101">Botswana</option>
                                            <option value="102">Bouvet Island</option>
                                            <option value="17">Brazil</option>
                                            <option value="103">British Indian Ocean Territory</option>
                                            <option value="104">Brunei Darussalam</option>
                                            <option value="18">Bulgaria</option>
                                            <option value="105">Burkina Faso</option>
                                            <option value="106">Burundi</option>
                                            <option value="107">Cambodia</option>
                                            <option value="108">Cameroon</option>
                                            <option value="2">Canada</option>
                                            <option value="109">Cape Verde</option>
                                            <option value="19">Cayman Islands</option>
                                            <option value="110">Central African Republic</option>
                                            <option value="111">Chad</option>
                                            <option value="20">Chile</option>
                                            <option value="21">China</option>
                                            <option value="112">Christmas Island</option>
                                            <option value="113">Cocos (Keeling) Islands</option>
                                            <option value="22">Colombia</option>
                                            <option value="114">Comoros</option>
                                            <option value="115">Congo</option>
                                            <option value="116">Congo (Democratic Republic of the)</option>
                                            <option value="117">Cook Islands</option>
                                            <option value="23">Costa Rica</option>
                                            <option value="118">Cote D&#x27;Ivoire</option>
                                            <option value="24">Croatia</option>
                                            <option value="25">Cuba</option>
                                            <option value="26">Cyprus</option>
                                            <option value="27">Czech Republic</option>
                                            <option value="28">Denmark</option>
                                            <option value="119">Djibouti</option>
                                            <option value="120">Dominica</option>
                                            <option value="29">Dominican Republic</option>
                                            <option value="30">East Timor</option>
                                            <option value="31">Ecuador</option>
                                            <option value="32">Egypt</option>
                                            <option value="121">El Salvador</option>
                                            <option value="122">Equatorial Guinea</option>
                                            <option value="123">Eritrea</option>
                                            <option value="124">Estonia</option>
                                            <option value="125">Ethiopia</option>
                                            <option value="126">Falkland Islands (Malvinas)</option>
                                            <option value="127">Faroe Islands</option>
                                            <option value="128">Fiji</option>
                                            <option value="33">Finland</option>
                                            <option value="34">France</option>
                                            <option value="129">French Guiana</option>
                                            <option value="130">French Polynesia</option>
                                            <option value="131">French Southern Territories</option>
                                            <option value="132">Gabon</option>
                                            <option value="133">Gambia</option>
                                            <option value="35">Georgia</option>
                                            <option value="36">Germany</option>
                                            <option value="134">Ghana</option>
                                            <option value="37">Gibraltar</option>
                                            <option value="38">Greece</option>
                                            <option value="135">Greenland</option>
                                            <option value="136">Grenada</option>
                                            <option value="137">Guadeloupe</option>
                                            <option value="138">Guam</option>
                                            <option value="39">Guatemala</option>
                                            <option value="139">Guinea</option>
                                            <option value="140">Guinea-bissau</option>
                                            <option value="141">Guyana</option>
                                            <option value="142">Haiti</option>
                                            <option value="143">Heard and Mc Donald Islands</option>
                                            <option value="144">Honduras</option>
                                            <option value="40">Hong Kong</option>
                                            <option value="41">Hungary</option>
                                            <option value="145">Iceland</option>
                                            <option value="42">India</option>
                                            <option value="43">Indonesia</option>
                                            <option value="146">Iran (Islamic Republic of)</option>
                                            <option value="147">Iraq</option>
                                            <option value="44">Ireland</option>
                                            <option value="45">Israel</option>
                                            <option value="46">Italy</option>
                                            <option value="47">Jamaica</option>
                                            <option value="48">Japan</option>
                                            <option value="49">Jordan</option>
                                            <option value="50">Kazakhstan</option>
                                            <option value="148">Kenya</option>
                                            <option value="149">Kiribati</option>
                                            <option value="150">Korea</option>
                                            <option value="51">Korea, Democratic People&#x27;s Republic of</option>
                                            <option value="52">Kuwait</option>
                                            <option value="151">Kyrgyzstan</option>
                                            <option value="152">Lao People&#x27;s Democratic Republic</option>
                                            <option value="153">Latvia</option>
                                            <option value="154">Lebanon</option>
                                            <option value="155">Lesotho</option>
                                            <option value="156">Liberia</option>
                                            <option value="157">Libyan Arab Jamahiriya</option>
                                            <option value="158">Liechtenstein</option>
                                            <option value="159">Lithuania</option>
                                            <option value="160">Luxembourg</option>
                                            <option value="161">Macau</option>
                                            <option value="162">Macedonia</option>
                                            <option value="163">Madagascar</option>
                                            <option value="164">Malawi</option>
                                            <option value="53">Malaysia</option>
                                            <option value="165">Maldives</option>
                                            <option value="166">Mali</option>
                                            <option value="167">Malta</option>
                                            <option value="168">Marshall Islands</option>
                                            <option value="169">Martinique</option>
                                            <option value="170">Mauritania</option>
                                            <option value="171">Mauritius</option>
                                            <option value="172">Mayotte</option>
                                            <option value="54">Mexico</option>
                                            <option value="173">Micronesia</option>
                                            <option value="174">Moldova</option>
                                            <option value="175">Monaco</option>
                                            <option value="176">Mongolia</option>
                                            <option value="177">Montenegro</option>
                                            <option value="178">Montserrat</option>
                                            <option value="179">Morocco</option>
                                            <option value="180">Mozambique</option>
                                            <option value="181">Myanmar</option>
                                            <option value="182">Namibia</option>
                                            <option value="183">Nauru</option>
                                            <option value="184">Nepal</option>
                                            <option value="55">Netherlands</option>
                                            <option value="185">Netherlands Antilles</option>
                                            <option value="186">New Caledonia</option>
                                            <option value="56">New Zealand</option>
                                            <option value="187">Nicaragua</option>
                                            <option value="188">Niger</option>
                                            <option value="189">Nigeria</option>
                                            <option value="190">Niue</option>
                                            <option value="191">Norfolk Island</option>
                                            <option value="192">Northern Mariana Islands</option>
                                            <option value="57">Norway</option>
                                            <option value="193">Oman</option>
                                            <option value="58">Pakistan</option>
                                            <option value="194">Palau</option>
                                            <option value="59">Palestine</option>
                                            <option value="195">Panama</option>
                                            <option value="196">Papua New Guinea</option>
                                            <option value="60">Paraguay</option>
                                            <option value="61">Peru</option>
                                            <option value="62">Philippines</option>
                                            <option value="197">Pitcairn</option>
                                            <option value="63">Poland</option>
                                            <option value="64">Portugal</option>
                                            <option value="65">Puerto Rico</option>
                                            <option value="66">Qatar</option>
                                            <option value="198">Reunion</option>
                                            <option value="67">Romania</option>
                                            <option value="68">Russian Federation</option>
                                            <option value="199">Rwanda</option>
                                            <option value="200">Saint Kitts and Nevis</option>
                                            <option value="201">Saint Lucia</option>
                                            <option value="202">Saint Vincent and the Grenadines</option>
                                            <option value="203">Samoa</option>
                                            <option value="204">San Marino</option>
                                            <option value="205">Sao Tome and Principe</option>
                                            <option value="69">Saudi Arabia</option>
                                            <option value="206">Senegal</option>
                                            <option value="87">Serbia</option>
                                            <option value="207">Seychelles</option>
                                            <option value="208">Sierra Leone</option>
                                            <option value="70">Singapore</option>
                                            <option value="71">Slovakia (Slovak Republic)</option>
                                            <option value="72">Slovenia</option>
                                            <option value="209">Solomon Islands</option>
                                            <option value="210">Somalia</option>
                                            <option value="73">South Africa</option>
                                            <option value="211">South Georgia &amp; South Sandwich Islands</option>
                                            <option value="212">South Sudan</option>
                                            <option value="74">Spain</option>
                                            <option value="213">Sri Lanka</option>
                                            <option value="214">St. Helena</option>
                                            <option value="215">St. Pierre and Miquelon</option>
                                            <option value="216">Sudan</option>
                                            <option value="217">Suriname</option>
                                            <option value="218">Svalbard and Jan Mayen Islands</option>
                                            <option value="219">Swaziland</option>
                                            <option value="75">Sweden</option>
                                            <option value="76">Switzerland</option>
                                            <option value="220">Syrian Arab Republic</option>
                                            <option value="77">Taiwan</option>
                                            <option value="221">Tajikistan</option>
                                            <option value="222">Tanzania</option>
                                            <option value="78">Thailand</option>
                                            <option value="223">Togo</option>
                                            <option value="224">Tokelau</option>
                                            <option value="225">Tonga</option>
                                            <option value="226">Trinidad and Tobago</option>
                                            <option value="227">Tunisia</option>
                                            <option value="79">Turkey</option>
                                            <option value="228">Turkmenistan</option>
                                            <option value="229">Turks and Caicos Islands</option>
                                            <option value="230">Tuvalu</option>
                                            <option value="231">Uganda</option>
                                            <option value="80">Ukraine</option>
                                            <option value="81">United Arab Emirates</option>
                                            <option value="82">United Kingdom</option>
                                            <option value="83">United States minor outlying islands</option>
                                            <option value="84">Uruguay</option>
                                            <option value="85">Uzbekistan</option>
                                            <option value="232">Vanuatu</option>
                                            <option value="233">Vatican City State (Holy See)</option>
                                            <option value="86">Venezuela</option>
                                            <option value="234">Viet Nam</option>
                                            <option value="235">Virgin Islands (British)</option>
                                            <option value="236">Virgin Islands (U.S.)</option>
                                            <option value="237">Wallis and Futuna Islands</option>
                                            <option value="238">Western Sahara</option>
                                            <option value="239">Yemen</option>
                                            <option value="240">Zambia</option>
                                            <option value="241">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="inputs">
                                        <label for="ZipPostalCode">Zip / postal code:</label>
                                        <input type="text" id="ZipPostalCode" name="ZipPostalCode" value="" />
                                    </div>
                                </div>
                            </div>

                            <div class="buttons">
                                <input type="submit" id="distributor-button" class="button-1 register-next-step-button" value="Search Distributor" name="distributor-button" />
                            </div>
                            <div>
                            </div>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq7GbbNwjSUu5FX6QsA3fSpsDBZ8VfcrCU5SpHUKOyEMv4acWGXXrUrU-_zJ4vKfRD4kx7XMzS2otdFWqXykyvGorLOS_b37_keC9-rVDouSLssr8GT1dxZNNnjts5c4NPc" /></form>

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
                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KbjZjDJvz9Ire7PA-9PUq7GbbNwjSUu5FX6QsA3fSpsDBZ8VfcrCU5SpHUKOyEMv4acWGXXrUrU-_zJ4vKfRD4kx7XMzS2otdFWqXykyvGorLOS_b37_keC9-rVDouSLssr8GT1dxZNNnjts5c4NPc" /></form>
                </div>
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

                                <li class="inactive" style="line-height: 0.2em!important;">
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

                    if(ddl!==null){
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

<script type="text/javascript">function add_chatinline(){var hccid=97799330;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); </script>


<script src="<?php echo e(asset("assets/js/ourdis.js")); ?>" type="text/javascript"></script>

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
<?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/resources/views/pages/ourdistributor.blade.php ENDPATH**/ ?>