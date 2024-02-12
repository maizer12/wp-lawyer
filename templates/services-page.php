<?php 
	/**
	 * Template Name: Сторінка послуг
	 */
?>

<?php get_header(); ?>

<main class="page services-page">
			<section class="banner banner-services">
				<div class="banner__container">
					<div class="banner__content">
						<h1 class="banner__title"><?php the_field('sec1_title'); ?></h1>
						<div class="banner-list banner-list-services">
							<p class="desc banner-list__item">
								<?php the_field('sec1_text'); ?>
							</p>
						</div>
						<p class="desc banner__text">
							<?php the_field('sec1_desc'); ?>
						</p>
						<button class="button open-form-all banner__btn">Замовити консультацію</button>
					</div>
					<picture>
						<source srcset="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/2.webp" type="image/webp"><img
							src="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/2.png" alt="photo" class="banner__img">
					</picture>
				</div>
			</section>
			<section class="prices">
				<h2 class="title price__container prices__title"><?php the_field('sec2_title'); ?></h2>
				<ul class="prices-list">
					<?php $table_header = get_field('sec2_group'); ?>
					<li class="prices-list__header">
						<div class="prices-list__container">
							<h5 class="prices-list__name">
								<span class="adapt-name">Послуга</span> 
								<span class="pc-name">
									<?php echo $table_header['sec2_group_title']; ?>
								</span>
								</h5>
							<h5 class="prices-list__name">
								<?php echo $table_header['sec2_group_title2']; ?>
							</h5>
						</div>
					</li>
					<?php 
						while(has_sub_field('sec2_repeat')){
							?>
							<li class="prices-list__item">
								<div class="prices-list__container">
									<p class="prices-list__text"><?php the_sub_field('sec2_servie_title'); ?></p>
									<p class="prices-list__text"><?php the_sub_field('sec2_servie_text'); ?></p>
								</div>
							</li>
					<?php
						}
					?>
					
				</ul>
			</section>
			<section class="services">
				<div class="services__container">
					<h2 class="title services__title">
						<?php the_field('sec2_title', 10);?>
					</h2>
					<ul class="services__items">
						
						<?php 
							$posts = get_posts(array(
								'numberposts' => 5,
								'category'    => 'services',
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true,
							));

							foreach($posts as $post){
						?>
						<li class="services-item">
							<div class="services-item__content">
								<div class="services-item__images"><img
										src="https://images.unsplash.com/photo-1508921912186-1d1a45ebb3c1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGhvdG98ZW58MHx8MHx8fDA%3D&w=1000&q=80"
										alt="services item">
									<p class="services-item__name"><?php the_title(); ?></p>
								</div><button class="button services-item__btn">Детальніше</button>
							</div>
							<div class="services-detail" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/images/services.jpg');">
								<div class="services-detail__content">
									<div class="services-detail__header">
										<h4 class="services-detail__name">Бухгалтерські послуги</h4><button
											class="services-detail__close"><img src="<?php bloginfo('template_url'); ?>/assets/images/close.svg" alt="close"></button>
									</div>
									<div class="services-detail__accordions">
										<?php 
											while(has_sub_field('service_repeat')){
										 ?> 
										 <div class="services-accordion">
											<div class="services-accordion__header"> 
												<?php the_sub_field('service_repeat_title'); ?>
												<svg width="14" height="14"
													viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_269_45)">
														<path
															d="M6.45372 3.11086L0.223657 9.34104C0.0794465 9.48514 1.71114e-08 9.6775 1.46655e-08 9.8826C1.22197e-08 10.0877 0.0794465 10.2801 0.223657 10.4242L0.682352 10.883C0.981244 11.1815 1.46703 11.1815 1.76547 10.883L6.9971 5.65133L12.2345 10.8888C12.3787 11.0329 12.571 11.1124 12.776 11.1124C12.9812 11.1124 13.1734 11.0329 13.3178 10.8888L13.7763 10.43C13.9206 10.2858 14 10.0935 14 9.8884C14 9.6833 13.9206 9.49094 13.7763 9.34685L7.54059 3.11086C7.39592 2.96643 7.20277 2.88709 6.99744 2.88755C6.79131 2.88709 6.59827 2.96643 6.45372 3.11086Z"
															fill="white" />
													</g>
													<defs>
														<clipPath>
															<rect width="14" height="14" fill="white" transform="translate(0 14) rotate(-90)" />
														</clipPath>
													</defs>
												</svg>
											</div>
											<ul class="services-accordion__list">
												<?php while(has_sub_field('service_repeat_items')){ ?>
													<li class="services-accordion__item">
														<a href="#" class="services-accordion__link">
															<?php the_sub_field('service_repeat_item'); ?>
														</a>
													</li>
												<?php }?>
											</ul>
										</div>
										<?php }  ?>
									</div>
								</div>
							</div>
						</li>
						<?php } 
							wp_reset_postdata();
						?>
						
					</ul>
				</div>
			</section>
			<?php include get_template_directory() . "/components/map.php"; ?>
</main>
<?php get_footer(); ?>