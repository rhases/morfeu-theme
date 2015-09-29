<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	</div>
</div>
<div id="carousel-home" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-home" data-slide-to="1"></li>
		<li data-target="#carousel-home" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="http://placehold.it/1500x500" alt="Descrição">
		  <div class="carousel-caption">
			<h3>Exemplo</h3>
			<p>Descrição</p>
		  </div>
		</div>
		<div class="item">
		  <img src="http://placehold.it/1500x500" alt="Descrição">
		  <div class="carousel-caption">
			<h3>Exemplo</h3>
			<p>Descrição</p>
		  </div>
		</div>
		<div class="item">
		  <img src="http://placehold.it/1500x500" alt="Descrição">
		  <div class="carousel-caption">
			<h3>Exemplo</h3>
			<p>Descrição</p>
		  </div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div id="wrapper" class="container">
	<div class="row">
	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
		<div class="row">
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="http://placehold.it/300x300" alt="Teste">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="http://placehold.it/300x300" alt="Teste">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="http://placehold.it/300x300" alt="Teste">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="http://placehold.it/300x300" alt="Teste">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="container">
			<div class="page-header">
				<h1 id="timeline">Programação</h1>
				<p>Bootstrap Timeline</p>
			</div>
			<ul class="timeline">
				<li>
					<div class="timeline-badge primary"><i class="glyphicon glyphicon-hand-left"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="http://placehold.it/100x100" alt="Teste">
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Media heading</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 de Janeiro de 2015</small></p>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
											Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
											dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
											Aliquam in felis sit amet augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-badge primary"><i class="glyphicon glyphicon-chevron-right"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title">Bootstrap 2</h4>
							</div>
							<div class="timeline-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
									Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
									dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
									Aliquam in felis sit amet augue.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-eye-open"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Left Event</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 years ago</small></p>
								</div>
								<div class="timeline-body">
									<p>Add more progress events and milestones to the left or right side of the timeline. Each event can be tagged with a date and given a beautiful icon to symbolize it's spectacular meaning.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-home"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Right Event</h4>
								</div>
								<div class="timeline-body">
									<p>Add more progress events and milestones to the left or right side of the timeline. Each event can be tagged with a date and given a beautiful icon to symbolize it's spectacular meaning.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-home"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Left Event</h4>
								</div>
								<div class="timeline-body">
									<p>Add more progress events and milestones to the left or right side of the timeline. Each event can be tagged with a date and given a beautiful icon to symbolize it's spectacular meaning.</p>

									<hr>
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
											<i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-arrow-left"></i></div>
							<div class="timeline-panel">

								<div class="timeline-heading">
									<h4 class="timeline-title">Left Event</h4>
								</div>
								<div class="timeline-body">
									<p>Add more progress events and milestones to the left or right side of the timeline. Each event can be tagged with a date and given a beautiful icon to symbolize it's spectacular meaning.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-thumbs-up"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Oldest event</h4>
								</div>
								<div class="timeline-body">
									<p>Add more progress events and milestones to the left or right side of the timeline. Each event can be tagged with a date and given a beautiful icon to symbolize it's spectacular meaning.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
	</main><!-- #content -->
<?php
get_footer();
