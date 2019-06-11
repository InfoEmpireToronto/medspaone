<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    
</script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<style type="text/css">
  .items {
    /*height: auto !important;*/
  }
</style>
    <div class="wrapper light-wrapper" id="posts">
      <div class="container-fluid inner pt-20 pb-0">
        <h1 class="heading text-center">Latest Med Spa publications</h1>


        <div class="tiles grid">
          <div class="items row isotope boxed grid-view" >
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($article->type == 'ba'): ?>
  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
    <div class="box box-ba bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter">
        <img src="/storage/<?php echo e($article->before); ?>" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter">View more</a></h5>
            <p></p>
        </figcaption>
          <div class="category"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter"><?php echo e($article->getCategories()[0]->name); ?> <span class="float-right"><i class="fa fa-address-book-o float-right"></i><i class="fa fa-address-book float-right"></i></span></a></div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#BeforeAfter"><?php echo e(ucwords(strtolower($article->title))); ?></a></h6>

    </div>
    <!-- /.box -->
  </div>
  <?php elseif($article->type == 'video'): ?>
  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
    <div class="box box-video bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos">
        <img src="https://img.youtube.com/vi/<?php echo e($article->link); ?>/0.jpg" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos"><i class="fa fa-play"></i></a></h5>
        </figcaption>
          <div class="category"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos"><?php echo e($article->getCategories()[0]->name); ?></a></div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Videos"><?php echo e(ucwords(strtolower($article->title))); ?></a></h6>

    </div>
    <!-- /.box -->
  </div>
  <!-- https://youtu.be/IUY47HPTKi0 -->
  <?php elseif($article->type == 'event'): ?>
  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
    <div class="box bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/<?php echo e($article->user()->slug); ?>#Events">
        <img src="/storage/<?php echo e($article->image); ?>" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Events">Read more</a></h5>
            <p></p>
        </figcaption>
          <div class="category event"><a href="/profile/<?php echo e($article->user()->slug); ?>#Events"><?php echo e($article->getCategories()[0]->name); ?></a></div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/<?php echo e($article->user()->slug); ?>#Events"><?php echo e(ucwords(strtolower($article->title))); ?></a></h6>

    </div>
    <!-- /.box -->
  </div>
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
		  <div class="space50"></div>
		 <p class="text-center"> <button onclick='loadItems()' class="btn btn-l btn-blue shadow">View more</button></p>
        <!--/.tiles -->
		 
      </div>
		 <hr class="pt-20 pb-20">
		 <div class="container inner pt-20 pb-20">
        <h1 class="heading text-center">Latest FAQs</h1>
			 <div class="row">


          <div class="col-lg-12">
            <div id="accordion1" class="accordion-wrapper">

<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-<?php echo e($faq->id); ?>"><?php echo e(str_replace('\\', '', $faq->question)); ?></a> </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-<?php echo e($faq->id); ?>" class="collapse <?php echo e($loop->index == 0 ? 'show' : ''); ?>">
                  <div class="card-block">
                    <p><?php echo str_replace('\\', '', $faq->answer); ?></p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
            <!-- /.accordion-wrapper -->
			  
			  <p class="text-center"><a href="/faq" class="btn">Read more <i class="mi-arrow-right"></i></a> </p>
          </div>
          <!-- /column -->
        </div>
			 
		</div>
      <!-- /.container -->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
var numPosts = 10;
var $isogrid = window.myisogrid;
  $(document).ready(function(){
    // loadItems();
  });

  function loadItems()
  {
    $.ajax({
        url: '<?php echo e(route('getHomepageItems')); ?>',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        data: {
          start: numPosts
        },
        // datatype: 'json',
        success: renderItems,
        error: function (jqXHR, textStatus, errorThrown) {  }
    });
  }

  function renderItems(data)
  {
    var items = $(data).find('div.item');
    window.myisogrid.append(items);
    window.myisogrid.isotope('appended', items);
    // window.myisogrid.isotope('layout');
    // $(window).delay(500).trigger('resize');
    setTimeout(function(){

    window.myisogrid.isotope({
            masonry: {
                columnWidth: window.myisogrid.width() / 12
            }
        });
  }, 800);


    numPosts += 10;
  }

  

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tganyuk/git/medspa.us/resources/views/welcome.blade.php ENDPATH**/ ?>