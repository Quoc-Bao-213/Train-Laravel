<header>
    <!--HEADER-TOP-->
    <div id="header-top-wrap">
        <section id="header-top">
            <a href="mailto:questions@redsamurai.com">questions@redsamurai.com</a>
            <p>(044) 555 123 1234 / 1235</p>
            <ul class="social">
                <li><a href="#" class="social-icon fb"></a></li>
                <li><a href="#" class="social-icon twt"></a></li>
                <li><a href="#" class="social-icon gplus"></a></li>
            </ul>
            <article id="login">
                <a href="#" class="login popup">Login</a>
                <p>Not a Member? <a href="#" class="register popup">Register Now</a></p>
            </article>
        </section>
    </div>
    <!--/HEADER-TOP-->

    <!--MAIN-NAV-->
    <div id="main-nav-wrap">
        <nav id="main-nav">
            <a href="index.html">
                <figure>
                    <img src="{{ asset('images/logo-banner.png') }}" alt="logo">
                    <figcaption>Red Samurai</figcaption>
                </figure>
            </a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#specials">Specials</a></li>
                <li class="sub-items"><a href="#">Features</a>
                    <ul>
                        <li><a href="shopr.html">Shop Right</a></li>
                        <li><a href="shopl.html">Shop Left</a></li>
                        <li><a href="guest-checkout.html">Guest Checkout</a></li>
                        <li><a href="confirmed-checkout.html">Confirmed Checkout</a></li>
                        <li><a href="profile.html">Profile Page</a></li>
                        <li><a href="account-forms.html" target="_blank">Account forms</a></li>
                    </ul>
                </li>
                <li class="sub-items"><a href="#">Shop</a>
                    <ul>
                        <li><a href="faq.html">How to Shop - FAQ</a></li>
                        <li><a href="sushi-rolls.html">Sushi and Rolls</a></li>
                        <li><a href="cold-entrees.html">Cold Entrees</a></li>
                        <li><a href="soups-dishes.html">Soups and Hot Dishes</a></li>
                        <li><a href="sweets-desserts.html">Sweets and Desserts</a></li>
                        <li><a href="beverages-drinks.html">Beverages and Drinks</a></li>
                    </ul>
                </li>
                <li><a href="#combos">Combos</a></li>
                <li class="sub-items cart-items"><a href="#">Cart<span class="cart">8</span></a>
                    <ul>
                        <li><p>Your Item(s):<span>8</span></p></li>
                        <li><p>Total:<span>$353,50</span></p></li>
                        <li><a href="checkout.html" class="button red">Proceed to Checkout</a>
                        <img src="{{ asset('images/menu-logo.png') }}" alt="logo">
                        <p class="greet">Thanks for your Purchase!</p>
                        <img src="{{ asset('images/menu-serrated-border.png') }}" alt="serrated-border" >
                        </li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#" id="pull"></a> 
        </nav>
    </div>
    <!--/MAIN-NAV-->

    <!--HEADER-BOTTOM-->
    <div id="header-bottom-wrap">
        <section id="header-bottom">
            <h1 class="wow fadeInLeft">The Best <span class="remarked">Asian Cuisine</span><span class="right">In All The City</span></h1>
            <a href="#" class="order wow bounceInDown" data-wow-delay=".5s">Start Your Online Order!</a>
            <img src="{{ asset('images/asian-girl.png') }}" alt="asian-girl" class="wow fadeInRight">
            <!--MAIN-SLIDER-->
            <div id="main-slider-wrap">
                <ul id="main-slider">
                    <!--SLIDE-->
                    <li>
                        <div class="circle small">
                            <figure class="imgLiquidFill">
                                <img src="{{ asset('images/menu-03.jpg') }}" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <div class="fill"></div>
                        </div>
                        <article class="promo">
                            <h6>Try Our <span class="remarked">Chef’s Recommendation!</span></h6>
                            <p>Lorem ipsum <span>dolor sit amet</span>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        </article>
                        <article class="price">
                            <h3>$55</h3>
                            <p>Valid for Month</p>
                            <a href="#" class="button red">Add to Cart</a>
                        </article>
                    </li>
                    <!--/SLIDE-->

                    <!--SLIDE-->
                    <li>
                        <div class="circle small">
                            <figure class="imgLiquidFill">
                                <img src="{{ asset('images/menu-02.jpg') }}" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <div class="fill"></div>
                        </div>
                        <article class="promo">
                            <h6>Check Today's <span class="remarked">Featured Dish</span></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <span>incididunt ut</span> labore et dolore magna aliqua. Ut enim ad minim.</p>
                        </article>
                        <article class="price">
                            <h3>$120</h3>
                            <p>Only for Today</p>
                            <a href="#" class="button red">Add to Cart</a>
                        </article>
                    </li>
                    <!--/SLIDE-->

                    <!--SLIDE-->
                    <li>
                        <div class="circle small">
                            <figure class="imgLiquidFill">
                                <img src="{{ asset('images/menu-01.jpg') }}" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <div class="fill"></div>
                        </div>
                        <article class="promo">
                            <h6>Week's <span class="remarked">Special Combo</span></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate alias quibusdam suscipit ea non consequuntur <span>fugit hic</span> quia deleniti odit.</p>
                        </article>
                        <article class="price">
                            <h3>$90</h3>
                            <p>Valid for Week</p>
                            <a href="#" class="button red">Add to Cart</a>
                        </article>
                    </li>
                    <!--/SLIDE-->
                </ul>
                <!--SLIDER CONTROLS-->
                <span id="previous" class="arrow left"></span>
                <span id="next" class="arrow right"></span>
            </div>
            <!--/MAIN-SLIDER-->
        </section>	
    </div>
    <!--/HEADER-BOTTOM-->
</header>