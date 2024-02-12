
<?php get_header(); ?>
<main class="blog-page page">
			<section class="article-banner banner banner-blog">
				<div class="breadcrumbs">
					<ul class="breadcrumbs__container breadcrumbs__items">
						<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
						<?php custom_breadcrumbs(); ?>
					</ul>
				</div>
				<div class="banner__container">
					<div class="banner__content">
						<h1 class="banner-blog-title title"><?php the_title(); ?></h1>
					</div>
					<picture>
						<source srcset="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/3.webp" type="image/webp"><img
							src="<?php bloginfo('template_url'); ?>/assets/images/banner/photo/3.png" alt="photo"
							class="article-banner-img banner__img">
					</picture>
				</div>
			</section>
			<div class="article-page">
				<div class="article-page__container">
					<div class="article-page__content">
						<div class="article-page__images">
							<picture>
								<source srcset="<?php bloginfo('template_url'); ?>/assets/images/blog-photo.webp" type="image/webp"><img
									src="<?php bloginfo('template_url'); ?>/assets/images/blog-photo.jpg" alt="#"
									class="article-page__img">
							</picture>
						</div>
						<p class="article-page__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							Lorem Ipsum has been the <span>industry’s standard dummy</span> text ever since the 1500s, when an unknown
							printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
							centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
							popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
							recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a
							long established fact that a reader will be distracted by the readable content of a page when looking at
							its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution <a
								href="#">letraset sheets</a> of letters, as opposed to using ‘Content here, content here’, point of
							using Lorem Ipsum is that it has a more-or-less making it look like readable content of a page when
							looking at its layout English.</p>
						<div class="article-page__footer">
							<div class="article-page__buttons"><a href="#" class="article-page__button">Новини</a> <a href="#"
									class="article-page__button">Податки та інше</a></div>
							<ul class="footer-socials__items article-page__socials">
								<li class="footer-socials__item"><a href="#" class="footer-socials__link"><svg width="16" height="16"
											viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_160_413)">
												<path
													d="M15.5 8.42988C15.5 7.06322 15.1667 5.80488 14.5 4.65488C13.8333 3.50488 12.925 2.58822 11.775 1.90488C10.625 1.22155 9.36667 0.879883 8 0.879883C6.63333 0.879883 5.375 1.22155 4.225 1.90488C3.075 2.58822 2.16667 3.50488 1.5 4.65488C0.833333 5.80488 0.5 7.06322 0.5 8.42988C0.5 9.66322 0.775 10.8132 1.325 11.8799C1.875 12.9465 2.63333 13.8299 3.6 14.5299C4.56667 15.2299 5.65 15.6799 6.85 15.8799V10.6299H4.9V8.42988H6.85V6.77988C6.85 5.84655 7.1 5.12155 7.6 4.60488C8.1 4.08822 8.78333 3.82988 9.65 3.82988C9.98333 3.82988 10.3667 3.84655 10.8 3.87988L11.35 3.97988V5.82988H10.4C9.96667 5.82988 9.65 5.93822 9.45 6.15488C9.25 6.37155 9.15 6.66322 9.15 7.02988V8.42988H11.25L10.9 10.6299H9.15V15.8799C10.35 15.6799 11.4333 15.2299 12.4 14.5299C13.3667 13.8299 14.125 12.9465 14.675 11.8799C15.225 10.8132 15.5 9.66322 15.5 8.42988Z"
													fill="#C2873F"></path>
											</g>
											<defs>
												<clipPath id="clip0_160_413">
													<rect width="15" height="15" fill="white" transform="matrix(1 0 0 -1 0.5 15.8799)"></rect>
												</clipPath>
											</defs>
										</svg></a></li>
								<li class="footer-socials__item"><a href="#" class="footer-socials__link"><svg width="16" height="16"
											viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_368_8)">
												<path
													d="M8 0.879883C6.6 0.879883 5.55833 0.896549 4.875 0.929883C4.19167 0.963216 3.6 1.07988 3.1 1.27988C2.6 1.47988 2.15833 1.77155 1.775 2.15488C1.39167 2.53822 1.1 2.97988 0.9 3.47988C0.7 3.97988 0.583333 4.57155 0.55 5.25488C0.516667 5.93822 0.5 6.97988 0.5 8.37988C0.5 9.77988 0.516667 10.8215 0.55 11.5049C0.583333 12.1882 0.7 12.7799 0.9 13.2799C1.1 13.7799 1.39167 14.2215 1.775 14.6049C2.15833 14.9882 2.6 15.2799 3.1 15.4799C3.6 15.6799 4.19167 15.7965 4.875 15.8299C5.55833 15.8632 6.6 15.8799 8 15.8799C9.4 15.8799 10.4417 15.8632 11.125 15.8299C11.8083 15.7965 12.4 15.6799 12.9 15.4799C13.4 15.2799 13.8417 14.9882 14.225 14.6049C14.6083 14.2215 14.9 13.7799 15.1 13.2799C15.3 12.7799 15.4167 12.1882 15.45 11.5049C15.4833 10.8215 15.5 9.77988 15.5 8.37988C15.5 6.97988 15.4833 5.93822 15.45 5.25488C15.4167 4.57155 15.3 3.97988 15.1 3.47988C14.9 2.97988 14.6083 2.53822 14.225 2.15488C13.8417 1.77155 13.4 1.47988 12.9 1.27988C12.4 1.07988 11.8083 0.963216 11.125 0.929883C10.4417 0.896549 9.4 0.879883 8 0.879883ZM7.35 2.22988H8C9.4 2.22988 10.4167 2.24655 11.05 2.27988C11.5833 2.31322 12.025 2.39655 12.375 2.52988C12.725 2.66322 13.025 2.85488 13.275 3.10488C13.525 3.35488 13.7167 3.65488 13.85 4.00488C13.9833 4.35488 14.0667 4.79655 14.1 5.32988C14.1333 5.96322 14.15 6.97988 14.15 8.37988C14.15 9.77988 14.1333 10.7965 14.1 11.4299C14.0667 11.9632 13.9833 12.4049 13.85 12.7549C13.7167 13.1049 13.525 13.4049 13.275 13.6549C13.025 13.9049 12.725 14.0965 12.375 14.2299C12.025 14.3632 11.5833 14.4465 11.05 14.4799C10.3833 14.5132 9.36667 14.5299 8 14.5299C6.63333 14.5299 5.61667 14.5132 4.95 14.4799C4.41667 14.4465 3.975 14.3632 3.625 14.2299C3.275 14.0965 2.975 13.9049 2.725 13.6549C2.475 13.4049 2.28333 13.1049 2.15 12.7549C2.01667 12.4049 1.93333 11.9632 1.9 11.4299C1.86667 10.7632 1.85 9.73822 1.85 8.35488C1.85 6.97155 1.86667 5.96322 1.9 5.32988C1.93333 4.79655 2.01667 4.35488 2.15 4.00488C2.28333 3.65488 2.475 3.35488 2.725 3.10488C2.975 2.85488 3.275 2.66322 3.625 2.52988C3.975 2.39655 4.43333 2.31322 5 2.27988C5.56667 2.24655 6.35 2.22988 7.35 2.22988ZM12 3.47988C11.7667 3.47988 11.5583 3.56322 11.375 3.72988C11.1917 3.89655 11.1 4.10488 11.1 4.35488C11.1 4.60488 11.1917 4.82155 11.375 5.00488C11.5583 5.18822 11.775 5.27988 12.025 5.27988C12.275 5.27988 12.4833 5.18822 12.65 5.00488C12.8167 4.82155 12.9 4.60488 12.9 4.35488C12.9 4.10488 12.8167 3.89655 12.65 3.72988C12.4833 3.56322 12.2667 3.47988 12 3.47988ZM8 4.52988C7.3 4.52988 6.65 4.69655 6.05 5.02988C5.45 5.36322 4.975 5.82988 4.625 6.42988C4.275 7.02988 4.1 7.67988 4.1 8.37988C4.1 9.07988 4.275 9.72988 4.625 10.3299C4.975 10.9299 5.45 11.3965 6.05 11.7299C6.65 12.0632 7.3 12.2299 8 12.2299C8.7 12.2299 9.34167 12.0549 9.925 11.7049C10.5083 11.3549 10.9667 10.8882 11.3 10.3049C11.6333 9.72155 11.8 9.07988 11.8 8.37988C11.8 7.67988 11.6333 7.03822 11.3 6.45488C10.9667 5.87155 10.5083 5.40488 9.925 5.05488C9.34167 4.70488 8.7 4.52988 8 4.52988ZM8 5.87988C8.43333 5.87988 8.85 5.98822 9.25 6.20488C9.65 6.42155 9.95833 6.72988 10.175 7.12988C10.3917 7.52988 10.5 7.94655 10.5 8.37988C10.5 8.81322 10.3917 9.22988 10.175 9.62988C9.95833 10.0299 9.65 10.3382 9.25 10.5549C8.85 10.7715 8.43333 10.8799 8 10.8799C7.3 10.8799 6.70833 10.6382 6.225 10.1549C5.74167 9.67155 5.5 9.07988 5.5 8.37988C5.5 7.67988 5.74167 7.08822 6.225 6.60488C6.70833 6.12155 7.3 5.87988 8 5.87988Z"
													fill="#C2873F"></path>
											</g>
											<defs>
												<clipPath id="clip0_368_8">
													<rect width="15" height="15" fill="white" transform="matrix(1 0 0 -1 0.5 15.8799)"></rect>
												</clipPath>
											</defs>
										</svg></a></li>
								<li class="footer-socials__item"><a href="#" class="footer-socials__link"><svg width="16" height="16"
											viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_160_425)">
												<path
													d="M8.05 2.72978H8.15C9.11667 2.76312 10.0333 2.79645 10.9 2.82979C12.4333 2.86312 13.4167 2.94645 13.85 3.07979C14.1833 3.14645 14.4667 3.30479 14.7 3.55479C14.9333 3.80479 15.0917 4.08812 15.175 4.40479C15.2583 4.72145 15.3333 5.16312 15.4 5.72979L15.45 6.12979C15.4833 6.76312 15.5 7.37979 15.5 7.97979V8.07979C15.5 8.71312 15.4667 9.34645 15.4 9.97979V10.1798C15.3333 10.8131 15.2583 11.2965 15.175 11.6298C15.0917 11.9631 14.9333 12.2465 14.7 12.4798C14.4667 12.7131 14.1833 12.8798 13.85 12.9798C13.3833 13.1131 12.35 13.1965 10.75 13.2298C9.85 13.2631 8.95 13.2798 8.05 13.2798H7.95C7.05 13.2798 6.13333 13.2631 5.2 13.2298H4.65C3.38333 13.1631 2.56667 13.0798 2.2 12.9798C1.83333 12.8798 1.53333 12.7131 1.3 12.4798C1.06667 12.2465 0.9 11.9631 0.8 11.6298C0.7 11.2965 0.633333 10.8131 0.6 10.1798V9.97979C0.533333 9.34645 0.5 8.71312 0.5 8.07979V7.97979C0.5 7.37979 0.516667 6.81312 0.55 6.27979L0.6 5.72979C0.666667 5.16312 0.741667 4.72145 0.825 4.40479C0.908333 4.08812 1.06667 3.80479 1.3 3.55479C1.53333 3.30479 1.81667 3.14645 2.15 3.07979C2.55 2.97979 3.38333 2.89645 4.65 2.82979L5.2 2.77978C6.1 2.77978 6.98333 2.76312 7.85 2.72978H8.05ZM6.5 5.77979V10.2798L10.4 8.02979L6.5 5.77979Z"
													fill="#C2873F"></path>
											</g>
											<defs>
												<clipPath id="clip0_160_425">
													<rect width="15" height="15" fill="white" transform="matrix(1 0 0 -1 0.5 15.8799)"></rect>
												</clipPath>
											</defs>
										</svg></a></li>
								<li class="footer-socials__item"><a href="#" class="footer-socials__link"><svg width="16" height="16"
											viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_160_429)">
												<path
													d="M0.5 1.92988C0.5 1.66322 0.608333 1.42155 0.825 1.20488C1.04167 0.988216 1.3 0.879883 1.6 0.879883H14.4C14.7 0.879883 14.9583 0.988216 15.175 1.20488C15.3917 1.42155 15.5 1.66322 15.5 1.92988V14.8299C15.5 15.0965 15.3917 15.3382 15.175 15.5549C14.9583 15.7715 14.7 15.8799 14.4 15.8799H1.6C1.3 15.8799 1.04167 15.7715 0.825 15.5549C0.608333 15.3382 0.5 15.0965 0.5 14.8299V1.92988ZM5.15 13.4299V6.67988H2.9V13.4299H5.15ZM4 5.72988C4.4 5.72988 4.71667 5.62155 4.95 5.40488C5.18333 5.18822 5.29167 4.91322 5.275 4.57988C5.25833 4.24655 5.14167 3.96322 4.925 3.72988C4.70833 3.49655 4.40833 3.37988 4.025 3.37988C3.64167 3.37988 3.33333 3.49655 3.1 3.72988C2.86667 3.96322 2.75 4.24655 2.75 4.57988C2.75 4.91322 2.86667 5.18822 3.1 5.40488C3.33333 5.62155 3.63333 5.72988 4 5.72988ZM8.6 13.4299V9.62988C8.6 9.39655 8.63333 9.21322 8.7 9.07988C8.76667 8.87988 8.9 8.69655 9.1 8.52988C9.3 8.36322 9.55 8.27988 9.85 8.27988C10.25 8.27988 10.5417 8.41322 10.725 8.67988C10.9083 8.94655 11 9.32988 11 9.82988V13.4299H13.25V9.52988C13.25 8.52988 13.0083 7.77155 12.525 7.25488C12.0417 6.73822 11.4167 6.47988 10.65 6.47988C10.1167 6.47988 9.66667 6.61322 9.3 6.87988C9.03333 7.04655 8.8 7.29655 8.6 7.62988V6.67988H6.35C6.38333 6.94655 6.38333 8.14655 6.35 10.2799V13.4299H8.6Z"
													fill="#C2873F"></path>
											</g>
											<defs>
												<clipPath id="clip0_160_429">
													<rect width="15" height="15" fill="white" transform="matrix(1 0 0 -1 0.5 15.8799)"></rect>
												</clipPath>
											</defs>
										</svg></a></li>
							</ul>
						</div>
					</div>
					<aside class="article-sidebar"><label for="#" class="search"><input type="text" placeholder="Пошук по новинам"
								class="search__input"> <button class="search__btn"><svg width="24" height="24" viewBox="0 0 24 24"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M9.17643 0C4.11245 0 0 4.11245 0 9.17643C0 14.2404 4.11245 18.3529 9.17643 18.3529C14.2404 18.3529 18.3529 14.2404 18.3529 9.17643C18.3529 4.11245 14.2404 0 9.17643 0ZM9.17643 1.41176C13.4625 1.41176 16.9411 4.89033 16.9411 9.17643C16.9411 13.4625 13.4625 16.9411 9.17643 16.9411C4.89033 16.9411 1.41176 13.4625 1.41176 9.17643C1.41176 4.89033 4.89033 1.41176 9.17643 1.41176Z"
										fill="black" fill-opacity="0.4" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M23.7939 22.7943L15.6636 14.6654C15.3883 14.3901 14.9407 14.3901 14.6655 14.6654C14.3902 14.9407 14.3902 15.3882 14.6655 15.6635L22.7944 23.7938C23.0711 24.0691 23.5172 24.0691 23.7939 23.7938C24.0692 23.5171 24.0692 23.071 23.7939 22.7943Z"
										fill="black" fill-opacity="0.4" />
								</svg></button></label>
						<div class="article-posts">
							<h3 class="article-posts__title">Останні пости</h3>
							<ul class="article-posts__items">
								<li class="article-posts__item"><a href="#">
										<div class="article-posts__images">
											<picture>
												<source srcset="<?php bloginfo('template_url'); ?>/assets/images/article.webp"
													type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/article.jpg"
													alt="#" class="article-posts__img">
											</picture>
										</div>
										<div class="article-posts__text">
											<h5 class="article-posts__name">Назва статті</h5>
											<p class="article-posts__desc">Короткий опис</p>
										</div>
									</a></li>
								<li class="article-posts__item"><a href="#">
										<div class="article-posts__images">
											<picture>
												<source srcset="<?php bloginfo('template_url'); ?>/assets/images/article.webp"
													type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/article.jpg"
													alt="#" class="article-posts__img">
											</picture>
										</div>
										<div class="article-posts__text">
											<h5 class="article-posts__name">Назва статті</h5>
											<p class="article-posts__desc">Короткий опис</p>
										</div>
									</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</main>

<?php get_footer(); ?>