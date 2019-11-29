<?php $base_url = get_template_directory_uri() . "/"; ?>
<!doctype HTML>
<html class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K2PHVHR');</script>
		<!-- End Google Tag Manager -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
        <link href="<?= $base_url ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?= $base_url ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= $base_url ?>css/estruturar.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= $base_url ?>css/express.css" rel="stylesheet" type="text/css" media="all" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= $base_url ?>css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= $base_url ?>css/swipebox.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Scripts -->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<script src="<?= $base_url ?>js/jquery-1.11.1.min.js"></script>

		<script src="<?= $base_url ?>js/responsiveslides.min.js"></script>
		<script>
		    $(function () {
		      $("#slider").responsiveSlides({
		      	auto: true,
		      	nav: true,
		      	speed: 500,
		        namespace: "callbacks",
		        pager: true,
		      });
		    });
			
		  </script>
		  <script src="<?= $base_url ?>js/bootstrap.js"></script>
		<!--startsmothscrolling-->
		<script type="text/javascript" src="<?= $base_url ?>js/move-top.js"></script>
		<script type="text/javascript" src="<?= $base_url ?>js/easing.js"></script>
		<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
		</script>
		<!--endsmothscrolling-->

		<script src="<?= $base_url ?>js/jquery.swipebox.min.js"></script> 
		    <script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>

			



		
		
    <?php wp_head(); ?>	
	</head>
	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2PHVHR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<div class="header">	 
		<div class="container">
			<div class="header-top">
				<div class="logo">
					<h1><a href="<?= bloginfo('url') ?>"><img src="" /><img src="<?= $base_url ?>img/logo-estruturar.png" alt=""></a></h1>
				</div>
				<div class="buttons">
		            <button class="btn-solicitar-1"  type="button"  data-toggle="modal" data-target=".bs-example-modal-lg">Solicitar Orçamento</button>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-bottom">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
		    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php top_nav(); ?>
						</div>
						
					</div><!-- /.container-fluid -->
				</nav>
				
			</div>
		</div>
	</div>
	<script>
		let dropdownElementMenu = document.getElementsByClassName("menu-item-has-children")[0];
		let qtdItemDropdownActive =  dropdownElementMenu.getElementsByClassName("active").length
		if (qtdItemDropdownActive > 0){
			dropdownElementMenu.classList.add("active")
		}
		let url_atual = window.location.href;
		let dominio = url_atual.split("/")[2];
		let categoria = url_atual.split("/")[5];
		if (dominio == "localhost") categoria = url_atual.split("/")[5];
		else categoria = url_atual.split("/")[3];

		switch(categoria){
			case "blog": 
						
				$("#menu-item-109").addClass("active");
				break;
	
		}
		

	</script>
