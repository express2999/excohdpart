<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/dropImage.css')); ?>">

</head>
<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = DB::table('products')
     ->select('products.*')
     ->where('id',$id)
     ->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <style>

        label {
            font-weight: bold;
        }

        .form-control {
            color: #76838f;
            background-color: #fff;
            background-image: none;
            border: 1px solid lightgray;
        }

        .box {
            position: relative;
            background: #ffffff;
            width: 100%;
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative;
            border-bottom: 1px solid #f4f4f4;
            margin-bottom: 10px;
        }

        .box-tools {
            position: absolute;
            right: 10px;
            top: 5px;
        }

        .dropzone-wrapper {
            border: 2px dashed #91b0b3;
            color: #92b0b3;
            position: relative;
            height: 150px;
        }

        .dropzone-desc {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            text-align: center;
            width: 40%;
            top: 50px;
            font-size: 16px;
        }

        .dropzone,
        .dropzone:focus {
            position: absolute;
            outline: none !important;
            width: 100%;
            height: 150px;
            cursor: pointer;
            opacity: 0;
        }

        .dropzone-wrapper:hover,
        .dropzone-wrapper.dragover {
            background: #ecf0f5;
        }

        .preview-zone {
            text-align: center;
        }

        .preview-zone .box {
            box-shadow: none;
            border-radius: 0;
            margin-bottom: 0;
        }

        .btn-primary {
            background-color: crimson;
            border: 1px solid #212121;
        }
    </style>

    <div class="page-content">


        <div class="side-body padding-top" style="margin-left: 100px">
            <div class="container-fluid">
                <h1 class="page-title">
                    <i class="voyager-shop"></i> Products
                </h1>

                <a href="<?php echo e(Route('products')); ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                    <span>&nbsp;&nbsp;Go Back</span></a>
            </div>
        </div>

        <div class="container" style="background-color: transparent;">
            <?php if(\Session::has('done')): ?>
                <div class="text-center">
                    <div class="alert alert-success">
                        <span style="color:red;font-size: 30px;"><i class="fa fa-warning" style="font-size:48px;"></i>&nbsp;&nbsp;<?php echo \Session::get('done'); ?></span>
                    </div>
                </div>


            <?php endif; ?>
            <form action="<?php echo e(Route('updateProduct')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <h2>Edit <?php echo e($product->name); ?></h2>
                <div class="form-group">
                    <label>Exco Part Number</label>
                    <input type="hidden" value="<?php echo e($product->id); ?>" name="id">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" value="<?php echo e($product->name); ?>" name="productname"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Exco Part Number</label>
                            <input type="text" class="form-control" value="<?php echo e($product->excoPartNo); ?>" name="excopart" required>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <label>UPC Code</label>
                        <input type="text" class="form-control" placeholder="" name="upc" value="<?php echo e($product->upc); ?>">
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Short description</label>
                            <textarea class="form-control" style="height: 200px" name="shortdescription"
                                      ><?php echo e($product->shortDescription); ?></textarea>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Full description</label>
                            <textarea class="form-control" style="height: 200px" name="longdescription"
                                      ><?php echo e($product->fullDescription); ?></textarea>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-2">

                        <label for="img">Upload product Image</label>
                        <input type="file" id="img" name="img" accept="image/*">

                    </div>


                    <h3>SEO Related</h3>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Meta title</label>
                            <input type="text" class="form-control" placeholder="" name="metatitle" value="<?php echo e($product->metaTitle); ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Meta Key-Word</label>
                            <input type="text" class="form-control" placeholder="" name="metakeyword" value="<?php echo e($product->metaKeyword); ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea type="text" class="form-control" placeholder="" name="metadescription"
                                      style="height: 200px" ><?php echo e($product->metaDescription); ?></textarea>
                        </div>
                    </div>

                    <!-- check boxes -->
                    <div class="col-md-2">
                        <label>Enable Shipping</label><br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="isshipping">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Is Free Shipping</label><br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="freeshipping">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Is Shipped Separately</label><br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="shippedSeparetly">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Is Tax Exempt</label><br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="taxexempt">
                            </label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label>Additional Shipping Charge</label>
                        <input type="text" class="form-control" value="<?php echo e($product->additionalShippingCharge); ?>" name="additionalshipping">
                    </div>


                </div>


                <div class="col-md-10">
                    <label>Stock Quantity</label>
                    <input type="text" class="form-control" value="<?php echo e($product->stockQuantity); ?>" name="stockquantity"><br>
                </div>
                <div class="col-md-4">
                    <label>Price</label>
                    <input type="text" class="form-control" value="<?php echo e($product->price); ?>" name="price" required>
                </div>
                <div class="col-md-8">
                    <label>Product Cost</label>
                    <input type="text" class="form-control" value="<?php echo e($product->productCost); ?>" name="productcost"><br>
                </div>

                <div class="col-md-3">
                    <label>Product Weight</label>
                    <input type="text" class="form-control" value="<?php echo e($product->weight); ?>" name="productweight">
                </div>

                <div class="col-md-3">
                    <label>Product Length</label>
                    <input type="text" class="form-control" value="<?php echo e($product->length); ?>" name="productlength">
                </div>

                <div class="col-md-3">
                    <label>Product Width</label>
                    <input type="text" class="form-control" value="<?php echo e($product->width); ?>" name="productwidth">
                </div>

                <div class="col-md-3">
                    <label>Product Height</label>
                    <input type="text" class="form-control" value="<?php echo e($product->height); ?>" name="productheight"><br>
                </div>

                <div class="col-md-6">
                    <button class="btn btn-primary btn-lg"><i class="voyager-tv"></i>&nbsp;&nbsp;Save and publish
                    </button>
                </div>

            </form>
        </div>


    </div>



<?php $__env->stopSection(); ?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('assets/js/dropImage.js')); ?>"></script>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/vendor/tcg/voyager/src/../resources/views/products/editProduct.blade.php ENDPATH**/ ?>