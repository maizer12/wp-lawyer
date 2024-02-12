<?php 
/** 
 * Template Name: Сторінка перемоги
 * Template Post Type: Page
 * */ 
?>

<?php get_header(); ?>
<main class="blog-page page">
			<section class="banner banner-blog">
				<div class="breadcrumbs">
					<ul class="breadcrumbs__container breadcrumbs__items">
						<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
						<?php custom_breadcrumbs(); ?>
					</ul>
				</div>
				<div class="banner__container">
					<div class="banner__content">
						<h1 class="banner-blog-title title">
							<?php echo single_term_title('', false) ?>
						</h1>
						<div class="banner-blog-buttons"><button class="banner-blog-buttons__btn">Новини</button> <button
								class="banner-blog-buttons__btn">Кейси</button></div>
					</div>
					<picture>
						<source srcset="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/3.webp" type="image/webp"><img
							src="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/3.png" alt="photo" class="banner__img">
					</picture>
				</div>
			</section>
			<section class="blog-items">
				<div class="blog-items__container">
					<ul class="blog-items__items">
						<li class="triumphs-items__item">
							<div class="triumphs-items__images">
								<h4 class="triumphs-items__name">Справа № 2</h4><img
									src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
									alt="triumphs" class="triumphs-items__img">
								<div class="triumphs-items__footer">
									<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
								</div>
							</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
						</li>
						<li class="triumphs-items__item">
							<div class="triumphs-items__images">
								<h4 class="triumphs-items__name">Справа № 2</h4><img
									src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
									alt="triumphs" class="triumphs-items__img">
								<div class="triumphs-items__footer">
									<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
								</div>
							</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
						</li>
						<li class="triumphs-items__item">
							<div class="triumphs-items__images">
								<h4 class="triumphs-items__name">Справа № 2</h4><img
									src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
									alt="triumphs" class="triumphs-items__img">
								<div class="triumphs-items__footer">
									<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
								</div>
							</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
						</li>
						<li class="triumphs-items__item">
							<div class="triumphs-items__images">
								<h4 class="triumphs-items__name">Справа № 2</h4><img
									src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
									alt="triumphs" class="triumphs-items__img">
								<div class="triumphs-items__footer">
									<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
								</div>
							</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
						</li>
						<li class="triumphs-items__item">
							<div class="triumphs-items__images">
								<h4 class="triumphs-items__name">Справа № 2</h4><img
									src="https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg"
									alt="triumphs" class="triumphs-items__img">
								<div class="triumphs-items__footer">
									<p class="triumphs-items__categori">Категорія: <span>Сімейне право</span></p>
								</div>
							</div><a href="#" class="button triumphs-items__btn">Детальніше</a>
						</li>
						<li class="triumphs-items__item">
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
					<div class="blog-items__pagination"><button class="button blog-items__prev">Попередня <svg width="24"
								height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M23.5557 8.05765C23.5557 7.82653 23.4834 7.63876 23.339 7.49431C23.1946 7.34987 23.0068 7.27765 22.7757 7.27765H3.62233L8.73566 2.16431C8.909 1.99098 8.99566 1.78876 8.99566 1.55765C8.99566 1.32653 8.909 1.13876 8.73566 0.994312C8.56233 0.849868 8.36011 0.777645 8.129 0.777645C7.89789 0.777645 7.69566 0.835423 7.52233 0.950979L1.02233 7.45098C0.906775 7.62431 0.848998 7.82653 0.848998 8.05765C0.848998 8.28876 0.906775 8.49098 1.02233 8.66431L7.52233 15.1643C7.69566 15.2799 7.89789 15.3376 8.129 15.3376C8.36011 15.3376 8.56233 15.2654 8.73566 15.121C8.909 14.9765 8.99566 14.7888 8.99566 14.5576C8.99566 14.3265 8.909 14.1243 8.73566 13.951L3.62233 8.83765H22.7757C23.0068 8.83765 23.1946 8.76542 23.339 8.62098C23.4834 8.47653 23.5557 8.28876 23.5557 8.05765Z"
									fill="#C2873F" />
							</svg></button>
						<ul class="blog-items__numbers">
							<li class="blog-items__num"><a href="#" class="blog-items__link active-pagin">1</a></li>
							<li class="blog-items__num"><a href="#" class="blog-items__link">2</a></li>
							<li class="blog-items__num"><a href="#" class="blog-items__link">3</a></li>
							<li class="blog-items__num"><a href="#" class="blog-items__link">4</a></li>
							<li class="blog-items__num"><a href="#" class="blog-items__link">...</a></li>
						</ul><button class="button blog-items__next">Наступна <svg width="26" height="26" viewBox="0 0 26 26"
								fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M1.44434 13.0576C1.44434 12.8265 1.51656 12.6388 1.661 12.4943C1.80545 12.3499 1.99322 12.2776 2.22434 12.2776H21.3777L16.2643 7.16431C16.091 6.99098 16.0043 6.78876 16.0043 6.55765C16.0043 6.32653 16.091 6.13876 16.2643 5.99431C16.4377 5.84987 16.6399 5.77765 16.871 5.77765C17.1021 5.77765 17.3043 5.83542 17.4777 5.95098L23.9777 12.451C24.0932 12.6243 24.151 12.8265 24.151 13.0576C24.151 13.2888 24.0932 13.491 23.9777 13.6643L17.4777 20.1643C17.3043 20.2799 17.1021 20.3376 16.871 20.3376C16.6399 20.3376 16.4377 20.2654 16.2643 20.121C16.091 19.9765 16.0043 19.7888 16.0043 19.5576C16.0043 19.3265 16.091 19.1243 16.2643 18.951L21.3777 13.8376H2.22434C1.99322 13.8376 1.80545 13.7654 1.661 13.621C1.51656 13.4765 1.44434 13.2888 1.44434 13.0576Z"
									fill="#C2873F" />
							</svg></button>
					</div>
				</div>
			</section>
	</main>
<?php get_footer(); ?>