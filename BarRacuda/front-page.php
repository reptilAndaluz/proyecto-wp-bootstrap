<?php
    // Aquí tenemos que anexar header.php
    get_header();
?>


		<!-- Preloader-->
		<div class="page-loader">
			<div class="loader"></div>
		</div>
		<!-- Preloader end-->

		<!-- Header-->
		<header class="header header-transparent">
			<!-- Top bar-->
			<div class="top-bar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<ul class="list-left-align">
								<li>Mon - Fri: 07:00 am - 05:00 pm</li>
								<li><abbr title="Phone">P:</abbr> +39 02 87 21 43 19</li>
								<li><a href="start.html" data-color="#e1be64">Demos</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="top-bar-tools">
								<li><a class="open-offcanvas" href="#"><i class="ti-menu"></i></a></li>
								<li><a href="sign-in.html"><i class="ti-search"></i></a></li>
								<li><a href="sign-in.html"><i class="ti-user"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="navigation navigation-center">
				<div class="container-fluid">
					<!-- Brand-->
					<div class="inner-header"><a class="inner-brand" href="index.html"><img class="brand-dark" src="<?php echo bloginfo('template_directory'); ?>/assets/images/logo.png" width="74px" alt=""><img class="brand-light" src="<?php echo bloginfo('template_directory'); ?>/assets/images/logo-light.png" width="74px" alt=""></a></div>
					<!-- Navigation-->
					<?php get_template_part('nav');?>
			</div>
		</header>
		<!-- Header end-->

		<!-- Wrapper-->
		<div class="wrapper">

			<!-- Hero-->
			<section class="module-cover parallax fullscreen" id="home" data-background="<?php echo bloginfo('template_directory'); ?>/assets/images/module-6.jpg" data-overlay="1" data-gradient="1">
				<div class="container">
					<div class="row">
						<div class="col-md-12 m-auto">
							<div class="text-center">
								<h6 class="text-uppercase">Wine and Dine</h6>
								<h1 class="display-1">Bar Racuda Tavern</h1>
								<p>See how your users experience your website in realtime or view <br/> trends to see any changes in performance over time.</p>
								<div class="space" data-mY="40px"></div><a class="btn btn-white" href="#">Purchase now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Hero end-->

			<!-- Our Story-->
			<section class="module" id="story">
				<div class="container">
					<div class="row">
						<div class="col-md-6 m-auto text-center">
							<p class="subtitle">Discover our story</p>
							<h1 class="display-1">Welcome to Tavern</h1>
							<p class="lead">See how your users experience your website in realtime or view <br/> trends to see any changes in performance over time.</p>
							<div class="divider-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="40px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p><a class="photo" href="assets/images/main/1.jpg"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/main/1.jpg" alt=""></a></p>
						</div>
						<div class="col-md-6">
							<p><a class="photo" href="assets/images/main/3.jpg"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/main/3.jpg" alt=""></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="40px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 m-auto">
							<div class="text-justify">
								<p>Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts. View busy dine oh in knew if even. Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts. View busy dine oh in knew if even. Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts. View busy dine oh in knew if even. Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts. View busy dine oh in knew if even.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="text-center"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/main/sign.png" alt=""></div>
						</div>
					</div>
				</div>
			</section>
			<!-- Our Story End-->

			<!-- Special Offers-->
			<section class="module bg-gray" id="special">
				<div class="container">
					<div class="row">
						<div class="col-md-6 m-auto text-center">
							<p class="subtitle">This is Vela Cuisine</p>
							<h1 class="display-1">Special Offers</h1>
							<p class="lead">See how your users experience your website in realtime or view <br/> trends to see any changes in performance over time.</p>
							<div class="divider-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel menu-carousel" data-carousel-options="{&quot;nav&quot;: false}">
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/1.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/1.jpg" alt="">
										<div class="menu-classic-item-price">$15
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Masala-Spiced Chickpeas</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/2.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/2.jpg" alt="">
										<div class="menu-classic-item-price">$18
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Kung Pao Chicken</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/3.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/3.jpg" alt="">
										<div class="menu-classic-item-price">$13
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Sweet &amp; Spicy Pork</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/4.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/4.jpg" alt="">
										<div class="menu-classic-item-price">$12
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Chicken Stew</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/5.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/5.jpg" alt="">
										<div class="menu-classic-item-price">$21
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Jalapeno-Mango Salsa</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/6.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/6.jpg" alt="">
										<div class="menu-classic-item-price">$17
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Spicy Fried Rice &amp; Bacon</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
								<div class="menu-classic-item">
									<div class="menu-classic-item-img"><a class="photo" href="assets/images/menu/1.jpg"></a><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/menu/1.jpg" alt="">
										<div class="menu-classic-item-price">$15
										</div>
									</div>
									<div class="menu-classic-item-inner">
										<h6>Masala-Spiced Chickpeas</h6>
										<p>Vanilla, Various Fruit, Cookies</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Special Offers End-->

			<!-- Popular Dishes-->
			<section class="module" id="popular">
				<div class="container">
					<div class="row">
						<div class="col-md-6 m-auto text-center">
							<p class="subtitle">Tasty and crunchy</p>
							<h1 class="display-1">Popular Dishes</h1>
							<p class="lead">See how your users experience your website in realtime or view <br/> trends to see any changes in performance over time.</p>
							<div class="divider-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="menu-simple">
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/1.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Wild Mushroom Bucatini with Kale</span><span class="pull-right">$10</span></h6>
										<p>Cheese, Garlic, Potato, Pork</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/2.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Lemon and Garlic Green Beans</span><span class="pull-right">$12</span></h6>
										<p>Pork meat, Sauces, Potato</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/3.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>American Brunch Combo Menu</span><span class="pull-right">$21</span></h6>
										<p>Bacon, Rice, Vegetables</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/4.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Smoked Paprika Hummus</span><span class="pull-right">$18</span></h6>
										<p>Shrimp, Vegetables, Sauce</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/5.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Italian Source Mushroom</span><span class="pull-right">$21</span></h6>
										<p>Steak, Spices, Sauces</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-simple">
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/6.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Lemon and Garlic Green Beans</span><span class="pull-right">$12</span></h6>
										<p>Pork meat, Sauces, Potato</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/1.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>American Brunch Combo Menu</span><span class="pull-right">$21</span></h6>
										<p>Bacon, Rice, Vegetables</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/2.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Smoked Paprika Hummus</span><span class="pull-right">$18</span></h6>
										<p>Shrimp, Vegetables, Sauce</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/3.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Italian Source Mushroom</span><span class="pull-right">$21</span></h6>
										<p>Steak, Spices, Sauces</p>
									</div>
								</div>
								<div class="menu-simple-item">
									<div class="menu-simple-item-img"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/widgets/4.jpg" alt=""></div>
									<div class="menu-simple-item-inner">
										<h6><span>Wild Mushroom Bucatini with Kale</span><span class="pull-right">$10</span></h6>
										<p>Cheese, Garlic, Potato, Pork</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
							<p class="text-center"><a class="btn btn-black" href="#">View our menu</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- Popular Dishes End-->

			<!-- Gallery-->
			<section class="module no-gutter p-0" id="gallery">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-4 col-lg-12 bg-gray">
							<div class="gallery-shorcode-desc">
								<div class="vertical-body">
									<div class="vertical">
										<div class="text-center">
											<p class="subtitle">Photos</p>
											<h1 class="display-1">Gallery</h1>
											<p class="lead">Map where your photos were taken and discover local <br> points of interest. Map where your photos.</p>
											<div class="divider-border"></div>
											<div class="space" data-mY="60px"></div><a class="btn btn-black" href="#">View Gallery</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-12">
							<div class="gallery gallery-shorcode">
								<div class="gallery-item">
									<div class="gallery-image" data-background="assets/images/portfolio/1.jpg"></div><a href="assets/images/portfolio/1.jpg" title="Title 1"></a>
								</div>
								<div class="gallery-item">
									<div class="gallery-image" data-background="assets/images/portfolio/5.jpg"></div><a href="assets/images/portfolio/5.jpg" title="Title 2"></a>
								</div>
								<div class="gallery-item">
									<div class="gallery-image" data-background="assets/images/portfolio/3.jpg"></div><a href="assets/images/portfolio/3.jpg" title="Title 3"></a>
								</div>
								<div class="gallery-item">
									<div class="gallery-image" data-background="assets/images/portfolio/4.jpg"></div><a href="assets/images/portfolio/4.jpg" title="Title 4"></a>
								</div>
								<div class="gallery-item">
									<div class="gallery-image" data-background="assets/images/portfolio/2.jpg"></div><a href="assets/images/portfolio/2.jpg" title="Title 5"></a>
								</div>
								<div class="gallery-item">
									<div class="gallery-image" data-background="assets/images/portfolio/6.jpg"></div><a href="assets/images/portfolio/6.jpg" title="Title 6"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Gallery end-->

			<!-- Services-->
			<section class="module" id="services">
				<div class="container">
					<div class="row">
						<div class="col-md-6 m-auto text-center">
							<p class="subtitle">For your comfort</p>
							<h1 class="display-1">Stunning Things</h1>
							<p class="lead">See how your users experience your website in realtime or view <br/> trends to see any changes in performance over time.</p>
							<div class="divider-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row appear-childer">
						<div class="col-md-3">
							<div class="icon-box text-center">
								<div class="icon-box-icon"><span class="icon-clock"></span></div>
								<div class="icon-box-title">
									<h5>Opened 24/7</h5>
								</div>
								<div class="icon-box-content">
									<p>Map where your photos were taken and discover local points of interest. Map where your photos.</p>
								</div>
								<div class="icon-box-link"><a href="#"></a></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="icon-box text-center">
								<div class="icon-box-icon"><span class="icon-streetsign"></span></div>
								<div class="icon-box-title">
									<h5>Free Parking</h5>
								</div>
								<div class="icon-box-content">
									<p>Map where your photos were taken and discover local points of interest. Map where your photos.</p>
								</div>
								<div class="icon-box-link"><a href="#"></a></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="icon-box text-center">
								<div class="icon-box-icon"><span class="icon-compass"></span></div>
								<div class="icon-box-title">
									<h5>Central Location</h5>
								</div>
								<div class="icon-box-content">
									<p>Map where your photos were taken and discover local points of interest. Map where your photos.</p>
								</div>
								<div class="icon-box-link"><a href="#"></a></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="icon-box text-center">
								<div class="icon-box-icon"><span class="icon-linegraph"></span></div>
								<div class="icon-box-title">
									<h5>High Quality</h5>
								</div>
								<div class="icon-box-content">
									<p>Map where your photos were taken and discover local points of interest. Map where your photos.</p>
								</div>
								<div class="icon-box-link"><a href="#"></a></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 m-auto">
							<p class="text-center">* See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
						</div>
					</div>
				</div>
			</section>
			<!-- Services End-->

			<!-- Testimonials-->
			<section class="module parallax" data-background="assets/images/module-4.jpg" data-overlay="0.7">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="80px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel review-slides" data-carousel-options="{&quot;autoPlay&quot;: &quot;5000&quot;}">
								<div class="review">
									<div class="review-icons"><img src="../../../s3.amazonaws.com/uifaces/faces/twitter/rem/128.jpg" alt="">
									</div>
									<div class="review-content">
										<blockquote>
											<p class="display-2">Sea food and the best view. Nothing in excess.</p>
										</blockquote>
									</div>
									<div class="review-author"><span>Albert Einstein</span></div>
								</div>
								<div class="review">
									<div class="review-icons"><img src="../../../s3.amazonaws.com/uifaces/faces/twitter/dannpetty/128.jpg" alt="">
									</div>
									<div class="review-content">
										<blockquote>
											<p class="display-2">Perhaps the most romantic place in the city.</p>
										</blockquote>
									</div>
									<div class="review-author"><span>Ralph Waldo Emerson</span></div>
								</div>
								<div class="review">
									<div class="review-icons"><img src="../../../s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg" alt="">
									</div>
									<div class="review-content">
										<blockquote>
											<p class="display-2">I love this place!</p>
										</blockquote>
									</div>
									<div class="review-author"><span>Marilyn Monroe</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="80px"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- Testimonials end-->

			<!-- Chef-->
			<section class="module bg-gray p-b-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<p class="subtitle">Professional cook team</p>
							<h1 class="display-1">In the Kitchen</h1>
							<p class="lead">Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.</p>
							<div class="divider-border-left"></div>
							<div class="space" data-mY="60px"></div><a class="btn btn-black" href="#">View our menu</a>
						</div>
						<div class="col-md-6"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/chef-1.png" alt=""></div>
					</div>
				</div>
			</section>
			<!-- Chef End-->

			<!-- News-->
			<section class="module" id="news">
				<div class="container">
					<div class="row">
						<div class="col-md-6 m-auto text-center">
							<p class="subtitle">From the blog</p>
							<h1 class="display-1">Our Last Posts</h1>
							<p class="lead">See how your users experience your website in realtime or view <br/> trends to see any changes in performance over time.</p>
							<div class="divider-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row appear-childer blog-grid">

                        <!--Empieza bucle-->
                        <?php
                            $args = array(
                                'posts_per_page' => 3,
                            );
                            $last_posts = new WP_Query($args);
                            if($last_posts->have_posts()):
                                while($last_posts->have_posts()):
                                    $last_posts->the_post();
                        ?>

                                    <div class="col-md-4 post-item">

                                        <!-- Post-->
                                        <article class="post">
                                            <div class="post-preview"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                                            <div class="post-wrapper">
                                                <div class="post-header">
                                                    <h2 class="post-title display-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                </div>
                                                <div class="post-content">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                                <div class="post-more"><a href="<?php the_permalink(); ?>">read more...</a></div>
                                            </div>
                                        </article>
                                        <!-- Post end-->
                                    </div>

                        <!--Termina bucle-->
                        <?php
                                endwhile;
                                wp_reset_postdata();
                            else:
                                echo "No posts published yet...";
                            endif;
                        ?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="60px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="text-center"><a class="btn btn-circle btn-gray" href="#">All Recipes</a></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space" data-mY="100px"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- News end-->

			<svg class="footer-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewbox="0 0 100 100" preserveaspectratio="none">
				<path d="M0 100 C40 0 60 0 100 100 Z"></path>
			</svg>
<?php
    // Aquí tenemos que anexar footer.php
    get_footer();
?>

		