<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    
</script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-20">
        <h1 class="heading text-center">Latest Med Spa publications</h1>


        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($article->type == 'ba'): ?>
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter">
                  <img src="https://img.youtube.com/vi/<?php echo e($article->link); ?>/0.jpg" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter">Read more</a></h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter"><?php echo e($article->getCategories()[0]->name); ?></a></div>
                </figure>
                  
                <h6 class="mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter"><?php echo e(ucwords(strtolower($article->title))); ?></a></h6>

              </div>
              <!-- /.box -->
            </div>
            <?php elseif($article->type == 'video'): ?>
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos">
                  <img src="https://img.youtube.com/vi/<?php echo e($article->link); ?>/0.jpg" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos">Read more</a></h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos"><?php echo e($article->getCategories()[0]->name); ?></a></div>
                </figure>
                  
                <h6 class="mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos"><?php echo e(ucwords(strtolower($article->title))); ?></a></h6>

              </div>
              <!-- /.box -->
            </div>
<!-- https://youtu.be/IUY47HPTKi0 -->
            <?php else: ?>
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->user()->slug); ?>#Articles">
                  <img src="/storage/<?php echo e($article->image); ?>" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Articles">Read more</a></h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><a href="/profile/<?php echo e($article->user()->slug); ?>#Articles"><?php echo e($article->getCategories()[0]->name); ?></a></div>
                </figure>
                  
                <h6 class="mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Articles"><?php echo e(ucwords(strtolower($article->title))); ?></a></h6>

              </div>
              <!-- /.box -->
            </div>
            <?php endif; ?>
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