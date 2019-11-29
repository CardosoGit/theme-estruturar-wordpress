<?php /* Template Name: Template quem somos */ get_header(); ?>



<div class="content">
		<div class="marketsserved">
		    <div class="container">
	            <row>
	                <div class="col-md-12 desc-solucao">
	                    <h1 style="text-transform: capitalize;  font-family: 'Righteous-Regular';font-size: 3em;"><?php the_title(); ?></h1>
	                </div>
	            </row>
	            <div class="row">
	                <div class="col-md-12">
	                   <div class="about-grids">

							<div class="col-md-5 about-grid">
								<img src="<?= the_field('imagem') ?>" width="100%" />
							</div>

							<div class="col-md-7 about-grid1">
								<h2><?php the_field('subtitulo'); ?> </h2>
									<?php the_field('descrição'); ?>
							</div>

							<div class="clearfix"></div>
						</div>	
					     
	                </div>
	              
	            </div>
	             
	        </div>
	    </div>
	</div>


<?php get_footer(); ?>