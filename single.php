<?php get_header(); ?>

	

	<div class="content">
		<div class="marketsserved">
		    <div class="container">
	            <row>
	                <div class="col-md-12 desc-solucao">
	                    <h1 style="text-transform: capitalize;  font-family: 'Righteous-Regular';font-size: 3em;"><?php the_title(); ?></h1>
	                </div>
	            </row>
	            <div class="row">
	                <div class="col-md-8 col-sm-8">
	                   
	                		<main role="main">
								<!-- section -->
								<section>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>

									<!-- article -->
									<article >

										<div class="feature post">
											<div class="container">
												<div class="feature-grids">
													<div class="col-md-7 col-sm-7 ">
														
														<div style="width:100%" class="feature-text single">
															<img  src="<?php the_post_thumbnail_url() ?> ">
															<?php the_content(); ?>
															
														</div>
														<div class="clearfix"></div>
														<div>
															<?php dynamic_sidebar('widget-area-1'); ?>
														</div>
													</div>
													
												</div>
											</div>
										</div>

									</article>
									<!-- /article -->

								<?php endwhile; ?>

								<?php else: ?>

									<!-- article -->
									<article>

										<h1><?php _e( 'Desculpe. Nada para mostrar!', 'html5blank' ); ?></h1>

									</article>
									<!-- /article -->

								<?php endif; ?>

								</section>
								<!-- /section -->
								</main>	
					     
	                </div>
	              
	            </div>
	             
	        </div>
	    </div>
	</div>


<?php get_footer(); ?>
