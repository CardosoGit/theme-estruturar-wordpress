<?php /* Template Name: Template Serviços 1 */ get_header(); ?>
	<div class="content">
		<div class="marketsserved">
		    <div class="container">
	            <row>
	                <div class="col-md-12 desc-solucao">
	                     <h1 style="text-transform: capitalize;  font-family: 'Righteous-Regular';font-size: 3em;"><?php the_title(); ?></h1> 
	                </div>
	            </row>
	            <div class="row">
	                <div class="col-md-2">
	                     <div id="menu-solucoes">
	                     	<?php sidebar_servicos1_nav(); ?>
	                        
	                    </div>
	                </div>
	                <div class="col-md-6">
	                	<div class=" conteudo-solucoes">
		                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		                		<?php the_content(); ?>
		                	<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>
	                   
	                </div>
	                <div class="col-md-4 cta-solucoes">
	                    <div>
	                         <?php dynamic_sidebar('widget-area-2'); ?>
	                        
	                    </div>
	                </div>
	            </div>
	             
	        </div>
	    </div>
	</div>


<?php get_footer(); ?>