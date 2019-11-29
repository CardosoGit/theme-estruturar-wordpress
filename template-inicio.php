<?php /* Template Name: Template Inicio */ get_header(); ?>

	<div class="header-slide">
		<div class="slider">
			<div class="callbacks_container">
			  <ul class="rslides" id="slider">
					<li>
						<div class="caption-top">
						<div class="caption">
							<h3><?php the_field('titulo_do_slide_1'); ?></h3>
							<p><?php the_field('texto_slide_1'); ?></p>
							<a class="morebtn hvr-sweep-to-right" href="<?php the_field('link_do_slide_1'); ?>">Saiba mais</a>
							<input type="hidden" value="<?php the_field('imagem1'); ?>" class="0">
						</div>
						<div class="clearfix"></div>
						</div>
					</li>
					<li>
						<div class="caption-top">
						<div class="caption">
							<h3><?php the_field('titulo_do_slide_2'); ?></h3>
							<p><?php the_field('texto_slide_2'); ?></p>
							<a class="morebtn hvr-sweep-to-right" href="<?php the_field('link_do_slide_2'); ?>">Saiba mais</a>
							<input type="hidden" value="<?php the_field('imagem2'); ?>" class="1">
						</div>
						<div class="clearfix"></div>
						</div>
					</li>
					<li>
						<div class="caption-top">
						<div class="caption">
							<h3><?php the_field('titulo_do_slide_3'); ?></h3>
							<p><?php the_field('texto_slide_3'); ?></p>
							<a class="morebtn hvr-sweep-to-right" href="<?php the_field('link_do_slide_3'); ?>">Saiba mais</a>
							<input type="hidden" value="<?php the_field('imagem3'); ?>" class="2">
						</div>
						<div class="clearfix"></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mydiv" data-js="div"></div>

	<script type="text/javascript">
		function teste(b){
			//alert($("#slider ."+ b).attr("value"))
			$(".header-slide").attr("style","background: url("+$("#slider ." + b).attr("value") + ") no-repeat 0px 0px;background-size: cover;")
		} 
		$(document).ready(function(){
		    $(".header-slide").attr("style","background: url("+$("#slider .0").attr("value") + ") no-repeat 0px 0px;background-size: cover;")
		});
	</script>
			<!--<div class="feature">
				<div class="container">
					<h3>Diferenciais</h3>
					<div class="feature-grids">
						<div class="col-md-6 feature-grid">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
							</div>
							<div class="feature-text">
								<h4>Nunc imperdiet, sapien</h4>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy varius penatibus et magnis.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 feature-grid feat1">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</div>
							<div class="feature-text">
								<h4>Nunc imperdiet, sapien</h4>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy varius penatibus et magnis.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="feature-grids">
						<div class="col-md-6 feature-grid">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							</div>
							<div class="feature-text">
								<h4>Nunc imperdiet, sapien</h4>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy varius penatibus et magnis.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 feature-grid feat1">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</div>
							<div class="feature-text">
								<h4>Nunc imperdiet, sapien</h4>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy varius penatibus et magnis.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="feature-grids">
						<div class="col-md-6 feature-grid">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
							</div>
							<div class="feature-text">
								<h4>Nunc imperdiet, sapien</h4>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy varius penatibus et magnis.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 feature-grid feat1">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-cd" aria-hidden="true"></span>
							</div>
							<div class="feature-text">
								<h4>Nunc imperdiet, sapien</h4>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy varius penatibus et magnis.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>-->
			<!--features-->
			<!--newproject-->
				<div class="new-project">
					<div class="container">
						<div class="newproject-grids">								
							<div class="col-md-6 newproject-grid">
								<div class="projects-right">
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_imagem_1') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_imagem_1'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_imagem_2') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_imagem_2'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_imagem_3') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_imagem_3'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_imagem_4') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_imagem_4'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_imagem_5') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_imagem_5'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_imagem_6') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_imagem_6'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 newproject-grid">
								<h2><?php the_field('titulo_do_servico_1'); ?></h2>
								<?php the_field('texto_do_servico_1'); ?>
								<button type="button"  data-toggle="modal" data-target=".bs-example-modal-lg" class="btn-solicitar-2" >Solicite Orçamento</button>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			
			<!--newproject-->
			<!--newproject-->
				<div class="new-project">
					<div class="container">
						<div class="newproject-grids">
							<div class="col-md-6 newproject-grid">
								<h2><?php the_field('titulo_do_servico_2'); ?></h2>
								<?php the_field('texto_do_servico_2'); ?>
								<button type="button"  data-toggle="modal" data-target=".bs-example-modal-lg" class="btn-solicitar-2" >Solicite Orçamento</button>
							</div>
							
							<div class="col-md-6 newproject-grid">
								<div class="projects-right">
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_2_imagem_1') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_2_imagem_1'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_2_imagem_2') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_2_imagem_2'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_2_imagem_3') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_2_imagem_4'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_2_imagem_4') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_2_imagem_4'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_2_imagem_5') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_2_imagem_5'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									<div class="col-md-4 project-right">
										<a class="swipebox" href="<?= get_field('servico_2_imagem_6') ?>" ><img src="<?= get_url_custom_image_size(get_field('servico_2_imagem_6'), "150x150") ?>" class="img-style row6" alt=""></a>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			
			<!--newproject-->
			<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h2>Clientes</h2>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="testimonials-grid">
								<div class="col-md-12 clientes testimonials-grid-left">
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/cvale.png" alt=" " class="img-responsive" />
									</div>
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/lactalis.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/unimed.png" alt=" " class="img-responsive" />
									</div>
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/bunge.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<div class="col-md-12 clientes testimonials-grid-left">
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/fiergs.png" alt=" " class="img-responsive" />
									</div>
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/unijui.png" alt=" " class="img-responsive" />
									</div>
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/cotripal.png" alt=" " class="img-responsive" />
									</div>
									<div class="clientes-item">
										<img src="<?= get_template_directory_uri() ?>/img/clientes/car-house.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<!--<li>
							<div class="testimonials-grid">
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="<?= get_template_directory_uri() ?>/img/te2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Ut enim ad minim veniam.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="<?= get_template_directory_uri() ?>/img/te1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Ut enim ad minim veniam.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="<?= get_template_directory_uri() ?>/img/te2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Ut enim ad minim veniam.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="<?= get_template_directory_uri() ?>/img/te1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Ut enim ad minim veniam.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>-->
					</ul>
				</div>
			</section>
				<!--FlexSlider-->
						
						<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/flexslider.css" type="text/css" media="screen" />
						<script defer src="<?= get_template_directory_uri() ?>/js/jquery.flexslider.js"></script>
						<script type="text/javascript">
							jQuery(function($) {
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							});
									

					  </script>
				<!--End-slider-script-->
		</div>
	</div>
