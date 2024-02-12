<?php /*
* Template Name: Головна сторінка
*/?>


<?php get_header(); ?>
<main class="page">
			<section class="banner">
				<div class="banner__container">
					<div class="banner__content">
						<h1 class="banner__title"><?php the_field('sec1_title'); ?> </h1>
						<p class="banner__sub-title"><?php the_field('sec1_subtitle'); ?></p>
						<ul class="banner-list">
							<?php $group = get_field('sec1_items') ?>
							<li class="banner-list__name">
								<?php echo  $group['sec1_items_title'];?>
							</li>
							<?php
								$arr = $group['sec1_repeat'];
								foreach($arr as $value){
							?>
								<li class="desc banner-list__item"><?php echo $value['sec1_repeat_item'];?></li>
							<?php } ?>
						</ul>
						<p class="desc banner__text">
							<?php the_field('sec1_top_btn'); ?>
						</p>
						<button class="button open-form-all banner__btn">Замовити консультацію</button>
					</div>
					<picture>
						<source srcset="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/1.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/1.png"
							alt="photo" class="banner__img">
					</picture>
				</div>
			</section>
			<section class="services">
				<div class="services__container">
					<h2 class="title services__title">
						<?php the_field('sec2_title');?>
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
			<section class="about-me">
				<div class="about-me__container">
					<picture>
						<source srcset="<?php bloginfo('template_url'); ?>/assets/images/about-me.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/about-me.png" alt="about-me"
							class="about-me__img">
					</picture>
					<div class="about-me__content">
						<h2 class="title about-me__title"><?php the_field('sec3_title'); ?></h2>
						<p class="about-me__sub-title text">
							<?php the_field('sec3_desc'); ?>
						</p>
						<?php $group =  get_field('sec3_grup'); ?>
						<h5 class="about-me__name"><?php echo $group["sec3_grup_title"]; ?></h5>
						<ul class="about-me__list">
							<?php 
								$arr = $group['sec3_repeat'];
								foreach($arr as $key => $value) {
							?>
								<li class="about-me__item">
									<?php echo $key + 1 . ". " . $value['sec3_repeat_text']; ?>
								</li>
							<?php } ?>
						</ul>
						<div class="about-me__footer">
							<div class="about-me__signature"><svg width="166" height="169" viewBox="0 0 166 169" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M53.0244 40.0404C42.6928 77.5923 32.4079 115.336 20.1426 152.313C18.9845 155.805 17.4876 159.226 16.5244 162.775C16.1633 164.106 15.6793 168.061 15.3183 166.73C9.4548 145.125 3.07664 121.522 1.7974 99.2389C1.58456 95.5315 -0.191093 85.3788 2.3687 81.8876C4.22042 79.3622 10.019 80.1781 12.5887 80.2928C30.8941 81.1104 35.7853 109.98 40.8365 123.99C42.0944 127.479 42.3917 132.793 44.1374 135.983C46.2534 139.849 49.8102 129.125 51.6913 125.138C59.3794 108.843 66.2687 92.2113 72.7026 75.3809C77.3673 63.1785 84.3694 49.3062 85.0174 35.9577C85.2533 31.0974 80.2705 44.441 77.8444 48.6523C67.54 66.5386 55.3316 83.5215 42.6139 99.7493C41.0587 101.734 39.1174 106.833 37.2817 105.108C34.7686 102.745 41.01 82.0829 41.027 82.0152C45.9501 62.3171 51.6395 39.7354 61.7844 21.9236C64.7599 16.6993 64.7863 23.7435 64.8313 25.6235C65.1819 40.2702 62.8842 55.2319 59.3087 69.3845C58.6033 72.1766 51.8459 85.0148 53.0244 89.1599C53.2777 90.0508 54.6321 89.1318 54.8017 89.0323C60.4702 85.7094 65.7646 81.2124 70.9887 77.2946C87.7239 64.7441 105.025 49.4642 124.564 41.4438C134.775 37.2526 125.189 57.264 123.993 60.5813C122.946 63.4858 120.025 72.118 121.771 69.5759C133.798 52.0717 139.738 30.9098 155.669 16.5013C158.492 13.9474 165.66 4.06836 158.716 13.6945C157.641 15.1841 153.617 22.2314 156.367 16.31C158.835 10.9954 162.002 6.02116 165 1"
										stroke="white" stroke-width="2" stroke-linecap="round" />
								</svg></div>
							<div class="about-me__data">
								<h4 class="title about-me__data-name"><?php the_field('sec3_name', 10); ?> </h4>
								<p class="about-me__experience"><?php the_field('sec3_name_text', 10); ?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="real-triumphs">
				<div class="real-triumphs__container">
					<div class="triumphs-slider">
						<div class="triumphs-slider__content">
							<h4 class="title triumphs-slider__name"><?php the_field('sec4_title'); ?></h4>
							<p class="desc triumphs-slider__text">
								<?php the_field('sec4_desc'); ?>
							</p>
							<a href="<?php echo get_term_link(9); ?>" class="button triumphs-slider__button">
								Всі кейси
							</a>
						</div>
						<div class="triumphs-slider__footer"><button class="triumphs-slider__btn triumphs-slider__prev"><svg
									width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M34 18.0799C34 17.7599 33.9 17.4999 33.7 17.2999C33.5 17.0999 33.24 16.9999 32.92 16.9999H6.4L13.48 9.91991C13.72 9.67991 13.84 9.39991 13.84 9.07991C13.84 8.75991 13.72 8.49991 13.48 8.29991C13.24 8.09991 12.96 7.99991 12.64 7.99991C12.32 7.99991 12.04 8.07991 11.8 8.23991L2.8 17.2399C2.64 17.4799 2.56 17.7599 2.56 18.0799C2.56 18.3999 2.64 18.6799 2.8 18.9199L11.8 27.9199C12.04 28.0799 12.32 28.1599 12.64 28.1599C12.96 28.1599 13.24 28.0599 13.48 27.8599C13.72 27.6599 13.84 27.3999 13.84 27.0799C13.84 26.7599 13.72 26.4799 13.48 26.2399L6.4 19.1599H32.92C33.24 19.1599 33.5 19.0599 33.7 18.8599C33.9 18.6599 34 18.3999 34 18.0799Z"
										fill="#C2873F" />
								</svg></button>
							<div class="triumphs-slider__sum"></div><button class="triumphs-slider__btn triumphs-slider__next"><svg
									width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M2 18.0799C2 17.7599 2.1 17.4999 2.3 17.2999C2.5 17.0999 2.76 16.9999 3.08 16.9999H29.6L22.52 9.91991C22.28 9.67991 22.16 9.39991 22.16 9.07991C22.16 8.75991 22.28 8.49991 22.52 8.29991C22.76 8.09991 23.04 7.99991 23.36 7.99991C23.68 7.99991 23.96 8.07991 24.2 8.23991L33.2 17.2399C33.36 17.4799 33.44 17.7599 33.44 18.0799C33.44 18.3999 33.36 18.6799 33.2 18.9199L24.2 27.9199C23.96 28.0799 23.68 28.1599 23.36 28.1599C23.04 28.1599 22.76 28.0599 22.52 27.8599C22.28 27.6599 22.16 27.3999 22.16 27.0799C22.16 26.7599 22.28 26.4799 22.52 26.2399L29.6 19.1599H3.08C2.76 19.1599 2.5 19.0599 2.3 18.8599C2.1 18.6599 2 18.3999 2 18.0799Z"
										fill="#C2873F" />
								</svg></button>
						</div>
					</div>
					<div class="triumphs-items-swiper">
						<ul class="swiper-wrapper triumphs-items">
						<?php 
    $args = array(
        'post_type'      => 'victory',
        'posts_per_page' => 7,
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            //global $post;
					//print_r($post);
						$post_categories = get_the_terms( $post->ID, 'category' );
					print_r($post_categories);
if ( $post_categories && ! is_wp_error( $post_categories ) ) {
    foreach ( $post_categories as $category ) {
        echo $category->name . ', ';
    }
}
            ?>
            <li class="swiper-slide triumphs-items__item">
                <div class="triumphs-items__images">
                    <h4 class="triumphs-items__name"><?php the_title(); ?></h4>
                    <img src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
                        alt="triumphs" class="triumphs-items__img">
                    <div class="triumphs-items__footer">
                        <p class="triumphs-items__date">Термін: 2 місяці</p>
                        <p class="triumphs-items__categori">Категорія: <span></span></p>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="button triumphs-items__btn" target="_blank">
									Детальніше
								</a>
            </li>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo 'Записей не найдено.';
    }
