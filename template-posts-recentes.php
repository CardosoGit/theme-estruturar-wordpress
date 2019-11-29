<?php /* Template Name: Posts Recentes */ get_header(); ?>
	


	<div class="content">
		<div class="marketsserved">
		    <div class="container">
	            <row>
	                <div class="col-md-12 desc-solucao">
	                    <h1 style="text-transform: capitalize;  font-family: 'Righteous-Regular';font-size: 3em;"><?php the_title(); ?></h1>
	                </div>
	            </row>
	            <div class="row">
	                <div class="col-md-10">
	                   
	                		<?php 
										    $recent = new WP_Query("showposts=5"); 
										    while($recent->have_posts()) : $recent->the_post();?> 
					    	<div style="" class="new-project">
									
										
										<div class="newproject-grids">								
											<div class="col-md-4 newproject-grid">
												<div class="projects-right">
													<div class="col-md-10 project-right">
														<a  href="<?php the_permalink(); ?>" ><img src="<?php the_post_thumbnail_url() ?>" class="img-style row6" alt=""></a>
													</div>
																						
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="col-md-8 newproject-grid">
												
												<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
												<?php the_excerpt(); ?>
												<div style="margin:10px" class="clearfix"></div>
												<a href="<?php the_permalink(); ?>"   class="btn-solicitar-2" >Ler mais ...</a>
											</div>
											<div class="clearfix"></div>
										</div>
										
									
								</div>
								<?php endwhile; ?>	
					     
	                </div>
	              
	            </div>
	             
	        </div>
	    </div>
	</div>
	
<?php get_footer(); ?>