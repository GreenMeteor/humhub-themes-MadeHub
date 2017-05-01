<?php
$space = $this->context->contentContainer;
?>
	<div class="row row-sm">
	<div class="col-sm-4">
		<div class="panel panel-card">
			<?php echo humhub\modules\space\widgets\Header::widget(['space' => $space]); ?>
			<?php echo \humhub\modules\space\widgets\Menu::widget(['space' => $space]); ?>
			<div class="scroll blue">
				<nav class="mas-scroll">
					<a class="scroll-item waves">Link 1</a>
					<a class="scroll-item waves">Link 2</a>
					<a class="scroll-item waves">Link 3</a>
					<a class="scroll-item waves">Link 4</a>
					<a class="scroll-item waves">Link 5</a>
					<a class="scroll-item waves">Link 6</a>
					<a class="scroll-item waves">Link 7</a>
					<a class="scroll-item waves">Link 8</a>
					<a class="scroll-item waves">Link 9</a>
					<a class="scroll-item waves">Link 10</a>
				</nav>
			</div>
			<?php
			echo \humhub\modules\space\widgets\Sidebar::widget(['space' => $space, 'widgets' => [
				[\humhub\modules\activity\widgets\Stream::className(), ['streamAction' => '/space/space/stream', 'contentContainer' => $space], ['sortOrder' => 10]],
				[\humhub\modules\space\modules\manage\widgets\PendingApprovals::className(), ['space' => $space], ['sortOrder' => 20]],
				[\humhub\modules\space\widgets\Members::className(), ['space' => $space], ['sortOrder' => 30]]
			]]);
			?>
		</div>
	</div>
	<div class="col-sm-8">
		<?php echo $content; ?>
		<div class="panel panel-card">
				<form class="md-form-group float-label">
					<textarea rows="3" class="md-input"></textarea>
					<label>Biography</label>
				</form>
				<div class="lt p-h p-v-sm">
					<button md-ink-ripple class="md-btn md-raised pull-right p-h-md blue">Post</button>
					<ul class="nav nav-pills nav-sm">
						<li><a href><i class="fa fa-camera"></i></a></li>
						<li><a href><i class="fa fa-video-camera"></i></a></li>
					</ul>
				</div>
		</div>
		<div class="panel panel-card clearfix">
			<div class="p-h b-b b-light">
				<ul class="nav nav-lines nav-md b-info">
					<li class="active"><a href>Stream</a></li>
					<li><a href>Photos</a></li>
					<li><a href>Posts</a></li>
				</ul>
			</div>
			<div class="p-h-lg m-b-lg">			
				<div class="streamline b-l p-v m-l-xs">
					<div>
						<a class="pull-left w-32 m-l-n m-t-xs m-r"><img src="img/u2.png" class="img-responsive rounded" alt="..."></a>
						<div class="clear">
							<div class="m-b-xs">
								<a href>James</a> said
								<span class="text-muted block text-xs">Just now</span>
							</div>
							<div class="m-b">
								<div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin </div>
								<div class="m-t-sm">
									<a href class="text-muted m-xs">Like</a>
									<a href class="text-muted m-xs">Comment</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<a class="pull-left w-32 m-l-n m-t-xs m-r"><img src="img/u3.png" class="img-responsive rounded" alt="..."></a>
						<div class="clear">
							<div class="m-b-xs">
								<a href>Oscar</a> upload a file
								<span class="text-muted block text-xs">3 minutes ago</span>
							</div>
							<div class="m-b">
								<div class="w-xl w-auto-xs">
									<div class="box bg-light">
										<div class="box-col w-xs text-center dk p-md v-m"><i class="fa fa-file-text-o text-3x text-muted-lt"></i></div>
										<div class="box-col p">
											<a href>Geuismod tincidunt</a>
											<div>Diam nonummy nibh euismod tincidunt ut laoreet. </div>
										</div>
									</div>
								</div>
								<div class="m-t-sm">
									<a href class="text-muted m-xs">Like</a>
									<a href class="text-muted m-xs">Comment</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<a class="pull-left w-32 m-l-n m-t-xs m-r"><img src="img/u4.png" class="img-responsive rounded" alt="..."></a>
						<div class="clear">
							<div class="m-b-xs">
								<a href>Anny</a> post a photo
								<span class="text-muted block text-xs">6 minutes ago</span>
							</div>
							<div class="m-b">
								<div><img src="img/u10.png" class="b p-xs"></div>
								<div class="m-t-sm">
									<a href class="text-muted m-xs">Like</a>
									<a href class="text-muted m-xs">Comment</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<a class="pull-left w-32 m-l-n m-t-xs m-r"><img src="img/u5.png" class="img-responsive rounded" alt="..."></a>
						<div class="clear">
							<div class="m-b-xs">
								<a href>Michel</a> post a comment
								<span class="text-muted block text-xs">10 minutes ago</span>
							</div>
							<div class="m-b bg-light">
								<div class="p-sm b-b b-white">
									<img src="img/u4.png" class="rounded w-20 pull-left m-r-sm" alt="...">
									<a href>Tony</a> liked it
								</div>
								<div class="p-sm">
									<img src="img/u6.png" class="rounded w-20 pull-left m-r-sm" alt="...">
									<a href>Anney</a> Commented it
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
