<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    
</script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-70">
        <h1 class="heading text-center">Latest Med Spa publications</h1>
        <div class="space50"></div>

        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->author_id); ?>#Articles">
                  <img src="/storage/<?php echo e($article->image); ?>" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><?php echo e($article->getCategories()[0]->name); ?></div>
                </figure>
                  
                <h6 class="mb-0"><?php echo e(ucwords(strtolower($article->title))); ?></h6>

              </div>
              <!-- /.box -->
            </div>
            <!--/.item -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
          <!--/.row -->
        </div>
        <!--/.tiles -->
      </div>
      <!-- /.container -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tganyuk/git/medspa.us/resources/views/welcome.blade.php ENDPATH**/ ?>