?>

						</ul>
					</div><a href="#" class="button triumphs-slider__button btn-all-adapt" tabindex="0">Всі кейси</a>
				</div>
			</section>
			<section class="me-numbers">
				<div class="me-numbers__container">
					<h2 class="title me-numbers__title"><?php the_field('sec5_title'); ?></h2>
					<ul class="me-numbers__items">
						<?php 
							while(has_sub_field('sec5_statistics')) { 
						?>
							<li class="me-numbers__item">
								<h4 class="me-numbers__name"><?php the_sub_field('sec5_num'); ?></h4>
								<p class="me-numbers__desc"><?php the_sub_field('sec5_text'); ?></p>
							</li>
						<?php 
						}?>
					</ul>
				</div>
			</section>
			<section class="questions">
				<div class="questions__container">
					<h2 class="questions__title">Є питання чи хочете призначити зустріч?</h2>
					<p class="questions__sub-title">Ви можете поставити запитання через форму на сайті або зв'язатися з нами
						будь-яким зручним для Вас способом.</p>
					<div class="questions__footer"><button class="button open-form-all questions__btn">Замовити
							консультацію</button>
						<ul class="header-contacts">
							<li class="header-contacts__item"><a href="tel:380507207182" class="header-contacts__link">+38 (050)
									720-71-82</a></li>
							<li class="header-contacts__item"><a href="tel:380988824264" class="header-contacts__link">+38 (098)
									882-42-64</a></li>
						</ul>
						<ul class="socials">
							<li class="socials__item"><a href="#" class="socials__link"><svg width="36" height="36"
										viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_182_605)">
											<path
												d="M14.2232 24.8975C15.3868 25.5291 16.6969 25.862 18.0302 25.8625H18.0335C22.4241 25.8625 25.9982 22.3057 26 17.9342C26.0008 15.8157 25.1729 13.8237 23.6689 12.3252C22.1648 10.8266 20.1645 10.0009 18.0334 10C13.6424 10 10.0685 13.5565 10.0668 17.9279C10.0662 19.3253 10.4331 20.6892 11.1302 21.8916L10 26L14.2232 24.8975ZM18.0361 11.3391C19.8047 11.3397 21.4672 12.0261 22.7174 13.2716C23.9675 14.5172 24.6556 16.1729 24.6549 17.9337C24.6534 21.5672 21.683 24.5235 18.0335 24.5235H18.0308C16.8426 24.523 15.6773 24.2054 14.6607 23.6049L14.4189 23.4621L11.9128 24.1164L12.5817 21.6846L12.4242 21.4353C11.7614 20.3861 11.4113 19.1735 11.4119 17.9283C11.4133 14.2951 14.3837 11.3391 18.0361 11.3391Z"
												fill="#C2873F"></path>
											<path
												d="M18.1661 21.4287C18.6357 21.6472 19.0023 21.7776 19.2882 21.8753C19.7597 22.0367 20.1888 22.0139 20.528 21.9593C20.9061 21.8985 21.6925 21.4465 21.8566 20.9513C22.0205 20.4559 22.0205 20.0314 21.9713 19.943C21.9221 19.8546 21.7909 19.8015 21.5941 19.6953C21.3973 19.5892 20.4296 19.0764 20.2491 19.0055C20.0687 18.9348 19.9375 18.8995 19.8063 19.1116C19.6751 19.3239 19.2979 19.8015 19.183 19.943C19.0682 20.0845 18.9534 20.1022 18.7566 19.9961C18.5598 19.8899 17.9256 19.6661 17.1737 18.9437C16.5886 18.3815 16.1936 17.6872 16.0788 17.475C15.9639 17.2627 16.0665 17.148 16.1651 17.0423C16.2536 16.9473 16.3619 16.7946 16.4603 16.6709C16.5587 16.5471 16.5915 16.4586 16.6571 16.3172C16.7227 16.1756 16.6899 16.0518 16.6407 15.9457C16.5915 15.8396 16.1979 14.796 16.0338 14.3714C15.8741 13.958 15.7118 14.014 15.591 14.0074C15.4763 14.0013 15.345 14 15.2137 14C15.0825 14 14.8693 14.0531 14.6889 14.2653C14.5085 14.4776 14 14.9905 14 16.0341C14 17.0777 14.7053 18.0858 14.8037 18.2273C14.902 18.3688 16.1915 20.5103 18.1661 21.4287Z"
												fill="#C2873F"></path>
											<path d="M0 0V36H36V0H0ZM33.7732 33.7732H2.2268V2.2268H33.7732V33.7732Z" fill="#C2873F"></path>
										</g>
										<defs>
											<clipPath>
												<rect width="36" height="36" fill="white"></rect>
											</clipPath>
										</defs>
									</svg></a></li>
							<li class="socials__item"><a href="#" class="socials__link"><svg width="36" height="36"
										viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_182_610)">
											<path
												d="M14.8018 21.1982C16.7191 23.1155 19.061 24.6046 21.7781 25.7113C23.6646 26.4798 25.2578 25.6773 25.9094 23.7399C26.0263 23.3921 26.0343 23.0516 25.9086 22.7098C25.6047 21.8836 22.7248 19.7913 21.8632 19.7443C21.2023 19.7085 20.8445 20.1574 20.5419 20.6033C19.97 21.4449 19.2451 21.4497 18.4364 21.09C17.6228 20.7278 16.9108 20.2634 16.3237 19.6763C15.7364 19.089 15.272 18.377 14.91 17.5634C14.5501 16.7547 14.5549 16.03 15.3967 15.4579C15.8424 15.1555 16.2916 14.7977 16.2555 14.1368C16.2087 13.2752 14.1164 10.3953 13.2902 10.0914C12.9483 9.96567 12.6077 9.97371 12.26 10.0906C10.3225 10.7422 9.52023 12.3354 10.2887 14.222C11.3954 16.939 12.8846 19.2809 14.8018 21.1982Z"
												fill="#C2873F"></path>
											<path
												d="M18.6207 11.1466C19.0295 11.0811 19.4496 11.0664 19.8686 11.1033C21.1601 11.2161 22.389 11.8012 23.329 12.7502C24.2409 13.6708 24.8019 14.8613 24.9084 16.1023C24.9448 16.5262 24.9272 16.9514 24.8559 17.3656C24.8052 17.6602 25.0009 17.9407 25.2927 17.9919C25.3239 17.9974 25.3548 18 25.3851 18C25.6413 18 25.8678 17.8144 25.9132 17.551C26.0004 17.0447 26.0219 16.5258 25.9776 16.0086C25.8493 14.514 25.1781 13.0848 24.088 11.9842C22.9695 10.855 21.5041 10.1589 19.9614 10.0236C19.4553 9.9795 18.9477 9.99723 18.4526 10.0764C18.16 10.1234 17.9604 10.4009 18.0067 10.6964C18.053 10.9918 18.3277 11.1933 18.6207 11.1466Z"
												fill="#C2873F"></path>
											<path
												d="M23.3474 17.9956C23.3711 17.9985 23.3946 18 23.418 18C23.6925 18 23.9307 17.7904 23.9664 17.5036C24.0042 17.1964 24.0102 16.8824 23.9839 16.5705C23.8889 15.4465 23.3861 14.3652 22.5683 13.5259C21.7212 12.6565 20.6164 12.1208 19.4571 12.0177C19.131 11.9888 18.8034 11.9953 18.4834 12.0372C18.1802 12.0769 17.9658 12.3615 18.0045 12.6726C18.0432 12.9838 18.3214 13.2036 18.6237 13.1641C18.8656 13.1324 19.1139 13.1275 19.3616 13.1495C20.2616 13.2296 21.1225 13.6484 21.7855 14.3291C22.4194 14.9797 22.8086 15.8106 22.8811 16.6685C22.9006 16.9003 22.8963 17.133 22.8683 17.3604C22.8296 17.6716 23.0443 17.9558 23.3474 17.9956Z"
												fill="#C2873F"></path>
											<path
												d="M21.5233 16.9988C21.5335 16.9997 21.5436 17 21.5538 17C21.7848 17 21.9796 16.8171 21.9955 16.5782C22.0024 16.4747 22.0014 16.3685 21.9923 16.2625C21.8939 15.1032 20.8922 14.1131 19.7118 14.0087C19.6155 14.0002 19.519 13.998 19.4251 14.0018C19.1804 14.0121 18.9903 14.2228 19.0004 14.4724C19.0106 14.7222 19.2173 14.9159 19.4615 14.9058C19.5181 14.9034 19.5766 14.905 19.6353 14.9102C20.374 14.9755 21.049 15.6307 21.1093 16.3408C21.1144 16.4003 21.1151 16.4596 21.1113 16.5168C21.0945 16.7661 21.279 16.982 21.5233 16.9988Z"
												fill="#C2873F"></path>
											<path d="M0 0V36H36V0H0ZM33.7732 33.7732H2.2268V2.2268H33.7732V33.7732Z" fill="#C2873F"></path>
										</g>
										<defs>
											<clipPath>
												<rect width="36" height="36" fill="white"></rect>
											</clipPath>
										</defs>
									</svg></a></li>
							<li class="socials__item"><a href="#" class="socials__link"><svg width="36" height="36"
										viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_182_616)">
											<path
												d="M10.2825 17.6719L13.9694 19.2523L15.3964 24.5233C15.4877 24.8608 15.847 24.9855 16.0855 24.7615L18.1406 22.8374C18.3561 22.6357 18.6628 22.6257 18.8878 22.8135L22.5946 25.9043C22.8497 26.1172 23.2112 25.9567 23.2753 25.6026L25.9906 10.6015C26.0604 10.2146 25.7295 9.89189 25.4088 10.0343L10.2784 16.7383C9.90494 16.9037 9.90812 17.5108 10.2825 17.6719ZM15.1664 18.4112L22.3716 13.3143C22.5009 13.2229 22.6342 13.4241 22.5229 13.5426L16.5767 19.8911C16.3676 20.1144 16.2329 20.4136 16.1946 20.7381L15.9922 22.4623C15.9652 22.6925 15.6837 22.7153 15.6283 22.4924L14.8494 19.3485C14.7603 18.99 14.8902 18.6069 15.1664 18.4112Z"
												fill="#C2873F"></path>
											<path d="M0 0V36H36V0H0ZM33.7732 33.7732H2.2268V2.2268H33.7732V33.7732Z" fill="#C2873F"></path>
										</g>
										<defs>
											<clipPath>
												<rect width="36" height="36" fill="white"></rect>
											</clipPath>
										</defs>
									</svg></a></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="blog">
				<div class="blog__container">
					<h2 class="title blog__title">Блог</h2>
					<div class="blog-slider">
						<div class="blog-slider__swiper">
							<ul class="swiper-wrapper blog-slider__items">
								<li class="swiper-slide triumphs-items__item">
									<div class="triumphs-items__images">
										<h4 class="triumphs-items__name">Справа № 2</h4><img
											src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
											alt="triumphs" class="triumphs-items__img">
										<div class="triumphs-items__footer">
											<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
										</div>
									</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
								</li>
								<li class="swiper-slide triumphs-items__item">
									<div class="triumphs-items__images">
										<h4 class="triumphs-items__name">Справа № 2</h4><img
											src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
											alt="triumphs" class="triumphs-items__img">
										<div class="triumphs-items__footer">
											<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
										</div>
									</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
								</li>
								<li class="swiper-slide triumphs-items__item">
									<div class="triumphs-items__images">
										<h4 class="triumphs-items__name">Справа № 2</h4><img
											src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
											alt="triumphs" class="triumphs-items__img">
										<div class="triumphs-items__footer">
											<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
										</div>
									</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
								</li>
								<li class="swiper-slide triumphs-items__item">
									<div class="triumphs-items__images">
										<h4 class="triumphs-items__name">Справа № 2</h4><img
											src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
											alt="triumphs" class="triumphs-items__img">
										<div class="triumphs-items__footer">
											<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
										</div>
									</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
								</li>
							</ul>
						</div>
						<div class="blog-slider__buttons"><button class="blog-slider__button swiper-blog-prev"><svg width="36"
									height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M34 18.0802C34 17.7602 33.9 17.5002 33.7 17.3002C33.5 17.1002 33.24 17.0002 32.92 17.0002H6.4L13.48 9.92015C13.72 9.68015 13.84 9.40015 13.84 9.08015C13.84 8.76015 13.72 8.50015 13.48 8.30015C13.24 8.10015 12.96 8.00015 12.64 8.00015C12.32 8.00015 12.04 8.08015 11.8 8.24015L2.8 17.2402C2.64 17.4802 2.56 17.7602 2.56 18.0802C2.56 18.4002 2.64 18.6802 2.8 18.9202L11.8 27.9202C12.04 28.0802 12.32 28.1602 12.64 28.1602C12.96 28.1602 13.24 28.0602 13.48 27.8602C13.72 27.6602 13.84 27.4002 13.84 27.0802C13.84 26.7602 13.72 26.4802 13.48 26.2402L6.4 19.1602H32.92C33.24 19.1602 33.5 19.0602 33.7 18.8602C33.9 18.6602 34 18.4002 34 18.0802Z"
										fill="white" />
								</svg></button>
							<div class="blog-slider__numbers"></div><button class="blog-slider__button swiper-blog-next"><svg
									width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M2 18.0802C2 17.7602 2.1 17.5002 2.3 17.3002C2.5 17.1002 2.76 17.0002 3.08 17.0002H29.6L22.52 9.92015C22.28 9.68015 22.16 9.40015 22.16 9.08015C22.16 8.76015 22.28 8.50015 22.52 8.30015C22.76 8.10015 23.04 8.00015 23.36 8.00015C23.68 8.00015 23.96 8.08015 24.2 8.24015L33.2 17.2402C33.36 17.4802 33.44 17.7602 33.44 18.0802C33.44 18.4002 33.36 18.6802 33.2 18.9202L24.2 27.9202C23.96 28.0802 23.68 28.1602 23.36 28.1602C23.04 28.1602 22.76 28.0602 22.52 27.8602C22.28 27.6602 22.16 27.4002 22.16 27.0802C22.16 26.7602 22.28 26.4802 22.52 26.2402L29.6 19.1602H3.08C2.76 19.1602 2.5 19.0602 2.3 18.8602C2.1 18.6602 2 18.4002 2 18.0802Z"
										fill="white" />
								</svg></button>
						</div>
					</div><a href="#" class="button triumphs-slider__button adapt-blog-btn" tabindex="0">Всі новини</a>
				</div>
			</section>
			<section class="popup">
				<div class="popup__inner"><button class="popup__close"><svg width="54" height="54" viewBox="0 0 54 54"
							fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M54 5.69226L48.3077 0L27 21.3077L5.69226 0L0 5.69226L21.3077 27L0 48.3077L5.69226 54L27 32.6923L48.3077 54L54 48.3077L32.6923 27L54 5.69226Z"
								fill="#C2873F" />
						</svg></button>
					<h3 class="popup__title">Працюючи з клієнтом залишаюсь на зв’язку 24/7</h3>
					<div class="popup-window">
						<h4 class="popup-window__name">Опишіть задачу</h4><textarea cols="30" rows="10" placeholder="Опишіть задачу"
							class="popup-window__text-area"></textarea>
						<h4 class="popup-window__name">Номер телефона</h4>
						<form class="popup-window__phone"><input class="form-control" type="number"
								onkeypress="if(this.value.length==11) return false;" id="phone" name="page_contact_phone"> <button
								class="popup-window__btn-tell"><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M2.74048 0.806662C3.31565 0.219994 3.98231 -0.0466728 4.74048 0.00666046C5.49865 0.0599937 6.11303 0.40666 6.58362 1.04666L9.25029 4.48666C9.51173 4.80666 9.68166 5.16666 9.76009 5.56666C9.83852 5.96666 9.82545 6.35333 9.72088 6.72666L8.93656 10.0067C8.83199 10.38 8.91042 10.7 9.17186 10.9667L12.7797 14.6467C13.0411 14.9133 13.3549 14.9933 13.7209 14.8867L16.9366 14.0867C17.3026 13.98 17.6817 13.9667 18.0738 14.0467C18.466 14.1267 18.8189 14.3 19.1326 14.5667L22.5052 17.2867C23.1326 17.7667 23.4725 18.3933 23.5248 19.1667C23.5771 19.94 23.3156 20.62 22.7405 21.2067L21.2503 22.7267C20.6751 23.3133 20.0085 23.7 19.2503 23.8867C18.4921 24.0733 17.747 24.0333 17.015 23.7667C13.0934 22.38 9.65552 20.18 6.70127 17.1667C3.74702 14.1533 1.59016 10.6467 0.230681 6.64666C-0.0307574 5.89999 -0.0699731 5.13999 0.113033 4.36666C0.29604 3.59333 0.675125 2.91333 1.25029 2.32666L2.74048 0.806662ZM18.5836 0.966661C18.7405 0.806662 18.9235 0.72666 19.1326 0.72666C19.3418 0.72666 19.4987 0.806662 19.6032 0.966661L23.2895 4.72666C23.4464 4.88666 23.5248 5.07333 23.5248 5.28666C23.5248 5.49999 23.4464 5.65999 23.2895 5.76666L19.6032 9.52666C19.4987 9.68666 19.3418 9.76666 19.1326 9.76666C18.9235 9.76666 18.7405 9.68666 18.5836 9.52666C18.4268 9.36666 18.3483 9.19333 18.3483 9.00666C18.3483 8.81999 18.4268 8.64666 18.5836 8.48666L21.015 6.00666H13.9562C13.747 6.00666 13.5771 5.93999 13.4464 5.80666C13.3156 5.67333 13.2503 5.49999 13.2503 5.28666C13.2503 5.07333 13.3156 4.88666 13.4464 4.72666C13.5771 4.56666 13.747 4.48666 13.9562 4.48666H21.015L18.5836 2.00666C18.4268 1.89999 18.3483 1.73999 18.3483 1.52666C18.3483 1.31333 18.4268 1.12666 18.5836 0.966661Z"
										fill="white" />
								</svg> Подзвонити мені</button></form>
						<h4 class="popup-window__name">Напишіть нам</h4>
						<ul class="popup-socials">
							<li class="popup-socials__item"><a href="#" class="popup-socials__link"><svg width="36" height="36"
										viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_267_1390)">
											<path
												d="M10.2825 17.6719L13.9694 19.2523L15.3964 24.5233C15.4877 24.8608 15.847 24.9855 16.0855 24.7615L18.1406 22.8374C18.3561 22.6357 18.6628 22.6257 18.8878 22.8135L22.5946 25.9043C22.8497 26.1172 23.2112 25.9567 23.2753 25.6026L25.9906 10.6015C26.0604 10.2146 25.7295 9.89189 25.4088 10.0343L10.2784 16.7383C9.90494 16.9037 9.90812 17.5108 10.2825 17.6719ZM15.1664 18.4112L22.3716 13.3143C22.5009 13.2229 22.6342 13.4241 22.5229 13.5426L16.5767 19.8911C16.3676 20.1144 16.2329 20.4136 16.1946 20.7381L15.9922 22.4623C15.9652 22.6925 15.6837 22.7153 15.6283 22.4924L14.8494 19.3485C14.7603 18.99 14.8902 18.6069 15.1664 18.4112Z"
												fill="#C2873F" />
											<path d="M0 0V36H36V0H0ZM33.7732 33.7732H2.2268V2.2268H33.7732V33.7732Z" fill="#C2873F" />
										</g>
										<defs>
											<clipPath id="clip0_267_1390">
												<rect width="36" height="36" fill="white" />
											</clipPath>
										</defs>
									</svg> Telegram</a></li>
							<li class="popup-socials__item"><a href="#" class="popup-socials__link"><svg width="36" height="36"
										viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_267_1384)">
											<path
												d="M14.8018 21.1982C16.7191 23.1155 19.061 24.6046 21.7781 25.7113C23.6646 26.4798 25.2578 25.6773 25.9094 23.7399C26.0263 23.3921 26.0343 23.0516 25.9086 22.7098C25.6047 21.8836 22.7248 19.7913 21.8632 19.7443C21.2023 19.7085 20.8445 20.1574 20.5419 20.6033C19.97 21.4449 19.2451 21.4497 18.4364 21.09C17.6228 20.7278 16.9108 20.2634 16.3237 19.6763C15.7364 19.089 15.272 18.377 14.91 17.5634C14.5501 16.7547 14.5549 16.03 15.3967 15.4579C15.8424 15.1555 16.2916 14.7977 16.2555 14.1368C16.2087 13.2752 14.1164 10.3953 13.2902 10.0914C12.9483 9.96567 12.6077 9.97371 12.26 10.0906C10.3225 10.7422 9.52023 12.3354 10.2887 14.222C11.3954 16.939 12.8846 19.2809 14.8018 21.1982Z"
												fill="#C2873F" />
											<path
												d="M18.6207 11.1466C19.0295 11.0811 19.4496 11.0664 19.8686 11.1033C21.1601 11.2161 22.389 11.8012 23.329 12.7502C24.2409 13.6708 24.8019 14.8613 24.9084 16.1023C24.9448 16.5262 24.9272 16.9514 24.8559 17.3656C24.8052 17.6602 25.0009 17.9407 25.2927 17.9919C25.3239 17.9974 25.3548 18 25.3851 18C25.6413 18 25.8678 17.8144 25.9132 17.551C26.0004 17.0447 26.0219 16.5258 25.9776 16.0086C25.8493 14.514 25.1781 13.0848 24.088 11.9842C22.9695 10.855 21.5041 10.1589 19.9614 10.0236C19.4553 9.9795 18.9477 9.99723 18.4526 10.0764C18.16 10.1234 17.9604 10.4009 18.0067 10.6964C18.053 10.9918 18.3277 11.1933 18.6207 11.1466Z"
												fill="#C2873F" />
											<path
												d="M23.3474 17.9956C23.3711 17.9985 23.3946 18 23.418 18C23.6925 18 23.9307 17.7904 23.9664 17.5036C24.0042 17.1964 24.0102 16.8824 23.9839 16.5705C23.8889 15.4465 23.3861 14.3652 22.5683 13.5259C21.7212 12.6565 20.6164 12.1208 19.4571 12.0177C19.131 11.9888 18.8034 11.9953 18.4834 12.0372C18.1802 12.0769 17.9658 12.3615 18.0045 12.6726C18.0432 12.9838 18.3214 13.2036 18.6237 13.1641C18.8656 13.1324 19.1139 13.1275 19.3616 13.1495C20.2616 13.2296 21.1225 13.6484 21.7855 14.3291C22.4194 14.9797 22.8086 15.8106 22.8811 16.6685C22.9006 16.9003 22.8963 17.133 22.8683 17.3604C22.8296 17.6716 23.0443 17.9558 23.3474 17.9956Z"
												fill="#C2873F" />
											<path
												d="M21.5233 16.9988C21.5335 16.9997 21.5436 17 21.5538 17C21.7848 17 21.9796 16.8171 21.9955 16.5782C22.0024 16.4747 22.0014 16.3685 21.9923 16.2625C21.8939 15.1032 20.8922 14.1131 19.7118 14.0087C19.6155 14.0002 19.519 13.998 19.4251 14.0018C19.1804 14.0121 18.9903 14.2228 19.0004 14.4724C19.0106 14.7222 19.2173 14.9159 19.4615 14.9058C19.5181 14.9034 19.5766 14.905 19.6353 14.9102C20.374 14.9755 21.049 15.6307 21.1093 16.3408C21.1144 16.4003 21.1151 16.4596 21.1113 16.5168C21.0945 16.7661 21.279 16.982 21.5233 16.9988Z"
												fill="#C2873F" />
											<path d="M0 0V36H36V0H0ZM33.7732 33.7732H2.2268V2.2268H33.7732V33.7732Z" fill="#C2873F" />
										</g>
										<defs>
											<clipPath id="clip0_267_1384">
												<rect width="36" height="36" fill="white" />
											</clipPath>
										</defs>
									</svg> Viber</a></li>
							<li class="popup-socials__item"><a href="#" class="popup-socials__link"><svg width="36" height="36"
										viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_267_1379)">
											<path
												d="M14.2232 24.8975C15.3868 25.5291 16.6969 25.862 18.0302 25.8625H18.0335C22.4241 25.8625 25.9982 22.3057 26 17.9342C26.0008 15.8157 25.1729 13.8237 23.6689 12.3252C22.1648 10.8266 20.1645 10.0009 18.0334 10C13.6424 10 10.0685 13.5565 10.0668 17.9279C10.0662 19.3253 10.4331 20.6892 11.1302 21.8916L10 26L14.2232 24.8975ZM18.0361 11.3391C19.8047 11.3397 21.4672 12.0261 22.7174 13.2716C23.9675 14.5172 24.6556 16.1729 24.6549 17.9337C24.6534 21.5672 21.683 24.5235 18.0335 24.5235H18.0308C16.8426 24.523 15.6773 24.2054 14.6607 23.6049L14.4189 23.4621L11.9128 24.1164L12.5817 21.6846L12.4242 21.4353C11.7614 20.3861 11.4113 19.1735 11.4119 17.9283C11.4133 14.2951 14.3837 11.3391 18.0361 11.3391Z"
												fill="#C2873F" />
											<path
												d="M18.1661 21.4287C18.6357 21.6472 19.0023 21.7776 19.2882 21.8753C19.7597 22.0367 20.1888 22.0139 20.528 21.9593C20.9061 21.8985 21.6925 21.4465 21.8566 20.9513C22.0205 20.4559 22.0205 20.0314 21.9713 19.943C21.9221 19.8546 21.7909 19.8015 21.5941 19.6953C21.3973 19.5892 20.4296 19.0764 20.2491 19.0055C20.0687 18.9348 19.9375 18.8995 19.8063 19.1116C19.6751 19.3239 19.2979 19.8015 19.183 19.943C19.0682 20.0845 18.9534 20.1022 18.7566 19.9961C18.5598 19.8899 17.9256 19.6661 17.1737 18.9437C16.5886 18.3815 16.1936 17.6872 16.0788 17.475C15.9639 17.2627 16.0665 17.148 16.1651 17.0423C16.2536 16.9473 16.3619 16.7946 16.4603 16.6709C16.5587 16.5471 16.5915 16.4586 16.6571 16.3172C16.7227 16.1756 16.6899 16.0518 16.6407 15.9457C16.5915 15.8396 16.1979 14.796 16.0338 14.3714C15.8741 13.958 15.7118 14.014 15.591 14.0074C15.4763 14.0013 15.345 14 15.2137 14C15.0825 14 14.8693 14.0531 14.6889 14.2653C14.5085 14.4776 14 14.9905 14 16.0341C14 17.0777 14.7053 18.0858 14.8037 18.2273C14.902 18.3688 16.1915 20.5103 18.1661 21.4287Z"
												fill="#C2873F" />
											<path d="M0 0V36H36V0H0ZM33.7732 33.7732H2.2268V2.2268H33.7732V33.7732Z" fill="#C2873F" />
										</g>
										<defs>
											<clipPath id="clip0_267_1379">
												<rect width="36" height="36" fill="white" />
											</clipPath>
										</defs>
									</svg> WhatsApp</a></li>
						</ul>
						<h4 class="popup-window__name-min">Адреса</h4>
						<address class="popup-window__text popup-window-adres">вулиця Олександрівська, д.29, Запоріжжя, Запорізька
							область, 69063</address>
						<div class="popup-window__footer">
							<div class="popup-window__column">
								<h4 class="popup-window__name-min">E-mail</h4><a href="mailto:info@example.com"
									class="popup-window__text">info@example.com</a>
							</div>
							<div class="popup-window__column">
								<h4 class="popup-window__name-min">Номер телефону</h4>
								<ul class="popup-window__numbers">
									<li class="popup-window__number"><a href="tel:+380507207182" class="popup-window__text">+38 (050)
											720-71-82</a></li>
									<li class="popup-window__number"><a href="tel:+380507207182" class="popup-window__text">+38 (050)
											720-71-82</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
</main>
<?php get_footer(); ?>