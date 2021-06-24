<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
</head>
<?php $__env->startSection('content'); ?>

    <div class="page-content">
        <div class="analytics-container">



                <div class="side-body padding-top" style="margin-left: 100px">
                    <div class="container-fluid">
                        <h1 class="page-title">
                            <i class="voyager-shop"></i> Products
                        </h1>
                        <a href="<?php echo e(Route('newProduct')); ?>" href="http://localhost:8000/admin/users/create" class="btn btn-success btn-add-new">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </a>
                        <a href="<?php echo e(Route('deleteproducts')); ?>" class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i>
                            <span>Bulk Delete</span></a>
                    </div>
                </div>



                        <div class="container" style="background-color: transparent;">
                            <?php if(\Session::has('done')): ?>
                                <div class="text-center" id="responseMessage">
                                    <div class="alert alert-success">
                                        <span style="color:red;font-size: 30px;"><i class="fa fa-warning" style="font-size:48px;"></i>&nbsp;&nbsp;<?php echo \Session::get('done'); ?></span>
                                    </div>
                                </div>


                            <?php endif; ?>
                          <div style="overflow-x:auto;overflow-y:auto;">
                            <table id="dataTable" class="table table-striped table-bordered table-lg dataTable"
                                   cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="th-sm" style="font-weight: bold;">id</th>
                                    <th class="th-sm" style="font-weight: bold;">Picture</th>
                                    <th class="th-sm" style="font-weight: bold;">Product name</th>
                                    <th class="th-sm" style="font-weight: bold;">UPC Code</th>
                                    <th class="th-sm" style="font-weight: bold;">Price</th>
                                    <th class="th-sm" style="font-weight: bold;">Stock quantity</th>
                                    <th class="th-sm" style="font-weight: bold;">Product Cost</th>
                                    <th class="th-sm" style="font-weight: bold;">Published</th>
                                    <th class="th-sm" style="font-weight: bold;">Edit</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = DB::table('products')
                                ->select('products.*')
                                ->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><?php echo e($product->id); ?></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><img src="<?php echo e($product->image); ?>" width="100"></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><?php echo e($product->name); ?></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><?php echo e($product->upc); ?></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><?php echo e($product->price); ?></td>
                                    <td class="text-center" class="text-center" style="font-weight: normal;color: #00387b;"><?php echo e($product->stockQuantity); ?></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><?php echo e($product->productCost); ?></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><i class="fa fa-check"></i></td>
                                    <td class="text-center" style="font-weight: normal;color: #00387b;"><button class="btn btn-light"><a href="<?php echo e(Route('editproduct',$product->id)); ?>"><i class="fa fa-edit"> </i>&nbsp;Edit</a></button> <button class="btn btn-danger"><a href="<?php echo e(Route('deleteProduct',$product->id)); ?>"><font color="white"><i class="fa fa-trash"> </i>&nbsp;Remove</font></a></button></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                          </div>
                        </div>
                        <div id="application" class="tab-pane fade">
                            <center><font style="font-size: 25px;font-weight: bold;">Data will be available soon</font>
                            </center>
                        </div>
                    </div>


                </div>


                <?php $__env->stopSection(); ?>


                <script>
                    $(document).ready(function () {
                        $('#dataTable').dataTable({
                            "aaData": response,
                        });

                    });
                </script>

<script>
    $(document).ready(function () {

        setInterval(function () {
            $("#responseMessage").fadeOut(3000);
        }, 1000);

    });
</script>




<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/megoz1/excohdpart.rocketsweb.net/vendor/tcg/voyager/src/../resources/views/products/product.blade.php ENDPATH**/ ?>