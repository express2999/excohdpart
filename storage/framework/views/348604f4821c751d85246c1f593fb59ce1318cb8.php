<link href="<?php echo e(asset("assets/css/login.css")); ?>" rel="stylesheet" type="text/css"/>


<?php echo $__env->make('menus.header.loggedout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset("assets/js/login.js")); ?>" type="text/javascript"></script>


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
            <a href="shoppingcart">Cart</a>
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

            <div class="page login-page">
                <div class="page-title">
                    <h1>Welcome!</h1>
                </div>

                <div class="page-body">
                    <div class="customer-blocks">
                        <div class="new-wrapper register-block">
                            <div class="title">
                                <strong>New Customer</strong>
                            </div>
                            <div class="text">
                                By creating an account on our website you will be able to shop faster, be up to date on
                                an orders status, and keep track of the orders you have previously made.
                            </div>
                            <div class="buttons">
                                <input type="button" class="button-1 register-button"
                                       onclick="location.href='/register'" value="Register"/>
                            </div>
                        </div>
                        <div class="returning-wrapper fieldset">
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="title">
                                    <strong>Returning Customer</strong>
                                </div>
                                <div class="form-fields">
                                    <div class="inputs">
                                        <label for="Email">Email:</label>
                                        <input id="email" type="email"
                                               class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                               value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                              </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="inputs">
                                        <label for="Password">Password:</label>
                                        <input id="password" type="password"
                                               class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               name="password" required autocomplete="current-password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                               <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="inputs reversed">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                            <label class="form-check-label" for="remember">
                                                <?php echo e(__('Remember Me')); ?>

                                            </label>
                                        </div>
                                        <span class="forgot-password">
                                 <?php if(Route::has('password.request')): ?>
                                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                            <?php endif; ?>
                            </span>
                                    </div>
                                </div>
                                <div class="buttons">

                                    <button type="submit" class="button-1 login-button">
                                        <?php echo e(__('Login')); ?>

                                    </button>
                                </div>
                                <input name="__RequestVerificationToken" type="hidden"
                                       value="CfDJ8KbjZjDJvz9Ire7PA-9PUq57yRJlaW1Z8v-UDriEJhocqln2PFPaXPGDkY3hc95D3KJqaUbvZTmTZq_IKQEJGWaqaRjmtC_SAqG0XPDeN0fX5PFQBssArEu722GUrOrKScUM8g3C75SF5SVVe7ZXegU"/><input
                                    name="RememberMe" type="hidden" value="false"/></form>
                        </div>
                    </div>
                    <div class="external-authentication">

                    </div>

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

<script type="text/javascript">function add_chatinline() {
        var hccid = 97799330;
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    }

    add_chatinline(); </script>


<script src="<?php echo e(asset("assets/js/login2.js")); ?>" type="text/javascript"></script>


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
</body>
</html>
<?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/resources/views/auth/login.blade.php ENDPATH**/ ?>