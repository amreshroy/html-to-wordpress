<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
        <header>
			<!-- start top bar -->
			<?php 
				$top_bar = get_option('my_neuron');
				$top_bar_mobile = $top_bar['opt-fieldset-top-bar-mobile'];
				$top_bar_email = $top_bar['opt-fieldset-top-bar-email'];
				$mobile_link = implode(" ", $top_bar_mobile['opt-mobile-link']);
				$email_link = implode(" ", $top_bar_email['opt-email-link']);
				$top_bar_socials = $top_bar['opt-fieldset-social-icon'];
				if (!empty( $top_bar_socials )){
				$socials = $top_bar_socials['opt-group-top-bar-socials'];
				}
			?>

			<?php if ($top_bar['opt-switcher-top-bar'] == false) : ?>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">
								<p>
									<i class="<?php echo $top_bar_mobile['opt-icon-mobile']; ?>"></i>
									<a href="<?php echo $mobile_link; ?>"><?php echo $top_bar_mobile['opt-top-bar-mobile-no']; ?></a>
								</p>
								<p>
									<i class="<?php echo $top_bar_email['opt-icon-email']; ?>"></i>
									<a href="<?php echo $email_link; ?>"><?php echo $top_bar_email['opt-top-bar-email']; ?></a>
								</p>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						
						<div class="col-sm-4">
							<div class="social-icon">
								<?php if(!empty ( $socials )) : foreach ($socials as $social) : 
									$social_link = implode(" ", $social['opt-social-link']);
								?>
								<ul>
									<li><a href="<?php echo $social_link; ?>"><i class="<?php echo $social['opt-social-icon']; ?>"></i></a></li>
								</ul>
								<?php endforeach; endif; ?>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->
			<?php endif; ?>
			
	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">
	            <!-- Start Top Search -->
	            <div class="top-search">
	                <div class="container">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                        <input type="text" class="form-control" placeholder="Search">
	                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
	                    </div>
	                </div>
	            </div>
	            <!-- End Top Search -->

	            <div class="container">
	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_class'     => 'nav navbar-nav navbar-right',
								)
							);
						?>
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header> <!-- end header -->