<!-- //testimonials -->
	<!--MARKETS SERVED -->
			<!-- <div class="content">
				<div class="marketsserved">
					<div class="container">
						<h2>Estruturar Express - Valores Fixos</h2>
							<div class="market-grids">
								<div class="col-md-4 market-grid">
									<img src="<?= get_template_directory_uri() ?>/img/homem.jpg" class="img-responsive" alt="">
								</div>
								<div class="col-md-4 market-grid express-item">
									<div><img src="<?= get_template_directory_uri() ?>/img/express/tomada.jpg" class="" alt=""></div>									
									<h4>Instalação de Tomadas</h4>
									<p>Com a Estruturar Express, você tem a tomada instalada/trocada em até 10 min. e com a garantia de mais entende do assunto. </p>
								</div>
								<div class="col-md-4 market-grid express-item">
									<div><img src="<?= get_template_directory_uri() ?>/img/express/troca-lampada.jpg" class="" alt=""></div>
									
									<h4>Troca de Lampada bulbo (rosqueavel)</h4>
									<p>A economia advinda do uso de lampadas de LED pode chegar a 90%. Portanto se você tem uma dessas guardada, instalamos pra você num instante.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
					</div>
				</div> -->
		<!--MARKETS SERVED -->
<!--news-->
			<div id="materiais-educativos" class="news">
				<div class="container">
					<h2>Materiais Educativos</h2>
					<!--<div class="news-grids">
						<div class="col-md-4 new-grid">
							<div class="new-inner">
								<h4><a href="#">PASSOS PARA CONSTRUÇÃO DE UMA CASA</a></h4>
								<h5>E-book</h5>
								<p>Se você nunca construiu uma casa, ainda não sabe o que é ter dor de cabeça[risos]. Pensando nisso desenvolvemos esse ebook pra te mostrar os atalhos e você não esquecer de nada.</p>
							</div>
								<img src="<?= get_template_directory_uri() ?>/img/n7.jpg" class="img-responsive" alt="">	
						</div>
						<div class="col-md-4 new-grid">
							<div class="new-inner">
								<h4><a href="#">CUSTO DE INSTALAÇÃO ELÉTRICA</a></h4>
								<h5>Calculadora online</h5>
								<p>Se você pensa em construir uma nova casa, ou fazer uma reforma, use nossa calculadora para ter uma noção aproximada de quanto você irá investir.</p>
							</div>
								<img src="<?= get_template_directory_uri() ?>/img/n8.jpg" class="img-responsive" alt="">
						</div>	
						<div class="col-md-4 new-grid">
							<div class="new-inner">
								<h4><a href="#">GUIA DE OBTENÇÃO DE FINANCIAMENTO</a></h4>
								<h5>E-book</h5>
								<p>Vai construir mas está sem dinheiro? Aprenda nesse e-book as melhores linhas de crédito e opções de financiamento para construção cívil do mercado.</p>
							</div>
								<img src="<?= get_template_directory_uri() ?>/img/n9.jpg" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>-->
					<div class="news-grids">
						<div class="col-md-4 new-grid">
							<div class="new-inner">
								<h4><a target="_blank" href="https://www.oma.inf.br/guia/nobreak-para-que-serve-e-como-pode-salvar-sua-empresa/">A IMPORTÂNCIA DO NOBREAK</a></h4>
								<h5>Post</h5>
								<p>Descubra como o uso de Nobreak pode salvar a sua Empresa! </p>
							</div>
								<img src="<?= get_template_directory_uri() ?>/img/sem-luz.jpg" class="img-responsive" alt="">	
						</div>
						<div class="col-md-4 new-grid">
							<div class="new-inner">
								<h4><a href="http://www.estruturar.eng.br/Blog/vida-longa-ao-led/">VANTAGENS DA LÂMPADA LED</a></h4>
								<h5>Post</h5>
								<p>Você sabia que uma lâmpada a LED pode durar até 20 anos? Veja essa e outras vantagens!</p>
							</div>
								<img src="<?= get_template_directory_uri() ?>/img/vantagem-lampada-led.jpg" class="img-responsive" alt="">
						</div>	
						<div class="col-md-4 new-grid">
							<div class="new-inner">
								<h4><a href="http://www.estruturar.eng.br/Blog/automacao-residencial/">O QUE É AUTOMAÇÃO RESIDENCIAL</a></h4>
								<h5>Post</h5>
								<p>Já pensou em controlar toda a sua casa usando o seu Smartphone? Veja como isso é possível!</p>
							</div>
								<img src="<?= get_template_directory_uri() ?>/img/automacao.jpg" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--news-->
	</div>

<?php get_footer(); ?>
