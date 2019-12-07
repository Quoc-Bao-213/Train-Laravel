<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Samurai | Home</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/tooltipster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    
	<!-- favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>

	<!--HEADER-->
	@include('partials.header')
	<!--/HEADER-->

	<!--TOP-DISHES-->
	<div id="top-dishes-wrap">
		<section id="top-dishes">
			<ul>
				<li class="wow bounceInRight">
					<div class="circle medium">
						<div class="fill"></div>
					</div>
					<h4>Sushi and Rolls</h4>
					<p>Lorem ipsum dolor sit amet, consectetur ed adipisicing elit, sed do eiusmod tempor incididuut labore consectetur.</p>
					<a href="sushi-rolls.html" class="button red">Go to Sushi</a>
				</li>
				<li class="wow bounceInRight">
					<div class="circle medium">
						<div class="fill"></div>
					</div>
					<h4>Soups and Hot Dishes</h4>
					<p>Lorem ipsum dolor sit amet, consectetur ed adipisicing elit, sed do eiusmod tempor incididuut labore consectetur.</p>
					<a href="soups-dishes.html" class="button red">Go to Soups</a>
				</li>
				<li class="wow bounceInRight">
					<div class="circle medium">
						<div class="fill"></div>
					</div>
					<h4>Sweets and Desserts</h4>
					<p>Lorem ipsum dolor sit amet, consectetur ed adipisicing elit, sed do eiusmod tempor incididuut labore consectetur.</p>
					<a href="sweets-desserts.html" class="button red">Go to Desserts</a>
				</li>
			</ul>
			<div class="cleaner"></div>
		</section>
	</div>
	<!--/TOP-DISHES-->

	<!--SPECIALS-->
	<div id="specials-wrap">
		<section id="specials">
			<h2>Samurai <span>Specials</span></h2>
			<hr><hr>
			<ul class="dishes grid">
				<!--DISH-->
				<li class="wow fadeInLeft">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-00.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill red tooltip">
								<img src="{{ asset('images/star-hover.png') }}" alt="star">
							</div>
						</a>
					</div>
					<article>
						<a href="salmon-rolls.html"><h6>Salmon Rolls</h6></a>
						<ul class="rate stars">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">1</p>
							<p class="measure">srv</p>
						</div>
						<p>$45.00</p>
					</div>
					<a href="#" class="button red">Add to Cart</a>
				</li>
				<!--/DISH-->
				
				<!--DISH-->
				<li class="wow fadeInLeft">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-01.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill red tooltip">
								<img src="{{ asset('images/star-hover.png') }}" alt="star">
							</div>
						</a>
					</div>
					<article>
						<span class="ribbon new"></span>
						<a href="roudon-soup.html"><h6>Roudon Soup</h6></a>
						<ul class="rate stars">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">1</p>
							<p class="measure">srv</p>
						</div>
						<p>$67.00</p>
					</div>
					<a href="#" class="button red">Add to Cart</a>
				</li>
				<!--/DISH-->

				<!--DISH-->
				<li class="wow fadeInLeft">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-02.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill red tooltip">
								<img src="{{ asset('images/star-hover.png') }}" alt="star">
							</div>
						</a>
					</div>
					<article>
						<a href="springtime-sushi.html"><h6>Springtime Sushi</h6></a>
						<ul class="rate stars">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">15</p>
							<p class="measure">pcs</p>
						</div>
						<p>$69.00</p>
					</div>
					<a href="#" class="button red">Add to Cart</a>
				</li>
				<!--/DISH-->

				<!--DISH-->
				<li class="wow fadeInLeft">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-03.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill gold tooltip">
								<img src="{{ asset('images/star-hover.png') }}" alt="star">
							</div>
						</a>
					</div>
					<article>
						<span class="ribbon featured"></span>
						<a href="kerinachi-rice.html"><h6>Kerinachi Rice</h6></a>
						<ul class="rate stars gold">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">1</p>
							<p class="measure">srv</p>
						</div>
						<p>$47.50</p>
					</div>
					<a href="#" class="button gold">Add to Cart</a>
				</li>
				<!--/DISH-->

				<!--DISH-->
				<li class="wow fadeInRight">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-07.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill red tooltip">
								<img src="{{ asset('images/heart-hover.png') }}" alt="heart">
							</div>
						</a>
					</div>
					<article>
						<a href="octopus-takoyaki.html"><h6>Red Octopus Takoyaki</h6></a>
						<ul class="rate hearts">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">10</p>
							<p class="measure">pcs</p>
						</div>
						<p>$20.00</p>
					</div>
					<a href="#" class="button red">Add to Cart</a>
				</li>
				<!--/DISH-->
				
				<!--DISH-->
				<li class="wow fadeInRight">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-09.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill gold tooltip">
								<img src="{{ asset('images/heart-hover.png') }}" alt="heart">
							</div>
						</a>
					</div>
					<article>
						<span class="ribbon featured"></span>
						<a href="steamed-salmon.html"><h6>Steamed Ryu Salmon</h6></a>
						<ul class="rate hearts gold">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">1</p>
							<p class="measure">srv</p>
						</div>
						<p>$78.00</p>
					</div>
					<a href="#" class="button gold">Add to Cart</a>
				</li>
				<!--/DISH-->

				<!--DISH-->
				<li class="wow fadeInRight">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-10.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill red tooltip">
								<img src="{{ asset('images/heart-hover.png') }}" alt="heart">
							</div>
						</a>
					</div>
					<article>
						<span class="ribbon new"></span>
						<a href="chocolate-cookies.html"><h6>Crispy Chocolate Cookies</h6></a>
						<ul class="rate hearts">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">6</p>
							<p class="measure">pcs</p>
						</div>
						<p>$14.99</p>
					</div>
					<a href="#" class="button red">Add to Cart</a>
				</li>
				<!--/DISH-->

				<!--DISH-->
				<li class="wow fadeInRight">
					<div class="circle medium">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/menu-04.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="#">
							<div class="fill red tooltip">
								<img src="{{ asset('images/heart-hover.png') }}" alt="heart">
							</div>
						</a>
					</div>
					<article>
						<a href="onion-soup.html"><h6>Spicy Onion Soup</h6></a>
						<ul class="rate hearts">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="empty"></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.</p>
					</article>
					<div class="price">
						<div>
							<p class="quantity">1</p>
							<p class="measure">srv</p>
						</div>
						<p>$50.00</p>
					</div>
					<a href="#" class="button red">Add to Cart</a>
				</li>
				<!--/DISH-->
			</ul>
			<div class="cleaner"></div>
			<h6>And this is just a peek</h6>
			<h3>Check out all the delicious dishes we have in <span class="remarked">our menu!</span></h3>
			<a href="shopr.html" class="button red">Click here to enter the shop</a>
		</section>
	</div>
	<!--/SPECIALS-->

	<!--TEAM-->
	<div id="team-wrap">
		<section id="team">
			<h2>Our <span>Dream Team</span></h2>
			<hr><hr>
			<ul>
				<!--TEAM MEMBER-->
				<li class="wow bounceInLeft">
					<div class="circle big">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/team-01.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="mailto:tomoyokinomoto@redsamurai.com">
							<div class="fill red">
								<p>tomoyokinomoto@redsamurai.com</p>
							</div>
						</a>
					</div>
					<h4>Tomoyo Kinomoto</h4>
					<p class="title">Founder and CEO</p>
					<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <span>sed do eiusmod</span> temp incididunt ut labore et</p>
					<ul class="social big">
						<li><a href="#" class="social-icon fb"></a></li>
						<li><a href="#" class="social-icon twt"></a></li>
						<li><a href="#" class="social-icon gplus"></a></li>
					</ul>
				</li>
				<!--TEAM MEMBER-->
				
				<!--TEAM MEMBER-->
				<li class="wow bounceInUp">
					<div class="circle big">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/team-02.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="mailto:kdhiroshi@redsamurai.com">
							<div class="fill red">
								<p>kdhiroshi@redsamurai.com</p>
							</div>
						</a>
					</div>
					<h4>Kenny D. Hiroshi</h4>
					<p class="title">Sushi Master</p>
					<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <span>sed do eiusmod</span> temp incididunt ut labore et</p>
					<ul class="social big">
						<li><a href="#" class="social-icon fb"></a></li>
						<li><a href="#" class="social-icon twt"></a></li>
						<li><a href="#" class="social-icon gplus"></a></li>
					</ul>
				</li>
				<!--TEAM MEMBER-->

				<!--TEAM MEMBER-->
				<li class="wow bounceInRight">
					<div class="circle big">
						<figure class="imgLiquidFill">
							<img src="{{ asset('images/team-03.jpg') }}" alt="dish">
						</figure>
						<div class="shadow"></div>
						<a href="mailto:fvaletine@redsamurai.com">
							<div class="fill red">
								<p>fvaletine@redsamurai.com</p>
							</div>
						</a>
					</div>
					<h4>Faye Valentine</h4>
					<p class="title">General Supervisor</p>
					<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <span>sed do eiusmod</span> temp incididunt ut labore et</p>
					<ul class="social big">
						<li><a href="#" class="social-icon fb"></a></li>
						<li><a href="#" class="social-icon twt"></a></li>
						<li><a href="#" class="social-icon gplus"></a></li>
					</ul>
				</li>
				<!--TEAM MEMBER-->
			</ul>
			<div class="cleaner"></div>
		</section>
	</div>
	<!--/TEAM-->

	<!--HISTORY-->
	<div id="history-wrap">
		<section id="history">
			<h2>Our <span>History</span></h2>
			<hr><hr>
			<!--HISTORY-ITEM-->
			<article>
				<figure>
					<img src="{{ asset('images/oh-01.jpg') }}" alt="history">
				</figure>
				<article>
					<h4>The beginnings of the <span class="remarked">red samurai</span></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</article>
			</article>
			<!--/HISTORY-ITEM-->

			<!--HISTORY-ITEM-->
			<article>
				<figure>
					<img src="{{ asset('images/oh-02.jpg') }}" alt="history">
				</figure>
				<article>
					<h4>The <span class="remarked">red samurai</span> today</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</article>
			</article>
			<!--/HISTORY-ITEM-->
		</section>
	</div>
	<!--HISTORY-->

	<!--PHONE-ORDER-->
	<div id="phone-order-wrap">
		<section id="phone-order">
			<img src="{{ asset('images/order-now.png') }}" alt="order-now" class="wow shake">
			<img src="{{ asset('images/hand-phone.png') }}" alt="phone" class="wow fadeInRight">
			<article>
				<h4>Make your <span class="remarked">phone order</span></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p class="street">31st Street 1235, NY:</p>
				<h2>(044) 555 - 123 - 1234</h2>
			</article>
		</section>
	</div>
	<!--/PHONE-ORDER-->

	<!--COMBOS-->
	<div id="combos-wrap">
		<section id="combos">
			<h2>Offers and <span>Combos</span></h2>
			<hr><hr>
			<ul>
				<!--COMBO ITEM-->
				<li>
					<img src="{{ asset('images/red_temple_top.png') }}" alt="temple top">
					<div class="red">
						<img src="{{ asset('images/temple_detail_l.png') }}" alt="detail left">
						<img src="{{ asset('images/temple_detail_r.png') }}" alt="detail right">
						<p>Summertime Sushi (10pcs) <span>2</span></p>
						<p>Salmon Rolls (12pcs) <span>1</span></p>
						<p>Pork Yakimeshi (1srv) <span>4</span></p>
						<p>Mochi Sweets (5pcs) <span>2</span></p>
						<p>Small Caramel Cake (1cake) <span>1</span></p>
						<p>Fushirikawa Beer (500ml) <span>1</span></p>
						<p>Small Sake (200ml) <span>1</span></p>
					</div>
					<p class="combo-desc">The Ronin Combo</p>
					<p class="combo-price">$225</p>
					<p class="portion">Ideal to share between <span>4 persons</span></p>
					<img src="{{ asset('images/red_temple_bottom.png') }}" alt="temple mid">
					<img src="{{ asset('images/temple-detail-b.png') }}" alt="temple bottom">
					<a href="#" class="button red">Add to cart</a>
				</li>
				<!--/COMBO ITEM-->
				
				<!--COMBO ITEM-->
				<li>
					<img src="{{ asset('images/gold_temple_top.png') }}" alt="temple top">
					<div class="gold">
						<img src="{{ asset('images/temple_detail_l.png') }}" alt="detail left">
						<img src="{{ asset('images/temple_detail_r.png') }}" alt="detail right">
						<p>Springtime Sushi (5pcs) <span>3</span></p>
						<p>Salmon Rolls (6pcs) <span>3</span></p>
						<p>Pork Yakimeshi (1srv) <span>8</span></p>
						<p>Mochi Sweets (5pcs) <span>5</span></p>
						<p>Small Caramel Cake (1cake) <span>1</span></p>
						<p>Fushirikawa Beer (500ml) <span>3</span></p>
						<p>Small Sake (200ml) <span>1</span></p>
					</div>
					<p class="combo-desc">The Gold Combo</p>
					<p class="combo-price">$390</p>
					<p class="portion">Ideal to share between <span>8 persons</span></p>
					<img src="{{ asset('images/gold_temple_bottom.png') }}" alt="temple mid">
					<img src="{{ asset('images/temple-detail-b.png') }}" alt="temple bottom">
					<a href="#" class="button gold">Add to cart</a>
				</li>
				<!--/COMBO ITEM-->

				<!--COMBO ITEM-->
				<li>
					<img src="{{ asset('images/red_temple_top.png') }}" alt="temple top">
					<div class="red">
						<img src="{{ asset('images/temple_detail_l.png') }}" alt="detail left">
						<img src="{{ asset('images/temple_detail_r.png') }}" alt="detail right">
						<p>Summertime Sushi (5pcs) <span>1</span></p>
						<p>Salmon Rolls (6pcs) <span>1</span></p>
						<p>Pork Yakimeshi (1srv) <span>2</span></p>
						<p>Mochi Sweets (5pcs) <span>1</span></p>
						<p>Small Caramel Cake (1cake) <span>1</span></p>
						<p>Fushirikawa Beer (500ml) <span>1</span></p>
						<p>Small Sake (200ml) <span>1</span></p>
					</div>
					<p class="combo-desc">The Hiror Combo</p>
					<p class="combo-price">$590</p>
					<p class="portion">Ideal to share between <span>2 persons</span></p>
					<img src="{{ asset('images/red_temple_bottom.png') }}" alt="temple mid">
					<img src="{{ asset('images/temple-detail-b.png') }}" alt="temple bottom">
					<a href="#" class="button red">Add to cart</a>
				</li>
				<!--/COMBO ITEM-->
			</ul>
			<h6>You don't like them?</h6>
			<h3>Don't worry! We change the combos <span class="remarked">every month!</span></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</section>
	</div>
	<!--/COMBOS-->

	<!--REVIEWS-->
	<section id="reviews">
		<ul id="review-slider">
			<li>
				<div class="circle small">
					<figure class="imgLiquidFill">
						<img src="{{ asset('images/team-03.jpg') }}" alt="review">
					</figure>
					<div class="shadow"></div>
					<div class="fill"></div>
				</div>
				<h3>"The best springtime rolls in town"<br><span>Faye Valentine, Age 29</span></h3>
			</li>
			<li>
				<div class="circle small">
					<figure class="imgLiquidFill">
						<img src="{{ asset('images/team-01.jpg') }}" alt="review">
					</figure>
					<div class="shadow"></div>
					<div class="fill"></div>
				</div>
				<h3>"The best service i've seen"<br><span>Tomoyo Kinomoto, Age 24</span></h3>
			</li>
			<li>
				<div class="circle small">
					<figure class="imgLiquidFill">
						<img src="{{ asset('images/team-02.jpg') }}" alt="review">
					</figure>
					<div class="shadow"></div>
					<div class="fill"></div>
				</div>
				<h3>"The best prices you can get"<br><span>Kenny D. Hiroshi, Age 32</span></h3>
			</li>
		</ul>
	</section>
	<!--/REVIEWS-->

	<!--STATS-->
	<div id="stats-wrap">
		<section id="stats">
			<ul>
				<!--STAT-->
				<li>
					<div class="stats" data-percent="25">
						<div class="data">
							<span>52</span>
						</div>
					</div>
					<h4>Years of <br><span>Experience</span></h4>
				</li>
				<!--/STAT-->

				<!--STAT-->
				<li>
					<div class="stats" data-percent="65">
						<div class="data">
							<span>19230</span>
						</div>
					</div>
					<h4>Happy <br><span>Customers</span></h4>
				</li>
				<!--/STAT-->

				<!--STAT-->
				<li>
					<div class="stats" data-percent="80">
						<div class="data">
							+<span>78750</span>
						</div>
					</div>
					<h4>Dishes <br><span>Served</span></h4>
				</li>
				<!--/STAT-->

				<!--STAT-->
				<li>
					<div class="stats" data-percent="20">
						<div class="data">
							<span>10</span>
						</div>
					</div>
					<h4>Branches <br><span>in USA</span></h4>
				</li>
				<!--/STAT-->
			</ul>
		</section>
	</div>
	<!--/STATS-->

	<!--CONTACT-->
	<div id="contact-wrap">
		<section id="contact">
			<h2><span>Contact</span> Us</h2>
			<hr><hr>
			<ul>
				<!--CONTACT ITEM-->
				<li class="wow fadeInLeft">
					<div class="circle medium">
						<div class="fill"></div>
					</div>
					<article>
						<h6>New York</h6>
						<p>W 39th Street 1234, New York</p>
						<h6>Chicago</h6>
						<p>Colombrus Ave 1234, Chicago</p>
					</article>
				</li>
				<!--/CONTACT ITEM-->

				<!--CONTACT ITEM-->
				<li class="wow fadeInDown">
					<div class="circle medium">
						<div class="fill"></div>
					</div>
					<article>
						<h6>New York</h6>
						<p>(044) 555 123 1234 / 1235</p>
						<h6>Chicago</h6>
						<p>(044) 555 123 1234 / 1235</p>
					</article>
				</li>
				<!--/CONTACT ITEM-->

				<!--CONTACT ITEM-->
				<li class="wow fadeInRight">
					<div class="circle medium">
						<div class="fill"></div>
					</div>
					<article>
						<h6>New York</h6>
						<p>info.newyork@redsamurai.com</p>
						<h6>Chicago</h6>
						<p>info.chicago@redsamurai.com</p>
					</article>
				</li>
				<!--/CONTACT ITEM-->
			</ul>
			<div class="cleaner"></div>
			<!--CONTACT FORM-->
			<form id="ctc">
				<!--ERROR MSGS-->
				<label for="email" class="error email-wrng">You have to enter a valid email...</label>
				<label for="message" class="error msg-wrng">You have to enter a message...</label>
				<!--/ERROR MSGS-->
				<div>
					<label for="name">Your Name</label>
					<input type="text" placeholder="Jhonathan Ray" id="name" name="name">
					<label for="email">Your Email Address</label>
					<input type="text" placeholder="jhonny.envato@yourdomain.com" id="email" name="email">
					<label for="subject">Your Subject</label>
					<input type="text" placeholder="Delivery Zones Inquiry" id="subject" name="subject">
				</div>
				<div>
					<label for="message">Your Message</label>
					<textarea name="message" id="message" placeholder="Write your message here..."></textarea>
				</div>
			</form>
			<button id="ctc-submit" form="ctc">Send Message</button>
			<!--CONTACT FORM-->
		</section>
	</div>
	<!--/CONTACT-->

	<!--MAP-->
	<section id="map"></section>
	<!--/MAP-->

	<!--FOOTER-->
	@include('partials.footer')
	<!--/FOOTER-->

<!--jQuery-->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<!--bxSlider-->
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<!--imgLiquid-->
<script src="{{ asset('js/imgLiquid-min.js') }}"></script>
<!-- Tooltipster -->
<script src="{{ asset('js/jquery.tooltipster.min.js') }}"></script>
<!--easyPieChart-->
<script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
<!--Waypoints-->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!--WoW Animations-->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--Menu-->
<script src="{{ asset('js/menu.js') }}"></script>
<!--Main-->
<script src="{{ asset('js/main.js') }}"></script>
<!--Contact-->
<script src="{{ asset('js/contact.js') }}"></script>
<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Google Maps Config -->
<script src="{{ asset('js/gmaps.js') }}"></script>
<!--Login/Register/Reset Forms-->
<script src="{{ asset('js/forms.js') }}"></script>
</body>
</html>