<div class="col-md-4">
	<aside class="right-sidebar">
		<!--
                    <div class="search-widget">
                        <div class="input-group">
                          <input type="text" class="form-control input-lg" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div>
                    </div>
                    -->
		<div class="widget">
			<div class="widget-heading">
				<h4>Categories</h4>
			</div>
			<div class="widget-body">
				<ul class="categories">
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<a href="<?php echo e(route('category', $category->slug)); ?>">
							<i class="fa fa-angle-right"></i> <?php echo e($category->title); ?> </a>
						<span class="badge pull-right"><?php echo e($category->posts->count()); ?></span>
					</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>

		<div class="widget">
			<div class="widget-heading">
				<h4>Popular Posts</h4>
			</div>
			<div class="widget-body">
				<ul class="popular-posts">
					<li>
						<div class="post-image">
							<a href="#">
								<img src="/img/Post_Image_5_thumb.jpg" />
							</a>
						</div>
						<div class="post-body">
							<h6>
								<a href="#">Blog Post #5</a>
							</h6>
							<div class="post-meta">
								<span>36 minutes ago</span>
							</div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<a href="#">
								<img src="/img/Post_Image_4_thumb.jpg" />
							</a>
						</div>
						<div class="post-body">
							<h6>
								<a href="#">Blog Post #4</a>
							</h6>
							<div class="post-meta">
								<span>36 minutes ago</span>
							</div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<a href="#">
								<img src="/img/Post_Image_3_thumb.jpg" />
							</a>
						</div>
						<div class="post-body">
							<h6>
								<a href="#">Blog Post #3</a>
							</h6>
							<div class="post-meta">
								<span>36 minutes ago</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!--
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Codeigniter</a></li>
                                <li><a href="#">Yii</a></li>
                                <li><a href="#">Laravel</a></li>
                                <li><a href="#">Ruby on Rails</a></li>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">Vue Js</a></li>
                                <li><a href="#">React Js</a></li>
                            </ul>
                        </div>
                    </div>
                    -->
	</aside>
</div>