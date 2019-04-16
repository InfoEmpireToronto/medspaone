<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    
</script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-70">
        <h1 class="heading text-center">Latest articles</h1>
        <h2 class="sub-heading2 text-center">Newest in the aesthetics</h2>
        <div class="space50"></div>

        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-30">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="article/<?php echo e($article->id); ?>"><img src="style/images/art/ge<?php echo rand(1,15); ?>.jpg" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><?php echo e($article->title); ?></div>
                </figure>
                  
                <h6 class="mb-0"><?php echo e($article->title); ?></h6>

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