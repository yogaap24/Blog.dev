 <?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<article class="post-item post-detail">
			<?php if($post->image_url): ?>
				<div class="post-item-image">
						<img src="<?php echo e($post->image_url); ?>" alt="<?php echo e($post->title); ?>"
				</div>
			<?php endif; ?>

				<div class="post-item-body">
					<div class="padding-10">
						<h1><?php echo e($post->title); ?></h1>

						<div class="post-meta no-border">
							<ul class="post-meta-group">
								<li>
									<i class="fa fa-user"></i>
									<a href="#"><?php echo e($post->author->name); ?></a>
								</li>
								<li>
									<i class="fa fa-clock-o"></i>
									<time><?php echo e($post->date); ?></time>
								</li>
								<li>
									<i class="fa fa-tags"></i>
									<a href="#"> Blog</a>
								</li>
								<li>
									<i class="fa fa-comments"></i>
									<a href="#">4 Comments</a>
								</li>
							</ul>
						</div>

							<?php echo $post->body_html; ?>

					</div>
				</div>
			</article>

			<article class="post-author padding-10">
				<div class="media">
					<div class="media-left">
						<a href="#">
							<img alt="Author 1" src="img/author.jpg" class="media-object">
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">
							<a href="#"><?php echo e($post->author->name); ?></a>
						</h4>
						<div class="post-author-count">
							<a href="#">
								<i class="fa fa-clone"></i>
								90 posts
							</a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad aut sunt cum, mollitia excepturi neque sint magnam
							minus aliquam, voluptatem, labore quis praesentium eum quae dolorum temporibus consequuntur! Non.</p>
					</div>
				</div>
			</article>

			<!-- comments here -->

		</div>

		<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>