	
	
		<!--Modal-->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">		
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Solicitar Orcamento</h4>
				</div>
				<div class="modal-body">
					<form method="post" id="test" action="//estruturar.eng.br/send-email.php"> 
				 <div class="register-top-grid">
					<h3>EM MINUTOS ENTRAREMOS EM CONTATO</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Primeiro Nome<label>*</label></span>
						<input name="first_name" type="text"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Ultimo nome<label>*</label></span>
						<input name="last_name" type="text"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Seu melhor E-mail<label>*</label></span>
						 <input name="email" type="text"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Telefone<label>*</label></span>
						 <input name="telefone" type="text"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Mensagem<label>*</label></span>
						 <textarea name="mensagem" width="100%" type="text"> </textarea>
					 </div>
					   <input name="acao" type="hidden" id="acao" value="btn_orcamento"/>
					 </div>
				</form>
				<div class="clearfix"> </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Nem pensar</button>
					<input type="submit" form="test" class="btn btn-primary" value="Solicitar Agora">
				</div>
			</div>
		</div>
	</div>

	<!--Fim <Modal--></Modal-->
 <!--detail-->
		<div class="details-section">
			<div class="container">
				<div class="details-grids">
					
					<div class="col-md-4 detail-grid">
						<ul>
							<li class="dot"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Av São Luiz, 1758, B. Herval Ijuí </li>
							<li class="mobile"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>55 3332-5594</li>
							<li class="mes"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:contato@estruturar.eng.br">contato@estruturar.eng.br</a></li>
							<li class="sign"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><a href="#">www.estruturar.eng.br</a></li>
						</ul>
					</div>
					<div class="col-md-4 detail-grid">
						<p>Quer ficar por dentro de todas as inovações que a Estruturar tras ao mercado? Cadastre-se em e receba diretamente no seu e-mail</p>
						<form>
							<h5>Newsletter<h5>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="col-md-4 detail-grid">
						<!--<div class="logo1">
						<h1><a href="//estruturar.eng.br">Estruturar</a></h1>
						</div>
						<p>Especialistas em Eletricidade </p>-->
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEstruturar%2F&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=957531277632091" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--detail-->
<!--footer-->
		<div class="footer-section">
						<div class="container">
							<div class="footer-top">
								<p> &copy; 2017 Estruturar. Todos os direitos reservados | Sendo escalada por <a target=“_blank” href="https://www.linkedin.com/in/joao-cardoso-goup/"><strong>GROWTHUP</strong> Marketing de Resultados</a></p>
									</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>	
			<?php wp_footer(); ?>
	</body>
</html>
